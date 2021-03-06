<?php
// Text
$_['text_title']				= 'Klarna factuur - Betaling binnen 14 dagen';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Klarna factuur vereist enige aanvullende informatie voordat ze uw bestelling kunnen verwerken.';
$_['text_male']					= 'Man';
$_['text_female']				= 'Vrouw';
$_['text_year']					= 'Jaar';
$_['text_month']				= 'Maand';
$_['text_day']					= 'Dag';
$_['text_comment']				= 'Klarna\'s Invoice ID: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Geslacht';
$_['entry_pno']					= 'Personal Number';
$_['entry_dob']					= 'Geboortedatum';
$_['entry_phone_no']			= 'Telefoonnummer';
$_['entry_street']				= 'Straat';
$_['entry_house_no']			= 'Huis nr.';
$_['entry_house_ext']			= 'Invoeren van uw huis-extensie. Bijvoorbeeld A, B, C etc.';
$_['entry_company']				= 'KVK Nummer';

// Help
$_['help_pno']					= 'Voer hier uw sofi-nummer.';
$_['help_phone_no']				= 'Voer uw telefoonnummer in.';
$_['help_street']				= 'Houd er rekening mee dat de levering alleen kan plaatsvinden aan het geregistreerde adres bij betaling met Klarna.';
$_['help_house_no']				= 'Voer uw huisnummer.';
$_['help_house_ext']			= 'Invoeren van uw huis-extensie. Bijvoorbeeld A, B, C etc.';
$_['help_company']				= 'Uw KVK Nummer';

// Error
$_['error_deu_terms']			= 'U moet akkoord gaan met Klarna de privacy policy (privacy)';
$_['error_address_match']		= 'Betaal- en verzendgegevens adressen moet overeenkomen als u gebruik wilt maken van Klarna factuur';
$_['error_network']				= 'Er is een fout opgetreden bij het verbinden met Klarna. Probeer het later nog eens.';