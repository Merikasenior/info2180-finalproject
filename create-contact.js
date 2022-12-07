// Author: Janalisa Waugh
window.onload = function(){
    
    const saveButton = document.getElementById("save-button");
    saveButton.addEventListener("click", async function saveContact(e){
        e.preventDefault();
        
        const title = document.getElementById("titles").value;
        const firstname = document.getElementById("first-name").value;
        const lastname = document.getElementById("last-name").value;
        const email = document.getElementById("email").value;
        const telephone = document.getElementById("telephone").value;
        const company = document.getElementById("company").value;
        const type = document.getElementById("types").value;
        const assignment = document.getElementById("assignments").value;

        if(!title || !firstname || !lastname || !email || !telephone || !company || !type || !assignment){
            return document.getElementById("error-message").innerHTML = `Enter all fields`
        }

        const request = await fetch("php/create-contact.php",{
            method: "POST",
            body: JSON.stringify({ title, firstname, lastname, email, telephone, company, type, assignment})

        });

        if(!request.ok){
            return document.getElementById("error-message").innerHTML = ""

        }
        else{
            document.getElementById("error-message").innerHTML = ""
            
        }

    
    
    
    
    
    
    
    
    })//end of function

}
    