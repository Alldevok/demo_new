var nameError = document.getElementById('name-error')
var emailError = document.getElementById('email-error')
var numberError = document.getElementById('number-error')
var messageError = document.getElementById('message-error')
var submitError = document.getElementById('submit-error') 

function validateName(){
    var name = document.getElementById('name').value; //id ka term use hota hai, contact-name also can be use

    if(name.length == 0){
        nameError.innerHTML = '👉Name is required';
        return false;
    }
    // if(!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*&/)){
    //     nameError.innerHTML = 'Write full name';
    //     return false;
    // }
    nameError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
    return true;
}

function validatenumber(){
    var number = document.getElementById('number').value;
     
    if(number.length == 0){
        numberError.innerHTML = 'Number is required';
        return false;
    }
    if(number.length !== 10){
        numberError.innerHTML = 'Number is should be 10 digits';
        return false;
    }
    if(!number.match(/^[0-9]{10}$/)){
        numberError.innerHTML = 'Only digits please';
        return false;
    }

    numberError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
    return true;
   
    
}

function validateEmail(){
    var email = document.getElementById('email').value;
  
    if(email.length == 0){
        emailError.innerHTML = 'Email is required'
        return false;
    }
    if (!email.match(/^[A-Za-z0-9._-]+@[A-Za-z]+(\.[A-Za-z]{2,})+$/)) {
        emailError.innerHTML = 'Email is Invalid';
        return false;
    }

    emailError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
    return true;

}

function showSidebar(){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'flex'
}

function hideSidebar(){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'none'
}