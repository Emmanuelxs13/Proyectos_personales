<?php 

    if (!empty($_POST["btnmodificar"])) {
        if (!empty($_POST["txtnombre"]) and !empty($_POST["txtapellido"]) and  !empty($_POST["txtusuario"])) {
            $nombre = $_POST["txtnombre"];
            $apellido = $_POST["txtapellido"];
            $usuario = $_POST["txtusuario"];
            $id = $_POST["txtid"];
            $sql=$conexion->query(" update usuario set nombre='$nombre', apellido='$apellido', usuario='$usuario' where id_usuario=$id ");
            if ($sql==true) { ?>
                    <script>
        $(function notificacion(){
            new PNotify({
                title: "CORRECTO",
                type: "success",
                text: "Los datos fueron modificados correctamente",
                styling: "bootstrap3"
            })
        })
    </script> 
            <?php } else { ?>
                    <script>
                    $(function notificacion(){
                        new PNotify({
                            title: "INCORRECTO",
                            type: "error",
                            text: "Error en modificar los datos",
                            styling: "bootstrap3"
                        })
                    })
                </script>
             <?php }
     } else { ?>
           <script>
        $(function notificacion(){
            new PNotify({
                title: "INCORRECTO",
                type: "error",
                text: "Los campos están vacios",
                styling: "bootstrap3"
            })
        })
    </script> 
      <?php  } ?>
          <script>
        setTimeout(() => {
            window.history.replaceState(null,null,window.location.pathname);
        }, 0);
     </script>
  <?php }

?>