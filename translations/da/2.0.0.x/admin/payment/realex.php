<?php
// Heading
$_['heading_title']					 = 'Realex Redirect';

// Text
$_['text_payment']				  	 = 'Betaling';
$_['text_success']					 = 'Succes: Du har ændret Realex kontodetaljer!';
$_['text_edit']                      = 'Rediger Realex Redirect';
$_['text_live']						 = 'Live';
$_['text_demo']						 = 'Demo';
$_['text_card_type']				 = 'Korttype';
$_['text_enabled']					 = 'Aktiveret';
$_['text_use_default']				 = 'Brug standard';
$_['text_merchant_id']				 = 'Sælger-ID';
$_['text_subaccount']				 = 'Subkonto';
$_['text_secret']					 = 'Delt hemmelighed';
$_['text_card_visa']				 = 'Visa';
$_['text_card_master']				 = 'MasterCard';
$_['text_card_amex']				 = 'American Express';
$_['text_card_switch']				 = 'Switch/Maestro';
$_['text_card_laser']				 = 'Laser';
$_['text_card_diners']				 = 'Diners';
$_['text_capture_ok']				 = 'Modtagelsen lykkedes';
$_['text_capture_ok_order']			 = 'Modtagelsen var vellykket, ordrestatus opdateret til succes - afgjort';
$_['text_rebate_ok']				 = 'Rabatten blev vellykket';
$_['text_rebate_ok_order']			 = 'Rabat var vellykket, ordrestatus opdateret til rabatteret';
$_['text_void_ok']					 = 'Annullering var vellykket, ordrestatus opdateret til annulleret';
$_['text_settle_auto']				 = 'Automatisk';
$_['text_settle_delayed']			 = 'Forsinket';
$_['text_settle_multi']				 = 'Multi';
$_['text_url_message']				 = 'Du skal sende butikkens URL-adresse til din Realex kontomanager før de går live';
$_['text_payment_info']				 = 'Betalingsoplysninger';
$_['text_capture_status']			 = 'Betaling modtaget';
$_['text_void_status']				 = 'Betalingen annulleret';
$_['text_rebate_status']			 = 'Betaling rabatteret';
$_['text_order_ref']				 = 'Ordrereference';
$_['text_order_total']				 = 'I alt godkendte';
$_['text_total_captured']			 = 'I alt modtaget';
$_['text_transactions']				 = 'Transaktioner';
$_['text_column_amount']			 = 'Beløb';
$_['text_column_type']				 = 'Type';
$_['text_column_date_added']		 = 'Oprettet';
$_['text_confirm_void']				 = 'Vil du annullere betalingen?';
$_['text_confirm_capture']			 = 'Er du sikker på, at du vil modtage betalingen?';
$_['text_confirm_rebate']			 = 'Er du sikker på, at du vil genforhandle betalingen?';
$_['text_realex']					 = '<a target="_blank" href="http://www.realexpayments.co.uk/partner-refer?id=opencart"><img src="view/image/payment/realex.png" alt="Realex" title="Realex" style="border: 1px solid #EEEEEE;" /></a>';

// Entry
$_['entry_merchant_id']				 = 'Sælger-ID';
$_['entry_secret']					 = 'Delt hemmelighed';
$_['entry_rebate_password']			 = 'Rabat adgangskode';
$_['entry_total']					 = 'I alt';
$_['entry_sort_order']				 = 'Sorteringsorden';
$_['entry_geo_zone']				 = 'Geo zone';
$_['entry_status']					 = 'Status';
$_['entry_debug']					 = 'Debug logføring';
$_['entry_live_demo']				 = 'Live / Demo';
$_['entry_auto_settle']				 = 'Afgørelsestype';
$_['entry_card_select']				 = 'Vælg kort';
$_['entry_tss_check']				 = 'TSS kontrol';
$_['entry_live_url']				 = 'Live connection URL';
$_['entry_demo_url']				 = 'Demo connection URL';
$_['entry_status_success_settled']	 = 'Succes - afgjort';
$_['entry_status_success_unsettled'] = 'Succes - ikke afgjort';
$_['entry_status_decline']			 = 'Afvis';
$_['entry_status_decline_pending']	 = 'Afvis - offline auth';
$_['entry_status_decline_stolen']	 = 'Afvist - tabt eller stjålet kort';
$_['entry_status_decline_bank']		 = 'Afvist - bank fejl';
$_['entry_status_void']				 = 'Annulleret';
$_['entry_status_rebate']			 = 'Rabatteret';
$_['entry_notification_url']		 = 'Notifikations URL';

// Help
$_['help_total']					 = 'Den samlede værdi orden skal nå, før denne betalingstype bliver aktiv';
$_['help_card_select']				 = 'Bed brugeren om at vælge korttype, før de omdirigeres';
$_['help_notification']				 = 'Du skal sende denne URL-adresse til Realex at få betalingsnotificeringer';
$_['help_debug']					 = 'Aktivering debug vil skrive følsomme data til en logfil. Du bør altid Deaktivere medmindre andet er angivet';
$_['help_dcc_settle']				 = 'Hvis din subkonto er DCC aktiveret du skal bruge Autoafgør';

// Tab
$_['tab_api']					     = 'API detaljer';
$_['tab_account']		     		 = 'Konti';
$_['tab_order_status']				 = 'Ordrestatus';
$_['tab_payment']					 = 'Betalingsindstillinger';
$_['tab_advanced']					 = 'Avanceret';

// Button
$_['button_capture']				 = 'Fang';
$_['button_rebate']					 = 'Rabat / refusion';
$_['button_void']					 = 'Annuller';

// Error
$_['error_merchant_id']				 = 'Sælger-ID er påkrævet';
$_['error_secret']					 = 'Delt hemmelighed er påkrævet';
$_['error_live_url']				 = 'Live URL er påkrævet';
$_['error_demo_url']				 = 'Demo URL er påkrævet';
$_['error_data_missing']			 = 'Data mangler';
$_['error_use_select_card']			 = 'Du skal have "Vælg kortet" aktiveret for subkonto routing af korttypen for at arbejde';