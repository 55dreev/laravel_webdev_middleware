function togglePassword() {
    var password = document.getElementById("password");
    var confirmPassword = document.getElementById("password_confirmation");

    // Toggle password visibility
    if (password.type === "password") {
        password.type = "text";
        confirmPassword.type = "text";
    } else {
        password.type = "password";
        confirmPassword.type = "password";
    }
}

document.querySelector('form').addEventListener('submit', function(e) {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    if (password !== confirmPassword) {
        e.preventDefault(); // Prevent the form from submitting
        document.getElementById('password-error').classList.add('show'); // Show the error message
    } else {
        document.getElementById('password-error').classList.remove('show'); // Hide the error message
    }
});
