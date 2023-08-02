<section class="swiper swiper_banners">
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
  <div class="swiper-button-next text-white"></div>
  <div class="swiper-button-prev text-white"></div>
  <div class="swiper-pagination swiper-pagination-banners-main"></div>
</section>