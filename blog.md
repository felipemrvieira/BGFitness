---
layout: default
title: BG Fitness Maceió - Blog
permalink: /blog/
---
<section id="blog-header">
  <div id="conteudo" class="col-md-8">
    <h2>Blog BG Fitness</h2>
    <p>O conteúdo do nosso blog é relacionado a áreas de interesse de praticantes de atividades físicas, saúde, alimentação saudável e temas relacionados.</p>
  </div>
</section>
<section id="posts" class="col-md-12">
  <header class="col-md-12">
    <h2>Publicações mais recentes</h2>
  </header>
  <div class="col-md-12">
    {% if site.posts.size == 0%}
      <h2>Sem publicações para exibir</h2>
    {% else %}
      {% for post in site.posts %}
        <div class="col-sm-6 col-md-3 post">
          <div class="thumbnail">
            <div class="cresce">
              <a href="{{ post.url }}"><img class="img img-responsive" src="/assets/img/Farol/{{ post.background }}" alt=""></a>
            </div>

            <div class="caption">
              <div class="post-conteudo">
                <a href="{{ post.url }}"><h3 class="post-titulo">{{ post.title }}</h3></a>
                <p class="post-data">
                {% assign m = post.date | date: "%-m" %}
                {{ post.date | date: "%-d" }}
                {% case m %}
                  {% when '1' %}Jan
                  {% when '2' %}Fev
                  {% when '3' %}Mar
                  {% when '4' %}Abr
                  {% when '5' %}Mai
                  {% when '6' %}Jun
                  {% when '7' %}Jul
                  {% when '8' %}Ago
                  {% when '9' %}Set
                  {% when '10' %}Out
                  {% when '11' %}Nov
                  {% when '12' %}Dez
                {% endcase %}
                {{ post.date | date: "%Y" }}</p>
                <p class="post-resumo">{{ post.resumo }}</p>
                <img class="img-circle avatar" src="/assets/img/{{ post.avatar }}" alt="avatar">
              </div>
            </div>
          </div>
        </div>
      {% endfor %}
    {% endif %}


  </div>
</section>
