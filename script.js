const firstname = document.getElementById('firstname');
const lastname = document.getElementById('lastname');
const email = document.getElementById('email');
const message = document.getElementById('message');

//Once the user presses a button...
const submit = document.getElementById('submit').addEventListener("click", (e)=>{
    //checks if all the fields are filled..
    if((firstname.value !== "") && (lastname.value !== "") && (email.value.value !== "") && (message.value !== "")){
        //.. If so send them to thank You page
        window.location.href = "thanksYouMessage.html";
    }

    //If all fields aren't filled...
    if(firstname.value == ""){
        firstname.placeholder = "ENTER FIRSTNAME";
        firstname.style.border = "5px solid red";
    } else {
        firstname.style.border = "3px solid black";
    }

    if(lastname.value == ""){
        lastname.placeholder = "ENTER LASTNAME";
        lastname.style.border = "5px solid red";
    } else {
        lastname.style.border = "3px solid black";
    }

    if(email.value == ""){
        email.placeholder = "ENTER EMAIL";
        email.style.border = "5px solid red";
    } else {
        email.style.border = "3px solid black";
    }

    if(message.value == ""){
        message.placeholder = "ENTER MESSAGE";
        message.style.border = "5px solid red";
    } else {
        message.style.border = "3px solid black";
    }
});

/**
 * Function to create the Google Map
 */

 function myMap(){
    //Map options
    let options = {
        zoom:15,
        center:new google.maps.LatLng(51.500250,-0.157400)
    }
        
    //New map
    let map = new google.maps.Map(document.getElementById('map'), options);
        
    //Add marker
    let marker = new google.maps.Marker({
    position:{lat:51.500250, lng:-0.157400},
    map:map
    });
}