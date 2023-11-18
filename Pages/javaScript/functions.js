


function showpass() {
    var x = document.getElementById("show1")

    if (x.type === "password") {
        x.type = "text";
    }
    else {
        x.type = "password";
    }



}

function showConf() {
    var x = document.getElementById("show2")

    if (x.type === "password") {
        x.type = "text";
    }
    else {
        x.type = "password";
    }



}

function changeImage() {
    var Image_Id = document.getElementById('getImage');
    if (Image_Id.src.match("../assets/eye3.png")) {
        Image_Id.src = "../assets/eye2.png";
    }
    else {
        Image_Id.src = "../assets/eye3.png";
    }
}
function changeConfImage() {
    var Image_Id = document.getElementById('getImage2');
    if (Image_Id.src.match("../assets/eye3.png")) {
        Image_Id.src = "../assets/eye2.png";
    }
    else {
        Image_Id.src = "../assets/eye3.png";
    }
}

let userArray = JSON.parse(localStorage.getItem('userArray')) || [];
function signup() {
    var signupEmail = document.getElementById("email1").value;
    var signupPassword = document.getElementById("show1").value;
    var signupConfPassword = document.getElementById("show2").value;

    if (signupEmail !== '' && signupPassword !== '') {
        if(checkPass()){
        const userObject = {
            email: signupEmail,
            password: signupPassword
        };

        userArray.push(userObject);
        localStorage.setItem('userArray', JSON.stringify(userArray));
        alert("Signed up successfully!!");
        window.location.href = "../html/LoginPage.html";
    }
    
    } else {
        alert("Wrong Email and Password!");
    }
    
    
    
}
function login() {
    var loginEmail = document.getElementById("email1").value;
    var loginPassword = document.getElementById("show1").value;
    
    

    for (let i = 0; i < userArray.length; i += 2) {
        var loginEmail = document.getElementById("email1").value;
    var loginPassword = document.getElementById("show1").value;

    for (let i = 0; i < userArray.length; i++) {
        var storedUser = userArray[i];

        console.log(storedUser.password);
        if (loginEmail === storedUser.email) {
            if (loginPassword === storedUser.password) {
                if (loginPassword !== '' && loginEmail !== '') {
                    alert("Login successful!");
                    return;
                }
            } else {
                alert("Incorrect password. Please try again.");
                return;
            }
        }
        }
    }

   
    alert("Email not found. Please check your email and password.");

    
}

function checkPass(){
    var password=document.getElementById("show1").value;
    var Confpassword=document.getElementById("show2").value;

    if(password!=Confpassword){
        alert("Not same password!!");
        return false;
    }
    else{
        return true;
    }
    
    

}






