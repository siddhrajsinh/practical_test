<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siddhrajsinh Chauhan | Practical Test</title>
    <style>
        .collapse {
            cursor: pointer;
            display: block;
            background: #cdf;
        }

        .collapse+input {
            display: none;
            /* hide the checkboxes */
        }

        .collapse+input+div {
            display: none;
        }

        .collapse+input:checked+div {
            display: block;
        }

        .collapse2 {
            cursor: pointer;
            display: block;
            background: #cdf;
        }

        .collapse2+input {
            display: none;
            /* hide the checkboxes */
        }

        .collapse2+input+div {
            display: none;
        }

        .collapse2+input:checked+div {
            display: block;
        }
    </style>
</head>

<body>
    <main>
        <h1>Siddhrajsinh Chauhan | Practical Test</h1>
        <ul>
            <li><a href="prog1.php"> Program 1 </a></li>
            <li><a href="prog2.php"> Program 2 </a></li>
        </ul>
        <div style="background-color:yellow; color:red;">
            <strong>
                <p>Please ignore the UI because I just created Simple PHP files and added them here to check the result quickly with a simple UI.</p>
                <p>For code review please check <span style="color:blue;">program1.php </span> and <span style="color:blue;">program2.php</span> for the respective Problems.</p>
            </strong>
        </div>
        <p>For code review please click here</p>
            <label style="background-color:red; color:whitesmoke" class="collapse" for="_1">Click here to toggle the Code snippet for Program1</label>
            <input id="_1" type="checkbox">

        <div>
            <?php
            show_source("program1.php");
            ?>
        </div>
        <hr>
        <hr>
        <label style="background-color:red; color:whitesmoke" class="collapse2" for="_2">Click here to toggle the Code snippet for Program2</label>
        <input id="_2" type="checkbox">

        <div>
            <?php
            show_source("program2.php");
            ?>
        </div>


    </main>
</body>

</html>
