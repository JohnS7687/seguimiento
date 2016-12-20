<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistema De Apoyo</title>

    <!--INICIO BOOTSTRAP FONT-AWESOME-->
    <link rel="stylesheet" href="estilos/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="estilos/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="estilos/fonts/font-awesome/css/font-awesome.min.css">
    <!--FIN BOOTSTRAP FONT-AWESOME-->

    <!--INICIO HOJAS DE ESTILO-->
    <link rel="stylesheet" type="text/css" href="estilos/css/menu.css">

    <link rel="stylesheet" type="text/css" href="estilos/css/plantelDocente.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/registroDocentes.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/vistaPrincipal.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/listaUsuarios.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/cargos.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/btnGlobal.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/editarPerfil.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/seguimiento.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/nombramiento.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/registroMaterias.css">
        <link rel="stylesheet" type="text/css" href="estilos/css/registrarHorario.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/registrarAula.css">
    <!--FIN HOJAS DE ESTILO-->

    <!--INICIO JAVA SCRIPT-->
    <link rel="stylesheet" href="estilos/css/jquery-ui.css">    
    <script src="estilos/js/jquery.min.js"></script>
    <script src="estilos/js/jquery-ui.min.js"></script>
    <script src="estilos/js/cookie/jquery.cookie.js" ></script>
    <script src="estilos/js/moment.js"></script>
    
    <script src="estilos/js/timer.js"></script>
    <script src="estilos/js/buscaMaterias.js"></script>
    <script src="estilos/js/buscarDocente.js"></script>
    <script src="estilos/js/buscarDocente/obtener.js"></script>
    <script src="estilos/js/buscarDocente/eliminarAula.js"></script>

    <script type="text/javascript" src="estilos/js/jquery.min.js"></script>
    <script type="text/javascript" src="estilos/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="estilos/js/bootstrap-timepicker.min.js"></script>
    <!--FIN JAVA SCRIPT-->


    <!-- -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" href="estilos/css/bootstrap.min.css" />
    <link type="text/css" href="estilos/css/bootstrap-timepicker.min.css" />



    <script>
        $('document').ready(function () {
            function hora() {
                $.ajax({
                    type: 'GET',
                    url: 'funciones.php',
                    success: function ($hora) {
                        $('#hora').html($hora);
                        setTimeout(hora(),1000);
                    }
                });
            }
            setTimeout(hora(),1000);
        });
    </script>
</head>

<style type="text/css">

    * {
        border: 0px;
        padding: 0px;
    }

    body {
        background-color: #F5F5F5;
    }
    div.horaT {
        color: white;
        float: left;
        margin-left: -20px;
    }

    div.nt-menu-titulo {
        background-color: #3949AB;
        border-bottom: 1px solid #BDBDBD;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.26);
        width: 100%;
    }

    img {
        margin-left: 50px;
        width: 60px;
    }

    div.nt-menu-titulo div.row div.col-sm-4 h4.titulo {
        font-family: verdana, arial, helvetica, sans-serif;
        margin-top: 25px;
        text-align: center;
        color: white;
    }
</style>
