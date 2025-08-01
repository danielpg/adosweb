
			<div class="nav_header">
				Contacto		
			</div>
		

<?php

$error = 0;

	if(isset($_POST["formsubmitted"])){
		if(!empty($_POST["nombre"]) && !empty($_POST["empresa"]) &&
			!empty($_POST["telefono"]) && !empty($_POST["correo"]) && !empty($_POST["mensaje"])){
			require_once "isocial/system/phpmailer/class.phpmailer.php";
			$Email = new PHPMailer();
			/*
			$Email->IsSMTP(); // telling the class to use SMTP
			$Email->Host       = "mail.adostelecom.com"; // sets the SMTP server
			$Email->Port       = 26;                    // set the SMTP port for the GMAIL server
			$Email->Username   = "system@adostelecom.com"; // SMTP account username
			$Email->Password   = "syst3m";        // SMTP account password
			*/
			//$Email->CharSet = "UTF-8";
			$Email->From= 'system@adostelecom.com';
			$Email->FromName='Ados Telecom';
			$Email->IsHTML(true);
			//$this->Email->AddEmbeddedImage(APP.'/webroot/img/cabecera.jpg', 'logoimg', 'cabecera.jpg','base64','image/jpeg' );
			$Email->AddAddress("danielperales1@hotmail.com");
			$Email->AddAddress("apalomino@adostelecom.com");	
			$Email->Subject = "Contact Form";
			$body = 
			"Nombre:".$_POST["nombre"]."<br>".
			"Empresa:".$_POST["empresa"]."<br>".
			"Telefono:".$_POST["telefono"]."<br>".
			"Celular:".$_POST["celular"]."<br>".
			"Correo:".$_POST["correo"]."<br>".
			"Mensaje:<br>".$_POST["mensaje"]."<br>";
			$Email->Body = $body;

			$Email->Send();
			
			echo "<div class='subtitulo2' style='height:500px'>Formulario enviado. Nos comunicaremos con usted lo mas pronto posible.</div>";
			return;
		} else {
			$error = 1;
		}
	}	
?>

		
		
			Av. Melgarejo N° 629  Urb. Santa Patricia<br>
			La Molina – Lima 12 - Per&uacute;<br>
			Telf. 7856360<br>
			&#118;&#101;&#110;&#116;&#097;&#115;&#064;&#097;&#100;&#111;&#115;&#116;&#101;&#108;&#101;&#099;&#111;&#109;&#046;&#099;&#111;&#109;<br><br>

		
			<div class="subtitulo2">Contacto </div>
		
			<?php if($error): ?>
			<div style="color:red">Error: Completar todos los campos.</div>
			<?php endif; ?>

                   <br>                         
                   <table width='100%' align='' border='0' cellpadding='0' cellspacing='3' bgcolor='#fbfbfb'>
                   <form  method='POST' enctype='multipart/form-data' class="formularioseccion">
                       <tr>
                           <td align='left' width='20%'>*Nombre</td>
                           <td> <input type='text' name='nombre' size='45' maxlength='60' value="<?php echo isset($_POST["nombre"])?$_POST["nombre"]:"" ?>" id='nombre' style="width:340px;"></td>
                       </tr>
                       <tr>

                           <td align='left' width='20%'>Empresa</td>
                           <td> <input type='text' name='empresa' size='45' maxlength='60' value="<?php echo isset($_POST["empresa"])?$_POST["empresa"]:"" ?>" id='nombre'  id='empresa' style="width:340px;"></td>
                       </tr>
                       <tr>
                           <td align='left' width='20%'>*Teléfono</td>
                           <td> <input type='text' name='telefono' size='45' maxlength='60' value="<?php echo isset($_POST["telefono"])?$_POST["telefono"]:"" ?>" id='nombre'  id='telefono' style="width:340px;"></td>
                       </tr>

                       <tr>
                           <td align='left' width='20%'>Celular</td>
                           <td> <input type='text' name='celular' size='45' maxlength='60' value="<?php echo isset($_POST["celular"])?$_POST["celular"]:"" ?>" id='nombre'  id='celular' style="width:340px;"></td>
                       </tr>
                       <tr>
                           <td align='left' width='22%'>*Correo Electrónico</td>
                           <td> <input type='text' name='correo' size='45' maxlength='60' value="<?php echo isset($_POST["correo"])?$_POST["correo"]:"" ?>" id='nombre'  id='correo' style="width:340px;"></td>

                       </tr>
                                <input type="hidden" name="formsubmitted" value="1">          
                        <tr>

                            <td align='center' colspan='2'><td>&nbsp;</td>
                        </tr>                                            
                        <tr>
                            <td align='center' colspan='2'><b>MENSAJE</b></td>
                        </tr>                                                                                      
                        <tr>
                            <td align='center' colspan='2'>
                                <textarea name='mensaje' id='mensaje' style="width:430px; height:150px;"><?php echo isset($_POST["mensaje"])?$_POST["mensaje"]:"" ?></textarea>
                            </td> 
                        </tr>   
                        <tr>

                            <td align='center' colspan='2'><td>&nbsp;</td>
                        </tr>                                            
                        <tr>
                            <td align='center' colspan='2'><input type="submit" value=" Enviar " onclick='return validar_contacto();'> 
                                <input type="reset" value=" Borrar " ></td>
                        </tr> 
                    </form>
                    </table>

			
