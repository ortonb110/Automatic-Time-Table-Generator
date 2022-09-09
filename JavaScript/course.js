let table = document.getElementById("tableBody");
submitBtn = document.getElementById("submitBtn");

const form = document.getElementById("addCourseForm");
form.onsubmit =(e)=> {
    e.preventDefault();
}

setTimeout(function () {
    let xmlHttp = new XMLHttpRequest();

    xmlHttp.onload = function () {
        if(this.readyState===4 && this.status===200) {
            table.innerHTML = this.responseText;
        } else {
            alert("There was a problem loading courses!");
        }
    }
    xmlHttp.open("GET", "../Php/course.php", true);
    xmlHttp.send();
}, 100);


submitBtn.onclick = () => {
    console.log("Clicked!!");
    let xmlHttp = new XMLHttpRequest;
    xmlHttp.open("POST", "../Php/addCourse.php", true);
    xmlHttp.onload = () => {
        if (xmlHttp.readyState === XMLHttpRequest.DONE) {
            if (xmlHttp.status === 200) {
                let data = xmlHttp.response;
                if (data === "success") {
                    alert("Added to Courses");
                    location.href = "../dashboardfiles/course.php";
                } else {
                    alert(data);
                }
            }
        }
    }

    let formData  = new FormData(form);
    xmlHttp.send(formData);

}