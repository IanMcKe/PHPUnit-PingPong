<?php
    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {

//1. Print out numbers in order until the number the user enters is printed.

//Input: 21
//Output: 1,2,3,4,...,21

        function test_printNumbersUpToInput()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 11;

            //Act
            $result = $test_PingPongGenerator->generateCountUpArray($input);

            //Assert
            $this->assertEquals(array(1,2,3,4,5,6,7,8,9,10,11), $result);
        }

//2. If a number is divisible by 3 push "ping" to the Ping Pong Array instead of the number.

//Input: 11
//Output: 1,2,ping,4,...,11

        function test_printPingWhenDivisibleByThree()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 11;

            //Act
            $result = $test_PingPongGenerator->generatePingArray($input);

            //Assert
            $this->assertEquals(array(1,2,"ping",4,5,"ping",7,8,"ping",10,11), $result);
        }

    }

?>
