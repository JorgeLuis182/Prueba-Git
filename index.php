<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/estilos.css" rel="stylesheet" type="text/css">
        <script src="js/javascript.js"></script>

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="sweetalert2.all.min.js"></script>
        <script src="sweetalert2.min.js"></script>
        <script src="js/javascript.js">
            function saludo() {
                Swal.fire("Hola", "Mundo", "success");
            }
        </script>
        <link rel="stylesheet" href="sweetalert2.min.css">
    </head>
    <body>
        <h1>git empresarial</h1>
        <?php
        echo "Parrafo agregado con exito";
        ?>
        <p>Jorge Luis Lopez Ramos</p>
        <p>CC 00000000000</p>
        <p>Direccion: Cra 24 22 115 centro</p>
    <tr>
        <td>
            <img style="width: 200px;height: 120px;" src="https://static.vecteezy.com/system/resources/previews/003/329/743/non_2x/premium-monkey-tail-black-logo-vector.jpg" alt="No hay imagen">
        </td>
        <td>
            <img style="width: 200px;height: 120px;" src="https://static.vecteezy.com/system/resources/previews/003/329/743/non_2x/premium-monkey-tail-black-logo-vector.jpg" alt="No hay imagen">
        </td>
        <td>
            <img style="width: 200px;height: 120px;" src="https://static.vecteezy.com/system/resources/previews/003/329/743/non_2x/premium-monkey-tail-black-logo-vector.jpg" alt="No hay imagen">
        </td>
    </tr>
    <input type="button" onclick="saludo();" value="Entrar">
</body>
</html>
