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
define( 'DB_NAME', 'landing' );

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
define( 'AUTH_KEY',         'v8vUu(B;dFh$ji;e>FnBEnGedQ4lsC/-/7AcHOE9&^E2-1.`.K-t(<Y25E[<n-;W' );
define( 'SECURE_AUTH_KEY',  'kzS<c<#:n1f0}vtyw0NU6H}@xPy14?&*It_z3rn.OVd=Q&vown21rL$oKK5[g-M#' );
define( 'LOGGED_IN_KEY',    '/hJyqFQX>$OZ8!O6<6 G0]D9P<|![`TAff+rj_) jI8xG<ep~9,N:RnqX!^=P5ZA' );
define( 'NONCE_KEY',        'a~0jRE256BjqG#*Uf(4}9aV0}z<@6]Q4{Rn4TR55)%{d/!B_QM]yY.K5@Q#9#$Qg' );
define( 'AUTH_SALT',        'B+cLN)828JJKT[O 8)v%&]._6n_7~Rvv)B>HPxwdBVcCdw|gfrZ1zLp+Mh+PPy~Z' );
define( 'SECURE_AUTH_SALT', '7iF}WhG%4Rm( ]io.nr!:Rd1aSo=YgG!MF3$mf9es[{=%bP6a/v0a5}.<6_iPHB&' );
define( 'LOGGED_IN_SALT',   'Mx:gPS295/X%8vhkvTG}m0JSsdLHHu,_p#?V9j82yg9yihl<2PF|h;nXHY0W6(W,' );
define( 'NONCE_SALT',       '_.Eet[Q^Yj2v_#&T_ApLz;uX5DsuGm3;wJfCk0y;-QC.C<x:bWoj3P&7U#24<~>k' );

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
