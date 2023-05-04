<<<<<<< HEAD
<!doctype html>


<html lang="fr">


<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <script src="script.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
		
		<!-- LOADING FONTS AND ICONS -->
		<link href="http://fonts.googleapis.com/css?family=Poppins:700|Oswald:300" rel="stylesheet" property="stylesheet" type="text/css" media="all">
		
		<link rel="stylesheet" type="text/css" href="assets/css/pe-icon-7-stroke.css">
		<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
		
		<!-- REVOLUTION STYLE SHEETS -->
		<link rel="stylesheet" type="text/css" href="assets/css/settings.css">
		
		<!-- FONT AND STYLE FOR BASIC DOCUMENTS, NO NEED FOR FURTHER USAGE IN YOUR PROJECTS-->
		<link href="http://fonts.googleapis.com/css?family=Roboto%3A700%2C300" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
		<link rel="stylesheet" type="text/css" href="assets/css/noneed.css">
		
		<!-- REVOLUTION JS FILES -->
		<script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
		
		<!-- PARTICLES ADD-ON FILES -->
		<link rel='stylesheet' href='assets/js/revolution.addon.particles.css?ver=1.0.3' type='text/css' media='all' />
		<script type='text/javascript' src='assets/js/revolution.addon.particles.min.js?ver=1.0.3'></script>

		<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
		<script type="text/javascript" src="assets/js/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="assets/js/revolution.extension.carousel.min.js"></script>
		<script type="text/javascript" src="assets/js/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="assets/js/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="assets/js/revolution.extension.migration.min.js"></script>
		<script type="text/javascript" src="assets/js/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="assets/js/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="assets/js/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="assets/js/revolution.extension.video.min.js"></script>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#1D1D1F',
            card: '#1C242A',
            blanc: '#F1F5F2',
            rose: '#8c7284',
            grenat: '#70163c',
          }
        }
      }
    }
  </script>
</head>


<body class="bg-secondary">

<!-- This is an example component -->
<div class="w-full">
    
    <nav class="bg-primary">
    <div class="container mx-auto flex flex-wrap items-center justify-between w-fit md:container flex justify-center w-fit min-w-full">
      <a href="#"><img class="md:hidden w-4/12 ml-6" src="assets/images/logowithoutback.png"></a>
        <button data-collapse-toggle="mobile-menu" type="button" class="md:hidden mr-3 text-gray-400 hover:text-blanc focus:outline-none focus:ring-2 focus:ring-blue-300 rounded-lg inline-flex items-center justify-center" aria-controls="mobile-menu-2" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="hidden md:block w-full" id="mobile-menu">
        <ul class="flex-col items-center justify-around md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-sm md:font-medium">
            <li class="w-full md:w-auto">
            <a href="#" class="flex items-center text-blanc hover:text-primary hover:bg-blanc duration-300 border-b border-gray-100 md:hover:bg-blanc md:border-0 pl-3 pr-4 py-2 md:hover:text-primary md:rounded-lg p-2 mt-1 font-medium md:w-auto" aria-current="page">Articles</a>
            </li>
            <li class="w-full md:w-auto">
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center text-blanc font-medium w-full md:w-auto hover:text-primary hover:bg-blanc duration-300 border-b border-gray-100 md:hover:bg-blanc md:border-0 pl-3 pr-4 py-2 md:hover:text-primary md:rounded-lg p-2 mt-1 md:font-medium md:w-auto">Présentations <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar" class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44">
                    <ul class="py-1" aria-labelledby="dropdownLargeButton">
                    <li>
                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Earnings</a>
                    </li>
                    </ul>
                    <div class="py-1">
                    <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Sign out</a>
                    </div>
                </div>
            </li>
            <li class="hidden md:block w-2/12">
           <a href="#"><img class="w-4/6" src="assets/images/logowithoutback.png"></a>
            </li>
            <li class="w-full md:w-auto">
            <a href="#" class="font-medium text-blanc hover:text-primary hover:bg-blanc duration-300 border-b border-gray-100 md:hover:bg-blanc md:border-0 block pl-3 pr-4 py-2 md:hover:text-primary md:rounded-lg p-2 mt-1">Réalisations</a>
            </li>
            <li class="w-full md:w-auto">
            <a href="#" class="font-medium text-blanc hover:text-primary hover:bg-blanc duration-300 border-b border-gray-100 md:hover:bg-blanc md:border-0 block pl-3 pr-4 py-2 md:hover:text-primary md:rounded-lg p-2 mt-1"">Contact</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
