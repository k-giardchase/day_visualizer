<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    $DB = new PDO('pgsql: host=localhost;dbname=day_test');

    require_once __DIR__.'/../src/Activity.php';

    class ActivityTest extends PHPUnit_Framework_TestCase
    {
        function test_getActivityName()
        {
            //Arrange
            $activity_name = 'Sleeping';
            $id = 1;
            $test_activity = new Activity($activity_name, $id);

            //Act
            $result = $test_activity->getActivityName();

            //Assert
            $this->assertEquals('Sleeping', $result);
        }

        function test_setActivityName()
        {
            //Arrange
            $activity_name = 'Sleeping';
            $id = 1;
            $test_activity = new Activity($activity_name, $id);

            //Act
            $test_activity->setActivityName('Running');
            $result = $test_activity->getActivityName();

            //Assert
            $this->assertEquals('Running', $result);
        }

        function test_getId()
        {
            //Arrange
            $activity_name = 'Sleeping';
            $id = 1;
            $test_activity = new Activity($activity_name, $id);

            //Act
            $result = $test_activity->getId();

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_setId()
        {
            //Arrange
            $activity_name = 'Sleeping';
            $id = 1;
            $test_activity = new Activity($activity_name, $id);

            //Act
            $test_activity->setId(2);
            $result = $test_activity->getId();

            //Assert
            $this->assertEquals(2, $result);
        }

        function test_save()
        {
            //Arrange
            $activity_name = 'Sleeping';
            $id = 1;
            $test_activity = new Activity($activity_name, $id);
            $test_activity->save();

            //Act
            $result = Activity::getAll();

            //Assert
            $this->assertEquals([$test_activity], $result);
        }

    }

?>
