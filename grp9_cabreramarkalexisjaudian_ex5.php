<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                xmlhttp.open("GET", "get_savedsignup.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>
</head>
<body>
    <div class="title">
        <h2 id="title-header">EXERCISE #5</h2>
    </div>
    <div class="ex5-body">
        <p><b>Try checking Signed In Usernames Below:</b></p>
        <div class="content-1 bg-ex5">
            <form action="">
                <label for="fname">Username:</label>
                <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
            </form>
        </div>
        <div class="content-2 bg-ex5">
            <p>Suggestions: <span id="txtHint"></span></p>
        </div>
    </div>
</body>
</html>
