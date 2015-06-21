<?php

// **********
// * Global *
// **********
$_['ms_viewinstore'] = 'Mağazada gör';
$_['ms_view'] = 'İncele';
$_['ms_view_modify'] = 'İncele / Düzenle';
$_['ms_publish'] = 'Yayınla';
$_['ms_unpublish'] = 'Yayından kaldır';
$_['ms_edit'] = 'Düzenle';
$_['ms_clone'] = 'Çoğalt';
$_['ms_relist'] = 'Yeniden listele';
$_['ms_rate'] = 'Oran';
$_['ms_download'] = 'İndir';
$_['ms_create_product'] = 'Ürün oluştur';
$_['ms_delete'] = 'Sil';
$_['ms_update'] = 'Güncelle';
$_['ms_type'] = 'Tür';
$_['ms_amount'] = 'Miktar';
$_['ms_status'] = 'Durum';
$_['ms_date_paid'] = 'Ödeme tarihi';
$_['ms_last_message'] = 'Son mesaj';
$_['ms_description'] = 'Tanım';
$_['ms_id'] = '#';
$_['ms_by'] = 'ile';
$_['ms_action'] = 'Eylem';
$_['ms_sender'] = 'Gönderici';
$_['ms_message'] = 'Mesaj';
$_['ms_none'] = 'Hiçbiri';


$_['ms_date_created'] = 'Oluşturulduğu tarih';
$_['ms_date'] = 'Tarih';

$_['ms_button_submit'] = 'Gönder';
$_['ms_button_add_special'] = 'Yeni bir özel fiyat tanımla';
$_['ms_button_add_discount'] = 'Yeni bir miktara göre indirim tanımla';
$_['ms_button_submit_request'] = 'İsteği gönder';
$_['ms_button_save'] = 'Kaydet';
$_['ms_button_cancel'] = 'İptal';
$_['ms_button_select_predefined_avatar'] = 'Önceden tanımlanmış bir profil resimi seç';

$_['ms_button_select_image'] = 'Resim seçiniz';
$_['ms_button_select_images'] = 'Resimleri seçiniz';
$_['ms_button_select_files'] = 'Dosyaları seçiniz';

$_['ms_transaction_order_created'] = 'Sipariş oluşturuldu';
$_['ms_transaction_order'] = 'Satış: Sipariş Numarası #%s';
$_['ms_transaction_sale'] = 'Satış: %s (-%s komisyon)';
$_['ms_transaction_refund'] = 'Para iadesi: %s';
$_['ms_transaction_listing'] = 'Ürün listeleme: %s (%s)';
$_['ms_transaction_signup']      = 'Kayıt ücreti at %s';
$_['ms_request_submitted'] = 'Talebiniz gönderilmiştir';

$_['ms_totals_line'] = 'Şu anda %s Mağaza ve %s ürün satıştadır!';

$_['ms_text_welcome'] = '<a href="%s">Giriş</a> | <a href="%s">Hesap oluştur</a> | <a href="%s">Mağaza hesabı oluştur</a>.';
$_['ms_button_register_seller'] = 'Mağaza hesabı olarak kayıt ol';
$_['ms_register_seller_account'] = 'Mağaza hesabı kaydet';

// Mails

// Seller
$_['ms_mail_greeting'] = "Merhaba %s,\n\n";
$_['ms_mail_greeting_no_name'] = "Merhaba,\n\n";
$_['ms_mail_ending'] = "\n\nİyi Dileklerimizle,\n%s";
$_['ms_mail_message'] = "\n\nMesaj:\n%s";

$_['ms_mail_subject_seller_account_created'] = 'Mağaza hesabı oluşturuldu';
$_['ms_mail_seller_account_created'] = <<<EOT
Your seller account at %s has been created!

You can now start adding your products.
EOT;

$_['ms_mail_subject_seller_account_awaiting_moderation'] = 'Mağaza hesabınız düzenlenmeyi bekliyor';
$_['ms_mail_seller_account_awaiting_moderation'] = <<<EOT
Your seller account at %s has been created and is now awaiting moderation.

You will receive an email as soon as it is approved.
EOT;

$_['ms_mail_subject_product_awaiting_moderation'] = 'Ürün düzenlenmeyi bekliyor';
$_['ms_mail_product_awaiting_moderation'] = <<<EOT
Your product %s at %s is awaiting moderation.

You will receive an email as soon as it is processed.
EOT;

$_['ms_mail_subject_product_purchased'] = 'Yeni sipariş';
$_['ms_mail_product_purchased'] = <<<EOT
Your product(s) have been purchased from %s.

Customer: %s (%s)

Products:
%s
Total: %s
EOT;

$_['ms_mail_product_purchased_no_email'] = <<<EOT
Your product(s) have been purchased from %s.

Customer: %s

Products:
%s
Total: %s
EOT;

$_['ms_mail_subject_seller_contact'] = 'Yeni müşteri mesajı';
$_['ms_mail_seller_contact'] = <<<EOT
You have received a new customer message!

Name: %s

Email: %s

Product: %s

Message:
%s
EOT;

$_['ms_mail_seller_contact_no_mail'] = <<<EOT
You have received a new customer message!

Name: %s

Product: %s

Message:
%s
EOT;

