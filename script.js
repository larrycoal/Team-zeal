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
  var log = document.getElementById('login')
  var sign =document.getElementById('signup')
 


  function togglepassword(){
    if (Pfield.type =="password"){
      Pfield.type ="text";
    }else {
      Pfield.type="password"
    }
  }

  Vpass.addEventListener("click",function(){
     togglepassword();
  })

  sign.addEventListener('click',function(){
    log.classList.remove("active")
    sign.classList.add("active")
  })
  log.addEventListener('click',function(){
    sign.classList.remove("active")
    log.classList.add("active")
  })
 
