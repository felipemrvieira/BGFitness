---
layout: default
title: BG Fitness Maceió - Desafio
permalink: /desafio/
---
<section id="sec1" class="inst-principal" data-type="background" data-speed="5">
  <div id="chamada" >
   
  </div>
</section>

<section id="" class="unidade">
  <iframe src="https://desafiobgfitness.herokuapp.com/" width="100%"></iframe>
</section>


<script>
  function myMap() {
    var mapCanvasFarol = document.getElementById("mapa-farol");
    var mapCanvasPraia = document.getElementById("mapa-praia");

    var myCenter = new google.maps.LatLng(-9.621318, -35.738650);

    var posicaoBgFarol = new google.maps.LatLng(-9.621318, -35.738650);
    var posicaoBgPraia = new google.maps.LatLng(-9.6481603,-35.7028945);


    var mapOptionsFarol = {
      center: myCenter,
      zoom: 16,
      disableDefaultUI: false,
      scrollwheel: false,
      styles: [{"stylers":[{"hue":"#0357ab"},{"saturation":250}]},
      {"featureType":"road","elementType":"geometry","stylers":[{"lightness":50},
      {"visibility":"simplified"}]},{"featureType":"road","elementType":"labels",
      "stylers":[{"visibility":"off"}]}]
    };

    var mapOptionsPraia = {
      center: posicaoBgPraia,
      zoom: 16,
      disableDefaultUI: false,
      scrollwheel: false,
      styles: [{"stylers":[{"hue":"#0357ab"},{"saturation":250}]},
      {"featureType":"road","elementType":"geometry","stylers":[{"lightness":50},
      {"visibility":"simplified"}]},{"featureType":"road","elementType":"labels",
      "stylers":[{"visibility":"off"}]}]
    };

    var mapFarol = new google.maps.Map(mapCanvasFarol,mapOptionsFarol);
    var mapPraia = new google.maps.Map(mapCanvasPraia,mapOptionsPraia);

    var markerFarol = new google.maps.Marker({
    position: posicaoBgFarol,
    icon: "/assets/img/pointer.png"
    });
    markerFarol.setMap(mapFarol);

    var markerPraia = new google.maps.Marker({
    position: posicaoBgPraia,
    icon: "/assets/img/pointer.png"
    });
    markerPraia.setMap(mapPraia);
  }
</script>

<script src="https://maps.googleapis.com/maps/api/js?callback=myMap&key=AIzaSyBCzwa-1utZ-8mBL_Zae-2wzHQlRlMJmkA"></script>

<script>
  function parallax() {
    var $slider = document.getElementById('sec1');
    var yPos = window.pageYOffset / $slider.dataset.speed;
    yPos = -yPos;
    var coords = '0% '+ yPos + 'px';
    $slider.style.backgroundPosition = coords;
  }
    
    window.addEventListener('scroll', function(){
        parallax();	
    });
</script>