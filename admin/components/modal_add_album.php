<div id="addAlbumModal" tabindex="-1" aria-hidden="true" class="fixed z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
  <div class="relative w-full h-full max-w-7xl md:h-auto">
    <!-- Modal content -->
    <form action="./controllers/add_album.php" method="post" enctype="multipart/form-data" class="relative bg-white rounded-lg shadow">
      <!-- Modal header -->
      <div class="flex items-start justify-between p-4 border-b rounded-t">
        <h3 class="text-xl font-semibold text-gray-900">
          Adicionar Álbum
        </h3>
        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="addAlbumModal">
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <!-- Modal body -->
      <div class="p-6 space-y-6">
        <div class="grid grid-cols-6 gap-6">
          <div class="col-span-6 sm:col-span-3">
            <label class="block text-sm font-medium text-gray-900">Nome do Albúm</label>
            <input type="text" name="name" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full" placeholder="Coloque um nome para o Álbum" required="">
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label class="block text-sm font-medium text-gray-900">Imagem Capa</label>
            <input type="file" id="img" name="img">
            <input type="hidden" name="categorie_id">
          </div>
        </div>
        <div class="col-span-6 sm:col-span-3">
          <label for="categoria" class="block text-sm font-medium text-gray-900">Categorias do Album</label>
          <select class="uppercase shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2" name="categorie_id">
            <?php foreach ($categories as $categorie) { ?>
              <option value="<?php echo $categorie['id']; ?>"><?php echo $categorie['name']; ?></option>
            <?php } ?>
          </select>
          <a href="categorias.php" class="text-sm font-medium text-gray-700"><i class="bi bi-plus-circle"></i> Adicionar Categoria</a>
        </div>
        <label class="block text-sm font-medium text-gray-900">Imagens</label>
        <input type="file" name="imagens[]" multiple>

        <div class="flex items-center">
          <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Cadastrar Álbum</button>
        </div>
    </form>
  </div>
</div>