<html>
<head>
<title>Portada de Codeigniter</title>
</head>
<body>
<h1>CodeIgniter test</h1>
<p>La portada de página web, basada en codeigniter</p>
<p>Estos son los últimos artículos publicados.</p>
<?php
while ($fila = mysql_fetch_array($rs_articulos)){
   echo '<p>';
   echo '<a href="' . site_url('/articulos/muestra' . $fila['id']) . '">' . $fila['titulo'] . '</a>';
   echo '</p>';
}
?>
</body>
</html>