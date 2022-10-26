$(function () {

    $.validator.addMethod("passwordcheck", function(value) {
       regex = new RegExp("^(?=.*[a-z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{6,})")
    return regex.test(value) 

// has a special character
    },"Tu contraseña debe tener, al menos, seis caracteres e incluir una combinación de números, letras y caracteres especiales (!$@%)."  
    );
  
    $("#form").validate({
      rules: {
        password: {required:true,minlength:8,maxlength:15,passwordcheck:true },
        password_confirm: {required:true,equalTo:"#password" }
      },
      messages: {
        password: "Tu contraseña debe tener, al menos, seis caracteres e incluir una combinación de números, letras y caracteres especiales (!$@%).",
        password_confirm: "Las contraseñas no coinciden"
      },
      errorLabelContainer: "dt",
      wrapper: "dd"
    });
  });

  $(function () {
    $('.popover').popover({
      container: 'body'
    })
  })

// $(document).ready(function(event) {
    
//     $("#form").validate({
        
//     rules: {
//         email: {
//             required: true,
//             email: true
//         },
//         password: {
//             required: function(value){
                
//                 var re = /(?=.*[0-9])/;
//                 var password = value.value;
//                 console.log(re.test(password))
//                 if (re.test(password)){
//                     return true
//                 }   
//             },
//             minlength: 6,

//             },
//         confirm_password:{
//             required: true,
//             minlength: 6,
//             equalto : "#password"
//         },
//         messages:{
//             email: "porfavor, introduzca un email",
//             password:{
//                 required: "porfavor, introduzca una contraseña",
//                 minlength:"La contraseña tiene que tener como mínimo 6 carácteres",
                
//             }
//         }
//         }
       
//     });
    
    // });




// function checkPasswordStrength() {
//     console.log("si")
// 	var number = /([0-9])/;
// 	var alphabets = /([a-zA-Z])/;
// 	var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
// 	var password = $('#password').val().trim();
// 	if (password.length < 6) {

// 	} else {
// 		if (password.match(number) && password.match(alphabets) && password.match(special_characters)) {
			
			
// 			$('#pass_control').html("te faltan cositas");
// 		}
// 		else {
// 			$('#pass_control').html("Medium (should include alphabets, numbers and special characters.)");
// 		}
// 	}
// }