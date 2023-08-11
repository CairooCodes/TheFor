<aside class="ml-[-100%] fixed z-10 top-0 pb-3 px-6 w-full flex flex-col justify-between h-screen transition duration-300 md:w-4/12 lg:ml-0 lg:w-[25%] xl:w-[20%] 2xl:w-[15%] border border-gray-200">
  <div>
    <div class="px-6 flex justify-center">
      <a href="#" title="home">
        <img class="w-full p-3" src="../assets/img/logo.png">
      </a>
    </div>
    <ul class="space-y-2 tracking-wide mt-2">
      <li>
        <a href="dashboard.php" aria-label="dashboard" class="relative px-3 py-2 flex items-center space-x-3 rounded-xl <?php if ($page == 'dash') {
          echo 'bg-blue-800 text-white';
          } ?>">
          <svg class="-ml-1 h-6 w-6" viewBox="0 0 24 24" fill="none">
            <path d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z" class="fill-current text-cyan-400 dark:fill-slate-600"></path>
            <path d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z" class="fill-current text-cyan-200"></path>
            <path d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z" class="fill-current group-hover:text-sky-300"></path>
          </svg>
          <span class="-mr-1 font-medium">Pré-Inscrições</span>
        </a>
      </li>
      <li>
        <a href="banners.php" class="px-3 py-2 flex items-center space-x-3 rounded-md text-gray-800 group 
        <?php if ($page == 'banners') {
            echo 'bg-blue-800 text-white';
          } ?>">
          <i class="bi bi-image-alt"></i>
          <span class="group-hover:text-gray-700">Banners</span>
        </a>
      </li>
      <li>
      <a href="quem_somos.php?id=1" class="px-3 py-2 flex items-center space-x-3 rounded-md text-gray-800 group <?php if ($page=='quemsomos') { echo 'bg-blue-800 text-white';} ?>">
          <i class="bi bi-people-fill"></i>
          <span class="group-hover:text-gray-700">Quem somos</span>
        </a>
      </li>
      <li>
        <a href="leads.php" class="px-3 py-2 flex items-center space-x-3 rounded-md text-gray-800 group 
        <?php if ($page == 'leads') {
          echo 'bg-blue-800 text-white';
          } ?>">
          <i class="bi bi-list"></i>
          <span class="group-hover:text-gray-700">Leads</span>
        </a>
      </li>
      <li>
        <a href="curso.php" class="px-3 py-2 flex items-center space-x-3 rounded-md text-gray-800 group 
        <?php if ($page == 'cursos') {
          echo 'bg-blue-800 text-white';
          } ?>">
          <i class="bi bi-mortarboard-fill"></i>
          <span class="group-hover:text-gray-700">Cursos</span>
        </a>
      </li>
      <li>
        <a href="albuns.php" class="px-3 py-2 flex items-center space-x-3 rounded-md text-gray-800 group 
        <?php if ($page == 'albuns') {
          echo 'bg-blue-800 text-white';
        } ?>">
          <i class="bi bi-images"></i>
          <span class="group-hover:text-gray-700">Fotos</span>
        </a>
      </li>
      <li>
        <a href="noticia.php" class="px-3 py-2 flex items-center space-x-3 rounded-md text-gray-800 group 
        <?php if ($page == 'noticias') {
           echo 'bg-blue-800 text-white';
          } ?>">
          <i class="bi bi-journal-richtext"></i>
          <span class="group-hover:text-gray-700">Notícias</span>
        </a>
      </li>
      <li>
        <a href="noticia.php" class="px-3 py-2 flex items-center space-x-3 rounded-md text-gray-800 group 
        <?php if ($page == 'documentacoes') {
           echo 'bg-blue-800 text-white';
          } ?>">
          <i class="bi bi-file-earmark-zip-fill"></i>
          <span class="group-hover:text-gray-700">Documentação</span>
        </a>
      </li>
      <li>
        <a href="instalacao.php" class="px-3 py-2 flex items-center space-x-3 rounded-md text-gray-800 group 
        <?php if ($page == 'instalacoes') {
            echo 'bg-blue-800 text-white';
          } ?>">
          <i class="bi bi-houses-fill"></i>
          <span class="group-hover:text-gray-700">Instalações</span>
        </a>
      </li>
      <li>
        <a href="unidade.php" class="px-3 py-2 flex items-center space-x-3 rounded-md text-gray-800 group 
        <?php if ($page == 'unidades') {
          echo 'bg-blue-800 text-white';
        } ?>">
          <i class="bi bi-buildings"></i>
          <span class="group-hover:text-gray-700">Unidades</span>
        </a>
      </li>
    </ul>
  </div>

  <div class="px-6 -mx-6 pt-4 flex justify-between items-center border-t">
    <a href="../admin/controllers/logout.php">
      <button class="px-3 py-2 flex items-center space-x-3 rounded-md text-gray-800 group">
        <i class="bi bi-box-arrow-left"></i>
        <span class="group-hover:text-gray-700">Logout</span>
      </button>
    </a>
  </div>
</aside>