<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['submit-form'])) {
    $name = htmlspecialchars(trim($_GET['name']));
    $email = htmlspecialchars(trim($_GET['email']));
    $corsec = htmlspecialchars(trim($_GET['CorSec']));
    $password = htmlspecialchars(trim($_GET['Password']));
    $rePassword = htmlspecialchars(trim($_GET['RePassword']));
    
    if ($password === $rePassword) {
        echo "<script>alert('Signup successful!');</script>";
    } else {
        echo "<script>alert('Passwords do not match.');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Page Title</title>
</head>
<body>
    <div class="title">
        <h2 id="title-header">EXERCISE #4</h2>
    </div>
    <div class="body-content">
        <div class="content-1">
            <form action="" method="GET">
                <table>
                    <tr>
                        <h4><th>Name:</th><td><input type="text" name="name" required></td></h4>
                    </tr>
                    <tr>
                        <h4><th>E-mail:</th><td><input type="text" name="email" required></td></h4>
                    </tr>
                    <tr>
                        <h4><th>Course and Section (BSIT-IT3H):</th><td><input type="text" name="CorSec" required></td></h4>
                    </tr>
                    <tr>
                        <h4><th>Password:</th><td><input type="password" name="Password" required></td></h4>
                    </tr>
                    <tr>
                        <h4><th>Re-Type Password:</th><td><input type="password" name="RePassword" required></td></h4>
                    </tr>
                </table>
                <br>
                <center><button class="btn-styles" name="submit-form" type="submit">Submit</button></center>
            </form>
        </div>
        <div class="content-2">
            <center><h4>Content will show here upon submit</h4></center><hr>
            <?php
                if (isset($_GET['submit-form'])) {
                    $name = htmlspecialchars( $_GET['name']);
                    $email = htmlspecialchars($_GET['email']);
                    $CorSec = htmlspecialchars($_GET['CorSec']);
                    $password = htmlspecialchars($_GET['Password']);
                    $repassword = htmlspecialchars($_GET['RePassword']);
                    // tinitignan dito kung the same ba yung password
                    if ($password === $repassword) {
                        
                        $file = 'savedsignup.php';
                        $a = [];

                        if (file_exists($file)) {
                            include($file);
                        }

                        $a[] = $name; 

                        $content = "<?php\n";
                        foreach ($a as $name) {
                            $content .= "\$a[] = \"" . addslashes($name) . "\";\n"; 
                        }
                        $content .= "?>";

                        file_put_contents($file, $content);

                        // Dinidisplay yung mga data na nasubmit sa form
                        echo "<h4>Account Successfully Created</h4>";
                        echo "<p><strong>Name:</strong> $name</p>";
                        echo "<p><strong>Email:</strong> $email</p>";
                        echo "<p><strong>Course and Section:</strong> $CorSec</p>";
                        echo "<p><strong>Password:</strong> Correct Password ($password)</p>";
                    } else {
                        echo "<p style='color:red;'><strong>Password:</strong> Passwords do not match!</p>";
                    }
                }
                $name = $email = $gender = $comment = $website = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = test_input($_POST["name"]);
                    $email = test_input($_POST["email"]);
                    $website = test_input($_POST["CorSec"]);
                    $comment = test_input($_POST["Password"]);
                    $gender = test_input($_POST["RePassword"]);
                }

                function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
            ?>
        </div>
    </div>
</body>
</html>
