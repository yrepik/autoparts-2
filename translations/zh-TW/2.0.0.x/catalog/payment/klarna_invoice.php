<?php
// Text
$_['text_title']				= 'Klarna Invoice -14 天內繳付';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Klarna 帳戶需要一些額外的資訊，然後才能處理您的訂單。';
$_['text_male']					= '男性';
$_['text_female']				= '女性';
$_['text_year']					= '年';
$_['text_month']				= '月';
$_['text_day']					= '日';
$_['text_comment']				= 'Klarna\'s Invoice ID: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= '性別';
$_['entry_pno']					= '個人號碼';
$_['entry_dob']					= '出生日期';
$_['entry_phone_no']			= '電話號碼';
$_['entry_street']				= '街道';
$_['entry_house_no']			= '房號';
$_['entry_house_ext']			= '門牌分號';
$_['entry_company']				= '公司註冊號碼';

// Help
$_['help_pno']					= '請輸入你的社會安全號碼。';
$_['help_phone_no']				= '請輸入您的電話號碼。';
$_['help_street']				= '請注意使用 Klarna 作為付款方式時，只能使用註冊地址作為收貨地址。';
$_['help_house_no']				= '請輸入你的門牌號碼。';
$_['help_house_ext']			= '請提交您房子的擴建。如 A、 B、 C、 紅色、 藍色等。';
$_['help_company']				= '請輸入您的公司註冊號碼';

// Error
$_['error_deu_terms']			= '你必須同意 Klarna 的私隱政策 (Datenschutz)';
$_['error_address_match']		= '如果您想要使用 Klarna 發票，帳單地址和送貨地址必須相同';
$_['error_network']				= '連接到 Klarna 時發生錯誤，請稍後再試。';