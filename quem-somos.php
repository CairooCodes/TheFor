<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$abouts = getAbout();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php include "components/heads.php"; ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./assets/css/swiper.css">
</head>


<body>
  <?php include "components/navbar.php"; ?>
  <div class="mx-auto max-w-6xl pt-28 about">
    <div class="lg:pt-4 lg:p-0 lg:p-10 p-5">
      <h1 class="uppercase font-bold text-3xl text-center text-color2">THE FOR</h1>
      <p class="text-justify">
        Na THE FOR, estamos comprometidos em transformar aspirações em realidade, fornecendo a educação e o treinamento necessários para forjar um futuro seguro e bem-sucedido.
      </p>
      <h1 class="uppercase font-bold text-2xl text-color2 pt-4">MISSÃO</h1>
      <p class="text-justify">Na THE FOR, nossa missão é capacitar indivíduos com o conhecimento e as habilidades necessárias para se destacar na área de segurança e vigilância. Através de cursos de formação abrangentes e especializados, visamos fornecer educação de alta qualidade, preparando nossos alunos para enfrentar os desafios dinâmicos do setor. Estamos empenhados em criar profissionais confiantes, éticos e altamente capacitados, prontos para garantir a segurança e o bem-estar da sociedade.</p>

      <h1 class="uppercase font-bold text-2xl text-color2 pt-4">Visão</h1>
      <p class="text-justify">
        Nossa visão é ser reconhecida como uma instituição líder no campo da formação em segurança e vigilância. Queremos ser a primeira escolha para aqueles que buscam uma educação excepcional, oferecendo cursos inovadores e atualizados que atendam às demandas em constante evolução do setor. Almejamos contribuir ativamente para a melhoria da segurança em nossa sociedade, produzindo profissionais de alto calibre que inspirem confiança e façam a diferença.</p>

      <h1 class="uppercase font-bold text-2xl text-color2 pt-4">Valores</h1>
      <p class="text-justify">
        Nosso compromisso com a excelência, integridade e respeito orienta nossas ações diárias. Valorizamos a busca incessante pela melhoria contínua e nos esforçamos para oferecer um ambiente de aprendizado que promova o desenvolvimento pessoal e profissional de nossos alunos. Acreditamos na ética, na transparência e na responsabilidade como princípios fundamentais de nosso trabalho. Nossa dedicação à qualidade, ao profissionalismo e à dedicação ao serviço é o que nos impulsiona a alcançar e superar nossas metas.
      </p>
    </div>
  </div>
  <?php include "components/footer.php"; ?>
  <?php include "components/modal_cursos.php"; ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

</body>

</html>