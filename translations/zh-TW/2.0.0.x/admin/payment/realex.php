<?php
// Heading
$_['heading_title']					 = 'Realex Redirect';

// Text
$_['text_payment']				  	 = '支付管理';
$_['text_success']					 = '成功: 您已修改了Realex 帳戶的詳細信息！';
$_['text_edit']                      = '編輯Realex Redirect';
$_['text_live']						 = '在線模式(Live)';
$_['text_demo']						 = '演示';
$_['text_card_type']				 = '信用卡類型';
$_['text_enabled']					 = '啟用';
$_['text_use_default']				 = '使用預設值';
$_['text_merchant_id']				 = '商戶 ID';
$_['text_subaccount']				 = '子帳戶';
$_['text_secret']					 = '共用密鑰';
$_['text_card_visa']				 = 'Visa';
$_['text_card_master']				 = 'MasterCard';
$_['text_card_amex']				 = 'American Express';
$_['text_card_switch']				 = 'Switch/Maestro';
$_['text_card_laser']				 = 'Laser';
$_['text_card_diners']				 = 'Diners';
$_['text_capture_ok']				 = '已成功捕獲';
$_['text_capture_ok_order']			 = '已成功捕獲，訂單狀​​態更新為成功-已解決';
$_['text_rebate_ok']				 = '已成功回赠';
$_['text_rebate_ok_order']			 = '已成功回贈，訂單狀態更新為已回贈';
$_['text_void_ok']					 = '已成功取消訂單，訂單狀態更新為無效';
$_['text_settle_auto']				 = '自動';
$_['text_settle_delayed']			 = '延遲';
$_['text_settle_multi']				 = '多種';
$_['text_url_message']				 = '您必須向您的Realex 帳戶管理員提供商店URL 才能啟動';
$_['text_payment_info']				 = '支付信息';
$_['text_capture_status']			 = '款項已捕獲';
$_['text_void_status']				 = '款項已無效';
$_['text_rebate_status']			 = '款項已回贈';
$_['text_order_ref']				 = '訂單參考';
$_['text_order_total']				 = '授權總數';
$_['text_total_captured']			 = '捕獲總數';
$_['text_transactions']				 = '交易記錄';
$_['text_column_amount']			 = '金額';
$_['text_column_type']				 = '類型';
$_['text_column_date_added']		 = '已創建';
$_['text_confirm_void']				 = '你確定要取消款項？';
$_['text_confirm_capture']			 = '您確定要捕獲款項？';
$_['text_confirm_rebate']			 = '您確定要回贈款項？';
$_['text_realex']					 = '<a target="_blank" href="http://www.realexpayments.co.uk/partner-refer?id=opencart"><img src="view/image/payment/realex.png" alt="Realex" title="Realex" style="border: 1px solid #EEEEEE;" /></a>';

// Entry
$_['entry_merchant_id']				 = '商戶 ID';
$_['entry_secret']					 = '共用密鑰';
$_['entry_rebate_password']			 = '回贈密碼';
$_['entry_total']					 = '總計';
$_['entry_sort_order']				 = '排序次序';
$_['entry_geo_zone']				 = '地理區域';
$_['entry_status']					 = '狀態';
$_['entry_debug']					 = '調試日誌記錄';
$_['entry_live_demo']				 = '在線/演示';
$_['entry_auto_settle']				 = '結算類型';
$_['entry_card_select']				 = '選擇信用卡';
$_['entry_tss_check']				 = 'TSS 檢查';
$_['entry_live_url']				 = '在線連接 URL';
$_['entry_demo_url']				 = '演示連接 URL';
$_['entry_status_success_settled']	 = '成功-已解決';
$_['entry_status_success_unsettled'] = '成功 - 沒解決';
$_['entry_status_decline']			 = '拒絕';
$_['entry_status_decline_pending']	 = '拒絕 - offline auth';
$_['entry_status_decline_stolen']	 = '拒絕-遺失或被盜卡';
$_['entry_status_decline_bank']		 = '拒絕-銀行錯誤';
$_['entry_status_void']				 = '已無效';
$_['entry_status_rebate']			 = '已回贈';
$_['entry_notification_url']		 = '通知 URL';

// Help
$_['help_total']					 = '需要最低結帳金額才能啟動支付模組';
$_['help_card_select']				 = '將他們重定向之前要求用戶選擇信用卡類型';
$_['help_notification']				 = '您需要提供此URL 到Realex 來獲取付款通知';
$_['help_debug']					 = '啟用調試會將敏感數據寫到日誌文件。除非另有指示，應該設定為停用。';
$_['help_dcc_settle']				 = '如果您的子賬戶是啟用DCC，您必須使用自動結算';

// Tab
$_['tab_api']					     = 'API 的詳細信息';
$_['tab_account']		     		 = '帳戶';
$_['tab_order_status']				 = '訂單狀態';
$_['tab_payment']					 = '支付管理設置';
$_['tab_advanced']					 = '進階';

// Button
$_['button_capture']				 = '捕獲模式';
$_['button_rebate']					 = '回贈/退款';
$_['button_void']					 = '無效';

// Error
$_['error_merchant_id']				 = '必須輸入商戶ID';
$_['error_secret']					 = '必需填寫共用密鑰';
$_['error_live_url']				 = '必需填寫在線URL';
$_['error_demo_url']				 = '必需填寫演示URL';
$_['error_data_missing']			 = '遺失數據';
$_['error_use_select_card']			 = '您必需啟用"選擇卡"來路由子帳戶的卡類型';