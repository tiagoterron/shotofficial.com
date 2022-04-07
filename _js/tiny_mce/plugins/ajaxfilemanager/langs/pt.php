<?php
	/**
	 * language pack
	 * @author Logan Cai (cailongqun [at] yahoo [dot] com [dot] cn)
	 * @link www.phpletter.com
	 * @since 22/April/2007
	 *
	 */
	define('DATE_TIME_FORMAT', 'd/M/Y H:i:s');
	//Common
	//Menu
	
	
	
	
	define('MENU_SELECT', 'Selecione');
	define('MENU_DOWNLOAD', 'Download');
	define('MENU_PREVIEW', 'Prever');
	define('MENU_RENAME', 'Renomear');
	define('MENU_EDIT', 'Editar');
	define('MENU_CUT', 'Recortar');
	define('MENU_COPY', 'Copiar');
	define('MENU_DELETE', 'Apagar');
	define('MENU_PLAY', 'Play');
	define('MENU_PASTE', 'Colar');
	
	//Label
		//Top Action
		define('LBL_ACTION_REFRESH', 'Atualizar');
		define('LBL_ACTION_DELETE', 'Apagar');
		define('LBL_ACTION_CUT', 'Recortar');
		define('LBL_ACTION_COPY', 'Copiar');
		define('LBL_ACTION_PASTE', 'Colar');
		define('LBL_ACTION_CLOSE', 'Fechar');
		define('LBL_ACTION_SELECT_ALL', 'Selecionar Tudo');
		//File Listing
	define('LBL_NAME', 'Nome');
	define('LBL_SIZE', 'Tamanho');
	define('LBL_MODIFIED', 'Modificado em');
		//File Information
	define('LBL_FILE_INFO', 'Informa&ccedil;&atilde;o:');
	define('LBL_FILE_NAME', 'Nome:');	
	define('LBL_FILE_CREATED', 'Criado:');
	define('LBL_FILE_MODIFIED', 'Modificado:');
	define('LBL_FILE_SIZE', 'Tamanho:');
	define('LBL_FILE_TYPE', 'Tipo:');
	define('LBL_FILE_WRITABLE', 'Escrita?');
	define('LBL_FILE_READABLE', 'Leitura?');
		//Folder Information
	define('LBL_FOLDER_INFO', 'Informa&ccedil;&atilde;o:');
	define('LBL_FOLDER_PATH', 'Pasta:');
	define('LBL_CURRENT_FOLDER_PATH', 'Pasta atual:');
	define('LBL_FOLDER_CREATED', 'Criada:');
	define('LBL_FOLDER_MODIFIED', 'Modificada:');
	define('LBL_FOLDER_SUDDIR', 'Sub-pastas:');
	define('LBL_FOLDER_FIELS', 'Arquivos:');
	define('LBL_FOLDER_WRITABLE', 'Escrita?');
	define('LBL_FOLDER_READABLE', 'Leitura?');
	define('LBL_FOLDER_ROOT', 'Pasta Raiz');
		//Preview
	define('LBL_PREVIEW', 'Pre-visualizar');
	define('LBL_CLICK_PREVIEW', 'Clique para pre-visualizar.');
	//Buttons
	define('LBL_BTN_SELECT', 'Selecione');
	define('LBL_BTN_CANCEL', 'Cancelar');
	define('LBL_BTN_UPLOAD', 'Upload');
	define('LBL_BTN_CREATE', 'Criar');
	define('LBL_BTN_CLOSE', 'Fechar');
	define('LBL_BTN_NEW_FOLDER', 'Nova Pasta');
	define('LBL_BTN_NEW_FILE', 'Novo Arquivo');
	define('LBL_BTN_EDIT_IMAGE', 'Editar');
	define('LBL_BTN_VIEW', 'Selecione para ver');
	define('LBL_BTN_VIEW_TEXT', 'Texto');
	define('LBL_BTN_VIEW_DETAILS', 'Detalhes');
	define('LBL_BTN_VIEW_THUMBNAIL', 'Miniaturas');
	define('LBL_BTN_VIEW_OPTIONS', 'Visualizar em:');
	//pagination
	define('PAGINATION_NEXT', 'Pr&oacute;ximo');
	define('PAGINATION_PREVIOUS', 'Anterior');
	define('PAGINATION_LAST', '&Uacute;ltimo');
	define('PAGINATION_FIRST', 'Primeiro');
	define('PAGINATION_ITEMS_PER_PAGE', 'Mostrar %s items por p&aacute;gina');
	define('PAGINATION_GO_PARENT', 'Ir para pasta raiz');
	//System
	define('SYS_DISABLED', 'Permiss&atilde;o negada: O sistema est&aacute; desativado.');
	
	//Cut
	define('ERR_NOT_DOC_SELECTED_FOR_CUT', 'Nennum documento selecionado para recortar.');
	//Copy
	define('ERR_NOT_DOC_SELECTED_FOR_COPY', 'Nenhum documento selecionado para copiar.');
	//Paste
	define('ERR_NOT_DOC_SELECTED_FOR_PASTE', 'Nenhum documento selecionado para colar.');
	define('WARNING_CUT_PASTE', 'Voc&ecirc; deseja mover os arquivos selecionados para a pasta atual?');
	define('WARNING_COPY_PASTE', 'Voc&ecirc; deseja copiar os arquivos selecionados para a pasta atual?');
	define('ERR_NOT_DEST_FOLDER_SPECIFIED', 'Nenhuma pasta de destino selecionada');
	define('ERR_DEST_FOLDER_NOT_FOUND', 'Pasta de destino n&atilde;o encontrada.');
	define('ERR_DEST_FOLDER_NOT_ALLOWED', 'Voc&ecirc; n&atilde;o est&aacute; autorizado a mover arquivos para esta pasta');
	define('ERR_UNABLE_TO_MOVE_TO_SAME_DEST', 'Falha ao mover  o arquivo (%s): a pasta incial &eacute; a mesma de destino.');
	define('ERR_UNABLE_TO_MOVE_NOT_FOUND', 'Failed to move this file (%s): Original file does not exist.');
	define('ERR_UNABLE_TO_MOVE_NOT_ALLOWED', 'Failed to move this file (%s): Original file access denied.');
 
	define('ERR_NOT_FILES_PASTED', 'No file(s) has been pasted.');

	//Search
	define('LBL_SEARCH', 'Procurar');
	define('LBL_SEARCH_NAME', 'Nome inteiro ou parcial:');
	define('LBL_SEARCH_FOLDER', 'Olhar em:');
	define('LBL_SEARCH_QUICK', 'Busca r&aacute;pida');
	define('LBL_SEARCH_MTIME', 'Hora da modifica&ccedil;&atilde;o:');
	define('LBL_SEARCH_SIZE', 'Tamanho do arquivo:');
	define('LBL_SEARCH_ADV_OPTIONS', 'Op&ccedil;&otilde;es avan&ccedil;adas');
	define('LBL_SEARCH_FILE_TYPES', 'Tipos de arquivo:');
	define('SEARCH_TYPE_EXE', 'Aplicativo');
	
	define('SEARCH_TYPE_IMG', 'Imagem');
	define('SEARCH_TYPE_ARCHIVE', 'Arquivo');
	define('SEARCH_TYPE_HTML', 'HTML');
	define('SEARCH_TYPE_VIDEO', 'Video');
	define('SEARCH_TYPE_MOVIE', 'Video');
	define('SEARCH_TYPE_MUSIC', 'Musica');
	define('SEARCH_TYPE_FLASH', 'Flash');
	define('SEARCH_TYPE_PPT', 'PowerPoint');
	define('SEARCH_TYPE_DOC', 'Documento');
	define('SEARCH_TYPE_WORD', 'Word');
	define('SEARCH_TYPE_PDF', 'PDF');
	define('SEARCH_TYPE_EXCEL', 'Excel');
	define('SEARCH_TYPE_TEXT', 'Texto');
	define('SEARCH_TYPE_UNKNOWN', 'Desconhecido');
	define('SEARCH_TYPE_XML', 'XML');
	define('SEARCH_ALL_FILE_TYPES', 'Todos tipos de arquivos');
	define('LBL_SEARCH_RECURSIVELY', 'Busca recursivo:');
	define('LBL_RECURSIVELY_YES', 'Sim');
	define('LBL_RECURSIVELY_NO', 'N&atilde;o');
	define('BTN_SEARCH', 'Procurar agora');
	//thickbox
	define('THICKBOX_NEXT', 'Pr&oacute;ximo&gt;');
	define('THICKBOX_PREVIOUS', '&lt;Anterior');
	define('THICKBOX_CLOSE', 'Fechar');
	//Calendar
	define('CALENDAR_CLOSE', 'Fechar');
	define('CALENDAR_CLEAR', 'Limpar');
	define('CALENDAR_PREVIOUS', '&lt;Anterior');
	define('CALENDAR_NEXT', 'Prox&oacute;ximo&gt;');
	define('CALENDAR_CURRENT', 'Hoje');
	define('CALENDAR_MON', 'Seg');
	define('CALENDAR_TUE', 'Ter');
	define('CALENDAR_WED', 'Qua');
	define('CALENDAR_THU', 'Qui');
	define('CALENDAR_FRI', 'Sex');
	define('CALENDAR_SAT', 'Sab');
	define('CALENDAR_SUN', 'Dom');
	define('CALENDAR_JAN', 'Jan');
	define('CALENDAR_FEB', 'Fev');
	define('CALENDAR_MAR', 'Mar');
	define('CALENDAR_APR', 'Abr');
	define('CALENDAR_MAY', 'Mai');
	define('CALENDAR_JUN', 'Jun');
	define('CALENDAR_JUL', 'Jul');
	define('CALENDAR_AUG', 'Ago');
	define('CALENDAR_SEP', 'Set');
	define('CALENDAR_OCT', 'Out');
	define('CALENDAR_NOV', 'Nov');
	define('CALENDAR_DEC', 'Dez');
	//ERROR MESSAGES
		//deletion
	define('ERR_NOT_FILE_SELECTED', 'Selecione um arquivo.');
	define('ERR_NOT_DOC_SELECTED', 'Nenhum arquivo selecionado para apagar');
	define('ERR_DELTED_FAILED', 'N&atilde;o &eacute; possivel apagar o arquivo selecionado.');
	define('ERR_FOLDER_PATH_NOT_ALLOWED', 'A pasta n&atilde;o &eacute; permitida.');
		//class manager
	define('ERR_FOLDER_NOT_FOUND', 'Unable to locate the specific folder: ');
		//rename
	define('ERR_RENAME_FORMAT', 'Please give it a name which only contain letters, digits, space, hyphen and underscore.');
	define('ERR_RENAME_EXISTS', 'Please give it a name which is unique under the folder.');
	define('ERR_RENAME_FILE_NOT_EXISTS', 'The file/folder does not exist.');
	define('ERR_RENAME_FAILED', 'Unable to rename it, please try again.');
	define('ERR_RENAME_EMPTY', 'Please give it a name.');
	define('ERR_NO_CHANGES_MADE', 'No changes has been made.');
	define('ERR_RENAME_FILE_TYPE_NOT_PERMITED', 'You are not permitted to change the file to such extension.');
		//folder creation
	define('ERR_FOLDER_FORMAT', 'Please give it a name which only contain letters, digits, space, hyphen and underscore.');
	define('ERR_FOLDER_EXISTS', 'Please give it a name which is unique under the folder.');
	define('ERR_FOLDER_CREATION_FAILED', 'Unable to create a folder, please try again.');
	define('ERR_FOLDER_NAME_EMPTY', 'Please give it  a name.');
	define('FOLDER_FORM_TITLE', 'New Folder Form');
	define('FOLDER_LBL_TITLE', 'Folder Title:');
	define('FOLDER_LBL_CREATE', 'Create Folder');
	//New File
	define('NEW_FILE_FORM_TITLE', 'New File Form');
	define('NEW_FILE_LBL_TITLE', 'File Name:');
	define('NEW_FILE_CREATE', 'Create File');
		//file upload
	define('ERR_FILE_NAME_FORMAT', 'Please give it a name which only contain letters, digits, space, hyphen and underscore.');
	define('ERR_FILE_NOT_UPLOADED', 'No file has been selected for uploading.');
	define('ERR_FILE_TYPE_NOT_ALLOWED', 'You are not allowed to upload such file type.');
	define('ERR_FILE_MOVE_FAILED', 'Failed to move the file.');
	define('ERR_FILE_NOT_AVAILABLE', 'The file is unavailable.');
	define('ERROR_FILE_TOO_BID', 'File too large. (max: %s)');
	define('FILE_FORM_TITLE', 'File Upload Form');
	define('FILE_LABEL_SELECT', 'Select File');
	define('FILE_LBL_MORE', 'Add File Uploader');
	define('FILE_CANCEL_UPLOAD', 'Cancel File Upload');
	define('FILE_LBL_UPLOAD', 'Upload');
	//file download
	define('ERR_DOWNLOAD_FILE_NOT_FOUND', 'No files selected for download.');
	//Rename
	define('RENAME_FORM_TITLE', 'Rename Form');
	define('RENAME_NEW_NAME', 'New Name');
	define('RENAME_LBL_RENAME', 'Rename');

	//Tips
	define('TIP_FOLDER_GO_DOWN', 'Single Click to get to this folder...');
	define('TIP_DOC_RENAME', 'Double Click to edit...');
	define('TIP_FOLDER_GO_UP', 'Single Click to get to the parent folder...');
	define('TIP_SELECT_ALL', 'Select All');
	define('TIP_UNSELECT_ALL', 'Unselect All');
	//WARNING
	define('WARNING_DELETE', 'Are you sure to delete selected document(s).');
	define('WARNING_IMAGE_EDIT', 'Please select an image for edit.');
	define('WARNING_NOT_FILE_EDIT', 'Please select a file for edit.');
	define('WARING_WINDOW_CLOSE', 'Are you sure to close the window?');
	//Preview
	define('PREVIEW_NOT_PREVIEW', 'No preview available.');
	define('PREVIEW_OPEN_FAILED', 'Unable to open the file.');
	define('PREVIEW_IMAGE_LOAD_FAILED', 'Unable to load the image');

	//Login
	define('LOGIN_PAGE_TITLE', 'Ajax File Manager Login Form');
	define('LOGIN_FORM_TITLE', 'Login Form');
	define('LOGIN_USERNAME', 'Username:');
	define('LOGIN_PASSWORD', 'Password:');
	define('LOGIN_FAILED', 'Invalid username/password.');
	
	
	//88888888888   Below for Image Editor   888888888888888888888
		//Warning 
		define('IMG_WARNING_NO_CHANGE_BEFORE_SAVE', 'You have not made any changes to the images.');
		
		//General
		define('IMG_GEN_IMG_NOT_EXISTS', 'Image does not exist');
		define('IMG_WARNING_LOST_CHANAGES', 'All unsaved changes made to the image will lost, are you sure you wish to continue?');
		define('IMG_WARNING_REST', 'All unsaved changes made to the image will be lost, are you sure to reset?');
		define('IMG_WARNING_EMPTY_RESET', 'No changes has been made to the image so far');
		define('IMG_WARING_WIN_CLOSE', 'Are you sure to close the window?');
		define('IMG_WARNING_UNDO', 'Are you sure to restore the image to previous state?');
		define('IMG_WARING_FLIP_H', 'Are you sure to flip the image horizotally?');
		define('IMG_WARING_FLIP_V', 'Are you sure to flip the image vertically');
		define('IMG_INFO', 'Image Information');
		
		//Mode
			define('IMG_MODE_RESIZE', 'Resize:');
			define('IMG_MODE_CROP', 'Crop:');
			define('IMG_MODE_ROTATE', 'Rotate:');
			define('IMG_MODE_FLIP', 'Flip:');		
		//Button
		
			define('IMG_BTN_ROTATE_LEFT', '90&deg;CCW');
			define('IMG_BTN_ROTATE_RIGHT', '90&deg;CW');
			define('IMG_BTN_FLIP_H', 'Flip Horizontal');
			define('IMG_BTN_FLIP_V', 'Flip Vertical');
			define('IMG_BTN_RESET', 'Reset');
			define('IMG_BTN_UNDO', 'Undo');
			define('IMG_BTN_SAVE', 'Save');
			define('IMG_BTN_CLOSE', 'Close');
			define('IMG_BTN_SAVE_AS', 'Save As');
			define('IMG_BTN_CANCEL', 'Cancel');
		//Checkbox
			define('IMG_CHECKBOX_CONSTRAINT', 'Constraint?');
		//Label
			define('IMG_LBL_WIDTH', 'Width:');
			define('IMG_LBL_HEIGHT', 'Height:');
			define('IMG_LBL_X', 'X:');
			define('IMG_LBL_Y', 'Y:');
			define('IMG_LBL_RATIO', 'Ratio:');
			define('IMG_LBL_ANGLE', 'Angle:');
			define('IMG_LBL_NEW_NAME', 'New Name:');
			define('IMG_LBL_SAVE_AS', 'Save As Form');
			define('IMG_LBL_SAVE_TO', 'Save To:');
			define('IMG_LBL_ROOT_FOLDER', 'Root Folder');
		//Editor
		//Save as 
		define('IMG_NEW_NAME_COMMENTS', 'Please do not contain the image extension.');
		define('IMG_SAVE_AS_ERR_NAME_INVALID', 'Please give it a name which only contain letters, digits, space, hyphen and underscore.');
		define('IMG_SAVE_AS_NOT_FOLDER_SELECTED', 'No distination folder selected.');	
		define('IMG_SAVE_AS_FOLDER_NOT_FOUND', 'The destination folder doest not exist.');
		define('IMG_SAVE_AS_NEW_IMAGE_EXISTS', 'There exists an image with same name.');

		//Save
		define('IMG_SAVE_EMPTY_PATH', 'Empty image path.');
		define('IMG_SAVE_NOT_EXISTS', 'Image does not exist.');
		define('IMG_SAVE_PATH_DISALLOWED', 'You are not allowed to access this file.');
		define('IMG_SAVE_UNKNOWN_MODE', 'Unexpected Image Operation Mode');
		define('IMG_SAVE_RESIZE_FAILED', 'Failed to resize the image.');
		define('IMG_SAVE_CROP_FAILED', 'Failed to crop the image.');
		define('IMG_SAVE_FAILED', 'Failed to save the image.');
		define('IMG_SAVE_BACKUP_FAILED', 'Unable to backup the original image.');
		define('IMG_SAVE_ROTATE_FAILED', 'Unable to rotate the image.');
		define('IMG_SAVE_FLIP_FAILED', 'Unable to flip the image.');
		define('IMG_SAVE_SESSION_IMG_OPEN_FAILED', 'Unable to open image from session.');
		define('IMG_SAVE_IMG_OPEN_FAILED', 'Unable to open image');
		
		
		//UNDO
		define('IMG_UNDO_NO_HISTORY_AVAIALBE', 'No history avaiable for undo.');
		define('IMG_UNDO_COPY_FAILED', 'Unable to restore the image.');
		define('IMG_UNDO_DEL_FAILED', 'Unable to delete the session image');
	
	//88888888888   Above for Image Editor   888888888888888888888
	
	//88888888888   Session   888888888888888888888
		define('SESSION_PERSONAL_DIR_NOT_FOUND', 'Unable to find the dedicated folder which should have been created under session folder');
		define('SESSION_COUNTER_FILE_CREATE_FAILED', 'Unable to open the session counter file.');
		define('SESSION_COUNTER_FILE_WRITE_FAILED', 'Unable to write the session counter file.');
	//88888888888   Session   888888888888888888888
	
	//88888888888   Below for Text Editor   888888888888888888888
		define('TXT_FILE_NOT_FOUND', 'Arquivo n&atilde;o encontrado.');
		define('TXT_EXT_NOT_SELECTED', 'Selecione a extens&atilde;o do arquivo');
		define('TXT_DEST_FOLDER_NOT_SELECTED', 'Selecione a pasta de destino');
		define('TXT_UNKNOWN_REQUEST', 'Pedido desconhecido.');
		define('TXT_DISALLOWED_EXT', 'Voc&ecirc; n&atilde;o pode editar/adicionar este tipo de arquivo.');
		define('TXT_FILE_EXIST', 'Este arquivo j&aacute; existe.');
		define('TXT_FILE_NOT_EXIST', 'N&atilde;o encontrado.');
		define('TXT_CREATE_FAILED', 'Falha na cria&ccedil;&atilde;o de novo arquivo.');
		define('TXT_CONTENT_WRITE_FAILED', 'Falha na grava&ccedil;&atilde;o do arquivo.');
		define('TXT_FILE_OPEN_FAILED', 'Falha ao abrir o arquivo.');
		define('TXT_CONTENT_UPDATE_FAILED', 'Falha ao atualizar o arquivo.');
		define('TXT_SAVE_AS_ERR_NAME_INVALID', 'Use apenas letras, n&uacute;meros, espa&ccedil;o, hifen ou underline no nome.');
	//88888888888   Above for Text Editor   888888888888888888888
	
	
?>