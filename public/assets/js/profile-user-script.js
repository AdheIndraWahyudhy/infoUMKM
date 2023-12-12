function togglePasswordField() {
    var passwordInput = document.getElementById("passwordInput");

    if (document.getElementById("togglePassword").checked) {
        // Jika checkbox diaktifkan, tampilkan input password
        passwordInput.style.display = "flex";
    } else {
        // Jika checkbox dinonaktifkan, sembunyikan input password
        passwordInput.style.display = "none";
    }
}

function toggleEdit() {
    // Mengambil elemen input dengan type text dan password
    var textInputs = document.querySelectorAll('input[type="text"]');
    var emailInput = document.querySelector('input[type="email"]');
    var passwordInput = document.querySelector('input[type="password"]');
    var editButton = document.getElementById('editButton');
    var submitButton = document.getElementById('submitButton');
    var buttonText = editButton.innerText;

    if (buttonText === 'Edit') {
        // Jika tombol berisi teks 'Edit'
        textInputs.forEach(function(textInput) {
            // Lakukan operasi yang Anda inginkan untuk setiap elemen input
            textInput.readOnly = false;
        });

        emailInput.readOnly = false;
        passwordInput.readOnly = false;
        editButton.innerText = 'Batal';
        editButton.classList.remove('btn-done');
        editButton.classList.add('btn-red');
        submitButton.style.display = 'block';            
        submitButton.style.display = 'block';
    } else {
        // Jika tombol berisi teks 'Batal'
        textInputs.forEach(function(textInput) {
            // Lakukan operasi yang Anda inginkan untuk setiap elemen input
            textInput.readOnly = true;
        });

        emailInput.readOnly = true;
        passwordInput.readOnly = true;
        editButton.innerText = 'Edit';
        editButton.classList.remove('btn-red');
        editButton.classList.add('btn-done');
        submitButton.style.display = 'none';
    }
}