   <?php
    /*
    Plugin Name: lp_database
    */
   
    function themeName_dbTbl_install(){
        //decalre $wpdb to access it functions
        global $wpdb;
        global $themeName_db_version;
        $themeName_db_version = "1.0";
        
        //get the prefix set in the functions.php then prefix it with the table name
        $table = $wpdb->prefix . 'reservations';
        
        //check if table exists
        if($wpdb->get_var("SHOW TABLES LIKE '$table'") != $table) {
            //get the configured charset type
            $charset_collate =  $wpdb->get_charset_collate();

            // SQL STATEMENT TO CREATE TABLE RESERVATIONS
            $sql = "CREATE TABLE $table (
                    id mediumint(9) NOT NULL AUTO_INCREMENT,
                    name varchar(30) NOT NULL,
                    date datetime NOT NULL,
                    email varchar(50) DEFAULT '' NOT NULL,
                    phone varchar(15) NOT NULL,
                    message longtext NOT NULL,
                    PRIMARY KEY  (id) 
            ) $charset_collate;";
            //uses upgrade.php to use the dbDelta function
            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            //execute the sql statement
            dbDelta($sql);
            //add a version to the database for upgrading purposes
            add_option('$themeName_db_version',$themeName_db_version);
        }
        else{
            echo "Table " . $table . " already exists.";
        }
    }

//    add_action('after_setup_theme','themeName_database');
    //hook this in the plugin activation
    register_activation_hook( __FILE__, 'themeName_dbTbl_install' );
?>


