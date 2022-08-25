const form = document.querySelector("section form");
const errorText = document.querySelector("section .wrapper header .error-text p");
const errortextBox = document.querySelector("section .wrapper header .error-text");
btnVerify = form.querySelector("button");

form.onsubmit =(e) => {
    e.preventDefault();
}

btnVerify.onclick = () => {
    let request = new XMLHttpRequest;
    request.open("POST", "./Php/email.php", true);
    request.onload = () => {
        if (request.readyState === XMLHttpRequest.DONE) {
            if (request.status === 200) {
                let data = request.response;
                if (data === "success") {
                    location.href = "./resetPassword.php";
                } else  {
                    errorText.textContent = data;
                    errortextBox.style.display = "block";
                }
            }
        }
    }

    let formData = new FormData(form);
    request.send(formData);

}