const areaSlides = document.getElementById('areaSlide');

// Função para duplicar o conteúdo para a direita
function duplicateContentRight() {
    const children = areaSlides.children;
    const numChildren = children.length;
    const clones = [];

    // Clonar todos os elementos
    for (let i = 0; i < numChildren; i++) {
        const clone = children[i].cloneNode(true);
        clones.push(clone);
    }

    // Adicionar clones à direita
    for (let i = 0; i < clones.length; i++) {
        areaSlides.appendChild(clones[i]);
    }
}

// Função para duplicar o conteúdo para a esquerda
function duplicateContentLeft() {
    const children = areaSlides.children;
    const numChildren = children.length;
    const clones = [];

    // Clonar todos os elementos
    for (let i = 0; i < numChildren; i++) {
        const clone = children[i].cloneNode(true);
        clones.push(clone);
    }

    // Adicionar clones à esquerda
    for (let i = clones.length - 1; i >= 0; i--) {
        areaSlides.insertBefore(clones[i], children[0]);
    }
}

// Função para centralizar a barra de rolagem
function centerScroll() {
    const totalWidth = areaSlides.scrollWidth;
    const visibleWidth = areaSlides.clientWidth;
    areaSlides.scrollLeft = (totalWidth - visibleWidth) / 2;
}

// Função para verificar a posição da rolagem e duplicar o conteúdo conforme necessário
function checkScroll() {
    const totalWidth = areaSlides.scrollWidth;
    const visibleWidth = areaSlides.clientWidth;

    // Se o usuário rolar para o final da direita, duplicar o conteúdo à direita
    if (areaSlides.scrollLeft + visibleWidth >= totalWidth - 1) {
        duplicateContentRight();
    }

    // Se o usuário rolar para o início da esquerda, duplicar o conteúdo à esquerda
    if (areaSlides.scrollLeft <= 0) {
        duplicateContentLeft();
        // Reajustar a posição da rolagem para manter a continuidade
        areaSlides.scrollLeft = areaSlides.scrollLeft + areaSlides.scrollWidth / 2;
    }
}

// Chamando as funções para duplicar o conteúdo tanto para a direita quanto para a esquerda
duplicateContentRight();
duplicateContentLeft();

// Centralizando a barra de rolagem após a duplicação
centerScroll();

// Adicionar evento de rolagem para verificar a posição
areaSlides.addEventListener('scroll', checkScroll);