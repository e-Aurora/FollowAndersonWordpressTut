<?php
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * Veritabanı ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Veritabanı ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'cms' );

/** Veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** Veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** Veritabanı sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * 
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz.
 * Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Qull$wwy^3uF[N2scs@*!8)N[/xA|TNe*aW3J*e@w{wwpeX9#-2DzPl <X j#-cx' );
define( 'SECURE_AUTH_KEY',  'UP]UYPmjxP;X4Q^lS3h3]Hlf1-i$Bav+`6Yt^x#_lFOUYq4w>et#2/tHVo5rk:0 ' );
define( 'LOGGED_IN_KEY',    'i[5x_LS}T,r6Az.,E#_1~o$)d|MzT&QwJBsFx_L_;M3E$^%R:,8$Z%[3~m3uT(($' );
define( 'NONCE_KEY',        'e.>~lNAi3oUNDx0@;k_qMZq_vPAeHS|/7$8p|uPA w7#Fe5GK_9OzX#CB#>H/Z%p' );
define( 'AUTH_SALT',        'NYUEIbw)7}SVE33^p*DC9fReprP*)hTrLM87-$KdE}.9t:CPJ74aOi#8w_U)Q*,-' );
define( 'SECURE_AUTH_SALT', 'axN1?lG2AX%bt<t1NyEiztgI+H9|+e|/olR:H}}JcEe1?^A:JVuvd>$j18&{2`9%' );
define( 'LOGGED_IN_SALT',   'RFz SfVGa8o*(3IS/O^-tqnt=F}d*!TAsLW8q o8Cv1].L}h@/2%i@JT.eJk_Vsz' );
define( 'NONCE_SALT',       '6u?#mOap(xW3E6}o4;n_+EihJ=O{KdknlK(0g[7X<S{}u3KnyBgKT=,?bRBk+-%,' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri true olarak ayarlayıp geliştirme sırasında hataların ekrana
 * basılmasını sağlayabilirsiniz. Tema ve eklenti geliştiricilerinin geliştirme
 * aşamasında WP_DEBUG kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Her türlü özel değeri bu satı ile "Hepsi bu kadar" yazan satır arasına ekleyebilirsiniz. */



/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';