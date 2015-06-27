<?php

// General
$_['ms_enabled'] = 'Etkin';
$_['ms_disabled'] = 'Devre dışı';
$_['ms_apply'] = 'Uygula';
$_['ms_type'] = 'Tür';
$_['ms_type_checkbox'] = 'Onay Kutusu';
$_['ms_type_date'] = 'Tarih';
$_['ms_type_datetime'] = 'Date &amp; Time';
$_['ms_type_file'] = 'Dosya';
$_['ms_type_image'] = 'Resim';
$_['ms_type_radio'] = 'Radio';
$_['ms_type_select'] = 'Seç';
$_['ms_type_text'] = 'Metin';
$_['ms_type_textarea'] = 'Metin Alanı';
$_['ms_type_time'] = 'Zaman';
$_['text_image_manager'] = 'Resim Yöneticisi';
$_['text_browse'] = 'Gözat';
$_['text_clear'] = 'Temizle';
$_['ms_store'] = 'Mağaza';
$_['ms_id'] = '#';

$_['ms_error_directory'] = "Warning: Could not create directory: %s. Please create it manually and make it server-writable before proceeding. <br />";
$_['ms_error_directory_notwritable'] = "Warning: Directory already exists and is not writable: %s. Please make sure it's empty and make it server-writable before proceeding. <br />";
$_['ms_error_directory_exists'] = "Warning: Directory already exists: %s. Please make sure it's empty before proceeding. <br />";
$_['ms_error_product_publish'] = 'Failed to publish some products: seller account not active.';
$_['ms_success_installed'] = 'Extension successfully installed';
$_['ms_success_product_status'] = 'Successfully changed product status.';

$_['ms_db_upgrade'] = 'Please <a href="%s">click here</a> to upgrade your MultiMerch Marketplace database to the latest version.';
$_['ms_db_success'] = 'Your MultiMerch Marketplace database is now up to date!';
$_['ms_db_latest'] = 'Your MultiMerch Marketplace database is already up to date!';

$_['heading_title'] = '<b>[MultiMerch]</b> Dijital Mağaza Platformu';
$_['text_seller_select'] = 'Mağaza Seç';
$_['text_shipping_dependent'] = 'Kargolamaya tabi';
$_['text_no_results'] = 'Hiçbir sonuç bulunamadı';
$_['error_permission'] = 'Uyarı: Sınırlı kullanıcı yetkisi!';

$_['ms_error_withdraw_norequests'] = 'Error: no payouts to process';
$_['ms_error_withdraw_response'] = 'Error: no response';
$_['ms_error_withdraw_status'] = 'Error: unsuccessful transaction';
$_['ms_success'] = 'Success';
$_['ms_success_transactions'] = 'Transactions successfully completed';
$_['ms_success_payment_deleted'] = 'Payment deleted';
$_['text_success']                 = 'Success: You have modified settings!';

$_['ms_none'] = 'Hiç';
$_['ms_seller'] = 'Mağaza';
$_['ms_all_sellers'] = 'Tüm Mağazalar';
$_['ms_amount'] = 'Değer';
$_['ms_product'] = 'Ürün';
$_['ms_net_amount'] = 'Net Değer';
$_['ms_days'] = 'gün';
$_['ms_from'] = 'From';
$_['ms_to'] = 'To';
$_['ms_paypal'] = 'PayPal';
$_['ms_date_created'] = 'Tarih oluşturuldu';
$_['ms_status'] = 'Durum';
$_['ms_image'] = 'Resim';
$_['ms_date_modified'] = 'Tarih değiştirildi';
$_['ms_date_paid'] = 'Tarih ödendi';
$_['ms_date'] = 'Tarih';
$_['ms_description'] = 'Açıklama';

$_['ms_commission'] = 'Komisyon';
$_['ms_commissions_fees'] = 'Komisyonlar & ücretler';
$_['ms_commission_' . MsCommission::RATE_SALE] = 'Satış ücreti';
$_['ms_commission_' . MsCommission::RATE_LISTING] = 'Listeleme ücreti / metodu';
$_['ms_commission_' . MsCommission::RATE_SIGNUP] = 'Kayıt ücreti / metodu';

