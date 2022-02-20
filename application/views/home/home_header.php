<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    
        $CI =& get_instance();
        $CI->load->model('Model_common');
        
        $language = $CI->Model_common->get_language_data();
        
        foreach ($language as $lang) {
            define($lang['name'], $lang['value']);
        }
        
        $class_name = '';
        $segment_2 = 0;
        $segment_3 = 0;
        $class_name = $this->router->fetch_class();
        $segment_2 = $this->uri->segment('2');
        $segment_3 = $this->uri->segment('3');
        
            echo '<meta name="description" content="'.$page_home['meta_description'].'">';
            echo '<meta name="keywords" content="'.$page_home['meta_keyword'].'">';
            echo '<title>'.$page_home['title'].'</title>';
        
        
    ?>
    
     <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/uploads/<?php echo $setting['favicon']; ?>">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/fitspa/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/fitspa/revolution/css/navigation.css">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/fitspa/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/fitspa/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/fitspa/fonts/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/fitspa/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/fitspa/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/fitspa/css/owl.theme.default.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/fitspa/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/icomoon/styles.css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/fitspa/css/style-main.css">
    
    
    <style type="text/css">
        .main-menu-item.nav-menu li ul li:hover {
            color: #333!important;   
        }
        .fa-check{
            color: #24C1DD!important;
        }
        .fa-close{
            color: #dc3545!important;
        }
        ul.nav-menu li:hover > a{
            color: #ffff;
        }
        ul.nav-menu li ul li:hover > a {
            background: #f1f1f1!important;
            color: #333!important;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90">

<!--Preloader-->
<div class="loader" id="loader-fade">
   <div class="loading-wrapper">
   <img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" width="100px">
   <h4>Loading...</h4>
   </div>
</div>
<!--End Preloader-->

<!--Header Section-->

<div id="strickymenu" class="menu-area navbar-top-default bg-transparent">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 flex">
                <div class="logo" >
                   <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" alt="Logo" style="max-height: 60px!important; max-width: 140px!important;"></a>
                </div>
            </div>
            
            <div class="col-lg-10  main-menu" >
                <div class="main-menu-item" style="top: 0!important;">
                    <ul class="nav-menu" style="top: 0!important;">
                        <li ><a href="<?php echo base_url(); ?>" class="menu-word">Home</a></li>
                        <li class="menu-item-has-children"><a href="#" class="menu-word">About</a>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url(); ?>about">Overview</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>team">Our team</a>
                                </li>
                                 
                                <li>
                                    <a href="<?php echo base_url(); ?>faq">Frequently asked questions
                                    </a>
                                </li>
                                <?php 
                                         $about_pages = menu_pages(1);
                                         foreach($about_pages as $apage):  
                                       ?>

                                        <li>
                                            <a href="<?php echo base_url(); ?>pages/<?=$apage->page_slag?>">
                                            <?=$apage->page_title?>
                                            </a>
                                         </li>

                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#" class="menu-word">Membership</a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>our-community">Our Community</a></li>
                                 <li><a href="<?php echo base_url(); ?>membership-packages">Become a member</a></li> 
                                 <?php 
                                         $about_pages = menu_pages(3);
                                         foreach($about_pages as $apage):  
                                       ?>

                                        <li><a href="<?php echo base_url(); ?>pages/<?=$apage->page_slag?>">
                                            <?=$apage->page_title?>
                                        </a></li>

                                     <?php endforeach; ?>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>events" class="menu-word">
                                Events
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>publications" class="menu-word">    Directory
                            </a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#" class="menu-word">Careers & Opportunities</a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>jobs-oppenings">Job Openings</a></li>
                                <li><a href="<?php echo base_url(); ?>opportunities">Opportunities</a></li>
                                <?php 
                                         $career_pages = menu_pages(2);
                                         foreach($career_pages as $apage):  
                                       ?>

                                        <li><a href="<?php echo base_url(); ?>pages/<?=$apage->page_slag?>">
                                            <?=$apage->page_title?>
                                        </a></li>

                                     <?php endforeach; ?>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#" class="menu-word">Blog</a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>blog-post" class="menu-word">FITSPA Blog</a></li>
                                <li><a href="<?php echo base_url(); ?>member_blogs">Member Blogs</a></li>
                                <li>
                                    <a href="<?php echo base_url(); ?>photo-gallery">Photo Gallery</a>
                                </li>
                                <?php 
                                         $blog_pages = menu_pages(3);
                                         foreach($blog_pages as $apage):  
                                       ?>

                                        <li><a href="<?php echo base_url(); ?>pages/<?=$apage->page_slag?>">
                                            <?=$apage->page_title?>
                                        </a></li>

                                     <?php endforeach; ?>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>contact" class="menu-word">Contact Us</a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</div>

<!--End Header Section-->