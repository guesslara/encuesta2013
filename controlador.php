<?php
    include("modeloEncuesta.php");
    $objEncuesta=new modeloEncuesta();
    $action=$_POST["action"];
    
    switch($action){
        case "presentacion":
            $objEncuesta->presentacion();
        break;
        case "objetivo":
            $objEncuesta->objetivo();
        break;
        case "encuesta":             
            $objEncuesta->mostrarPreguntasEncuesta($_POST["idTema"],$_POST["nroPregunta"]);
        break;
        case "guardarRespuestas":
            $objEncuesta->guardarRespuestasTema($_POST["respuestasP"],$_POST["idTema"],$_POST["nroPregunta"]);
        break;
        case "gracias":
            $objEncuesta->gracias($_POST["depto"]);
        break;
        case "guardarEncuesta":
            $objEncuesta->guardarEncuesta();
        break;
        case "mostrarEstadistico":
            //print_r($_POST);
            $objEncuesta->mostrarDatosEstadistico();
        break;
        case "guardarEstadisticoInicial":
            //print_r($_POST);
            $edad=$_POST["edad"];
            $sexo=$_POST["sexo"];
            $estado=$_POST["estado"];
            $estudios=$_POST["estudios"];
            $experiencia=$_POST["experiencia"];
            $nivel=$_POST["nivel"];
            $puesto=$_POST["puesto"];
            $empresa=$_POST["empresa"];
            $objEncuesta->guardaEstadistico($edad,$sexo,$estado,$estudios,$experiencia,$nivel,$puesto,$empresa);
        break;
    }
?>