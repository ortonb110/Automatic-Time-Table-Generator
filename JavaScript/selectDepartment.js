let departmentName = document.getElementById("department-title");

let xmlHttp = new XMLHttpRequest();

function selectDepartmentDetails(idValue) {
    xmlHttp.onreadystatechange = function () {
        if(this.readyState===4 && this.status===200) {
            document.getElementById("departmentSection").innerHTML = this.responseText;
            selectCourseDetails(idValue);

        }
    }
    xmlHttp.open("GET", "./Php/dashboardGetSelectedDepartment.php?id="+idValue, true);
    xmlHttp.send();

}


function selectCourseDetails(idValue) {
    xmlHttp.onreadystatechange = function () {
        if(this.readyState===4 && this.status===200) {

            document.getElementById("courses").innerHTML = this.responseText;
        }
    }
    xmlHttp.open("GET", "./Php/dashboardGetSelectedCourses.php?id="+idValue, true);
    xmlHttp.send();

}


