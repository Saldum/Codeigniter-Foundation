<?php
    $base_url = $this->config->item('base_url'); 
    $resources = $this->config->item('resources');
?>

<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title><?php echo $title;?></title>
    
    <meta name="description" content="<?php echo $description;?>">
    <!-- Google will often use this as its description of your page/site. Make it good. -->
    
    <meta name="google-site-verification" content="">
    <!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->
    
    <!-- humans.txt -->
    <link rel="author" href="humans.txt" />
    
    <meta name="author" content="">
    <meta name="Copyright" content="">

    <!-- Dublin Core Metadata : http://dublincore.org/ -->
    <meta name="DC.title" content="Project Name">
    <meta name="DC.subject" content="What you're about.">
    <meta name="DC.creator" content="Who made this site.">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $base_url;?>favicon.ico">
         
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <!-- The is the icon for iOS's Web Clip.
         - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4's retina display (IMHO, just go ahead and use the biggest one)
         - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
         - Transparency is not recommended (iOS will put a black BG behind the icon) -->
    
    <!--  Mobile Viewport Fix
    j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag 
    device-width : Occupy full width of the screen in its current orientation
    initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
    maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
    -->
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width">
      
    <!-- Foundation --> 
    <link rel="stylesheet" href="<?php echo $resources;?>plugins/foundation/stylesheets/foundation.min.css">
    <link rel="stylesheet" href="<?php echo $resources;?>plugins/foundation/stylesheets/app.css">
    
    <!-- Modernizr -->
    <script src="<?php echo $resources;?>plugins/foundation/javascripts/modernizr.foundation.js"></script>
    
    <!-- IE Fix for HTML5 Tags -->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
</head>
<body>