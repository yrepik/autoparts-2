<?php
// Heading
$_['heading_title']                     = 'Item de importação';
$_['text_openbay']                      = 'OpenBay Pro';
$_['text_ebay']                         = 'eBay';

// Text
$_['text_sync_import_line1']            = '<strong>Cuidado!</strong> Isto irá importar todos os seus produtos em eBay e construir uma estrutura de categoria em sua loja. É recomendado que você exclua todas as categorias e produtos, antes de executar essa opção. < br / > a estrutura de categoria é das categorias eBay normal, não suas categorias de loja (se você tem uma loja eBay). Você pode renomear, remover e editar as categorias importadas sem afetar seus produtos em eBay.';
$_['text_sync_import_line3']            = 'Você precisa garantir seu servidor pode aceitar e processar grandes tamanhos de dados POST. 1000 artigos do eBay é cerca de 40Mb de tamanho, você precisará calcular o que você precisa. Se sua chamada falhar, então é provável que sua configuração é muito pequena. Seu limite de memória do PHP deve ser cerca de 128Mb.';
$_['text_sync_server_size']             = 'Atualmente, seu servidor pode aceitar: ';
$_['text_sync_memory_size']             = 'Seu limite de memória do PHP: ';
$_['text_import_confirm']				= 'Isto irá importar todos os itens do eBay como novos produtos, tem certeza? Este não pode ser desfeito! Certifique-se de que você ter um backup primeiro!';
$_['text_import_notify']				= 'Sua solicitação de importação tenha sido enviada para processamento. Uma importação leva cerca de 1 hora por 1000 unidades.';
$_['text_import_images_msg1']           = 'imagens estão pendentes importação/cópia do eBay. Atualize esta página, se o número não diminui então';
$_['text_import_images_msg2']           = 'Clique aqui';
$_['text_import_images_msg3']           = 'e esperar. Obter mais informações sobre por que isso aconteceu podem ser encontradas <a href="http://shop.openbaypro.com/index.php?route=information/faq&topic=8_45" target="_blank"> aqui</a>';

// Entry
$_['entry_import_item_advanced']        = 'Se avançada de dados';
$_['entry_import_categories']         	= 'Importar categorias';
$_['entry_import_description']			= 'Descrições de item de importação';
$_['entry_import']						= 'Importar itens do eBay';

// Buttons
$_['button_import']						= 'Importar Modelo';

// Help
$_['help_import_item_advanced']        	= 'Vai demorar até 10 vezes mais para importar os itens. Importações pesos, tamanhos, ISBN e muito mais, se disponível';
$_['help_import_categories']         	= 'Constrói uma estrutura de categoria em sua loja a partir das categorias do eBay';
$_['help_import_description']         	= 'Isso vai importar tudo, incluindo HTML, visite contadores etc';

// Error
$_['error_import']                   	= 'Falha ao carregar';
$_['error_maintenance']					= 'Sua loja é em modo de manutenção. Importação falhará!';
$_['error_ajax_load']					= 'Falha ao conectar ao servidor';
$_['error_validation']					= 'Você precisa se registrar para seu token de API e ativar o módulo.';