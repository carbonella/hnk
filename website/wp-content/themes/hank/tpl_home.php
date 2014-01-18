<?php
/*
Template Name: tpl_home
*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1">
	<title>HANK | Home</title>

	<?php get_header(); ?>	
	<?php $slang = strtoupper(qtrans_getLanguage()); ?>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/style.css" />
</head>
<body>
	<div id="main">

		<div id="navbar">
			<ul>
				<li class="navbar_text"><div id="navbar_text_align"><a id='homeBtn' href="#home">News </a> <a id='menuBtn' href="#menu">A la carte </a> <a <a id='whoBtn' href="#who">Who's Hank? </a> <a id='infoBtn' href="#info">Info </a> <a id='contactBtn' href="#contact">Contact </a></div></li>
				<li class="language"><a href="/fr<?=$_SERVER["REQUEST_URI"]?>"><img alt="fr" src="<?php bloginfo('template_directory'); ?>/images/webdesign_02.png"></a></li>
				<li class="language"><a href="<?=$_SERVER["REQUEST_URI"]?>"><img alt="en" src="<?php bloginfo('template_directory'); ?>/images/webdesign_03.png"></a></li>
			</ul>
		</div>

		<div id="header">
			<img alt="home" src="<?php bloginfo('template_directory'); ?>/images/webdesign_05.jpg">
		</div>		
		<div id="home">
			<h1>Le Touriste revient de Mexico !</h1>
			<h2>Nouvelle recette  : Avocat, steak de seitan, piment,</h2>
			<h3>à partir du 12 sept.</h3>
			Ego vero sic intellego, Patres conscripti, nos hoc tempore in provinciis decernendis Nam quis hoc non sentit omnia alia esse nobis vacua ab omni pericususpicione bell
			Tu autem, Fanni, quod mihi tantum tribui dicis quantum ego nec adgnosco nec ideris
		</div>

		<div id="menu">
			<img alt="menu" src="<?php bloginfo('template_directory'); ?>/images/webdesign_19.jpg" />

			<div class="burgers">
				<div>
					<img alt="burger" src="<?php bloginfo('template_directory'); ?>/images/burgers_05.png" />
				</div>
				<div>
					<img alt="burger" src="<?php bloginfo('template_directory'); ?>/images/burgers_07.png" />
				</div>
				<div>
					<img alt="burger" src="<?php bloginfo('template_directory'); ?>/images/burgers_08.png" />
				</div>
				<div>
					<img alt="burger" src="<?php bloginfo('template_directory'); ?>/images/burgers_09.png" />
				</div>
			</div>

			<div id="menu_carte">
				<h1><?php _e('[:en]A la carte [:fr]A la carte'); ?></h1>
				<div class="our-burger">
					<h2><?php _e('[:en]Our Burgers [:fr]Nos Burgers'); ?></h2>
					<p class="menu_pdt">
						<span class="menu_title">la Catcheuse</span>&nbsp;&nbsp;&nbsp;(steack seitan, cheese vegan, tomate, oignons, cornichons)&nbsp;&nbsp;&nbsp;<span class="menu_title">4,80</span><br>
						<span class="menu_title">le Bucheron</span>&nbsp;&nbsp;&nbsp;(steack seitan, cheese vegan, tomate, oignons, cornichons)&nbsp;&nbsp;&nbsp;<span class="menu_title">4,80</span><br>
						<span class="menu_title">l'’Aristocrate</span>&nbsp;&nbsp;&nbsp;(steack seitan, cheese vegan, tomate, oignons, cornichons&nbsp;&nbsp;&nbsp;<span class="menu_title">4,80</span><br>
						<span class="menu_title">Tata Monique</span>&nbsp;&nbsp;&nbsp;(steack seitan, cheese vegan, tomate, oignons, cornichons)&nbsp;&nbsp;&nbsp;<span class="menu_title">4,80</span><br>
						<br>
						<span class="menu_title">Ou la Salade</span>&nbsp;&nbsp;&nbsp;(steack seitan, cheese vegan, tomate, oignons, cornichons)&nbsp;&nbsp;&nbsp;<span class="menu_title">4,80</span>
					</p>
				</div>
				<div class="sides">
					<h2><?php _e('[:en]Sides [:fr]Les Accompagnements'); ?></h2>
					<p class="menu_pdt">
						<span class="menu_title">Frites qui ne tachent pas</span>&nbsp;&nbsp;&nbsp;(pommes de terres bio, cuites au four)&nbsp;&nbsp;&nbsp;<span class="menu_title">4,80</span><br>
						<span class="menu_title">Salade  colesaw</span>&nbsp;&nbsp;&nbsp;(choux, carottes sauce basalmique)&nbsp;&nbsp;&nbsp;<span class="menu_title">4,80</span>
					</p>
				</div>
				<div class="drinks">
					<h2><?php _e('[:en]Drinks [:fr]Les Boissons'); ?></h2>
					<p class="menu_pdt">
						<span class="menu_title">thé&nbsp;3,30,&nbsp;café&nbsp;1,90, jus de fruits&nbsp;</span>(25cl)<span class="menu_title">&nbsp;3,10,&nbsp;eau&nbsp;</span>(33cl)<span class="menu_title">&nbsp;3,20<br>
							&nbsp;vin bio&nbsp;</span>(20cl)<span class="menu_title">&nbsp;3,90,&nbsp;bio cola</span>&nbsp;(33cl)<span class="menu_title">&nbsp;2,90,&nbsp;bière bio&nbsp;</span>(33cl)<span class="menu_title">&nbsp;3,90</span>
						</p>
					</div>
					<div class="dessert">
						<h2><?php _e('[:en]Les Desserts [:fr]Les Desserts'); ?></h2>
						<p class="menu_pdt"><span class="menu_title">tarte aux pommes&nbsp;&nbsp;4,80&nbsp;&nbsp;&nbsp;brownie&nbsp;&nbsp;3,80&nbsp;&nbsp;&nbsp;cheese-cake&nbsp;&nbsp;4,80</span></p>
					</div>
					<div class="menu-complete">
						<h2><?php _e('[:en]Menus [:fr]Les Formules'); ?></h2>
						<p class="menu_pdt">
							<span class="menu_title">Menu rapide</span>&nbsp;&nbsp;&nbsp;(burger + accompagnement + boisson)&nbsp;&nbsp;<span class="menu_title">9.90</span><br>
							<span class="menu_title">Menu gourmant</span>&nbsp;&nbsp;&nbsp;(burger + accompagnement + boisson + dessert)&nbsp;&nbsp;<span class="menu_title">14,90</span>
						</p>
					</div>
					<p class="menu_notice">Prix € TTC</p>
				</div>
			</div>
		</div>

		<div id="who">
			<h1><?php _e('[:en]Who\'s Hank [:fr]Qui est Hank ?'); ?></h1>
			<div id="who-1">
				llud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen, Isauri quidem alimentorum copiis adfluebant, ipsi vero solia tarum rerum cibos iam consumendo inediae propine quantis aerumnas exitialis horrebant.		
			</div>
			<div id="who-2">
				llud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen, Isauri quidem alimentorum copiis adfluebant, ipsi vero solia tarum rerum cibos iam consumendo inediae propine quantis aerumnas exitialis horrebant.
				<br><br>
			</div>
		</div>

		<div id="transition"></div>

		<div id="info">
			<h1>Informations</h1>
			<p class="info_title_1">
				Hank, 55 rue des Archives 75002 Paris France<br>
				Open from 11h to 22h - Monday to Saturday<br>
			</p>
			<p class="info_title_4">T: +33 9 72 44 03 99 - <a href="mailto:contact@hankrestaurant.com">contact@hankrestaurant.com</a></p>
			<div class="group-info">
				<div id="info-1">
					<ul>
						<li class="info_metro"><a href="http://www.ratp.fr/informer/pdf/orienter/f_plan.php?nompdf=m11&loc=reseaux"><span class="info_title_2">Metro</span><br><span class="info_title_3">Rambuteau / Line 11</span></a></li>
						<li class="info_bus"><a href="http://www.ratp.fr/informer/pdf/orienter/f_plan.php?nompdf=75&loc=bus_paris/"><span class="info_title_2">Bus</span><br><span class="info_title_3">75 Stop: Archives<br></span></a></li>
						<li class="info_velib"><a href="http://www.velib.paris.fr/Plan-stations"><span class="info_title_2">Velib</span><br><span class="info_title_3">67 rue des Archives<br></span></a></li>
						<li class="info_autolib"><a href="https://www.autolib.eu/stations/"><span class="info_title_2">Autolib</span><br><span class="info_title_3">27 rue Pastourelle<br></span></a></li>
					</ul>
				</div>
				<div id="info-2">
					<?php echo do_shortcode( '[google-map-v3 shortcodeid="sda4357" width="95%" height="275" zoom="15" maptype="roadmap" mapalign="center" directionhint="false" language="fr" poweredby="false" maptypecontrol="true" pancontrol="true" zoomcontrol="true" scalecontrol="true" streetviewcontrol="true" scrollwheelcontrol="false" draggable="true" tiltfourtyfive="true" enablegeolocationmarker="false" addmarkermashup="false" addmarkermashupbubble="true" addmarkerlist="55 rue des Archives 75003 Paris France{}1-default.png{}HANK" bubbleautopan="true" distanceunits="km" showbike="false" showtraffic="false" showpanoramio="false"]' ); ?>
				</div>
			</div>
		</div>

		

		<div id="contact">
			<h1>Contact</h1>
			<div id="contact_form">
				<?php echo do_shortcode( '[easy_contact_forms fid=2]' ); ?>
			</div>
		</div>
		<div id="footer">	
			<ul>
				<li>
					<ul>
						<li><a href="https://twitter.com/Hankrestaurant"><img alt="twitter" height="56" src="<?php bloginfo('template_directory'); ?>/images/webdesign_51.png"></a></li>
						<li><a href="https://www.facebook.com/hankrestaurant"><img alt="facebook" height="33" src="<?php bloginfo('template_directory'); ?>/images/webdesign_53.png"></a></li>
						<!-- <li><a href="https://twitter.com/Hankrestaurant"><img alt="tumblr" height="30" src="<?php bloginfo('template_directory'); ?>/images/webdesign_54.png"></a></li> -->
					</ul>
				</li>
				<li class="footer_info"><div id="footer_text_align">© Hank <?php echo date('Y');?><br><br>Design by<br>Studio Tricot</div>
				</li>
			</ul>								
		</div>
	</div>
	
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.10.2.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/scrolld.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/respond.min.js"></script>
	<script type="text/javascript">
	function responsiveMenu(){
		ww = $(window).width();
		$('#navbar ul').click(function(){
			if(ww <= 767) {
				$(this).toggleClass('showMenu');
			}
		})
	};

	responsiveMenu();
	$(window).resize(function(){
		responsiveMenu();
	});
	</script>
	<script type="text/javascript"> $("[id*='Btn']").stop(true).on('click',function(e){e.preventDefault();$(this).scrolld();}); </script>
<?php get_footer(); ?>
</body>
</html>

