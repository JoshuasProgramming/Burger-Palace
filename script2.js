//Grabbing the delete button from the index.php page => at the button of the form
const delete_btn = document.getElementById('delete_btn').addEventListener("click", (e)=>{
    //create a varible which is assigned a values from a prompt user input.
    let options = prompt("Are You Sure (Yes/No)?");

    //If user entered "Yes"...
    if(options == "Yes"){
        window.location.href = "http://localhost/website/delete.php";
        alert("Account Deleted");
        return;
    }
    //If user entered "No"...
    if(options == "No"){
        return;
    }

    //If user entered something other than "Yes" or "NO"...
    else{
        alert("Didn't work, Try Again");
        return;
    }
});