</div>



<section class="example">
			<article class="content">

		<div id="rev_slider_14_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="gravitydesign1" data-source="gallery" style="background:#1d2931;padding:0px;">
		<!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
			<div id="rev_slider_14_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
		<ul>	<!-- SLIDE  -->
			<li data-index="rs-32" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
				<!-- MAIN IMAGE -->
				<img src="assets/images/transparent.png" data-bgcolor='#1d2931'' style='background:#1d2931' alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
				<!-- LAYERS -->

				<!-- LAYER NR. 1 -->
				<div class="tp-caption   tp-resizeme" 
					 id="slide-32-layer-1" 
					 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
					 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" 
								data-width="full-proportional"
					data-height="full-proportional"
					data-whitespace="nowrap"
		 
					data-type="image" 
					data-basealign="slide" 
					data-responsive_offset="on" 

					data-frames='[{"delay":500,"speed":2000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
					data-textAlign="['inherit','inherit','inherit','inherit']"
					data-paddingtop="[0,0,0,0]"
					data-paddingright="[0,0,0,0]"
					data-paddingbottom="[0,0,0,0]"
					data-paddingleft="[0,0,0,0]"

					style="z-index: 5;"><img class="grayscale" src="assets/images/vscode_bg.jpg" alt="" data-ww="['full-proportional','full-proportional','full-proportional','full-proportional']" data-hh="['full-proportional','full-proportional','full-proportional','full-proportional']" width="1920" height="1280" data-no-retina> </div>

				<!-- LAYER NR. 2 -->
				<div class="tp-caption   tp-resizeme rs-parallaxlevel-1" 
					 id="slide-32-layer-8" 
					 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
					 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['597','517','597','497']" 
								data-fontsize="['120','120','120','80']"
					data-lineheight="['90','90','90','60']"
					data-width="none"
					data-height="none"
					data-whitespace="nowrap"
		 
					data-type="text" 
					data-responsive_offset="on" 

					data-frames='[{"delay":1300,"speed":2000,"frame":"0","from":"sX:2;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
					data-textAlign="['center','center','center','center']"
					data-paddingtop="[0,0,0,0]"
					data-paddingright="[0,0,0,0]"
					data-paddingbottom="[0,0,0,0]"
					data-paddingleft="[0,0,0,0]"

					style="z-index: 6; white-space: nowrap; font-size: 120px; line-height: 90px; font-weight: 700; color: rgba(255,0,255,1);font-family:Poppins;letter-spacing:-10px;">
		<div class="rs-looped rs-wave"  data-speed="3" data-angle="0" data-radius="2px" data-origin="50% 50%">WFB<br/>Corp </div></div>

				<!-- LAYER NR. 3 -->
				<div class="tp-caption   tp-resizeme rs-parallaxlevel-1" 
					 id="slide-32-layer-7" 
					 data-x="['center','center','center','center']" data-hoffset="['-3','-3','-3','-3']" 
					 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['600','520','600','500']" 
								data-fontsize="['120','120','120','80']"
					data-lineheight="['90','90','90','60']"
					data-width="none"
					data-height="none"
					data-whitespace="nowrap"
		 
					data-type="text" 
					data-responsive_offset="on" 

					data-frames='[{"delay":1200,"speed":2000,"frame":"0","from":"sX:2;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
					data-textAlign="['center','center','center','center']"
					data-paddingtop="[0,0,0,0]"
					data-paddingright="[0,0,0,0]"
					data-paddingbottom="[0,0,0,0]"
					data-paddingleft="[0,0,0,0]"

					style="z-index: 7; white-space: nowrap; font-size: 120px; line-height: 90px; font-weight: 700; color: rgba(255,255,0,1);font-family:Poppins;letter-spacing:-10px;">
		<div class="rs-looped rs-wave"  data-speed="3" data-angle="0" data-radius="2px" data-origin="50% 50%">WFB<br/>Corp </div></div>

				<!-- LAYER NR. 4 -->
				<div class="tp-caption   tp-resizeme rs-parallaxlevel-1" 
					 id="slide-32-layer-5" 
					 data-x="['center','center','center','center']" data-hoffset="['3','3','3','3']" 
					 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['600','520','600','500']" 
								data-fontsize="['120','120','120','80']"
					data-lineheight="['90','90','90','60']"
					data-width="none"
					data-height="none"
					data-whitespace="nowrap"
		 
					data-type="text" 
					data-responsive_offset="on" 

					data-frames='[{"delay":1100,"speed":2000,"frame":"0","from":"sX:2;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
					data-textAlign="['center','center','center','center']"
					data-paddingtop="[0,0,0,0]"
					data-paddingright="[0,0,0,0]"
					data-paddingbottom="[0,0,0,0]"
					data-paddingleft="[0,0,0,0]"

					style="z-index: 8; white-space: nowrap; font-size: 120px; line-height: 90px; font-weight: 700; color: rgba(0,255,255,1);font-family:Poppins;letter-spacing:-10px;">
		<div class="rs-looped rs-wave"  data-speed="3" data-angle="0" data-radius="2px" data-origin="50% 50%">WFB<br/>Corp </div></div>

				<!-- LAYER NR. 5 -->
				<div class="tp-caption   tp-resizeme rs-parallaxlevel-1" 
					 id="slide-32-layer-3" 
					 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
					 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['600','520','600','500']" 
								data-fontsize="['120','120','120','80']"
					data-lineheight="['90','90','90','60']"
					data-width="none"
					data-height="none"
					data-whitespace="nowrap"
		 
					data-type="text" 
					data-responsive_offset="on" 

					data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:2;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
					data-textAlign="['center','center','center','center']"
					data-paddingtop="[0,0,0,0]"
					data-paddingright="[0,0,0,0]"
					data-paddingbottom="[0,0,0,0]"
					data-paddingleft="[0,0,0,0]"

					style="z-index: 9; white-space: nowrap; font-size: 120px; line-height: 90px; font-weight: 700; color: rgba(255,255,255,1);font-family:Poppins;letter-spacing:-10px;">WFB<br/>Corp </div>

				<!-- LAYER NR. 6 -->
				<div class="tp-caption   tp-resizeme rs-parallaxlevel-1" 
					 id="slide-32-layer-15" 
					 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
					 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['119','99','200','220']" 
								data-width="none"
					data-height="none"
					data-whitespace="nowrap"
		 
					data-type="image" 
					data-responsive_offset="on" 

					data-frames='[{"delay":850,"speed":2000,"frame":"0","from":"sX:1.1;sY:1.1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
					data-textAlign="['inherit','inherit','inherit','inherit']"
					data-paddingtop="[0,0,0,0]"
					data-paddingright="[0,0,0,0]"
					data-paddingbottom="[0,0,0,0]"
					data-paddingleft="[0,0,0,0]"

					style="z-index: 10;">
		<div class="rs-looped rs-wave"  data-speed="5" data-angle="0" data-radius="3px" data-origin="50% 50%"><img src="assets/images/galaxy_bg-2.png" alt="" data-ww="['509px','509px','509px','407px']" data-hh="['250px','250px','250px','200px']" width="407" height="200" data-no-retina> </div></div>

				<!-- LAYER NR. 7 -->
				<div class="tp-caption   tp-resizeme rs-parallaxlevel-2" 
					 id="slide-32-layer-2" 
					 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
					 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['299','260','380','350']" 
								data-width="none"
					data-height="none"
					data-whitespace="nowrap"
		 
					data-type="image" 
					data-responsive_offset="on" 

					data-frames='[{"delay":250,"speed":5000,"frame":"0","from":"y:100px;rZ:15deg;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
					data-textAlign="['inherit','inherit','inherit','inherit']"
					data-paddingtop="[0,0,0,0]"
					data-paddingright="[0,0,0,0]"
					data-paddingbottom="[0,0,0,0]"
					data-paddingleft="[0,0,0,0]"

					style="z-index: 11;">
		<div class="rs-looped rs-wave"  data-speed="10" data-angle="0" data-radius="5px" data-origin="50% 50%"><img src="assets/images/gravity_astronaut.png" alt="" data-ww="['820px','718px','615px','410px']" data-hh="['400px','350px','300px','200px']" width="1025" height="500" data-no-retina> </div></div>

				<!-- LAYER NR. 8 -->
				<a class="tp-caption   tp-resizeme" 
		 href="view/realisations.php" target="_blank"			 id="slide-32-layer-16" 
					 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
					 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['230','210','310','310']" 
								data-fontsize="['25','25','25','20']"
					data-lineheight="['25','25','25','20']"
					data-width="['none','none','none','320']"
					data-height="none"
					data-whitespace="['nowrap','nowrap','nowrap','normal']"
		 
					data-type="text" 
					data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-32-layer-17","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-32-layer-17","delay":""}]'
					data-responsive_offset="on" 

					data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"sX:2;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0px;","style":"c:rgba(255,255,255,1);"}]'
					data-textAlign="['inherit','inherit','inherit','center']"
					data-paddingtop="[0,0,0,0]"
					data-paddingright="[0,0,0,0]"
					data-paddingbottom="[0,0,0,0]"
					data-paddingleft="[0,0,0,0]"

					style="z-index: 12; white-space: nowrap; font-size: 25px; line-height: 25px; font-weight: 300; color: rgba(255,255,255,1);font-family:Oswald;letter-spacing:10px;cursor:pointer;text-decoration: none;">Imagination : donnez vie à votre site web </a>

				<!-- LAYER NR. 9 -->
				<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
					 id="slide-32-layer-17" 
					 data-x="['center','center','center','center']" data-hoffset="['-4','-4','-4','-4']" 
					 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['221','201','301','300']" 
								data-width="['390','390','390','180']"
					data-height="2"
					data-whitespace="nowrap"
		 
					data-type="shape" 
					data-responsive_offset="on" 

					data-frames='[{"delay":"bytrigger","speed":500,"frame":"0","from":"sX:0;opacity:1;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"bytrigger","speed":300,"frame":"999","to":"sX:0;opacity:1;","ease":"Power3.easeInOut"}]'
					data-textAlign="['inherit','inherit','inherit','inherit']"
					data-paddingtop="[0,0,0,0]"
					data-paddingright="[0,0,0,0]"
					data-paddingbottom="[0,0,0,0]"
					data-paddingleft="[0,0,0,0]"
					data-lasttriggerstate="reset"
					style="z-index: 13;background-color:rgba(255,255,255,1);"> </div>

				<!-- LAYER NR. 10 -->
				<div class="tp-caption   tp-resizeme rs-parallaxlevel-3" 
					 id="slide-32-layer-9" 
					 data-x="['center','center','center','center']" data-hoffset="['-531','-531','-348','-204']" 
					 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['350','350','421','431']" 
								data-width="none"
					data-height="none"
					data-whitespace="nowrap"
		 
					data-type="image" 
					data-responsive_offset="on" 

					data-frames='[{"delay":250,"speed":3000,"frame":"0","from":"y:150px;rZ:90deg;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
					data-textAlign="['inherit','inherit','inherit','inherit']"
					data-paddingtop="[0,0,0,0]"
					data-paddingright="[0,0,0,0]"
					data-paddingbottom="[0,0,0,0]"
					data-paddingleft="[0,0,0,0]"

					style="z-index: 14;">
		<div class="rs-looped rs-wave"  data-speed="5" data-angle="0" data-radius="3px" data-origin="50% 50%"><img src="assets/images/flake2.png" alt="" data-ww="['29px','29px','29px','29px']" data-hh="['21px','21px','21px','21px']" width="29" height="21" data-no-retina> </div></div>

				<!-- LAYER NR. 11 -->
				<div class="tp-caption   tp-resizeme rs-parallaxlevel-3" 
					 id="slide-32-layer-10" 
					 data-x="['center','center','center','center']" data-hoffset="['493','493','326','194']" 
					 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['399','399','408','438']" 
								data-width="none"
					data-height="none"
					data-whitespace="nowrap"
		 
					data-type="image" 
					data-responsive_offset="on" 

					data-frames='[{"delay":350,"speed":3000,"frame":"0","from":"y:150px;rZ:-90deg;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
					data-textAlign="['inherit','inherit','inherit','inherit']"
					data-paddingtop="[0,0,0,0]"
					data-paddingright="[0,0,0,0]"
					data-paddingbottom="[0,0,0,0]"
					data-paddingleft="[0,0,0,0]"

					style="z-index: 15;">
		<div class="rs-looped rs-wave"  data-speed="5" data-angle="0" data-radius="3px" data-origin="50% 50%"><img src="assets/images/flake5.png" alt="" data-ww="['28px','28px','28px','28px']" data-hh="['27px','27px','27px','27px']" width="28" height="27" data-no-retina> </div></div>

				<!-- LAYER NR. 12 -->
				<div class="tp-caption   tp-resizeme rs-parallaxlevel-5" 
					 id="slide-32-layer-11" 
					 data-x="['center','center','center','center']" data-hoffset="['350','350','245','141']" 
					 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['338','338','331','348']" 
								data-width="none"
					data-height="none"
					data-whitespace="nowrap"
		 
					data-type="image" 
					data-responsive_offset="on" 

					data-frames='[{"delay":450,"speed":3000,"frame":"0","from":"y:150px;rZ:45deg;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
					data-textAlign="['inherit','inherit','inherit','inherit']"
					data-paddingtop="[0,0,0,0]"
					data-paddingright="[0,0,0,0]"
					data-paddingbottom="[0,0,0,0]"
					data-paddingleft="[0,0,0,0]"

					style="z-index: 16;">
		<div class="rs-looped rs-wave"  data-speed="3" data-angle="0" data-radius="2px" data-origin="50% 50%"><img src="assets/images/flake4.png" alt="" data-ww="['26px','26px','26px','26px']" data-hh="['24px','24px','24px','24px']" width="26" height="24" data-no-retina> </div></div>

				<!-- LAYER NR. 13 -->
				<div class="tp-caption   tp-resizeme rs-parallaxlevel-5" 
					 id="slide-32-layer-12" 
					 data-x="['center','center','center','center']" data-hoffset="['-455','-455','-321','-214']" 
					 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['320','320','357','381']" 
								data-width="none"
					data-height="none"
					data-whitespace="nowrap"
		 
					data-type="image" 
					data-responsive_offset="on" 

					data-frames='[{"delay":550,"speed":3000,"frame":"0","from":"y:150px;rZ:-125deg;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
					data-textAlign="['inherit','inherit','inherit','inherit']"
					data-paddingtop="[0,0,0,0]"
					data-paddingright="[0,0,0,0]"
					data-paddingbottom="[0,0,0,0]"
					data-paddingleft="[0,0,0,0]"

					style="z-index: 17;">
		<div class="rs-looped rs-wave"  data-speed="5" data-angle="0" data-radius="4px" data-origin="50% 50%"><img src="assets/images/flake3.png" alt="" data-ww="['27px','27px','27px','27px']" data-hh="['26px','26px','26px','26px']" width="27" height="26" data-no-retina> </div></div>

				<!-- LAYER NR. 14 -->
				<div class="tp-caption   tp-resizeme rs-parallaxlevel-4" 
					 id="slide-32-layer-13" 
					 data-x="['center','center','center','center']" data-hoffset="['-88','-88','-88','-37']" 
					 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['382','382','382','399']" 
								data-width="none"
					data-height="none"
					data-whitespace="nowrap"
		 
					data-type="image" 
					data-responsive_offset="on" 

					data-frames='[{"delay":650,"speed":3000,"frame":"0","from":"y:150px;rZ:125deg;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
					data-textAlign="['inherit','inherit','inherit','inherit']"
					data-paddingtop="[0,0,0,0]"
					data-paddingright="[0,0,0,0]"
					data-paddingbottom="[0,0,0,0]"
					data-paddingleft="[0,0,0,0]"

					style="z-index: 18;">
		<div class="rs-looped rs-wave"  data-speed="6" data-angle="0" data-radius="3px" data-origin="50% 50%"><img src="assets/images/flake1.png" alt="" data-ww="['13','13','13','13px']" data-hh="12px" width="25" height="24" data-no-retina> </div></div>

				<!-- LAYER NR. 15 -->
				<div class="tp-caption   tp-resizeme rs-parallaxlevel-4" 
					 id="slide-32-layer-14" 
					 data-x="['center','center','center','center']" data-hoffset="['-232','-232','-232','-170']" 
					 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['300','300','300','366']" 
								data-width="none"
					data-height="none"
					data-whitespace="nowrap"
		 
					data-type="image" 
					data-responsive_offset="on" 

					data-frames='[{"delay":750,"speed":3000,"frame":"0","from":"y:150px;rZ:-125deg;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
					data-textAlign="['inherit','inherit','inherit','inherit']"
					data-paddingtop="[0,0,0,0]"
					data-paddingright="[0,0,0,0]"
					data-paddingbottom="[0,0,0,0]"
					data-paddingleft="[0,0,0,0]"

					style="z-index: 19;">
		<div class="rs-looped rs-wave"  data-speed="7" data-angle="0" data-radius="6px" data-origin="50% 50%"><img src="assets/images/flake3.png" alt="" data-ww="['16px','16px','16px','16px']" data-hh="['15px','15px','15px','15px']" width="27" height="26" data-no-retina> </div></div>

			</li>
		</ul>
		<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	</div>
		</div>

    </article>
