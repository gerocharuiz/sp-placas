
  $(document).ready(function(){
    $('.delete_form').on('click', function(e){
      e.preventDefault();
      var $form = $(this).closest('form');
      deleteElement($form)
    });
  });

  function deleteElement($form){        
    Swal.fire({
      title: "¿Está realmente seguro que desea eliminar el registro? ",
      text: "Ya no podrá visualizarlo en los catálogos!",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Si, eliminar!", 
      cancelButtonText: "Cancelar",
      closeOnConfirm: false
    }).then((result) => {
          if (result.isConfirmed) {
            dynamicSuccessMessage("Eliminado exitosamente");
            $form.submit();
            return true;
          }else{
            return false;
          }
    });
}  