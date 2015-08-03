<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate 2-10-2010 20:59
 */

if( ! defined( 'NV_ADMIN' ) ) die( 'Stop!!!' );

/**
 * Note:
 * 	- Module var is: $lang, $module_file, $module_data, $module_upload, $module_theme, $module_name
 * 	- Accept global var: $db, $db_config, $global_config
 */

if( $module_name == 'siteterms' )
{
	$sth = $db->prepare( "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . " (id, title, alias, image, imagealt, description, bodytext, keywords, socialbutton, activecomm, layout_func, gid, weight, admin_id, add_time, edit_time, status) VALUES (1, 'Chính sách bảo mật Quyền riêng tư', 'Chinh-sach-bao-mat-Quyen-rieng-tu', '', '', '', :bodytext, '', 0, 4, '', 0, 1, 1, " . NV_CURRENTTIME . ", " . NV_CURRENTTIME . ", 1)" );
	$bodytext = '<h2 style="text-align: justify;">Điều 1: Thu thập thông tin</h2><h3 style="text-align: justify;">1.1. Thu thập tự động:</h3><div style="text-align: justify;">Như mọi website hiện đại khác, Chúng tôi sẽ thu thập địa chỉ IP và các thông tin web tiêu chuẩn khác của bạn như: loại trình duyệt, các trang bạn truy cập trong quá trình sử dụng dịch vụ, thông tin về máy tính &amp; thiết bị mạng v.v… cho mục đích phân tích thông tin phục vụ việc bảo mật và giữ an toàn cho hệ thống.</div><h3 style="text-align: justify;">1.2. Thu thập từ các khai báo của chính bạn:</h3><div style="text-align: justify;">Các thông tin do bạn khai báo cho chúng tôi trong quá trình làm việc như: đăng ký tài khoản, liên hệ với chúng tôi... cũng sẽ được chúng tôi lưu trữ phục vụ công việc chăm sóc khách hàng sau này.</div><h3 style="text-align: justify;">1.3. Thu thập thông tin thông qua việc đặt cookies:</h3><p style="text-align: justify;">Như mọi website hiện đại khác, khi bạn truy cập website, chúng tôi (hoặc các công cụ theo dõi hoặc thống kê hoạt động của website do các đối tác cung cấp) sẽ đặt một số File dữ liệu gọi là Cookies lên đĩa cứng hoặc bộ nhớ máy tính của bạn.</p><p style="text-align: justify;">Một trong số những Cookies này có thể tồn tại lâu để thuận tiện cho bạn trong quá trình sử dụng, ví dụ như: lưu Email của bạn trong trang đăng nhập để bạn không phải nhập lại v.v…</p><h3 style="text-align: justify;">1.4. Thu thập và lưu trữ thông tin trong quá khứ:</h3><p style="text-align: justify;">Bạn có thể thay đổi thông tin cá nhân của mình bất kỳ lúc nào bằng cách sử dụng chức năng tương ứng. Tuy nhiên chúng tôi sẽ lưu lại những thông tin bị thay đổi để chống các hành vi xóa dấu vết gian lận.</p><h2 style="text-align: justify;"><br  />Điều 2: Lưu trữ &amp; Bảo vệ thông tin</h2><div style="text-align: justify;">Hầu hết các thông tin được thu thập sẽ được lưu trữ tại cơ sở dữ liệu của chúng tôi.<br  /><br  />Chúng tôi bảo vệ dữ liệu cá nhân của các bạn bằng các hình thức như: mật khẩu, tường lửa, mã hóa cùng các hình thức thích hợp khác và chỉ cấp phép việc truy cập và xử lý dữ liệu cho các đối tượng phù hợp, ví dụ chính bạn hoặc các nhân viên có trách nhiệm xử thông tin với bạn thông qua các bước xác định danh tính phù hợp.</div><h2 style="text-align: justify;"><br  />Điều 3: Sử dụng thông tin</h2><p style="text-align: justify;">Thông tin thu thập được sẽ được chúng tôi sử dụng để:</p><blockquote><p style="text-align: justify;">o Cung cấp các dịch vụ hỗ trợ &amp; chăm sóc khách hàng.</p><p style="text-align: justify;">o Thực hiện giao dịch thanh toán &amp; gửi các thông báo trong quá trình giao dịch.</p><p style="text-align: justify;">o Xử lý khiếu nại, thu phí &amp; giải quyết sự cố.</p><p style="text-align: justify;">o Ngăn chặn các hành vi có nguy cơ rủi ro, bị cấm hoặc bất hợp pháp và đảm bảo tuân thủ đúng chính sách “Thỏa thuận người dùng”.</p><p style="text-align: justify;">o Đo đạc, tùy biến &amp; cải tiến dịch vụ, nội dung và hình thức của website.</p><p style="text-align: justify;">o Gửi bạn các thông tin về chương trình Marketing, các thông báo &amp; chương trình khuyến mại.</p><p style="text-align: justify;">o So sánh độ chính xác của thông tin cá nhân của bạn trong quá trình kiểm tra với bên thứ ba.</p></blockquote><h2 style="text-align: justify;"><br  />Điều 4: Tiếp nhận thông tin từ các đối tác</h2><div style="text-align: justify;">Khi sử dụng các công cụ giao dịch và thanh toán thông qua internet, chúng tôi có thể tiếp nhận thêm các thông tin về bạn như địa chỉ username, Email, số tài khoản ngân hàng... Chúng tôi kiểm tra những thông tin này với cơ sở dữ liệu người dùng của mình nhằm xác nhận rằng bạn có phải là khách hàng của chúng tôi hay không nhằm giúp việc thực hiện các dịch vụ cho bạn được thuận lợi.<br  /><br  />Các thông tin tiếp nhận được sẽ được chúng tôi bảo mật như những thông tin mà chúng tôi thu thập được trực tiếp từ bạn.</div><h2 style="text-align: justify;"><br  />Điều 5: Chia sẻ thông tin với bên thứ ba</h2><p style="text-align: justify;">Chúng tôi sẽ không chia sẻ thông tin cá nhân, thông tin tài chính... của bạn cho các bên thứ 3 trừ khi được sự đồng ý của chính bạn hoặc khi chúng tôi buộc phải tuân thủ theo các quy định pháp luật hoặc khi có yêu cầu từ cơ quan công quyền có thẩm quyền.</p><h2 style="text-align: justify;"><br  />Điều 6: Thay đổi chính sách bảo mật</h2><p style="text-align: justify;">Chính sách Bảo mật này có thể thay đổi theo thời gian. Chúng tôi sẽ không giảm quyền của bạn theo Chính sách Bảo mật này mà không có sự đồng ý rõ ràng của bạn. Chúng tôi sẽ đăng bất kỳ thay đổi Chính sách Bảo mật nào trên trang này và, nếu những thay đổi này quan trọng, chúng tôi sẽ cung cấp thông báo nổi bật hơn (bao gồm, đối với một số dịch vụ nhất định, thông báo bằng email về các thay đổi của Chính sách Bảo mật).<br  />&nbsp;</p><p style="text-align: right;">Tham khảo từ website <a href="http://webnhanh.vn/vi/thiet-ke-web/detail/Chinh-sach-bao-mat-Quyen-rieng-tu-Privacy-Policy-2147/">webnhanh.vn</a></p>';
	$sth->bindParam( ':bodytext', $bodytext, PDO::PARAM_STR, strlen( $bodytext ) );
	$sth->execute();
}
else
{
	$sth = $db->prepare( "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . " (id, title, alias, image, imagealt, description, bodytext, keywords, socialbutton, activecomm, layout_func, gid, weight, admin_id, add_time, edit_time, status) VALUES (1, 'Giới thiệu về NukeViet 3.0', 'Gioi-thieu-ve-NukeViet-3-0', '', '', '', :bodytext, '', 0, 4, '', 0, 1, 1, 1275320174, 1275320174, 1)" );
	$bodytext = "<p> NukeViet 3.0 là thế hệ CMS hoàn toàn mới do người Việt phát triển. Lần đầu tiên ở Việt Nam, một bộ nhân mã nguồn mở được đầu tư bài bản và chuyên nghiệp cả về tài chính, nhân lực và thời gian. Kết quả là 100% dòng code của NukeViet được viết mới hoàn toàn, NukeViet 3 sử dụng xHTML, CSS với Xtemplate và jquery cho phép vận dụng Ajax uyển chuyển cả trong công nghệ nhân.</p><p> Tận dụng các thành tựu mã nguồn mở có sẵn nhưng NukeViet 3 vẫn đảm bảo rằng từng dòng code là được code tay (NukeViet 3 không sử dụng bất cứ một nền tảng (framework) nào). Điều này có nghĩa là NukeViet 3 hoàn toàn không phụ thuộc vào bất cứ framework nào trong quá trình phát triển của mình; Bạn hoàn toàn có thể đọc hiểu để tự lập trình trên NukeViet 3 nếu bạn biết PHP và MySQL (đồng nghĩa với việc NukeViet 3 hoàn toàn mở và dễ nghiên cứu cho bất cứ ai muốn tìm hiểu về code của NukeViet).</p><p style=\"text-align: justify;\"> Bộ nhân NukeViet 3 ngoài việc thừa hưởng sự đơn giản vốn có của NukeViet nhưng không vì thế mà quên nâng cấp mình. Hệ thống NukeViet 3 hỗ trợ công nghệ đa nhân module. Chúng tôi gọi đó là công nghệ ảo hóa module. Công nghệ này cho phép người sử dụng có thể khởi tạo hàng ngàn module một cách tự động mà không cần động đến một dòng code. Các module được sinh ra từ công nghệ này gọi là module ảo. Module ảo là module được nhân bản từ một module bất kỳ của hệ thống nukeviet nếu module đó cho phép tạo module ảo.</p><p style=\"text-align: justify;\"> NukeViet 3 cũng hỗ trợ việc cài đặt từ động 100% các module, block, theme từ Admin Control Panel, người sử dụng có thể cài module mà không cần làm bất cứ thao tác phức tạp nào. NukeViet 3 còn cho phép bạn đóng gói module để chia sẻ cho người khác.</p><p style=\"text-align: justify;\"> NukeViet 3 đa ngôn ngữ 100% với 2 loại: đa ngôn ngữ giao diện và đa ngôn ngữ database. NukeViet 3 có tính năng&nbsp; cho phép người quản trị tự xây dựng ngôn ngữ mới cho site. Cho&nbsp; phép đóng gói file ngôn ngữ để chia sẻ cho cộng đồng... câu chuyện về nukeviet 3 sẽ còn dài vì một loạt các tính năng cao cấp vẫn đang được phát triển. Hãy sử dụng và phổ biến NukeViet 3 để tự mình tận hưởng những thành quả mới nhất từ công nghệ web mã nguồn mở. Cuối cùng NukeViet 3 là món của của <a href=\"http://vinades.vn\" target=\"_blank\">VINADES.,JSC</a> gửi tới cộng đồng để cảm ơn cộng đồng đã ủng hộ thời gian qua, bây giờ NukeViet 3 được đưa trở lại cộng đồng để cộng đồng tiếp tục nuôi nấng và chăm sóc NukeViet lớn mạnh hơn.</p><p style=\"text-align: justify;\"> Mọi ý kiến và yêu cầu trợ giúp về NukeViet 3 các bạn có thể gửi lên diễn đàn NukeViet tại địa chỉ: <a href=\"http://nukeviet.vn/phpbb/\" target=\"_blank\">http://nukeviet.vn/phpbb/</a>. Việc giúp đỡ hoàn toàn miễn phí và mọi góp ý của bạn đều được hoan nghênh.</p> <div style=\"text-align: center;\"> <object height=\"400\" width=\"480\"><param name=\"movie\" value=\"//www.youtube.com/v/dG66RocXSeY?rel=0&amp;autoplay=1&amp;hl=pt_BR&amp;version=3\" /><param name=\"allowFullScreen\" value=\"true\" /><param name=\"allowscriptaccess\" value=\"always\" /><embed allowfullscreen=\"true\" allowscriptaccess=\"always\" height=\"400\" src=\"//www.youtube.com/v/dG66RocXSeY?rel=0&amp;autoplay=1&amp;hl=pt_BR&amp;version=3\" type=\"application/x-shockwave-flash\" width=\"480\"></embed></object>	<br /> Video clip Giới thiệu mã nguồn mở NukeViet trong bản tin Tiêu điểm của chương trình Xã hội thông tin<br /> (Đài truyền hình kỹ thuật số VTC) phát sóng lúc 20h chủ nhật, ngày 05-09-2010 trên VTC1</div>";
	$sth->bindParam( ':bodytext', $bodytext, PDO::PARAM_STR, strlen( $bodytext ) );
	$sth->execute();

	$sth = $db->prepare( "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . " (id, title, alias, image, imagealt, description, bodytext, keywords, socialbutton, activecomm, layout_func, gid, weight, admin_id, add_time, edit_time, status) VALUES (2, 'Giới thiệu về công ty chuyên quản NukeViet', 'Gioi-thieu-ve-cong-ty-chuyen-quan-NukeViet', '', '', '', :bodytext, '', 0, 4, '', 0, 2, 1, 1275320224, 1275320224, 1)" );
	$bodytext = "<p style=\"text-align: justify;\"> <strong>Công ty cổ phần phát triển nguồn mở Việt Nam</strong> (VINADES.,JSC) là công ty mã nguồn mở đầu tiên của Việt Nam sở hữu riêng một mã nguồn mở nổi tiếng và đang được sử dụng ở hàng ngàn website lớn nhỏ trong mọi lĩnh vực.<br /> <br /> Ra đời từ hoạt động của tổ chức nguồn mở NukeViet (từ năm 2004) và chính thức được thành lập đầu 2010 tại Hà Nội, khi đó báo chí đã gọi VINADES.,JSC là &quot;Công ty mã nguồn mở đầu tiên tại Việt Nam&quot;.<br /> <br /> Ngay sau khi thành lập, VINADES.,JSC đã thành công trong việc xây dựng <strong><a href=\"http://nukeviet.vn/\" target=\"_blank\">NukeViet</a></strong> thành một <a href=\"http://nukeviet.vn/\" target=\"_blank\">mã nguồn mở</a> thuần Việt. Với khả năng mạnh mẽ, cùng các ưu điểm vượt trội về công nghệ, độ an toàn và bảo mật, NukeViet đã được hàng ngàn website lựa chọn sử dụng trong năm qua. Ngay khi ra mắt phiên bản mới năm 2010, NukeViet đã tạo nên hiệu ứng truyền thông chưa từng có trong lịch sử mã nguồn mở Việt Nam. Tiếp đó, năm 2011 Mã nguồn mở NukeViet đã giành giải thưởng Nhân tài đất Việt cho sản phẩm Công nghệ thông tin đã được ứng dụng rộng rãi.<br /></p><div style=\"text-align: center;\"> <object height=\"400\" width=\"480\"><param name=\"movie\" value=\"//www.youtube.com/v/ZOhu2bLE-eA?rel=0&amp;autoplay=1&amp;hl=pt_BR&amp;version=3\" /><param name=\"allowFullScreen\" value=\"true\" /><param name=\"allowscriptaccess\" value=\"always\" /><embed allowfullscreen=\"true\" allowscriptaccess=\"always\" height=\"400\" src=\"//www.youtube.com/v/ZOhu2bLE-eA?rel=0&amp;autoplay=1&amp;hl=pt_BR&amp;version=3\" type=\"application/x-shockwave-flash\" width=\"480\"></embed></object><br /> <strong>Video clip trao giải Nhân tài đất Việt 2011.</strong><br /> Sản phẩm &quot;Mã nguồn mở NukeViet&quot; đã nhận giải cao nhất (Giải ba, không có giải nhất, giải nhì) của Giải thưởng Nhân Tài Đất Việt 2011 ở lĩnh vực Công nghệ thông tin - Sản phẩm đã có ứng dụng rộng rãi.</div><p style=\"text-align: justify;\"><br /> Tự chuyên nghiệp hóa mình, thoát khỏi mô hình phát triển tự phát, công ty đã nỗ lực vươn mình ra thế giới và đang phấn đấu trở thành một trong những hiện tượng của thời &quot;dotcom&quot; ở Việt Nam.<br /> <br /> Để phục vụ hoạt động của công ty, công ty liên tục mở rộng và tuyển thêm nhân sự ở các vị trí: Lập trình viên, chuyên viên đồ họa, nhân viên kinh doanh... Hãy liên hệ ngay để gia nhập VINADES.,JSC và cùng chúng tôi trở thành một công ty phát triển nguồn mở thành công nhất Việt Nam.</p> <p>Nếu bạn có nhu cầu triển khai các hệ thống <a href=\"http://toasoandientu.vn\" target=\"_blank\">Tòa Soạn Điện Tử</a>, <a href=\"http://webnhanh.vn\" target=\"_blank\">phần mềm trực tuyến</a>, <a href=\"http://vinades.vn\" target=\"_blank\">thiết kế web</a> theo yêu cầu hoặc dịch vụ có liên quan, hãy liên hệ công ty chuyên quản NukeViet theo thông tin dưới đây:</p><p><strong><span style=\"font-family: Tahoma; color: rgb(255, 69, 0); font-size: 14px;\">CÔNG TY CỔ PHẦN PHÁT TRIỂN NGUỒN MỞ VIỆT NAM</span></strong><br /> <strong>VIET NAM OPEN SOURCE DEVELOPMENT JOINT STOCK COMPANY</strong> (<strong>VINADES.,JSC</strong>)<br />Website: <a href=\"http://vinades.vn/\">http://vinades.vn</a> | <a href=\"http://nukeviet.vn/\">http://nukeviet.vn</a> | <a href=\"http://webnhanh.vn/\">http://webnhanh.vn</a><br />Trụ sở: Phòng 2004 - Tòa nhà CT2 Nàng Hương, 583 Nguyễn Trãi, Hà Nội.<br /> - Tel: +84-4-85872007<br /> - Fax: +84-4-35500914<br /> - Email: <a href=\"mailto:contact@vinades.vn\">contact@vinades.vn</a></p>";
	$sth->bindParam( ':bodytext', $bodytext, PDO::PARAM_STR, strlen( $bodytext ) );
	$sth->execute();
}

$db->query( "UPDATE " . $db_config['prefix'] . "_config SET config_value = '0' WHERE module = '" . $module_name . "' AND config_name = 'activecomm' AND lang='" . $lang . "'" );