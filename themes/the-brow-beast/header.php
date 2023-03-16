<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Brow_Beast
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Italiana&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'the-brow-beast' ); ?></a>

	<header id="masthead" class="site-header">
	<a href="<?php echo get_site_url(); ?>"><svg class="site-header__logo" version="1.0" xmlns="http://www.w3.org/2000/svg"
 width="2048.000000pt" height="2732.000000pt" viewBox="0 0 2048.000000 2732.000000"
 preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,2732.000000) scale(0.100000,-0.100000)"
fill="#000000" stroke="none">
<path d="M13195 20700 c-290 -19 -538 -50 -830 -105 -262 -50 -1029 -243
-1550 -390 -66 -18 -208 -58 -315 -89 -560 -158 -1287 -341 -1585 -401 -674
-134 -1389 -161 -1985 -74 -706 102 -1199 321 -1702 756 -59 51 -109 89 -111
85 -2 -4 -10 -29 -17 -56 l-14 -50 60 -54 c574 -525 1471 -841 2552 -898 l132
-7 0 -1356 c0 -746 3 -3228 6 -5516 6 -3852 5 -4167 -10 -4255 -18 -105 -46
-187 -78 -234 -65 -94 -154 -170 -253 -217 l-60 -29 1195 0 c657 0 1285 5
1395 10 306 14 522 50 742 121 456 149 796 392 1020 732 194 294 296 705 264
1058 -35 384 -145 662 -368 931 -125 151 -291 284 -504 404 -232 130 -507 218
-814 259 -213 28 -206 21 -66 70 228 80 374 162 549 309 149 126 275 291 358
471 l49 105 310 0 c609 0 914 42 1250 172 534 207 900 565 1063 1038 181 528
115 1088 -182 1525 -92 137 -283 322 -435 424 -319 212 -603 309 -1106 377
l-50 7 95 32 c182 63 324 134 449 223 419 300 630 731 608 1247 -12 281 -97
561 -230 760 -241 360 -672 612 -1192 695 -228 37 -341 40 -1420 40 l-1060 0
64 -30 c77 -37 145 -89 205 -160 73 -85 106 -172 126 -334 6 -52 10 -776 10
-2024 l0 -1944 -32 7 c-18 4 -354 9 -746 12 l-712 5 2 2531 3 2532 65 2 c387
14 747 55 1108 128 285 58 1005 235 1537 379 110 30 304 82 430 116 356 96
1065 273 1315 328 560 125 973 170 1455 159 603 -14 935 -82 1297 -263 275
-138 524 -349 693 -587 l68 -95 54 26 c29 14 53 31 53 37 0 6 -50 63 -111 128
-520 550 -1141 821 -2094 913 -187 18 -759 26 -950 14z m-1649 -1994 c192 -26
292 -53 447 -122 214 -96 406 -255 534 -444 278 -410 310 -1172 68 -1638 -168
-323 -485 -549 -885 -631 -172 -35 -346 -42 -940 -39 l-565 3 -2 1443 -2 1442
618 0 c482 0 641 -3 727 -14z m479 -3001 c565 -66 991 -344 1214 -792 132
-264 188 -554 178 -917 -8 -264 -41 -445 -119 -651 -205 -541 -696 -889 -1333
-944 -137 -12 -675 -15 -675 -3 0 4 9 50 20 102 64 308 13 693 -130 981 -166
335 -480 587 -935 750 l-40 15 -3 634 c-2 349 0 681 3 738 l7 102 842 0 c688
0 865 -3 971 -15z m-2315 -1477 c188 -40 290 -73 411 -133 479 -242 719 -681
719 -1317 0 -440 -123 -782 -372 -1029 -167 -167 -392 -287 -641 -343 -176
-40 -290 -46 -929 -46 l-618 0 0 1443 c0 794 2 1446 4 1448 2 2 307 1 678 -2
555 -5 686 -9 748 -21z m385 -2988 c289 -33 545 -123 770 -271 102 -67 296
-260 364 -364 146 -220 230 -468 266 -789 10 -91 8 -381 -5 -481 -35 -294
-125 -555 -260 -755 -244 -363 -665 -599 -1160 -649 -63 -7 -428 -11 -946 -11
l-844 0 0 1665 0 1665 863 0 c524 0 897 -4 952 -10z"/>
</g>
</svg>
</a>

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		<img class="search-icon" src="<?php echo get_template_directory_uri(); ?>/img/search.svg" alt="Search Icon"/>
	</header><!-- #masthead -->
