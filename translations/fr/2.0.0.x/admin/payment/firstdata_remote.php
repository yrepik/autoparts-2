<?php
// Heading
$_['heading_title']					= 'Premières données EMEA Web Service API';

// Text
$_['text_firstdata_remote']			= '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_payment']					= 'Paiement';
$_['text_success']					= 'Succès : Vous avez modifié les détails de compte First Data!';
$_['text_edit']                     = 'Éditer les premières données API de Service Web EMEA';
$_['text_card_type']				= 'Type de carte';
$_['text_enabled']					= 'Activé';
$_['text_merchant_id']				= 'ID de la base';
$_['text_subaccount']				= 'Sous-compte';
$_['text_user_id']					= 'ID de l\'utilisateur';
$_['text_capture_ok']				= 'Capture a été un succès';
$_['text_capture_ok_order']			= 'Capture a été un succès, commander statut mis à jour vers le succès - réglé';
$_['text_refund_ok']				= 'Remboursement a réussi';
$_['text_refund_ok_order']			= 'Remboursement a été un succès, commander statut mis à jour à remboursé';
$_['text_void_ok']					= 'Void a été un succès, commander statut mis à jour et indique alors annulé';
$_['text_settle_auto']				= 'Vente';
$_['text_settle_delayed']			= 'Pré auth';
$_['text_mastercard']				= 'MasterCard';
$_['text_visa']						= 'Visa';
$_['text_diners']					= 'Diners';
$_['text_amex']						= 'American Express';
$_['text_maestro']					= 'Maestro';
$_['text_payment_info']				= 'Informations de paiement';
$_['text_capture_status']			= 'Paiement capturé';
$_['text_void_status']				= 'Paiement annulé';
$_['text_refund_status']			= 'Paiement remboursé';
$_['text_order_ref']				= 'Réf. de commande';
$_['text_order_total']				= 'Total autorisé';
$_['text_total_captured']			= 'Capturé au total';
$_['text_transactions']				= 'Transactions';
$_['text_column_amount']			= 'Montant';
$_['text_column_type']				= 'Type';
$_['text_column_date_added']		= 'Créé le';
$_['text_confirm_void']				= 'Êtes-vous certain de que vouloir annuler le paiement?';
$_['text_confirm_capture']			= 'Êtes-vous certain de que vouloir capturer le paiement?';
$_['text_confirm_refund']			= 'Êtes-vous certain de que vouloir rembourser le paiement ?';

// Entry
$_['entry_certificate_path']		= 'Chemin d\'accès de certificat';
$_['entry_certificate_key_path']	= 'Chemin de la clé privée';
$_['entry_certificate_key_pw']		= 'Mot de passe de la clé privée';
$_['entry_certificate_ca_path']		= 'Chemin de CA';
$_['entry_merchant_id']				= 'ID de la base';
$_['entry_user_id']					= 'ID de l\'utilisateur';
$_['entry_password']				= 'Mot de passe';
$_['entry_total']					= 'Total';
$_['entry_sort_order']				= 'Tri des Commandes';
$_['entry_geo_zone']				= 'Zone de Geo';
$_['entry_status']					= 'Statut';
$_['entry_debug']					= 'Enregistrement de débogage';
$_['entry_auto_settle']				= 'Type de lettrage';
$_['entry_status_success_settled']	= 'Succès - réglé';
$_['entry_status_success_unsettled'] = 'Succès - ne pas réglé';
$_['entry_status_decline']			 = 'Refuser';
$_['entry_status_void']				 = 'Annulée';
$_['entry_status_refund']			 = 'Remboursé';
$_['entry_enable_card_store']		 = 'Activez les jetons de stockage de carte';
$_['entry_cards_accepted']			 = 'Types de cartes acceptées';

// Help
$_['help_total']					 = 'Le total de la caisse l\'ordre doit parvenir avant que cette méthode de paiement devient active';
$_['help_certificate']				 = 'Certificats et clés privées doivent être stockés à l\'extérieur de vos dossiers publics web';
$_['help_card_select']				 = 'Demander à l\'utilisateur de choisir le type de leur carte avant ils sont redirigés';
$_['help_notification']				 = 'Vous devez fournir cette URL aux premières données pour recevoir des notifications de paiement';
$_['help_debug']					 = 'Habilitante debug écrira des données sensibles dans un fichier journal. Vous devez toujours désactiver sauf avis contraire .';
$_['help_settle']					 = 'Si vous utilisez pré autorisation, vous devez effectuer une action post-auth dans 3-5 jours sinon que votre transaction sera abandonnée';

// Tab
$_['tab_account']					 = 'Info de l\'API';
$_['tab_order_status']				 = 'Statuts prescription';
$_['tab_payment']					 = 'Paramètres de paiement';

// Button
$_['button_capture']				= 'Capture';
$_['button_refund']					= 'Remboursement';
$_['button_void']					= 'Néant';

// Error
$_['error_merchant_id']				= 'ID de la base est requise';
$_['error_user_id']					= 'ID de l\'utilisateur est requise';
$_['error_password']				= 'Le champ "mot de passe" est obligatoire';
$_['error_certificate']				= 'Chemin d\'accès de certificat est requis';
$_['error_key']						= 'La clé de certificat est requise';
$_['error_key_pw']					= 'Mot de passe clé de certificat est requis';
$_['error_ca']						= 'Autorité de certification (AC) est nécessaire';