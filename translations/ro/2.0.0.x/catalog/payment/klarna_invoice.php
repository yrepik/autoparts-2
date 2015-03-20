<?php
// Text
$_['text_title']				= 'Factură Klarna - De plătit în 14 zile';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Factura Klarna necesită unele informații suplimentare înainte ca ei să prelucreze comanda dvs.';
$_['text_male']					= 'Masculin';
$_['text_female']				= 'Feminin';
$_['text_year']					= 'An';
$_['text_month']				= 'Lună';
$_['text_day']					= 'Zi';
$_['text_comment']				= 'Klarna\'s Invoice ID: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Sexul';
$_['entry_pno']					= 'Numărul personal';
$_['entry_dob']					= 'Data nașterii';
$_['entry_phone_no']			= 'Numărul de Telefon';
$_['entry_street']				= 'Stradă';
$_['entry_house_no']			= 'Numărul casei';
$_['entry_house_ext']			= 'Extensia casei';
$_['entry_company']				= 'Număr de Înregistrare Fiscală a Companiei';

// Help
$_['help_pno']					= 'Vă rugăm să introduceți aici Numărul dvs. de Asigurare Socială.';
$_['help_phone_no']				= 'Vă rugăm să introduceți numărul dvs. de telefon.';
$_['help_street']				= 'Vă rugăm să rețineți faptul că, livrarea se poate efectua doar la adresa înregistrată, atunci când plătiți cu Klarna.';
$_['help_house_no']				= 'Vă rugăm să introduceți numărul dvs. de casă.';
$_['help_house_ext']			= 'Vă rugăm să adăugați aici extensia casei dvs. De exemplu: A, B, C, Roșu, Albastru, etc.';
$_['help_company']				= 'Vă rugăm să introduceți Numărul de Înregistrare Fiscală a Companiei dumneavoastră';

// Error
$_['error_deu_terms']			= 'Trebuie să fiți de acord cu Politica de Confidențialitate a Klarna (Datenschutz)';
$_['error_address_match']		= 'Adresa de facturare și adresa de livrare trebuie să corespundă dacă doriți să utilizați Factura Klarna';
$_['error_network']				= 'A apărut o eroare în timp ce făceam conexiunea la Klarna. Vă rugăm să încercați mai târziu.';