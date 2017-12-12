---
layout: default
title: BG Fitness Maceió - Institucional
permalink: /institucional//
---
<section class="inst-principal">
  <div id="chamada">
    <div class="col-md-7">
      <h2>Conheça nossas unidades</h2>
      <p>Além de equipamento de ponta e infraestrutura de qualidade, aqui você tem o suporte profissional que precisa.
       Você ainda conta com uma equipe de profissionais atenciosos com a qualidade e segurança do seu treino.
       Conheça nossas principais vantagens:</p>
      <ul>
        <li>Matrícula rápida sem complicação</li>
        <li>Planos na medida para você</li>
        <li>Baixo custo e alta qualidade</li>
        <li>Ambiente totalmente climatizado</li>
        <li>Ambiente seguro e descontraído</li>
        <li>Equipamentos novos e exclusivos</li>
        <li>Treino direcionado ao seu perfil</li>
        <li>Suporte profissional</li>
      </ul>
      <a class="btn" href="{{ site.matricula-url }}">Matricule-se agora</a>
    </div>
    <div class="col-md-5">
      <iframe width="95%" height="310"
      src="https://www.youtube.com/embed/9kOiZOqdJAU?rel=0&amp;controls=0&amp;showinfo=0"
      frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
    </div>
  </div>
</section>

<section id="farol">
  <div id="descricao-farol" class="col-md-6">
    <header>
      <h2>Unidade BG Farol</h2>
      <p>No coração da cidade, a BG Farol é a nossa mais nova unidade e é ideal para você
        que quer aproveitar o que tem de melhor na região. Além do padrão já conhecido
        de maquinários e suporte profissional, temos estacionamento coberto e seguro.</p>
    </header>
    <div id="galeria" class="col-md-12">
      <a href="/assets/img/Farol/bg1.jpeg" data-lightbox="bgfarol">
        <img class="img-thumbnail" src="/assets/img/Farol/bg1.jpeg" alt="">
      </a>
      <a href="/assets/img/Farol/bg2.jpeg" data-lightbox="bgfarol">
        <img class="img-thumbnail" src="/assets/img/Farol/bg2.jpeg" alt="">
      </a>
      <a href="/assets/img/Farol/bg3.jpeg" data-lightbox="bgfarol">
        <img class="img-thumbnail" src="/assets/img/Farol/bg3.jpeg" alt="">
      </a>
      <a href="/assets/img/Farol/bg4.jpeg" data-lightbox="bgfarol">
        <img class="img-thumbnail" src="/assets/img/Farol/bg4.jpeg" alt="">
      </a>
      <a href="/assets/img/Farol/bg5.jpeg" data-lightbox="bgfarol">
        <img class="img-thumbnail" src="/assets/img/Farol/bg5.jpeg" alt="">
      </a>
      <a href="/assets/img/Farol/bg6.jpeg" data-lightbox="bgfarol">
        <img class="img-thumbnail" src="/assets/img/Farol/bg6.jpeg" alt="">
      </a>
    </div>
  </div>
  <div id="mapa-farol" class="col-md-6">
  </div>
</section>

<section id="praia">
  <div id="mapa-praia" class="col-md-6">
  </div>
  <div id="descricao-praia" class="col-md-6">
    <header>
      <h2>Unidade BG Praia</h2>
      <p>Na Jatiúca, pertinho da praia, a unidade BG Praia conta com maquinário de última geração, estacionamento próprio, e o suporte profissional adequado que é a marca da BG.</p>
    </header>
    <div id="galeria" class="col-md-12">
      <a href="/assets/img/Praia/bg1.jpg" data-lightbox="bgpraia">
        <img class="img-thumbnail" src="/assets/img/Praia/bg1.jpg" alt="">
      </a>
      <a href="/assets/img/Praia/bg2.jpg" data-lightbox="bgpraia">
        <img class="img-thumbnail" src="/assets/img/Praia/bg2.jpg" alt="">
      </a>
      <a href="/assets/img/Praia/bg3.jpg" data-lightbox="bgpraia">
        <img class="img-thumbnail" src="/assets/img/Praia/bg3.jpg" alt="">
      </a>
      <a href="/assets/img/Praia/bg4.jpg" data-lightbox="bgpraia">
        <img class="img-thumbnail" src="/assets/img/Praia/bg4.jpg" alt="">
      </a>
      <a href="/assets/img/Praia/bg5.jpg" data-lightbox="bgpraia">
        <img class="img-thumbnail" src="/assets/img/Praia/bg5.jpg" alt="">
      </a>
      <a href="/assets/img/Praia/bg6.jpg" data-lightbox="bgpraia">
        <img class="img-thumbnail" src="/assets/img/Praia/bg6.jpg" alt="">
      </a>
    </div>
  </div>
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