</section>

<!-- Container for demo purpose -->
<div class="container my-24 px-6 mx-auto">

  <!-- Section: Design Block -->
  <section class="mb-32 text-gray-800">
    <div class="flex justify-center">
    </div>

    <div class="flex flex-wrap justify-center">
      <div class="grow-0 shrink-0 basis-auto mb-12 lg:mb-0 w-8/12 lg:w-6/12 px-3 lg:px-6">
        <form>
          <div class="form-group mb-6">
            <input type="text" class="form-control block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
              placeholder="Name">
          </div>
          <div class="form-group mb-6">
            <input type="email" class="form-control block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8"
              placeholder="Email address">
          </div>
          <div class="form-group mb-6">
            <textarea class="
            form-control
            block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
          " id="exampleFormControlTextarea13" rows="3" placeholder="Message"></textarea>
          </div>
          <button type="submit" class="
          w-full
          px-6
          py-2.5
          bg-blue-600
          text-white
          font-medium
          text-xs
          leading-tight
          uppercase
          rounded
          shadow-md
          hover:bg-blue-700 hover:shadow-lg
          focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
          active:bg-blue-800 active:shadow-lg
          transition
          duration-150
          ease-in-out">Send</button>
        </form>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->

</div>
<!-- Script -->

<script type="text/javascript">
		
    var tpj=jQuery;
    var revapi14;
    tpj(document).ready(function() {
      if(tpj("#rev_slider_14_1").revolution == undefined){
        revslider_showDoubleJqueryError("#rev_slider_14_1");
      }else{
        revapi14 = tpj("#rev_slider_14_1").show().revolution({
          sliderType:"hero",
          jsFileLocation:"revolution/js/",
          sliderLayout:"fullscreen",
          dottedOverlay:"none",
          delay:9000,
          particles: {startSlide: "first", endSlide: "last", zIndex: "6",
            particles: {
              number: {value: 100}, color: {value: "#ffffff"},
              shape: {
                type: "circle", stroke: {width: 0, color: "#ffffff", opacity: 1},
                image: {src: ""}
              },
              opacity: {value: 1, random: true, min: 0.25, anim: {enable: false, speed: 3, opacity_min: 0, sync: false}},
              size: {value: 3, random: true, min: 0.5, anim: {enable: false, speed: 40, size_min: 1, sync: false}},
              line_linked: {enable: false, distance: 150, color: "#ffffff", opacity: 0.4, width: 1},
              move: {enable: true, speed: 1, direction: "top", random: true, min_speed: 1, straight: false, out_mode: "out"}},
            interactivity: {
              events: {onhover: {enable: true, mode: "bubble"}, onclick: {enable: false, mode: "repulse"}},
              modes: {grab: {distance: 400, line_linked: {opacity: 0.5}}, bubble: {distance: 400, size: 0, opacity: 0.01}, repulse: {distance: 200}}
            }
          },
          navigation: {
          },
          responsiveLevels:[1240,1024,778,480],
          visibilityLevels:[1240,1024,778,480],
          gridwidth:[1240,1024,778,480],
          gridheight:[868,768,960,720],
          lazyType:"none",
          parallax: {
            type:"mouse",
            origo:"slidercenter",
            speed:400,
            levels:[1,2,3,4,5,10,15,20,25,46,47,48,49,50,51,55],
          },
          shadow:0,
          spinner:"off",
          autoHeight:"off",
          fullScreenAutoWidth:"off",
          fullScreenAlignForce:"off",
          fullScreenOffsetContainer: "",
          fullScreenOffset: "",
          disableProgressBar:"on",
          hideThumbsOnMobile:"off",
          hideSliderAtLimit:0,
          hideCaptionAtLimit:0,
          hideAllCaptionAtLilmit:0,
          debugMode:false,
          fallbacks: {
            simplifyAll:"off",
            disableFocusListener:false,
          }
        });
      }

              RsParticlesAddOn(revapi14);
    });	/*ready*/
  </script>

<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
<script type="text/javascript" src="assets/js/warning.js"></script>

</body>


</html>