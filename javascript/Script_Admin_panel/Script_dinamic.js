/* Añade esto al final de tu archivo JavaScript */
function showEditForm() {
    const newsForm = document.querySelector('.news-form');
    const editForm = document.querySelector('.edit-form');
    
    newsForm.classList.add('hidden');
    editForm.classList.add('show');
}

function hideEditForm() {
    const newsForm = document.querySelector('.news-form');
    const editForm = document.querySelector('.edit-form');
    
    newsForm.classList.remove('hidden');
    editForm.classList.remove('show');
}