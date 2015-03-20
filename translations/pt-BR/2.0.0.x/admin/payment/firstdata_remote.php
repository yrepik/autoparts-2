<?php
// Heading
$_['heading_title']					= 'Primeiros dados EMEA Web serviço API';

// Text
$_['text_firstdata_remote']			= '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_payment']					= 'Pagamento';
$_['text_success']					= 'Sucesso: Você modificou detalhes de conta de dados primeiro!';
$_['text_edit']                     = 'Editar dados primeiros API do serviço Web EMEA';
$_['text_card_type']				= 'Tipo de cartão';
$_['text_enabled']					= 'Habilitado';
$_['text_merchant_id']				= 'Loja ID';
$_['text_subaccount']				= 'Subconta';
$_['text_user_id']					= 'ID de usuário';
$_['text_capture_ok']				= 'Captura foi um sucesso';
$_['text_capture_ok_order']			= 'Lançamento foi bem sucedido, encomendar o status atualizado para o sucesso - resolvido';
$_['text_refund_ok']				= 'Restituição foi um sucesso';
$_['text_refund_ok_order']			= 'Restituição foi bem sucedida, encomendar o status atualizado a devolvido';
$_['text_void_ok']					= 'Vazio foi bem sucedido, encomendar o status atualizado para anulada';
$_['text_settle_auto']				= 'Venda';
$_['text_settle_delayed']			= 'Pré-auth';
$_['text_mastercard']				= 'Cartão MasterCard';
$_['text_visa']						= 'Cartão Visa';
$_['text_diners']					= 'Cartão Diners';
$_['text_amex']						= 'Cartão American Express';
$_['text_maestro']					= 'Cartão Maestro';
$_['text_payment_info']				= 'Informações de pagamento';
$_['text_capture_status']			= 'Pagamento capturado';
$_['text_void_status']				= 'Pagamento cancelado';
$_['text_refund_status']			= 'Pagamento reembolsado';
$_['text_order_ref']				= 'Ref ordem';
$_['text_order_total']				= 'Total autorizado';
$_['text_total_captured']			= 'Total capturado';
$_['text_transactions']				= 'Transações';
$_['text_column_amount']			= 'Quantidade';
$_['text_column_type']				= 'Tipo';
$_['text_column_date_added']		= 'Criado';
$_['text_confirm_void']				= 'Tem certeza que deseja anular o pagamento?';
$_['text_confirm_capture']			= 'Tem certeza que deseja capturar o pagamento?';
$_['text_confirm_refund']			= 'Tens a certeza de que você deseja liberar o pagamento?';

// Entry
$_['entry_certificate_path']		= 'Caminho do certificado';
$_['entry_certificate_key_path']	= 'Caminho de chave privada';
$_['entry_certificate_key_pw']		= 'Senha da Chave Privada';
$_['entry_certificate_ca_path']		= 'Caminho de CA';
$_['entry_merchant_id']				= 'Loja ID';
$_['entry_user_id']					= 'ID de usuário';
$_['entry_password']				= 'Palavra-Passe';
$_['entry_total']					= 'Total';
$_['entry_sort_order']				= 'Ordem de Classificação';
$_['entry_geo_zone']				= 'Geo zona';
$_['entry_status']					= 'Situação';
$_['entry_debug']					= 'Debug log';
$_['entry_auto_settle']				= 'Tipo de Liquidação';
$_['entry_status_success_settled']	= 'Sucesso - resolvido';
$_['entry_status_success_unsettled'] = 'Sucesso - não resolvido';
$_['entry_status_decline']			 = 'Recusar';
$_['entry_status_void']				 = 'Anulada';
$_['entry_status_refund']			 = 'Reembolsado';
$_['entry_enable_card_store']		 = 'Ativar tokens de armazenamento do cartão';
$_['entry_cards_accepted']			 = 'Tipos de cartão aceitados';

// Help
$_['help_total']					 = 'O total de verificação geral da ordem deve chegar antes deste método de pagamento se tornar ativo';
$_['help_certificate']				 = 'Certificados e chaves privadas devem ser armazenadas fora de suas pastas públicas da web';
$_['help_card_select']				 = 'Perguntar ao usuário para escolher o seu tipo de cartão, antes que eles são redirecionados';
$_['help_notification']				 = 'Você precisa fornecer este URL para dados primeiro para receber notificações de pagamento';
$_['help_debug']					 = 'Habilitando debug vai escrever dados confidenciais em um arquivo de log. Você deve desativar sempre salvo indicação em contrário .';
$_['help_settle']					 = 'Se você usar pré-auth, que você deve concluir uma ação de post-auth dentro de 3-5 dias caso contrário que sua transação será descartada';

// Tab
$_['tab_account']					 = 'Informação de API';
$_['tab_order_status']				 = 'Situação do pedido';
$_['tab_payment']					 = 'Configurações de pagamento';

// Button
$_['button_capture']				= 'Captura';
$_['button_refund']					= 'Restituição';
$_['button_void']					= 'Vazio';

// Error
$_['error_merchant_id']				= 'Loja ID é necessária';
$_['error_user_id']					= 'ID do usuário é necessária';
$_['error_password']				= 'Senha é obrigatória';
$_['error_certificate']				= 'Caminho do certificado é necessário';
$_['error_key']						= 'Chave do certificado é necessário';
$_['error_key_pw']					= 'Senha de chave do certificado é necessária';
$_['error_ca']						= 'Autoridade de certificação (CA) é necessário';