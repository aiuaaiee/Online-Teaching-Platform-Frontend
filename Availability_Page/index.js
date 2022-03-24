//add and delete reply
(function(){
    var todo = document.querySelector( '#todolist' ),
        form = document.querySelector( 'form' ),
        field = document.querySelector( '#newitem' );
      
    form.addEventListener( 'submit', function( ev ) {
      var text = field.value;
      if ( text !== '' ) {
        todo.innerHTML += '<li>' + text + ' <button onclick="Delete(this);">Delete</button> </li>';
        field.value = '';
      }
      ev.preventDefault();
    }, false);
  })();
    function Delete(currentEl){
    currentEl.parentNode.parentNode.removeChild(currentEl.parentNode);
    }
  
//search courses
function myFunction() {
  var input, filter, cards, cardContainer, title, i;
  input = document.getElementById("myFilter");
  filter = input.value.toUpperCase();
  cardContainer = document.getElementById("myCards");
  cards = cardContainer.getElementsByClassName("ourteam");
  for (i = 0; i < cards.length; i++) {
    title = cards[i].querySelector(".title");
    if (title.innerText.toUpperCase().indexOf(filter) > -1) {
      cards[i].style.display = "";
    } else {
      cards[i].style.display = "none";
    }
  }
}

//search inside viewmore
function myFunction1() {
  var input, filter, cards, cardContainer, title, i;
  input = document.getElementById("myFilter1");
  filter = input.value.toUpperCase();
  cardContainer = document.getElementById("myViewmore");
  cards = cardContainer.getElementsByClassName("teacher");
  for (i = 0; i < cards.length; i++) {
    title = cards[i].querySelector(".title");
    if (title.innerText.toUpperCase().indexOf(filter) > -1) {
      cards[i].style.display = "";
    } else {
      cards[i].style.display = "none";
    }
  }
}

//viewmore
var viewmore = document.getElementById("myViewmore");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  viewmore.style.display = "block";
}
span.onclick = function() {
  viewmore.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == viewmore) {
    viewmore.style.display = "none";
  }
}
