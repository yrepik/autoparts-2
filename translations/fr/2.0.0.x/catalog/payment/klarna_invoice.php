<?php
// Text
$_['text_title']				= 'Facture Klarna - payer dans les 14 jours';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s) <script type="text/javascript"> termes var = new Klarna.Terms.Invoice ({el: « klarna_invoice_toc », eid: « %s », pays: « %s », charge : %s});</script>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span> <script type="text/javascript"> termes var = new Klarna.Terms.Invoice ({el: « klarna_invoice_toc », eid: «%s », pays: « %s »});</script>';
$_['text_additional']			= 'Facture Klarna exige des informations supplémentaires avant de pouvoir de processus de votre commande.';
$_['text_male']					= 'Masculin';
$_['text_female']				= 'Fille';
$_['text_year']					= 'Année ';
$_['text_month']				= 'Mois';
$_['text_day']					= 'jour';
$_['text_comment']				= 'Klarna\'s Invoice ID: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Sexe';
$_['entry_pno']					= 'Numéro personnel';
$_['entry_dob']					= 'Date de naissance';
$_['entry_phone_no']			= 'Numéro de téléphone';
$_['entry_street']				= 'Adresse';
$_['entry_house_no']			= 'Maison no';
$_['entry_house_ext']			= 'Maison ext.';
$_['entry_company']				= 'Numéro d\'entreprise';

// Help
$_['help_pno']					= 'Veuillez entrer votre numéro de sécurité sociale ici.';
$_['help_phone_no']				= 'Veuillez entrer votre numéro de téléphone.';
$_['help_street']				= 'Veuillez noter que livraison ne peut avoir lieu à l\'adresse enregistrée lorsque vous payez avec Klarna.';
$_['help_house_no']				= 'Veuillez entrer votre numéro de téléphone.';
$_['help_house_ext']			= 'Veuillez soumettre votre extension de maison ici. Par exemple A, B, C, rouge, bleu ect.';
$_['help_company']				= 'Veuillez entrer le numéro d\'immatriculation de votre entreprise';

// Error
$_['error_deu_terms']			= 'Vous devez accepter la politique de confidentialité de Klarna (Datenschutz)';
$_['error_address_match']		= 'Adresses d\'expédition et de facturation doivent correspondre si vous voulez utiliser Klarna facture';
$_['error_network']				= 'Erreur s\'est produite lors de la connexion à Klarna. Veuillez réessayer ultérieurement.';