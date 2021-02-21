<?php
/**
* Plugin Name: Google Analytics
* Plugin URI: https://www.davidrd.es/trucos-wordpress/analytics-sin-plugin-wordpress
* Description: Añadir el código de seguimiento de Google Analytics para Wordpress sin plugin.
* Version: 1.0
* Author: alcaudon89
* Author URI: https://davidrd.es/
* License: GPLv3 or later
*
* Agradecimientos: https://www.wpbeginner.com/beginners-guide/how-to-install-google-analytics-in-wordpress/
*
**/

add_action('wp_head','my_analytics', 20);
function my_analytics() {
?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXX-X"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-XXXXXXXX-X');
</script>
<!-- don't erase below -->
<?php
}
?>