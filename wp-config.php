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
define('DB_NAME', 'RMAdmin');

/** Имя пользователя MySQL */
define('DB_USER', 'RMAdmin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'j2sA5aQtpFXbP4sC');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'X>G[H:YH/EAm+/<aru;F+SnQ84:t#-<=MB`,$>#k I*p-38jDCK<P|^I-W>-*me1');
define('SECURE_AUTH_KEY',  '!LM8NdwIRZM]<U.A?|<>|=+0@WsD+RNYY]vWLY%H0 (_+j!1R|St]@Vl$?=ZEF^C');
define('LOGGED_IN_KEY',    'gt{PKDLc_+;HD9Ac%DG+D-=r`2;$B,]}%;ihRz*]]r%YVtV7&:w5c]N)^w5dbGN0');
define('NONCE_KEY',        'o[,ST?N-6nE=U1.ueVX~?-u?Mk[kFN=|{trH @}Jw6DrOxh#|U)B)w(b|KZ$K:-m');
define('AUTH_SALT',        'J51u(Jg{X/|lU+NB`3dO;yQx8u4i8bD8%00MQRs4#60/EYeFTZJK-af&^eWl,J+C');
define('SECURE_AUTH_SALT', 'h-h::5nSv2oy}h:4tdo:cD%I0aL|Q$vh< R`Rr7|,H+.=H; SV^NSS,M.yu-3WNS');
define('LOGGED_IN_SALT',   'K|NLi@k::(xyECQtndM$U o04lMyWB/PU t~ ;x/)0:.mvYTE=AdBWxy1Es6oSt1');
define('NONCE_SALT',       't0-#;dj0q$+art06T;&U~v2Qwzw+Bkm/c&Vh+?22[t(YHsX|X0p&,)@v_Twva8DI');

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