$_['ms_mail_product_purchased_info'] = <<<EOT
\n
Delivery address:

%s %s
%s
%s
%s
%s %s
%s
%s
EOT;

$_['ms_mail_product_purchased_comment'] = 'Yorum: %s';

$_['ms_mail_subject_withdraw_request_submitted'] = 'Ödeme talebi gönderildi';
$_['ms_mail_withdraw_request_submitted'] = <<<EOT
We have received your payout request. You will receive your earnings as soon as it is processed.
EOT;

$_['ms_mail_subject_withdraw_request_completed'] = 'Ödeme tamamlandı';
$_['ms_mail_withdraw_request_completed'] = <<<EOT
Your payout request has been processed. You should now receive your earnings.
EOT;

$_['ms_mail_subject_withdraw_request_declined'] = 'Ödeme talebi reddedildi';
$_['ms_mail_withdraw_request_declined'] = <<<EOT
Your payout request has been declined. Your funds have been returned to your balance at %s.
EOT;

$_['ms_mail_subject_transaction_performed'] = 'New transaction';
$_['ms_mail_transaction_performed'] = <<<EOT
New transaction has been added to your account at %s.
EOT;

$_['ms_mail_subject_remind_listing'] = 'Product listing has finished';
$_['ms_mail_seller_remind_listing'] = <<<EOT
Your product's %s listing has finished. Go to your account seller area if you would like to re-list the product.
EOT;

// *********
// * Admin *
// *********
$_['ms_mail_admin_subject_seller_account_created'] = 'New seller account created';
$_['ms_mail_admin_seller_account_created'] = <<<EOT
New seller account at %s has been created!
Seller name: %s (%s)
E-mail: %s
EOT;

$_['ms_mail_admin_subject_seller_account_awaiting_moderation'] = 'New seller account awaiting moderation';
$_['ms_mail_admin_seller_account_awaiting_moderation'] = <<<EOT
New seller account at %s has been created and is now awaiting moderation.
Seller name: %s (%s)
E-mail: %s

You can process it in the Multiseller - Sellers section in back office.
EOT;

$_['ms_mail_admin_subject_product_created'] = 'New product added';
$_['ms_mail_admin_product_created'] = <<<EOT
New product %s has been added to %s.

You can view or edit it in back office.
EOT;

$_['ms_mail_admin_subject_new_product_awaiting_moderation'] = 'New product awaiting moderation';
$_['ms_mail_admin_new_product_awaiting_moderation'] = <<<EOT
New product %s has been added to %s and is awaiting moderation.

You can process it in the Multiseller - Products section in back office.
EOT;

$_['ms_mail_admin_subject_edit_product_awaiting_moderation'] = 'Product edited and awaiting moderation';
$_['ms_mail_admin_edit_product_awaiting_moderation'] = <<<EOT
Product %s at %s has been edited and is awaiting moderation.

You can process it in the Multiseller - Products section in back office.
EOT;

$_['ms_mail_admin_subject_withdraw_request_submitted'] = 'Payout request awaiting moderation';
$_['ms_mail_admin_withdraw_request_submitted'] = <<<EOT
New payout request has been submitted.

You can process it in the Multiseller - Finances section in back office.
EOT;

// Success
$_['ms_success_product_published'] = 'Product published';
$_['ms_success_product_unpublished'] = 'Product unpublished';
$_['ms_success_product_created'] = 'Product created';
$_['ms_success_product_updated'] = 'Product updated';
$_['ms_success_product_deleted'] = 'Product deleted';

