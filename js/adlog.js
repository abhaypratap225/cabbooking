document.querySelector("#ulogin").addEventListener("click", ulogin);

function ulogin()
{
  var x = document.querySelector(".uname").value;
  var y = document.querySelector(".upass").value;

  if(x=="admin")
  {
    if(y=="admin@01")
    {
      window.location.href = "adminpg.php";
    }
    else{
      document.querySelector(".info").innerHTML = "Wrong Password !!";
    }
  }
  else{
    document.querySelector(".info").innerHTML = "Wrong Username !!";
  }
}
