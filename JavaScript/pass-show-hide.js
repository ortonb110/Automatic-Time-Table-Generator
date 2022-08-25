const showPass = document.querySelector(".form-items input[name='password']");
btnShowPassToggle = document.querySelector(
  "form .form-items .form-list .just-wrap"
);
const eyeIcon = document.querySelector("form .form-items .form-list i");
const text = document.querySelector("form .form-items .form-list .cursor");

// if(showPass.type == "password") {
//     showPass.type = "text";
// } else {
//     showPass.type = "password";
// }

btnShowPassToggle.onclick = () => {
  if (showPass.type === "password") {
    showPass.type = "text";
    eyeIcon.classList.add("active");
    text.textContent = "Hide";
  } else {
    showPass.type = "password";
    eyeIcon.classList.remove("active");
    text.textContent = "Show";
  }
};
