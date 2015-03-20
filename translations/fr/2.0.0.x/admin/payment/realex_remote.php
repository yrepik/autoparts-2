<?php
// Heading
$_['heading_title']					= 'Realex Remote';

// Text
$_['text_payment']					= 'Paiement';
$_['text_success']					= 'Succès : Vous avez modifié les détails de compte Realex !';
$_['text_edit']                     = 'Edit Realex Remote';
$_['text_card_type']				= 'Type de carte';
$_['text_enabled']					= 'Activé';
$_['text_use_default']				= 'Utilisation par défaut';
$_['text_merchant_id']				= 'ID marchand';
$_['text_subaccount']				= 'Compte secondaire';
$_['text_secret']					= 'Secret partagé';
$_['text_card_visa']				= 'Visa';
$_['text_card_master']				= 'MasterCard';
$_['text_card_amex']				= 'American Express';
$_['text_card_switch']				= 'Switch/Maestro';
$_['text_card_laser']				= 'Laser';
$_['text_card_diners']				= 'Diners';
$_['text_capture_ok']				= 'Capture a été un succès';
$_['text_capture_ok_order']			= 'Capture a été un succès, commander statut mis à jour vers le succès - réglé';
$_['text_rebate_ok']				= 'Remboursement a réussi';
$_['text_rebate_ok_order']			= 'Remboursement a été un succès, commander statut mis à jour à l\'objet d\'un remboursement';
$_['text_void_ok']					= 'Void a été un succès, commander statut mis à jour et indique alors annulé';
$_['text_settle_auto']				= 'Auto';
$_['text_settle_delayed']			= 'Retardé';
$_['text_settle_multi']				= 'Multi';
$_['text_ip_message']				= 'Vous devez fournir votre adresse IP à votre gestionnaire de compte de Realex avant d\'aller vivre';
$_['text_payment_info']				= 'Informations de paiement';
$_['text_capture_status']			= 'Paiement capturé';
$_['text_void_status']				= 'Paiement annulé';
$_['text_rebate_status']			= 'Paiement remboursé';
$_['text_order_ref']				= 'Réf. de commande';
$_['text_order_total']				= 'Total autorisé';
$_['text_total_captured']			= 'Capturé au total';
$_['text_transactions']				= 'Transactions';
$_['text_confirm_void']				= 'Êtes-vous certain de que vouloir annuler le paiement?';
$_['text_confirm_capture']			= 'Êtes-vous certain de que vouloir capturer le paiement?';
$_['text_confirm_rebate']			= 'Êtes-vous certain de que vouloir rembourser le paiement?';
$_['text_realex_remote']			= '<a target="_BLANK" href="http://www.realexpayments.co.uk/partner-refer?id=opencart"> <img src="view/image/payment/realex.png" alt="Realex" title="Realex" style="border: 1px solid #EEEEEE;" /></a>';

// Column
$_['text_column_amount']			= 'Montant';
$_['text_column_type']				= 'Type';
$_['text_column_date_added']		= 'Créé';

// Entry
$_['entry_merchant_id']				= 'ID marchand';
$_['entry_secret']					= 'Secret partagé';
$_['entry_rebate_password']			= 'Mot de passe de remise';
$_['entry_total']					= 'Total';
$_['entry_sort_order']				= 'Tri des Commandes';
$_['entry_geo_zone']				= 'Zone de Geo';
$_['entry_status']					= 'Statut';
$_['entry_debug']					= 'Enregistrement de débogage';
$_['entry_auto_settle']				= 'Type de lettrage';
$_['entry_tss_check']				= 'Contrôles de TSS';
$_['entry_card_data_status']		= 'Enregistrement d\'informations carte';
$_['entry_3d']						= 'Activer 3D secure';
$_['entry_liability_shift']			= 'Accepter les scénarios changeants de non-responsabilité';
$_['entry_status_success_settled']	= 'Succès - réglé';
$_['entry_status_success_unsettled'] = 'Succès - ne pas réglé';
$_['entry_status_decline']			= 'Refuser';
$_['entry_status_decline_pending']	= 'Déclin - auth hors ligne';
$_['entry_status_decline_stolen']	= 'Déclin - carte perdue ou volée';
$_['entry_status_decline_bank']		= 'Déclin - erreur de la Banque';
$_['entry_status_void']				= 'Annulée';
$_['entry_status_rebate']			= 'Objet d\'un remboursement';

// Help
$_['help_total']					= 'Le total de la caisse l\'ordre doit parvenir avant que cette méthode de paiement devient active';
$_['help_card_select']				= 'Demander à l\'utilisateur de choisir le type de leur carte avant ils sont redirigés';
$_['help_notification']				= 'Vous devez fournir cette URL à Realex pour recevoir des notifications de paiement';
$_['help_debug']					= 'Habilitante debug écrira des données sensibles dans un fichier journal. Vous devez toujours désactiver sauf avis contraire.';
$_['help_liability']				= 'Accepter la responsabilité signifie que vous accepterez toujours paiements lorsqu\'un utilisateur ne parvient pas 3D secure.';
$_['help_card_data_status']			= 'Enregistre les derniers chiffres de 4 cartes, expirer, nom, type et délivrant des informations bancaires';

// Tab
$_['tab_api']					    = 'Détails de l\'API';
$_['tab_account']				    = 'Comptes';
$_['tab_order_status']				= 'Statut de la commande';
$_['tab_payment']					= 'Paramètres de paiement';

// Button
$_['button_capture']				= 'Capture';
$_['button_rebate']					= 'Remise / remboursement';
$_['button_void']					= 'Vide';

// Error
$_['error_merchant_id']				= 'Marchand d\'identité est requis';
$_['error_secret']					= 'Secret partagé est requis';