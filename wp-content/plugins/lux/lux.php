<?php
 /*
 Plugin Name: Lux
 Plugin URI: Estefany/Agustín
 Description: Devuelve un destino aleatorio y permite a los editores, añadir un nuevo destino
 Version: 1.0
 Author: Estefany/Agustín
 Author URI: Estefany/Agustín
 */

 function randomDestinos() {
    global $wpdb;
    $table_name = $wpdb->prefix . "destinos"; 

    $destino_r = $wpdb->get_var("SELECT destino FROM $table_name ORDER BY RAND() LIMIT 1");
    
    echo "<h2>Puede que tu próximo destino sea: $destino_r</h2>";
    echo '<form method="post"><button type="submit" name="nuevo_destino">Nuevo Destino</button></form>';
}

 function lux_instala(){
    global $wpdb;
    $table_name = $wpdb->prefix . "destinos"; 
   
    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id INT(11) NOT NULL AUTO_INCREMENT,
        destino TEXT NOT NULL,
        PRIMARY KEY (id)
    );";
    
    
    $wpdb->query($sql);

    $sql = "INSERT INTO $table_name (destino) VALUES 
        ('Santiago, Cuba'),
        ('Tokio, Japón'),
        ('San Juan, Puerto Rico'),
        ('Nueva York, EE.UU.'),
        ('Bali, Indonesia');";
    
    $wpdb->query($sql);
 }
 

 function lux_desinstala(){
    global $wpdb;
    $table_name = $wpdb->prefix . "destinos";

    $sql = "DROP TABLE IF EXISTS $table_name;";
    $wpdb->query($sql);
 }
 
 
 add_action('activate_lux/lux.php', 'lux_instala');
 add_action('deactivate_lux/lux.php', 'lux_desinstala');
 

 function lux_panel(){
     include('template/panel.html');
     global $wpdb;
     $table_name = $wpdb->prefix . "destinos";

     if (isset($_POST['nuevo_destino'])) {
        randomDestinos();
    } else {
        randomDestinos();
    }
    
     if (isset($_POST['lux'])) {
         $destino = sanitize_text_field($_POST['lux']); 
         
         $sql = "INSERT INTO $table_name (destino) VALUES ('$destino');";
         $wpdb->query($sql);
 }
}


 function lux_add_menu(){
    if (function_exists('add_menu_page')) {
        add_menu_page('Lux', 'Lux', 'manage_options', 'lux', 'lux_panel', '', 6);
    }
}

    add_action('admin_menu', 'lux_add_menu');
 
 ?>
 