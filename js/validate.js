function validate(){
	var user, email, password ,expression;
	user = document.getElementById("name").value;
	email = document.getElementById("email").value;
	password = document.getElementById("password").value;


    expression = /\w+@\w+\.+[a-z]/;

	if (user === "" || email === "" || password === ""){
		alert("Alle Felder müssen ausgefüllt werden.");
		return false;
    }
    else if(user.length > 30 || password.length > 30){
        alert("Der Benutzername und das Password dürfen nicht mehr als 30 Zeichen haben.");
        return false;
    }
    else if(email.length > 20){
        alert("Die Email ist zu lang.");
        return false;
    }
    else if(!expression.test(email)){
        alert("Die Email ist ungültig.");
        return false;
    }
}