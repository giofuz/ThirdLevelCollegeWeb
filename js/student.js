window.onload = function () {
    //-------------------------------------------------------------------------
    // define an event listener for the '#createProgrammerForm'
    //-------------------------------------------------------------------------
    var createStudentForm = document.getElementById('createStudentForm');
    if (createStudentForm !== null) {
        createStudentForm.addEventListener('submit', validateStudentForm);
    }

   function validateStudentForm(event) {
        var form = event.target;
        var name = form['name'].value;
        var email = form['email'].value;
        var studentNumber = form['studentNumber'].value;
        var address = form['address'].value;
        var age = form['age'].value;

        var spanElements = document.getElementsByClassName("error");
        for (var i = 0; i !== spanElements.length; i++) {
            spanElements[i].innerHTML = "";
        }
        
        

        var errors = new Object();

        if (name === "") {
            errors["name"] = "Name cannot be empty\n";
        }
        if (email === "") {
            errors["email"] = "Email cannot be empty\n";
        }
        if (studentNumber === "") {
            errors["studentNumber"] = "Student Number cannot be empty\n";
        }
         if (address === "") {
            errors["address"] = "Address cannot be empty\n";
        }
         if (age === "") {
            errors["age"] = "Age cannot be empty\n";
        }
        
        var valid = true;
        for (var index in errors) {
        valid = false;
        var errorMessage = errors[index];
        var spanElement = document.getElementById(index + "Error");
        spanElement.innerHTML = errorMessage;
        
         }
             if (!valid || !confirm ("Is this form data correct")) {
             event.preventDefault();
         }
     }
    //-------------------------------------------------------------------------
    // define an event listener for the '#createProgrammerForm'
    //-------------------------------------------------------------------------
    var editStudentForm = document.getElementById('editStudentForm');
    if (editStudentForm !== null) {
        editStudentForm.addEventListener('submit', validateStudentForm);
    }

    //-------------------------------------------------------------------------
    // define an event listener for any '.deleteProgrammer' links
    //-------------------------------------------------------------------------
    var deleteLinks = document.getElementsByClassName('deleteStudent');
    for (var i = 0; i !== deleteLinks.length; i++) {
        var link = deleteLinks[i];
        link.addEventListener("click", deleteLink);
    }

    function deleteLink(event) {
        if (!confirm("Are you sure you want to delete this student?")) {
            event.preventDefault();
        }
    }
 };