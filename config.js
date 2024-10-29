// noticias index


// Índice atual da notícia visível
let noticiaIndex = 0;

// Função para navegar pelas notícias
function navegar(direcao) {
    // Pegando todas as notícias
    const noticias = document.querySelectorAll('.noticia');

    // Esconde a notícia atual
    noticias[noticiaIndex].classList.remove('ativa');

    // Atualiza o índice com a direção (esquerda -1 ou direita +1)
    noticiaIndex += direcao;

    // Mostra a nova notícia
    noticias[noticiaIndex].classList.add('ativa');

    // Desabilita o botão de navegação se estiver na primeira ou última notícia
    document.getElementById('btn-esquerda').disabled = noticiaIndex === 0;
    document.getElementById('btn-direita').disabled = noticiaIndex === noticias.length - 1;
}



// Pag aulas



//Transição de movimento
document.querySelectorAll('.banner2 a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const targetSection = document.querySelector(this.getAttribute('href'));
        targetSection.scrollIntoView({
            behavior: 'smooth'
        });
    });
});

//Fazer o vídeo redirecionar para a class "vídeo-principal"
const buttons = document.querySelectorAll('.play-button');

        buttons.forEach(button => {
            button.onclick = function () {
                const videoId = this.getAttribute('data-video-id');
                const iframe = document.getElementById('youtube-video');
                iframe.src = `https://www.youtube.com/embed/${videoId}`;
                document.getElementById('video-container').style.display = 'block';
            };
        });


        
//pag materiais


const books = [
    { title: "NODE.JS", element: document.querySelector('.livro:nth-child(1)') },
    { title: "Sistemas Operacionais", element: document.querySelector('.livro:nth-child(2)') },
    { title: "Programacão para iniciantes", element: document.querySelector('.livro:nth-child(3)') },
    { title: "Livro 4", element: document.querySelector('.livro:nth-child(4)') },
    { title: "Livro 5", element: document.querySelector('.livro:nth-child(5)') }
];

const searchInput = document.getElementById('search');
const suggestionsContainer = document.getElementById('suggestions');

searchInput.addEventListener('input', function () {
    const searchTerm = searchInput.value.toLowerCase();
    suggestionsContainer.innerHTML = ''; // Limpa as sugestões

    if (searchTerm) {
        const filteredBooks = books.filter(book => book.title.toLowerCase().includes(searchTerm));
        filteredBooks.forEach(book => {
            const suggestionItem = document.createElement('div');
            suggestionItem.textContent = book.title;
            suggestionItem.classList.add('suggestion-item');
            suggestionItem.onclick = function () {
                searchInput.value = book.title; // Preenche o campo de pesquisa
                suggestionsContainer.innerHTML = ''; // Limpa as sugestões
                filterBooks(book.title.toLowerCase()); // Filtra os livros
            };
            suggestionsContainer.appendChild(suggestionItem);
        });
    }
});

function filterBooks(searchTerm) {
    books.forEach(book => {
        if (book.title.toLowerCase().includes(searchTerm)) {
            book.element.style.display = 'block'; // Mostra o livro
        } else {
            book.element.style.display = 'none'; // Esconde o livro
        }
    });
}

document.getElementById('search-button').addEventListener('click', function () {
    filterBooks(searchInput.value.toLowerCase());
});

// Opcional: permite pesquisa ao pressionar "Enter"
searchInput.addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
        document.getElementById('search-button').click();
    }
});


// PAG REGISTRO


document.querySelector('form').addEventListener('submit', function (e) {
    var senha = document.getElementById('senha').value;
    var confirmarSenha = document.getElementById('confirmarSenha').value;

    if (senha !== confirmarSenha) {
        alert('As senhas não coincidem!');
        e.preventDefault();  // Impede o envio do formulário
    }
});