<?php

//--------------------------------------------------------------------
// URL CONFIG
//--------------------------------------------------------------------

define('BO_HOME_PAGE', 'RFCore\Views\BackOffice\V_Home');
define('BO_LOGIN_PAGE', 'RFCore\Views\BOUsers\V_Login');
define('BO_REGISTER_PAGE', 'RFCore\Views\BOUsers\V_RegisterForm');
define('MAINTENANCE_PAGE', 'RFCore\Views\BackOffice\V_Maintenance');

define('LAYOUT', INTEGRATION_BASE_MODULE.'\Views\V_Layout');
define('LAYOUT_BO', INTEGRATION_BASE_MODULE.'\Views\V_LayoutBO');

define('AUTHORIZED_URLS_NO_SESSION_BO',[
	BO_LOGIN_PAGE,
	BO_HOME_PAGE,
	BO_REGISTER_PAGE
]);

define('BO_DEFAULT_USER','admin');
define('BO_DEFAULT_USER_PASSWORD','');

