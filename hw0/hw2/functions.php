<?php
function task1(array $strings, bool $return = false)
{
    $result = implode("\n", array_map(function (string $str){
    return "<p>$str</p>";
}, $strings));

    if($return == true){

        foreach ($strings as $one){
            echo "$one";
        }

        return $str;

    }
    echo $result;

}





function task2(string $action, ...$args)
{

    foreach($args as $n => $arg){
        if(!is_int($arg) && !is_float($arg)){
            trigger_error('argiment #'.$n.'is not integer or float');
            return 'ERROR: wrong argument';
        }
    }

    switch($action){
        case '+':
            return array_sum($args);
        case '-':
            return array_shift($args) - array_sum($args);
        case '/':
            $result = array_shift($args);
            foreach ($args as $n => $arg){
                if($arg == 0){
                    trigger_error('derive by zero on argument #'.($n + 1) );
                    return 'ERROR : derive by zero';
                }
                $result = $result/$arg;
            }
            return $result;
        case '*':
            $result = 1;
            foreach ($args as $arg){
                $result *= $arg;
            }
         return $result;

        default:
            return 'Error: unknown actions';
    }

}



function task3($a, $b){
    if(is_integer($a) && is_integer($b)){




    echo '<table>';
    for ($i=1;$i <= $a;$i++){
        echo '<tr>';
        for ($j=1;$j<=$b;$j++){
            $result = $i * $j;

            echo '<td>';

            if(is_int($a) && is_int($b)){
                echo $result;
            }  else {
                echo 'Введены не целые числа';
            }

            echo '</td>';
        }

    }
    echo '</table>';
    }
    else echo 'не корректные данные';
}
