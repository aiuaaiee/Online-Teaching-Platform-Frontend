//search instructor user
function searchUser1() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myFilter");
    filter = input.value.toUpperCase();
    table = document.getElementById("myUser1");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }

//add instructor
var instructor = document.getElementById("addInstructor");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  instructor.style.display = "block";
}
span.onclick = function() {
  instructor.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == instructor) {
    instructor.style.display = "none";
  }
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

var modal = document.getElementById("myModal");
var btn = document.getElementById("edit-btn");
var span = document.getElementsByClassName("close1")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}

