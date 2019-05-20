<?php
session_start();
if (!isset($_SESSION['isLogin'])) {
    header("Location: ../../../public/vista/login.php");
} elseif ($_SESSION['rol'] == 'admin') {
    header("Location: ../admin/index.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../../public/vista/Archivos/indexAd.css">
    <link rel="stylesheet" href="../../../public/vista/Archivos/Tabla2.css">
    <link rel="stylesheet" href="../../../public/vista/Archivos/Tabla.css">
    <link rel="stylesheet" href="../../../public/vista/Archivos/mensaje.css">
    <title>Nuevo Mensaje</title>
</head>

<body>
    <header>
    <h1 class="tittle">Gestion de usuarios</h1>
<div class="menu">
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="nuevoemail.php">Nuevo Mensaje</a></li>
            <li><a href="enviarmensaje.php">Mensajes Enviados</a></li>
            <li><a href="micuenta.php">Mi Cuenta</a></li>
            <li><a href="">Cerrar Sesion</a></li>
        </ul>
    </nav>
</div>

    </header>
    <section>
        <div >
            <h2>Nuevo mensaje</h2>

            <div class="user">
    <div class="userImg">
        <div class="imagen">
            <img src="<?php echo ('../../../img/fotos/' . $_SESSION["codigo"] . '/' . $_SESSION["img"]) ?>" alt="">
        </div>
        <p><span><?php echo ($_SESSION['nombre'] . ' ' . $_SESSION['apellido']) ?></span></p>
    </div>
    <!-- <a href='../../../public/vista/login.php'>Iniciar Sesion</a>"-->

</div id=mensaje>
            <form action="../../controladores/user/nuevoemail.php" method="POST">
            <fieldset>
                <input type="hidden" name="codigoRemitente" value="<?php echo ($_SESSION['codigo']) ?>">
                <br>

                <input type="mail" name="emailDestino" id="emailDestino" required placeholder="Correo de destino"
                    required>
                    <br>
                <input type="text" name="asunto" id="asunto" placeholder="Asunto" required>
                <br>
                <textarea name="mensaje" id="mensaje" cols="50" rows="20" placeholder="Mensaje" required></textarea>
                <input type="submit" value="Enviar" class="boton_personalizado">
                </fieldset>
            </form>
        </div>
    </section>
    <footer >
    <small><strong>
    &#169; Todos los derechos reservados
    <br>Jonnathan Enrique Ochoa Calderon 
    <br>Universidad Politecnica Salesiana
    <br>08-05-2019
    </strong>
    </small>
       
    </footer>
</body>

</html>