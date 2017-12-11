---
layout: default
title: Início
permalink: /
---
<section class="principal">
  <div id="chamada">
    <h1>Comece a treinar hoje mesmo</h1>
    <p>Dê o primeiro passo e venha fazer a diferença!</p>
    <a class="btn" href="{{ site.matricula-url }}">Matricule-se agora</a>
  </div>

</section>
<section class="explicacao">
  <div id="atletas" class="col-md-5">

  </div>
  <div id="container-explicacao" class="col-md-7">
    <div id="elementos-explicacao">
      <h2 id="titulo-explicacao">Academia para todos</h2>
      <p id="explicacao">Academia com a estrutura que você merece à um preço que cabe no seu bolso.
         A oportunidade que faltava para você cuidar da saúde e boa forma!</p>
      <a class="btn" href="{{ site.matricula-url }}">Matricule-se agora</a>
    </div>

  </div>
</section>
<section id="como-funciona">
  <div class="conteudo">
    <header class="col-md-12">
      <p class="como-funciona-titulo">Saiba como funciona</p>
      <p class="como-funciona-descricao">Aqui você pode desfrutar de equipamentos de ultima geração e exclusivos no estado.
         Tudo isso em um ambiente sofisticado, com vestiários equipados e ambiente climatizado.
         Você merece tudo isso por um preço justo, com planos a partir de R$ 79,90 mensais*.</p>
    </header>
    <div class="col-md-6">
      <div class="icon">
        <img src="assets/img/icon-arrow.png" alt="matricula">
      </div>
      <p class="como-funciona-titulo">Como faço minha matrícula?</p>
      <p class="como-funciona-descricao">A matrícula pode ser feita aqui pelo site <a href="{{ site.matricula-url }}">clicando aqui</a> ou no balcão da academia.</p>
    </div>
    <div class="col-md-6">
      <div class="icon">
        <img src="assets/img/icon-assine.png" alt="forma-pagamento">
      </div>
      <p class="como-funciona-titulo">Quais as formas de pagamento?</p>
      <p class="como-funciona-descricao">Em cartão de crédito com as bandeiras credenciadas, boleto bancário e pagamento em dinheiro do plano anual total.</p>
    </div>
  </div>
</section>
<section id="secao-planos">
  <div class="conteudo">
    <header class="col-md-12">
      <p id="planos-titulo">Seu plano BG Fitness</p>
      <p id="planos-subtitulo">Escolha um plano e venha fazer parte da familia</p>
    </header>
    <div class="planos">
      <div id="gold" class="col-md-5 plano">
        <p>Plano <strong>BG Gold</strong></p>
        <p class="sub-plano">Musculação e Aeróbicos em horário delimitado:</p>
        <div id="detalhe">
          <p>Horário do plano durante a semana:</p>
          <p>Segunda à sexta das 09:00 às 15:00</p>
          <p>Sábado e Domingo horário livre</p>
        </div>
        <a href="{{ site.matricula-url }}" rel="nofollow">
          <strong class="preco">R$ 79,90</strong>
        </a>
        <a href="{{ site.matricula-url }}"><p class="contrate">Contrate Agora</p></a>
      </div>
      <div class="col-md-2">

      </div>
      <div id="platinum" class="col-md-5 plano">
        <p>Plano <strong>BG Platinum</strong></p>
        <p class="sub-plano">Musculação, Acesso às duas unidades, Acesso à todas as modalidades:</p>
        <ul>
          <li>BG Spinning</li>
          <li>BG Running</li>
          <li>BG Funcional</li>
          <li>FitDance</li>
          <li>Zumba</li>
          <li>Muay Thai</li>
          <li>e mais!</li>
          <li><a href="#">Confira todas as modalidades aqui!</a></li>
        </ul>
        <a href="{{ site.matricula-url }}" rel="nofollow">
          <strong class="preco">R$ 99,90</strong>
        </a>
        <a href="{{ site.matricula-url }}"><p class="contrate">Contrate Agora</p></a>

      </div>
    </div>
  </div>
</section>
<section id="area-mapa">
  <header class="col-md-12">
    <p>Escolha a BG Fitness mais perto de você</p>
  </header>
  <div id="mapa">

  </div>
</section>

<script>
  function myMap() {
    var mapCanvas = document.getElementById("mapa");
    var myCenter = new google.maps.LatLng(-9.635062, -35.720698);

    var posicaoBgPraia = new google.maps.LatLng(-9.6482231,-35.7050996);
    var posicaoBgFarol = new google.maps.LatLng(-9.621318, -35.738650);

    var mapOptions = {
      center: myCenter,
      zoom: 14,
      disableDefaultUI: false,
      scrollwheel: false
    };
    var map = new google.maps.Map(mapCanvas,mapOptions);

    var markerPraia = new google.maps.Marker({
    position: posicaoBgPraia,
    icon: "assets/img/pointer.png",
    animation: google.maps.Animation.BOUNCE
    });
    markerPraia.setMap(map);

    var markerFarol = new google.maps.Marker({
    position: posicaoBgFarol,
    icon: "assets/img/pointer.png",
    animation: google.maps.Animation.BOUNCE
    });
    markerFarol.setMap(map);
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?callback=myMap&key=AIzaSyBCzwa-1utZ-8mBL_Zae-2wzHQlRlMJmkA"></script>
