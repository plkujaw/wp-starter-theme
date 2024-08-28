<?php

/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Theme
 * @since Theme 1.0
 */

 /**
 * Clickjacking protection
 *
 * Add header to stop site loading in an iFrame.
 **/
function theme_headers() {
    header( 'X-Frame-Options: SAMEORIGIN' );
    header( 'X-UA-Compatible: IE=edge,chrome=1' );
    header( 'Content-Security-Policy: frame-ancestors \'self\'  ;' );
}
add_action( 'send_headers', 'theme_headers', 10 );

// Add brand colours to Colour-Picker Pallettes in admin area
function klf_acf_input_admin_footer()
{ ?>
  <script type="text/javascript">
    (function() {
      acf.add_filter('color_picker_args', function(args, $field) {
        // add the hexadecimal codes here for the colors you want to appear as swatches
        args.palettes = ['#000000', '#FFFFFF', '#002D5B', '#1F8649', '#EF3742', '#F4D3D6']
        // return colors
        return args;
      });
    })();
    </script>
<?php }

add_action('acf/input/admin_footer', 'klf_acf_input_admin_footer');

// Disable Notification Emails for Plugin Updates
add_filter('auto_plugin_update_send_email', '__return_false');
