<html>
<head>
<title>Formulario con Codeigniter</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open('form'); ?>

<h5>Usuario</h5>
<input type="text" name="username" value="" size="20" />

<h5>Contraseña</h5>
<input type="password" class="form-control" placeholder="introduce tu contraseña" name="password"/>

<h5>Confirmar contraseña</h5>
<input type="password" class="form-control" placeholder="introduce tu contraseña" name="password"/>

<h5>Email</h5>
<input type="text" name="email" value="" size="25" />

<div><input type="submit" value="Enviar" /></div>

</form>

</body>
</html>