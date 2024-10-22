<?php
 /*
 Plugin Name: Lux
 Plugin URI: uri oficial del desarrollador/a del plugin
 Description: qué hace el plugin
 Version: numero de versión
 Author: Nombre del programador/a
 Author URI: uri del programador/a
 */

 /*
 Todo esto aparecerá en el panel de
 administración de plugins del dashboard
 */

 function lux(){
    echo "Van dos por tres calles y se cae el de enmedio";
    }

    function lux_instala(){
        // Por ahora, la dejamos vacía
        }
        function lux_desinstala(){
        // Por ahora, la dejamos vacía
        }
        add_action('activate_lux/lux.php','lux_instala');
        add_action('deactivate_lux/lux.php', 'lux_desinstala');
?>