/*Navigationo drop-down*/ 

const dropdownitem_1 = document.querySelector('.nav-list-item-1');
const dropdownitem_2 = document.querySelector(".nav-list-item-2");
dropdownitem_1.addEventListener('mouseover', function() {
  document.querySelector('.nav-dropdown').style.visibility = "visible";
});

dropdownitem_2.addEventListener('mouseover', function() {
  document.querySelector('.nav-dropdown-2').style.visibility = "visible";
});

dropdownitem_1.addEventListener('mouseout', function() {
  document.querySelector('.nav-dropdown').style.visibility = "hidden";
});

dropdownitem_2.addEventListener('mouseout', function() {
  document.querySelector('.nav-dropdown-2').style.visibility = "hidden";
});


/*
    if the customer click onto add-to-cart button,
    a message will show that the item has been added to cart
*/

let buttons = document.querySelectorAll(".product-button");
console.log(buttons.length);
let p = document.createElement('div');
    p.textContent = "item has been added to cart";
    document.getElementById('add-to-cart').appendChild(p);
for (i = 1; i <= buttons.length; i++) {
  let addCartButton = document.getElementById("button"+i).addEventListener("click", function() {
      document.getElementById("add-to-cart").style.visibility = "visible";
      setTimeout(function() {
        document.getElementById("add-to-cart").style.visibility = "hidden";
      }, 3000);
    });
}

/*
  jQuery drop-down menu
*/
$(document).ready(function() {
  $(".menu").click(function() {
    $("#navBar").toggle("slow");
  })
});

//Navigation between pages
document.querySelector('.login').addEventListener('click', () => {
  document.querySelector('.front-page').style.display = 'none';
  document.querySelector('.login-page').style.display = 'block';
  document.querySelector(".signup-page").style.display = "none";
});

document.querySelector('.signup').addEventListener('click', function() {
  document.querySelector('.front-page').style.display = 'none';
  document.querySelector('.login-page').style.display = 'none';
  document.querySelector('.signup-page').style.display = 'block';
});

document.querySelector('.front-page-btn').addEventListener('click', function() {
  document.querySelector('.front-page').style.display = 'block';
  document.querySelector('.login-page').style.display = 'none';
  document.querySelector(".signup-page").style.display = "none"
});


//End of navigation between pages

/*Change the theme of the front page */
function changeColor(){
  let color = document.getElementById("colorInput").value;
  document.body.style.backgroundColor = color;
}


/*
//Creating Dynamic form
const form = document.querySelector('.login-form');
const username = document.getElementById("username");
const password = document.getElementById("password");

form.addEventListener('submit', e => {
  e.preventDefault();
	
	checkInputs();
});

function checkInputs() {
  const usernameValue = username.value.trim();
  const passwordValue = password.value.trim();

  if(usernameValue === '') {
		setErrorFor(username, 'Username cannot be blank');
	} else {
		setSuccessFor(username);
	}

  if(passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank');
	} else {
		setSuccessFor(password);
	}
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}
*/






    




