<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'cursoemvideowp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',{^-KGJ_5Z;]TxF?|htYge8C4!)=x=IwerjBmZ-5js1:2k1%E(RwcEm$H>awuDM$' );
define( 'SECURE_AUTH_KEY',  ')jC`&ECFO*AC6v$G7^_<FzMNr5.9UaT`wxf7I.C:Zw2c?d25JiLvV)}FD;3]];2j' );
define( 'LOGGED_IN_KEY',    'Pb8>0Y3<y.7U-Qmn|a {`;(RuC+=m4:Vt~D)<ryqfF q6[Wu(Qf]CG{)1}KMCrHK' );
define( 'NONCE_KEY',        'n)`IK.3ZWX9kMjj?t9fcUV,81aqxv,?Qvw1W2do v#<N}n!O9M&>N*IJCHI+;]38' );
define( 'AUTH_SALT',        '9%#x<Br@Qf]gTpO>nd8|CdHBgYp_2kS{zLDz3#=d?:%?Wo*ySPX@=3?}R)GW79hG' );
define( 'SECURE_AUTH_SALT', 'MgTe@SLy;@ucbqoSzbd:=Ntp9z2@3.:BYvYO1#ES94_!YPU[JxQMk~x[9Acv887X' );
define( 'LOGGED_IN_SALT',   '?N!(r`K>1VolA=xjUqAJS(B]%6$j*1zLF((4E%D`fN-S(9qxiFdd&I}b2_p&BgyX' );
define( 'NONCE_SALT',       'U6DG7V&A,K?K()|`wz9/./Uy7m(^So/Wq]Ep //q:!+H}UC~l3z_gU(-P6boX6,V' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'cevwp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