$_['ms_commission_short_' . MsCommission::RATE_SALE] = 'S';
$_['ms_commission_short_' . MsCommission::RATE_LISTING] = 'L';
$_['ms_commission_short_' . MsCommission::RATE_SIGNUP] = 'SU';
$_['ms_commission_actual'] = 'Gerçek ücret oranları';

$_['ms_sort_order'] = 'Sıralama düzeni';
$_['ms_name'] = 'İsim';
$_['ms_config_width'] = 'Genişlik';
$_['ms_config_height'] = 'Yükseklik';
$_['ms_description'] = 'Açıklama';

$_['ms_enable'] = 'Etkin';
$_['ms_disable'] = 'Devre dışı';
$_['ms_edit'] = 'Düzenle';
$_['ms_delete'] = 'Sil';

$_['ms_button_pay_masspay'] = 'Pay via MassPay';
$_['ms_button_pay_masspay_all'] = 'All Pay via MassPay';
// Menu
$_['ms_menu_multiseller'] = 'MultiMerch';
$_['ms_menu_sellers'] = 'Mağazalar';
$_['ms_menu_seller_groups'] = 'Mağaza grupları';
$_['ms_menu_attributes'] = 'Nitelikler';
$_['ms_menu_products'] = 'Ürünler';
$_['ms_menu_transactions'] = 'İşlemler';
$_['ms_menu_payment'] = 'Ödemeler';
$_['ms_menu_addons'] = 'Eklentiler';
$_['ms_menu_settings'] = 'Ayarlar';

// Settings
$_['ms_settings_heading'] = 'Ayarlar';
$_['ms_settings_breadcrumbs'] = 'Ayarlar';
$_['ms_config_seller_validation'] = 'Mağaza onaylama';
$_['ms_config_seller_validation_note'] = 'Mağaza onaylama';
$_['ms_config_seller_validation_none'] = 'Bekleyen onaylama yok';
$_['ms_config_seller_validation_activation'] = 'E-posta ile aktivasyon';
$_['ms_config_seller_validation_approval'] = 'Manuel onay';

$_['ms_config_product_validation'] = 'Ürün onaylama';
$_['ms_config_product_validation_note'] = 'Ürün onaylama';
$_['ms_config_product_validation_none'] = 'Bekleyen onaylama';
$_['ms_config_product_validation_approval'] = 'Manuel onay';

$_['ms_config_allow_inactive_seller_products'] = 'Allow inactive sellers to list products';
$_['ms_config_allow_inactive_seller_products_note'] = 'Allows inactive sellers to list new products, which will be inactive. After approval of such seller all his products will become active at once.';

$_['ms_config_disable_product_after_quantity_depleted'] = 'Disable product after quantity depletes';
$_['ms_config_disable_product_after_quantity_depleted_note'] = 'The product will be disabled after it is sold out (quantity is 0)';

$_['ms_config_allow_relisting'] = 'Allow re-listing disabled products';
$_['ms_config_allow_relisting_note'] = 'Sellers will be able to re-list the products, which have been disabled (useful if you use product limitation by period or quantity in combination with listing fees)';

$_['ms_config_enable_banner'] = 'Enable seller banners';
$_['ms_config_enable_banner_note'] = 'Allow sellers to upload a banner that will be displayed on their profile page';

$_['ms_config_enable_one_page_seller_registration'] = 'One-page registration';
$_['ms_config_enable_one_page_seller_registration_note'] = 'Enable seller one-page registration';

$_['ms_config_minmax_product_price'] = 'Minimum and maximum product price';
$_['ms_config_minimum_product_price'] = 'Min';
$_['ms_config_maximum_product_price'] = 'Max';
$_['ms_config_minmax_product_price_note'] = 'Minimum and maximum product price (0 for no limits)';

$_['ms_config_allowed_image_types'] = 'Allowed image extensions';
$_['ms_config_allowed_image_types_note'] = 'Allowed image extensions';

$_['ms_config_images_limits'] = 'Product image limits';
$_['ms_config_images_limits_note'] = 'Minimum and maximum number of images (incl. thumbnail) required/allowed for products (0 = no limit)';

$_['ms_config_downloads_limits'] = 'Product download limits';
$_['ms_config_downloads_limits_note'] = 'Minimum and maximum number of downloads required/allowed for products (0 = no limit)';

