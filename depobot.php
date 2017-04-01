#!/usr/bin/env php

<?php
#created by moutarlier aldwin 2017

#the asciiart for the robot
$robot =  "                 _______\n               _/       \\_\n              / |       | \\\n             /  |__   __|  \\\n            |__/((o| |o))\\__|\n            |      | |      |\n            |\\     |_|     /|\n            | \\           / |\n             \\| /  ___  \\ |/\n              \\ | / _ \\ | /\n               \\_________/\n                _|_____|_\n           ____|_________|____\n          /                   \\\n";

system('clear');
echo $robot;
echo 'Hello ! I\' here for help you in blih ! Do you want help ? yes or no :';  
$handle = fopen("php://stdin", "r");
$rep = trim(fgets($handle));
if($rep == 'yes' && $rep != ''){
    system('clear');
    echo $robot;
    echo "OK let's start ! Give me your repository name :";
    $handle1 = fopen("php://stdin", "r");
    $nameDepo = trim(fgets($handle1));
    if($nameDepo != ''){
        $createDepo = 'blih -u aldwin.moutarlier@epitech.eu repository create '.$nameDepo;
        shell_exec($createDepo);
        fclose($handle1);
        system('clear');
        echo $robot;
        echo 'if you want give rules give me the name of the person else say no :';
        $handle2 = fopen('php://stdin', 'r');
        $droitsLecture = trim(fgets($handle2));
        if($droitsLecture != '' && $droitsLecture != 'no'){
            shell_exec('blih -u aldwin.moutarlier@epitech.eu repository setacl '.$nameDepo.' '.$droitsLecture.' r');
            fclose($handle2);
                system('clear');
                echo $robot;
            echo 'do you want clone '.$nameDepo.' ? say yes or no :';
            $han = fopen('php://stdin', 'r');
            $clone = trim(fgets($han));
            if($clone != 'no' && $clone != ''){
                    system('clear');
                    echo $robot;
                echo 'give me the path of the folder where you want clone this depo or say no :';
                $handle3 = fopen('php://stdin', 'r');
                $path = trim(fgets($handle3));
                if($path != '' && $path != 'no'){
                    shell_exec('git clone git@git.epitech.eu:aldwin.moutarlier@epitech.eu/'.$nameDepo.' '.$path);
                    fclose($handle3);
                }elseif ($path == 'no') {
                        system('clear');
                        echo $robot;
                    shell_exec('git clone git@git.epitech.eu:aldwin.moutarlier@epitech.eu/'.$nameDepo.' '.getcwd());             
                    echo 'ok clone in the current folder !'."\n";
                }
            }else{
                system('clear');
                echo $robot;
                echo 'ok don\'t clone the depo !';
            }
        }elseif($droitsLecture == 'no'){
            system('clear');
            echo $robot;
            echo 'ok you dont give rules !'."\n";
            fclose($handle2);
            system('clear');
            echo $robot;
            echo 'do you want clone '.$nameDepo.' ? say yes or no :';
            $han = fopen('php://stdin', 'r');
            $clone = trim(fgets($han));
            if($clone != 'no' && $clone != ''){
                system('clear');
                echo $robot;
                echo 'give me the path of the folder where you want clone this depo or say no :';
                $handle3 = fopen('php://stdin', 'r');
                $path = trim(fgets($handle3));
                if($path != '' && $path != 'no'){
                    system('clear');
                    echo $robot;
                    echo 'you clone the '.$nameDepo.' in the path : '.$path;
                    system('clear');
                    echo $robot;
                    shell_exec('git clone git@git.epitech.eu:aldwin.moutarlier@epitech.eu/'.$nameDepo.' '.$path);
                    fclose($handle3);
                }elseif ($path == 'no') {
                    system('clear');
                    echo $robot;
                    shell_exec('git clone git@git.epitech.eu:aldwin.moutarlier@epitech.eu/'.$nameDepo.' '.getcwd());             
                    system('clear');
                    echo $robot;
                    echo 'ok clone in the current folder !'."\n";
                    exit;
                }
            }else{
                system('clear');
                echo $robot;
                echo 'ok don\'t clone the depo '.$nameDepo." !\n";
                exit;
            }
        }
        
    }
}else{
    system('clear');
    echo $robot;
    echo "OK see you soon !\n";
    $a = fopen('php://stdin', 'r');
    $b = trim(fgets($a));
    if($b == ''){
        system('clear');
        echo " repository name :";
        $handle1 = fopen("php://stdin", "r");
        $nameDepo = trim(fgets($handle1));
        if($nameDepo != ''){
            $createDepo = 'blih -u aldwin.moutarlier@epitech.eu repository create '.$nameDepo;
            shell_exec($createDepo);
            fclose($handle1);
            system('clear');
            echo 'if you want give rules give the name of the person else say no :';
            $handle2 = fopen('php://stdin', 'r');
            $droitsLecture = trim(fgets($handle2));
            if($droitsLecture != '' && $droitsLecture != 'no'){
                shell_exec('blih -u aldwin.moutarlier@epitech.eu repository setacl '.$nameDepo.' '.$droitsLecture.' r');
                fclose($handle2);
                    system('clear');
                echo 'do you want clone '.$nameDepo.' ? say yes or no :';
                $han = fopen('php://stdin', 'r');
                $clone = trim(fgets($han));
                if($clone != 'no' && $clone != ''){
                        system('clear');
                    echo 'give me the path of the folder where you want clone this depo or say no :';
                    $handle3 = fopen('php://stdin', 'r');
                    $path = trim(fgets($handle3));
                    if($path != '' && $path != 'no'){
                        shell_exec('git clone git@git.epitech.eu:aldwin.moutarlier@epitech.eu/'.$nameDepo.' '.$path);
                        fclose($handle3);
                    }elseif ($path == 'no') {
                            system('clear');
                        shell_exec('git clone git@git.epitech.eu:aldwin.moutarlier@epitech.eu/'.$nameDepo.' '.getcwd());             
                        echo 'ok clone in the current folder !'."\n";
                    }
                }else{
                    system('clear');
                    echo 'ok don\'t clone the depo !';
                }
            }elseif($droitsLecture == 'no'){
                system('clear');
                
                echo 'ok you dont give rules !'."\n";
                fclose($handle2);
                system('clear');
                echo 'do you want clone '.$nameDepo.' ? say yes or no :';
                $han = fopen('php://stdin', 'r');
                $clone = trim(fgets($han));
                if($clone != 'no' && $clone != ''){
                    system('clear');
                    echo 'give me the path of the folder where you want clone this depo or say no :';
                    $handle3 = fopen('php://stdin', 'r');
                    $path = trim(fgets($handle3));
                    if($path != '' && $path != 'no'){
                        system('clear');
                        echo 'you clone the '.$nameDepo.' in the path : '.$path;
                        system('clear');
                        shell_exec('git clone git@git.epitech.eu:aldwin.moutarlier@epitech.eu/'.$nameDepo.' '.$path);
                        fclose($handle3);
                    }elseif ($path == 'no') {
                        system('clear');
                        shell_exec('git clone git@git.epitech.eu:aldwin.moutarlier@epitech.eu/'.$nameDepo.' '.getcwd());             
                        system('clear');
                        echo 'ok clone in the current folder !'."\n";
                        exit;
                    }
                }else{
                    system('clear');
                    echo 'ok don\'t clone the depo '.$nameDepo." !\n";
                    exit;
                }
            }
            
        }
    }
}



/*shell_exec($createDepo);
shell_exec('blih -u aldwin.moutarlier@epitech.eu repository setacl '.$droitsLecture.' r');
shell_exec('git clone git@git.epitech.eu:aldwin.moutarlier@epitech.eu/'.$nameDepo.' /mnt/c/wamp64/www/'.$nameDepo);*/
