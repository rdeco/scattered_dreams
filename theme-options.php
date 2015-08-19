<?php
// create custom plugin settings menu
add_action('admin_menu', 'scatteredDreams_create_menu');

function scatteredDreams_create_menu() {

	//create new submenu
	add_submenu_page( 'themes.php', 'Scattered Dreams Theme Options', 'Theme Options', 'administrator', __FILE__, 'scatteredDreams_settings_page');

	//call register settings function
	add_action( 'admin_init', 'scatteredDreams_register_settings' );
}

function scatteredDreams_register_settings() {
	//register our settings
	register_setting( 'scatteredDreams-settings-group', 'scatteredDreams_facebook');
	register_setting( 'scatteredDreams-settings-group', 'scatteredDreams_twitter');
    register_setting( 'scatteredDreams-settings-group', 'scatteredDreams_pinterest');
    register_setting( 'scatteredDreams-settings-group', 'scatteredDreams_github');
    register_setting( 'scatteredDreams-settings-group', 'scatteredDreams_wordpress');
	register_setting( 'scatteredDreams-settings-group', 'scatteredDreams_logo');

}

function scatteredDreams_settings_page() {

?>

<div class="wrap">
<h2>Scattered Dreams Theme Settings</h2>

<form id="landingOptions" method="post" action="options.php">
    <?php settings_fields( 'scatteredDreams-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Logo:</th>
        <td>
       		<input type="text" name="scatteredDreams_logo" value="<?php print get_option('scatteredDreams_logo'); ?>" /><br/>
       		*Upload using the Media Uploader and paste the URL here.
       	</td>
       	</tr>
        <tr valign="top">
        <th scope="row">Facebook Link:</th>
        <td>
       		<input type="text" name="scatteredDreams_facebook" value="<?php print get_option('scatteredDreams_facebook'); ?>" />
       	</td>
        </tr>
        <tr valign="top">
        <th scope="row">Twitter Link:</th>
        <td>
       		<input type="text" name="scatteredDreams_twitter" value="<?php print get_option('scatteredDreams_twitter'); ?>" />
       	</td>
		</tr>

        <tr valign="top">
        <th scope="row">Pinterest Link:</th>
        <td>
            <input type="text" name="scatteredDreams_pinterest" value="<?php print get_option('scatteredDreams_pinterest'); ?>" />
        </td>
        </tr>

        <tr valign="top">
        <th scope="row">GitHub Link:</th>
        <td>
            <input type="text" name="scatteredDreams_github" value="<?php print get_option('scatteredDreams_github'); ?>" />
        </td>
        </tr>
        <tr valign="top">
        <th scope="row">Wordpress Link:</th>
        <td>
            <input type="text" name="scatteredDreams_wordpress" value="<?php print get_option('scatteredDreams_wordpress'); ?>" />
        </td>
        </tr>
    </table>
    <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>

</form>
</div>
<?php } ?>
