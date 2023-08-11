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
			<?php foreach ($abouts as $about) {
				echo $about['texto'];
			} ?>
		</div>
	</div>
	<?php include "components/footer.php"; ?>
	<?php include "components/modal_cursos.php"; ?>
	<?php include "components/modal_form_contato.php"; ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

</body>

</html>