// Errors
$_['ms_error_sellerinfo_nickname_empty'] = 'Nickname cannot be empty';
$_['ms_error_sellerinfo_nickname_alphanumeric'] = 'Nickname can only contain alphanumeric symbols';
$_['ms_error_sellerinfo_nickname_utf8'] = 'Nickname can only contain printable UTF-8 symbols';
$_['ms_error_sellerinfo_nickname_latin'] = 'Nickname can only contain alphanumeric symbols and diacritics';
$_['ms_error_sellerinfo_nickname_length'] = 'Nickname should be between 4 and 50 characters';
$_['ms_error_sellerinfo_nickname_taken'] = 'This nickname is already taken';
$_['ms_error_sellerinfo_company_length'] = 'Company name cannot be longer than 50 characters';
$_['ms_error_sellerinfo_description_length'] = 'Description cannot be longer than 1000 characters';
$_['ms_error_sellerinfo_paypal'] = 'Invalid PayPal address';
$_['ms_error_sellerinfo_terms'] = 'Warning: You must agree to the %s!';
$_['ms_error_file_extension'] = 'Invalid extension';
$_['ms_error_file_type'] = 'Invalid file type';
$_['ms_error_file_size'] = 'File too big';
$_['ms_error_image_too_small'] = 'Image file dimensions are too small. Minimum allowed size is: %s x %s (Width x Height)';
$_['ms_error_image_too_big'] = 'Image file dimensions are too big. Maximum allowed size is: %s x %s (Width x Height)';
$_['ms_error_file_upload_error'] = 'File upload error';
$_['ms_error_form_submit_error'] = 'Error occured when submitting the form. Please contact the store owner for more information.';
$_['ms_error_form_notice'] = 'Please check all form tabs for errors.';
$_['ms_error_product_name_empty'] = 'Product name cannot be empty';
$_['ms_error_product_name_length'] = 'Product name should be between %s and %s characters';
$_['ms_error_product_description_empty'] = 'Product description cannot be empty';
$_['ms_error_product_description_length'] = 'Product description should be between %s and %s characters';
$_['ms_error_product_tags_length'] = 'Line too long';
$_['ms_error_product_price_empty'] = 'Please specify a price for your product';
$_['ms_error_product_price_invalid'] = 'Invalid price';
$_['ms_error_product_price_low'] = 'Price too low';
$_['ms_error_product_price_high'] = 'Price too high';
$_['ms_error_product_category_empty'] = 'Please select a category';
$_['ms_error_product_model_empty'] = 'Product model cannot be empty';
$_['ms_error_product_model_length'] = 'Product model should be between %s and %s characters';
$_['ms_error_product_image_count'] = 'Please upload at least %s image(s) for your product';
$_['ms_error_product_download_count'] = 'Please submit at least %s download(s) for your product';
$_['ms_error_product_image_maximum'] = 'No more than %s image(s) allowed';
$_['ms_error_product_download_maximum'] = 'No more than %s download(s) allowed';
$_['ms_error_product_message_length'] = 'Message cannot be longer than 1000 characters';
$_['ms_error_product_attribute_required'] = 'This attribute is required';
$_['ms_error_product_attribute_long'] = 'This value can not be longer than %s symbols';
$_['ms_error_withdraw_amount'] = 'Invalid amount';
$_['ms_error_withdraw_balance'] = 'Not enough funds on your balance';
$_['ms_error_withdraw_minimum'] = 'Cannot withdraw less than minimum limit';
$_['ms_error_contact_email'] = 'Please specify a valid email address';
$_['ms_error_contact_captcha'] = 'Invalid captcha code';
$_['ms_error_contact_text'] = 'Message cannot be longer than 2000 characters';
$_['ms_error_contact_allfields'] = 'Please fill in all fields';
$_['ms_error_invalid_quantity_discount_priority'] = 'Error in priority field - please enter correct value';
$_['ms_error_invalid_quantity_discount_quantity'] = 'Quantity should be 2 or greater';
$_['ms_error_invalid_quantity_discount_price'] = 'Invalid quantity discount price entered';
$_['ms_error_invalid_quantity_discount_dates'] = 'Date fields for quantity discounts must be filled in';
$_['ms_error_invalid_special_price_priority'] = 'Error in priority field - please enter correct value';
$_['ms_error_invalid_special_price_price'] = 'Invalid special price entered';
$_['ms_error_invalid_special_price_dates'] = 'Date fields for special prices must be filled in';
$_['ms_error_seller_product'] = 'You can\'t add your own product to cart';

// Account - General
$_['ms_account_unread_pm'] = 'You have unread private message';
$_['ms_account_unread_pms'] = 'You have %s unread private messages';
$_['ms_account_register_new'] = 'Yeni Mağaza hesabı';
$_['ms_account_register_seller'] = 'Mağaza hesabı kayıt';
$_['ms_account_register_seller_note'] = 'Bir Mağaza hesabı oluşturun ve ürünlerinizi hemen satmaya başlayın!';
$_['ms_account_register_details'] = 'Adım 1: Hesap bilgileriniz';
$_['ms_account_register_seller_success_heading'] = 'Your Seller Account Has Been Created!';
$_['ms_account_register_seller_success_message']  = '<p>Welcome to %s!</p> <p>Congratulations! Your new seller account has been successfully created!</p> <p>You can now take advantage of seller privileges and start selling your products with us.</p> <p>If you have any problems, <a href="%s">contact us</a>.</p>';
$_['ms_account_register_seller_success_approval'] = '<p>Welcome to %s!</p> <p>Your seller account has been registered and is waiting for approval. You will be notified by email once your account has been activated by the store owner.</p><p>If you have any problems, <a href="%s">contact us</a>.</p>';

$_['ms_seller'] = 'Seller';
$_['ms_seller_forseller'] = 'For seller';
$_['ms_account_dashboard'] = 'Yönetim paneli';
$_['ms_account_seller_account'] = 'Mağaza Hesabı';
$_['ms_account_customer_account'] = 'Müşteri Hesabı';
$_['ms_account_sellerinfo'] = 'Mağaza profili';
$_['ms_account_sellerinfo_new'] = 'New seller account';
$_['ms_account_newproduct'] = 'Yeni ürün ekle';
$_['ms_account_products'] = 'Ürünler';
$_['ms_account_transactions'] = 'Satış işlemleri';
$_['ms_account_orders'] = 'Siparişler';
$_['ms_account_withdraw'] = 'Ödeme talebi';
$_['ms_account_stats'] = 'İstatistikler';

