<?php
// HTTP
define('HTTP_SERVER', 'https://www.readversity.com/');

// HTTPS
define('HTTPS_SERVER', 'https://www.readversity.com/');

// DIR
define('DIR_APPLICATION', '/var/www/readversity/catalog/');
define('DIR_SYSTEM', '/var/www/readversity/system/');
define('DIR_IMAGE', '/var/www/readversity/image/');
define('DIR_STORAGE', '/var/www/readversity/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');  // Update to your Vultr DB host
define('DB_USERNAME', 'readversity_user');
define('DB_PASSWORD', 'readversity@24434');   // Update to your DB password
define('DB_DATABASE', 'readversity_db');      // Update to your DB name
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

//Holla Tags
define('user', 'LockBook');
define('passs', 'Kehinde1.');