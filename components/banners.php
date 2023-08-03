<section class="mt-20 mb-4 swiper swiper_banners">
  <div class="swiper-wrapper">
    <?php
     foreach ($banners as $banners){
    ?>
      <div class="swiper-slide">
        <?php
        if (!empty($banners['img'])) {
          $img = base64_encode($banners['img']);
          echo "<img class='w-full' src='data:image/jpeg;base64," . $img . "'>";
        }
        ?>
      </div>
    <?php
    }
    ?>
  </div>
  <div class="swiper-button-next text-color2 bg-white p-8 rounded-full font-bold"></div>
  <div class="swiper-button-prev text-color2 bg-white p-8 rounded-full font-bold"></div>
  <div class="swiper-pagination swiper-pagination-banners-main"></div>
</section>