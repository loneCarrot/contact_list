/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';


//javascript
import searchProcess from "./js/index";

console.log('Hello Webpack Encore! Edit me in assets/app.js')

$("#search-field").keyup(function(){
    var search_type=$("#inputGroupSelect").val();
    var search_field_value=$(this).val().toUpperCase();
    
    var table_body=$(".table-body").children();
    console.log(table_body);

    for (let i = 0; i < (table_body.length)-1; i++) {
        var table_content=$(".contact-data")[i];
        searchProcess(search_type, search_field_value, table_content);        
    }
});


console.log($("#contact_list_email_add"));

$("#contact_list_email_add").keyup(function(){

    var input_val=$(this).val();
    $.ajax({
        type:"GET",
        url:"email_check/"+input_val,
        success: function(response){
            if (response>0) {
                $(".message").html("this email address is already taken");
                $(".btn-primary").attr('disabled', true);
            }else if(input_val=="" || response==0){
                $(".message").html("");
                $(".btn-primary").attr('disabled', false);
            }
        }
    })
})



