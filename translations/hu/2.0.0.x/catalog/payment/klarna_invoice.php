<?php
// Text
$_['text_title']				= 'Klarna számla - fizetés 14 napon belül';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s) <script type="text/javascript"> feltételek var = új Klarna.Terms.Invoice ({el: klarna_invoice_toc, eid: %s, ország: "%s", a díj: %s});</script>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span> <script type="text/javascript"> feltételek var = új Klarna.Terms.Invoice ({el: "klarna_invoice_toc", eid:%s, ország: "%s"});</script>';
$_['text_additional']			= 'Klarna figyelembe néhány további adatokat igényel, mielőtt tudnak proccess megrendelését.';
$_['text_male']					= 'Férfi';
$_['text_female']				= 'Nő';
$_['text_year']					= 'Év';
$_['text_month']				= 'Hónap';
$_['text_day']					= 'Nap';
$_['text_comment']				= 'Klarna\'s Invoice ID: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Nem';
$_['entry_pno']					= 'Személyi szám';
$_['entry_dob']					= 'születési dátum';
$_['entry_phone_no']			= 'Telefonszám';
$_['entry_street']				= 'Utca';
$_['entry_house_no']			= 'Házszám.';
$_['entry_house_ext']			= 'Ház Ext.';
$_['entry_company']				= 'Cégjegyzékszám';

// Help
$_['help_pno']					= 'Kérjük, írja be ide a társadalombiztosítási szám.';
$_['help_phone_no']				= 'Kérjük, adja meg a telefonszámot.';
$_['help_street']				= 'Kérjük, vegye figyelembe, hogy szállítás történhet a regisztrált címre történő fizetés esetén a Klarna.';
$_['help_house_no']				= 'Kérjük, adja meg a telefonszámot.';
$_['help_house_ext']			= 'Kérjük, küldje el a ház kiterjesztés itt. Pl. A, B, C, piros, kék stb.';
$_['help_company']				= 'Adja meg a vállalat cégbejegyzési számát';

// Error
$_['error_deu_terms']			= 'El kell fogadnia a Klarna barátait adatvédelmi (Datenschutz)';
$_['error_address_match']		= 'Szállítási és számlázási cím meg kell egyeznie, ha szeretné használni a Klarna számla';
$_['error_network']				= 'Hiba történt a kapcsolódás Klarna. Kérjük, próbálkozzon később.';