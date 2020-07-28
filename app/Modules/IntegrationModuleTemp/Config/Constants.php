<?php

//--------------------------------------------------------------------
// PROJECT CONFIG
//--------------------------------------------------------------------

define('PROJECT_ID', 'RedFox');

/**
 * Available values/colours:
 *      - primary   => Blue
 *      - secondary => Gray
 *      - success   => Green
 *      - danger    => Red
 *      - warning   => Yellow
 *      - info      => Turquoise
 *      - light     => Very light gray
 *      - dark      => Darker gray
 */
define('THEME_COLOR', 'custom'); // link to Boostrap
define('THEME_COLOR_CUSTOM', '#FB6D01'); // link to Boostrap

define('PROJECT_LOGO', 'img/Logo Ingefox Round v2.png');
define('PROJECT_LOGO_MAINTENANCE', 'img/logo-red.png');

define('HOME_PAGE', INTEGRATION_BASE_MODULE.'\Views\V_Home');
define('LOGIN_PAGE', INTEGRATION_BASE_MODULE.'\Views\V_Login');
define('REGISTER_PAGE', INTEGRATION_BASE_MODULE.'\Views\Users\V_UserRegister');

define('FORM_FORGOTTEN_PWD_STEP_1',INTEGRATION_BASE_MODULE.'\Views\Users\V_UserForgottenPwdStep1');
define('FORM_FORGOTTEN_PWD_STEP_2',INTEGRATION_BASE_MODULE.'\Views\Users\V_UserForgottenPwdStep2');
define('FORM_FORGOTTEN_PWD_STEP_3',INTEGRATION_BASE_MODULE.'\Views\Users\V_UserForgottenPwdStep3');
define('FORM_FORGOTTEN_PWD_STEP_4',INTEGRATION_BASE_MODULE.'\Views\Users\V_UserForgottenPwdStep4');

define('FORM_NEW_PWD',INTEGRATION_BASE_MODULE.'\Views\Users\V_UserNewPwdForm');


define('AUTHORIZED_URLS_NO_SESSION',[
    LOGIN_PAGE,
    HOME_PAGE,
    REGISTER_PAGE,
	FORM_FORGOTTEN_PWD_STEP_3,
	FORM_FORGOTTEN_PWD_STEP_4,
	FORM_NEW_PWD
]);

//--------------------------------------------------------------------
// ROLES
//--------------------------------------------------------------------

define('ROLE_USER', 1);
define('ROLE_ADMIN', ROLE_USER << 1);


define('ROLES_ARRAY_STR',[
    ROLE_USER => 'Utilisateur',
    ROLE_ADMIN => 'Administrateur'
]);

define('VIEW_MENU', INTEGRATION_BASE_MODULE.'\Views\V_Menu');

// ComFox configuration
define('COMFOX_AVAILABLE',FALSE);

//--------------------------------------------------------------------
// USER Management
//--------------------------------------------------------------------

define('SESSION_REMEMBER_ME', 'SESSION_REMEMBER_ME');

// ComFox configuration
define('USER_SEND_VERIFICATION_EMAIL_ON_CREATION', FALSE & COMFOX_AVAILABLE);
define('USER_EMAIL_FORGET_PWD', FALSE & COMFOX_AVAILABLE);

////////////////////////////////////////////////
// define linked to check email feature
////////////////////////////////////////////////
define('ROUTE_VERIF_EMAIL_ACCOUNT','userVerifAccount');

define('INTEGRATION_REGISTER_EMAIL_TITLE',PROJECT_ID.': Validation de votre compte');
define('INTEGRATION_REGISTER_EMAIL_MESSAGE','<html><body>Bonjour<br/>Merci de cliquer sur le lien suivant pour valider votre compte :<br/>');
define('INTEGRATION_EMAIL_SIGNATURE', 'L\'équipe '.PROJECT_ID );

define('EMAIL_SUPPORT', 'projet@ingefox.com');

////////////////////////////////////////////////
// define linked to update PWD
////////////////////////////////////////////////
define('INTEGRATION_RENEW_PWD_USER_REQUEST',1);
define('INTEGRATION_RENEW_PWD_MANAGER_REQUEST',INTEGRATION_RENEW_PWD_USER_REQUEST+1);

define('ROUTE_UPDATE_PWD_ACCOUNT','Users/forgottenPassword');
define('ROUTE_NEW_PWD_ACCOUNT','Users/newPassword');

define('INTEGRATION_UPDATE_PWD_EMAIL_TITLE', PROJECT_ID.' : Mot de passe oublié');
define('INTEGRATION_UPDATE_PWD_EMAIL_MESSAGE', INTEGRATION_BASE_MODULE.'\Views\Users\V_UserForgottenPwdEmail');

define('INTEGRATION_NEW_PWD_EMAIL_TITLE', PROJECT_ID.' : Inscription');
define('INTEGRATION_NEW_PWD_EMAIL_MESSAGE', INTEGRATION_BASE_MODULE.'\Views\Users\V_UserActivationEmail');

define('INTEGRATION_UPDATE_PWD_EMAIL_TITLE_NEWUSER',PROJECT_ID.' : Nouveau Compte');
define('INTEGRATION_UPDATE_PWD_EMAIL_MESSAGE_NEWUSER','<html><body>Bonjour<br/>Merci de cliquer sur le lien suivant pour valider votre nouveau compte '.PROJECT_ID.' :<br/>');


//--------------------------------------------------------------------
// STATUS CODE
//--------------------------------------------------------------------

define ('ERROR_MESSAGE_GLOBAL','ERREUR.');
// Integrated ERROR Management
//global integration error
define('SC_INTEGRATION_START',SC_REDFOX_MAX_VALUE+1);
define('SC_INTEGRATION_ERROR',SC_INTEGRATION_START+1);

// User error
define('SC_INTEGRATION_USER_ALREADY_EXIST',SC_INTEGRATION_ERROR+1);
define('SC_INTEGRATION_USER_UNKNOWN',SC_INTEGRATION_USER_ALREADY_EXIST+1);
define('SC_INTEGRATION_USER_UPDATE_ERROR',SC_INTEGRATION_USER_UNKNOWN+1);
define('SC_INTEGRATION_USER_DISABLE',SC_INTEGRATION_USER_UPDATE_ERROR+1);

// User forgotten pwd and so
define('SC_INTEGRATION_EMAIL_SEND_ERROR',SC_INTEGRATION_USER_DISABLE+1);
define('SC_INTEGRATION_CHECK_BAD_TOKEN',SC_INTEGRATION_EMAIL_SEND_ERROR+1);
define('SC_INTEGRATION_DB_UPDATE_PROBLEM',SC_INTEGRATION_CHECK_BAD_TOKEN+1);