$_['ms_config_allowed_download_types'] = 'Allowed download extensions';
$_['ms_config_allowed_download_types_note'] = 'Allowed download extensions';

$_['ms_config_credit_order_statuses'] = 'Fund statuses';
$_['ms_config_credit_order_statuses_note'] = 'Seller balance will be funded for orders with fund statuses';

$_['ms_config_debit_order_statuses'] = 'Charge statuses';
$_['ms_config_debit_order_statuses_note'] = 'Seller balance will be charged for orders with charge statuses';

$_['ms_config_display_order_statuses'] = 'Display order statuses';
$_['ms_config_display_order_statuses_note'] = 'Order statuses that aren\'t selected here will not be visible to sellers';

$_['ms_config_minimum_withdrawal'] = 'Minimum payout amount';
$_['ms_config_minimum_withdrawal_note'] = 'Minimum balance amount required to request payout';

$_['ms_config_allow_partial_withdrawal'] = 'Allow partial payouts';
$_['ms_config_allow_partial_withdrawal_note'] = 'Allow sellers to request partial payouts';

$_['ms_config_allow_withdrawal_requests'] = 'Allow payout requests';
$_['ms_config_allow_withdrawal_requests_note'] = 'Allow sellers to request earnings';

$_['ms_config_paypal_sandbox'] = 'PayPal Sandbox mode';
$_['ms_config_paypal_sandbox_note'] = 'Use PayPal in Sandbox mode for testing and debugging';

$_['ms_config_paypal_address'] = 'PayPal address';
$_['ms_config_paypal_address_note'] = 'Your PayPal address for listing and signup fees';

$_['ms_config_notification_email'] = 'Admin email for notifications';
$_['ms_config_notification_email_note'] = 'Email address for various notification mails';

$_['ms_config_allow_free_products'] = 'Allow free products';
$_['ms_config_allow_free_products_note'] = 'Allow sellers to add free products';

$_['ms_config_allow_multiple_categories'] = 'Allow multiple categories';
$_['ms_config_allow_multiple_categories_note'] = 'Allow sellers to add products to multiple categories';

$_['ms_config_additional_category_restrictions'] = 'Bulk disallow categories';
$_['ms_config_additional_category_restrictions_note'] = '<u>Disallow</u> sellers to list products in specific categories';
$_['ms_topmost_categories'] = 'Topmost categories';
$_['ms_parent_categories'] = 'All parent categories';

$_['ms_config_restrict_categories'] = 'Disallowed categories';
$_['ms_config_restrict_categories_note'] = '<u>Disallow</u> sellers to list products in these categories';

$_['ms_config_product_included_fields'] = 'Include fields for products';
$_['ms_config_product_included_fields_note'] = 'Fields to be added in the product form';

$_['ms_config_provide_buyerinfo'] = 'Mail buyer information';
$_['ms_config_provide_buyerinfo_note'] = 'Include buyer address in the Product purchased email';

$_['ms_config_enable_shipping'] = 'Enable OpenCart\'s "Shippable" option';
$_['ms_config_enable_shipping_note'] = 'New products will be created with OpenCart\'s "Shippable" field enabled. With MultiMerch Shipping Addon installed, this will enable shipping functionality.';

$_['ms_config_enable_quantities'] = 'Enable quantities';
$_['ms_config_enable_quantities_note'] = 'Allow sellers to specify quantities for products';

$_['ms_config_seller_terms_page'] = 'Seller account terms';
$_['ms_config_seller_terms_page_note'] = 'Sellers have to agree to the terms when creating a seller account.';

$_['ms_config_allow_specials'] = 'Allow special prices';
$_['ms_config_allow_specials_note'] = 'Allow sellers to define special prices';

$_['ms_config_allow_discounts'] = 'Allow quantity discounts';
$_['ms_config_allow_discounts_note'] = 'Allow sellers to define quantity discounts';
 
$_['ms_config_withdrawal_waiting_period'] = 'Payout waiting period';
$_['ms_config_withdrawal_waiting_period_note'] = 'Seller balance entries newer than this value will not be available for payout requests';

$_['ms_config_graphical_sellermenu'] = 'Graphical seller menu';
$_['ms_config_graphical_sellermenu_note'] = 'Graphical seller menu';