// Account - New product
$_['ms_account_newproduct_heading'] = 'New Product';
$_['ms_account_newproduct_breadcrumbs'] = 'New Product';
//General Tab
$_['ms_account_product_tab_general'] = 'General';
$_['ms_account_product_tab_specials'] = 'Special prices';
$_['ms_account_product_tab_discounts'] = 'Quantity discounts';
$_['ms_account_product_name_description'] = 'Name & Description';
$_['ms_account_product_name'] = 'Name';
$_['ms_account_product_name_note'] = 'Specify a name for your product';
$_['ms_account_product_description'] = 'Description';
$_['ms_account_product_description_note'] = 'Describe your product';
$_['ms_account_product_meta_description'] = 'Meta Tag Description';
$_['ms_account_product_meta_description_note'] = 'Specify Meta Tag Description for your product';
$_['ms_account_product_meta_keyword'] = 'Meta Tag Keywords';
$_['ms_account_product_meta_keyword_note'] = 'Specify Meta Tag Keywords for your product';
$_['ms_account_product_tags'] = 'Tags';
$_['ms_account_product_tags_note'] = 'Specify tags for your product.';
$_['ms_account_product_price_attributes'] = 'Price & Attributes';
$_['ms_account_product_price'] = 'Price';
$_['ms_account_product_price_note'] = 'Choose a price for your product';
$_['ms_account_product_listing_flat'] = 'Listing fee for this product is <span>%s</span>';
$_['ms_account_product_listing_percent'] = 'Listing fee for this product is based on the product price. Current listing fee: <span>%s</span>.';
$_['ms_account_product_listing_balance'] = 'This amount will be deducted from your seller balance.';
$_['ms_account_product_listing_paypal'] = 'You will be redirected to the PayPal payment page after product submission.';
$_['ms_account_product_listing_itemname'] = 'Product listing fee at %s';
$_['ms_account_product_listing_until'] = 'This product will be listed until %s';
$_['ms_account_product_category'] = 'Category';
$_['ms_account_product_category_note'] = 'Select category for your product';
$_['ms_account_product_enable_shipping'] = 'Enable shipping';
$_['ms_account_product_enable_shipping_note'] = 'Specify whether your product requires shipping';
$_['ms_account_product_quantity'] = 'Quantity';
$_['ms_account_product_quantity_note']    = 'Specify the quantity of your product';
$_['ms_account_product_files'] = 'Files';
$_['ms_account_product_download'] = 'Downloads';
$_['ms_account_product_download_note'] = 'Upload files for your product. Allowed extensions: %s';
$_['ms_account_product_push'] = 'Push updates to previous customers';
$_['ms_account_product_push_note'] = 'Newly added and updated downloads will be made available to previous customers';
$_['ms_account_product_image'] = 'Images';
$_['ms_account_product_image_note'] = 'Select images for your product. First image will be used as a thumbnail. You can change the order of the images by dragging them. Allowed extensions: %s';
$_['ms_account_product_message_reviewer'] = 'Message to the reviewer';
$_['ms_account_product_message'] = 'Message';
$_['ms_account_product_message_note'] = 'Your message to the reviewer';
//Data Tab
//AŞAĞIYI ALIYORUMX 
$_['ms_account_product_tab_data'] = 'Veri';
$_['ms_account_product_model'] = 'Model';
$_['ms_account_product_sku'] = 'SBB';
$_['ms_account_product_sku_note'] = 'Stok Bulundurma Birimi';
$_['ms_account_product_upc']  = 'EÜK';
$_['ms_account_product_upc_note'] = 'Evrensel Ürün Kodu';
$_['ms_account_product_ean'] = 'EAN';
$_['ms_account_product_ean_note'] = 'European Article Number';
//avrupa madde numarası ? idk
$_['ms_account_product_jan'] = 'JAN';
$_['ms_account_product_jan_note'] = 'Japanese Article Number';
$_['ms_account_product_isbn'] = 'USKN';
$_['ms_account_product_isbn_note'] = 'Uluslararası Standart Kitap Numarası';
$_['ms_account_product_mpn'] = 'İPN';
$_['ms_account_product_mpn_note'] = 'İmalatçı Parça Numarası';
$_['ms_account_product_manufacturer'] = 'İmalatçı';
$_['ms_account_product_manufacturer_note'] = '(Otomatik Tamamlama)';
$_['ms_account_product_tax_class'] = 'Tax Class';
$_['ms_account_product_date_available'] = 'Date Available';
$_['ms_account_product_stock_status'] = 'Stokta olmama durumu';
$_['ms_account_product_stock_status_note'] = 'Ürün stokta mevcut değilken gösterilecek durum bilgisi';
$_['ms_account_product_subtract'] = 'Subtract Stock';

// Options
$_['ms_account_product_tab_options'] = 'Seçenekler';
$_['ms_options_add'] = '+ Seçenek ekle';
$_['ms_options_add_value'] = '+ Değer ekle';

$_['ms_options_required'] = 'Make option required';
$_['ms_options_price_prefix'] = 'Change price prefix';

$_['ms_options_price'] = 'Fiyat...';
$_['ms_options_quantity'] = 'Adet...';


$_['ms_account_product_manufacturer'] = 'İmalatçı';
$_['ms_account_product_manufacturer_note'] = '(Otomatik Tamamlama)';
$_['ms_account_product_tax_class'] = 'Tax Class';
$_['ms_account_product_date_available'] = 'Date Available';
$_['ms_account_product_stock_status'] = 'Stokta olmama durumu';
$_['ms_account_product_stock_status_note'] = 'Ürün stokta mevcut değilken gösterilecek durum bilgisi';
$_['ms_account_product_subtract'] = 'Subtract Stock';

