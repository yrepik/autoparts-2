<?php
// Heading
$_['heading_title']                     = 'Importation item';
$_['text_openbay']                      = 'OpenBay Pro';
$_['text_ebay']                         = 'eBay';

// Text
$_['text_sync_import_line1']            = '<strong>Attention!</strong> Cela importera tous vos produits eBay et importera  la structure de catégories ebay dans votre magasin. Il est conseillé de supprimez toutes les catégories et les produits avant d\'exécuter cette option. < br / &gt; la structure de la catégorie est une catégories eBay normale, et represente pas vos catégories dans votre boutique (si vous avez une boutique eBay). Vous pouvez renommer, supprimer et modifier les catégories importées sans affecter vos produits eBay.';
$_['text_sync_import_line3']            = 'Vous devez vous assurer de votre serveur peut accepter et traiter les grands formats de données POST. objets 1000 items  eBay  environ et 40 Mo en taille, vous devrez calculer ce que vous avez besoin. Si votre appel échoue alors c\'est probablement que votre réglage est trop petit. Votre limite de mémoire PHP doit être d\'environ 128 Mo.';
$_['text_sync_server_size']             = 'Actuellement, votre serveur peut accepter : ';
$_['text_sync_memory_size']             = 'Votre limite de mémoire PHP : ';
$_['text_import_confirm']				= 'Cela va importer tous vos items eBay comme de nouveaux produits, vous êtes sûr ? Ce ne peut ne pas être annulée ! Assurer que vous disposez d\'une sauvegarde d\'abord !';
$_['text_import_notify']				= 'Votre demande d\'importation a été envoyé pour traitement. Une importation prend environ 1 heure par 1 000 éléments.';
$_['text_import_images_msg1']           = 'des images sont en attente d\'importation / copie d\'eBay. Actualisez cette page, si le nombre ne diminue pas';
$_['text_import_images_msg2']           = 'Cliquez ici';
$_['text_import_images_msg3']           = 'et attendre. Plus d\'informations sur pourquoi cela s\'est passé <a href="http://shop.openbaypro.com/index.php?route=information/faq&topic=8_45" target="_blank"> ici</a>';

// Entry
$_['entry_import_item_advanced']        = 'Obtenez des données avancées';
$_['entry_import_categories']         	= 'Importer des catégories';
$_['entry_import_description']			= 'Descriptions des items importés';
$_['entry_import']						= 'Importer les items eBay';

// Buttons
$_['button_import']						= 'Importer';

// Help
$_['help_import_item_advanced']        	= 'Cela prendra jusqu\'à 10 fois plus de temps pour importer des éléments. Importations de poids, tailles, ISBN, etc. si disponible';
$_['help_import_categories']         	= 'Crée une structure de catégorie dans votre magasin depuis les catégories eBay';
$_['help_import_description']         	= 'Cela va importer tout, y compris HTML, compteurs de visites etc.';

// Error
$_['error_import']                   	= 'Échec de chargement';
$_['error_maintenance']					= 'Votre magasin est en mode maintenance. L’importation échouera !';
$_['error_ajax_load']					= 'Impossible de se connecter au serveur';
$_['error_validation']					= 'Vous devez vous enregistrer pour avoir votre jeton API et activer le module.';