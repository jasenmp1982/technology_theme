<?php

    //Header

?>
<!DOCTYPE html>

<html lang="en">

<head>
   
    <title>
        <?php 
            if ( function_exists('is_tag') && is_tag() ) 
            
            { 
                
                echo 'Tag Archive for &quot;'.$tag.'&quot; - '; 
            
            } 

            elseif ( is_archive() ) 
            
            { 
                
                wp_title(''); echo ' Archive - '; 
            
            } 

            elseif ( is_search() ) 
            
            { 
                
                echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; 
            
            } 
            
            elseif ( !(is_404() ) && ( is_single() ) || ( is_page() ) ) { 
                
                wp_title(''); echo ' - '; 
            
            } 
            
            elseif ( is_404() ) 
            
            { 
                
                echo 'Not Found - '; 
            
            } 

            bloginfo('name'); 
        ?>
    </title>
    
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="profile" href="http://gmpg.org/xfn/11">
    
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>

</head>

<body>
    
<section id="main-content">
    
