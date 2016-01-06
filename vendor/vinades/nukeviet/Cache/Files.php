<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2014 VINADES.,JSC.
 * All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate 1/9/2010, 3:21
 */

namespace NukeViet\Cache;

class Files
{

    private $_CacheDir = '/tmp';

    private $_Lang = 'vi';

    private $_Cache_Prefix = '';

    private $_Db;

    private $_FunCompress = '';

    private $_FunUnCompress = '';

    public function __construct($CacheDir, $Lang, $Cache_Prefix)
    {
        $this->_CacheDir = $CacheDir;
        $this->_Lang = $Lang;
        $this->_Cache_Prefix = $Cache_Prefix;

        // Xac dinh function nen string
        if (function_exists('gzcompress') and function_exists('gzuncompress')) {
            $this->_FunCompress = 'gzcompress';
            $this->_FunUnCompress = 'gzuncompress';
        } elseif (function_exists('gzdeflate') and function_exists('gzinflate')) {
            $this->_FunCompress = 'gzdeflate';
            $this->_FunUnCompress = 'gzinflate';
        }
    }

    /**
     *
     * @param mixed $pattern
     * @return
     *
     */
    private function _delete($modname, $pattern)
    {
        $dir = $this->_CacheDir . '/' . $modname;

        if (is_dir($dir) and $dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                if (preg_match($pattern, $file)) {
                    unlink($dir . '/' . $file);
                }
            }
            closedir($dh);
        }
    }

    /**
     *
     * @param mixed $sys
     *
     * @return
     *
     */
    public function delAll($sys = true)
    {
        if ($dh = opendir($this->_CacheDir)) {
            if ($sys) {
                $pattern = '/(.*)\.cache$/';
            } else {
                $pattern = '/^' . $this->_Lang . '\_(.*)\.cache$/';
            }

            while (($modname = readdir($dh)) !== false) {
                if (preg_match('/^([a-z0-9\_]+)$/', $modname)) {
                    $this->_Delete($modname, $pattern);
                }
            }
            closedir($dh);
        }
    }

    /**
     *
     * @param mixed $module_name
     * @param mixed $lang
     *
     * @return void
     */
    public function delMod($module_name, $lang = '')
    {
        if (!empty($lang)) {
            $pattern = '/^' . $lang . '\_(.*)\.cache$/';
        } else {
            $pattern = '/(.*)\.cache$/';
        }

        $this->_Delete($module_name, $pattern);
    }

    /**
     *
     * @param mixed $module_name
     * @param mixed $filename
     * @return
     *
     */
    public function getItem($module_name, $filename)
    {
        if (!preg_match('/([a-z0-9\_]+)\.cache/', $filename)) {
            return false;
        }

        if (!is_file($this->_CacheDir . '/' . $module_name . '/' . $filename)) {
            return false;
        }

        $content = file_get_contents($this->_CacheDir . '/' . $module_name . '/' . $filename);
        if (!empty($this->_FunUnCompress)) {
            $content = call_user_func($this->_FunUnCompress, $content);
        }

        return $content;
    }

    /**
     *
     * @param mixed $module_name
     * @param mixed $filename
     * @param mixed $content
     * @return
     *
     */
    public function setItem($module_name, $filename, $content)
    {
        if (!preg_match('/([a-z0-9\_]+)\.cache/', $filename)) {
            return false;
        }

        if (!is_dir($this->_CacheDir . '/' . $module_name)) {
            mkdir($this->_CacheDir . '/' . $module_name, 0777, true);
        }

        if (!empty($this->_FunCompress)) {
            $content = call_user_func($this->_FunCompress, $content);
        }

        return file_put_contents($this->_CacheDir . '/' . $module_name . '/' . $filename, $content);
    }

    /**
     *
     * @param resource $db
     */
    public function setDb($db)
    {
        $this->_Db = $db;
    }

    /**
     *
     * @param mixed $sql
     * @param mixed $key
     * @param mixed $modname
     * @param mixed $lang
     * @return
     *
     */
    public function db($sql, $key, $modname, $lang = '')
    {
        $list = array();

        if (empty($sql)) {
            return $list;
        }

        if (empty($lang)) {
            $lang = $this->_Lang;
        }

        $cache_file = $lang . '_' . md5($sql) . '_' . $this->_Cache_Prefix . '.cache';

        if (($cache = $this->getItem($modname, $cache_file)) != false) {
            $list = unserialize($cache);
        } else {
            if (($result = $this->_Db->query($sql)) !== false) {
                $a = 0;
                while ($row = $result->fetch()) {
                    $key2 = (!empty($key) and isset($row[$key])) ? $row[$key] : $a;
                    $list[$key2] = $row;
                    ++$a;
                }
                $result->closeCursor();

                $this->setItem($modname, $cache_file, serialize($list));
            }
        }

        return $list;
    }
}