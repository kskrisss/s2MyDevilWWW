<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>M.K.KRÜGER - USŁUGI TRANSPORTOWE</title>
<meta name="description" content="Kruger, Transport Osobowy Trzcianka, Kruger przewóz osób Trzcianka, Kruger transport osobowy,Kruger przewozy autokarowe. Trzcianka: Kruger wynajem autokarów." />
<meta name="keywords" content="kruger, przewozy autokarowe, przewozy osobowe, przewóz, transport, firmowy, przewóz pracowników, poznań, wynajem autokarów" />
<meta name="Author" content="Kris" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="Shortcut icon" href="http://www.mkkruger.com.pl/favicon.ico" 
/>
<link rel="stylesheet" href="nivo-slider/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<script type="text/javascript" src="scripts/jquery-1.6.1.min.js"></script>
<script src="scripts/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="nivo-slider/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
    $(window).load(function() {
         $('#slider').nivoSlider({
            effect: 'boxRandom',
             slices: 15, // For slice animations
                boxCols: 8, // For box animations
                boxRows: 4, // For box animations
                animSpeed: 1000, // Slide transition speed
                pauseTime: 4000, // How long each slide will show
                startSlide: 0 , // Set starting Slide (0 index)
                directionNav: true, // Next  Prev navigation
                directionNavHide: true, // Only show on hover
                controlNav: true, // 1,2,3... navigation
                controlNavThumbs: false, // Use thumbnails for Control Nav
                controlNavThumbsFromRel: false, // Use image rel for thumbs
                controlNavThumbsSearch: '.jpg', // Replace this with...
                controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
                keyboardNav: false, // Use left  right arrows
                pauseOnHover: true, // Stop animation while hovering
                manualAdvance: false, // Force manual transitions
                captionOpacity: 0.7 
        });

    });
    </script>

<script type="text/javascript" charset="utf-8">
            $(document).ready(function(){
                $("a[rel^='prettyPhoto']").prettyPhoto({theme: 'dark_rounded',slideshow:5000, autoplay_slideshow:false, social_tools:false});
            });            
 </script>
</head>

<body>
<div class="bg2"></div>
<div class="bg3"></div>
<div class="pds">
	<div class="t1">
    
    
    <div class="logo"> 
    </div>
