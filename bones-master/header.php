<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

<style>
/* http://meyerweb.com/eric/tools/css/reset/
v2.0 | 20110126
License: none (public domain)
*/
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}

/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
  display: block;
}

body {
  line-height: 1;
}

ol, ul {
  list-style: none;
}

blockquote, q {
  quotes: none;
}

blockquote:before, blockquote:after,
q:before, q:after {
  content: '';
  content: none;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

* {
  box-sizing: border-box;
}

html {
  font-family: 'Lato', 'Myriad Set Pro', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
  font-size: 16px;
  font-weight: 400;
  line-height: 1.5em;
}

body {
  background-color: #222;
  color: #fff;
}

a[href],
a:visited {
  color: #aaa;
  text-decoration: none;
}

button {
  border: solid 1px #aaa;
  border-radius: 3px;
  height: 60px;
  padding: 12px;
  line-height: 1;
  vertical-align: baseline;
  background: none transparent;
  color: #aaa;
}

.icon {
  font-size: 1rem;
}

.transition, #menu-global, #touch-blocker {
  -moz-transition: all 300ms ease-out;
  -o-transition: all 300ms ease-out;
  -webkit-transition: all 300ms ease-out;
  transition: all 300ms ease-out;
}

.header {
  position: relative;
}

.header .h1 {
  text-align: center;
  line-height: 1;
  font-size: 1.5rem;
  height: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.header #nav-trigger-global {
  font-size: 1.4rem;
  position: absolute;
  top: 0;
  left: 0;
  border: none;
}

.header #nav-trigger-global i {
  font-size: 2rem;
}

#menu-global {
  position: fixed;
  background-color: #222;
  height: 100%;
  top: 0;
  left: -1000%;
  width: 80%;
  z-index: 101;
}

#menu-global.active {
  left: 0;
}

#menu-global li {
  font-size: 1.2rem;
  border-bottom: solid 1px #555555;
  display: block;
  width: 100%;
}

#menu-global li.banner {
  border: none;
}

#menu-global li.sns {
  border: none;
  width: auto;
  display: inline-block;
}

#menu-global li a {
  display: block;
  padding: 12px;
}

#touch-blocker {
  display: none;
  position: fixed;
  width: 100%;
  top: 0;
  left: 0;
  background-color: rgba(0, 0, 0, 0.7);
  z-index: 100;
}

.post {
  background-color: #222;
  border-bottom: solid 1px #555555;
  padding: 10px;
}

.post .entry-title {
  font-size: 1.4rem;
}

.post .entry-meta {
  font-size: .7rem;
}

.post .entry-content p {
  padding: 10px 0 0;
  font-weight: 100;
}

.post .twitter-share {
  display: none;
}

.post .article-footer {
  display: none;
}

.sidebar {
  display: none;
}

footer {
  background-color: #222;
}

.footer-links {
  padding: 20px 0;
}

.footer-links .footer-nav {
  display: flex;
  justify-content: space-around;
}

.footer-links .footer-nav li a {
  font-size: 1.6rem;
  padding: 20px;
}

.copyright {
  padding: 20px;
  background-color: #fff;
  color: #222;
  text-align: center;
}

/*********************
ICONS
**********************/
.fa.fa-twitter, .fa.fa-twitter-square {
  color: #1da1f2;
}

.fa.fa-instagram {
  color: #5851db;
}

.fa.fa-facebook, .fa.fa-facebook-f, .fa.fa-facebook-official, .fa.fa-facebook-square {
  color: #3b5998;
}

.fa.fa-youtube, .fa.fa-youtube-play, .fa.fa-youtube-square {
  color: #cd201f;
}

/*********************
LARGER MOBILE DEVICES
This is for devices like the Galaxy Note or something that's
larger than an iPhone but smaller than a tablet. Let's call them
tweeners.
*********************/
@media only screen and (min-width: 481px) {
  #menu-global {
    position: static;
    width: 100%;
    display: flex;
    justify-content: center;
  }
  #menu-global li {
    padding: 20px;
    border-bottom: none;
    text-align: center;
  }
  #menu-global li.current-menu-item:after {
    display: block;
    content: "";
    border-top: solid 1px #555555;
  }
  #menu-global li.banner, #menu-global li.sns {
    display: none;
  }
  #nav-trigger-global {
    display: none;
  }
  main {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
  }
  main #cover {
    width: 100%;
  }
  main .post {
    width: 49%;
  }
}

/*********************
TABLET & SMALLER LAPTOPS
This is the average viewing window. So Desktops, Laptops, and
in general anyone not viewing on a mobile device. Here's where
you can add resource intensive styles.
*********************/
@media only screen and (min-width: 768px) {
  #inner-content {
    display: flex;
  }
  #inner-content .sidebar {
    display: block;
    margin-left: 10px;
    width: 25rem;
  }
  #inner-content .sidebar .widget {
    margin-top: 10px;
    padding: 10px 0;
    border-top: solid 1px #555555;
  }
  #inner-content .sidebar .widget:first-child {
    margin-top: 0;
    padding-top: 0;
    border: none;
  }
  .footer-links .footer-nav {
    display: flex;
    justify-content: center;
  }
}

/*********************
DESKTOP
This is the average viewing window. So Desktops, Laptops, and
in general anyone not viewing on a mobile device. Here's where
you can add resource intensive styles.
*********************/
/*********************
LARGE VIEWING SIZE
This is for the larger monitors and possibly full screen viewers.
*********************/
/*********************
RETINA (2x RESOLUTION DEVICES)
This applies to the retina iPhone (4s) and iPad (2,3) along with
other displays with a 2x resolution. You can also create a media
query for retina AND a certain size if you want. Go Nuts.
*********************/

</style>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' type='text/css' media='all' />

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="wrap cf">

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>

					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>

<button class="nav-trigger" id="nav-trigger-global"><i class="fa fa-bars icon" aria-hidden="true"></i></button>
					<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
    					         'theme_location' => 'main-nav',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
    					         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>

					</nav>

				</div>
<div id="touch-blocker"></div>
			</header>