<section class="lg:mt-20 mt-16 mb-4 swiper swiper_banners">
  <div class="swiper-wrapper">
    <?php
    foreach ($banners as $banner) {
    ?>
      <a class="swiper-slide" href="<?php echo $banner['link']; ?>">
        <img class='lazy w-full' src='./admin/uploads/banners/<?php echo $banner['img'] ?>'>
      </a>
    <?php
    }
    ?>
  </div>
  <div class="swiper-button-next lg:text-color2 text-white lg:bg-white p-8 rounded-full font-bold"></div>
  <div class="swiper-button-prev lg:text-color2 text-white lg:bg-white p-8 rounded-full font-bold"></div>
  <div class="swiper-pagination swiper-pagination-banners-main"></div>
</section>