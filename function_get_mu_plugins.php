<?php 

    if ( ! function_exists( 'get_mu_plugins' ) ) { 

        /**
         *
    	 * Returns array of must-use plugin files to be included in global scope.
    	 *
    	 * The default directory is wp-content/mu-plugins. To change the default directory
    	 * manually, define <code>WPMU_PLUGIN_DIR</code> and <code>WPMU_PLUGIN_URL</code>
    	 * in wp-config.php.
    	 *
    	 * @access private
    	 * @since 3.0.0
    	 * @return array Files to include
    	 *
    	 */
    	function get_mu_plugins() {
            $mu_plugins = array();
  
            if ( !is_dir( WPMU_PLUGIN_DIR ) )
                return $mu_plugins;
  
            if ( ! $dh = opendir( WPMU_PLUGIN_DIR ) )
                return $mu_plugins;
  
            while ( ( $plugin = readdir( $dh ) ) !== false ) {
                if ( substr( $plugin, -4 ) == '.php' )
                    $mu_plugins[] = WPMU_PLUGIN_DIR . '/' . $plugin;
            }
            closedir( $dh );
            sort( $mu_plugins );
	
            return $mu_plugins;
        }

    }
?>
