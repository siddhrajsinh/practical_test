<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siddhrajsinh Chauhan | Cygnet Practical</title>
    <style> 
        .collapse{
            cursor: pointer;
            display: block;
            background: #cdf;
        }
        .collapse + input{
            display: none; /* hide the checkboxes */
        }
        .collapse + input + div{
            display:none;
        }
        .collapse + input:checked + div{
            display:block;
        }
    </style>
</head>

<body>
    <main>
        <h1>Siddhrajsinh Chauhan | Cygnet Practical</h1>
        <ul>
            <li><a href="index.php"> Home </a></li>
            <li><a href="prog1.php"> Program 1 </a></li>
            <li><a href="prog2.php"> Program 2 </a></li>
        </ul>
        <content>
            <div style="background-color:yellow;">
                <p><b>Problem:</b> give me total array key which key is match with work bank array</p>
                <p>$word= "CyXnet InJnfoiristech"; </p>
                <p>$wordBank = ["c", "xyz", "total", "info", "te", "tech"];</p>
            </div>
            <label style="background-color:red; color:whitesmoke" class="collapse" for="_1">Click here to toggle the Code snippet for Program2</label>
            <input id="_1" type="checkbox"> 
            
            <div>
                <?php
                show_source("program2.php");
                ?>
            </div>
            <hr>
            <hr>
            <div style="background-color:green;">
                <?php
                require('program2.php');
                ?>
            </div>
        </content>
    </main>
</body>

</html>