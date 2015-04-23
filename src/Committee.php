<?php

    class Committee
    {
        private $committee_name;
        private $department;
        private $description;
        private $id;

        function __construct($committee_name, $department, $description, $id = null)
        {
            $this->committee_name = $committee_name;
            $this->department = $department;
            $this->description = $description;
            $this->id = $id;
        }

        function getCommitteeName()
        {
            return $this->committee_name;
        }

        function setCommitteeName($new_committee_name)
        {
            $this->committee_name = (string) $new_committee_name;
        }

        function getDepartment()
        {
            return $this->department;
        }

        function setDepartment($new_department)
        {
            $this->department = (string) $new_department;
        }

        function getDescription()
        {
            return $this->description;
        }

        function setDescription($new_description)
        {
            $this->description = (string) $new_description;
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
            $statement = $GLOBALS['DB']->query("INSERT INTO committees (committee_name, department, description) VALUES ('{$this->getCommitteeName()}', '{$this->getDepartment()}', '{$this->getDescription()}') RETURNING id;");
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            $this->setId($result['id']);
        }

        function update($new_committee_name, $new_department, $new_description)
        {
            $GLOBALS['DB']->exec("UPDATE committees SET committee_name = '{$new_committee_name}' WHERE id = {$this->getId()};");
            $this->setCommitteeName($new_committee_name);

            $GLOBALS['DB']->exec("UPDATE committees SET department = '{$new_department}' WHERE id = {$this->getId()};");
            $this->setDepartment($new_department);

            $GLOBALS['DB']->exec("UPDATE committees SET description = '{$new_description}' WHERE id = {$this->getId()};");
            $this->setDescription($new_description);
        }

        function delete()
        {
            $GLOBALS['DB']->exec("DELETE FROM committees WHERE id={$this->getId()};");
        }

        static function getAll()
        {
            $query = $GLOBALS['DB']->query("SELECT * FROM committees;");
            $returned_committees = $query->fetchAll(PDO::FETCH_ASSOC);

            $committees = [];
            foreach($returned_committees as $committee) {
                $committee_name = $committee['committee_name'];
                $department = $committee['department'];
                $description = $committee['description'];
                $id = $committee['id'];
                $new_committee = new Committee($committee_name, $department, $description, $id);
                array_push($committees, $new_committee);
            }
            return $committees;
        }

        static function deleteAll()
        {
            $GLOBALS['DB']->exec("DELETE FROM committees *;");
        }

        static function find($search_id)
        {
            $found_committee = null;
            $all_committees = Committee::getAll();

            foreach($all_committees as $committee) {
                $committee_id = $committee->getId();
                if($committee_id === $search_id) {
                    $found_committee = $committee;
                }
            }
            return $found_committee;
        }

        function addEvent($new_event)
        {
            $GLOBALS['DB']->exec("INSERT INTO committees_events (committee_id, event_id) VALUES ({$this->getId()}, {$new_event->getId()});");
        }

        

    }

?>
