// Cargar noticias existentes
function loadNews() {
    const news = JSON.parse(localStorage.getItem('news') || '[]');
    const newsContainer = document.getElementById('newsContainer');
    newsContainer.innerHTML = '';

    news.forEach((item, index) => {
        const article = document.createElement('article');
        article.className = 'news-card';
        article.innerHTML = `
            <img src="${item.image}" alt="${item.title}" class="news-image">
            <div class="news-content">
                <span class="news-category">${item.category}</span>
                <h2 class="news-title">${item.title}</h2>
                <p class="news-excerpt">${item.excerpt}</p>
                <div class="news-meta">
                    <span>Por ${item.author}</span>
                    <span>${item.date} - ${item.time}</span>
                </div>
                <div class="news-credits">
                    Imagen: ${item.credits}
                </div>
                <button class="edit-btn" onclick="showEditForm(${index})">Editar</button>
                <button class="delete-btn" onclick="deleteNews(${index})">Eliminar</button>
            </div>
        `;
        newsContainer.appendChild(article);
    });
}

// Mostrar formulario de edición
function showEditForm(index) {
    const news = JSON.parse(localStorage.getItem('news') || '[]');
    const editForm = document.getElementById('editForm');
    const item = news[index];

    document.getElementById('edit-title').value = item.title;
    document.getElementById('edit-category').value = item.category;
    document.getElementById('edit-image').value = item.image;
    document.getElementById('edit-excerpt').value = item.excerpt;
    document.getElementById('edit-author').value = item.author;
    document.getElementById('edit-date').value = item.date;
    document.getElementById('edit-time').value = item.time;
    document.getElementById('edit-credits').value = item.credits;

    editForm.dataset.index = index;
    editForm.classList.add('show');
}

// Ocultar formulario de edición
function hideEditForm() {
    const editForm = document.getElementById('editForm');
    editForm.classList.remove('show');
}

// Actualizar noticia
document.getElementById('editForm').addEventListener('submit', (e) => {
    e.preventDefault();
    const index = parseInt(e.target.dataset.index);
    const news = JSON.parse(localStorage.getItem('news') || '[]');

    news[index] = {
        title: document.getElementById('edit-title').value,
        category: document.getElementById('edit-category').value,
        image: document.getElementById('edit-image').value,
        excerpt: document.getElementById('edit-excerpt').value,
        author: document.getElementById('edit-author').value,
        date: document.getElementById('edit-date').value,
        time: document.getElementById('edit-time').value,
        credits: document.getElementById('edit-credits').value
    };

    localStorage.setItem('news', JSON.stringify(news));
    hideEditForm();
    loadNews();
});

// Eliminar noticia
function deleteNews(index) {
    const news = JSON.parse(localStorage.getItem('news') || '[]');
    news.splice(index, 1);
    localStorage.setItem('news', JSON.stringify(news));
    loadNews();
}

// Manejar envío del formulario
document.getElementById('newsForm').addEventListener('submit', (e) => {
    e.preventDefault();

    const newNews = {
        title: document.getElementById('title').value,
        category: document.getElementById('category').value,
        image: document.getElementById('image').value,
        excerpt: document.getElementById('excerpt').value,
        author: document.getElementById('author').value,
        date: new Date().toLocaleDateString(),
        time: new Date().toLocaleTimeString(),
        credits: ''
    };

    const news = JSON.parse(localStorage.getItem('news') || '[]');
    news.unshift(newNews);
    localStorage.setItem('news', JSON.stringify(news));

    document.getElementById('newsForm').reset();
    loadNews();
});

// Cargar noticias al iniciar
loadNews();