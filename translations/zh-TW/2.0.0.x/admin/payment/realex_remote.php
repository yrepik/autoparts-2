<?php
// Heading
$_['heading_title']					= 'Realex Remote';

// Text
$_['text_payment']					= '支付管理';
$_['text_success']					= '成功: 您已修改了Realex 帳戶的詳細信息！';
$_['text_edit']                     = '編輯 Realex Remote';
$_['text_card_type']				= '信用卡類型';
$_['text_enabled']					= '啟用';
$_['text_use_default']				= '使用預設值';
$_['text_merchant_id']				= '商戶 ID';
$_['text_subaccount']				= '子帳戶';
$_['text_secret']					= '共用密鑰';
$_['text_card_visa']				= 'Visa';
$_['text_card_master']				= 'Mastercard';
$_['text_card_amex']				= 'American Express';
$_['text_card_switch']				= 'Switch/Maestro';
$_['text_card_laser']				= 'Laser';
$_['text_card_diners']				= 'Diners';
$_['text_capture_ok']				= '已成功捕獲';
$_['text_capture_ok_order']			= '捕獲已成功，訂單狀態更新為成功 - 已解決';
$_['text_rebate_ok']				= '已成功回贈';
$_['text_rebate_ok_order']			= '已成功回贈，訂單狀態更新為已回贈';
$_['text_void_ok']					= '已成功取消訂單，訂單狀態更新為無效';
$_['text_settle_auto']				= '自動';
$_['text_settle_delayed']			= '延遲';
$_['text_settle_multi']				= '多種';
$_['text_ip_message']				= '您必須提供您的服務器IP 地址到您的Realex 帳戶管理員才能啟動';
$_['text_payment_info']				= '支付信息';
$_['text_capture_status']			= '款項已捕獲';
$_['text_void_status']				= '款項已無效';
$_['text_rebate_status']			= '款項已回贈';
$_['text_order_ref']				= '訂單參考';
$_['text_order_total']				= '授權總數';
$_['text_total_captured']			= '捕獲總數';
$_['text_transactions']				= '交易記錄';
$_['text_confirm_void']				= '你確定要取消款項？';
$_['text_confirm_capture']			= '您確定要捕獲款項？';
$_['text_confirm_rebate']			= '您確定要回贈款項？';
$_['text_realex_remote']			= '<a target="_BLANK" href="http://www.realexpayments.co.uk/partner-refer?id=opencart"><img src="view/image/payment/realex.png" alt="Realex" title="Realex" style="border: 1px solid #EEEEEE;" /></a>';

// Column
$_['text_column_amount']			= '金額';
$_['text_column_type']				= '類型';
$_['text_column_date_added']		= '創建';

// Entry
$_['entry_merchant_id']				= '商戶 ID';
$_['entry_secret']					= '共用密鑰';
$_['entry_rebate_password']			= '回贈密碼';
$_['entry_total']					= '總計';
$_['entry_sort_order']				= '排序次序';
$_['entry_geo_zone']				= '地理區域';
$_['entry_status']					= '狀態';
$_['entry_debug']					= '調試日誌記錄';
$_['entry_auto_settle']				= '結算類型';
$_['entry_tss_check']				= 'TSS 檢查';
$_['entry_card_data_status']		= '卡信息日誌記錄';
$_['entry_3d']						= '啟用 3D secure';
$_['entry_liability_shift']			= '接受非責任轉移方案';
$_['entry_status_success_settled']	= '成功-已解決';
$_['entry_status_success_unsettled'] = '成功 - 沒解決';
$_['entry_status_decline']			= '拒絕';
$_['entry_status_decline_pending']	= '拒絕 - offline auth';
$_['entry_status_decline_stolen']	= '拒絕-遺失或被盜卡';
$_['entry_status_decline_bank']		= '拒絕-銀行錯誤';
$_['entry_status_void']				= '已無效';
$_['entry_status_rebate']			= '已回贈';

// Help
$_['help_total']					= '需要最低結帳金額才能啟動支付模組';
$_['help_card_select']				= '將他們重定向之前要求用戶選擇其信用卡類型';
$_['help_notification']				= '您需要提供此URL 到Realex 來獲取付款通知';
$_['help_debug']					= '啟用調試模式會將敏感數據寫到日誌文件。除非另有指示，您應該設定為停用。';
$_['help_liability']				= '接受責任就意味著用戶失敗3D secure時，您依然會接受付款。';
$_['help_card_data_status']			= '記錄最後4 個​​卡位數字、 過期、 名稱、 類型和發行銀行信息';

// Tab
$_['tab_api']					    = 'API 的詳細信息';
$_['tab_account']				    = '帳戶';
$_['tab_order_status']				= '訂單狀態';
$_['tab_payment']					= '支付管理設置';

// Button
$_['button_capture']				= '捕獲';
$_['button_rebate']					= '回贈/退款';
$_['button_void']					= '無效';

// Error
$_['error_merchant_id']				= '必須輸入商戶ID';
$_['error_secret']					= '必需填寫共用密鑰';