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
define('DB_NAME', 'service');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'm`J4Gsv5uUI8&Ek*L<(DYF7W0>Didbz%B^>F/fP7~y`*BnH^1j9`A3hvyKG?iV2H');
define('SECURE_AUTH_KEY',  'g-%r111]@xZ}`Tx&wa9_wT:&8F:$#YbNE|E+a_O{2~uA<rrGTEZ4f AT;fz%F?wN');
define('LOGGED_IN_KEY',    '*A:36N+Y$hdg~A$Xry}Mwi=awVbgF*R>{`o0=fUP+11!nLl=Ktf;u,-A+9W0??t:');
define('NONCE_KEY',        'E0PJ />6$~=&54%_GIuZ I7N{]oysFhBv Q6!Qpxj-Ld7 o,9qbiC8Z/[UFA:vBU');
define('AUTH_SALT',        'jSf_yUn*Ekqbq1yes>**L=#Co$LmT>8aF`)_KEsf}S4+zAa.49ayj`I.,LtZk2bE');
define('SECURE_AUTH_SALT', '/}-8Rke^vP9.MY,d%;g2`xYK-pr.2] >S.Y8BNBuNXiYBHOxP`+8J/ZuuypGLm&R');
define('LOGGED_IN_SALT',   '|7<3y>1vB:PB)Q_V7I+>-vT![X4%@QJ1dhwk@Bbrwzfpr}~@1EY,0tadi(!%ol6+');
define('NONCE_SALT',       'p.Jw4pEuZ^`)v!mTdnZ%Cp*?]6rD3Lzf!)PS1/91J,$wq&NWLn&,@P0y3`@&7?%@');

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
