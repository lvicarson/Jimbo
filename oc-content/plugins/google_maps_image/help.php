<?php if (!defined('OC_ADMIN') || OC_ADMIN!==true) exit('Access is not allowed.');?>

<div id="settings_form" style="border: 1px solid #ccc; background: #eee; ">
    <div style="padding: 0 20px 20px;">
        <div>
            <fieldset>
                <legend>
                    <h1><?php _e('Google maps image help', 'google maps image') ; ?></h1>
                </legend>
                <h2>
                    <?php _e('What is google maps image Plugin?', 'google maps image') ; ?>
                </h2>
                <p>
                    <?php _e('google maps image plugin convert map location an image .', 'google maps image') ; ?>.
                </p>
				<h2>
                    <?php _e('Why I need this and why it exist ?', 'google maps image') ; ?>
                </h2>	
                <p>
                    <?php _e('You need this if you have many trafic, it reduce the time loader and save your server, memory, processor, etc. So, your server is not so heavy and slow when exist much trafic', 'google maps image') ; ?>.
                </p>				
				<h2>
                    <?php _e('How to use google maps image Plugin?', 'google maps image') ; ?>
                </h2>
                <p>
                    <?php _e('You just need put the function where you need show de google maps, in item.php (and disable the google maps plugin) ', 'google maps image') ; ?>.
                </p>				
                <pre>
		&lt;?php google_maps_image(); ?&gt;
                </pre>
                <h2>
                    <?php _e('How it works?', 'google maps image') ; ?>
                </h2>
                <p>
                    <?php _e("If exist a region... the map display zoom 12 value by default(recomended), otherwise not show the map. And that's it, simple and fast load!", 'google maps image') ; ?>.
                </p>
                <p>
                    <?php printf(__('You have %s version', 'google maps image'), OSCLASS_VERSION); ?>.
                </p>
            </fieldset>
        </div>
    </div>
</div>
