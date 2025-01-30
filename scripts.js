$(function(){
    $('div.burger').click(function(){
        //O que vai acontecer ao clicar
        var listamenu = $('nav.navbar ul');
        /* if(listamenu.is(':hidden') == true)
        listamenu.fadeIn();
    else
        listamenu.fadeOut(); */
        listamenu.slideToggle();
    })
})


// Lista de fontes que serão alternadas
const fontes = [
  'Arial, sans-serif',
  '"Courier New", Courier, monospace',
  '"Georgia", serif',
  '"Lucida Console", Monaco, monospace',
  '"Tahoma", Geneva, sans-serif',
  '"Times New Roman", Times, serif',
  '"Verdana", Geneva, sans-serif'
];

// Cores alternadas para o texto (opcional)
const cores = ['#daa520'];

// Garante que o código seja executado após o carregamento do DOM
document.addEventListener('DOMContentLoaded', () => {
  const texto = document.querySelector('.texto');

  if (texto) {
    let indiceFonte = 0;

    // Função para alternar a fonte
    function alterarFonte() {
      texto.style.fontFamily = fontes[indiceFonte];
      texto.style.color = cores[indiceFonte];
      indiceFonte = (indiceFonte + 1) % fontes.length; // Alterna circularmente
    }

    // Configura o intervalo de 2 segundos
    setInterval(alterarFonte, 1000);
  } else {
    console.error('Elemento .texto não encontrado!');
  }
});

document.addEventListener('DOMContentLoaded', function () {
  const section = document.querySelector('.contribua-section');

  function onScroll() {
    const sectionTop = section.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;

    if (sectionTop < windowHeight - 100) {
      section.classList.add('visible');
      window.removeEventListener('scroll', onScroll); // Remove o evento após a exibição
    }
  }

  window.addEventListener('scroll', onScroll);
  onScroll(); // Verifica se a seção já está visível ao carregar a página
});

// Mostra ou esconde o botão "Voltar ao Topo" conforme a rolagem da página
window.onscroll = function() {
  const backToTopButton = document.querySelector('.back-to-top');
  
  // Se a página for rolada para baixo, o botão aparece
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    backToTopButton.classList.remove('hidden');
  } else {
    backToTopButton.classList.add('hidden');
  }
};


