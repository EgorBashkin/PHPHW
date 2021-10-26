
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Calculator</h2>

<form   method = "post" action="index.php">

    <p>NUM 1</p>
    <input type="text" name="operand1"  placeholder="первое число">
    <p>NUM 2</p>
    <input type="text" name="operand2"  placeholder="второе число">
    <p><select  name="operation" ></p> 
        <option value="plus">+</option>
        <option value="minus">-</option>
        <option value="divide">/</option>
        <option value="multiply">*</option>
    </select>
    <p><input type="submit" name="submit" value="получить ответ"></p>
    


</form>
</body>
</html>




<?php 

if(isset($_POST['submit'])){
    $operand1 = $_POST['operand1'];
    $operand2 = $_POST['operand2'];
    $operation = $_POST['operation'];

    if(!$operation || (!$operand1 && $operand2 != '0') || (!$operand1 && $operand2 != '0')){
        $error_result = 'не все поля заполнены';
    }

    else {
        switch($operation){
            case 'plus':
                $result = $operand1 + $operand2;
                break;
            case 'minus':
                $result = $operand1 - $operand2;
                break;
            case 'divide':
                if($operand2 == '0'){
                    $error_result = "На ноль делить нельзя";
                                    }
                else {$result = $operand1 / $operand2;
                    }
                    break;
               
            case 'multiply':
                $result = $operand1 * $operand2;
                break;
        }
    }
    if (isset($error_result)){
        echo "Ошибка $error_result";
    }
    else{
        echo "Ответ: $result";
    }

}
?>

    


