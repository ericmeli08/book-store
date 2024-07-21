

// function $(e) {
//     return document.getElementById(e);
// }
// let displayform = $('displayForm');
// let forlogin = $('forLogin');
// let loginForm = $('loginForm');
// let forRegister = $('forRegister');
// let registerForm = $('registerForm');
// let formContainer = $('formContainer');
// displayform.addEventListener('click', showForm);

// forlogin.addEventListener('click', (e) => {
//     e.preventDefault;
//     forRegister.classList.remove('active');
//     forlogin.classList.add('active');
//     if (loginForm.classList.contains('toggleForm')) {
//         formContainer.style.transform = 'translate(0%)';
//         formContainer.style.transition = 'transform .5s';
//         loginForm.classList.remove('toggleForm');
//         registerForm.classList.add('toggleForm');
//     }
// });

// forRegister.addEventListener('click', (e) => {
//     e.preventDefault;
//     forlogin.classList.remove('active');
//     forRegister.classList.add('active');
//     if (registerForm.classList.contains('toggleForm')) {
//         formContainer.style.transform = 'translate(-100%)';
//         formContainer.style.transition = 'transform .5s';
//         registerForm.classList.remove('toggleForm');
//         loginForm.classList.add('toggleForm');
//     }
// });

// function showForm() {
//     document.querySelector('.formWrapper .card').classList.toggle('show');
// }