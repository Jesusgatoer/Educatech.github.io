// scripts.js
document.getElementById('ayudaBtn').addEventListener('click', function() {
    document.getElementById('modalAyuda').style.display = 'flex';
});

document.getElementById('closeModal').addEventListener('click', function() {
    document.getElementById('modalAyuda').style.display = 'none';
});

window.addEventListener('click', function(event) {
    const modal = document.getElementById('modalAyuda');
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});