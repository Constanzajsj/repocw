<?php
$nombre = (isset($_POST['nombre']) && $_POST["nombre"] != "")? $_POST ['nombre'] : "Te falta tu nombre";
$apellido = (isset($_POST['apellido']) && $_POST["apellido"] != "")? $_POST ['apellido'] : "Te falta tu apellido";
$edad = (isset($_POST['edad']) && $_POST["edad"] != "")? $_POST ['edad'] : "No nos dijiste tu edad";
$boletos = (isset($_POST['boletos']) && $_POST["boletos"] != "")? $_POST ['boletos'] : "¿Cuántos boletos?";
$tipoboleto = (isset($_POST['tipoboleto']) && $_POST["tipoboleto"] != "")? $_POST ['tipoboleto'] : "xd";
$domicilio = (isset($_POST['domicilio']) && $_POST["domicilio"] != "")? $_POST ['domicilio'] : "¿A dónde te los llevamos jaja?";

if(tipo)
echo "
    <!--Boleto económico-->
    <table border='2'>
        <thead>
            <tr>
                <th colspan='4'>
                    <h2 align='center'>
                        <strong>
                            Boleto económico Six Flags
                        </strong>
                    </h2>  
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td align='center'>
                    $nombre
                </td>
                <td align='center'>
                    $apellido
                </td>
                <td align='center'>
                    $edad
                </td>
                <td rowspan='2'>
                    <img src='https://ih1.redbubble.net/image.875042572.3060/flat,750x,075,f-pad,750x1000,f8f8f8.jpg' alt='jijijji' width='250'>
                </td>
            </tr>
            <tr>
                <td align='center'>
                    $domicilio
                </td>
                <td align='center'>
                    $boletos
                </td>
                <td align='center'>
                    Boleto económico
                </td>
            </tr>
        </tbody>
    </table>
    <!--Boleto normal-->
    <table border='2'>
        <thead>
            <tr>
                <strong>
                    <th colspan='4'>
                        <h2 align='center'>
                            Boleto normal Six Flags
                        </h2>  
                    </th>
                </strong>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td align='center'>
                    $nombre
                </td>
                <td align='center'>
                    $apellido
                </td>
                <td align='center'>
                    $edad
                </td>
                <td rowspan='2'>
                    <img src='https://i.ytimg.com/vi/pgikODYJ40E/maxresdefault.jpg' alt='que pro' width='250'>
                </td>
            </tr>
            <tr>
                <td align='center'>
                    $domicilio
                </td>
                <td align='center'>
                    $boletos
                </td>
                <td align='center'>
                    Boleto normal
                </td>
            </tr>
        </tbody>
    </table>
    <!--Pase dorado-->
    <table border='2'>
        <thead>
            <tr>
                <strong>
                    <th colspan='4'>
                        <h2 align='center'>
                            Pase dorado Six Flags
                        </h2>  
                    </th>
                </strong>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td align='center'>
                    $nombre
                </td>
                <td align='center'>
                    $apellido
                </td>
                <td align='center'>
                    $edad
                </td>
                <td rowspan='2'>
                    <img src='http://cdn3.upsocl.com/wp-content/uploads/2018/11/asdasd-2-21-1024x572.jpg' alt='boleto dorado' width='250'>
                </td>
            </tr>
            <tr>
                <td align='center'>
                    $domicilio
                </td>
                <td align='center'>
                    $boletos
                </td>
                <td align='center'>
                    Pase dorado
                </td>
            </tr>
        </tbody>
    </table>
    <!--Flash Pass-->
    <table border='2'>
        <thead>
            <tr>
                <strong>
                    <th colspan='4'>
                        <h2 align='center'>
                            Flash Pass Six Flags
                        </h2>  
                    </th>
                </strong>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td align='center'>
                    $nombre
                </td>
                <td align='center'>
                    $apellido
                </td>
                <td align='center'>
                    $edad
                </td>
                <td rowspan='2'>
                    <img src='https://www.meme-arsenal.com/memes/4aed1a49ebb2a648fa6aa10fa03a4cc6.jpg' alt='flash' width='250'>
                </td>
            </tr>
            <tr>
                <td align='center'>
                    $domicilio
                </td>
                <td align='center'>
                    $boletos
                </td>
                <td align='center'>
                    Flash Pass
                </td>
            </tr>
        </tbody>
    </table>
    <!--Pase Anual-->
    <table border='2'>
        <thead>
            <tr>
                <strong>
                    <th colspan='4'>
                        <h2 align='center'>
                            Pase Anual Six Flags
                        </h2>  
                    </th>
                </strong>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td align='center'>
                    $nombre
                </td>
                <td align='center'>
                    $apellido
                </td>
                <td align='center'>
                    $edad
                </td>
                <td rowspan='2'>
                    <img src='https://stickerly.pstatic.net/sticker_pack/Lj8OAn7LfLDvFNbKpISg/H8SSLG/35/b6d2e294-540e-4a05-89a9-cee870a2cd85.png' alt='mr increible' width='250'>
                </td>
            </tr>
            <tr>
                <td align='center'>
                    $domicilio
                </td>
                <td align='center'>
                    $boletos
                </td>
                <td align='center'>
                    Pase anual
                </td>
            </tr>
        </tbody>
    </table>
    ";

    ?>