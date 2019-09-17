function myFunction() {
    var x = document.getElementById("nav-div");
    if (x.className === "nav-div") {
      x.className += " responsive";
    } else {
      x.className = "nav-div";
    }
  }
 //i apologise for the terrible variable names
  var Vpass = document.getElementById("view")
  var Pfield =document.getElementById("password")
 


  function togglepassword(){
    if (Pfield.type ="password"){
      Pfield.type ="text";
    }else{
      Pfield.type="password"
    }
  }

  Vpass.addEventListener("click",function(){
     togglepassword();
  })
 
