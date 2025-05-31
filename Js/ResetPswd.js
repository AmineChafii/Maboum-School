function CheckPassword() {
    var password = document.getElementById("mdp").value;
    var confirmPassword = document.getElementById("mdp1").value;
    if (password != confirmPassword) {
        document.getElementById("error-msg").innerText = "Les mots de passe ne correspondent pas.";
        document.getElementById("error-msg").scrollIntoView({ behavior: 'smooth', block: 'center' });
        return false; 
    }
    return true;
}