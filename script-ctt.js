// Função para exibir as avaliações no carrossel
function displayAvaliacoes() {
    let avaliacoes = JSON.parse(localStorage.getItem("avaliacoes")) || [];
    const carouselSlide = document.getElementById("avaliacoes-carousel");

    if (avaliacoes.length === 0) {
        carouselSlide.innerHTML = "<p>Não há avaliações para mostrar no momento.</p>";
        return;
    }

    // Limpa o conteúdo existente
    carouselSlide.innerHTML = "";

    // Cria os cards de avaliação
    avaliacoes.forEach(function(avaliacao) {
        const avaliacaoDiv = document.createElement("div");
        avaliacaoDiv.classList.add("avaliacao");

        avaliacaoDiv.innerHTML = `
            <p><strong>Email:</strong> ${avaliacao.email}</p>
            <p><strong>Assunto:</strong> ${avaliacao.assunto}</p>
            <p><strong>Mensagem:</strong> ${avaliacao.mensagem}</p>
            <p><strong>Avaliação:</strong> ${'★'.repeat(avaliacao.avaliacao)}</p>
            <p><em>${avaliacao.data}</em></p>
        `;

        carouselSlide.appendChild(avaliacaoDiv);
    });

    // Inicializa o carrossel
    initializeCarousel();
}

// Função para inicializar o carrossel
function initializeCarousel() {
    const carouselSlide = document.querySelector('.carousel-slide');
    const carouselItems = document.querySelectorAll('.carousel-slide .avaliacao');
    const prevButton = document.querySelector('.prev-button');
    const nextButton = document.querySelector('.next-button');

    let counter = 0;
    const size = carouselItems[0].clientWidth;

    // Posiciona o primeiro item
    carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';

    // Event listeners para os botões
    nextButton.addEventListener('click', () => {
        if (counter >= carouselItems.length - 1) return;
        counter++;
        carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
        updateButtonsState(counter, carouselItems.length);
    });

    prevButton.addEventListener('click', () => {
        if (counter <= 0) return;
        counter--;
        carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
        updateButtonsState(counter, carouselItems.length);
    });

    // Atualiza o estado dos botões
    updateButtonsState(counter, carouselItems.length);
}

// Função para atualizar o estado dos botões (ativar/desativar)
function updateButtonsState(counter, totalItems) {
    const prevButton = document.querySelector('.prev-button');
    const nextButton = document.querySelector('.next-button');

    if (counter === 0) {
        prevButton.disabled = true;
        prevButton.style.opacity = "0.5";
    } else {
        prevButton.disabled = false;
        prevButton.style.opacity = "1";
    }

    if (counter === totalItems - 1) {
        nextButton.disabled = true;
        nextButton.style.opacity = "0.5";
    } else {
        nextButton.disabled = false;
        nextButton.style.opacity = "1";
    }
}

window.addEventListener("load", function() {
    if (document.getElementById("avaliacoes-carousel")) {
        displayAvaliacoes();
    }
});
