<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

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
    <div class="pt-10">
        <form action="./admin/controllers/add_inscricao.php" method="post" class="relative bg-white rounded-lg shadow">
            <div class="lg:w-full pt-20 pb-8 mx-auto lg:pb-16">
                <div class="pb-8 shadow-inner bg-white bg-opacity-70 shadow-md rounded-xl">
                    <div class="max-w-screen-xl px-4 pt-8 mx-auto mb-3 text-center">
                        <div class="flex justify-center"><a href="<?php echo $URI->base("/home"); ?>">
                                <img src="<?php echo $URI->base("/assets/img/logo.png"); ?>" class="logo" alt="<?php echo $title; ?>" />
                            </a>
                        </div>
                        <h1 class="mt-5 text-red-800 font-semibold lg:text-2xl text-xl">
                            Faça sua Pré-Inscrição aqui!
                        </h1>
                    </div>

                    <div class="p-4">
                        <div class="lg:w-2/3 px-4 pb-8 mx-auto lg:pb-16">
                            <div class="">
                                <label class="block my-2 text-md font-base text-gray-800">Nome Completo</label>
                                <input type="text" name="nome" id="nome" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="Seu nome completo" required="">
                                <label class="block my-2 text-md font-base text-gray-800 pt-2">CPF</label>
                                <input type="text" name="cpf" id="cpf" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="Nº do seu CPF" required="">
                                <label class="block my-2 text-md font-base text-gray-800 pt-2">Endereço Completo</label>
                                <input type="text" name="endereco" id="endereco" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="Rua, Apto, Condomínio..." required="">
                                <label class="block my-2 text-md font-base text-gray-800 pt-2">Escolaridade</label>
                                <select class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" id="escolaridade" name="escolaridade">
                                    <option value="ensino_fundamental">Ensino Fundamental</option>
                                    <option value="ensino_medio">Ensino Médio</option>
                                    <option value="graduacao">Graduação</option>
                                    <option value="pos_graduacao">Pós-Graduação</option>
                                    <option value="mestrado">Mestrado</option>
                                    <option value="doutorado">Doutorado</option>
                                </select>
                                <label class="block my-2 text-md font-base text-gray-800 pt-2">Data de Nascimento</label>
                                <input type="date" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" id="data_nascimento" name="data_nascimento" required="">
                                <label class="block my-2 text-md font-base text-gray-800">WhatsApp</label>
                                <input type="text" name="whatsapp" id="whatsapp" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="(99)9 0000-0000" required="">
                                <!-- <input type="hidden" name="type" id="type" value="1"> -->
                                <label class="block my-2 text-md font-base text-gray-800">Curso</label>
                                <input type="text" name="curso" id="curso" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="Curso que deseja" required="">
                            </div>
                            <div class="flex justify-center">
                                <button type="submit" class="text-white bg-red-800 mt-5 w-52 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Enviar</button>
                            </div>
                        </div>
        </form>
    </div>
    </div>
    </section>
    <?php include "components/footer.php"; ?>
    <?php include "components/modal_cursos.php"; ?>

    <script src="./assets/js/script.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>