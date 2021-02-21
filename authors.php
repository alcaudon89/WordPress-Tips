<?php
/**
* Plugin Name: Cambio url Autores
* Plugin URI: https://www.davidrd.es/trucos-wordpress/cambiar-url-autores-por-defecto-wordpresss
* Description: Cambiar la url que genera WordPress por una personalizada.
* Version: 1.0
* Author: alcaudon89
* Author URI: https://davidrd.es/
* License: GPLv3 or later
*
* Agradecimientos: https://stackoverflow.com/a/903970
*
**/

add_filter( 'author_link', 'admin_author_link', 10, 3);
function admin_author_link($link, $author_id, $author_nicename) {
    if( $author_id==1 ) {
        $link = 'http://site.com/company/';
    }
    return $link;
    if( $author_id==2 ) {
        $link = 'http://site.com/company/';
    }
    return $link;
}
?>