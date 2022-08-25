const form = document.querySelector("section form");
const errorText = document.querySelector("section .wrapper .error-text p");
const errorTextBox = document.querySelector("section .wrapper .error-text");
btnReset = form.querySelector("button");
const login = document.querySelector(".form-group .login");
const passField = document.getElementById("password");

form.onsubmit =(e)=> {
    e.preventDefault();
}

btnReset.onclick = () => {
    let dataRequest = new XMLHttpRequest;
    dataRequest.open("POST", "./Php/reset.php");
    dataRequest.onload = () => {
        if (dataRequest.readyState === XMLHttpRequest.DONE) {
            if (dataRequest.status === 200) {
                let data = dataRequest.response
                if (data === "success") {
                    errorText.textContent = "Password reset successful";
                    errorText.style.color = "#fff";
                    errorTextBox.style.backgroundColor = "#059862";
                    errorTextBox.style.display = "block";
                    login.style.display = "block";
                    passField.value = "";
                } else {
                    errorText.textContent = data;
                    errorTextBox.style.display = "block";
                    passField.value = "";
                }
            }
        }
    }

    let formData  = new FormData(form);
    dataRequest.send(formData);

}