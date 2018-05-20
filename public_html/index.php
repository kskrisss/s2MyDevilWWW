<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>M.K.KRÜGER - USŁUGI TRANSPORTOWE</title>
<meta name="description" content="Kruger, Transport Osobowy Trzcianka, Kruger przewóz osób Trzcianka, Kruger transport osobowy,Kruger przewozy autokarowe. Trzcianka: Kruger wynajem autokarów." />
<meta name="keywords" content="kruger, przewozy autokarowe, przewozy osobowe, przewóz, transport, firmowy, przewóz pracowników, poznań, wynajem autokarów" />
<meta name="Author" content="Kris" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="Shortcut icon" href="http://www.mkkruger.pl/favicon.ico"
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
<div id="fb-root"></div>

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
            <li><a href="index.php?id=referencje">Uprawnienia</a></li>
            <li><a href="index.php?id=galeria">Galeria</a></li>
            <li><a href="index.php?id=kontakt">Kontakt</a></li>
                    </ul>
  </div>
     <div class="s">
       <div class="left">
          <div class="ng"><h1 style="font-weight:bold;">KONTAKT</h1></div>
      <div class="mtxt" style="padding-top:10px; font-size:25px;">Telefon kom.:</div>
      <div class="mtxt" style="padding-top:0.1px; font-size:30px; font-weight:bold; color: #575757;">+48 666-146-810</div>
      <div class="mtxt" style="padding-top:0.1px; font-size:30px; font-weight:bold; color: #575757;">+48 608-657-198</div>
      <div class="mtxt" style="padding-top:3px; font-size:25px;">Telefon/fax:</div>
      <div class="mtxt" style="padding-top:0.1px; font-size:30px; font-weight:bold; color: #575757;">+48 67 2165-932</div>
      <div class="mtxt" style="padding-top:6px; font-size:25px;">Email:</div>
      <div class="mtxt" style="padding-top:0.1px; font-size:22px; font-weight:bold;"><a href="mailto:mkkruger@wp.pl">mkkruger@wp.pl</a></div>
            <div class="mtxt" style="padding-top:10px; font-size:25px;">
      Jesteś zinteresowany wynajmem autokaru?
      <br/>Skontaktuj się z nami telefonicznie lub poprzez <a href="mailto:mkkruger@wp.pl">email</a>.



  <br>
  <br>
  <div><img src="images/mapka.png" alt="" /></div>
  <br>
  <br>
  <g:plusone></g:plusone>
<div class="fb-page" data-href="https://www.facebook.com/Us%C5%82ugi-Transportowe-MKKruger-780568555373353/?ref=hl" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"></div>
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
    if($_GET['id']=="man54"){
    include("dane/man54.php");
  }
    if($_GET['id']=="man57"){
    include("dane/man57.php");
  }
    if($_GET['id']=="mercedes3"){
    include("dane/mercedes3.php");
  }
    if($_GET['id']=="daf"){
    include("dane/daf.php");
  }
    if($_GET['id']=="sitemap"){
    include("dane/sitemap.php");
  }
    if($_GET['id']=="fordtransit"){
    include("dane/fordtransit.php");
  }
    if($_GET['id']=="volkswagen"){
    include("dane/volkswagen.php");
  }
    ?>


          </div>
           <div class="both"></div>


        </div>


  <div class="f">
    <div>Copyright 2016 by <a href="http://www.mkkruger.pl" title="przewozy autokarowe, przewozy osobowe">www.mkkruger.pl</a> Wszystkie prawa zastrzeżone.</div>
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

