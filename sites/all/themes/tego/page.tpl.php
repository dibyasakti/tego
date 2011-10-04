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
                
                	<p><input type="submit" name="search" value="Search" / class="btn"></p>
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
        
        	<div id="nav-left"><img src="<?php print base_path(). path_to_theme(); ?>/images/nav_left.jpg" width="11" height="31" alt="" /></div>
            <div id="nav-middle">
            
            	<?php print preg_replace('/<a (.*?)>(.*?)<\\/a>/i','<a \\1><span>\\2</span></a>',theme('links', $primary_links, array('class' =>'links', 'id' => 'navlist'))); ?>
            
            </div>
            <div id="nav-right"><img src="<?php print base_path(). path_to_theme(); ?>/images/nav_right.jpg" width="8" height="31" alt="" /></div>
        
        </div><!-- navigation ends here -->
        
       <div id="inner-banner"><!-- inner-banner starts here -->
        
        	<h1><?php echo $title; ?></h1>
        
        </div><!-- inner banner ends here -->
        
        <div id="inner-contentarea"><!-- inner-contentarea starts here -->
        
        	<div id="left-content"><!-- left-content starts here -->
        	  
				<p class="orange-bar">&nbsp;</p>
                <div id="left_bar">
                
                	<div class="overview">
                    
                    	<h5>OVERVIEW</h5>
                        <ul>
                        	<li><a href="#">CASE STUDIES</a></li>
                            <li><a href="#">INDUSTRIAL PRODUCTS</a></li>
                            <li><a href="#">INDUSTRIAL RESOURCES</a></li>
                        </ul>
                    
                    </div>
                    
                    <p>"This technology could <br />take asset tracking <br />and total 
                    life-cycle<br /> tracking to the next level"<br />
                    - Andre Nathanson<br />
                    VDC Research</p>
                </div>
                <div id="right-content-container">
                
                	<div class="content">
					
					<?php if ($messages): ?>

						<div id="messages"><div class="section clearfix">

							<?php print $messages; ?>

						</div></div> <!-- /.section, /#messages -->

					<?php endif; ?>
                    
                    <?php print $content; ?>
                    
                    </div>
                
                </div>
            <?php echo $second_sidebar;?>            
            </div><!-- left-content ends here -->
            
            
            <div id="right_content"><!-- right-content starts here -->
            
               <?php echo $right_content;?>
            
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