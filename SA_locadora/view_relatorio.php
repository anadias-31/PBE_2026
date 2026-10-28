<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Locadora Veículos</title>
</head>
<body>
    <h1>Contrato de locação</h1>
    <p><b>Cliente: </b> <?= $nome ?></p> 
    <p><b>Email: </b><?= $email ?></p> 
    <p><b>Retirada: </b><?= $data ?></p> 
    <p><b>Devolução: </b><?= $dias?></p> 
    <br>
    <h2>Adicionais</h2>
    <p><b>Seguro total:</b><?= $seguro ?></p> 
    <p><b>GPS:</b><?= $gps ?></p>
    <p><b>Cadeirinha infantil:</b><?= $cadeirinha ?></p> 

    <table border="1">
    <tr>
        <th>Item</th>
        <th>Diária</th>
        <th>Dias</th>
        <th>Subototal</th>
    </tr>

    <tr>
        <td>Veículo Intermediário</td>
        <td>R$<?= $diaria ?> </td>
        <td> <?=$dias?> </td>
        <td> <?=$subtotal?> </td>
    </tr>

    <tr>
        <td>Adicionais</td>
        <td><?= $adicionais ?></td>
        <td><?=$dias?> </td>
        <td><?=$adicionais?> </td>
    </tr>
    </table>

    <p><b>Total</b><?= $subtotal ?></p>
    <p><b>Desconto </b><?= $percentual ?></p>
    <p><b>🎉 Parabéns! Você ganhou <?=$percentual?>% de desconto pela locação longa. </b><p>
    <h3>Total a pagar: R$<?$total?></h3>
</body>
</html>