<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    // $DB = new PDO('pgsql: host=localhost;dbname=day_test');

    require_once __DIR__.'/../src/User.php';

    class UserTest extends PHPUnit_Framework_TestCase
    {
        function test_getFirstName()
        {
            //Arrange
            $first_name = 'Maggie';
            $last_name = 'Doe';
            $email = 'maggie@me.com';
            $username = 'Mags123';
            $password = '1234';
            $activity_level = 2;
            $id = 1;
            $test_user = new User($first_name, $last_name, $email, $username, $password, $activity_level, $id);

            //Act
            $result = $test_user->getFirstName();

            //Assert
            $this->assertEquals('Maggie', $result);
        }



    }

?>
