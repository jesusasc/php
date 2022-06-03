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

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $a = floatval ($_POST['a']);
    $b = floatval ($_POST['b']);
    $suma=$a+$b;
    $resta=$a-$b;
    $multiplicacion=$a*$b;
    if($b==0)
        $division=0;
    else
        $division=$a/$b;
    echo 'Valor de division: ' . $division . "<br/>\n";
    echo 'Valor de multiplicacion: ' . $multiplicacion . "<br/>\n";
    echo 'Valor de resta: ' . $resta . "<br/>\n";
    echo 'Valor de suma: ' . $suma . "<br/>\n";
} 
?>
        <form method="post">
                <tbody>
                    <tr>
                        <td>
                            <label for="a">Ingresa el valor de a:</label>
                        </td>
                        <td>
                            <input name="a" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="b">Ingresa el valor de b:</label>
                        </td>
                        <td>
                            <input name="b" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2" rowspan="1">
                            <input value="Procesar" type="submit" />
                        </td>
                    </tr>
                </tbody>
        </form>
</body>
</body>
</html>