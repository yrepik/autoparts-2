<?php
// Text
$_['text_title']				= 'Hóa đơn Klarna - trả tiền trong vòng 14 ngày';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Tài khoản Klarna yêu cầu một số thông tin bổ sung trước khi họ có thể xử lý đơn hàng của bạn.';
$_['text_male']					= 'Nam';
$_['text_female']				= 'Nữ';
$_['text_year']					= 'Năm';
$_['text_month']				= 'Tháng';
$_['text_day']					= 'Ngày';
$_['text_comment']				= 'Klarna\'s Invoice ID: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Giới tính';
$_['entry_pno']					= 'Số cá nhân';
$_['entry_dob']					= 'Ngày sinh';
$_['entry_phone_no']			= 'Số điện thoại';
$_['entry_street']				= 'Đường phố';
$_['entry_house_no']			= 'Số nhà.';
$_['entry_house_ext']			= 'House Ext.';
$_['entry_company']				= 'Số đăng ký doanh nghiệp';

// Help
$_['help_pno']					= 'Vui lòng nhập số sổ bảo hiểm xã hội của bạn ở đây.';
$_['help_phone_no']				= 'Vui lòng nhập số điện thoại của bạn.';
$_['help_street']				= 'Xin lưu ý rằng hàng hóa chỉ có thể được giao tới địa chỉ đăng ký nếu thanh toán bằng Klarna.';
$_['help_house_no']				= 'Vui lòng nhập số điện thoại nhà của bạn.';
$_['help_house_ext']			= 'Xin vui lòng nhập phần mở rộng của số nhà của bạn ở đây. Ví dụ:. A, B, C, màu đỏ, màu xanh ect.';
$_['help_company']				= 'Vui lòng nhập số đăng ký công ty của bạn';

// Error
$_['error_deu_terms']			= 'Bạn phải đồng ý với chính sách bảo mật của Klarna (Datenschutz)';
$_['error_address_match']		= 'Địa chỉ thanh toán và vận chuyển phải phù hợp nếu bạn muốn sử dụng hóa đơn Klarna';
$_['error_network']				= 'Lỗi xuất hiện khi kết nối với Klarna. Xin vui lòng thử lại sau.';