$_['ms_account_product_priority'] = 'Öncelik';
$_['ms_account_product_date_start'] = 'Başlangıç tarihi';
$_['ms_account_product_date_end'] = 'Bitiş tarihi';
$_['ms_account_product_sandbox'] = 'Uyarı: The payment gateway is in \'Sandbox Mode\'. Your account will not be charged.';



// Account - Edit product
$_['ms_account_editproduct_heading'] = 'Ürünü değiştir';
$_['ms_account_editproduct_breadcrumbs'] = 'Ürünü değiştir';

// Account - Clone product
$_['ms_account_cloneproduct_heading'] = 'Ürünü klonla';
$_['ms_account_cloneproduct_breadcrumbs'] = 'Ürünü klonla';

// Account - Relist product
$_['ms_account_relist_product_heading'] = 'Ürünü tekrar listele';
$_['ms_account_relist_product_breadcrumbs'] = 'Ürünü tekrar listele';

// Account - Seller
$_['ms_account_sellerinfo_heading'] = 'Mağaza Profili';
$_['ms_account_sellerinfo_breadcrumbs'] = 'Mağaza Profili';
$_['ms_account_sellerinfo_nickname'] = 'Mağaza adı';
$_['ms_account_sellerinfo_nickname_note'] = 'Mağazanızın kullanıcılara gözükecek olan adı';
$_['ms_account_sellerinfo_description'] = 'Açıklama';
$_['ms_account_sellerinfo_description_note'] = 'Mağazanız hakkında birkaç kelime giriniz';
$_['ms_account_sellerinfo_company'] = 'Şirket';
$_['ms_account_sellerinfo_company_note'] = 'Şirket ünvanınız (isteğe bağlı)';
$_['ms_account_sellerinfo_country'] = 'Ülke';
$_['ms_account_sellerinfo_country_dont_display'] = 'Ülkem listede yok';
$_['ms_account_sellerinfo_country_note'] = 'Ülkenizi seçiniz.';
$_['ms_account_sellerinfo_zone'] = 'Şehir / Eyalet';
$_['ms_account_sellerinfo_zone_select'] = 'Şehir/Eyalet seçiniz';
$_['ms_account_sellerinfo_zone_not_selected'] = 'Şehir/Eyalet seçilmedi';
$_['ms_account_sellerinfo_zone_note'] = 'Listeden şehir ya da eyaletinizi seçiniz.';
$_['ms_account_sellerinfo_avatar'] = 'Profil resimi';
$_['ms_account_sellerinfo_avatar_note'] = 'Profil resiminizi yükleyiniz';
$_['ms_account_sellerinfo_banner'] = 'Afiş';
$_['ms_account_sellerinfo_banner_note'] = 'Profil sayfanızda gösterilecek olan afişi yükleyiniz';
$_['ms_account_sellerinfo_paypal'] = 'Paypal';
$_['ms_account_sellerinfo_paypal_note'] = 'PayPal hesabınızın bağlı olduğu e-posta adresini giriniz';
$_['ms_account_sellerinfo_reviewer_message'] = 'Kullanıcılar için measaj';
$_['ms_account_sellerinfo_reviewer_message_note'] = 'Kullanıcılara mesajınız';
$_['ms_account_sellerinfo_terms'] = 'Şartları kabul et';
$_['ms_account_sellerinfo_terms_note'] = 'Şunları okudum ve kabul ediyorum <a class="agree" href="%s" alt="%s"><b>%s</b></a>';
$_['ms_account_sellerinfo_fee_flat'] = '%s nezdinde satıcı olmak için <span>%s</span> kadar kayıt ücreti ödemeniz gerekiyor.';
//$_['ms_account_sellerinfo_fee_flat'] = 'There is a signup fee of <span>%s</span> to become a seller at %s.';
//burda %slerin yeri değişmiş oldu da sakatlık çıkıyo mu böyle olunca
$_['ms_account_sellerinfo_fee_balance'] = 'Şu miktar şu anki bakiyenizden düşülecek.';
$_['ms_account_sellerinfo_fee_paypal'] = 'Formu yolladıktan sonra PayPal sayfasına yönlendirileceksiniz.';
$_['ms_account_sellerinfo_signup_itemname'] = '%s nezdinde satıcı hesabı kaydı';
$_['ms_account_sellerinfo_saved'] = 'Mağaza hesabı bilgileri kaydedildi.';

$_['ms_account_status'] = 'Mağaza hesabı durumu: ';
$_['ms_account_status_tobeapproved'] = '<br /> Mağaza sahibi onayladıktan hemen sonra hesabınızı kullanabileceksiniz.';
$_['ms_account_status_please_fill_in'] = '<br />Satıcı hesabı oluşturmak için lütfen aşağıdaki formu doldurun.';

$_['ms_seller_status_' . MsSeller::STATUS_ACTIVE] = 'Aktif';
$_['ms_seller_status_' . MsSeller::STATUS_INACTIVE] = 'Pasif';
$_['ms_seller_status_' . MsSeller::STATUS_DISABLED] = 'Hizmet dışı';
$_['ms_seller_status_' . MsSeller::STATUS_INCOMPLETE] = 'Tamamlanmamış';
$_['ms_seller_status_' . MsSeller::STATUS_DELETED] = 'Silinmiş';
$_['ms_seller_status_' . MsSeller::STATUS_UNPAID] = 'Ödenmemiş kayıt ücreti';

