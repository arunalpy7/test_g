<?php

 try {
            $pdo = new PDO("mysql:host=localhost;dbname=apskelton",'root','creatnlrn');
            // execute the stored procedure
            $sql = 'CALL Getemp()';
            // call the stored procedure
            $q = $pdo->query($sql);
            $q->setFetchMode(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error occurred:" . $e->getMessage());
        }
        // while ($r = $q->fetch())
        // {
        	$r = $q->fetch();
        	echo $r['name'];
            $last_id = $pdo->lastInsertId();
            echo "last insert id".$last_id;
       // }

?>