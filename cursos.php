<?php include 'parcial/cabecera.php' ?>
<body>
    <div class="header">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a class="activo" href="cursos.php">CURSOS</a></li>
            <li><a href="alumnos.php">ALUMNOS</a></li>
        </ul>
    </div>
    <div class="content">
        <h1>Cursos</h1>
        <table>
            <thead>
                <tr>
                    <th>Sigla</th>
                    <th>Nombre</th>
                    <th>Créditos</th>
                    <th>Alumnos</th>
                    <th></th>
                </tr>
            </thead>            
            <tbody>
                <tr>
                    <td>MAT-1111</td>
                    <td>Matemáticas para la ingenieria</td>
                    <td align="right">10</td>
                    <td align="right">14</td>
                    <td align="center"><a href="curso.php">Ver Curso</a></td>
                </tr>
            </tbody>            
        </table>
    </div>
</body>
</html>