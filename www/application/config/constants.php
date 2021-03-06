<?php
/*
  |--------------------------------------------------------------------------
  | File and Directory Modes
  |--------------------------------------------------------------------------
  |
  | These prefs are used when checking and setting modes when working
  | with the file system.  The defaults are fine on servers with proper
  | security, but you may wish (or even need) to change the values in
  | certain environments (Apache running a separate process for each
  | user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
  | always be used to set the mode correctly.
  |
 */
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
  |--------------------------------------------------------------------------
  | File Stream Modes
  |--------------------------------------------------------------------------
  |
  | These modes are used when working with fopen()/popen()
  |
 */

define('FOPEN_READ', 'rb');
define('FOPEN_READ_WRITE', 'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE', 'ab');
define('FOPEN_READ_WRITE_CREATE', 'a+b');
define('FOPEN_WRITE_CREATE_STRICT', 'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
  |--------------------------------------------------------------------------
  | Roles de usuarios
  |--------------------------------------------------------------------------
  |
 */

define('ROLE_ADMINISTRATOR', 1);
define('ROLE_MANAGER', 2);
define('ROLE_SECRETARY', 3);

/*
  |--------------------------------------------------------------------------
  | Usuaario administrador
  |--------------------------------------------------------------------------
  |
 */

define('USER_ADMINISTRATOR', 'admin@casabesoft.com');
// PASSWROD: 123
define('PASSWORD_ADMINISTRATOR', '202cb962ac59075b964b07152d234b70');

/*
  |--------------------------------------------------------------------------
  | Cuenta de correo del formulario de contacto
  |--------------------------------------------------------------------------
  |
 */

define('EMAIL_CONTACT', 'contacto@casabesoft.com');
define('CONTACT_MAIL_SUBJECT', '[CSAcademia][Contacto] Solicitud de información o contacto');

/* End of file constants.php */
/* Location: ./application/config/constants.php */
