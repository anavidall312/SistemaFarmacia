/*
window.onload = () => {

    document.getElementById('olhe').addEventListener('mousedown', function() {
        document.getElementById('passe').type = 'text';
      });
      
      document.getElementById('olhe').addEventListener('mouseup', function() {
        document.getElementById('passe').type = 'password';
      });
      
      Para que o password não fique exposto apos mover a imagem.
      document.getElementById('olhe').addEventListener('mousemove', function() {
        document.getElementById('passe').type = 'password';
      });
    
    } */


    /*var input = document.querySelector('.inpute input');
var img = document.querySelector('.inpute img');
img.addEventListener('click', function () {
  input.type = input.type == 'text' ? 'password' : 'text';
});*/

var input = document.querySelector('#div-input input');
var img = document.querySelector('#div-input i');
var i = document.querySelector('#div-input #olho-fechado');
img.addEventListener('click', function () {
  input.type = input.type == 'text' ? 'password' : 'text';
  while(input.type == 'text'){
    img.style.display='none';
    i.style.display='block';
}
});

