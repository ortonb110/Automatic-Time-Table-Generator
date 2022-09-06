const form =  document.querySelector(".modal .modal-body form");
submitBtn =document.getElementById("submitBtn");

    form.onsubmit =(e)=>{
    e.preventDefault();
}

submitBtn.onclick = () => {
    console.log("Clicked!!");
    let request = new XMLHttpRequest;
    request.open("POST", "./Php/dashboard.php", true);
    request.onload = () => {
        if (request.readyState === XMLHttpRequest.DONE) {
            if (request.status === 200) {
                let data = request.response;
                if (data === "success") {
                    alert("Added to Departments");
                    location.href = "./dashboard.php";
                } else {
                    alert("Failed");
                }
            }
        }
    }

    let formData  = new FormData(form);
    request.send(formData);

}