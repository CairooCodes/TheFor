<?php
require_once "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$documentos1 = getDocumentos1();
$documentos2 = getDocumentos2();
$URI = new URI();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include "components/heads.php"; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/css/swiper.css">
</head>


<body>
    <?php include "./components/navbar.php" ?>
    <div class="mx-auto max-w-7xl px-2 pt-32">
        <h1 class="text-red-800 text-center text-3xl font-extrabold leading-9 tracking-tight sm:text-4xl sm:leading-10 md:text-left md:text-3xl md:leading-14">
            DOCUMENTAÇÃO
        </h1>
        <div class="grid lg:grid-cols gap-8">
            <div class="pt-2">
                <!-- FAQ FORMAÇÃO DE VIGILANTES CONSIGINADO -->
                <?php foreach ($documentos1 as $documento1) { ?>
                    <section class="bg-white mt-5">
                        <div class="max-w-screen-xl px-4 pb-8 mx-auto lg:pb-24 lg:px-6 ">
                            <h2 class="mb-6 text-3xl font-extrabold tracking-tight text-center text-red-800 lg:mb-8 lg:text-3xl">FORMAÇÃO DE VIGILANTES</h2>
                            <p class="m-5 "><?php echo $documento1['description']; ?></p>
                            <div class="max-w-screen-md mx-auto mt-5">
                                <div id="accordion-flush" data-accordion="collapse" data-active-classes="text-gray-900" data-inactive-classes="text-gray-900">
                                    <h3 id="accordion-flush-heading-1">
                                        <button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-gray-900  border-b border-gray-200" data-accordion-target="#accordion-flush-body-1" aria-expanded="false" aria-controls="accordion-flush-body-1">
                                            <span>
                                                Aqui está a documentação obrigatória para sua matrícula no curso
                                            </span>
                                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </h3>
                                    <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                                        <div class="py-5 border-b border-gray-200">
                                            <p class="font-bold">
                                                <i class="bi bi-check"></i> Exame de Saúde Física e Mental; <br>
                                                <i class="bi bi-check"></i> Foto 3X4; <br>
                                                <i class="bi bi-check"></i> XEROX:
                                            </p>
                                            <p class="ml-10 mt-2">
                                                <i class="bi bi-arrow-right-short"></i> RG OU CNH; <br>
                                                <i class="bi bi-arrow-right-short"></i> Reservista; <br>
                                                <i class="bi bi-arrow-right-short"></i> Comprovante de Residência;<br>
                                                <i class="bi bi-arrow-right-short"></i> Comprovante de Escolaridade mínima correspondente a 4ª série do fundamental.
                                            </p><br><br>

                                            <p class="font-bold text-center">CERTIDÕES NEGATIVAS DE ANTECEDENTES CRIMINAIS</p> <br>
                                            <p class="text-center">1. Justiça Estadual - 1º Grau Criminal e Militar (Para alunos que residem no PI - <a href=https://www.tjpi.jus.br/portaltjpi/ class="font-bold ">www.tjpi.com.br</a>); <br>
                                                2. Certidões de Ações Penais e Militar Estadual (Para alunos que residem no MA <a href=https://www.tjma.jus.br/ class="font-bold">www.tjma.jus.br</a>); <br>
                                                3. Militar União - <a href=https://www.stm.jus.br/ class="font-bold">www.stm.jus.br/</a> <br>
                                                4. Justiça Federal - <a href=https://portal.trf1.jus.br/sjpi/ class="font-bold">www.jfpi.jus.br</a> <br>
                                                5. Justiça Eleitoral (Quitação e Criminal) - <a href=https://www.tse.jus.br/#/ class="font-bold">www.tse.gov.br</a></p> <br><br>

                                            <p style="color: #A20202;" class="font-semibold">OBS: O ALUNO DEVE TRAJAR CALÇA JEANS E SAPATO FECHADO. <br>
                                                E PARA AS AULAS DE EDUCAÇÃO FÍSICA E DEFESA PESSOAL ROUPAS DE ATIVIDADE FÍSICA.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php } ?>

                <!-- FAQ EMPRESTIMO CONSIGINADO -->
                <?php foreach ($documentos2 as $documento2) { ?>
                    <section class="bg-white mt-5">
                        <div class="max-w-screen-xl px-4 pb-8 mx-auto lg:pb-24 lg:px-6 ">
                            <h2 class="mb-6 text-3xl font-extrabold tracking-tight text-center text-red-800 lg:mb-8 lg:text-3xl">RECICLAGEM DE VIGILANTES</h2>
                            <p class="m-5 "><?php echo $documento2['description']; ?></p>
                            <div class="max-w-screen-md mx-auto mt-5">
                                <div id="accordion-flush" data-accordion="collapse" data-active-classes="text-gray-900" data-inactive-classes="text-gray-900">
                                    <h3 id="accordion-flush-heading-5">
                                        <button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-gray-900  border-b border-gray-200" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                                            <span>
                                            Aqui está a documentação obrigatória para sua matrícula no curso
                                            </span>
                                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </h3>
                                    <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                                        <div class="py-5 border-b border-gray-200">
                                            <p class="font-bold">
                                                <i class="bi bi-check"></i> Exame de Saúde Física e Mental; <br>
                                                <i class="bi bi-check"></i> Foto 3X4; <br>
                                                <i class="bi bi-check"></i> XEROX:
                                            </p>
                                            <p class="ml-10 mt-2">
                                                <i class="bi bi-arrow-right-short"></i> RG OU CNH; <br>
                                                <i class="bi bi-arrow-right-short"></i> Reservista; <br>
                                                <i class="bi bi-arrow-right-short"></i> Comprovante de Residência; <br>
                                                <i class="bi bi-arrow-right-short"></i> Comprovante de Escolaridade mínima correspondente a 4ª série do fundamental; <br>
                                                <i class="bi bi-arrow-right-short"></i> Comprovante Curso de Vigilante.
                                            </p><br><br>

                                            <p class="font-bold text-center">CERTIDÕES NEGATIVAS DE ANTECEDENTES CRIMINAIS</p> <br>
                                            <p class="text-center">1. Justiça Estadual - 1º Grau Criminal e Militar (Para alunos que residem no PI - <a href=https://www.tjpi.jus.br/portaltjpi/ class="font-bold ">www.tjpi.com.br</a>); <br>
                                                2. Certidões de Ações Penais e Militar Estadual (Para alunos que residem no MA <a href=https://www.tjma.jus.br/ class="font-bold">www.tjma.jus.br</a>); <br>
                                                3. Militar União - <a href=https://www.stm.jus.br/ class="font-bold">www.stm.jus.br/</a> <br>
                                                4. Justiça Federal - <a href=https://portal.trf1.jus.br/sjpi/ class="font-bold">www.jfpi.jus.br</a> <br>
                                                5. Justiça Eleitoral (Quitação e Criminal) - <a href=https://www.tse.jus.br/#/ class="font-bold">www.tse.gov.br</a></p> <br><br>

                                            <p style="color: #A20202;" class="font-semibold">OBS: O ALUNO DEVE TRAJAR CALÇA JEANS E SAPATO FECHADO. <br>
                                                E PARA AS AULAS DE EDUCAÇÃO FÍSICA E DEFESA PESSOAL ROUPAS DE ATIVIDADE FÍSICA.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php include "./components/footer.php" ?>
    <?php include "./components/modal_cursos.php" ?>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/lz.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>