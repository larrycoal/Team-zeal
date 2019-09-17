function myFunction() {
  var x = document.getElementById("nav-div");
  if (x.className === "nav-div") {
    x.className += " responsive";
  } else {
    x.className = "nav-div";
  }
}

function validate() {
  var name = document.getElementById("name").value;
  var password = document.getElementById("password").value;
  var error_message = document.getElementById("error_message");

  var text;
  if (name.length < 4) {
    text = "Name too short. Please enter a valid Name";
    error_message.style.display = "inline-block";
    error_message.innerHTML = text;
    return false;
  }

  if (password.length < 8) {
    text = "Password is too short. Please enter a valid password";
    error_message.style.display = "inline-block";
    error_message.innerHTML = text;
    return false;
  }

  alert("Form Submitted Successfully!");
  return true;
}
