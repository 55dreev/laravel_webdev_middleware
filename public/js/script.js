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