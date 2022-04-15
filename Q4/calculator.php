<!DOCTYPE html>
<head>
	<title>Calculator</title>
    <style>
    div, form {
        display: inline-block;
        
    }
    form {
        margin-left: 10px;
        position: absolute;
    }
    select {
        width: 100px;
    }
    </style>
</head>

<body>
    <div>
	    <h1>Simple Calculator</h1>
        <div>
        <p>
            Enter First Number
        </p>
        <p>
            Select Operator
        </p>    
        <p>
            Enter Second Number
        </p>
        <br>
        <br>
        </div>
        
            <form action="" method="POST" id="quiz-form">
                <p>
                    <input type="number" name="first_num" id="first_num" required="required" />
                </p>
                <p>
                    <select name="operator" id="operator">
                        <option value="Add">+</option>
                        <option value="Subtract">-</option>
                        <option value="Multiply">*</option>
                        <option value="Divide">/</option>
                    </select>
                </p>
                <p>
                    <input type="number" name="second_num" id="second_num" required="required" />
                </p>
                <p>
                    <button type="submit" name="submit">Calculate</button>
                </p>
            </form>
        
    </div>
    <?php
    $first_num = $_POST['first_num'];
    $second_num = $_POST['second_num'];
    $operator = $_POST['operator'];
    $result = '';
    if (is_numeric($first_num) && is_numeric($second_num)) {
        switch ($operator) {
            case "Add":
            $result = $first_num + $second_num;
                break;
            case "Subtract":
            $result = $first_num - $second_num;
                break;
            case "Multiply":
                $result = $first_num * $second_num;
                break;
            case "Divide":
                $result = $first_num / $second_num;
        }
    }
    echo "<br>Answer = ".$result;
    ?>
</body>
</html>