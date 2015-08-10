<?php
    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {

//1. Print out numbers in order until the number the user enters is printed.

//Input: 21
//Output: 1,2,3,4,...,11

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
        }//end function

//3. Given a user input of an integer, should return an array of integers except where the number is divisible by 5
//in that case it should be a string "pong"

//Input:  11
//Output: array(1,2,3,4,"pong",6,7,8,9,"pong",11)
        function test_generatePongArray()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 11;

            //Act
            $result = $test_PingPongGenerator->generatePongArray($input);

            //Assert
            $this->assertEquals(array(1,2,3,4,"pong",6,7,8,9,"pong",11), $result);

        }//end function


//4. Given a user input of an integer, should count up and push to an array.
//If the value is divisible by 3 should push "ping", if the value is 5, should push "pong".
//If the value is divisible by BOTH 5 and 3 push "ping-pong".  Return array.
//input: 15
//output: array(1,2,"ping",4,"pong","ping",7,8,"ping","pong",11,"ping",13,14,"ping-pong")

    function test_generatePingPongArray()
    {
        $test_PingPongGenerator = new PingPongGenerator;
        $input = 15;

        //Act
        $result = $test_PingPongGenerator->generatePingPongArray($input);

        //Assert
        $this->assertEquals(array(1,2,"ping",4,"pong","ping",7,8,"ping","pong",11,"ping",13,14,"ping-pong"), $result);
    }
    }//end class

?>
