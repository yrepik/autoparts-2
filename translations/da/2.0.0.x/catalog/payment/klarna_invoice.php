<?php
// Text
$_['text_title']				= 'Klarna faktura - betales inden 14 dage';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Klarna konto kræver nogle flere oplysninger, før de kan behandle din ordre.';
$_['text_male']					= 'Mand';
$_['text_female']				= 'Kvinde';
$_['text_year']					= 'År';
$_['text_month']				= 'Måned';
$_['text_day']					= 'Dag';
$_['text_comment']				= 'Klarna\'s Invoice ID: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Køn';
$_['entry_pno']					= 'Personnummer';
$_['entry_dob']					= 'Fødselsdato';
$_['entry_phone_no']			= 'Telefonnummer';
$_['entry_street']				= 'Gade/Vej';
$_['entry_house_no']			= 'Hus nr.';
$_['entry_house_ext']			= 'Yderligere husinformationer.';
$_['entry_company']				= 'CVR-nummer';

// Help
$_['help_pno']					= 'Indtast dit CPR-nummer her.';
$_['help_phone_no']				= 'Angiv venligst dit telefonnummer.';
$_['help_street']				= 'Bemærk venligst at levering kun kan finde sted til den registrerede adresse, ved betaling med Klarna.';
$_['help_house_no']				= 'Angiv husnummer.';
$_['help_house_ext']			= 'Angiv yderligere husinformationer her. F.eks. A, B, C, 1.th, 3.tv etc.';
$_['help_company']				= 'Angiv venligst din virksomheds CVR-nummer';

// Error
$_['error_deu_terms']			= 'Du skal acceptere Klarna\'s privacy policy (Datenschutz)';
$_['error_address_match']		= 'Fakturerings- og leveringsadresser skal stemme overens, hvis du vil bruge Klarna faktura';
$_['error_network']				= 'Der opstod fejl under tilslutning til Klarna. Prøv igen senere.';