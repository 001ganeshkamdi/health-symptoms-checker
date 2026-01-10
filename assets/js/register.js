// Registration functionality
document.addEventListener('DOMContentLoaded', function() {
    // Add registration form validation and handling here
    const registerForm = document.querySelector('form');
    if (registerForm) {
        registerForm.addEventListener('submit', function(e) {
            const password = document.querySelector('input[name="password"]');
            const confirmPassword = document.querySelector('input[name="confirm-password"]');
            
            if (password && confirmPassword) {
                if (password.value !== confirmPassword.value) {
                    e.preventDefault();
                    alert('Passwords do not match');
                    return false;
                }
            }
            
            // Basic form validation
            const requiredFields = document.querySelectorAll('input[required]');
            for (let field of requiredFields) {
                if (!field.value.trim()) {
                    e.preventDefault();
                    alert('Please fill in all required fields');
                    return false;
                }
            }
        });
    }
});