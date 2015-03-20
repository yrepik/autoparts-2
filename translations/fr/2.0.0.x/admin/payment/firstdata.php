<?php
// Heading
$_['heading_title']					 = 'First Data EMEA Connect (3DSecure activé)';

// Text
$_['text_payment']					 = 'Paiement';
$_['text_success']					 = 'Succès : Vous avez modifié les détails de compte First Data !';
$_['text_edit']                      = 'Edit First Data EMEA Connect (3DSecure activé)';
$_['text_notification_url']			 = 'URL de notification';
$_['text_live']						 = 'LIVE';
$_['text_demo']						 = 'Démo';
$_['text_enabled']					 = 'Activé';
$_['text_merchant_id']				 = 'ID de la base';
$_['text_secret']					 = 'Secret partagé';
$_['text_capture_ok']				 = 'Capture a été un succès';
$_['text_capture_ok_order']			 = 'Capture a été un succès, commander statut mis à jour vers le succès - réglé';
$_['text_void_ok']					 = 'Void a été un succès, commander statut mis à jour et indique alors annulé';
$_['text_settle_auto']				 = 'Vente';
$_['text_settle_delayed']			 = 'Pré auth';
$_['text_success_void']				 = 'La transaction a été annulée';
$_['text_success_capture']			 = 'La transaction a été capturée';
$_['text_firstdata']				 = '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_payment_info']				 = 'Informations de paiement';
$_['text_capture_status']			 = 'Paiement capturé';
$_['text_void_status']				 = 'Paiement annulé';
$_['text_order_ref']				 = 'Réf. de commande';
$_['text_order_total']				 = 'Total autorisé';
$_['text_total_captured']			 = 'Capturé au total';
$_['text_transactions']				 = 'Transactions';
$_['text_column_amount']			 = 'Montant';
$_['text_column_type']				 = 'Type';
$_['text_column_date_added']		 = 'Créé le';
$_['text_confirm_void']				 = 'Êtes-vous certain de que vouloir annuler le paiement ?';
$_['text_confirm_capture']			 = 'Êtes-vous certain de que vouloir capturer le paiement ?';

// Entry
$_['entry_merchant_id']				 = 'ID de la base';
$_['entry_secret']					 = 'Secret partagé';
$_['entry_total']					 = 'Total';
$_['entry_sort_order']				 = 'Ordre de tri';
$_['entry_geo_zone']				 = 'Zone de Geo';
$_['entry_status']					 = 'Statut';
$_['entry_debug']					 = 'Enregistrement de débogage';
$_['entry_live_demo']				 = 'Vivre / Demo';
$_['entry_auto_settle']			  	 = 'Type de lettrage';
$_['entry_card_select']				 = 'Sélectionnez la carte';
$_['entry_tss_check']				 = 'Contrôles de TSS';
$_['entry_live_url']				 = 'URL de connexion en direct';
$_['entry_demo_url']				 = 'URL de connexion de démo';
$_['entry_status_success_settled']	 = 'Succès - réglé';
$_['entry_status_success_unsettled'] = 'Succès - ne pas réglé';
$_['entry_status_decline']		 	 = 'Refuser';
$_['entry_status_void']				 = 'Annulée';
$_['entry_enable_card_store']		 = 'Activez les jetons de stockage de carte';

// Help
$_['help_total']					 = 'Le total de la caisse l\'ordre doit parvenir avant que cette méthode de paiement devient active';
$_['help_notification']				 = 'Vous devez fournir cette URL aux premières données pour recevoir des notifications de paiement';
$_['help_debug']					 = 'Habilitante debug écrira des données sensibles dans un fichier journal. Vous devez toujours désactiver sauf avis contraire';
$_['help_settle']					 = 'Si vous utilisez pré autorisation, vous devez effectuer une action post-auth dans 3-5 jours sinon que votre transaction sera abandonnée'; 

// Tab
$_['tab_account']					 = 'Info de l\'API';
$_['tab_order_status']				 = 'Statuts prescription';
$_['tab_payment']					 = 'Paramètres de paiement';
$_['tab_advanced']					 = 'Avancés';

// Button
$_['button_capture']				 = 'Capture';
$_['button_void']					 = 'Néant';

// Error
$_['error_merchant_id']				 = 'ID de la base est requise';
$_['error_secret']					 = 'Secret partagé est requis';
$_['error_live_url']				 = 'URL directe est nécessaire';
$_['error_demo_url']				 = 'URL de démo est requis';
$_['error_data_missing']			 = 'Données manquantes';
$_['error_void_error']				 = 'Transaction incapable d\'uriner';
$_['error_capture_error']			 = 'Incapable de capturer la transaction';