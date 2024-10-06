/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/JSP_Servlet/JavaScript.js to edit this template
 */

  
     /*  ************ sweetalert2 ************** */

    function successMessage_save(){
        Swal.fire({
        //  position: 'top-end',
          icon: 'success',
          title: 'Guardado exitosamente',
          showConfirmButton: false,
          timer: 1500
        });  
    } 

    function successMessage_update(){
        Swal.fire({
        //  position: 'top-end',
          icon: 'success',
          title: 'Actualizado exitosamente',
          showConfirmButton: false,
          timer: 1500
        });  
    } 

    function successMessage(){
        Swal.fire({
        //  position: 'top-end',
          icon: 'success',
          title: 'Operación realizada exitosamente',
          showConfirmButton: false,
          timer: 1500
        });  
    } 

    function dynamicSuccessMessage(message){
        Swal.fire({
        //  position: 'top-end',
          icon: 'success',
          title: message,
          showConfirmButton: false,
          timer: 1500
        });  
    } 

    function errorMessage(){
        Swal.fire({
          title: 'Error!',
          text: 'Ocurrio un problema al realizar la acción requerida, favor de revisar la información solicitada',
          icon: 'error',
          confirmButtonText: 'Cerrar'
        });
    }

    function dynamicErrorMessage(message){
        Swal.fire({
          title: 'Error!',
          text: message,
          icon: 'error',
          confirmButtonText: 'Cerrar'
        });
    } 
    
    function dynamicSimpleMessage(mensaje){
        Swal.fire(mensaje);
    } 

    function loading(mensaje){
        Swal.fire({
            title: mensaje,
            allowOutsideClick: false,
            allowEscapeKey: false,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading()
              }
        });         
        
    }
        
    function sweetalert2Close(){
        swal.close();
    }


    (function() {
        'use strict';
        window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
        }
        form.classList.add('was-validated');
        }, false);
        });
        }, false);
    })();  