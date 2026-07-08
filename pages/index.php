<?php
include('../inc/functions.php');
$departments = get_all_departments();

?>
<html>

<head>
    <title>Les news</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <?php include './navbar/navbar.php' ?>
    <div class="container">
        <h1>Liste des départements</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Department Number</th>
                    <th>Department Name</th>
                    <th>Manager actuel</th>
                    <th>Nombre d'employés</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php foreach ($departments as $line) { ?>
                <tbody>
                    <tr>
                        <td><a href="employees.php?dept_no=<?= urlencode($line['dept_no']) ?>"><?= $line['dept_no'] ?></a></td>
                        <td><?= $line['dept_name'] ?></td>
                        <td><?= $line['manager_name'] ?? '—' ?></td>
                        <td><?= number_format($line['nb_employees'], 0, ".", " ") ?></td>
                        <td><a href="dept_form.php?dept_no=<?= urlencode($line['dept_no']) ?>">Éditer</a></td>
                    </tr>
                <?php } ?>
                </tbody>
        </table>
    </div>

</body>

</html>