<div class="animacja">
    
    	<div class="slider-wrapper theme-default">
                            <div class="ribbon"></div>
                            <div id="slider" class="nivoSlider">
                         <!--   TUTAJ WSTAW ZDJĘCIA DO ANIMACJI JQUERY  -->
                                <img src="images/anim1.jpg" alt="" title="USŁUGI TRANSPORTOWE" />
                                <img src="images/anim2.jpg" alt="" title="USŁUGI TRANSPORTOWE" />
                                <img src="images/anim3.jpg" alt="" title="USŁUGI TRANSPORTOWE" />  
								</div>
      </div>
    
    </div>
    <img src="images/t1.png" alt=""  />
    </div>
	<div class="menu">
                	<ul>
                    	<li><a href="index.php?id=strona_glowna">O firmie</a></li>
						<li><a href="index.php?id=oferta">Nasza oferta</a></li>
						<li><a href="index.php?id=pojazdy">Pojazdy</a></li>
						<li><a href="index.php?id=referencje">Referencje</a></li>
						<li><a href="index.php?id=galeria">Galeria</a></li>
						<li><a href="index.php?id=kontakt">Kontakt</a></li>
                    </ul>
  </div>
     <div class="s">
     	<div class="left">
        	<div class="ng"><h1 style="font-weight:bold;">DYSPOZYTOR</h1></div>
			<div class="mtxt" style="padding-top:10px; font-size:25px;">Telefon kom.:</div> 
			<div class="mtxt" style="padding-top:0.1px; font-size:30px; font-weight:bold; color: #575757;">+48 666-146-810</div>
			<div class="mtxt" style="padding-top:0.1px; font-size:30px; font-weight:bold; color: #575757;">+48 608-657-198</div>
			<div class="mtxt" style="padding-top:3px; font-size:25px;">Telefon/fax:</div>			
			<div class="mtxt" style="padding-top:0.1px; font-size:30px; font-weight:bold; color: #575757;">+48 67 2165-932</div>
			<div class="mtxt" style="padding-top:6px; font-size:25px;">Email:</div>			
			<div class="mtxt" style="padding-top:0.1px; font-size:22px; font-weight:bold;"><a href="mailto:biuro@mkkruger.com.pl">biuro@mkkruger.com.pl</a></div>
            <div class="mtxt" style="padding-top:10px; font-size:25px;">
			Jesteś zinteresowany wynajmem autokaru?
			<br/>Skontaktuj się z nami telefonicznie lub poprzez <a href="mailto:biuro@mkkruger.com.pl">email</a>. 
			
		
	
	<br>
	<br>
	<div><img src="images/mapka.png" alt="" /></div>
	<br>
	<br>
	<g:plusone></g:plusone>
	<div class="fb-like" data-send="false" data-layout="standard" data-width="250" data-show-faces="false" data-colorscheme="light" data-action="like"></div>
	
	</div>
	<br>
	<br>
	</div>	
        
        
		<div class="right" > 
		<?php 
	
		//error_reporting(E_ALL ^ E_NOTICE);
		if(empty ($_GET['id']) or $_GET['id']=="strona_glowna"){
		include("dane/strona_glowna.php");
	}
		if($_GET['id']=="oferta"){
		include("dane/oferta.php");
	}
		if($_GET['id']=="galeria"){
		include("dane/galeria.php");
	}
		if($_GET['id']=="pojazdy"){
		include("dane/pojazdy.php");
	}	
		if($_GET['id']=="kontakt"){
		include("dane/kontakt.php");
	}	
		if($_GET['id']=="referencje"){
		include("dane/referencje.php");
	}	
		if($_GET['id']=="Vanhool1"){
		include("dane/Vanhool1.php");
	}			
		if($_GET['id']=="Vanhool2"){
		include("dane/Vanhool2.php");
	}			
		if($_GET['id']=="setra"){
		include("dane/setra.php");
	}			
		if($_GET['id']=="scania"){
		include("dane/scania.php");
	}			
		if($_GET['id']=="mercedes"){
		include("dane/mercedes.php");
	}			
		if($_GET['id']=="mercedes2"){
		include("dane/mercedes2.php");
	}			
		if($_GET['id']=="man"){
		include("dane/man.php");
	}	
		if($_GET['id']=="daf"){
		include("dane/daf.php");
	}	
		if($_GET['id']=="sitemap"){
		include("dane/sitemap.php");
	}	 
		?>
				

					</div>
					 <div class="both"></div>

  				 
				</div>
	
   
	<div class="f">
    <div>Copyright 2013 by <a href="http://www.mkkruger.com.pl" title="przewozy autokarowe, przewozy osobowe">www.mkkruger.com.pl</a> Wszystkie prawa zastrzeżone.</div>    
    </div>

</div>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {lang: 'pl'}
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24163763-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- This contains the hidden content for inline calls -->
		<div style='display:none'>
			<div id='inline_content' style='padding:10px; background:#fff;'>
			<p><strong>This content comes from a hidden element on this page.</strong></p>
			<p>The inline option preserves bound JavaScript events and changes, and it puts the content back where it came from when it is closed.</p>
			<p><a id="click" href="#" style='padding:5px; background:#ccc;'>Click me, it will be preserved!</a></p>
			
			<p><strong>If you try to open a new Colorbox while it is already open, it will update itself with the new content.</strong></p>
			<p>Updating Content Example:<br />
			<a class="ajax" href="../content/ajax.html">Click here to load new content</a></p>
			</div>
		</div>
<script language="JavaScript1.2">

/*
Flying Butterfly script (By BGAudioDr@aol.com)
Modified slightly/ permission granted to Dynamic Drive to feature script in archive
For full source, visit http://www.dynamicdrive.com
*/

var Ymax=8;                                //MAX # OF PIXEL STEPS IN THE "X" DIRECTION
var Xmax=8;                                //MAX # OF PIXEL STEPS IN THE "Y" DIRECTION
var Tmax=10000;                        //MAX # OF MILLISECONDS BETWEEN PARAMETER CHANGES

//FLOATING IMAGE URLS FOR EACH IMAGE. ADD OR DELETE ENTRIES. KEEP ELEMENT NUMERICAL ORDER STARTING WITH "0" !!

var floatimages=new Array();
floatimages[0]='images/eu4.png';


