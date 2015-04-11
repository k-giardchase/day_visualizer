<?php

    class User
    {
        private $first_name;
        private $last_name;
        private $email;
        private $username;
        private $password;
        private $activity_level;
        private $id;

        function __construct($first_name, $last_name, $email, $username, $password, $activity_level, $id = null)
        {
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->email = $email;
            $this->username = $username;
            $this->password = $password;
            $this->activity_level = $activity_level;
            $this->id = $id;
        }

        function getFirstName()
        {
            return $this->first_name;
        }

        function setFirstName($new_first_name)
        {
            $this->first_name = (string) $new_first_name;
        }

        function getLastName()
        {
            return $this->last_name;
        }

        function setLastName($new_last_name)
        {
            $this->last_name = (string) $new_last_name;
        }

        function getEmail()
        {
            return $this->email;
        }

        function setEmail($new_email)
        {
            $this->email = (string) $new_email;
        }

        function getUsername()
        {
            return $this->username;
        }

        function setUsername($new_username)
        {
            $this->username = (string) $new_username;
        }

        function getPassword()
        {
            return $this->password;
        }

        function setPassword($new_password)
        {
            $this->password = (string) $new_password;
        }

        function getActivityLevel()
        {
            return $this->activity_level;
        }

        function setActivityLevel($new_activity_level)
        {
            $this->activity_level = (int) $new_activity_level;
        }

        function getId()
        {
            return $this->id;
        }

        function setId($new_id)
        {
            $this->id = (int) $new_id;
        }

        function save()
        {
            $statement = $GLOBALS['DB']->query("INSERT INTO users (first_name, last_name, email, username, password, activity_level) VALUES ('{$this->getFirstName()}', '{$this->getLastName()}', '{$this->getEmail()}', '{$this->getUsername()}', '{$this->getPassword()}', {$this->getActivityLevel()}) RETURNING id;");
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            $this->setId(result['id']);
        }

        static function getAll()
        {
            $query = $GLOBALS['DB']->query("SELECT * FROM users;");
            $returned_users = $query->fetchAll(PDO::FETCH_ASSOC);

            $users = [];

            foreach($returned_users as $user) {
                $first_name = $user['first_name'];
                $last_name = $user['last_name'];
                $email = $user['email'];
                $username = $user['username'];
                $password = $user['password'];
                $activity_level = $user['activity_level'];
                $id = $user['id'];
                $new_user = new User($first_name, $last_name, $email, $username, $passwod, $activity_level, $id);
                array_push($users, $new_user);
            }

            return $users;
        }

        static function deleteAll()
        {
            $GLOBALS['DB']->exec("DELETE FROM users *;");
        }
    }

?>
