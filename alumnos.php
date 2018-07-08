<?php include 'parcial/cabecera.php' ?>
<body>
    <div class="header">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="cursos.php">CURSOS</a></li>
            <li><a class="activo" href="alumnos.php">ALUMNOS</a></li>
        </ul>
    </div>
    <div class="content">
        <h1>Alumnos</h1>
        <p>A continuación se listan todos los alumnos.</p>
        <table>
                <thead>
                    <tr>
                        <th>NOMBRE</th>
                    </tr>
                </thead>            
                <tbody>
                    <tr>
                        <td><a href= "alumno.php">Nombrealumno1</a></td>
                    </tr>
                </tbody>   
                <tbody>
                    <tr>
                        <td><a href= "alumno.php">Nombrealumno2</a></td>
                    </tr>
                </tbody>           
            </table>
    </div>
</body>
</html>