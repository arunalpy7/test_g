<?php
$servername = "localhost";
$username = "root";
$password = "creatnlrn";
$dbname = "apskelton";
$p=2000;

try {
    $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // $sql = "INSERT INTO employee (id,name, job, sal)
   // VALUES (NULL,'John', 'Doe', 52000)";
   // $sql = 'CALL set_1("ammu3","se",1)';
    $stmt=$con->prepare('CALL set_1(?,?,?)');
    $stmt->bindParam(1, $servername);
    $stmt->bindParam(2, $username);
    $stmt->bindParam(3, $p);
    // use exec() because no results are returned
    $s=$stmt->execute();
    //$result = $stmt->fetch(PDO::FETCH_ASSOC);
    //  $result =$stmt->fetchAll(PDO::FETCH_COLUMN, 0);
     // $result = $stmt->fetchObject();
      $result = $stmt->rowCount();
print_r($result);

   // $result = $stmt->get_result();
    // $stmt->bind_result($id);
   // $stmt->bind_result($district);
        /* fetch value */
    // $stmt->fetch();

     //print_r($con->row_count);
   
   // $output = $stmt->query("select @l_id as id");
    //$row = $output->fetchObject();
   // echo $row->l_id;
//var_dump($row);
   // $last_id = $conn->lastInsertId();
   // echo "New record created successfully. Last inserted ID is: " . $row->id;
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$stmt = null;

//CALL `baashaa`.`user_register`("ar", "jj", 1, 2, "kk", "ll", "bnm", 9447787532, "2017-05-05", "2017-05-05", @l_id);