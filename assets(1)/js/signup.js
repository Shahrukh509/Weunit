
const signInButton = document.getElementById('signIn');
const signInRight = document.getElementById('arrowRight');
const signInDown = document.getElementById('arrowDown');
const signUpButton = document.getElementById('signUp');
const signUpLeft = document.getElementById('arrowLeft');
const signUp = document.getElementById('arrowUp');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
  container.classList.add("right-panel-active");
});
signUpLeft.addEventListener('click', () => {
  container.classList.add("right-panel-active");
});
signUp.addEventListener('click', () => {
  container.classList.add("right-panel-active");
});

function lf(){
    signUpLeft.style.display="none";
    signInRight.style.display="initial";
}
function rt(){
    signUpLeft.style.display="initial";
    signInRight.style.display="none";
}
function up(){
    signUpLeft.style.display="none";
    signInRight.style.display="none";
    signUp.style.display="initial";
    signInDown.style.display="none";
}
function dn(){
    signUp.style.display="none";
    signInDown.style.display="initial";
    signUpLeft.style.display="none";
    signInRight.style.display="none";
}

signInButton.addEventListener('click', () => {
  container.classList.remove("right-panel-active");
});
signInRight.addEventListener('click', () => {
  container.classList.remove("right-panel-active");
});
signInDown.addEventListener('click', () => {
  container.classList.remove("right-panel-active");
});