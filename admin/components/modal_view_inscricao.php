<div id="modal" class="modal fixed w-full h-full top-0 left-0 flex items-center justify-center hidden z-50">
  <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
  <div class="modal-container overflow-auto max-h-[80vh] bg-white w-11/12 mx-auto rounded shadow-lg z-50 overflow-y-auto">
    <div class="modal-content py-4 text-left px-6">
      <div class="flex justify-end items-center pb-3">
        <div class="modal-close cursor-pointer z-50">
          <svg class="fill-current text-black modal-close" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
            <path d="M18 1.5L16.5 0 9 7.5 1.5 0 0 1.5 7.5 9 0 16.5 1.5 18 9 10.5 16.5 18 18 16.5 10.5 9z" />
          </svg>
        </div>
      </div>
      <form action="./controllers/edit_inscricao.php" method="POST" class="relative bg-white rounded-lg shadow">

        <!-- Modal body -->
        <div class="p-6 space-y-6">
          <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
              <label class="block mb-2 text-sm font-medium text-gray-900">Nome</label>
              <h3 id="nome" class=" bg-gray-50 h-10  text-gray-900 text-sm rounded-lg block w-full p-2.5"></h3>
              <input name="nome" id="nome2" type="text" value="" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="Nome do inscrito" required="">
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900">CPF</label>
              <h3 id="cpf" class="bg-gray-50 h-10  text-gray-900 text-sm rounded-lg block w-full p-2.5"></h3>
              <input name="cpf" id="cpf2" type="text" value="" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="CPF do inscrito" required="">
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900">Curso</label>
              <h3 id="curso" class=" bg-gray-50 h-10  text-gray-900 text-sm rounded-lg block w-full p-2.5"></h3>
              <input name="curso" id="curso2" type="text" value="" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="Curso desejado pelo inscrito" required="">
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900">Status atual</label>
              <h3 id="status" class="font-bold bg-gray-50 h-10  text-gray-900 text-sm rounded-lg block w-full p-2.5"></h3>
              <select class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" name="status">
                <option value="PENDENTE">PENDENTE</option>
                <option value="PAGO">PAGO</option>
                <option value="NÃO VAI">NÃO VAI</option>
              </select>
            </div>
            <input id="id2" name="id" type="hidden" value="">
          </div>
          <!-- Modal footer -->
          <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
            <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Editar</button>
          </div>
      </form>

    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  const modal = document.querySelector('#modal');
  const closeButton = document.querySelector('.modal-close');

  closeButton.addEventListener('click', () => {
    modal.remove();
  });

  const btnsAbrirModal = document.querySelectorAll(".btnAbrirModal");
  const valorParametro = document.getElementById("valorParametro");

  btnsAbrirModal.forEach(function(btn) {
    btn.addEventListener("click", function() {
      const parametro = JSON.parse(this.getAttribute("data-parametro"));
      console.log(parametro);
      document.getElementById('nome').innerText = parametro.nome
      document.getElementById('nome2').value = parametro.nome
      document.getElementById('cpf').innerText = parametro.cpf
      document.getElementById('cpf2').value = parametro.cpf
      document.getElementById('curso').innerText = parametro.curso
      document.getElementById('curso2').value = parametro.curso
      document.getElementById('id2').value = parametro.id
      document.getElementById('status').innerText = parametro.status
      modal.style.display = "flex";
      document.body.appendChild(modal);

    });
  });

  const fecharModal = function() {
    modal.style.display = "none";
  };

  modal.addEventListener("click", function(event) {
    const target = event.target;
    if (target.classList.contains("modal-overlay") || target.classList.contains("modal-close")) {
      fecharModal();
    }
  });

  document.addEventListener("keydown", function(event) {
    if (event.key === "Escape") {
      fecharModal();
    }
  });
</script>