$_['ms_config_productform'] = 'Product form';
$_['ms_config_finances'] = 'Finances';
$_['ms_config_miscellaneous'] = 'Miscellaneous';

$_['ms_config_module'] = 'Modules';
$_['ms_config_status'] = 'Status';
$_['ms_config_top'] = 'Content Top';
$_['ms_config_bottom'] = 'Content Bottom';
$_['ms_config_column_left'] = 'Column Left';
$_['ms_config_column_right'] = 'Column Right';
$_['ms_config_limit'] = 'Limit:';
$_['ms_config_scroll'] = 'Scroll:';
$_['ms_config_image'] = 'Image (W x H):';
$_['ms_config_layout'] = 'Layout:';
$_['ms_config_position'] = 'Position:';
$_['ms_config_sort_order'] = 'Sort Order:';

$_['ms_config_enable_rte'] = 'Enable Rich Text Editor for descriptions';
$_['ms_config_enable_rte_note'] = 'Enable Summernote Rich Text Editor for product and seller description fields.';

$_['ms_config_rte_whitelist'] = 'Tag whitelist';
$_['ms_config_rte_whitelist_note'] = 'Permitted tags in RTE (empty = all tags permitted)';

$_['ms_config_image_sizes'] = 'Image sizes';
$_['ms_config_seller_avatar_image_size'] = 'Avatar image size';
$_['ms_config_seller_avatar_image_size_seller_profile'] = 'Seller profile';
$_['ms_config_seller_avatar_image_size_seller_list'] = 'Seller list';
$_['ms_config_seller_avatar_image_size_product_page'] = 'Product page';
$_['ms_config_seller_avatar_image_size_seller_dashboard'] = 'Seller dashboard';
$_['ms_config_seller_banner_size'] = 'Seller banner size';

$_['ms_config_image_preview_size'] = 'Image preview size';
$_['ms_config_image_preview_size_seller_avatar'] = 'Seller avatar';
$_['ms_config_image_preview_size_product_image'] = 'Product image';

$_['ms_config_product_image_size'] = 'Product image size';
$_['ms_config_product_image_size_seller_profile'] = 'Seller profile';
$_['ms_config_product_image_size_seller_products_list'] = 'Catalog products';
$_['ms_config_product_image_size_seller_products_list_account'] = 'Account products';


$_['ms_config_uploaded_image_size'] = 'Image size limits';
$_['ms_config_uploaded_image_size_note'] = 'Define uploaded image dimension limits (W x H). Set 0 for no limits.';
$_['ms_config_max'] = 'Max.';
$_['ms_config_min'] = 'Min.';

$_['ms_config_seo'] = 'SEO';
$_['ms_config_enable_seo_urls_seller'] = 'Generate SEO URLs for new sellers';
$_['ms_config_enable_seo_urls_seller_note'] = 'This option will generate SEO-friendly URLs for new sellers. SEO URLs need to be enabled in OpenCart to use this.';
$_['ms_config_enable_seo_urls_product'] = 'Generate SEO URLs for new products (experimental)';
$_['ms_config_enable_seo_urls_product_note'] = 'This option will generate SEO-friendly URLs for new product. SEO URLs need to be enabled in OpenCart to use this. Experimental, especially for non-English stores.';
$_['ms_config_enable_update_seo_urls'] = 'Enable SEO URLs generation for updated products';
$_['ms_config_enable_update_seo_urls_note'] = 'This setting enables new SEO URLs generation, when existing products are updated.';
$_['ms_config_enable_non_alphanumeric_seo'] = 'Allow UTF8 in SEO URLs (experimental)';
$_['ms_config_enable_non_alphanumeric_seo_note'] = 'This will not strip UTF8 symbols from SEO URLs. Use at your own risk.';
$_['ms_config_sellers_slug'] = 'Sellers SEO keyword';
$_['ms_config_sellers_slug_note'] = 'Sellers list SEO keyword (will work only if SEO is enabled)';

$_['ms_config_attributes'] = 'Nitelikler';
$_['ms_config_attribute_display'] = 'Nitelik görüntüleme';
$_['ms_config_attribute_display_note'] = 'Controls the way how attributes are displayed on the product page';
$_['ms_config_attribute_display_mm'] = 'MultiMerch';
$_['ms_config_attribute_display_oc'] = 'OpenCart';
$_['ms_config_attribute_display_both'] = 'Both';

