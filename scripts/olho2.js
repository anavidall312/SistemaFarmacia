
    var input = document.querySelector('#div-input input');
var img = document.querySelector('.eye i');
img.addEventListener('click', function () {
  input.type = input.type == 'text' ? 'password' : 'text';
});