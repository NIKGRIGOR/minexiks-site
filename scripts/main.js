// Personalized welcome message code

let myButton = document.querySelector('button');
let myHeading = document.querySelector('h1');

function setUserName() {
    let myName = prompt('Пожалуйста введите ваше имя');
    if (!myName) {
        }else if(!myName == 'null'){
            alert("Не и не надо");
        } else {
        localStorage.setItem('name', myName);
        myHeading.innerHTML = 'Добро пожаловать ' + myName;
        alert('Ваше имя изменено на ' + myName);
        return;
    }
}

if (!localStorage.getItem('name')) {
    setUserName();
} else {
    let storedName = localStorage.getItem('name');
    myHeading.innerHTML = 'Добро пожаловать ' + storedName;
}
myButton.onclick = function(){
    setUserName();
}