const nam = document.getElementById('name');
const email =  document.getElementById('email');
const password = document.getElementById('password');
const cpassword = document.getElementById('cpassword');
const form = document.getElementById('form');
const errorE = document.getElementById('error');

form.addEventListener('submit',(e)=>{
    e.preventDefault();
    checkInputs();    
});
let message =[]
if (nam.value ===''|| nam.value == null) {
    message.push('Name is required');
}
if(password.value.length <=6) {
    message.push('Password must be longer than 6 characters');
}

if(password.value.length >=20){
    message.push('Password must be less than 20 characters');
}

if(cpassword == password){
    message.push('Password doesnt match');
}

if (message.length >0){
    
    errorE.innerText=message.join(',');
}