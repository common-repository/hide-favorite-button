<?php
/*
Plugin Name: Hide Favorite Button
Plugin URI:
Description: when enabled, hide "favorite button" / "new button" of the admin bar.
Author: iDo
Version: 0.2
Author URI:
*/

class HideFavoriteButton
{

    function HideFavoriteButton()
    {
        if ( is_admin() ) {
            add_action( 'admin_head', array( &$this, 'hide' ), 1000 );
        }
    }

    function hide()
    {
		echo '<style type="text/css">#wp-admin-bar-new-content, #favorite-actions {display:none }</style>';
    }
}
new HideFavoriteButton;
