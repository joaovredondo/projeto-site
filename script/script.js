const form = document.querySelector("#form");
const buttonSubmit = document.querySelector("#btn_enviar");
const nameInput = document.querySelector("#name");
const emailInput = document.querySelector("#email");
const passwordInput = document.querySelector("#password");
const cpasswordInput = document.querySelector("#cpassword");
const msgError = document.querySelector(".msg");
const regexNomeNum = '[0-9]';
const regexNome = '[a-zA-Zà-úÀ-Ú\s]';
const regexEmail = '^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+).(\.[a-z]{2,3})$';
const regexEspeciais = '[@!#$%^&*()/\]';

function enviaFormulario() {
    validaCampos();

    if (validaCampos()) {
        buttonSubmit.setAttribute("type", "submit");
    }
}

function validaCampos() {

    const nameValue = String(nameInput.value.trim());
    const emailValue = String(emailInput.value.trim());
    const passwordValue = String(passwordInput.value.trim());
    const cpasswordValue = String(cpasswordInput.value.trim());

    if (nameValue == '' || emailValue == '' || passwordValue == '' || cpasswordValue == '') {
        msgError.textContent = 'Preencha todos os campos.';
        msgError.classList.add("error");
        return false;
    } else if (nameValue.length < 5) {
        msgError.textContent = 'Preencha o campo nome corretamente.';
        msgError.classList.add("error");
        return false;
    } else if (nameValue.match(regexNomeNum)) {
        msgError.textContent = 'Campo nome não pode conter caracteres numéricos.';
        msgError.classList.add("error");
        return false;
    } else if (!emailValue.match(regexEmail)) {
        msgError.textContent = 'Preencha o campo E-mail corretamente.'
    } else if (emailValue.length <= 11) {
        msgError.textContent = 'Preencha o campo e-mail corretamente.';
        msgError.classList.add("error");
        return false;
    } else if (passwordValue.length < 8) {
        msgError.textContent = 'Senha: mínimo 8 caracteres.';
        msgError.classList.add("error");
        return false;
    } else if (!passwordValue.match(regexNomeNum)) {
        msgError.textContent = 'Senha: necessário 1 caractere numérico.';
        msgError.classList.add("error");
        return false;
    } else if (!passwordValue.match(regexEspeciais)) {
        msgError.textContent = 'Senha: necessário 1 caractere especial.';
        msgError.classList.add("error");
        return false;
    } else if (cpasswordValue != passwordValue) {
        msgError.textContent = 'As senhas não coincidem, verifique.';
        msgError.classList.add("error");
        return false;
    } else {
        msgError.textContent = '';
        msgError.classList.remove("error");
        return true;
    }
}