<?php

    class Supervisor
    {
        private $first_name;
        private $last_name;
        private $position_title;
        private $email;
        private $phone;
        private $id;

        function __construct($first_name, $last_name, $position_title, $email, $phone, $id = null)
        {
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->position_title = $position_title;
            $this->email = $email;
            $this->phone = $phone;
            $this->id = $id;
        }
    }

?>
