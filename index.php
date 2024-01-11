<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Family</th>
            <th>Email</th>
        </tr>

        <?php
        $serverName = "localhost";
        $userName = "root";
        $password = "mysql";
        $dbName = "pdo";

        try {
            $connection = new PDO("mysql:host=$serverName; dbname=$dbName",$userName,$password);
            $connection -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sql = "select * from Users";
            $results = $connection -> query($sql);
            foreach ($results as $result){?>
                <tr>
                    <td> <? echo $result["Id"]?></td>
                    <td> <? echo $result["Name"]?></td>
                    <td> <? echo $result["Family"]?></td>
                    <td> <? echo $result["Email"]?></td>
                </tr>
            <?}
            echo "success";
        }
        catch (PDOException $e){
            echo $e -> getMessage();

        }
        $connection = null;
        ?>
    </table>
</body>
</html>