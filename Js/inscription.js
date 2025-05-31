document.getElementById('autre').addEventListener('change', function() {
    var autreMatiereInput = document.getElementById('autreMatiereInput');
    if (this.checked) {
        autreMatiereInput.classList.remove('hidden');
    } else {
        autreMatiereInput.classList.add('hidden');
    }
});

function CheckPassword() {
    var password = document.getElementById("motdepasse").value;
    var confirmPassword = document.getElementById("cmotdepasse").value;
    if (password != confirmPassword) {
        document.getElementById("error-msg").innerText = "Les mots de passe ne correspondent pas.";
        document.getElementById("error-msg").scrollIntoView({ behavior: 'smooth', block: 'center' });
        return false; 
    }
    return true;
}


function CheckEmail(event) {
    var email = $('#email').val();
    $.ajax({
        url: '../src/traitementinscription.php',
        method: 'POST',
        data: {email: email},
        success: function(response) {
            if (response === 'exists') {
                $('#emailError').text('L\'adresse e-mail existe déjà.');
                document.getElementById("emailError").scrollIntoView({ behavior: 'smooth', block: 'center' });
            } else {
                $('#emailError').text('');
                $('form').unbind('submit').submit(); 
            }
        }
    });
    return false;
}

