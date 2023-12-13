<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Contoh</title>
    <style>
        .password-container {
            display: none;
        }
    </style>
</head>
<body>

    <button id="editButton" onclick="toggleEditMode()">Edit</button>

    <form id="myForm">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required readonly><br>

        <label for="number_phone">Nomor Telepon:</label>
        <input type="tel" id="number_phone" name="number_phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required readonly>
        <small>Format: 123-456-7890</small><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required readonly><br>

        <label for="includePassword">Sertakan Password:</label>
        <input type="checkbox" id="includePassword" name="includePassword" onchange="togglePasswordInput()" disabled><br>

        <div class="password-container">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" readonly>
        </div>

        <br>

        <div id="submitButtonContainer" style="display: none">
            <input type="submit" value="Submit">
        </div>
    </form>

    <script>
        function toggleEditMode() {
            var editButton = document.getElementById('editButton');
            var formElements = document.getElementById('myForm').elements;
            var submitButtonContainer = document.getElementById('submitButtonContainer');
            var includePasswordCheckbox = document.getElementById('includePassword');

            for (var i = 0; i < formElements.length; i++) {
                formElements[i].readOnly = !formElements[i].readOnly;
            }
            
            var buttonText = editButton.innerHTML;
            editButton.innerHTML = (buttonText === 'Edit') ? 'Batal' : 'Edit';

            // Toggle the visibility of the submit button container
            submitButtonContainer.style.display = (submitButtonContainer.style.display === 'none' || submitButtonContainer.style.display === '') ? 'block' : 'none';

            // Enable/disable checkbox based on edit mode
            includePasswordCheckbox.disabled =!includePasswordCheckbox.disabled;

            // Reset password input state when exiting edit mode
            var passwordContainer = document.querySelector('.password-container');
            var passwordInput = document.getElementById('password');
            passwordContainer.style.display = 'none';
            passwordInput.required = false;
            passwordInput.value = '';

            // Reset checkbox state when exiting edit mode
            includePasswordCheckbox.checked = false;
        }



        function togglePasswordInput() {
            var passwordContainer = document.querySelector('.password-container');
            var includePasswordCheckbox = document.getElementById('includePassword');
            var passwordInput = document.getElementById('password');

            if (includePasswordCheckbox.checked) {
                passwordContainer.style.display = 'block';
                passwordInput.required = true;
            } else {
                passwordContainer.style.display = 'none';
                passwordInput.required = false;
            }
        }
    </script>

</body>
</html>
