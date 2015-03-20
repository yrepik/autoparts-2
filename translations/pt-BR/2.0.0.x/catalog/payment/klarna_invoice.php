<?php
// Text
$_['text_title']				= 'Klarna fatura - pagamento no prazo de 14 dias';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+ %s) <script type="text/javascript"> termos de var = new Klarna.Terms.Invoice ({el: \'klarna_invoice_toc\', eid: \'%s\', país: \'%s\', carga: %s});</script>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Klarna conta requer algumas informações adicionais antes que eles possam processo sua ordem.';
$_['text_male']					= 'Masculino';
$_['text_female']				= 'Feminino';
$_['text_year']					= 'Ano';
$_['text_month']				= 'Mês';
$_['text_day']					= 'Dia';
$_['text_comment']				= 'Klarna\'s Invoice ID: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Género';
$_['entry_pno']					= 'Número de pessoal';
$_['entry_dob']					= 'Data de nascimento';
$_['entry_phone_no']			= 'Número de Telefone';
$_['entry_street']				= 'Rua';
$_['entry_house_no']			= 'Casa n. º.';
$_['entry_house_ext']			= 'complemento da casa.';
$_['entry_company']				= 'Número de registro de empresa';

// Help
$_['help_pno']					= 'Por favor insira o seu CPF aqui.';
$_['help_phone_no']				= 'Por favor digite o seu número de telefone fixo.';
$_['help_street']				= 'Por favor, note que a entrega só pode ter lugar para o endereço registrado quando pagar com Klarna.';
$_['help_house_no']				= 'Por favor digite o seu número de telefone fixo.';
$_['help_house_ext']			= 'Por favor, envie seu complemento da casa aqui. Por exemplo, A, B, C, ect vermelho, azul Casa1, Casa fundos etc.';
$_['help_company']				= 'Por favor insira o número de registro da sua empresa';

// Error
$_['error_deu_terms']			= 'Você deve concordar em política de privacidade do Klarna (Datenschutz)';
$_['error_address_match']		= 'Faturamento e endereços para entrega devem corresponder, se você quiser usar Klarna fatura';
$_['error_network']				= 'Ocorreu um erro ao se conectar a Klarna. Por favor, tente novamente mais tarde.';