$_['ms_config_privacy'] = 'Privacy';
$_['ms_config_enable_private_messaging'] = 'Allow customers to contact sellers';
$_['ms_config_enable_private_messaging_note'] = 'Enables or disables the seller contact dialog';

$_['ms_config_hide_customer_email'] = 'Hide customer email address';
$_['ms_config_hide_customer_email_note'] = 'Hides customer email address in the seller dashboard and in orders list';
$_['ms_config_hide_email_in_email'] = 'Hide email addresses in emails';
$_['ms_config_hide_email_in_email_note'] = 'Hides customer and seller email addresses in the emails sent by MultiMerch';

$_['ms_config_seller'] = 'Mağazalar';

// Change Seller Nickname
$_['ms_config_seller_change_nickname'] = 'Allow nickname change';
$_['ms_config_seller_change_nickname_note'] = 'Allow sellers to change nickname/shop name';

// Seller Nickname Rules
$_['ms_config_nickname_rules'] = 'Seller nickname rules';
$_['ms_config_nickname_rules_note'] = 'Character sets allowed in seller nicknames';
$_['ms_config_nickname_rules_alnum'] = 'Alphanumeric';
$_['ms_config_nickname_rules_ext'] = 'Extended latin';
$_['ms_config_nickname_rules_utf'] = 'Full UTF-8';

// Seller Avatars
$_['ms_config_avatars_for_sellers'] = 'Avatars for sellers';
$_['ms_config_avatars_for_sellers_note'] = 'Define the way seller avatars work';
$_['ms_config_avatars_manually'] = 'Uploaded manually by seller';
$_['ms_config_avatars_both'] = 'Both uploaded by seller and pre-defined';
$_['ms_config_avatars_predefined'] = 'Only pre-defined';

$_['ms_config_other'] = 'Other';
$_['ms_config_hide_sellers_product_count'] = 'Hide count of sellers and products in the header';
$_['ms_config_hide_sellers_product_count_note'] = 'Hides line, which contains count of sellers and products in the header';

// Seller - List
$_['ms_catalog_sellers_heading'] = 'Mağazalar';
$_['ms_catalog_sellers_breadcrumbs'] = 'Mağazalar';
$_['ms_catalog_sellers_newseller'] = 'Yeni mağaza';
$_['ms_catalog_sellers_create'] = 'Yeni mağaza oluştur';

$_['ms_catalog_sellers_total_balance'] = 'Tüm bakiyelerin toplamı: <b>%s</b> (aktif mağazalar: <b>%s</b>)';
$_['ms_catalog_sellers_email'] = 'E-posta';
$_['ms_catalog_sellers_total_products'] = 'Ürünler';
$_['ms_catalog_sellers_total_sales'] = 'Satışlar';
$_['ms_catalog_sellers_total_earnings'] = 'Kazançlar';
$_['ms_catalog_sellers_current_balance'] = 'Bakiye (Toplam/Mevcut)';
$_['ms_catalog_sellers_status'] = 'Durum';
$_['ms_catalog_sellers_date_created'] = 'Oluşturulma tarihi';
$_['ms_catalog_sellers_balance_paypal'] = 'PayPal aracılığıyla ödenen bakiye';

$_['ms_seller_change'] = 'Change seller';
$_['ms_seller_status_' . MsSeller::STATUS_ACTIVE] = 'Aktif';
$_['ms_seller_status_' . MsSeller::STATUS_INACTIVE] = 'Pasif';
$_['ms_seller_status_' . MsSeller::STATUS_DISABLED] = 'Devre dışı';
$_['ms_seller_status_' . MsSeller::STATUS_INCOMPLETE] = 'Tamamlanmamış';
$_['ms_seller_status_' . MsSeller::STATUS_DELETED] = 'Silinmiş';
$_['ms_seller_status_' . MsSeller::STATUS_UNPAID] = 'Ödenmemiş kayıt ücreti';

// Customer-seller form
$_['ms_catalog_sellerinfo_heading'] = 'Mağaza';
$_['ms_catalog_sellerinfo_seller_data'] = 'Mağaza verisi';

