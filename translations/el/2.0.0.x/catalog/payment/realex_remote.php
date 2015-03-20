<?php
// Text
$_['text_title']				= 'Πιστωτική ή χρεωστική κάρτα';
$_['text_credit_card']			= 'Στοιχεία της πιστωτικής κάρτας';
$_['text_wait']					= 'Παρακαλώ περιμένετε!';
$_['text_result']				= 'Αποτέλεσμα';
$_['text_message']				= 'Μήνυμα';
$_['text_cvn_result']			= 'CVN result';
$_['text_avs_postcode']			= 'AVS postcode';
$_['text_avs_address']			= 'AVS address';
$_['text_eci']					= 'ECI (3D secure) result';
$_['text_tss']					= 'TSS result';
$_['text_card_bank']			= 'Card issue bank';
$_['text_card_country']			= 'Card country';
$_['text_card_region']			= 'Card region';
$_['text_last_digits']			= 'Last 4 digits';
$_['text_order_ref']			= 'Order ref';
$_['text_timestamp']			= 'Timestamp';
$_['text_card_visa']			= 'Visa';
$_['text_card_mc']				= 'MasterCard';
$_['text_card_amex']			= 'American Express';
$_['text_card_switch']			= 'Switch';
$_['text_card_laser']			= 'Laser';
$_['text_card_diners']			= 'Diners';
$_['text_auth_code']			= 'Auth code';
$_['text_3d_s1']				= 'Cardholder Not Enrolled, liability shift';
$_['text_3d_s2']				= 'Unable To Verify Enrolment, no liability shift';
$_['text_3d_s3']				= 'Invalid Response From Enrolment Server, no liability shift';
$_['text_3d_s4']				= 'Enrolled, But Invalid Response From ACS (Access Control Server), no liability shift';
$_['text_3d_s5']				= 'Successful Authentication, liability shift';
$_['text_3d_s6']				= 'Authentication Attempt Acknowledged, liability shift';
$_['text_3d_s7']				= 'Incorrect Password Entered, no liability shift';
$_['text_3d_s8']				= 'Authentication Unavailable, no liability shift';
$_['text_3d_s9']				= 'Invalid Response From ACS, no liability shift';
$_['text_3d_s10']				= 'RealMPI Fatal Error, no liability shift';

// Entry
$_['entry_cc_type']				= 'Τύπος κάρτας';
$_['entry_cc_number']			= 'Αριθμός πιστωτικής κάρτας';
$_['entry_cc_name']				= 'Όνομα κατόχου κάρτας';
$_['entry_cc_expire_date']		= 'Ημερομηνία λήξης κάρτας';
$_['entry_cc_cvv2']				= 'Κωδικός ασφαλείας κάρτας (CVV2)';
$_['entry_cc_issue']			= 'Card issue number';

// Help
$_['help_start_date']			= '(εάν είναι διαθέσιμο)';
$_['help_issue']				= '(για Maestro και κάρτες Solo μόνο)';

// Error
$_['error_card_number']			= 'Please check your card number is valid';
$_['error_card_name']			= 'Please check the card holder name is valid';
$_['error_card_cvv']			= 'Please check the CVV2 is valid';
$_['error_3d_unable']			= 'Merchant requires 3D secure but unable to verify with your bank, please try later';
$_['error_3d_500_response_no_payment'] = 'An invalid response was received from the card processor, no payment has been taken';
$_['error_3d_unsuccessful']		= '3D secure authorisation failed';