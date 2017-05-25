<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <meta name="google-site-verification" content="1XbV53OyHuAyPbbPAZsDF7kOfd-bBW2wy6gZ4XPFjUU" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Comminities</a></li>
                        <li><a href="#">Developers</a></li>
                        <li><a href="#">Compare Projects</a></li>
                        <li><a href="#">Floorplans</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                En <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/language/en">English</a></li>
                                <li><a href="/language/ar">Arabic</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="Hero--container Flex Flex--center">
            <div class="Hero__carousel owl-carousel" data-locale="en">
                <div>
                    <img src="<?=get_bloginfo('stylesheet_directory')?>/images/slide.jpeg" alt="" title="" class="img-responsive" />
                </div>
            </div>

            <div class="Hero__content">
                <img src="<?=get_bloginfo('stylesheet_directory')?>/images/logo.png" alt="<?=get_bloginfo('name')?>" title="<?=get_bloginfo('name')?>" class="img-responsive" />
                    <form method="GET" action="#" class="Search">
                        <input type="text" 
                            name="query" 
                            class="form-control input-lg Search__input" 
                            placeholder="Search Project" />
                        <button type="submit" class="btn-link Search__button">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
            </div>

            <div class="Hero__carousel--nav">
                <a class="Hero__prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </a>
                <a class="Hero__next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>

        <section class="About">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="Row Flex--center">
                            <div class="Column-6">
                                <div class="padding-20">
                                    <div class="Home__video--container Flex Flex--center">
                                        <video id="Home__video"
                                            class="video-js" 
                                            muted controls
                                            preload="auto"
                                            height="391"
                                            poster="<?=get_bloginfo('stylesheet_directory')?>/images/burj-khalifa-fountain.jpg"}}
                                        >
                                            <source src="http://pcasa.ae/pcasa/uploads/QaZeieDYLoeU3Mtn.mp4" type='video/mp4'>
                                            <p class="vjs-no-js">
                                                To view this video please enable JavaScript, and consider upgrading to a web browser that
                                                <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                                            </p>
                                        </video>    
                                        <button class="btn btn-link PlayButton">
                                            <div class="play-video-icon Flex Flex--center">
                                                <span></span>
                                            </div>
                                        </button>
                                    </div>                                                      
                                </div>
                            </div>
                            <div class="Column-6">
                                <div class="padding-20">
                                    <h3 class="Section__title">About Dubai Off Plan Projects</h3>
                                    <p>
                                        Property which is still in the process of construction or is yet to be constructed is called off plan property. Off plan properties play a major role in strengthening the real estate sector of Dubai. Almost all property developers of Dubai have off plan projects scattered across the Emirates.
                                    </p>
                                    <p>
                                        When buying real estate in Dubai off Plan property is a highly successful option. We offer the most comprehensive and latest information about project developments and our off plan specialists give free property consultation services.
                                    </p>
                                    <p class="mt-20">
                                        <button class="btn btn-lg btn-primary" data-toggle="modal" data-target="#RegisterYourIntestForm">
                                            Register your Interest
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>    

        <section class="ProjectListings--container is-gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="Section__title text-center">Latest Off Plan Projects</h3>
                        <div class="ProjectListings">
                            <?php foreach( range(1,9) as $index ) { ?>
                                <div class="ProjectListing col-md-4">
                                    <div class="ProjectListing__image">
                                        <a href="#">
                                            <img src="<?=get_bloginfo('stylesheet_directory')?>/images/project.jpeg" 
                                                alt="Project Title" 
                                                title="Project Title" 
                                                class="img-responsive" />
                                        </a>
                                        <div class="ProjectListing__developer">
                                            <a href="">
                                                <img src="<?=get_bloginfo('stylesheet_directory')?>/images/developer.jpeg" 
                                                    alt="Developer name" 
                                                    title="Developer name" 
                                                    width="68" height="68"
                                                    class="img-bordered img-responsive" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ProjectListing__description">
                                        <h4 class="text-truncate">
                                            <a href="#">
                                               Creek Heights - Where life, luxury and leisure are one
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center">
                            <a href="#" class="btn btn-default">All Projects</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="CommunityListings--container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center">Explore Communities</h2>
                        <p class="lead text-center">
                            
                        </p>
                    </div>
                    <div class="col-md-12">
                        <div class="CommunityListings">
                            <div class="Row">
                                <div class="CommunityListing Column-6 full-height downtown-dubai-community">
                                    <a href="#"></a>
                                    <div class="CommunityListing__content">
                                        <p>Downtown Dubai</p>
                                    </div>
                                </div>
                                <div class="Flex-1">
                                    <div class="Row">
                                        <div class="CommunityListing Column-6 al-barsha-community">
                                            <a href="#"></a>
                                            <div class="CommunityListing__content">
                                                <p>Al Barsha</p>
                                            </div>
                                        </div>
                                        <div class="CommunityListing Column-6 dubai-marina-community">
                                            <a href="#"></a>
                                            <div class="CommunityListing__content">
                                                <p>Dubai Marina</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Row">
                                        <div class="CommunityListing Column-6 jumeirah-lakes-towers-community">
                                            <a href="#"></a>
                                            <div class="CommunityListing__content">
                                                <p>Jumeirah Lakes Towers</p>
                                            </div>
                                        </div>
                                        <div class="CommunityListing Column-6 sheikh-zayed-road-community">
                                            <a href="#"></a>
                                            <div class="CommunityListing__content">
                                                <p>Sheikh Zayed Road</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Row">
                                <div class="CommunityListing Column-6 business-bay-community">
                                    <a href="#"></a>
                                    <div class="CommunityListing__content">
                                        <p>Business Bay</p>
                                    </div>
                                </div>
                                <div class="CommunityListing Column-6 palm-jumeirah-community">
                                    <a href="#"></a>
                                    <div class="CommunityListing__content">
                                        <p>Palm Jumeirah</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>                    