const nameInput = document.querySelector('#name');
const emailInput = document.querySelector('#email')
const passwordInput = document.querySelector('#password');
const cpasswordInput = document.querySelector('#cpassword');
const submitButton = document.querySelector('#btn_enviar');
const errorMessage = document.querySelector('.msg');

const nomeRegex = /[A-Z][a-z]* [A-Z][a-z]*/;
const emailRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.);+[a-zA-Z]{2,}))$/;