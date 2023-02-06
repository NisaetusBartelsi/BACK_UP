<?php
class bangundatar
{
    public $circle ;
    public $retangle ;
    public $trapesium ;

    function __construct()
    {   
        echo "What the area you want to count (circle , retangle , trapesium)?". PHP_EOL;
        $nilai = trim(fgets(STDIN));
        if($nilai == "circle"){

            echo "input the radius what you want to count ?" . PHP_EOL;
            echo "Radius =  ";
            $r = trim(fgets(STDIN));
            if ($r  % 7 == 0 ){
                $π = 22/7;
            } else{
                $π = 3.14;
            }
            $this->circle = $r * $r * $π ;
            echo "Circle Area is  ".$this->circle . "cm" . PHP_EOL;
    
        } else if ($nilai == "retangle")
        {
            echo "Input the Weidht in (cm)". PHP_EOL;
                $w = trim(fgets(STDIN));
            echo "Input the Height in (cm)". PHP_EOL;
                $h = trim(fgets(STDIN));
                    $this->retangle = $w * $h ;
            echo "Retangle Area is " . $this->retangle . "cm" . PHP_EOL;
        }else if($nilai == "trapesium")
        {
            echo "Input the pedestal roof (in) (cm)" . PHP_EOL;
                $p = trim(fgets(STDIN));
            echo "Input the pedestal floor (in) (cm)" . PHP_EOL;
                $p1 = trim(fgets(STDIN));
            echo "Input the Height (in) (cm)" . PHP_EOL;
                $h = trim(fgets(STDIN));
                    $this->trapesium = ($p + $p1) * $h / 2 ;
            echo "Trapesium Area is " . $this->trapesium . "cm" . PHP_EOL;        
        }else {
            echo " SORRY LUROB CANNOT TO COUNT THIS ". PHP_EOL ;
        }
            echo "do you want to count again (yes or no)? ";
            $for = trim(fgets(STDIN));
        
            if($for == "yes"){
                while($for == "yes"){
                    echo "What the area you want to count (circle , retangle , trapesium)?". PHP_EOL;
                    $nilai = trim(fgets(STDIN));
                    if($nilai == "circle"){
            
                        echo "input the radius what you want to count ?" . PHP_EOL;
                        echo "Radius =  ";
                        $r = trim(fgets(STDIN));
                        if ($r  % 7 == 0 ){
                            $π = 22/7;
                        } else{
                            $π = 3.14;
                        }
                        $this->circle = $r * $r * $π ;
                        echo "Circle Area is  ".$this->circle . "cm" . PHP_EOL;
                
                    } else if ($nilai == "retangle")
                    {
                        echo "Input the Weidht in (cm)". PHP_EOL;
                            $w = trim(fgets(STDIN));
                        echo "Input the Height in (cm)". PHP_EOL;
                            $h = trim(fgets(STDIN));
                                $this->retangle = $w * $h ;
                        echo "Retangle Area is " . $this->retangle . "cm" . PHP_EOL;
                    }else if($nilai == "trapesium")
                    {
                        echo "Input the pedestal roof (in) (cm)" . PHP_EOL;
                            $p = trim(fgets(STDIN));
                        echo "Input the pedestal floor (in) (cm)" . PHP_EOL;
                            $p1 = trim(fgets(STDIN));
                        echo "Input the Height (in) (cm)" . PHP_EOL;
                            $h = trim(fgets(STDIN));
                                $this->trapesium = ($p + $p1) * $h / 2 ;
                        echo "Trapesium Area is " . $this->trapesium . "cm" . PHP_EOL;        
                    }else {
                        echo " SORRY LUROB CANNOT TO COUNT THIS ". PHP_EOL ;
                    }
                        echo "do you want to count again (yes or no)? ";
                        $for = trim(fgets(STDIN));
                    
                        if($for == "yes"){
            
                        }else if($for == "no"){
                            echo "Nice to Meet you and Have a nice day" . PHP_EOL ;
                        }else{
                            echo "LUROB DOESNOT UNDERSTAND" . PHP_EOL ;
                        }
                }
            }else if($for == "no"){
                echo "Nice to Meet you and Have a nice day" . PHP_EOL ;
            }else{
                echo "LUROB DOESNOT UNDERSTAND" . PHP_EOL ;
            }

    }
}

$circle_area = new bangundatar();



?>