var regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;


window.onload = function () {
    var form = document.querySelector('form');
    var email = document.querySelector('#email');
    var password = document.querySelector('#password');

    email.onblur = function () {
      //event.preventDefault();
        if (!regexEmail.test(this.value)) {
            this.classList.add('is-invalid');
            var error = document.createElement('span');
            error.innerText = 'Email invalido';
            error.style.color = 'red';
            var div = this.parentElement;
            if (div.children[1]) {
                div.removeChild(div.children[1]);
            }
            div.append(error);
            event.preventDefault();
        } else {
            this.classList.remove('is-invalid');
            var div = this.parentElement;
            if (div.children[1]) {
                div.removeChild(div.children[1]);
          }
        }
      }
        password.onblur = function (){
          event.preventDefault();

          if (password.value.trim() == '' ) {
              password.classList.add('is-invalid');
              var error = document.createElement('span');
              error.innerText = 'Debe de estar lleno';
              error.style.color = 'red';
              var div = password.parentElement;
              if (div.children[1]) {
                  div.removeChild(div.children[1]);
              }
              div.append(error);
              event.preventDefault();
              password.value = '';
          } else {
              this.classList.remove('is-invalid');
              var div = this.parentElement;
              if (div.children[1]) {
                  div.removeChild(div.children[1]);
          }
        }
      }

      form.onsubmit = function (event) {
        event.preventDefault();
          if (email.value.trim() == '') {
              email.classList.add('is-invalid');
              var error = document.createElement('span');
              error.innerText = 'Debe de estar lleno';
              error.style.color = 'red';
              var div = email.parentElement;
              if (div.children[1]) {
                  div.removeChild(div.children[1]);
              }
              div.append(error);
              event.preventDefault();
              email.value = '';
          }

      //  if (password.value.trim() == '') {
        //    password.classList.add('is-invalid');
        //    var error = document.createElement('span');
        //    error.innerText = 'Debe de estar lleno';
        //    error.style.color = 'red';
        //    var div = password.parentElement;
        //    if (div.children[1]) {
        //        div.removeChild(div.children[1]);
        //    }
        //    div.append(error);
        //    event.preventDefault();
        //    password.value = '';
        //}



        console.log('se esta enviando');

    }
}
