<?php 
/**
 * The template for displaying the header
 *
 *
 * @package WordPress
 * @subpackage Dindin2019
 * @since www.appdindin.com.br
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <meta name="theme-color" content="#000000">
    <meta property="og:image" content="cover.png">
    <meta property="og:url" content="">
    <meta property="og:description" content="">
    <meta property="og:site_name" content="">
    <meta property="og:title" content="">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:type" content="website">
    <link rel="shortcut icon" href="/img/favicon.png">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/js.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> cz-shortcut-listen="true">