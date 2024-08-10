<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name=$email=$website=$comment=$gender="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=test_input($_POST["name"]);
        $email=test_input($_POST["email"]);
        $comment=test_input($_POST["comment"]);
        $website=test_input($_POST["website"]);
        $gender=test_input($_POST["gender"]);

    }
    function test_input($data){
        $data=trim ($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    ?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> ">
        name: <input type="text" name="name">
        <br><br>
        website:<input type="text" name="website">
        <br><br>
        email:<input type="text" name="email">
        <br><br>
        comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        gender:<input type="radio" name="gender" value="male">male
        <input type="radio" name="gender" value="female">female
        <input type="radio" name="gender" value="other">other 
        <br><br>
        Enter your marks : <input type="number" name="marks">
        <input type="submit" name="submit" value="Submit">
        </form>
        <?php
        
        echo "<h2> Your inputs......! <h2>";
        echo "<br>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $marks=(int)$_POST['marks'];
            if($marks >30 && $marks<50){
                echo "D grade";
            }
            else if($marks>50 && $marks<70 ){
                echo "C grade";
            }
            else{
                echo "invalid value";
            }
            
        }
        
        ?>


<?php
?>
</body>
</html>