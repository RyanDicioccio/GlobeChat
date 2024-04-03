function changeWallpaper(imagePath) {
  document.body.style.backgroundImage = 'url(' + imagePath + ')';
}

function validateLogin() {
  // Get form inputs
  var username = document.getElementById("login").value;
  document.getElementById("login").value = username.toLowerCase();
  let password = document.getElementById("pass").value;


  // Regular expressions for validation
  let usernameRegex = /^.{1,20}$/;
  let passwordRegex = /^(?=.*[a-z])(?=.*[A-Z]).{6,}$/;

  //Array of validations
  const validations = [
    {
      check: !usernameRegex.test(username),
      element: "pUser",
      error:
        "&#10006 User name should be non-empty, and within 20 characters long.",
      box: "login",
    },
    {
      check: !passwordRegex.test(password),
      element: "pPass",
      error:
        "&#10006 Password should be at least 6 characters: 1 uppercase, 1 lowercase.",
      box: "pass",
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



function newMessage() {
  const inputValue = document.getElementById("text").value;
  const newParagraph = document.createElement("p");
  newParagraph.textContent = inputValue;
  newParagraph.classList.add("message"); //all messages are part of class message for css
  document.querySelector(".ChatBox").appendChild(newParagraph);
}



