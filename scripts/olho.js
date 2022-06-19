var input = document.querySelector('.input .inpute');
var img = document.querySelector('.input i');
img.addEventListener('click', function () {
  input.type = input.type == 'text' ? 'password' : 'text';
});

