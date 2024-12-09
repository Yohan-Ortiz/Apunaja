function loadNews() {
    const news = JSON.parse(localStorage.getItem('news') || '[]');
    const newsContainer = document.getElementById('newsContainer');
    newsContainer.innerHTML = '';
  
    const imageCarousel = document.getElementById('imageCarousel');
    imageCarousel.innerHTML = '';
  
    news.forEach(item => {
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
        </div>
      `;
      newsContainer.appendChild(article);
  
      const slide = document.createElement('div');
      slide.className = 'swiper-slide';
      slide.innerHTML = `
        <img src="${item.image}" alt="${item.title}" class="news-image">
        <img src="${item.image2}" alt="${item.title}" class="news-image">
        <img src="${item.image3}" alt="${item.title}" class="news-image">
        <!-- Agrega más imágenes aquí si las tienes -->
      `;
      imageCarousel.appendChild(slide);
    });
  
    const swiper = new Swiper('.swiper', {
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  }
  
  // Cargar noticias al iniciar
  loadNews();