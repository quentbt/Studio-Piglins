<?php

require_once 'identifiant.php';

$db = new PDO('mysql:host=' . db_server . ";dbname=" . db_name, db_user, db_mdp);
$query = 'SELECT * FROM collab';
$n = $db->query($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.2/dist/cerulean/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <?php include "navbar.php" ?>

    <table class="table table-hover mt-4">
        <thead>
            <tr>
                <th>Id</th>
                <th>Métier</th>
                <th>Cout</th>
                <th>nombre collab</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $n->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr class="table-active">
                    <td><?= $row['id_collab'] ?></td>
                    <td><?= $row['metier'] ?></td>
                    <td><?= $row['cout'] ?> </td>
                    <td><?= $row['nbr_collab'] ?> </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>