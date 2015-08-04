<?php
// Heading
$_['heading_title']        				= 'OpenBay Pro';

// Buttons
$_['button_retry']						= 'Tentar novamente';
$_['button_update']						= 'Atualizar';
$_['button_patch']						= 'Patch';
$_['button_ftp_test']					= 'Testar conexão';
$_['button_faq']						= 'Ver tópico FAQ';

// Tab
$_['tab_setting']						= 'Configurações';
$_['tab_update']						= 'Atualizações';
$_['tab_update_v1']						= 'Easy updater';
$_['tab_update_v2']						= 'Legacy updater';
$_['tab_patch']							= 'Patch';
$_['tab_developer']						= 'Developer';

// Text
$_['text_dashboard']         			= 'Dashboard';
$_['text_success']         				= 'Sucesso: As configurações foram salvas';
$_['text_products']          			= 'Itens';
$_['text_orders']          				= 'Pedidos';
$_['text_manage']          				= 'Gerenciar';
$_['text_help']                     	= 'Ajuda';
$_['text_tutorials']                    = 'Tutoriais';
$_['text_suggestions']                  = 'Ideias';
$_['text_version_latest']               = 'Você está utilizando a versão mais nova';
$_['text_version_check']     			= 'Verificando versão do software';
$_['text_version_installed']    		= 'Versão instalado do OpenBay: v';
$_['text_version_current']        		= 'Sua versão é';
$_['text_version_available']        	= 'a última versão é';
$_['text_language']             		= 'API response language';
$_['text_getting_messages']     		= 'Recebendo mensagens de OpenBay Pro';
$_['text_complete']     				= 'Completo';
$_['text_test_connection']              = 'Testar conexão FTP';
$_['text_run_update']           		= 'Executar atualização';
$_['text_patch_complete']           	= 'Patch foi aplicado';
$_['text_connection_ok']				= 'Conectado ao servidor. Pastas do OpenCart encontradas';
$_['text_updated']						= 'Módulo foi atualizado (v.%s)';
$_['text_update_description']			= "A ferramenta de atualização fará mudanças para o sistema de arquivos da sua loja. Verifique se você tem um backup antes de utilizar esta ferramenta.";
$_['text_patch_description']			= 'If you uploaded the update files manually, you need to run the patch to complete the update';
$_['text_clear_faq']                    = 'Limpar pop-ups escondidos do FAQ';
$_['text_clear_faq_complete']           = 'Notificações aparecerá novamente';
$_['text_install_success']              = 'Loja foi instalada';
$_['text_uninstall_success']            = 'Loja foi removida';
$_['text_title_messages']               = 'Mensagens &amp; notificações';
$_['text_marketplace_shipped']			= 'O status do pedido será atualizado para "enviado"';
$_['text_action_warning']				= 'This action is dangerous so is password protected.';
$_['text_check_new']					= 'Checking for newer version';
$_['text_downloading']					= 'Downloading update files';
$_['text_extracting']					= 'Extracting files';
$_['text_running_patch']				= 'Running patch files';
$_['text_fail_patch']					= 'Unable to extract update files';
$_['text_updated_ok']					= 'Update complete, installed version is now ';
$_['text_check_server']					= 'Checking server requirements';
$_['text_version_ok']					= 'Software is already up to date, installed version is ';
$_['text_remove_files']					= 'Removing files no longer required';
$_['text_confirm_backup']				= 'Ensure that you have a full backup before continuing';

// Column
$_['column_name']          				= 'Nome do plugin';
$_['column_status']        				= 'Status';
$_['column_action']        				= 'Ação';

// Entry
$_['entry_patch']            			= 'Manual update patch';
$_['entry_ftp_username']				= 'Nome de usuário FTP';
$_['entry_ftp_password']				= 'Senha do FTP';
$_['entry_ftp_server']					= 'Endereço do servidor FTP';
$_['entry_ftp_root']					= 'Caminho FTP no servidor';
$_['entry_ftp_admin']            		= 'Diretório admin';
$_['entry_ftp_pasv']                    = 'Modo PASV';
$_['entry_ftp_beta']             		= 'Utilizar versão beta';
$_['entry_courier']						= 'Correio';
$_['entry_courier_other']           	= 'Outro correio';
$_['entry_tracking']                	= 'Rastreamento #';
$_['entry_empty_data']					= 'Empty store data?';
$_['entry_password_prompt']				= 'Please enter the data wipe password';
$_['entry_update']						= 'Easy 1 click update';

// Error
$_['error_username']             		= 'Nome de usuário FTP obrigatório';
$_['error_password']             		= 'Senha FTP obrigatório';
$_['error_server']               		= 'Servidor FTP obrigatório';
$_['error_admin']             			= 'Diretório admin obrigatório';
$_['error_no_admin']					= 'Conexão OK mas o diretório admin do OpenCart não foi encontrado';
$_['error_no_files']					= 'Conexão OK mas as pastas do OpenCart não foram encontradas! Seu caminho raiz está correto?';
$_['error_ftp_login']					= 'Não pode iniciar sessão com o usuário';
$_['error_ftp_connect']					= 'Não foi possível conectar ao servidor';
$_['error_failed']						= 'Falha ao carregar, tentar novamente?';
$_['error_tracking_id_format']			= 'O ID do rastreamento não pode conter os caracteres > ou <';
$_['error_tracking_courier']			= 'Você deve selecionar um método de envio se você deseja adicionar um ID de rastreamento';
$_['error_tracking_custom']				= 'Por favor deixar o campo correio se você quiser usar correio personalizado';
$_['error_permission']					= 'Você não tem permissão para modificar a extensão de OpenBay Pro';
$_['error_mkdir']						= 'PHP mkdir function is disabled, contact your host';
$_['error_file_delete']					= 'Unable to remove these files, you should delete them manually';
$_['error_mcrypt']            			= 'PHP function "mcrypt_encrypt" is not enabled. Contact your hosting provider.';
$_['error_mbstring']               		= 'PHP library "mb strings" is not enabled. Contact your hosting provider.';
$_['error_ftpconnect']             		= 'PHP FTP functions are not enabled. Contact your hosting provider.';
$_['error_oc_version']             		= 'Your version of OpenCart is not tested to work with this module. You may experience problems.';
$_['error_fopen']             			= 'PHP function "fopen" is disabled by your host - you will be unable to import images when importing products';

// Help
$_['help_ftp_username']           		= 'Use o nome de usuário FTP do seu host';
$_['help_ftp_password']           		= 'Use a senha FTP do seu host';
$_['help_ftp_server']      				= 'Nome de domínio ou endereço IP para seu servidor FTP';
$_['help_ftp_root']           			= '(Por exemplo: httpdocs/www, nenhuma barra à direita)';
$_['help_ftp_admin']               		= 'Se você mudou o diretório admin você deve atualizar para o novo local';
$_['help_ftp_pasv']                    	= 'Alterar sua conexão de FTP para modo passivo';
$_['help_ftp_beta']             		= 'Cuidado! A versão beta pode não funcionar corretamente';
$_['help_patch']						= 'Se você atualizar seus arquivos através do FTP, você precisa executar o patch para completar a atualização';
$_['help_clear_faq']					= 'Mostrar todas as notificações de ajuda novamente';
$_['help_easy_update']					= 'Click update to install the latest version of OpenBay Pro automatically';
$_['help_patch']						= 'Click to run the patch scripts';