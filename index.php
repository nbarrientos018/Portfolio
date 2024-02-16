<?php

$name = $address = $email = $section = $contact = "";
$nameErr = $addressErr = $emailErr = $sectionErr = $contactErr = ""; 

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty ($_POST["name"])){
        $nameErr = "Name is required";
    }else{
        $name = $_POST["name"];
    }

    if(empty ($_POST["address"])){
        $addressErr = "Address is required";
    }else{
        $address = $_POST["address"];
    }

    if(empty ($_POST["email"])){
        $emailErr = "Email is required";
    }else{
        $email = $_POST["email"];
    }
    
    if(empty ($_POST["section"])){
        $sectionErr = "Section is required";
    }else{
        $section = $_POST["section"];
    }

    if(empty ($_POST["contact"])){
        $contactErr = "Contact is required";
    }else{
        $contact = $_POST["contact"];
    }
}

?>

<style>
    .error{
        color:red;
    }

</style>
<form method="POST" action="<?php htmlspecialchars("PHP_SELF"); ?>">

<input type="text" name="name" value="<?php echo $name ;?>"> <br>
<span class="error"><?php echo $nameErr; ?></span> <br>

<input type="text" name="address" value="<?php echo $address ;?>"> <br>
<span class="error"><?php echo $addressErr; ?></span> <br>

<input type="text" name="email" value="<?php echo $email ; ?>"> <br>
<span class="error"><?php echo $emailErr; ?></span> <br>

<input type="text" name="section" value="<?php echo $section ; ?>"> <br>
<span class="error"><?php echo $sectionErr; ?></span> <br>

<input type="text" name="contact" value="<?php echo $contact ; ?>"> <br>
<span class="error"><?php echo $contactErr; ?></span> <br>

<input type="submit" value="Submit"> <br>

</form>

<hr>

<?php

    if($name && $address && $email && $section && $contact){
        echo $name . "<br>";
        echo $address . "<br>";
        echo $email . "<br>";
        echo $section . "<br>";
        echo $contact . "<br";
        
    }
?>