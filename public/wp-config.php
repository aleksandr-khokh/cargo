<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'srv164791_cargo');

/** Имя пользователя MySQL */
define('DB_USER', 'srv164791_cargo');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '4gA6XXE');

/** Имя сервера MySQL */
define('DB_HOST', 'mysql-164791.srv.hoster.ru');

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
define('AUTH_KEY',         'eO?=y{JxD#+$6emfSCgBfbU@g)wdwU/^tVzta;I{flFd=O-@pjG7;*kvEXpcs6G|');
define('SECURE_AUTH_KEY',  '1THB^~p=TbJO/l$(~_Bh8q0sWhVsvV{&`N21,/>H0ELd+Z;5obCI@qaz^{S)s`h|');
define('LOGGED_IN_KEY',    'TCWRW;VesQ,d?%?*NqmbJPa5I&kzAtqLW*8O,T)hKoSkIy&>FvF`4DLSEmmRx9&<');
define('NONCE_KEY',        'Q-9#0Z-WoVT2,poMQVKu D3<{s|Oh)b.2~j8nVNfNUnIN2tLk_1%Fpr0tv`w8Y3a');
define('AUTH_SALT',        '9gl5.+()5X9QsV:9E5(opAQ?E<a&b(jMy:+wPS*7wb4qC[)dH@d;o~?)zu~!V:WK');
define('SECURE_AUTH_SALT', 'c@K&Fke*t5y2$qKg5z4>+p/?qjOY_P#@k^B{.e AvdU-Ykh1?~nE(gb^!f$sdJ=D');
define('LOGGED_IN_SALT',   'h8$l~8QTX~JubqD+awe=|ZkqGu2lnhT!/Q?&.fVyvvU#xCAC?|!|JD{26wqlW]~G');
define('NONCE_SALT',       'PG%59_&NU<aW$ph},V?vpCWE!NKS#Ih;t6;HHizssO>nIl!Hk||X{7+OeBwwEQ;h');

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
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
