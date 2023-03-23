<?php
date_default_timezone_set('America/Bogota');
include 'bd_connect.php';

if( !isset($_POST['nombres']) 
    || !isset($_POST['apellidos']) 
    || !isset($_POST['email']) 
    || !isset($_POST['instagram'])
    || !isset($_POST['telefono']) 
    || !isset($_POST['terminos']) ){
        header('Location: formulario-de-inscripcion.php');
}

$nombres   = strtoupper( $_POST['nombres'] );
$apellidos = strtoupper( $_POST['apellidos'] );
$email     = strtolower( $_POST['email'] );
$instagram = $_POST['instagram'];
$telefono  = $_POST['telefono'];
$terminos  = 'Acepto';
$fecha     = date("Y-m-d H:i:s");


// insertar datos en la base de datos
$sql = "INSERT INTO tu_tabla VALUES ('$nombres','$apellidos','$email','@$instagram','$telefono','$terminos','$fecha' )";
$stmt = $pdo->prepare($sql);
$stmt->execute();


$mensaje   = '<p>Acabas de inscribirte como cliente mayorista TUEMPRESA.</p>
<p>Al hacer tu primera compra de nuestra marca registrad@, podrás acceder a un portafolio amplio de vídeos, tutoriales, fotos y testimonios para generar grandes ventas. Y por lo cuál también te comprometes a hacer uso adecuado de estos recursos ya que son sólo de uso exclusivo de nuestra marca.</p>

<a href="https://tuempresa.com/pagina_boton_de_descarga">Catálogo mayorista de TUEMPRESA</a></p>
<p><br><a href="https://www.instagram.com/TUEMPRESA" style="color: tomato; font-weight: bold">@TUEMPRESA</a></p>';

// Direcciones de email a las que se enviará el correo
$destinatarios = array(
  $email,
  'servicioalcliente@tuempresa.com'
);

// Asunto del correo
$asunto = 'Inscripción como cliente mayorista en la marca TUEMPRESA';

// Cuerpo del correo
$cuerpo = '<html><head><meta charset="utf-8"></head><body>';
$cuerpo .= '<p><strong>Nombres:</strong> ' . $nombres . '<br>';
$cuerpo .= '<strong>Apellidos:</strong> ' . $apellidos . '<br>';
$cuerpo .= '<strong>Email:</strong> ' . $email . '<br>';
$cuerpo .= '<strong>Instagram:</strong> @' . $instagram . '<br>';
$cuerpo .= '<strong>Telefono:</strong> ' . $telefono . '<br>';
$cuerpo .= '<strong>Acepta términos y condiciones:</strong> Acepto </p>';
$cuerpo .= $mensaje;
$cuerpo .= '</body></html>';

// Enviar email tipo html
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
// Cabeceras del correo
$cabeceras .= "From: TUEMPRESA <servicioalcliente@tuempresas.com>";

// Enviar el correo a cada destinatario
foreach ($destinatarios as $destinatario) {
  mail($destinatario, $asunto, $cuerpo, $cabeceras);
}

// Redirigir al usuario a una página de confirmación
header('Location: https://tuempresa.com/catalogo-mayorista/');
?>
