var x=document.getElementById('login');
var z=document.getElementById('btn');
var w=document.getElementById('forget-password');
function login()
{
    x.style.left='50px';
    y.style.left='450px';
    z.style.left='0px';
    w.style.left='-450px'
}
function forgetpassword()
{
    x.style.left='450px';
    w.style.left='50px'
}

var modal = document.getElementById('login-form');
window.onclick = function(event) 
{
    if (event.target == modal) 
    {
        modal.style.display = "none";
    }
}