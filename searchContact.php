<?php
   include('config/session.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("templates/headTags.php");?>
</head>

<body>
    <div id="root">
        <?php include("templates/header.php");?>
        <div class="titleContainer">
            <h1 class="title">Buscar Contactos</h1>
            <input type="text" name="contacto" placeholder="Nombre del contacto" onkeyup="Actualizar(this.value)">
        </div>

        <div id="results"></div>
    </div>

    <!--===============================================================================================-->
    <script src="src/js/searchContact.js"></script>
    <script src="src/js/contactsAdd.js"></script>

</body>

</html>