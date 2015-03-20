<?php
// Heading
$_['heading_title']					= 'First Data EMEA 網頁服務 API';

// Text
$_['text_firstdata_remote']			= '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_payment']					= '支付管理';
$_['text_success']					= '成功: 您已修改了First Data帳戶詳細信息！';
$_['text_edit']                     = '編輯 First Data EMEA 網頁服務 API';
$_['text_card_type']				= '信用卡類型';
$_['text_enabled']					= '已啟用';
$_['text_merchant_id']				= '商店ID';
$_['text_subaccount']				= '子帳戶';
$_['text_user_id']					= '用戶 ID';
$_['text_capture_ok']				= '成功捕獲';
$_['text_capture_ok_order']			= '已成功捕獲，訂單狀態更新到成功 - 已解決';
$_['text_refund_ok']				= '成功退款';
$_['text_refund_ok_order']			= '已成功退款，訂單狀態更新為已退款';
$_['text_void_ok']					= '已成功取消訂單，訂單狀態更新為無效';
$_['text_settle_auto']				= '銷售模式';
$_['text_settle_delayed']			= '準備身份驗證';
$_['text_mastercard']				= 'Mastercard';
$_['text_visa']						= 'Visa';
$_['text_diners']					= 'Diners';
$_['text_amex']						= 'American Express';
$_['text_maestro']					= 'Maestro';
$_['text_payment_info']				= '付款資訊';
$_['text_capture_status']			= '款項已捕獲';
$_['text_void_status']				= '款項已無效';
$_['text_refund_status']			= '款項已退款';
$_['text_order_ref']				= '訂單參考';
$_['text_order_total']				= '授權總數';
$_['text_total_captured']			= '捕獲總數';
$_['text_transactions']				= '交易記錄';
$_['text_column_amount']			= '金額';
$_['text_column_type']				= '類型';
$_['text_column_date_added']		= '已創建';
$_['text_confirm_void']				= '你確定要取消款項？';
$_['text_confirm_capture']			= '您確定要捕獲款項？';
$_['text_confirm_refund']			= '您確定要退還款項？';

// Entry
$_['entry_certificate_path']		= '證書路徑';
$_['entry_certificate_key_path']	= '專用密鑰路徑';
$_['entry_certificate_key_pw']		= '專用密鑰密碼';
$_['entry_certificate_ca_path']		= 'CA路徑';
$_['entry_merchant_id']				= '商店ID';
$_['entry_user_id']					= '用戶 ID';
$_['entry_password']				= '密碼';
$_['entry_total']					= '總計';
$_['entry_sort_order']				= '排序次序';
$_['entry_geo_zone']				= '地理區域';
$_['entry_status']					= '狀態';
$_['entry_debug']					= '調試日誌記錄';
$_['entry_auto_settle']				= '結算類型';
$_['entry_status_success_settled']	= '成功-已解決';
$_['entry_status_success_unsettled'] = '成功 - 沒解決';
$_['entry_status_decline']			 = '拒絕';
$_['entry_status_void']				 = '已無效';
$_['entry_status_refund']			 = '已成功退款，訂單狀態更新為已退款';
$_['entry_enable_card_store']		 = '啟用信用卡存儲標記';
$_['entry_cards_accepted']			 = '信用卡類型已接受';

// Help
$_['help_total']					 = '需要最低結帳金額才能啟動支付模組';
$_['help_certificate']				 = '證書和專用鑰密應存儲在您的公共網頁文件夾之外';
$_['help_card_select']				 = '將他們重定向之前要求用戶選擇其信用卡類型';
$_['help_notification']				 = '您需要提供此URL給 First Data 以獲得付款通知';
$_['help_debug']					 = '啟用調試模式會將敏感數據寫到日誌文件。除非另有指示，您應該設定為停用。';
$_['help_settle']					 = '如果您使用pre-auth操作，您必須3-5 天內完成post- auth 操作否則為您的交易將被取消';

// Tab
$_['tab_account']					 = 'API 信息';
$_['tab_order_status']				 = '訂單狀態';
$_['tab_payment']					 = '支付管理設置';

// Button
$_['button_capture']				= '捕獲模式';
$_['button_refund']					= '退款';
$_['button_void']					= '無效';

// Error
$_['error_merchant_id']				= '必需填寫商店ID';
$_['error_user_id']					= '必須輸入用戶 ID';
$_['error_password']				= '必須輸入密碼';
$_['error_certificate']				= '必須輸入證書路徑';
$_['error_key']						= '必須輸入證書密鑰';
$_['error_key_pw']					= '必須輸入證書密鑰密碼';
$_['error_ca']						= '必須輸入證書頒發機構 (CA)';