// Account - Products
$_['ms_account_products_heading'] = 'Ürünleriniz';
$_['ms_account_products_breadcrumbs'] = 'Ürünleriniz';
$_['ms_account_products_image'] = 'Resim';
$_['ms_account_products_product'] = 'Ürün';
$_['ms_account_products_sales'] = 'Satışlar';
$_['ms_account_products_earnings'] = 'Kazançlar';
$_['ms_account_products_status'] = 'Durum';
$_['ms_account_products_date'] = 'Tarih eklendi';

$_['ms_account_products_listing_until'] = 'Listing until';

$_['ms_account_products_action'] = 'Eylem';
$_['ms_account_products_noproducts'] = 'Henüz hiç ürününüz yok!';
$_['ms_account_products_confirmdelete'] = 'Ürününüzü silmek istediğinize emin misiniz?';

$_['ms_not_defined'] = 'Tanımlanmamış';

$_['ms_product_status_' . MsProduct::STATUS_ACTIVE] = 'Aktif';
$_['ms_product_status_' . MsProduct::STATUS_INACTIVE] = 'Pasif';
$_['ms_product_status_' . MsProduct::STATUS_DISABLED] = 'Hizmet dışı';
$_['ms_product_status_' . MsProduct::STATUS_DELETED] = 'Silinmiş';
$_['ms_product_status_' . MsProduct::STATUS_UNPAID] = 'Ödenmemiş ilan ücreti';

// Account - Conversations and Messages
$_['ms_account_conversations'] = 'Konuşmalar';
$_['ms_account_messages'] = 'Mesajlar';

$_['ms_account_conversations_heading'] = 'Konuşmalarınız';
$_['ms_account_conversations_breadcrumbs'] = 'Konuşmalarınız';

$_['ms_account_conversations_status'] = 'Durum';
$_['ms_account_conversations_date_created'] = 'Date created';
$_['ms_account_conversations_with'] = 'Şununla sohbet';
$_['ms_account_conversations_title'] = 'Başlık';

$_['ms_conversation_title_product'] = '%s ürünüyle ilgili sorgu';
$_['ms_conversation_title'] = '%s tarafından sorgu';

$_['ms_account_conversations_read'] = 'Okunmamış';
$_['ms_account_conversations_unread'] = 'Okunmuş';

$_['ms_account_messages_heading'] = 'Mesajlar';
$_['ms_account_messages_breadcrumbs'] = 'Mesajlar';

$_['ms_message_text'] = 'Mesajınız';
$_['ms_post_message'] = 'Mesajı yolla';

$_['ms_customer_does_not_exist'] = 'Müşteri hesabı silindi.';
$_['ms_error_empty_message'] = 'Mesajı boş bırakamazsınız';

$_['ms_mail_subject_private_message'] = 'Yeni bir özel mesaj alındı';
$_['ms_mail_private_message'] = <<<EOT
%s kişisi tarafından yeni bir özel mesajınız var!

%s

%s

Hesabınızdaki mesaj bölümünden cevap verebilirsiniz.
EOT;

$_['ms_mail_subject_order_updated'] = 'Siparişiniz #%s %s tarafından güncellendi';
$_['ms_mail_order_updated'] = <<<EOT


Your order at %s has been updated by %s:

Sipariş#: %s

Ürünler:
%s

Durum: %s

Yorumlar:
%s

EOT;

$_['ms_mail_subject_seller_vote'] = 'Şu satıcıyı oyla';
$_['ms_mail_seller_vote_message'] = 'Şu satıcıyı oyla';

// Account - Transactions
$_['ms_account_transactions_heading'] = 'Mali durumunuz';
$_['ms_account_transactions_breadcrumbs'] = 'Mali durumunuz';
$_['ms_account_transactions_balance'] = 'Şu anki bakiyeniz:';
$_['ms_account_transactions_earnings'] = 'Şu tarihe kadar olan kazançlar:';
$_['ms_account_transactions_records'] = 'Bakiye kayıtları';
$_['ms_account_transactions_description'] = 'Açıklama';
$_['ms_account_transactions_amount'] = 'Miktar';
$_['ms_account_transactions_notransactions'] = 'Henüz bir işleminiz yok!';

// Payments
$_['ms_payment_payments'] = 'Ödemeler';
$_['ms_payment_order'] = 'Sipariş #%s';
$_['ms_payment_type_' . MsPayment::TYPE_SIGNUP] = 'Kayıt ücreti';
$_['ms_payment_type_' . MsPayment::TYPE_LISTING] = 'İlan ücreti';
$_['ms_payment_type_' . MsPayment::TYPE_PAYOUT] = 'Elle ödeme';
$_['ms_payment_type_' . MsPayment::TYPE_PAYOUT_REQUEST] = 'Ödeme talebi';
$_['ms_payment_type_' . MsPayment::TYPE_RECURRING] = 'Tekrarlayan ödeme';
$_['ms_payment_type_' . MsPayment::TYPE_SALE] = 'Satış';

$_['ms_payment_status_' . MsPayment::STATUS_UNPAID] = 'Ödenmemiş';
$_['ms_payment_status_' . MsPayment::STATUS_PAID] = 'Ödenmiş';

