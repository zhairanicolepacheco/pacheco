<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div id="calcu-box">
        <h3 id="calcu">CALCULATOR</h3>
        <div id="input-box">
            <form id = "main" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <input type="text" name="input1" class="container" id="input1" placeholder="Enter number 1">
                <input type="text" name="input2" class="container" id="input2" placeholder="Enter number 2">
                <div id = "operator"><label><input type="radio" name="operator" value="+" checked> + </label>
                <label><input type="radio" name="operator" value="-"> - </label>
                <label><input type="radio" name="operator" value="x"> x </label>
                <label><input type="radio" name="operator" value="÷"> ÷ </label>
                <button id = "calculate" type="submit" name="calculate"> = </button></div>
            </form>
            <div id="result">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['calculate'])) {
                    $num1 = $_POST["input1"];
                    $num2 = $_POST["input2"];
                    $operator = $_POST["operator"];
                    $result = "  ";
            
                    switch ($operator) {
                        case '+':
                            $result = $num1 + $num2;
                            break;
                        case '-':
                            $result = $num1 - $num2;
                            break;
                        case 'x':
                            $result = $num1 * $num2;
                            break;
                        case '÷':
                            if ($num2 != 0) {
                                $result = $num1 / $num2;
                            } else {
                                $result = "Cannot divide by zero!";
                            }
                            break;
                        default:
                            $result = "Invalid operator!";
                    }
            
                    echo "<input type=\"text\" class=\"container\" id=\"result\" value=\"Result: $num1 $operator $num2 = $result\" readonly>";
                } else {
                    // If the form is not submitted, show an empty input field
                    echo "<input type=\"text\" class=\"container\" id=\"result\" value=\"\" readonly>";
                }
                ?>
            </div>
        </div>

        <h6 id = "display">NOTE: Buttons are for display only</h6>
        <div id = "button-box">
            <form id = "numbers">
                <div id = "column2">   
                    <div id = "row1">
                        <button class = "btn" id = "ac" name = "ac"> AC </button> 
                        <button class = "btn" id = "c" name = "c"> C </button>
                        <button class = "btn" id = "enter" name = "enter"> ENTER </button>
                    </div>

                    <div id = "row2">
                        <button class = "btn" id = "seven" name = "num7"> 7 </button>
                        <button class = "btn" id = "eight" name = "num8"> 8 </button>
                        <button class = "btn" id = "nine" name = "num9"> 9 </button>
                    </div>

                    <div id = "row3">
                        <button class = "btn" id = "four" name = "num4"> 4 </button>
                        <button class = "btn" id = "five" name = "num5"> 5 </button>
                        <button class = "btn" id = "six" name = "num6"> 6 </button>
                    </div>

                    <div id = "row4">
                        <button class = "btn" id = "one" name = "num1"> 1 </button>
                        <button class = "btn" id = "two" name = "num2"> 2 </button>
                        <button class = "btn" id = "three" name = "num3"> 3 </button>
                    </div>

                    <div id = "row5">
                        <button class = "btn" id = "zero" name = "num0"> 0 </button>
                        <button class = "btn" id = "cents" name = "num"> . </button>
                        <button type="submit" class = "btn" id = "equal" name = "equal"> = </button> 
                    </div>
                </div>

                <div id = "column1">
                    <button class="btn" id="divide" name="operator" value="÷"> ÷ </button>
                    <button class="btn" id="subtract" name="operator" value="-"> - </button>
                    <button class="btn" id="multiply" name="operator" value="x"> x </button>
                    <button class="btn" id="add" name="operator" value="+"> + </button>
                </div>
            </form> 
        </div> 
    </div>    
</body>
</html>
