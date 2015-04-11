<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    $DB = new PDO('pgsql: host=localhost;dbname=day_test');

    require_once __DIR__.'/../src/User.php';

    class UserTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            User::deleteAll();
        }

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

        function test_setFirstName()
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
            $test_user->setFirstName('Margaret');
            $result = $test_user->getFirstName();

            //Assert
            $this->assertEquals('Margaret', $result);
        }

        function test_getLastName()
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
            $result = $test_user->getLastName();

            //Assert
            $this->assertEquals('Doe', $result);
        }

        function test_setLastName()
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
            $test_user->setLastName('Does');
            $result = $test_user->getLastName();

            //Assert
            $this->assertEquals('Does', $result);
        }

        function test_getEmail()
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
            $result = $test_user->getEmail();

            //Assert
            $this->assertEquals('maggie@me.com', $result);
        }

        function test_setEmail()
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
            $test_user->setEmail('mag@me.com');
            $result = $test_user->getEmail();

            //Assert
            $this->assertEquals('mag@me.com', $result);
        }

        function test_getUsername()
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
            $result = $test_user->getUsername();

            //Assert
            $this->assertEquals('Mags123', $result);
        }

        function test_setUsername()
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
            $test_user->setUsername('Maggie123');
            $result = $test_user->getUsername();

            //Assert
            $this->assertEquals('Maggie123', $result);
        }

        function test_getPassword()
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
            $result = $test_user->getPassword();

            //Assert
            $this->assertEquals('1234', $result);
        }

        function test_setPassword()
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
            $test_user->setPassword('123');
            $result = $test_user->getPassword();

            //Assert
            $this->assertEquals('123', $result);
        }

        function test_getActivityLevel()
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
            $result = $test_user->getActivityLevel();

            //Assert
            $this->assertEquals(2, $result);
        }

        function test_setActivityLevel()
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
            $test_user->setActivityLevel(4);
            $result = $test_user->getActivityLevel();

            //Assert
            $this->assertEquals(4, $result);
        }

        function test_getId()
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
            $result = $test_user->getId();

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_setId()
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
            $test_user->setId(4);
            $result = $test_user->getId();

            //Assert
            $this->assertEquals(4, $result);
        }

        function test_save()
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
            $test_user->save();

            //Act
            $result = User::getAll();

            //Assert
            $this->assertEquals([$test_user], $result);
        }

        function test_getAll()
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
            $test_user->save();

            $first_name = 'Johnny';
            $last_name = 'Doe';
            $email = 'johnny@me.com';
            $username = 'John123';
            $password = '123456';
            $activity_level = 3;
            $id = 2;
            $test_user2 = new User($first_name, $last_name, $email, $username, $password, $activity_level, $id);
            $test_user2->save();

            //Act
            $result = User::getAll();

            //Assert
            $this->assertEquals([$test_user, $test_user2], $result);
        }

        function test_deleteAll()
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
            $test_user->save();

            $first_name = 'Johnny';
            $last_name = 'Doe';
            $email = 'johnny@me.com';
            $username = 'John123';
            $password = '123456';
            $activity_level = 3;
            $id = 2;
            $test_user2 = new User($first_name, $last_name, $email, $username, $password, $activity_level, $id);
            $test_user2->save();

            //Act
            User::deleteAll();
            $result = User::getAll();

            //Assert
            $this->assertEquals([], $result);
        }

    }

?>
