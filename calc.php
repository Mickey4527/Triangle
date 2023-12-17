<?php

    // a, b, c -> side of triangle
    // a + b > c , b + c > a , c + a > b -> triangle
    // a = b = c -> equilateral
    // a = b != c or a = c != b or b = c != a -> isosceles
    // a != b != c -> scalene
    // a^2 + b^2 = c^2 -> right angle triangle


    // 0.00 <= (a = b = c) => 100.00

    if(isset($_POST['submit'])){
        if(!empty($_POST['side_one']) && !empty($_POST['side_two']) && !empty($_POST['side_three']))
        {
            Triangle($_POST['side_one'], $_POST['side_two'], $_POST['side_three']);
        }
        else{
            echo "Please enter value";
        }
    }
    else{
        echo "Please enter value";
    }

    function Triangle($side_One, $side_Two, $side_Three){
        // check value is numeric or not
        if(is_numeric($side_One) && is_numeric($side_Two) && is_numeric($side_Three)){
            
            // decimal to 2 digit 
            $side_one  = round($side_One, 2);
            $side_two  = round($side_Two, 2);
            $side_three  = round($side_Three, 2);
            //check value is between 0 to 100
            if(($side_one <= 100 && $side_two <= 100 && $side_three <= 100) && ($side_one >= 0 && $side_two >= 0 && $side_three >= 0)){
                //check value is 2 digit or not
                if(strlen($side_one) > 5 || strlen($side_two) > 5 || strlen($side_three) > 5){
                    if($side_one + $side_two > $side_three && $side_two + $side_three > $side_one && $side_three + $side_one > $side_two){
                        if($side_one == $side_two && $side_two == $side_three){
                            echo "Equilateral Triangle";
                        }
                        elseif($side_one == $side_two || $side_two == $side_three || $side_three == $side_one){
                            echo "Isosceles Triangle";
                        }
                        elseif($side_one != $side_two && $side_two != $side_three && $side_three != $side_one){
                            echo "Scalene Triangle";
                        }
                        elseif(pow($side_one, 2) + pow($side_two, 2) == pow($side_three, 2) || pow($side_two, 2) + pow($side_three, 2) == pow($side_one, 2) || pow($side_three, 2) + pow($side_one, 2) == pow($side_two, 2)){
                            echo "Right Angle Triangle";
                        }
                    }
                    else{
                        echo "Not a Triangle";
                    }

                }else{
                    echo "Please enter value upto 2 digit";
                } 

            }
            else{
                echo "Please enter value between 0 to 100";
            }

        }
        else{
            echo "Please enter numeric value";
        }
    }

    
?>