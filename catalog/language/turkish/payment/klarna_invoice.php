<?php
// Text
$_['text_title']				= 'Klarna fatura - 14 gün içinde ödeme';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+ %s) <script type="text/javascript"> var şartlar yeni Klarna.Terms.Invoice = ({el: \'klarna_invoice_toc\', bayram: \'%s\', ülke: \'%s\', şarj: %s});</script>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span> <script type="text/javascript"> var şartlar yeni Klarna.Terms.Invoice = ({el: \'klarna_invoice_toc\', bayram: \'%s\', ülke: \'%s\'});</script>';
$_['text_additional']			= 'Önce sipariş proccess olabilir Klarna fatura bazı ek bilgiler gerekir.';
$_['text_male']					= 'Erkek';
$_['text_female']				= 'Kadın';
$_['text_year']					= 'Yıl';
$_['text_month']				= 'Ay';
$_['text_day']					= 'Gün';
$_['text_comment']				= 'Klarna\'s Invoice ID: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Cinsiyet';
$_['entry_pno']					= 'Özel sayı';
$_['entry_dob']					= 'Doğum tarihi';
$_['entry_phone_no']			= 'Telefon Numarası';
$_['entry_street']				= 'Sokak';
$_['entry_house_no']			= 'Ev No.';
$_['entry_house_ext']			= 'Ev Ext.';
$_['entry_company']				= 'Firma kayıt numarası';

// Help
$_['help_pno']					= 'Sosyal güvenlik numaran buraya giriniz.';
$_['help_phone_no']				= 'Lütfen telefon numaranızı girin.';
$_['help_street']				= 'Lütfen teslimat sadece kayıtlı adresine Klarna ile ödeme gerçekleşebilir olduğunu unutmayın.';
$_['help_house_no']				= 'Lütfen telefon numaranızı girin.';
$_['help_house_ext']			= 'Senin evin uzantısı gönderin. Örneğin A, B, C, kırmızı, mavi ect.';
$_['help_company']				= 'Lütfen şirketinizin kayıt numarasını girin';

// Error
$_['error_deu_terms']			= 'Klarna\'nın Gizlilik Politikası (Datenschutz) kabul etmeniz gerekir';
$_['error_address_match']		= 'Klarna fatura kullanmak istiyorsanız, fatura ve adresleri sevkiyat eşleşmelidir';
$_['error_network']				= 'Klarna için bağlanırken hata oluştu. Lütfen daha sonra yeniden deneyin.';