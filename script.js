function changeWallpaper(imagePath) {
  document.body.style.backgroundImage = 'url(' + imagePath + ')';
}

function validateLogin() {
  // Get form inputs
  var username = document.getElementById("login").value;
  document.getElementById("login").value = username.toLowerCase();
  let password = document.getElementById("pass").value;


  //Array of validations
  const validations = [
    {
      check: username === "", 
      box: "login",
    },
    {
      check: password === "", 
      box: "pass",
    },
  ];

  let validForm = true;

  //run through array
  validations.forEach((validation) => {
    if (validation.check) {
      document.getElementById("accountcheck").innerHTML = "Please Enter Account details."
      document.getElementById(validation.box).style.border = "2px solid red"; //make textbox border red
      validForm = false; //return false for each error
    }
  });

  if (!validForm) { //if there are any errors then the form is not valid
    return false;
  }
  else{
    return true;
  }
}

function validateSignUp() {
  // Get form inputs
  let email = document.getElementById("email").value;
  var username = document.getElementById("login").value;
  document.getElementById("login").value = username.toLowerCase();
  let password = document.getElementById("pass").value;
  let retypePassword = document.getElementById("cPass").value;
  let color = document.getElementById("color").value;

  // Regular expressions for validation
  let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  let passwordRegex = /^(?=.*[a-z])(?=.*[A-Z]).{6,}$/;

  //Array of validations
  const validations = [
    {
      check: !emailRegex.test(email),
      element: "pEmail",
      error:
        "&#10006 Email address must be in the format abc@abc.abc",
      box: "email",
    },
    {
      check: username === "",
      element: "pUser",
      error:
        "&#10006 Username cannot be empty",
      box: "login",
    },
    {
      check: !passwordRegex.test(password),
      element: "pPass",
      error:
        "&#10006 Password should be at least 6 characters long with 1 uppercase and 1 lowercase.",
      box: "pass",
    },
    {
      check: (password !== retypePassword) | !passwordRegex.test(password),
      element: "pCPass",
      error: "&#10006 Please retype password.",
      box: "cPass",
    },
    {
      check: color == "#000000",
      element: "pColor",
      error: "&#10006 Message color cannot be black.",
      box: "color",
    },
  ];

  let validForm = true;

  //run through array
  validations.forEach((validation) => {
    if (validation.check) {
      document.getElementById(validation.element).innerHTML = validation.error; //add error text to p tag
      document.getElementById(validation.box).style.border = "2px solid red"; //make textbox border red
      validForm = false; //return false for each error
      
    } else {
      document.getElementById(validation.element).innerHTML = ""; // Clear error if it is fixed on resubmit
      document.getElementById(validation.box).style.border = "";
    }
  });

  if (!validForm) { //if there are any errors then the form is not valid
    return false;
  }
  else{
    return true;
  }
}

//create message
function newMessage() {
  const inputValue = document.getElementById("text").value;
  const newParagraph = document.createElement("p");
  newParagraph.textContent = inputValue;
  document.querySelector(".ChatBox").appendChild(newParagraph);
}
