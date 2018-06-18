<?php



//connexion a la base de donnée
function getConnection()
{
    $dns ="mysql:host=localhost;dbname=highschool";
    $user = "root";
    $password = "";


    try
    {
        $db = new PDO($dns,$user,$password);
    }
    catch(PDOException $ex)
    {
        die($ex->getMessage());
    }
    return $db;

}