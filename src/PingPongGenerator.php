<?php
    class PingPongGenerator
    {
        function generateCountUpArray($input)
        {
            $ping_pong_array = array();
            $i = 1;
            while($i <= $input) {
                array_push($ping_pong_array, $i);
                ++$i;
            }//end while
            return $ping_pong_array;
        }

        function generatePingArray($input)
        {
            $ping_pong_array = array();
            $i = 1;
            while($i <= $input) {
                if(($i % 3) == 0){
                    array_push($ping_pong_array, "ping");
                    ++$i;
                }else{
                    array_push($ping_pong_array, $i);
                    ++$i;
                }
            }//end while
            return $ping_pong_array;
        }//end function


        function generatePongArray($input){
            $ping_pong_array = array();
            $i = 1;
            while($i <= $input) {
                if(($i % 5) == 0){
                    array_push($ping_pong_array, "pong");
                    ++$i;
                }else{
                    array_push($ping_pong_array, $i);
                    ++$i;
                }
            }//end while
            return $ping_pong_array;
        }//end function

        function generatePingPongArray($input)
        {
            $ping_pong_array = array();
            $i = 1;
            while($i <= $input) {

            if(($i % 5 == 0) && ($i % 3 == 0))
            {
                array_push($ping_pong_array, "ping-pong");
            }
            elseif($i % 5 == 0)
            {
                array_push($ping_pong_array, "pong");
            }
            elseif($i % 3 == 0)
                {
                    array_push($ping_pong_array, "ping");
                }
            else{
                array_push($ping_pong_array, $i);
                }
            ++$i;
            }//end while
            return $ping_pong_array;
        }//end function

    }
?>
