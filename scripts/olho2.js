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


    var input = document.querySelector('.input input');
var img = document.querySelector('.input img');
img.addEventListener('click', function () {
  input.type = input.type == 'text' ? 'password' : 'text';
});