// Account - Orders
$_['ms_account_orders_heading'] = 'Siparişleriniz';
$_['ms_account_orders_breadcrumbs'] = 'Siparişleriniz';
$_['ms_account_orders_id'] = 'Sipariş #';
$_['ms_account_orders_customer'] = 'Müşteri';
$_['ms_account_orders_products'] = 'Ürünler';
$_['ms_account_orders_history'] = 'Tarih';
$_['ms_account_orders_addresses'] = 'Adresler';
$_['ms_account_orders_total'] = 'Toplam miktar';
$_['ms_account_orders_view'] = 'Sipariş göster';
$_['ms_account_orders_noorders'] = 'Henüz hiç siparişiniz yok!';
$_['ms_account_orders_nohistory'] = 'Bu sipariş için henüz bir kayıt mevcut değil!';
$_['ms_account_orders_change_status']    = 'Siparişin durumunu değiştir...';
$_['ms_account_orders_add_comment']    = 'Siparişle ilgili yorum ekle...';

$_['ms_account_order_information'] = 'Sipariş bilgileri';

// Account - Dashboard
$_['ms_account_dashboard_heading'] = 'Mağaza Paneli';
$_['ms_account_dashboard_breadcrumbs'] = 'Mağaza Paneli';
$_['ms_account_dashboard_orders'] = 'Son siparişler';
$_['ms_account_dashboard_overview'] = 'Genel bakış';
$_['ms_account_dashboard_seller_group'] = 'Mağaza grubu';
$_['ms_account_dashboard_listing'] = 'İlan ücreti';
$_['ms_account_dashboard_sale'] = 'Satış ücreti';
$_['ms_account_dashboard_royalty'] = 'İmtiyaz';
$_['ms_account_dashboard_stats'] = 'Durum';
$_['ms_account_dashboard_balance'] = 'Mevcut bakiye';
$_['ms_account_dashboard_total_sales'] = 'Toplam satışlar';
$_['ms_account_dashboard_total_earnings'] = 'Toplam gelir';
$_['ms_account_dashboard_sales_month'] = 'Bu ayki satışlar';
$_['ms_account_dashboard_earnings_month'] = 'Bu ayki gelir';
$_['ms_account_dashboard_nav'] = 'Hızlı gezinme';
$_['ms_account_dashboard_nav_profile'] = 'Mağaza profilini düzenle';
$_['ms_account_dashboard_nav_product'] = 'Yeni ürün oluştur';
$_['ms_account_dashboard_nav_products'] = 'Ürünleri yönet';
$_['ms_account_dashboard_nav_orders'] = 'Siparişlerini gör';
$_['ms_account_dashboard_nav_balance'] = 'Mali kayıtlarını gör';
$_['ms_account_dashboard_nav_payout'] = 'Ödeme talep et';

// Account - Request withdrawal
$_['ms_account_withdraw_heading'] = 'Ödeme talep et';
$_['ms_account_withdraw_breadcrumbs'] = 'Ödeme talep et';
$_['ms_account_withdraw_balance'] = 'Şu anki bakiye:';
$_['ms_account_withdraw_balance_available'] = 'Çekilebilecek miktar:';
$_['ms_account_withdraw_minimum'] = 'Minimum ödenebilecek miktar:';

$_['ms_account_balance_reserved_formatted'] = '-%s pending withdrawal';
$_['ms_account_balance_waiting_formatted'] = '-%s waiting period';
$_['ms_account_withdraw_description'] = 'Payout request via %s (%s) on %s';

$_['ms_account_withdraw_amount'] = 'Miktar:';
$_['ms_account_withdraw_amount_note'] = 'Lütfen ödeme miktarını belirleyiniz';
$_['ms_account_withdraw_method'] = 'Ödeme şekli:';
$_['ms_account_withdraw_method_note'] = 'Lütfen ödeme şeklini belirleyiniz';
$_['ms_account_withdraw_method_paypal'] = 'PayPal';
$_['ms_account_withdraw_all'] = 'Tüm gelirler şu an kullanılabilir.';
$_['ms_account_withdraw_minimum_not_reached'] = 'Bakiyeniz minimum ödeme miktarından daha az!';
$_['ms_account_withdraw_no_funds'] = 'Çekim yapacak kaynak mevcut değil.';
$_['ms_account_withdraw_no_paypal'] = 'Lütfen önce <a href="index.php?route=seller/account-profile">PayPal adresinizi belirtiniz</a> !';

// Account - Stats
$_['ms_account_stats_heading'] = 'İstatistikler';
$_['ms_account_stats_breadcrumbs'] = 'İstatistikler';
$_['ms_account_stats_tab_summary'] = 'Özet';
$_['ms_account_stats_tab_by_product'] = 'Ürüne göre';
$_['ms_account_stats_tab_by_year'] = 'Yıla göre';
$_['ms_account_stats_summary_comment'] = 'Aşağıda satışlarınızın bir özeti mevcut';
$_['ms_account_stats_sales_data'] = 'Satış bilgileri';
$_['ms_account_stats_number_of_orders'] = 'Sipariş sayısı';
$_['ms_account_stats_total_revenue'] = 'Toplam Hasılat';
$_['ms_account_stats_average_order'] = 'Ortalama sipariş';
$_['ms_account_stats_statistics'] = 'İstatistikler';
$_['ms_account_stats_grand_total'] = 'Satışlarin genel toplamı';
$_['ms_account_stats_product'] = 'Ürün';
$_['ms_account_stats_sold'] = 'Satılan';
$_['ms_account_stats_total'] = 'Toplam';
$_['ms_account_stats_this_year'] = 'Bu yıl';

