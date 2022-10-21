<?php
declare (strict_types=1);
// function greet($name, $age)
// {
//     echo "Hi $name, you are $age years old";
// }
// greet("Owoyemi", 22);

function add(int $num1, int $num2): int{
 //   echo $num1 * $num2;
 return $num1 + $num2;
}
function sub(int $num1, int $num2): int{
    //   echo $num1 * $num2;
    return $num1 - $num2;
   }
   function mul(int $num1, int $num2): int{
    //   echo $num1 * $num2;
    return $num1 * $num2;
   }
//echo add(10,15);

$stdn = fopen("php://stdin", "r");
print("Enter first number: ");
$first = (int) fgets($stdn);
print("Enter second number: ");
$second = (int) fgets($stdn);
print("Enter 1.Add\n 2.Sub\n 3.Mul\n 4.Div\n 5.Mold\n");
$operator = fgets($stdn);

switch($operator){
    case 1: print(add($first, $second));
    break;
    case 2: print(sub($first, $second));
    break;
    case 3: print(mul($first, $second));
    break;
    default:
    print("Invalid input");
}