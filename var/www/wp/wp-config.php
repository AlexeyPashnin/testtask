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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'username' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'K9%pwL9_' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']l5E=S(89Kbt|~-yh<K!>FV&]UM9<_xhE>![}.<D%h4}At(z!96z5CggrP7?UY#~' );
define( 'SECURE_AUTH_KEY',  'Iffzy3F$ys_*ATNQUm@SDK;S>TrjJWe?nvJJtGnse~M{Wb/G^8`X$+$]IbD2@z$s' );
define( 'LOGGED_IN_KEY',    '^Y]@xF*@VU6NT`(!gzg~QeLYXX]M9n/Vx)+TBCOMK4u+,z-O:Z:cm{R[D<@L_wkf' );
define( 'NONCE_KEY',        'cpaa *1zS&r9k+,/F,$5>Z#Tkz*DgBpq%{D sjFY?[LUdVVrw[9-]7V~]BRl3bc]' );
define( 'AUTH_SALT',        '$!)/NmTn]Vktq/S~=`Ap2Aw`koU:HYeRb M1?_jZ-+XwLq3Xml[|4q3Ki/|0/U~(' );
define( 'SECURE_AUTH_SALT', ')kV^Xz5<WNPBUj5TCU2j+wDPlGpM@.g/_?]&cU7b@gfzW>FqG`4I2OP&Tm~M#`ee' );
define( 'LOGGED_IN_SALT',   '83*Y5I_x(^mI7B Oim]t3hBd{Dd`FYy/!C5{yJjCx:~-1esRR5~~1u7w:R!nxUc,' );
define( 'NONCE_SALT',       'ZN*N:qzv[>kzjq9|J!sg$m|dyNnHdmZM{5JQbP?WgP.f(rlTRBk)tb,qpLSGS|sg' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
