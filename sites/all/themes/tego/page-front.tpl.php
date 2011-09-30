<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <link type="text/css" rel="stylesheet" media="all" href="<?php print $base_path . $directory; ?>/reset.css" />
  <?php print $styles; ?>
  <style type="text/css" media="all"><?php print $dynamic_styles; ?></style>
  <!--[if lte IE 8]>
  <link type="text/css" rel="stylesheet" href="<?php print $base_path . $directory; ?>/ie8.css" media="all" />
  <![endif]-->

  <!--[if lte IE 7]>
  <link type="text/css" rel="stylesheet" href="<?php print $base_path . $directory; ?>/ie7.css" media="all" />
  <![endif]-->

  <?php print $scripts; ?>
  
</head>
<?php global $base_url; ?>
<body class="<?php print $body_classes; ?> <?php print $layout_classes; ?>">


	<div id="wrapper"><!-- wrappetr starts here -->
    
    	<div id="header"><!-- header starts here -->
        
        	<div id="logo-container">
				<?php if (!empty($logo)): ?>
			
				<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                  <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
				
				<?php endif; ?>

            
            </div>
            
            <div id="head-right">
            
            	<div id="head-right-top">
                
                	<p><input type="submit" name="search" value="Search" class="btn" /></p>
                    <ul>
                        <li><input type="text" name="search" class="search" id="search" /></li>
                    </ul>
                
                </div>
                <div id="head-right-bottom">
                
                	<ul>
                        <li><a href="<?php echo $base_url;?>/contact">CONTACT US</a></li>
                        <li><a href="<?php echo $base_url;?>/user">LOGIN</a></li>
                        <li><a href="#">SOCIAL MEDIA</a></li>

                    </ul>
                
                </div>
            
            </div>
        
        </div><!-- header ends here -->
        
        <div id="navigation"><!-- navigation starts here -->
        
        	<div id="nav-left"><img src="<?php print path_to_theme(); ?>/images/nav_left.jpg" width="11" height="31" alt="" /></div>
            <div id="nav-middle">
            
            	<?php print preg_replace('/<a (.*?)>(.*?)<\\/a>/i','<a \\1><span>\\2</span></a>',theme('links', $primary_links, array('class' =>'links', 'id' => 'navlist'))); ?>
            
            </div>
            <div id="nav-right"><img src="<?php print path_to_theme(); ?>/images/nav_right.jpg" width="8" height="31" alt="" /></div>
        
        </div><!-- navigation ends here -->
        
        <div id="contentarea"><!-- contentarea starts here -->
        
        	<div id="left-content"><!-- left-content starts here -->
            
				<div id="banner"><!-- banner starts here -->
        
        			<div id="banner-left">
                    
                    	<h1>Beyond IDentification</h1>
                        <h3>Smart Systems, Smart Assets</h3>
                        <p>Lorem ipsum dolar sit amet. <br />
                        Lorem ipsum dolar sit amet.<br />
                        Lorem ipsum dolar sit amet</p>
                        
                        <ul>
                        	<li><a href="#">&nbsp;</a></li>
                            <li><a href="#">&nbsp;</a></li>
                            <li><a href="#">&nbsp;</a></li>
                            <li><a href="#">&nbsp;</a></li>
                            <li><a href="#">&nbsp;</a></li>
                        </ul>
                    
                    </div>
        
       			</div><!-- banner ends here -->
                <div id="block-container"><!-- block container starts here -->
                
                	<div class="block">
                    
                    	<h3 class="block1">Aerospace &amp; Defence</h3>
                        <img src="<?php print path_to_theme(); ?>/images/aerospace_img.jpg" width="220" height="90" alt="" />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting<a href="#">MORE</a></p>
                    
                    </div>
                    
                	<div class="block">
                    
                    	<h3 class="block2">Medical</h3>
                        <img src="<?php print path_to_theme(); ?>/images/medical_img.jpg" width="220" height="90" alt="" />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting<a href="#">MORE</a></p>
                    
                    </div>
                    
                	<div class="block">
                    
                    	<h3 class="block3">Industrial Maintenance</h3>
                        <img src="<?php print path_to_theme(); ?>/images/indmaintenance_img.jpg" width="220" height="90" alt="" />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting <a href="#">MORE</a></p>
                    
                    </div>
                
                </div><!-- block container ends here -->

                <div id="block-container-bottom"><!-- block container bottom starts here -->
                
                	<div class="bottom-block">
                    
                    	<h3 class="block1">Aerospace &amp; Defence</h3>
                        <ul class="resources">
                        	<li class="whitepaper"><a href="#">Whitepaper:</a>Lorem Ipsum is simply dummy text</li>
                            <li class="video"><a href="#">Video:</a>Lorem Ipsum is simply dummy text</li>
                            <li class="whitepaper"><a href="#">Whitepaper:</a>Lorem Ipsum is simply dummy text</li>
                            <li class="video"><a href="#">Video:</a>Lorem Ipsum is simply dummy text</li>
                            <li class="video"><a href="#">Video:</a>Lorem Ipsum is simply dummy text</li>
                        </ul>
                    
                    </div>
                    
                	<div class="bottom-block">
                    
                    	<h3 class="block2">Medical</h3>
                        <ul class="medical">
                        	<li>Lorem Ipsum is simply dummy text of the printing and <a href="#">MORE</a></li>
                            <li>Lorem Ipsum is simply dummy text of the printing and <a href="#">MORE</a></li>
                            <li>Lorem Ipsum is simply dummy text of the printing and <a href="#">MORE</a></li>
                            <li>Lorem Ipsum is simply dummy text of the printing and <a href="#">MORE</a></li>
                            <li>Lorem Ipsum is simply dummy text of the printing and <a href="#">MORE</a></li>
                        </ul>
                        
                    
                    </div>
                    
                	<div class="bottom-block ind">
                    
                    	<h3 class="block3">Industrial Maintenance</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. <a href="#">MORE</a></p>
                    
                    </div>
                
                </div><!-- block container bottom ends here -->

            
            </div><!-- left-contenmt ends here -->
            
            
            <div id="right_content"><!-- right-content starts here -->
            
            	<div class="sec">
                
                	<img src="<?php print path_to_theme(); ?>/images/sidebar_img1.jpg" width="220" height="100" alt="" />
                	<h3>Attend Aviation Webinar</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <a href="#">MORE</a></p>
                    
                </div>
                
				<div class="sec">
                
                	<img src="<?php print path_to_theme(); ?>/images/sidebar_img2.jpg" width="220" height="100" alt="" />
                	<h3>Get An ATA Spec 2000 Kit</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <a href="#">MORE</a></p>
                    
                </div>
                
				<div class="sec">
                
                	<img src="<?php print path_to_theme(); ?>/images/sidebar_img3.jpg" width="220" height="100" alt="" />
                	<h3>Become A Partner</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <a href="#">MORE</a></p>
                    
                </div>
        
            </div><!-- right-content ends here -->
        
        
        </div><!-- contentarea ends here -->
        <div style="clear:both;"></div>
        
        <div id="footer"><!-- footer starts here -->
        	
            <div id="footer-container">
        
        	    <div class="foot-box">
            
            	<?php print $footer_link1; ?>
            
            	</div>
                
        	    <div class="foot-box">
            
            	<?php print $footer_link2; ?>
            
            	</div>
                
        	    <div class="foot-box">
            
            	<?php print $footer_link3; ?>
            
            	</div>
                
        	    <div class="foot-box">
            
            	<?php print $footer_link4; ?>
            
            	</div>
                
        	    <div class="foot-box">
            
            	<?php print $footer_link5; ?>
            
            	</div>
                
        	    <div class="foot-box">
            
            	<?php print $footer_link6; ?>
            
            	</div>
            
           </div>
        
        </div><!-- footer ends here -->
        
    
    </div><!-- wrapper ends here -->


</body>
</html>