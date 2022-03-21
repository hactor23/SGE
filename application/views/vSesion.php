<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="<?php echo base_url();?>controlador/listarClientes" method="POST">

<?php echo "Usuario: ".$this->session->userdata('s_nombre_empleado');?>

<h1>Actualizar datos</h1>

<input type="text" name="txtDni_cliente" placeholder="DNI"></input><br><br>
<input type="text" name="txtNombre" placeholder="Nombre"></input><br><br>
<input type="text" name="txtApellido" placeholder="Apellido"></input><br><br>
<input type="submit" value="Actualizar"></input>


</form>
</body>
</html>