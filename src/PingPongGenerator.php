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
        }
    }
?>
