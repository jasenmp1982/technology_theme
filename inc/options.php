<div class="wrap">
    
    <h1>Theme Options</h1>
    
    <form method="post" action="options.php"> 
    
        <?php settings_fields( 'themeoptions-group' ); ?>
        
        <?php do_settings_sections( 'themeoptions-group' ); ?>
        
        <?php submit_button(); ?>
    
    </form>
    <!-- /Form -->
    
</div>