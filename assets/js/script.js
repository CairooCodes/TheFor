let theme_toggler = document.querySelector('#theme_toggler');

theme_toggler.addEventListener('click', function(){ 
    document.body.classList.toggle('dark_mode');
  if(document.body.classList.contains('dark_mode')){
 localStorage.setItem('apcef_theme','dark_mode');
  }else{
    localStorage.setItem('apcef_theme','default');
  }
});

function retrieve_theme(){
  var theme = localStorage.getItem('apcef_theme');
  if(theme != null){
 document.body.classList.remove('default', 'dark_mode'); document.body.classList.add(theme);
  }
}

retrieve_theme();

window.addEventListener("storage",function(){
retrieve_theme();
},false);

// Abrir o modal ao clicar em um botão "Abrir Modal"
const openModalButtons = document.querySelectorAll(".openModalBtn");
openModalButtons.forEach(function(button) {
    button.addEventListener("click", function() {
        const modalId = this.getAttribute("data-modal");
        const modal = document.getElementById(modalId);
        modal.style.display = "block";
    });
});

// Fechar o modal ao clicar no botão de fechar (X)
const closeButtons = document.querySelectorAll(".close");
closeButtons.forEach(function(button) {
    button.addEventListener("click", function() {
        const modal = this.closest(".modal");
        modal.style.display = "none";
    });
});

// Fechar o modal ao clicar fora do conteúdo do modal
window.addEventListener("click", function(event) {
    const modals = document.querySelectorAll(".modal");
    modals.forEach(function(modal) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    });
});
