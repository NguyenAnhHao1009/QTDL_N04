<?php
    
try{
    $dbhost = 'localhost';
    $dbname = 'user_db';
    $dbuser = 'root';
    $dbpass = 'root';

    $dsn = "mysql:host={$dbhost};dbname={$dbname}";
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    $PDO = new PDO($dsn, $dbuser, $dbpass, $options);

    $sql = 'SELECT * from tai_khoan';
    $stmt = $PDO->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $row) {
        echo('<pre>');
      print_r($row);
      echo('</pre>');
    }


}catch(PDOException $e){
    echo $e->getMessage();
    exit();
}

?>