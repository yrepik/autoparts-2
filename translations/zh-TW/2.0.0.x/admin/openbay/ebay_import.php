<?php
// Heading
$_['heading_title']                     = '滙入商品';
$_['text_openbay']                      = 'OpenBay Pro';
$_['text_ebay']                         = 'eBay';

// Text
$_['text_sync_import_line1']            = '<strong>注意!</strong> 這將導入您的所有eBay 商品，並在您的商店建立一個商品分類結構。但我們還是建議您在運行此選項前刪除所有分類和商品. <br />該產品分類結構是正常的eBay 商品分類，而不是您的店舖的商品分類 (如果您有一個eBay 商店)。您可以在不影響eBay 商品的情況下重新命名，刪除和編輯已導入的商品分類。';
$_['text_sync_import_line3']            = '您需要確保您的伺服器可以接受和處理大量的POST 數據。 1000個eBay 商品約有40Mb大小, 您需要計算出您所需要的大小。如果您滙入失敗，那麼很可能您設置過小。您的PHP內存限制需約 128Mb。';
$_['text_sync_server_size']             = '目前您的伺服器可以接受: ';
$_['text_sync_memory_size']             = '您的 PHP 內存限制: ';
$_['text_import_confirm']				= '這將滙入您的所有eBay 商品作為新商品，您是否確定? 這將不能還原! 請確定您已做了備份!';
$_['text_import_notify']				= '您的滙入請求已經被送往處理. 在滙入時，每1000個商品約需1小時。';
$_['text_import_images_msg1']           = '圖像正在從 eBay等待滙入/複製。如果數量沒有降低，請刷新此頁。';
$_['text_import_images_msg2']           = '點擊這裡';
$_['text_import_images_msg3']           = '請等等. 可以在<a href="http://shop.openbaypro.com/index.php?route=information/faq&topic=8_45"target="_blank"> 這裡</a>找到為什麼發生這種情況的更多信息';

// Entry
$_['entry_import_item_advanced']        = '獲得進階數據';
$_['entry_import_categories']         	= '匯入分類';
$_['entry_import_description']			= '匯入商品說明';
$_['entry_import']						= '滙入 eBay 商品';

// Buttons
$_['button_import']						= '匯入';

// Help
$_['help_import_item_advanced']        	= '如果滙入重量、 尺寸、 ISBN 和其他將需要10 倍時間。';
$_['help_import_categories']         	= '滙入時，跟據eBay 的類別在你商店建立新類別。';
$_['help_import_description']         	= '這將滙入全部內容包括HTML、 訪問計數器等';

// Error
$_['error_import']                   	= '載入失敗';
$_['error_maintenance']					= '您的商店是在維護模式下。滙入將會失敗 ！';
$_['error_ajax_load']					= '未能連接到伺服器';
$_['error_validation']					= '您需要註冊您的 API標記和啟用模組。';