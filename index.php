<?php include 'parcial/cabecera.php' ?>
<body>
    <div class="header">
        <ul>
            <li><a class="activo" href="index.php">HOME</a></li>
            <li><a href="cursos.php">CURSOS</a></li>
            <li><a href="alumnos.php">ALUMNOS</a></li>
        </ul>
    </div>
    <div class="content">
        <?php 
            $suma = 1 + 1; 
        ?>
        <h1>la suma de 1 + 1 es <?php echo $suma ?> </h1>
    </div>
</body>
</html>