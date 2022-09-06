let departmentName = document.getElementById("department-title");



function selectDepartmentDetails(idValue) {
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function () {
        if(this.readyState===4 && this.status===200) {

            document.getElementById("departmentSection").innerHTML = this.responseText;
        }
    }
    xmlHttp.open("GET", "./Php/dashboardGetSelectedDepartment.php?id="+idValue, true);
    xmlHttp.send();

}



