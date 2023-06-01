const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

hamburger.addEventListener('click', ()=>{
   //Links
    navLinks.classList.toggle("open");
    links.forEach(link => {
        link.classList.toggle("fade");
    });

    //Animation
    hamburger.classList.toggle("toggle");
});
const firebaseConfig = {
    apiKey: "AIzaSyCduMuAUQ62kAfEnlCxfDk8vWpsc0hSymw",
    authDomain: "craft-94773.firebaseapp.com",
    projectId: "craft-94773",
    storageBucket: "craft-94773.appspot.com",
    messagingSenderId: "578287882027",
    appId: "1:578287882027:web:ffc1f352b0d741221e3f6e"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const auth = firebase.auth()
  const database = firebase.database()

  function register () {
    email = document.getElementById('email').ariaValueMax
    full_name = document.getElementById('full_name').ariaValueMax
    number = document.getElementById('number').ariaValueMax
    password = document.getElementById('password').ariaValueMax
  }

 function validate_email(email){

    expression = /^[^@]+@\w+(\.\w+)+\w$/
    if(expression.test(str)==true){
        return true
    } else {
        return false
    }


 }
 

function validate_password(password)
if (password<6){
    return false

} else {return false }
function validate_full_name(full_name){
   full_name_expression = /^([\w]{3,})+\s+([\w\s]{3,})+$/i
    if (full_name_expression.test(str)==true){
        return true 

    } else{return false}
}

function validate_number(number){
    number_expression= /\d{9}/
    if (number_expression.test(str)==true){

        return true 

    } else{return false}
    

}

auth. createUserWithEmailAndPassword (email, password)
 .then (function() {
    var user = auth.currentUser
    var database_ref=database.ref()
    var user_data = {
        email : email ,
        full_name: full_name,
        number : number,
        last_login : Date.now()

    }
    database_ref.child('users/' + user.uid).set(user_data)

    alert('Compte creé avec succues')
 })
.catch(function(error){
    var error_code= error_code
    var error_message=error.message
    alert(error_message)
})