//Ajax call for the sign up form
//Once the form is submitted 
//Ajax call for the sign up form
//Once the form is submitted

$("#signup-form").submit(function(event) {
    
    //collect user input
    let datapost = $(this).serializeArray();
    console.log(datapost);

    //prevent default php processing
    event.preventDefault()
});
    
