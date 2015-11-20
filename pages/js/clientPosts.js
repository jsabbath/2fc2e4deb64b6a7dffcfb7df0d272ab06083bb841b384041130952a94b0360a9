
  $(function(){

        $("#btnRegPersonal").on("click", function(){
          var formData=$("#regPersonalForm").serialize();
          var ruta = "*../controllers/tbPersonal/pRegistrar.php";
          $.ajax({
            url: ruta,
            type: "POST",
            data: formData,
            success: function(datos)
            {
              $("#respuesta").html(datos);
            }
          });
        });

        
});