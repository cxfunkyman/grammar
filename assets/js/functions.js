
//JavaScript Alternative Code
// REM: Include /localhost/Innovatank/grammar/phpspellcheck/include.js 

// let mySpell = new LiveSpellInstance();
// mySpell.Fields = "ALL"
// mySpell.DrawSpellImageButton()
// mySpell.ActivateAsYouType()

document.addEventListener("DOMContentLoaded", function(event) 
{
	//console.log("Web page fully Loaded. HTML, Javascript, CSS, Images, Iframes and objects are fully loaded.");
    const url = 'http://localhost/Innovatank/grammar/controller/GrammarCheck.php/';
    //instaciate the object XMLHttpRequest
    const http = new XMLHttpRequest();
    //open connection this time POST
    http.open('POST', url, true);
    //send data
    http.send();
    //verify status
})

function customAlert(type, msg) {
    Swal.fire({
        toast: true,
        position: 'top-right',
        icon: type,
        title: msg,
        showConfirmButton: false,
        timer: 1500
    })
}

