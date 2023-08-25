<section class="swiper swiper_services max-w-screen-xl mx-auto pt-10" id="servicos">
  <h1 class="lg:text-4xl text-2xl text-center mb-4"><span class="font-extrabold text-color2">CURSOS & TREINAMENTOS</span></h1>
  <div class="swiper swiper_posts">
    <div class="swiper-wrapper">
      <?php foreach ($cursos as $curso) { ?>
        <div class="swiper-slide my-4 mx-1">
          <div class="max-w-lg mx-auto">
            <div>
              <img class='lazy rounded-md w-full' src='./admin/uploads/cursos/<?php echo $curso['img'] ?>'>
            </div>
            <div class="body-tiltes bg-gradient-to-t from-color2">
              <div class="rounded-2xl">
                <h3 class="uppercase text-white text-xl text-center font-semibold py-2"><?php echo $curso['name']; ?></h3>
              </div>
              <div class="flex justify-center">
                <a href="<?php echo $URI->base('curso/' . slugify($curso['name'])); ?>" class="bg-white rounded-md focus:ring-4 rounded-md font-md text-md px-5 py-2 text-center">Saiba mais</a>
              </div>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</section>