//*********DO NOT EDIT BELOW***********
var NS4 = (navigator.appName.indexOf("Netscape")>=0 && parseFloat(navigator.appVersion) >= 4 && parseFloat(navigator.appVersion) < 5)? true : false;
var IE4 = (document.all)? true : false;
var NS6 = (parseFloat(navigator.appVersion) >= 5 && navigator.appName.indexOf("Netscape")>=0 )? true: false;
var wind_w, wind_h, t='', IDs=new Array();
for(i=0; i<floatimages.length; i++){
t+=(NS4)?'<layer name="pic'+i+'" visibility="hide" width="10" height="10"><a href="javascript:hidebutterfly()">' : '<div id="pic'+i+'" style="position:absolute; visibility:hidden;width:10px; height:10px"><a href="javascript:hidebutterfly()">';
t+='<img src="'+floatimages[i]+'" name="p'+i+'" border="0">';
t+=(NS4)? '</a></layer>':'</a></div>';
}
document.write(t);

function moveimage(num){
if(getidleft(num)+IDs[num].W+IDs[num].Xstep >= wind_w+getscrollx())IDs[num].Xdir=false;
if(getidleft(num)-IDs[num].Xstep<=getscrollx())IDs[num].Xdir=true;
if(getidtop(num)+IDs[num].H+IDs[num].Ystep >= wind_h+getscrolly())IDs[num].Ydir=false;
if(getidtop(num)-IDs[num].Ystep<=getscrolly())IDs[num].Ydir=true;
moveidby(num, (IDs[num].Xdir)? IDs[num].Xstep :  -IDs[num].Xstep , (IDs[num].Ydir)?  IDs[num].Ystep:  -IDs[num].Ystep);
}

function getnewprops(num){
IDs[num].Ydir=Math.floor(Math.random()*2)>0;
IDs[num].Xdir=Math.floor(Math.random()*2)>0;
IDs[num].Ystep=Math.ceil(Math.random()*Ymax);
IDs[num].Xstep=Math.ceil(Math.random()*Xmax)
setTimeout('getnewprops('+num+')', Math.floor(Math.random()*Tmax));
}

function getscrollx(){
if(NS4 || NS6)return window.pageXOffset;
if(IE4)return document.body.scrollLeft;
}

function getscrolly(){
if(NS4 || NS6)return window.pageYOffset;
if(IE4)return document.body.scrollTop;
}

function getid(name){
if(NS4)return document.layers[name];
if(IE4)return document.all[name];
if(NS6)return document.getElementById(name);
}

function moveidto(num,x,y){
if(NS4)IDs[num].moveTo(x,y);
if(IE4 || NS6){
IDs[num].style.left=x+'px';
IDs[num].style.top=y+'px';
}}

function getidleft(num){
if(NS4)return IDs[num].left;
if(IE4 || NS6)return parseInt(IDs[num].style.left);
}

function getidtop(num){
if(NS4)return IDs[num].top;
if(IE4 || NS6)return parseInt(IDs[num].style.top);
}

function moveidby(num,dx,dy){
if(NS4)IDs[num].moveBy(dx, dy);
if(IE4 || NS6){
IDs[num].style.left=(getidleft(num)+dx)+'px';
IDs[num].style.top=(getidtop(num)+dy)+'px';
}}

function getwindowwidth(){
if(NS4 || NS6)return window.innerWidth;
if(IE4)return document.body.clientWidth;
}

function getwindowheight(){
if(NS4 || NS6)return window.innerHeight;
if(IE4)return document.body.clientHeight;
}

function init(){
wind_w=getwindowwidth();
wind_h=getwindowheight();
for(i=0; i<floatimages.length; i++){
IDs[i]=getid('pic'+i);
if(NS4){
IDs[i].W=IDs[i].document.images["p"+i].width;
IDs[i].H=IDs[i].document.images["p"+i].height;
}
if(NS6 || IE4){
IDs[i].W=document.images["p"+i].width;
IDs[i].H=document.images["p"+i].height;
}
getnewprops(i);
moveidto(i , Math.floor(Math.random()*(wind_w-IDs[i].W)), Math.floor(Math.random()*(wind_h-IDs[i].H)));
if(NS4)IDs[i].visibility = "show";
if(IE4 || NS6)IDs[i].style.visibility = "visible";
startfly=setInterval('moveimage('+i+')',Math.floor(Math.random()*100)+100);
}}

function hidebutterfly(){
for(i=0; i<floatimages.length; i++){
if (IE4)
eval("document.all.pic"+i+".style.visibility='hidden'")
else if (NS6)
document.getElementById("pic"+i).style.visibility='hidden'
else if (NS4)
eval("document.pic"+i+".visibility='hide'")
clearInterval(startfly)
}
}

if (NS4||NS6||IE4){
window.onload=init;
window.onresize=function(){ wind_w=getwindowwidth(); wind_h=getwindowheight(); }
}

</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52480530-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
