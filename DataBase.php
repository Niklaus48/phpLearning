<?php


//how you connect to data base
function ConnectToDataBase()
{
    $serverName = "locallhost";
    $userName = "root";
    $password = "mysql";
    $DbName = "Users";

    try {
        $connection = new PDO("mysql:host=$serverName; dbname=$DbName",$userName,$password);
        $connection -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "Connect SuccessFully";
    }
    catch (PDOException $e){
        echo $e -> getMessage();

    }
}

//how you create new DataBase
function CreateNewDataBase()
{
    $serverName = "locallhost";
    $userName = "root";
    $password = "mysql";

    try {
        $connection = new PDO("mysql:host=$serverName;",$userName,$password);
        $connection -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $query = "CREATE DATABASE pdo";
        $connection -> exec($query);
        echo "DataBase Created";
    }
    catch (PDOException $e){
        echo $e -> getMessage();

    }
    $connection = null;
}

//how you create new table in data base
function CreateNewTable()
{
    $serverName = "locallhost";
    $userName = "root";
    $password = "mysql";
    $dbName = "pdo";

    try {
        $connection = new PDO("mysql:host=$serverName; dbname=$dbName",$userName,$password);
        $connection -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE TABLE users(Id INT(6) AUTO_INCREMENT PRIMERY KEY,FullName VARCHAR(30) not null ,LastName varchar(30) not null ,Email varchar(50))";
        $connection -> exec($sql);
        echo "Table Created";
    }
    catch (PDOException $e){
        echo $e -> getMessage();

    }
    $connection = null;
}

//how you insert data into your table
function InsertDataIntoTable()
{
    $serverName = "locallhost";
    $userName = "root";
    $password = "mysql";
    $dbName = "pdo";

    try {
        $connection = new PDO("mysql:host=$serverName; dbname=$dbName",$userName,$password);
        $connection -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = "insert into users(FullName,LastName,Email) values ('Amin','Alipoor','Amin@gmail.com')";
        $connection -> exec($sql);
        echo "Data Inserted";
    }
    catch (PDOException $e){
        echo $e -> getMessage();

    }
    $connection = null;
}

//how you get data from table

function GetData()
{
    $serverName = "locallhost";
    $userName = "root";
    $password = "mysql";
    $dbName = "pdo";

    try {
        $connection = new PDO("mysql:host=$serverName; dbname=$dbName",$userName,$password);
        $connection -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = "select * from users";
        $result = $connection -> query($sql);
        //after that we most create a table using html and put the data into our table using foreach statement
        echo "success";
    }
    catch (PDOException $e){
        echo $e -> getMessage();

    }
    $connection = null;
}

