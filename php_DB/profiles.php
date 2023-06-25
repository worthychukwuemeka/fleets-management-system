<?php

    class Profiles
    {
        public function get_user_table($id)
        {
            $DB = new Database();
            $query = "select * from drivers where driver_id = '$id' limit 1";
            return $DB->read_db($query);
        }
    }

?>