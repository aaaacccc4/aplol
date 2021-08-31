<?php
$blacklist = array( '\'', '"', '#', '-', '\;', 'bash', 'bin', '<', '>', '\x00', '=', '%', '*', 'select', '(', ')', '%20', '&', '|', '&&');
        function contains($str, $bl){
                foreach($bl as $a){
                        if(strpos($str,$a) !== false){
                                return true;
                        }
                }
                return false;
        }//print $_POST['ip'];
if (isset($_POST['submit'])){
        $target = $_REQUEST[ 'ip' ];
        echo '<pre>';
        if(contains($target,$blacklist))
        echo 'blacklist';
        else{
                echo shell_exec( 'ping -c 3 ' . $target );
                echo '</pre>';
        }
    }
?>

