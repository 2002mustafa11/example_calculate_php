
<!--
<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
	<h1>Calculator</h1>
	<form method="post" action="">
		<label for="num1">Number 1:</label>
		<input type="number" name="num_1" id="num1" required><br><br>
		<label for="num2">Number 2:</label>
		<input type="number" name="num_2" id="num2" required><br><br>
		<label for="operator">Operator:</label>
		<select name="operator" id="operator">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
			<option value="%">%</option>
			<option value="^">^</option>
			<option value="sqrt">sqrt</option>
			<option value="sin">sin</option>
			<option value="cos">cos</option>
			<option value="tan">tan</option>
			<option value="log">log</option>
			<option value="abs">abs</option>
            <option value="floor">floor</option>
			<option value="ceil">ceil</option>
			<option value="round">round</option>
		</select><br><br>
		<input type="submit" name="submit" value="Calculate">
	</form>

	<?php
	/*if(isset($_POST['submit'])) {
		$num1 = $_POST['num_1'];
		$num2 = $_POST['num_2'];
		$operator = $_POST['operator'];
		
		switch($operator) {
			case '+':
				$result = $num1 + $num2;
				echo "<h2>Result: $num1 + $num2 = $result</h2>";
				break;
			case '-':
				$result = $num1 - $num2;
				echo "<h2>Result: $num1 - $num2 = $result</h2>";
				break;
			case '*':
				$result = $num1 * $num2;
				echo "<h2>Result: $num1 * $num2 = $result</h2>";
				break;
			case '/':
				if($num2 == 0) {
					echo "<h2>Error: Division by zero!</h2>";
				} else {
					$result = $num1 / $num2;
					echo "<h2>Result: $num1 / $num2 = $result</h2>";
				}
				break;
			case '%':
				$result = $num1 % $num2;
				echo "<h2>Result: $num1 % $num2 = $result</h2>";
				break;
			case '^':
				$result = pow($num1, $num2);
				echo "<h2>Result: $num1 ^ $num2 = $result</h2>";
				break;
			case 'sqrt':
				$result = sqrt($num1);
				echo "<h2>Result: sqrt($num1) = $result</h2>";
				break;
			case 'sin':
				$result = sin($num1);
				echo "<h2>Result: sin($num1) = $result</h2>";
				break;
			case 'cos':
				$result = cos($num1);
				echo "<h2>Result: cos($num1) = $result</h2>";
				break;
			case 'tan':
				$result = tan($num1);
				echo "<h2>Result: tan($num1) = $result</h2>";
				break;
			case 'log':
				$result = log10($num1);
				echo "<h2>Result: log($num1) = $result</h2>";
				break;
			case 'abs':
				$result = abs($num1);
				echo "<h2>Result: abs($num1) = $result</h2>";
				break;
			case 'floor':
				$result = floor($num1);
				echo "<h2>Result: floor($num1) = $result</h2>";
				break;
			case 'ceil':
				$result = ceil($num1);
				echo "<h2>Result: ceil($num1) = $result</h2>";
				break;
			case 'round':
				$result = round($num1);
				echo "<h2>Result: round($num1) = $result</h2>";
				break;
			default:
				echo "<h2>Error: Invalid operator!</h2>";
				break;
		}
	}*/
	?>
</body>
</html>
-->

<?php

