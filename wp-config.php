<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */
		
// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/u122376347/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'u122376347_spda');

/** Имя пользователя MySQL */
define('DB_USER', 'u122376347_root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '36543654cvbn');

/** Имя сервера MySQL */
define('DB_HOST', 'mysql.hostinger.ru');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',K.1:iD%GXD=PR6>6t#p3@Vr}Y)#CrlPz8pN^ogbSCBLi7+VA_`MMNe^K;YNb_mV');
define('SECURE_AUTH_KEY',  '9xi)*(cuTiLHbd=t-)?tx-#IC3P--/o>=gX@ow I/eAPv+z*V/-@O2+35!LUu-0X');
define('LOGGED_IN_KEY',    'pNHjz1lsF7(yC-,=73M_9_DbX* &Yu&<j tWBDd@R7i(~]iF3&}U6dL7X1k8iY]>');
define('NONCE_KEY',        '.V$!f. fgLc)QGDk+3.AepO>RpFIu5PD+g+`Hy >sT8Is6.i9f?CL!ip-t&)Z-A1');
define('AUTH_SALT',        '9j^H[|OfKo_TOmE2+xWDq:Zxm{V&6`aF5+tw_&[ngi@)H(37W,QXi]-,1bZT.3W9');
define('SECURE_AUTH_SALT', 'Jj;.k$v`eZI9QMQf&#c,~{[.!~!V0)Y |hLz2Nc<)r=sa-^I i/_Kry!Ny,}fZol');
define('LOGGED_IN_SALT',   '<lh`+83Ecc|_8b7MO.Po|!}APN:vs|R[dp7os{m2]((@gT^ErG&J.$MM&|7RK;qu');
define('NONCE_SALT',       'Nu`)<^PiI*N d+:g:[Dp0bGIS@nxq)m..<sW4AvJ$:&!{|^cUczI`w[UQQl|&hHm');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');


