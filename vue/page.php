<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php?action=page2" method="post">
    <input type="text", name="value">
    <button>valide</button>

    <?php
    $req = getAllBdd();
    while ($data = $req->fetch()){
        ?>
        <p><?= $data['text']?> <a href="index.php?action=delete&id=<?=$data['id']?>">X</a></p>
    <?php
    }
    ?>
</form>
</body>
</html>