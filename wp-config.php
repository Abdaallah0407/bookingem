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
define( 'DB_NAME', 'elitenews' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '^?P7sb%yLhjJx#j`9ljR@ YI9Sf:*XXJOw$8_}S>K;I^3VMfF5;//BJX`&r +}bK' );
define( 'SECURE_AUTH_KEY',  'QM{pviqz(fqCUN5q{*zg1iL-{!(3mLf:j:oVa1|cZ5-Q->$}UCX[ +4?4c^KGT?C' );
define( 'LOGGED_IN_KEY',    ')zw&7rA&_].Y)Kc.,<2G,u#uI.-F_}lXaLn{?wApjl<S{3{ T _RvC_|gW=OeT>0' );
define( 'NONCE_KEY',        'E)Xs>:hMq<Gi2|!*irTSN`gng}:VNJv&_Yc>Cu:s/a TkRC.Qy([UVo!B}F`n#@w' );
define( 'AUTH_SALT',        'S5Lee<_QLX.MdCj9e3*(yVkE=Y-GUs swQ/,KOovhlT hvJ]tYEEX{2-#B+|.WmY' );
define( 'SECURE_AUTH_SALT', ':7YW9)#4)Ch[)@F;mTjzFBjOJE P>M9oTw_<g!igjc,%PPBIE5B&A2f:{ts(&msB' );
define( 'LOGGED_IN_SALT',   'Cc!FqAGV zu.M/V<&@2*d;[.71lcbdO{cGX`+@0b?YV(-LBL04_O~UUQ&UkwNn/n' );
define( 'NONCE_SALT',       'ssk >;o;~mLLmzd%*jjSb((jrAznIwq`UrLpbTnz<B(L=a]Mcbf!>Y#dKuK({SYF' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
