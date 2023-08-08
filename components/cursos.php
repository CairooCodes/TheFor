<section class="swiper swiper_services max-w-screen-xl mx-auto pt-10" id="servicos">
    <h1 class="lg:text-5xl text-2xl text-center mb-4"><span class="font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-red-900 to-red-900">CURSOS & TREINAMENTOS</span></h1>
    <div class="swiper swiper_posts">
			<div class="swiper-wrapper">
				<?php foreach ($services as $services) { ?>
					<div class="swiper-slide my-4 mx-1">
						<div class="max-w-lg p-3 mx-auto rounded-md shadow-csc">
							<div>
								<img class='lazy rounded-md h-52 w-full' data-src='./admin/uploads/cursos/<?php echo $services['img'] ?>'>
							</div>
							<div class="rounded-2xl">
								<h3 class="post-title mb-4 text-lg font-semibold py-2"><?php echo $services['name']; ?></h3>
							</div>
							<div class="flex justify-center mt-4">
								<a href="<?php echo $URI->base('curso/' . slugify($services['name'])); ?>" class="text-white bg-color2 focus:ring-4 rounded-md font-md text-md px-5 py-2 text-center">Saiba mais</a>
							</div>
						</div>
					</div>
				<?php
				}
				?>
			</div>
		</div>
</section>