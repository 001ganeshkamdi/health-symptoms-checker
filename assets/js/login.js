// Login functionality
document.addEventListener('DOMContentLoaded', function() {
    // Add login form validation and handling here
    const loginForm = document.querySelector('form');
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            const email = document.querySelector('input[type="email"]');
            const password = document.querySelector('input[type="password"]');
            
            if (!email.value || !password.value) {
                e.preventDefault();
                alert('Please fill in all fields');
                return false;
            }
        });
    }
});