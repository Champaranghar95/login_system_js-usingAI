function validate(){
    var username = document.getElementById("uname").value;
    var password = document.getElementById("psw").value;
    if ( username == "user" && password == "password"){
        alert ("Login successfully");
        window.location = "success.html"; // Redirecting to other page.
        return false;
    }
    else{
        alert("Invalid username or password");
    }
}