$_['ms_catalog_sellerinfo_customer'] = 'Müşteri';
$_['ms_catalog_sellerinfo_customer_data'] = 'Müşteri verisi';
$_['ms_catalog_sellerinfo_customer_new'] = 'Yeni müşteri';
$_['ms_catalog_sellerinfo_customer_existing'] = 'Mevcut müşteri';
$_['ms_catalog_sellerinfo_customer_create_new'] = 'Yeni müşteri oluştur';
$_['ms_catalog_sellerinfo_customer_firstname'] = 'Ad';
$_['ms_catalog_sellerinfo_customer_lastname'] = 'Soyad';
$_['ms_catalog_sellerinfo_customer_email'] = 'E-posta';
$_['ms_catalog_sellerinfo_customer_password'] = 'Şifre';
$_['ms_catalog_sellerinfo_customer_password_confirm'] = 'Şifreyi onayla';

$_['ms_catalog_sellerinfo_nickname'] = 'Kullanıcı adı';
$_['ms_catalog_sellerinfo_keyword'] = 'SEO anahtar kelimesi';
$_['ms_catalog_sellerinfo_description'] = 'Açıklama';
$_['ms_catalog_sellerinfo_company'] = 'Şirket';
$_['ms_catalog_sellerinfo_country'] = 'Ülke';
$_['ms_catalog_sellerinfo_zone'] = 'Bölge / Şehir';
$_['ms_catalog_sellerinfo_zone_select'] = 'Bölge/Şehir seç';
$_['ms_catalog_sellerinfo_zone_not_selected'] = 'Bölge/Şehir seçilmedi';
$_['ms_catalog_sellerinfo_zone_note'] = 'Listeden Bölge/Şehir seçiniz.';
$_['ms_catalog_sellerinfo_sellergroup'] = 'Mağaza grubu';

$_['ms_catalog_sellerinfo_country_dont_display'] = 'Ülkeyi görüntüleme';
$_['ms_catalog_sellerinfo_avatar'] = 'Avatar';
$_['ms_catalog_sellerinfo_paypal'] = 'Paypal';
$_['ms_catalog_sellerinfo_message'] = 'Mesaj';
$_['ms_catalog_sellerinfo_message_note'] = 'Varsayılan e-posta metininin üzerine eklenecektir';
$_['ms_catalog_sellerinfo_notify'] = 'Mağazayı e-posta ile bilgilendir';
$_['ms_catalog_sellerinfo_product_validation'] = 'Ürün onaylama';
$_['ms_catalog_sellerinfo_product_validation_note'] = 'Bu mağaza için ürün onaylama';

$_['ms_error_sellerinfo_nickname_empty'] = 'Kullanıcı adı boş bırakılamaz';
$_['ms_error_sellerinfo_nickname_alphanumeric'] = 'Nickname can only contain alphanumeric symbols';
$_['ms_error_sellerinfo_nickname_utf8'] = 'Nickname can only contain printable UTF-8 symbols';
$_['ms_error_sellerinfo_nickname_latin'] = 'Nickname can only contain alphanumeric symbols and diacritics';
$_['ms_error_sellerinfo_nickname_length'] = 'Nickname should be between 4 and 50 characters';
$_['ms_error_sellerinfo_nickname_taken'] = 'This nickname is already taken';

// Catalog - Products
$_['ms_catalog_products_heading'] = 'Ürünler';
$_['ms_catalog_products_breadcrumbs'] = 'Ürünler';
$_['ms_catalog_products_notify_sellers'] = 'Mağazaları bilgilendir';
$_['ms_catalog_products_bulk'] = '--Toplu durum değişikliği--';
$_['ms_catalog_products_noseller'] = '--Mağaza yok--';

$_['ms_product_status_' . MsProduct::STATUS_ACTIVE] = 'Aktif';
$_['ms_product_status_' . MsProduct::STATUS_INACTIVE] = 'Pasif';
$_['ms_product_status_' . MsProduct::STATUS_DISABLED] = 'Devre dışı';
$_['ms_product_status_' . MsProduct::STATUS_DELETED] = 'Silinmiş';
$_['ms_product_status_' . MsProduct::STATUS_UNPAID] = 'Ödenmemiş liste ücreti';

