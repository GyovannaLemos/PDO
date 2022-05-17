<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <form action="../model/gravarAluno.php" method="POST">

    <div>
        <label> Nome: </label>
        <input type="text" name="cxNome"><br>
        
        <label> Email: </label>
        <input type="text" name="cxEmail"><br>
        
        <input type="submit" value="Enviar">
    </div>
    </form>
</body>
</html>