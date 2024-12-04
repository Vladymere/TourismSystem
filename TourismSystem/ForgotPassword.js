const forgotPasswordLink = document.getElementById('forgot-password-link');
const forgotPasswordPopup = document.getElementById('forgot-password-popup');
const closeButton = document.querySelector('.close-button');

forgotPasswordLink.addEventListener('click', function(event) {
    event.preventDefault();
    forgotPasswordPopup.style.display = 'block';
});

closeButton.addEventListener('click', function() {
    forgotPasswordPopup.style.display = 'none';
});

window.addEventListener('click', function(event) {
    if (event.target == forgotPasswordPopup) {
        forgotPasswordPopup.style.display = 'none';
    }
});