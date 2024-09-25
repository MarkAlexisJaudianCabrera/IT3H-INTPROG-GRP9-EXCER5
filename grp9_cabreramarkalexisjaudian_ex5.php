<!--
    Name: Mark Alexis Jaudian Cabrera
    Section: BSIT-IT3H-IRREGULAR
    Subject: INTPROG-IT3H
    Group: 9
    Exercise #5
-->

<!DOCTYPE html>
<html>
    <head>
        <title>Cabrera - PHP Excercise 4</title>
        <style>
            /* GLOBAL */
            :root{
                --lm-bg-color: #003595;
                --lm-btn-bg-color: #FFC70A;
                --lm-font-b-color: #000;
                --lm-font-w-color: #fff;
                --lm-dpdn-bg-color: #F0F8FF;
                --lm-dpdn-hover-bg-color: #007C00;
                --lm-ex4-bg-color: #20251F;
            }
            body{
                text-align: justify;
                align-items: center;
                background-color: var(--lm-bg-color);
                color: var(--lm-font-b-color);
                font-family: 'Poppins', sans-serif;
                font-size: .8vw;
            }
            #title-header{
                text-align: center;
                color: var(--lm-font-w-color);
            }
            /* END OF GLOBAL */

            /* EXERCISE #3 */
            .php-body{
                max-height: 100% !important;
                width: 20%;
                padding: 1rem;
                margin-top: .5rem;
                border-radius: 1rem;
                border-color: var(--lm-font-b-color) 2px solid;
                box-shadow: 0 4px 1rem rgba(134, 133, 133, 0.5);
                background-color: var(--lm-dpdn-bg-color);
            }
            .btn-styles{
                font-weight: bold;
                font-size: 1rem;
                border-radius: 1.5rem;
                text-align: justify;
                background: var(--lm-btn-bg-color);
                border: none;
                color: var(--lm-bg-color);
                padding: 1rem;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                box-shadow: 0 4px 1rem rgba(134, 133, 133, 0.5);
            }
            .btn-styles:hover{
                background-color: var(--lm-dpdn-hover-bg-color);
                color: var(--lm-font-w-color);
                cursor: pointer;
            }
            /* END OF EXERCISE #3 */

            /* EXERCISE #4 */
            .php-excercise-4{
                max-width: 100% !important;
                max-height: 100% !important;
                color: var(--lm-font-w-color);
            }
            .php-excercise-4 .body-content{
                margin: auto;
                align-self: center;
                align-items: center;
                max-width: 95%;
                background-color: var(--lm-ex4-bg-color);
                border: var(--lm-dpdn-hover-bg-color) solid;
                border-radius: 2rem;
                padding: 2rem;
            }
            .php-excercise-4 .content-1, .content-2, .content-3
            {
                margin: auto;
                margin-left: 1rem;
                align-self: center;
                align-items: center;
                display: inline-block;
                width: 28%;
                background-color: var(--lm-ex4-bg-color);
                border: var(--lm-dpdn-hover-bg-color) solid;
                border-radius: 2rem;
                padding: 2rem;
            }
            .php-excercise-4 .content-1{
                max-width: 100% !important;
            }
            .php-excercise-4 input{
                font-size: .8vw;
            }
            .php-excercise-4 ul{
                list-style-type: none;
                padding-left: 0;
            }
            /* END OF EXERCISE #4 */
        </style>
    </head>
    <body>
        <div class="php-excercise-3">
            <h2 id="title-header">EXERCISE #3</h2>

            <form method="post">
                <button class="btn-styles" type="submit" name="submit">Open</button>
                <button class="btn-styles" type="clear" name="clear">Close</button>
            </form>
            <div class="php-body">
                Choose From Buttons Above
                <hr>
                <?php 
                    $str = file_get_contents('report.txt'); //para makuha yung laman ng file para ilagay sa new file
                    $rep_file1 = file("report.txt")[0]; // kinukuha yung 1st line sa file 
                    $rep_file2 = file("report.txt")[1]; // kinukuha yung 2nd line sa file 
                    $rep_file3 = file("report.txt")[2]; // kinukuha yung 3rd line sa file 
                    $rep_all = "<ol><li>".$rep_file1."</li><li>".$rep_file2."</li><li>".$rep_file3."</li></ol>"; //listing para sa nakuhang lines sa file

                    $clear_rep_all = ""; //initialize para ma clear yung display
                    $final_report = $clear_rep_all; //pagpalit sa value ng final_report para ma clear yung display
                    $display_rep_all = "<h2><b>The File does Exist.</b></h2><p>These are the lines inside the File:<br>$rep_all</p>"; //initialize para ma display yung lines
                    
                    if(isset($_POST['submit'])){ //if else statement para sa open button(if true magdidisplay ung lines)
                        if(file_exists('report.txt')){
                            $final_report = $display_rep_all;
                            file_put_contents('newreport.text',$str);
                        }else{
                            echo "<p> No lines are selected, button was not pressed, or File does not exist. </p>";
                        }
                    }else if(isset($_POST['clear'])){  //if else statement para sa close button(if true magcleclear ung lines)
                        $final_report = $clear_rep_all;
                    }
                    echo $final_report 
                ?>
            </div>
        </div>
        <br><hr><br>
        <div class="php-excercise-4">
            <div class="title">
                <h2 id="title-header">EXERCISE #4</h2>
            </div>

            <div class="body-content">
                <div class="content-1">
                    <form action="" method="GET">
                        <table>
                            <tr>
                                <h4><th>Name:</th><td><input type="text" name="name"></td></h4>
                            </tr>
                            <tr>
                                <h4><th>E-mail:</th><td><input type="text" name="email"></td></h4>
                            </tr>
                            <tr>
                                <h4><th>Course and Section (BSIT-IT3H):</th><td><input type="text" name="CorSec"></td></h4>
                            </tr>
                            <tr>
                                <h4><th>Password:</th><td><input type="text" name="Password"></td></h4>
                            </tr>
                            <tr>
                                <h4><th>Re-Type Password:</th><td><input type="password" name="RePassword"></td></h4>
                            </tr>
                        </table>
                        <br>
                        <center><button class="btn-styles" name=submit-form type="submit-1">Submit</button></center>
                    </form>
                </div>
                <div class="content-2">
                    <center><h4>Content will show here upon submit</h4></center><hr>
                <?php 
                    if (isset($_GET['submit-form'])) {
                        $name = $_GET['name'];
                        $email = htmlspecialchars($_GET['email']);
                        $CorSec = htmlspecialchars($_GET['CorSec']);
                        $password = htmlspecialchars($_GET['Password']);
                        $repassword = htmlspecialchars($_GET['RePassword']);
            
                        // Dinidisplay yung mga data na nasubmit sa form
                        echo "<h3>Submitted Data:</h3>";
                        echo "<p><strong>Name:</strong> $name</p>";
                        echo "<p><strong>Email:</strong> $email</p>";
                        echo "<p><strong>Course and Section:</strong> $CorSec</p>";
            
                        // tinitignan dito kung the same ba yung password
                        if ($password === $repassword) {
                            echo "<p><strong>Password:</strong> Passwords match</p>";
                        } else {
                            echo "<p style='color:red;'><strong>Password:</strong> Passwords do not match!</p>";
                        }
                    }
                ?>
                </div>
                <div class="content-3">
                    <h3>Login</h3>
                    <form action="" method="POST">
                        <table>
                            <tr>
                                <th><h4>Username:</h4></th>
                                <td><input type="text" name="username"></td>
                            </tr>
                            <tr>
                                <th><h4>Password:</h4></th>
                                <td><input type="password" name="login-password"></td>
                            </tr>
                        </table>
                        <br>
                        <center>
                            <button class="btn-styles" name="login" type="submit">Login</button>
                        </center>
                    </form>

                    <?php
                    if (isset($_POST['login'])) {
                        $username = htmlspecialchars($_POST['username']);
                        $loginPassword = htmlspecialchars($_POST['login-password']);
                        echo "<h4>Successful Login Details:</h4>";
                        echo "<p><strong>Username:</strong> $username</p>";
                        echo "<p><strong>Password:</strong> $loginPassword</p>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <br><hr><br>
        <div class="php-excercise-5">
            <div class="title">
                <h2 id="title-header">EXERCISE #5</h2>
            </div>
            <div class="ex5-body">
                <table>
                    <tr>
                        <td><h4>Search For Recent Username Login Here: </h4></td>
                        <td><input type="text" id="fname" onkeyup="showHint(this.value)"></td>
                    </tr>
                    <tr>
                        <td>Recent Users:<span id="txtHint"></span></td>
                    </tr>
                </table>
            </div>
        </div>
        <script>
            function showHint(str) {
                if (str.length == 0) {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                    xmlhttp.open("GET", "recentAcc.php?q=" + str, true);
                    xmlhttp.send();
                }
            }
    </script>
    </body>
</html>