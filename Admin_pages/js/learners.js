//search learner user
function searchUser2() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myFilter");
    filter = input.value.toUpperCase();
    table = document.getElementById("myUser2");
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
  
  
  //add learner
  var learner = document.getElementById("addLearner");
  var btn = document.getElementById("learnerBtn");
  var span = document.getElementsByClassName("close")[0];
  btn.onclick = function() {
    learner.style.display = "block";
  }
  span.onclick = function() {
    learner.style.display = "none";
  }
  window.onclick = function(event) {
    if (event.target == learner) {
      learner.style.display = "none";
    }
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  
  var modal = document.getElementById("myModal");
  var btn = document.getElementById("edit-btn");
  var span = document.getElementsByClassName("close2")[0];
  btn.onclick = function() {
    modal.style.display = "block";
  }
  span.onclick = function() {
    modal.style.display = "none";
  }
  