function togglePassword() {
    const passwordField = document.getElementById('password');
    const visibilityIcon = document.getElementById('password-visibility').querySelector('i');
    
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        visibilityIcon.textContent = 'visibility';
    } else {
        passwordField.type = 'password';
        visibilityIcon.textContent = 'visibility_off';
    }
}
