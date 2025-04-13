document.addEventListener('DOMContentLoaded', () => {
    const passField = document.getElementById('exampleInputPassword1');
    const togglePass = document.getElementById('togglePass');
    togglePass.addEventListener('click', () => {
        if (passField.type === 'password' && passField.value !== '') {
            passField.type = 'text';
            togglePass.innerHTML = '<i class="bi bi-eye-slash"></i> Hide Password';
        }

        else {
            passField.type = 'password';
            togglePass.innerHTML = '<i class="bi bi-eye"></i> Show Password';
        }
    });

});
