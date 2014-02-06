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
			<h1><?php _e('[:en]Welcome![:fr]Bienvenue chez Hank!'); ?></h1> 
			<h2><?php _e('[:en]It is with a great pleasure that we will receive you Monday to Saturday, 11am to 21pm <br/>from 28 January 2014![:fr]C\'est avec un immense plaisir que nous recevrons du lundi au samedi de 11h à 21h <br/> à partir du 28 janvier 2014!'); ?></h2>
			<h3><?php _e('[:en]Come and try our Hankburgers and give us your feedback![:fr]Venez tester nos Hankburgers et donnez-nous votre avis!'); ?></h3>
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
				<br />
				<br />
				<br />
				<br />
				<br />
				<h1><?php _e('[:en]Coming soon, just waiting to be discovered on site![:fr]A venir, en attendant venez la découvrir sur place!'); ?></h1>
				
				<!--
				<div class="our-burger">
					<h2><?php _e('[:en]Our Burgers [:fr]Nos Burgers'); ?></h2>
					<p class="menu_pdt">
						<span class="menu_title">la Catcheuse</span>&nbsp;&nbsp;&nbsp;(steack seitan, cheese vegan, tomate, oignons, cornichons)&nbsp;&nbsp;&nbsp;<span class="menu_title">40,80</span><br>
						<span class="menu_title">le Bucheron</span>&nbsp;&nbsp;&nbsp;(steack seitan, cheese vegan, tomate, oignons, cornichons)&nbsp;&nbsp;&nbsp;<span class="menu_title">40,80</span><br>
						<span class="menu_title">l'’Aristocrate</span>&nbsp;&nbsp;&nbsp;(steack seitan, cheese vegan, tomate, oignons, cornichons&nbsp;&nbsp;&nbsp;<span class="menu_title">40,80</span><br>
						<span class="menu_title">Tata Monique</span>&nbsp;&nbsp;&nbsp;(steack seitan, cheese vegan, tomate, oignons, cornichons)&nbsp;&nbsp;&nbsp;<span class="menu_title">40,80</span><br>
						<br>
						<span class="menu_title">Ou la Salade</span>&nbsp;&nbsp;&nbsp;(steack seitan, cheese vegan, tomate, oignons, cornichons)&nbsp;&nbsp;&nbsp;<span class="menu_title">40,80</span>
					</p>
				</div>
				<div class="sides">
					<h2><?php _e('[:en]Sides [:fr]Les Accompagnements'); ?></h2>
					<p class="menu_pdt">
						<span class="menu_title">Frites qui ne tachent pas</span>&nbsp;&nbsp;&nbsp;(pommes de terres bio, cuites au four)&nbsp;&nbsp;&nbsp;<span class="menu_title">40,80</span><br>
						<span class="menu_title">Salade  colesaw</span>&nbsp;&nbsp;&nbsp;(choux, carottes sauce basalmique)&nbsp;&nbsp;&nbsp;<span class="menu_title">40,80</span>
					</p>
				</div>
				<div class="drinks">
					<h2><?php _e('[:en]Drinks [:fr]Les Boissons'); ?></h2>
					<p class="menu_pdt">
						<span class="menu_title">thé&nbsp;30,30,&nbsp;café&nbsp;10,90, jus de fruits&nbsp;</span>(25cl)<span class="menu_title">&nbsp;30,10,&nbsp;eau&nbsp;</span>(33cl)<span class="menu_title">&nbsp;30,20<br>
							&nbsp;vin bio&nbsp;</span>(20cl)<span class="menu_title">&nbsp;30,90,&nbsp;bio cola</span>&nbsp;(33cl)<span class="menu_title">&nbsp;20,90,&nbsp;bière bio&nbsp;</span>(33cl)<span class="menu_title">&nbsp;30,90</span>
						</p>
					</div>
					<div class="dessert">
						<h2><?php _e('[:en]Les Desserts [:fr]Les Desserts'); ?></h2>
						<p class="menu_pdt"><span class="menu_title">tarte aux pommes&nbsp;&nbsp;4,80&nbsp;&nbsp;&nbsp;brownie&nbsp;&nbsp;3,80&nbsp;&nbsp;&nbsp;cheese-cake&nbsp;&nbsp;40,80</span></p>
					</div>
					<div class="menu-complete">
						<h2><?php _e('[:en]Menus [:fr]Les Formules'); ?></h2>
						<p class="menu_pdt">
							<span class="menu_title">Menu rapide</span>&nbsp;&nbsp;&nbsp;(burger + accompagnement + boisson)&nbsp;&nbsp;<span class="menu_title">90.90</span><br>
							<span class="menu_title">Menu gourmant</span>&nbsp;&nbsp;&nbsp;(burger + accompagnement + boisson + dessert)&nbsp;&nbsp;<span class="menu_title">140,90</span>
						</p>
					</div>
					<p class="menu_notice">Prix € TTC</p>
					-->
				</div>

			</div>
		</div>

		<div id="who">
			<h1><?php _e('[:en]Who\'s Hank [:fr]Qui est Hank ?'); ?></h1>
			<div id="who-1">
				Hank est un restaurant dans le Marais à Paris proposant de savoureux hamburgers bio sans aucune matière animale.<br/>
				Un hankburger c'est :
				<br/>
				★ du bio : des produits et des producteurs soigneusement sélectionnés 100% bio,<br/>
				★ du sain : caloriquement 50% plus léger qu’un hamburger classique et sans cholestérol et pourtant très copieux,<br/>
				★ du frais : nos steaks et sauces sont faits maison et nos burgers confectionnés minute sous vos yeux,<br/>
				★ et écologique : manger un repas chez Hank, c'est diviser son empreinte écologique par 10* lors d’un seul repas !<br/>
				Tout cela fait par nos soins et sur place ou par des artisans des environs avec la volonté de proposer les meilleurs aliments, sélectionnés avec soin.<br/>
			</div>
			<div id="who-2">
				Eco-responsabilité 
				<br/>
				Chez Hank, tous les produits que nos utilisons (alimentaire et autre) sont écologique, non testé sur les animaux et sans matière d'origine animal.<br/>
				Notre mobilier a été conçu par un artisan Français et composé de 100% de matériaux de récupération (bois palette).<br/>
				Nos emballages sont issues de matériaux recyclé et 100% biodégradable.<br/>
				Nos déchets sont triés et nous sommes prêt pour la mise en place du compost parisien.<br/>
				Tous les logiciels que nous utilisons (site Internet, caisses, domotique...) sont des logiciels libre de meme que la musique diffusée au restaurant.	
				<br/>
				<br/>
				<br/>
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