$_['ms_catalog_products_field_meta_keyword'] 	 = 'Meta Tag Keywords';
$_['ms_catalog_products_field_meta_description'] = 'Meta Tag Description';
$_['ms_catalog_products_field_model']            = 'Model';
$_['ms_catalog_products_field_sku']              = 'SKU';
$_['ms_catalog_products_field_upc']              = 'UPC';
$_['ms_catalog_products_field_ean']              = 'EAN';
$_['ms_catalog_products_field_jan']              = 'JAN';
$_['ms_catalog_products_field_isbn']             = 'ISBN';
$_['ms_catalog_products_field_mpn']              = 'MPN';
$_['ms_catalog_products_field_manufacturer']     = 'Manufacturer';
$_['ms_catalog_products_field_date_available']   = 'Date Available';
$_['ms_catalog_products_field_stock_status']     = 'Out Of Stock Status';
$_['ms_catalog_products_field_tax_class']        = 'Tax Class';
$_['ms_catalog_products_field_subtract']         = 'Subtract Stock';

// Catalog - Seller Groups
$_['ms_catalog_seller_groups_heading'] = 'Mağaza grupları';
$_['ms_catalog_seller_groups_breadcrumbs'] = 'Mağaza grupları';

$_['ms_seller_groups_column_id'] = 'ID';
$_['ms_seller_groups_column_name'] = 'İsim';
$_['ms_seller_groups_column_action'] = 'Eylemler';

$_['ms_catalog_insert_seller_group_heading'] = 'Yeni Mağaza Grubu';
$_['ms_catalog_edit_seller_group_heading'] = 'Mağaza Grubunu Düzenle';

$_['ms_product_period'] = 'Ürün listeleme periyodu gün bazında (0 = limitsiz)';
$_['ms_product_quantity'] = 'Ürün adedi (0 = limitsiz)';

$_['ms_error_seller_group_name'] = 'Error: Name must be between 3 and 32 symbols long';
$_['ms_error_seller_group_default'] = 'Error: Default seller group can not be deleted!';
$_['ms_success_seller_group_created'] = 'Seller group created';
$_['ms_success_seller_group_updated'] = 'Seller group updated';

// Payments
$_['ms_payment_heading'] = 'Payments';
$_['ms_payment_breadcrumbs'] = 'Payments';
$_['ms_payment_payout_requests'] = 'Payout requests';
$_['ms_payment_payouts'] = 'Manual payouts';
$_['ms_payment_pending'] = 'Pending';
$_['ms_payment_new'] = 'New payment';
$_['ms_payment_paid'] = 'Paid';
$_['ms_payment_deduct'] = 'Deduct from balance';
$_['ms_payment_payout_paypal'] = 'Pay out via PayPal';
$_['ms_payment_payout_paypal_invalid'] = 'PayPal address not specified or invalid';
$_['ms_payment_mark'] = 'Mark as paid';
$_['ms_payment_delete'] = 'Delete payment record';

$_['ms_payment_type_' . MsPayment::TYPE_SIGNUP] = 'Signup fee';
$_['ms_payment_type_' . MsPayment::TYPE_LISTING] = 'Listing fee';
$_['ms_payment_type_' . MsPayment::TYPE_PAYOUT] = 'Manual payout';
$_['ms_payment_type_' . MsPayment::TYPE_PAYOUT_REQUEST] = 'Payout request';
$_['ms_payment_type_' . MsPayment::TYPE_RECURRING] = 'Recurring payment';
$_['ms_payment_type_' . MsPayment::TYPE_SALE] = 'Sale';

$_['ms_payment_status_' . MsPayment::STATUS_UNPAID] = 'Unpaid';
$_['ms_payment_status_' . MsPayment::STATUS_PAID] = 'Paid';

$_['ms_error_payment_fromto'] = 'Only store to seller and seller to store payments are supported.';
$_['ms_error_payment_fromstore'] = 'Outgoing payments (store to seller) can only be of types Payout or Payout request';
$_['ms_error_payment_tostore'] = 'Incoming payments (seller to store) can not be of types Payout or Payout request';
$_['ms_error_payment_amount'] = 'Please specify a valid payment amount';
$_['ms_error_payment_norequests'] = 'Error: no valid payouts to process. Please make sure the sellers have enough funds and valid PayPal addresses specified';
$_['ms_success_payment_created'] = 'Payment successfully created';

