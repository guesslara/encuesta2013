<?php
 /*
  * Nuevo archivo para la generacion de la encuesta por medio de la base de datos
  * Todas las preguntas se extraen y se muestran por medio de funciones para la vista del usuario
  * Autor: Gerardo Lara
  * Version 1.0
  * Fecha 25 de Noviembre de 2012
  */
    session_start();
    class modeloEncuesta{
        
        private function conexionBd(){
            require("config.inc");
	    $link=mysql_connect($host,$usuarioBd,$passBd);
	    if($link==false){
		echo "Error en la conexion a la base de datos";
            }else{
		mysql_select_db($dbBd);
		return $link;
	    }
        }
        
	public function guardaEstadistico($edad,$sexo,$estado,$estudios,$experiencia,$nivel,$puesto,$empresa){
	    //se guardan los valores en una variable de session
	    $_SESSION["estadisticos"]=array();
	    $_SESSION["estadisticos"]["edad"]=$edad;
	    $_SESSION["estadisticos"]["sexo"]=$sexo;
	    $_SESSION["estadisticos"]["estado"]=$estado;
	    $_SESSION["estadisticos"]["estudios"]=$estudios;
	    $_SESSION["estadisticos"]["experiencia"]=$experiencia;
	    $_SESSION["estadisticos"]["nivel"]=$nivel;
	    $_SESSION["estadisticos"]["puesto"]=$puesto;
	    $_SESSION["estadisticos"]["empresa"]=$empresa;
	    //print_r($_SESSION["estadisticos"]);
?>
	    <script type="text/javascript">
		ajax('div_resultados','action=encuesta&idTema=1&nroPregunta=1','div_presentacion');
	    </script>
	    <!--<p align="center"><a href="javascript:ajax('div_resultados','action=encuesta&idTema=1&nroPregunta=1','div_presentacion');" style="font-size:30px; color:#06F; text-decoration:none;">Siguiente</a></p>-->
<?
	}
	
	public function mostrarDatosEstadistico(){
?>
	    <p align="left" class="Estilo1" style="margin: 10px;">CAR&Aacute;TULA DE DATOS GENERALES</p>
	    <table border="1" cellpadding="0" cellspacing="0" width="600" style="margin: 10px;font-size: 12px;">
		<tr>
		    <td colspan="2" style="border: 1px solid #000;font-weight: bold;text-align: center;">EDAD</td>
		    <td colspan="2" style="border: 1px solid #000;font-weight: bold;text-align: center;">SEXO</td>
		    <td colspan="2" style="border: 1px solid #000;font-weight: bold;text-align: center;">ESTADO CIVIL</td>
		    <td colspan="2" style="border: 1px solid #000;font-weight: bold;text-align: center;">ESTUDIOS TERMINADOS (COMPROBADOS)</td>
		    <td colspan="2" style="border: 1px solid #000;font-weight: bold;text-align: center;">EXPERIENCIA LABORAL (AÑOS)</td>		    
		</tr>
		<tr>		    
		    <td width="80" style="border-bottom:1px solid #000;">18 A 24</td>
		    <td width="40" style="border-bottom:1px solid #000;border-left:1px solid #000;"><input type="radio" name="chkEdad" id="chkEdad" value="18 A 24"></td>
		    <td width="80" style="border-bottom:1px solid #000;">Masculino</td>
		    <td width="40" style="border-bottom:1px solid #000;border-left:1px solid #000;"><input type="radio" name="chkSexo" id="chkSexo" value="Masculino"></td>
		    <td width="80" style="border-bottom:1px solid #000;">Casado</td>
		    <td width="40" style="border-bottom:1px solid #000;border-left:1px solid #000;"><input type="radio" name="chkEstado" id="chkEstado" value="Casado"></td>
		    <td width="80" style="border-bottom:1px solid #000;">Primaria</td>
		    <td width="40" style="border-bottom:1px solid #000;border-left:1px solid #000;"><input type="radio" name="chkEstudios" id="chkEstudios" value="Primaria"></td>
		    <td width="80" style="border-bottom:1px solid #000;">0 A 3</td>
		    <td width="40" style="border-bottom:1px solid #000;"><input type="radio" name="chkExperiencia" id="chkExperiencia" value="0 A 3"></td>
		</tr>
		<tr>		    
		    <td style="border-bottom:1px solid #000;">25 A 30</td>
		    <td style="border-bottom:1px solid #000;border-left:1px solid #000;"><input type="radio" name="chkEdad" id="chkEdad" value="25 A 30"></td>
		    <td style="border-bottom:1px solid #000;">Femenino</td>
		    <td style="border-bottom:1px solid #000;border-left:1px solid #000;"><input type="radio" name="chkSexo" id="chkSexo" value="Femenino"></td>
		    <td style="border-bottom:1px solid #000;">Soltero</td>
		    <td style="border-bottom:1px solid #000;border-left:1px solid #000;"><input type="radio" name="chkEstado" id="chkEstado" value="Soltero"></td>
		    <td style="border-bottom:1px solid #000;">Secundaria</td>
		    <td style="border-bottom:1px solid #000;border-left:1px solid #000;"><input type="radio" name="chkEstudios" id="chkEstudios" value="Secundaria"></td>
		    <td style="border-bottom:1px solid #000;">4 A 7</td>
		    <td style="border-bottom:1px solid #000;"><input type="radio" name="chkExperiencia" id="chkExperiencia" value="4 A 7"></td>
		</tr>
		<tr>		    
		    <td  style="border-bottom:1px solid #000;">31 A 40</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;"><input type="radio" name="chkEdad" id="chkEdad" value="31 A 40"></td>
		    <td  style="border-bottom:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;">Uni&oacute;n Libre</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;"><input type="radio" name="chkEstado" id="chkEstado" value="Union Libre"></td>
		    <td  style="border-bottom:1px solid #000;">Preparatoria</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;"><input type="radio" name="chkEstudios" id="chkEstudios" value="Preparatoria"></td>
		    <td  style="border-bottom:1px solid #000;">8 A 12</td>
		    <td  style="border-bottom:1px solid #000;"><input type="radio" name="chkExperiencia" id=""chkExperiencia value="8 A 12"></td>
		</tr>
		<tr>		    
		    <td  style="border-bottom:1px solid #000;">41 A 60</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;"><input type="radio" name="chkEdad" id="chkEdad" value="41 A 60"></td>
		    <td  style="border-bottom:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;">Divorciado</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;"><input type="radio" name="chkEstado" id="chkEstado" value="Divorciado"></td>
		    <td  style="border-bottom:1px solid #000;">Vocacional</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;"><input type="radio" name="chkEstudios" id="chkEstudios" value="Vocacional"></td>
		    <td  style="border-bottom:1px solid #000;">13 A 18</td>
		    <td  style="border-bottom:1px solid #000;"><input type="radio" name="chkExperiencia" id="chkExperiencia" value="13 A 18"></td>
		</tr>
		<tr>		    
		    <td  style="border-bottom:1px solid #000;">M&aacute;s de 50</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;"><input type="radio" name="chkEdad" id="chkEdad" value="Mas de 50"></td>
		    <td  style="border-bottom:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;">Viudo</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;"><input type="radio" name="chkEstado" id="chkEstado" value="Viudo"></td>
		    <td  style="border-bottom:1px solid #000;">T&eacute;cnica</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;"><input type="radio" name="chkEstudios" id="chkEstudios" value="Tecnica"></td>
		    <td  style="border-bottom:1px solid #000;">19 A 23</td>
		    <td  style="border-bottom:1px solid #000;"><input type="radio" name="chkExperiencia" id="chkExperiencia" value="19 A 23"></td>
		</tr>
		<tr>		    
		    <td  style="border-bottom:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;">Licenciatura</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;"><input type="radio" name="chkEstudios" id="chkEstudios" value="Licenciatura"></td>
		    <td  style="border-bottom:1px solid #000;">M&aacute;s de 23</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;"><input type="radio" name="chkExperiencia" id="chkExperiencia" value="Mas de 23"></td>
		</tr>
		<tr>		    
		    <td  style="border-bottom:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;">Especialidad</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;"><input type="radio" name="chkEstudios" id="chkEstudios" value="Especialidad"></td>
		    <td  style="border-bottom:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;">&nbsp;</td>
		</tr>
		<tr>		    
		    <td  style="border-bottom:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;">Maestr&iacute;a</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;"><input type="radio" name="chkEstudios" id="chkEstudios" value="Maestria"></td>
		    <td  style="border-bottom:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;">&nbsp;</td>
		</tr>
		<tr>		    
		    <td  style="border-bottom:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;">Otro</td>
		    <td  style="border-bottom:1px solid #000;border-left:1px solid #000;"><input type="radio" name="chkEstudios" id="chkEstudios" value="Otro"></td>
		    <td  style="border-bottom:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;">&nbsp;</td>
		</tr>
	    </table><p>&nbsp;</p>
	    <table border="1" cellpadding="0" cellspacing="0" width="540" style="margin: 10px;font-size: 12px;border: 1px solid #000;">
		<tr>
		    <td colspan="2" style="border:1px solid #000;font-weight: bold;text-align: center;">NIVEL</td>
		    <td colspan="2" style="border:1px solid #000;font-weight: bold;text-align: center;">ANTIGÜEDAD EN EL PUESTO</td>
		    <td colspan="2" style="border:1px solid #000;font-weight: bold;text-align: center;">ANTIGÜEDAD EN LA EMPRESA</td>		    
		</tr>
		<tr>		    
		    <td  style="border-bottom:1px solid #000;" width="140">Director o gerente</td>
		    <td  style="border-bottom:1px solid #000;" width="40"><input type="radio" name="chkNivel" id="chkNivel" value="Director o Gerente"></td>
		    <td  style="border-bottom:1px solid #000;" width="140">Hasta 1 año</td>
		    <td  style="border-bottom:1px solid #000;" width="40"><input type="radio" name="chkPuesto" id="chkPuesto" value="Hasta 1 anio"></td>
		    <td  style="border-bottom:1px solid #000;" width="140">Hasta 1 año</td>
		    <td  style="border-bottom:1px solid #000;" width="40"><input type="radio" name="chkEmpresa" id="chkEmpresa" value="Hasta 1 anio"></td>		    
		</tr>
		<tr>		    
		    <td  style="border-bottom:1px solid #000;">Jefe de departamento</td>
		    <td  style="border-bottom:1px solid #000;"><input type="radio" name="chkNivel" id="chkNivel" value="Jefe de departamento"></td>
		    <td  style="border-bottom:1px solid #000;">M&aacute;s de 1 año a 3 años</td>
		    <td  style="border-bottom:1px solid #000;"><input type="radio" name="chkPuesto" id="chkPuesto" value="1 A 3 ANIOS"></td>
		    <td  style="border-bottom:1px solid #000;">M&aacute;s de 1 año a 3 años</td>
		    <td  style="border-bottom:1px solid #000;"><input type="radio" name="chkEmpresa" id="chkEmpresa" value="1 A 3 ANIOS"></td>		    
		</tr>
		<tr>		    
		    <td  style="border-bottom:1px solid #000;">Supervisor</td>
		    <td  style="border-bottom:1px solid #000;"><input type="radio" name="chkNivel" id="chkNivel" value="Supervisor"></td>
		    <td  style="border-bottom:1px solid #000;">M&aacute;s de 3 años a 5 años</td>
		    <td  style="border-bottom:1px solid #000;"><input type="radio" name="chkPuesto" id="chkPuesto" value="3 A 5 ANIOS"></td>
		    <td  style="border-bottom:1px solid #000;">M&aacute;s de 3 años a 5 años</td>
		    <td  style="border-bottom:1px solid #000;"><input type="radio" name="chkEmpresa" id="chkEmpresa" value="3 A 5 ANIOS"></td>		    
		</tr>
		<tr>		    
		    <td  style="border-bottom:1px solid #000;">Secretaria / recepcionista</td>
		    <td  style="border-bottom:1px solid #000;"><input type="radio" name="chkNivel" id="chkNivel" value="Secretaria / Recepcionista"></td>
		    <td  style="border-bottom:1px solid #000;">M&aacute;s de 5 años a 7 años</td>
		    <td  style="border-bottom:1px solid #000;"><input type="radio" name="chkPuesto" id="chkPuesto" value="5 A 7"></td>
		    <td  style="border-bottom:1px solid #000;">M&aacute;s de 5 años a 8 años</td>
		    <td  style="border-bottom:1px solid #000;"><input type="radio" name="chkEmpresa" id="chkEmpresa" value="5 A 8"></td>		    
		</tr>
		<tr>		    
		    <td  style="border-bottom:1px solid #000;">Empleados en general</td>
		    <td  style="border-bottom:1px solid #000;"><input type="radio" name="chkNivel" id="chkNivel" value="Empleado General"></td>
		    <td  style="border-bottom:1px solid #000;">M&aacute;s de 7 años</td>
		    <td  style="border-bottom:1px solid #000;"><input type="radio" name="chkPuesto" id="chkPuesto" value="Mas de 7 ANIOS"></td>
		    <td  style="border-bottom:1px solid #000;">M&aacute;s de 8 años a 10 años</td>
		    <td  style="border-bottom:1px solid #000;"><input type="radio" name="chkEmpresa" id="chkEmpresa" value="Mas de 8 A 10 ANIOS"></td>		    
		</tr>
		<tr>		    
		    <td  style="border-bottom:1px solid #000;">Operario</td>
		    <td  style="border-bottom:1px solid #000;"><input type="radio" name="chkNivel" id="chkNivel" value="Operario"></td>
		    <td  style="border-bottom:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;">&nbsp;</td>
		    <td  style="border-bottom:1px solid #000;">M&aacute;s de 10 años</td>
		    <td  style="border-bottom:1px solid #000;"><input type="radio" name="chkEmpresa" id="chkEmpresa" value="Mas de 10 ANIOS"></td>		    
		</tr>
	    </table>
	    <p>&nbsp;</p>	    
	    <p align="center"><a href="javascript:recuperarEstadistico();" style="font-size:30px; color:#06F; text-decoration:none;">Siguiente</a></p>
<?
	}
	
        public function guardarEncuesta(){
            require("config.inc");
            $tdp=$numeroTotalEncuesta;
            $ndpr=count($_SESSION["respuestas_globales"]);
            $sql_valores="";
            $campos_valores="";
            foreach ($_SESSION["respuestas_globales"] as $idp){		
		if ($sql_valores==""){
			$sql_valores="'$idp'";
		}else{
			$sql_valores.=",'$idp'";		
		}
            }
            for($i=1;$i<=$tdp;$i++){
                if($campos_valores==""){
                    $campos_valores="P".$i;
                }else{
                    $campos_valores=$campos_valores.",P".$i;
                }
            }
	    $insert="insert into encuestas (".$campos_valores.",departamento) values ($sql_valores)";
            $resE=mysql_query($insert,$this->conexionBd());
            if($resE){
		$resUId=mysql_query("SELECT LAST_INSERT_ID() as nreg",$this->conexionBd());//se recuepra el ultimo id insertado
		$rowUId=mysql_fetch_array($resUId);
		$idInsertado=$rowUId["nreg"];
		
		//se prepara la consulta de actualizacion
		$sqlAct="UPDATE encuestas set edad='".$_SESSION["estadisticos"]["edad"]."',sexo='".$_SESSION["estadisticos"]["sexo"]."',estadoCivil='".$_SESSION["estadisticos"]["estado"]."',estudiosTerminados='".$_SESSION["estadisticos"]["estudios"]."',experienciaLaboral='".$_SESSION["estadisticos"]["experiencia"]."',nivel='".$_SESSION["estadisticos"]["nivel"]."',antiguedadPuesto='".$_SESSION["estadisticos"]["puesto"]."',antiguedadEmpresa='".$_SESSION["estadisticos"]["empresa"]."' WHERE id_per='".$idInsertado."'";
		$resAct=mysql_query($sqlAct,$this->conexionBd());
		
                echo "<script type='text/javascript'> alert('Respuestas Guardadas'); presentacion(); </script>";
                unset($_SESSION["respuestas_globales"]);
		unset($_SESSION["estadistico"]);
            }else{
                echo "<script type='text/javascript'> alert('Error al Guardar las Respuestas.'); </script>";
		unset($_SESSION["respuestas_globales"]);
            }
        }
        
        public function guardarRespuestasTema($respuestasP,$idTema,$nroPregunta){
            $respuestasP=explode("|",$respuestasP);
            for($i=0;$i<count($respuestasP);$i++){
                array_push($_SESSION["respuestas_globales"],$respuestasP[$i]);
            }
?>
            <script type="text/javascript"> ajax("div_resultados","action=encuesta&idTema=<?=$idTema;?>&nroPregunta=<?=$nroPregunta;?>") </script>
<?
        }
        
        public function gracias($depto){
            array_push($_SESSION["respuestas_globales"],$depto);
	    echo "<style type='text/css'>
            <!--
            .Estilo1 {font-family: Verdana, Arial, Helvetica, sans-serif;font-weight: bold;color: #0000FF;font-size: 34px;}
            .Estilo2 {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 18px;}
            .Estilo3 {font-size: 24px;font-weight: bold;}
            .Estilo4 {font-size: 10px;font-weight: bold;}
            .Estilo5 {font-size: 18px}
            .Estilo6 {font-size: 16px;font-weight: bold;}
            .Estilo7 {font-family: Verdana, Arial, Helvetica, sans-serif}
            .Estilo8 {font-size: 16px}
            .Estilo9 {font-size: 16px;font-family: Verdana, Arial, Helvetica, sans-serif;font-weight: bold;}
            -->
            </style>";
	    echo "
	    <div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p align='center' class='Estilo1'>Gracias</p>
                <p align='center' class='Estilo2'>Te agradecemos el tiempo que nos prestaste para contestar esta encuesta y contrubuir en el desarrollo de la empresa. </p>
                <p align='justify' class='Estilo2'>&nbsp;</p>
                <p align='justify' class='Estilo2'></p>
            </div>
            <p align='center'><a href='javascript:guardarEncuesta()' style='font-size:20px; color:#06F; text-decoration:none;'><< Fin >></a></p>";
        }
        
        public function mostrarPreguntasEncuesta($idTema,$nroPregunta){
            $this->mostrarCabecera();
            $this->estilosEncuesta();
            $temaActual=$this->devuelveTemaEncuesta($idTema);
            if($temaActual=="Sin Tema"){
                $this->mostrarSeleccionDepto($idTema,$nroPregunta);
            }else{
                $this->mostrarPreguntasTemaActual($idTema,$nroPregunta);
            }
        }
        
        private function mostrarSeleccionDepto($idTema,$nroPregunta){
            $sqlD="SELECT * FROM departamentos WHERE status=1";
            $resD=mysql_query($sqlD,$this->conexionBd());
            $select="<select name='cboDepto' id='cboDepto'>";
            $select.="<option value='Selecciona' selected='selected'>Selecciona...</option>";
            while($rowD=mysql_fetch_array($resD)){
                $select.="<option value='".$rowD["depto"]."'>".$rowD["depto"]."</option>";
            }
            $select.="</select>";
	    echo "
	    <div id='Mensaje' style='size:90%; border:2 px solid #000000;' >
                <p style='margin:8px; text-align:justify;'>&nbsp;</p>
                <div align='center' id='div'>
                    Selecciona tu Departamento:<br><br><br>";
            echo $select;
            echo "<p align='center' style='margin-right:10px;'><a href='javascript:gracias();' style='font-size:20px; color:#06F; text-decoration:none;'>Siguiente >></a></p>    
                </div>
            </div>";
        }
        
        private function mostrarPreguntasTemaActual($idTema,$nroPregunta){
?>            
            <p align="left" class="Estilo1"><? echo $this->devuelveTemaEncuesta($idTema);?></p>
            <div id="Mensaje" style="size:90%; border:2 px solid #000000;" >
                <p style="margin:8px; text-align:justify;">&nbsp;</p>
                <div align="center" id="div">
<?
            $resP=$this->devuelvePreguntasTema($idTema);
            $nroRespuestas=$this->devuelveNumeroTotalPreguntas($idTema);
?>
                <form name="frmPreguntas" id="frmPreguntas">
                <table width="98%" border="0" align="center" cellpadding="1" cellspacing="1" style="font-size:12px;" >
                    <tr>
                      <td width="69%" align="center" class="Estilo8 style1" style="height:20px; background:#CCC;"><span class="Estilo5"><strong>Preguntas</strong></span></td>
                      <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">En Total desacuerdo</td>
                      <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">En desacuerdo medio</td>
                      <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">De acuerdo</td>
                      <td width="5%" align="center" class="Estilo5" style="height:20px; background:#CCC;">Totalmente de acuerdo</td>           
                    </tr>
<?
            $i=$nroPregunta;
            while($rowP=mysql_fetch_array($resP)){
		$nombreRadio="P".$i;
?>
                    <tr>
                       <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999;"><strong><? echo $i."- ".utf8_encode($rowP["pregunta"]);?></strong></td>
                       <td style="height:25px; border-bottom:1px solid #999; border-right:1px solid #999; text-align:center;"><input name="<?=$nombreRadio;?>" type="radio" value="1" onclick="actualiza(this,<?=$i;?>)" /></td>
                       <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="<?=$nombreRadio;?>" type="radio" value="2" onclick="actualiza(this,<?=$i;?>)" /></td>
                       <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="<?=$nombreRadio;?>" type="radio" value="3" onclick="actualiza(this,<?=$i;?>)" /></td>
                       <td style="height:25px; border-bottom:1px solid #999;  border-right:1px solid #999; text-align:center;"><input name="<?=$nombreRadio;?>" type="radio" value="4" onclick="actualiza(this,<?=$i;?>)" /></td>           
                    </tr>
<?
		$i+=1;
            }
?>         
                </table></form>
                </div>
                <p align="right" style="margin-right:10px;"><a href="javascript:validarRespuestas('<?=$nroRespuestas;?>','<?=$idTema+1;?>','<?=$i;?>');" style="font-size:20px; color:#06F; text-decoration:none;">Siguiente >></a></p>
                <div id="preguntasDiv"></div>
            </div>            
<?             
        }
        
        private function devuelvePreguntasTema($idTema){            
            $sqlP="select * from preguntas where id_tema='".$idTema."'";
            $resP=mysql_query($sqlP,$this->conexionBd());
            return $resP;
        }
        
        private function devuelveNumeroTotalPreguntas($idTema){
            $sqlTP="select * from preguntas where id_tema='".$idTema."'";
            $resTP=mysql_query($sqlTP,$this->conexionBd());	
            return mysql_num_rows($resTP);            
        }
        
        private function devuelveTemaEncuesta($idTema){
            $sqlTema="SELECT * FROM temas WHERE id_tema='".$idTema."'";
            $resTema=mysql_query($sqlTema,$this->conexionBd());
            $rowTema=mysql_fetch_array($resTema);            
            if(mysql_num_rows($resTema)!=0){
                $temaActual=$rowTema["tema"];
            }else{
                $temaActual="Sin Tema";
            }
            return $temaActual;
        }
            
        private function estilosEncuesta(){
            echo "<style type='text/css'> .Estilo1 {font-family: Verdana, Arial, Helvetica, sans-serif;font-weight: bold;color: #0000FF;font-size: 24px;} .Estilo5 {font-size: 14px;font-weight:bold;}</style>";
        }
        
        public function objetivo(){
            $this->mostrarCabecera();
	    echo "<style type='text/css'>
            .Estilo1 {font-family: Verdana, Arial, Helvetica, sans-serif;font-weight: bold;color: #0000FF;font-size: 24px;}
            .Estilo2 {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 14px;}
            .Estilo3 {font-size: 24px;font-weight: bold;}
            .Estilo4 {font-size: 10px;font-weight: bold;}
            .Estilo5 {font-size: 18px}
            </style>";
?>
            
            <div id="Mensaje" style="size:90%; border:2 px solid #000000;" >
                <p align="center" class="Estilo1">Introducci&oacute;n</p>
                <p class="Estilo2" style="text-align: justify;width: 98%;">Una de las inquietudes más importantes que existen en IQ International, es la relativa al ambiente de trabajo y clima interno en que se desenvuelven los empleados y trabajadores.</p>
                <p class="Estilo2" style="text-align: justify;width: 98%;">Para la empresa, es de suma importancia ayudar a crear y mantener un lugar de trabajo gratificante que satisfaga y enorgullezca al personal.</p>
                <p class="Estilo2" style="text-align: justify;width: 98%;">Gran parte de la vida de las personas se dedica al trabajo. Hacerlo en un lugar grato, es un compromiso y preocupación constante en la empresa, y se está convirtiendo en un objetivo institucional.</p>
                <p class="Estilo2" style="text-align: justify;width: 98%;">Es por ello que estamos instituyendo esta Encuesta de Clima Interno, con el afán de conocer el pensar, sentir y desear del personal, y así poder implementar acciones que cumplan con este objetivo citado.</p>
                <p class="Estilo2" style="text-align: justify;width: 98%;">La encuesta es anónima, no será necesario que anoten su nombre.</p>
                <p class="Estilo2" style="text-align: justify;width: 98%;">Todas las respuestas serán tratadas como confidenciales. No existe la posibilidad de identificar a nadie. Estas respuestas no serán vistas por persona alguna dentro de la empresa. No se realizará ningún informe para grupos integrados por menos de cinco personas, de tal manera que no se podrá deducir quién fue el que dio tal o cual respuesta. </p>
                <p class="Estilo2" style="text-align: justify;width: 98%;">Las respuestas de cada persona son sumamente importantes. Por favor conteste todas las preguntas en forma exacta, cuidadosa y honesta.</p>
                <p class="Estilo2" style="text-align: justify;width: 98%;">Cada reactivo deberá contestarse con datos numéricos de acuerdo al baremo siguiente:</p>
                <div style="margin:10px; font-weight:bold;font-size: 14px;text-align: left;">
                    <table width="250" border="0" cellpading="1" cellspacing="1">
                        <tr>
                                <td width="200">Totalmente de acuerdo</td>
                                <td width="50" style="text-align: center;">4</td>
                        </tr>
                        <tr>
                                <td>De acuerdo</td>
                                <td style="text-align: center;">3</td>
                        </tr>
                        <tr>
                                <td>En desacuerdo medio</td>
                                <td style="text-align: center;">2</td>
                        </tr>
                        <tr>
                                <td>En total desacuerdo</td>
                                <td style="text-align: center;">1</td>
                        </tr>
                    </table>
                </div>
                <p align="justify" class="Estilo2" style="margin-top: 10px;text-align: justify;width: 98%;">No se trata de contestar lo que quisiera o piensa que debiera ser. Por favor conteste como considera que HOY por HOY, son las cosas en IQ International.</p>
                <p align="center" class="Estilo1">ENCUESTA LABORAL</p></p>
                <p align="justify" class="Estilo2" style="text-align: justify;width: 98%;">No escriba su nombre, le rogamos contestar con toda sinceridad las preguntas que se encuentran abajo. La forma de contestar es la siguiente:</p>
                <p align="justify" class="Estilo2" style="text-align: justify;width: 98%;">Lea la pregunta e inmediatamente después seleccione la respuesta que usted crea conveniente. Subraye la letra que corresponda a la respuesta que más se asemeje a lo que usted piensa.</p>
                <p>&nbsp;</p>
		<p align="center"><a href="javascript:ajax('div_resultados','action=mostrarEstadistico','div_presentacion');" style="font-size:30px; color:#06F; text-decoration:none;">Siguiente</a></p>
                <!--<p align="center"><a href="javascript:ajax('div_resultados','action=encuesta&idTema=1&nroPregunta=1','div_presentacion');" style="font-size:30px; color:#06F; text-decoration:none;">Siguiente</a></p>-->
            </div>
<?
        }
        
        public function presentacion(){
	    session_start();
	    $_SESSION["respuestas_globales"]=array();
            //presentacion de la encuesta
            $this->mostrarCabecera();
?>
            <div id="Mensaje" style="size:900px; border:2 px solid #000000;" >
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p align="center" class="Estilo1">Encuesta Laboral 2012</p>
                <p align="center" class="Estilo2">&nbsp;</p>
                <p align="justify" class="Estilo2">&nbsp;</p>
                <p align="justify" class="Estilo2"></p>
            </div>
            <p align="center"><a href="javascript:ajax('div_resultados','action=objetivo','div_presentacion');" style="font-size:30px; color:#06F; text-decoration:none;">Iniciar la Encuesta</a></p>
            <p align="center">&nbsp;</p>
<?
        }//fin de la funcion presentacion
        
        
        private function mostrarCabecera(){
            //cabecera a mostrar en toda la encuesta
	    echo"<style type='text/css'>
            .Estilo1 {font-family: Verdana, Arial, Helvetica, sans-serif;font-weight: bold;color: #0000FF;font-size: 14px;}
            .Estilo2 {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 9px;}
            .Estilo3 {font-size: 12px;font-weight: bold;}
            .Estilo4 {font-size: 10px;font-weight: bold;}
            .Estilo5 {font-size: 12px}
            .Estilo6 {font-size: 12px;font-weight: bold;}
            .Estilo7 {font-family: Verdana, Arial, Helvetica, sans-serif}
            .Estilo8 {font-size: 12px}
            .Estilo9 {font-size: 12px;font-family: Verdana, Arial, Helvetica, sans-serif;font-weight: bold;}
            .x {text-align: center;}
            #Mensaje .Estilo2 {text-align: center;}
            </style>";
	    echo "<div align='center'>
                    <div id='cabecera' style='border: 1px solid #000000;'>
                        <table width='100%' border='1' style='font-size: 12px;font-family: Verdana,Arial,Helvetica, sans-serif;'>
                            <tr>
                                <td width='191' rowspan='2' style='text-align: center;'><img src='img/LogoII.gif' width='100' height='75' border='0' /></td>
                                <td align='center' width='303'>REVISI&Oacute;N: 01 </td>
                                <td align='center' width='289'>CLAVE:IQFO640101</td>
                                <td align='center' width='195'>EMISI&Oacute;N:23/11/09</td>
                            </tr>
                            <tr>
                                <td align='center' colspan='2'><p>ENCUESTA CLIMA LABORAL</p></td>
                                <td align='center'>P&Aacute;GINA:1 DE 14</td>
                            </tr>
                        </table>
                    </div>
                </div>";
        }//fin de la funcion cabecera
        
    }//fin de la clase
?>