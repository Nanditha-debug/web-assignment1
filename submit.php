<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $address = htmlspecialchars($_POST['address']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Submitted Details</title>
<style>
    body{
        background: #e3f2fd;
        font-family: Arial, sans-serif;
        padding: 30px;
    }
    .box{
        width: 500px;
        margin: auto;
        background: white;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0px 0px 20px rgba(0,0,0,0.3);
        border-left: 8px solid #2575fc;
    }
    h2{
        text-align: center;
        color: #2575fc;
    }
    p{
        font-size: 18px;
        color: #333;
    }
    strong{
        color:#d81b60;
    }
</style>
</head>
<body>

<div class="box">
    <h2>Application Submitted Successfully</h2>
    <hr>

    <p><strong>Name:</strong> <?php echo $name; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Phone:</strong> <?php echo $phone; ?></p>
    <p><strong>Gender:</strong> <?php echo $gender; ?></p>
    <p><strong>Address:</strong> <?php echo $address; ?></p>
</div>

</body>
</html>