<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $semestre = "octavo";

    switch ($semestre) {
        case "primero":
            echo "Cálculo Diferencial, Fundamentos de Programación, Taller de Ética, Matemáticas Discretas, Taller de Administración, Fundamentos de Investigación";
            break;
        case "segundo":
            echo "Cálculo Integral, programación Orientada a Objeto, Contabilidad Financiera, Química, Álgebra Lineal, Probabilidad y Estadística";
            break;
        case "trecero":
            echo "Cálculo Vectorial, Estructura de Datos, Cultura Empresarial, Investigación de Operaciones, Desarrollo Sustentable, Física General";
            break;
        case "cuarto":
            echo "Ecuaciones Diferenciales, Métodos Numéricos, Tópicos Av. De programación, Fundamentos de Base de Datos , Simulación, Eléctricos y Aplicaciones, ";
            break;
        case "sexto":
            echo "Lenguajes y Autómatas I, Redes de Computadoras , Taller de Sistemas Operativos, Administración de Base de Datos, Ingeniería de Software, Lenguajes de interfaz, Taller de Investigación I";
            break;
        case "septimo":
            echo "Lenguajes y Autómatas II, y Enrutamiento en Redes, Taller de Investigación II , Gestión de Proyectos de Softwar, Sistemas Programables, Desarrollo de Sistemas Web, Móviles con Lenguajes Nativo";
            break;
        case "octavo":
            echo "Programación Lógica y Funciona, Administración de Redes, Inteligencia Artificia, Programación Web, Aplicaciones Híbridas, Frameworks Web, Bases de Datos No Estructuradas";
            break;
        default:
            echo "!";
    }
    ?>
</body>

</html>