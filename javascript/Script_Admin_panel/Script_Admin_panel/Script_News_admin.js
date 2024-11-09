// Función para convertir imagen a Base64
function getBase64(file) {
    return new Promise((resolve, reject) => {
        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = () => resolve(reader.result);
        reader.onerror = error => reject(error);
    });
}

// Previsualizar imagen seleccionada en el formulario principal
document.getElementById('image').addEventListener('change', async function(e) {
    const imagePreview = document.getElementById('imagePreview');
    if (e.target.files && e.target.files[0]) {
        const imageBase64 = await getBase64(e.target.files[0]);
        imagePreview.src = imageBase64;
        imagePreview.style.display = 'block';
    }
});

// Previsualizar imagen seleccionada en el formulario de edición
document.getElementById('edit-image').addEventListener('change', async function(e) {
    const imagePreview = document.getElementById('editImagePreview');
    if (e.target.files && e.target.files[0]) {
        const imageBase64 = await getBase64(e.target.files[0]);
        imagePreview.src = imageBase64;
        imagePreview.style.display = 'block';
    }
});

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
    document.getElementById('editImagePreview').src = item.image;
    document.getElementById('editImagePreview').style.display = 'block';
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

// Manejar envío del formulario principal
document.getElementById('newsForm').addEventListener('submit', async (e) => {
    e.preventDefault();
    
    const imageFile = document.getElementById('image').files[0];
    if (!imageFile) {
        alert('Por favor seleccione una imagen');
        return;
    }

    const imageBase64 = await getBase64(imageFile);

    const newNews = {
        title: document.getElementById('title').value,
        category: document.getElementById('category').value,
        image: imageBase64,
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
    document.getElementById('imagePreview').style.display = 'none';
    loadNews();
});

// Actualizar noticia
document.getElementById('editForm').addEventListener('submit', async (e) => {
    e.preventDefault();
    const index = parseInt(e.target.dataset.index);
    const news = JSON.parse(localStorage.getItem('news') || '[]');
    
    let imageBase64 = news[index].image; // Mantener la imagen existente por defecto
    const imageFile = document.getElementById('edit-image').files[0];
    if (imageFile) {
        imageBase64 = await getBase64(imageFile);
    }

    news[index] = {
        title: document.getElementById('edit-title').value,
        category: document.getElementById('edit-category').value,
        image: imageBase64,
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

// Cargar noticias al iniciar
loadNews();