// Finances - Transactions
$_['ms_transactions_heading'] = 'Transactions';
$_['ms_transactions_breadcrumbs'] = 'Transactions';
$_['ms_transactions_new'] = 'New transaction';

$_['ms_error_transaction_fromto'] = 'Please specify at least the source or the destination seller';
$_['ms_error_transaction_fromto_same'] = 'Source and destination cannot be the same';
$_['ms_error_transaction_amount'] = 'Please specify a valid positive amount';
$_['ms_success_transaction_created'] = 'Transaction successfully created';

$_['button_cancel'] = 'İptal';
$_['button_save'] = 'Kaydet';
$_['ms_action'] = 'Eylem';

// Attributes
$_['ms_attribute_heading'] = 'Nitelikler';
$_['ms_attribute_breadcrumbs'] = 'Nitelikler';
$_['ms_attribute_create'] = 'Yeni nitelik';
$_['ms_attribute_edit'] = 'Niteliği düzenle';
$_['ms_attribute_group'] = 'Nitelik grubu';
$_['ms_attribute_value'] = 'Nitelik değeri';
$_['ms_attribute_text_type'] = 'Metin girdi türü';
$_['ms_attribute_normal'] = 'Genel metin';
$_['ms_attribute_multilang'] = 'Dile-özgü metin';
$_['ms_attribute_number'] = 'Sayı';
$_['ms_attribute_required'] = 'Gerekli';
$_['ms_attribute_tab_display'] = 'Ürün sekmesi olarak görüntüle';
$_['ms_add_attribute_value'] = 'Yeni nitelik değeri';
$_['ms_error_attribute_name'] = 'Nitelik ismi 1 - 128 karakter arasında olmalıdır';
$_['ms_error_attribute_type'] = 'Bu nitelik türü değer gerektirmektedir';
$_['ms_error_attribute_value_name'] = 'Nitelik değeri 1 - 128 karakter arasında olmalıdır';
$_['ms_success_attribute_created'] = 'Nitelik başarıyla oluşturuldu';
$_['ms_success_attribute_updated'] = 'Nitelik başarıyla güncellendi';

$_['button_cancel'] = 'İptal';
$_['button_save'] = 'Kaydet';
$_['ms_action'] = 'Eylem';

// Mails
$_['ms_mail_greeting'] = "Hello %s,\n\n";
$_['ms_mail_greeting_no_name'] = "Hello,\n\n";
$_['ms_mail_ending'] = "\n\nRegards,\n%s";
$_['ms_mail_message'] = "\n\nMessage:\n%s";

$_['ms_mail_subject_seller_account_modified'] = 'Seller account modified';
$_['ms_mail_seller_account_modified'] = <<<EOT
Your seller account at %s has been modified by the administrator.

Account status: %s
EOT;

$_['ms_mail_subject_product_modified'] = 'Product modified';
$_['ms_mail_product_modified'] = <<<EOT
Your product %s at %s has been modified by the administrator.

Product status: %s
EOT;

$_['ms_mail_subject_product_purchased'] = 'New order';
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

$_['ms_mail_product_purchased_comment'] = 'Comment: %s';

// Sales - Mail
$_['ms_transaction_order_created'] = 'Sipariş oluşturuldu';
$_['ms_transaction_order'] = 'Satış: Sipariş ID #%s';
$_['ms_transaction_sale'] = 'Satış: %s (-%s komisyon)';
$_['ms_transaction_refund'] = 'Geri Ödeme: %s';
$_['ms_payment_method'] = 'Ödeme metodu';
$_['ms_payment_method_balance'] = 'Mağaza bakiyesi';
$_['ms_payment_method_paypal'] = 'PayPal';
$_['ms_payment_method_inherit'] = 'Miras Al';
$_['ms_payment_royalty_payout'] = 'Şu kişiye telif hakkı ödemesi %s at %s';
$_['ms_payment_generic'] = 'Ödeme #%s at %s';
$_['ms_payment_completed'] = 'Ödeme tamamlandı';

?>
