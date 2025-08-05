<?php
/*
Plugin Name: GRA - Geração Rápida de Anúncios
Description: Ferramenta simples para criar anúncios automaticamente.
Version: 1.0
Author: Você
*/

add_action('admin_menu', function() {
    add_menu_page('GRA', 'GRA', 'manage_options', 'gra-plugin', 'gra_plugin_page', 'dashicons-megaphone', 3);
});

function gra_plugin_page() {
    echo '<div style="height:90vh;"><iframe src="https://leleto84.com" width="100%" height="100%" frameborder="0"></iframe></div>';
}
?>
