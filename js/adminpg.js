document.querySelector(".adcab").addEventListener("click", addcab);
document.querySelector(".avcab").addEventListener("click", avlcab);
document.querySelector(".bocab").addEventListener("click", bookedcab);
document.querySelector(".dash").addEventListener("click", dash);
document.querySelector(".regus").addEventListener("click", regu);
document.querySelector(".logo").addEventListener("click", logout);

function addcab()
{
  window.location.href = "admin_addcab.php";
}


function avlcab()
{
  window.location.href = "admin_avlcab.php";
}

function bookedcab()
{
  window.location.href = "admin_bok.php";
}

function dash()
{
  window.location.href = "admin_dash.php";
}

function regu()
{
  window.location.href = "admin_reguser.php";
}

function logout()
{
  window.location.href = "index.html";
}
