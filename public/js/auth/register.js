var regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

window.onload = function () {
    var form = document.querySelector('form');
    var name = document.querySelector('#name');
    var email = document.querySelector('#email');
    var password = document.querySelector('#password');
    var passConfirm = document.querySelector('#password-confirm');

    name.onblur = function (){
      event.preventDefault();

      if (name.value.trim() == '' ) {
          name.classList.add('is-invalid');
          var error = document.createElement('span');
          error.innerText = 'Nombre debe de estar lleno';
          error.style.color = 'red';
          var div = name.parentElement;
          if (div.children[2]) {
              div.removeChild(div.children[2]);
          }
          div.append(error);
          event.preventDefault();
      } else {
          this.classList.remove('is-invalid');
          var div = this.parentElement;
          if (div.children[2]) {
              div.removeChild(div.children[2]);
      }
    }
  }

     email.onblur = function () {
         event.preventDefault();

       if (email.value.trim() == '' ) {
           email.classList.add('is-invalid');
           var error = document.createElement('span');
           error.innerText = 'Email debe de estar lleno';
           error.style.color = 'red';
           var div = email.parentElement;
           if (div.children[2]) {
               div.removeChild(div.children[2]);
           }
           div.append(error);
           event.preventDefault();
           email.value = '';

      } else if (!regexEmail.test(this.value)) {
             this.classList.add('is-invalid');
             var error = document.createElement('span');
             error.innerText = 'Email invalido';
             error.style.color = 'red';
             var div = this.parentElement;
             if (div.children[2]) {
                 div.removeChild(div.children[2]);
             }
             div.append(error);
             event.preventDefault();
         } else {
             this.classList.remove('is-invalid');
             var div = this.parentElement;
             if (div.children[2]) {
                 div.removeChild(div.children[2]);
             }
           }
         }
         password.onblur = function (){
           event.preventDefault();

           if (password.value.trim() == '' ) {
               password.classList.add('is-invalid');
               var error = document.createElement('span');
               error.innerText = 'Password debe de estar lleno';
               error.style.color = 'red';
               var div = password.parentElement;
               if (div.children[2]) {
                   div.removeChild(div.children[2]);
               }
               div.append(error);
               event.preventDefault();
               password.value = '';

           } else if (password.value.length < 8) {
                  password.classList.add('is-invalid');
                  var error = document.createElement('span');
                  error.innerText = 'Minimo 8 letras';
                  error.style.color = 'red';
                  var div = this.parentElement;
                  if (div.children[2]) {
                      div.removeChild(div.children[2]);
                  }
                  div.append(error);
                  event.preventDefault();
           } else {
               this.classList.remove('is-invalid');
               var div = this.parentElement;
               if (div.children[2]) {
                   div.removeChild(div.children[2]);
           }
         }
        }
        passConfirm.onblur = function (){
          event.preventDefault();

        if (passConfirm.value.trim() == '') {
          passConfirm.classList.add('is-invalid');
          var error = document.createElement('span');
          error.innerText = 'PassConf deve de estar lleno';
          error.style.color = 'red';
          var div = passConfirm.parentElement;
          if (div.children[2]) {
              div.removeChild(div.children[2]);
          }
          div.append(error);
          event.preventDefault();
        } else {
            this.classList.remove('is-invalid');
            var div = this.parentElement;
            if (div.children[2]) {
                div.removeChild(div.children[2]);
        }
      }
     }



    form.onsubmit = function (event) {
        //event.preventDefault();

        if (name.value.trim() == '') {
            name.classList.add('is-invalid');
            var error = document.createElement('span');
            error.innerText = 'Nombre debe de estar lleno';
            error.style.color = 'red';
            var div = name.parentElement;
            if (div.children[2]) {
                div.removeChild(div.children[2]);
            }
            div.append(error);
            event.preventDefault();
            name.value = '';
        }
        if (email.value.trim() == '') {
            email.classList.add('is-invalid');
            var error = document.createElement('span');
            error.innerText = 'Email debe de estar lleno';
            error.style.color = 'red';
            var div = email.parentElement;
            if (div.children[2]) {
                div.removeChild(div.children[2]);
            }
            div.append(error);
            event.preventDefault();
            email.value = '';
        }

          if (password.value.trim() == '') {
              password.classList.add('is-invalid');
              var error = document.createElement('span');
              error.innerText = 'Password deve de estar lleno';
              error.style.color = 'red';
              var div = password.parentElement;
              if (div.children[2]) {
                  div.removeChild(div.children[2]);
              }
              div.append(error);
              event.preventDefault();
              password.value = '';
            }    else if (passConfirm.value != password.value) {
                     password.classList.add('is-invalid');
                     var error = document.createElement('span');
                     error.innerText = 'contraseñas do not match';
                     error.style.color = 'red';
                     var div = this.parentElement;
                     if (div.children[2]) {
                         div.removeChild(div.children[2]);
                     }
                     div.append(error);
                     event.preventDefault();

          }
            console.log('se esta enviando');
      }
}
