<?php
    class Database
    {
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $db = "fleets";

        function connect(){
            $connection = mysqli_connect($this->host,$this->username,$this->password,$this->db);
            return $connection;
        }

        function read_db($query)
        {
            $connect = $this->connect();
            $result = mysqli_query($connect,$query);

            if(!$result)
            {
                return false;
            }else{
                $data = false;
                while($row = mysqli_fetch_assoc($result))
                {
                    $data[] = $row;
                }
                return $data;
            }
        }
    }


?>