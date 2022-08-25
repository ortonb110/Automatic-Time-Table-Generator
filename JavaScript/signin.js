const form = document.querySelector(".wrapper form");
const errorTextBox = document.querySelector(".wrapper header .error-text");
const errorText = document.querySelector(".wrapper header .error-text p");
btnLogin = form.querySelector("button");

form.onsubmit = (e) => {
    e.preventDefault();
}

btnLogin.onclick = () => {
    let request = new XMLHttpRequest;
    request.open("POST", "./Php/signin.php", true);
    request.onload = () => {
        if (request.readyState === XMLHttpRequest.DONE) {
            if (request.status === 200) {
                let data = request.response;
                if (data === "success") {
                    location.href = "./dashboard.php";
                } else {
                    errorText.textContent = data;
                    errorTextBox.style.display = "block";
                }
            }
        }
    }


    let formData  = new FormData(form);
    request.send(formData);

}