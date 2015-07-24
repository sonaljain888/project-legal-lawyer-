<?php

ini_set("display_errors", 1);
/*
 * WEB Configuration
 */
define("SERVER_NAME", $_SERVER['HTTP_HOST']);
define("SERVER_URL","http://".SERVER_NAME);
define("SITE_NAME","Legal Lawyer");
define("WEB_FOLDER", $_SERVER["DOCUMENT_ROOT"]);
//website configuration
define("USER_PROFILE_IMAGE_FOLDER", WEB_FOLDER."/user-images");
define("USER_PROFILE_IMAGE_URL", SERVER_URL."/user-images");
define("TEMPLATE_FOLDER", WEB_FOLDER."/templates");
define("USER_TEMPLATE_FOLDER", TEMPLATE_FOLDER."/web");
define("TEMPLATE_URL", SERVER_URL."/templates");
define("USER_TEMPLATE_URL", TEMPLATE_URL."/web");
define("USER_CSS_URL", USER_TEMPLATE_URL."/css");
define("USER_JS_URL", USER_TEMPLATE_URL."/js");
define("USER_IMG_URL", USER_TEMPLATE_URL."/images");
//admin configuration
define("ADMIN_WEB_URL", SERVER_URL."/admin");
define("ADMIN_TEMPLATE_FOLDER", WEB_FOLDER."/admin");
define("ADMIN_CSS_URL", ADMIN_WEB_URL."/css");
define("ADMIN_JS_URL", ADMIN_WEB_URL."/js");
define("ADMIN_IMG_URL", ADMIN_WEB_URL."/images");
define("ADMIN_BOWER_C0MPONENTS_URL", ADMIN_WEB_URL."/bower_components");
define("MENU_IMG_FOLDER", "images/menus");
define("MENU_IMG_URL", SERVER_URL."/".MENU_IMG_FOLDER);


/*
 * DB Configuration
 */
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "lawyerdemo");
?>
