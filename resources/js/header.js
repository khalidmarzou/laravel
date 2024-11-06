function toggleMenu() {
    document.getElementById('menu').classList.toggle('translate-x-full');
    document.getElementById('menuBackdrop').classList.toggle('hidden');
}

function changeLanguage(language) {
    fetch(`/change-language/${language}`)
        .then(response => location.reload())
        .catch(error => console.error('Error changing language:', error));
}

function openDonateModal() {
    // Open modal logic here
}
