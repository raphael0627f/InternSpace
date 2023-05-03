<?php

class Database{
    private function connect(){

        $servername = DBHOST;
        $username = DBUSER;
        $password = DBPASS;
        $dbname = DBNAME;


        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function query($query, $data = array(), $data_type = "object"){
        $conn = $this->connect();
        $stmt = $conn->prepare($query);

        if($stmt){
            $checar = $stmt->execute($data);
            if($checar){
                if($data_type = "object"){
                    $data = $stmt->fetchall(PDO::FETCH_OBJ);
                }else{
                    $data = $stmt->fetchall(PDO::FETCH_ASSOC);
                }
                if(is_array($data) && count($data)>0){
                    return $data;
                }
            }
        }
            
        
    }
}
?>