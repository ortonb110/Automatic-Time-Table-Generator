let table = document.getElementById("tableBody");

setTimeout(function () {
    let xmlHttp = new XMLHttpRequest();

    xmlHttp.onload = function () {
        if(this.readyState===4 && this.status===200) {
            table.innerHTML = this.responseText;
        } else {
            alert("There was a problem loading courses!");
        }
        console.log("running");
    }
    xmlHttp.open("GET", "../Php/course.php", true);
    xmlHttp.send();
}, 1000);