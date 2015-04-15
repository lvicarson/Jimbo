<?php
/*
Plugin Name: Google maps image
Description: This plugin convert google maps an image, this will reduce the consuming of your server 
Version: 1.0.1
Author: fog
Short Name: GMI
*/

	function google_maps_image()
	{
	?>
	<?php //$marker = '&markers=size:mid%7Ccolor:blue%7C'; ?>
	<?php $marker = '&markers=size:mid%7Ccolor:red%7C'; ?>
	<?php if(osc_item_region() != '') { ?>
	<img id="mapImage" width="100%" height="100%" border="0" alt="Location" src="//maps.googleapis.com/maps/api/staticmap?center=<?php echo osc_item_latitude() ; ?>,<?php echo osc_item_longitude() ; ?><?php echo $marker; ?><?php echo osc_item_country(); ?>,<?php echo osc_item_region(); ?>,<?php echo osc_item_city(); ?>,<?php echo osc_item_city_area(); ?>&amp;size=300x300&amp;sensor=false">					
	<?php } else { ?>
	<?php } ?>
<?php	
	}
 	
	
	function google_maps_image_help()
	{
	osc_admin_render_plugin(osc_plugin_path(dirname(__FILE__)) . '/help.php');
	}
	// installation 
     osc_register_plugin(osc_plugin_path(__FILE__), '');

    // This is a hack to show a Uninstall link at plugins table (you could also use some other hook to show a custom option panel)
    osc_add_hook(osc_plugin_path(__FILE__) . '_uninstall', '');

    // This is a hack to show a Configure link at plugins table (you could also use some other hook to show a custom option panel)
    osc_add_hook(osc_plugin_path(__FILE__) . '_configure', 'google_maps_image_help');   
?>