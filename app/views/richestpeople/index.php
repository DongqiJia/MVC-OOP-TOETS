<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RichestPeople</title>
</head>
<body>
    <h2><?= $data['title']; ?>
    <hr>

    <table>
        <thead>
            <th>Name</th>
            <th>Nettoworth</th>
            <th>Age</th>
            <th>Company</th>
            <th>Delete</th>
        </thead>
        <tbody>
            <?= $data['rows'];?>
        </tbody>
    </table>
</body>
</html>