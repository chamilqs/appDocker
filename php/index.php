<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Samil Quezada</h1>
    <h2>Matricula: 2022-2170</h2>
    <h3>Configuración de variables de entorno</h3>

    <div class="container">
        <div>
            <label>MYSQL_HOST:</label>
            <?php echo $_ENV['MYSQL_HOST']; ?>
        </div>
        <div>
            <label>MYSQL_USER:</label>
            <?php echo $_ENV['MYSQL_USER']; ?>
        </div>
        <div>
            <label>MYSQL_PASSWORD:</label>
            <?php echo $_ENV['MYSQL_PASSWORD']; ?>
        </div>
        <div>
            <label>MYSQL_DATABASE:</label>
            <?php echo $_ENV['MYSQL_DATABASE']; ?>
        </div>
    </div>
</body>
</html>