$_['ms_account_stats_year_comment'] = '<span id="sales_num">%s</span> Sale(s) for specified period';
//2dum2translate

$_['ms_account_stats_show_orders'] = 'Şu kişinin siparişlerini göster: ';
$_['ms_account_stats_month'] = 'Ay';
$_['ms_account_stats_num_of_orders'] = 'Sipariş sayısı';
$_['ms_account_stats_total_r'] = 'Toplam Hasılat';
$_['ms_account_stats_average_order'] = 'Ortalama sipariş';
$_['ms_account_stats_today'] = 'Bugün, ';
$_['ms_account_stats_yesterday'] = 'Dün, ';
$_['ms_account_stats_daily_average'] = 'Şunun için günlük ortalama ';
$_['ms_account_stats_date_month_format'] = 'F Y';
$_['ms_account_stats_projected_totals'] = 'Şunun için tahmin edilen toplam ';
$_['ms_account_stats_grand_total_sales'] = 'Satışlarin genel toplamı';

// Product page - Seller information
$_['ms_catalog_product_sellerinfo'] = 'Satıcı bilgileri';
$_['ms_catalog_product_contact'] = 'Bu satıcıyla iletişime geç';


$_['ms_footer'] = '<br>MultiMerch Pazarı: <a href="http://multimerch.com/">multimerch.com</a>';
//$_['ms_footer'] = '<br>MultiMerch Marketplace by <a href="http://multimerch.com/">multimerch.com</a>';
//I DONT EVEN KNOW          ^

// Catalog - Sellers list
$_['ms_catalog_sellers_heading'] = 'Satıcılar';
$_['ms_catalog_sellers_country'] = 'Ülke:';
$_['ms_catalog_sellers_website'] = 'Website:';
$_['ms_catalog_sellers_company'] = 'Şirket:';
$_['ms_catalog_sellers_totalsales'] = 'Satışlar:';
$_['ms_catalog_sellers_totalproducts'] = 'Ürünler:';
$_['ms_sort_country_desc'] = 'Ülke (Z - A)';
$_['ms_sort_country_asc'] = 'Ülke (A - Z)';
$_['ms_sort_nickname_desc'] = 'İsim (Z - A)';
$_['ms_sort_nickname_asc'] = 'İsim (A - Z)';

// Catalog - Seller profile page
$_['ms_catalog_sellers'] = 'Satıcılar';
$_['ms_catalog_sellers_empty'] = 'Henüz hiçbir satıcı yok.';
$_['ms_catalog_seller_profile'] = 'Profili görüntüle';
$_['ms_catalog_seller_profile_heading'] = '%s kişisinin profili';
$_['ms_catalog_seller_profile_breadcrumbs'] = '%s kişisinin profili';
$_['ms_catalog_seller_profile_about_seller'] = 'Satıcı hakkında';
$_['ms_catalog_seller_profile_products'] = 'Satıcının bazı ürünleri';
$_['ms_catalog_seller_profile_tab_products'] = 'Ürünler';

$_['ms_catalog_seller_profile_social'] = 'Sosyal profiller';
$_['ms_catalog_seller_profile_country'] = 'Ülke:';
$_['ms_catalog_seller_profile_zone'] = 'Region/State:';
$_['ms_catalog_seller_profile_website'] = 'Websitesi:';
$_['ms_catalog_seller_profile_company'] = 'Şirket:';
$_['ms_catalog_seller_profile_totalsales'] = 'Bütün satışlar:';
$_['ms_catalog_seller_profile_totalproducts'] = 'Bütün ürünler:';
$_['ms_catalog_seller_profile_view_products'] = 'Ürünleri göster';
$_['ms_catalog_seller_profile_view'] = '%s satıcısının tüm ürünlerini göster';

// Catalog - Seller's products list
$_['ms_catalog_seller_products_heading'] = '%s satıcısının ürünleri';
$_['ms_catalog_seller_products_breadcrumbs'] = '%s satıcısının ürünleri';
$_['ms_catalog_seller_products_empty'] = 'Bu satıcıda henüz hiçbir ürün yok';

// Catalog - Seller contact dialog
$_['ms_sellercontact_title'] = 'Satıcıya mesaj gönder';
$_['ms_sellercontact_signin'] = 'Lütfen %s kişisine mesaj göndermek için <a href="%s">giriş yapınız</a>';
$_['ms_sellercontact_sendto'] = '%s kişisine mesaj gönder';
$_['ms_sellercontact_text'] = 'Mesaj: ';
$_['ms_sellercontact_captcha'] = 'Captcha';
$_['ms_sellercontact_sendmessage'] = '%s kişisine mesaj gönder';
$_['ms_sellercontact_close'] = 'Kapat';
$_['ms_sellercontact_send'] = 'Gönder';
$_['ms_sellercontact_success'] = 'Mesajınız başarılı bir şekilde gönderildi';

?>