/*
function bows($a){
	
 $i=array_search('(', $a);
//echo array_search(')', $a);
$r = (isset($a[0])) ? $a[++$i] : 0 ;

for ($i; $i  ; $i++) {

	
	if (is_string($a[$i])) {

        if ($a[$i]=='+') {
			$i++;
			$r+=$a[$i];
		}
		if ($a[$i]=='-') {
			$i++;
			$r-=$a[$i];
		}
        if ($a[$i]=='*') {
			$i++;
			$r*=$a[$i];
		}
        if ($a[$i]=='/') {
			$i++;
			$r/=$a[$i];
		}
		if ($a[$i]==')') {
		
		break;
	    }
	}
}
return $r;

}

$a=array(4,'-',3,'*',2,'/','(',3,'+',6,')','-',3,'+',3);
echo bows($a) ;

echo '<hr>';

$a1 = str_split('4+2*2/2+6-2');//array(4, '+', 2, '*', 2, '/', 2, '-', 2, '+', 6);

$r1 = 0;
$operator = '+';

while ($element = array_shift($a1)) {
    if (is_numeric($element)) {
        switch ($operator) {
            case '+':
                $r1 += $element;
                break;
            case '-':
                $r1 -= $element;
                break;
           case '*':
                $r1 *= $element;
                break;
            case '/':
                $r1 /= $element;
                break;
        }
    } else {
        $operator = $element;
    }
}

echo $r1,'<hr>';


echo ord('*'),"<br>";
echo chr(43),"<hr>";

*/

	
function mycalculate($a2){
$a2 = str_split($a2);
$r2 = 0;
$operator = '+';

while ($element = array_shift($a2)) {
	
		
    if (is_numeric($element)) {
		
        switch ($operator) {
            case '+':
                $r2 += $element;
                break;
            case '-':
                $r2 -= $element;
                break;
           case '*':
                $r2 *= $element;
                break;
            case '/':
                $r2 /= $element;
                break;
        }
    

    }else {
        $operator = $element;
	}

 }

return $r2;
}




$ar=str_split("4+(2*3)-2");

for ($i=0; $i <count($ar) ; $i++) { 
	
	if ($ar[$i]=='(') {
		@$bowss.='(';
		for ($i; $i ; $i++) { 

			@$bows.=$ar[$i];
			if ($ar[$i]==')'){break;}
		}
		
	}else{
		
		@$bowss.=$ar[$i];
	}
}

 

for ($i=0; $i < strlen($bowss); $i++) { 
	if ($bowss[$i]=='(') {
		
		$q=mycalculate(ltrim($bows,'('));
		$bowss[$i]=$q;
	}
}


echo mycalculate($bowss),'<br>';
echo 4+(2*3)-2;
    
  echo '<hr>';
/*
$expression = '4+4-2*3-2';
$tokens = str_split($expression);
$stack = array();
$operators = array('+', '-', '*', '/');
$open_parentheses = 0;
$close_parentheses = 0;

foreach ($tokens as $token) {
    if ($token == '(') {
        $open_parentheses++;
        array_push($stack, array('operator' => '(', 'value' => null));
    } elseif ($token == ')') {
        $close_parentheses++;
        $sub_expression = array();
        while (true) {
            $element = array_pop($stack);
            if ($element['operator'] == '(') {
                break;
            }
            array_unshift($sub_expression, $element);
        }
        $result = calculate($sub_expression);
        array_push($stack, array('operator' => null, 'value' => $result));
    } elseif (in_array($token, $operators)) {
        array_push($stack, array('operator' => $token, 'value' => null));
    } else {
        $last_element = end($stack);
        if (@$last_element['operator'] == null) {
            @$last_element['value'] .= $token;
            array_pop($stack);
            array_push($stack, $last_element);
        } else {
            array_push($stack, array('operator' => null, 'value' => $token));
        }
    }
}

while ($open_parentheses > $close_parentheses) {
    array_push($stack, array('operator' => ')', 'value' => null));
    $close_parentheses++;
}

$result = calculate($stack);
echo $result;

function calculate($stack) {
    $result = 0;
    $operator = '+';
    foreach ($stack as $element) {
        if (@$element['operator'] == null) {
            $value = $element['value'];
            switch ($operator) {
                case '+':
                    $result += $value;
                    break;
                case '-':
                    $result -= $value;
                    break;
                case '*':
                    $result *= $value;
                    break;
                case '/':
                    $result /= $value;
                    break;
            }
        } else {
            $operator = $element['operator'];
        }
    }
    return $result;
}
*/