<?php
 /*
 Plugin Name: Lux
 Plugin URI: uri oficial del desarrollador/a del plugin
 Description: qué hace el plugin
 Version: numero de versión
 Author: Nombre del programador/a
 Author URI: uri del programador/a
 */

 function randomDestinos() {
     $destinos = array(
         "Santiago, Cuba",
         "Tokio, Japón",
         "San Juan, Puerto Rico",
         "Nueva York, EE.UU.",
         "Bali, Indonesia",
     );
     
     $destino_r = $destinos[array_rand($destinos)];
     
     echo "<h2>Destino: $destino_r</h2>";
 }
 

 function lux_instala(){
   
 }
 

 function lux_desinstala(){
    
 }
 
 
 add_action('activate_lux/lux.php', 'lux_instala');
 add_action('deactivate_lux/lux.php', 'lux_desinstala');
 

 function lux_panel(){
     include('template/panel.html');
     echo "<h2>Página de configuración de Lux</h2>";
 }
 

 function lux_add_menu(){
    if (function_exists('add_menu_page')) {
        add_menu_page('Lux', 'Lux', 'manage_options', 'lux', 'lux_panel', '', 6);
    }
}
 
 add_action('admin_menu', 'lux_add_menu');
 
 ?>
 