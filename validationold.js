const form = document.getElementById('form')
const input = document.querySelectorAll('#form input')





const validate = (e) =>{
    console.log(e.target.name)
    switch(e.target.name){
        case "nombre":
            
        break;
        case "apellidos":
            
        break;
        case "dni":
            
        break;
        case "telefono":
            
        break;
        case "email":
            
        break;
        case "password":
            
        break;
        case "idioma":
            
        break;
    }
}

input.forEach((input)=>{
    input.addEventListener('keyup',validate)
    input.addEventListener('blur',validate)
})

form.addEventListener('submit', (e) =>{
    e.preventDefault();

})