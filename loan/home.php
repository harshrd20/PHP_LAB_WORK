<!DOCTYPE html>
<html>
    <head><style>
            :root{
                --bg-color: #f1f1f1;
                --form-bg-color: powderblue;
                --border-bg-color: brown;
            }
            html, body{
                font: 400 15px/1.9 "Lato", sans-serif;
                background:#f1f1f1;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                flex-direction: column;
                text-align: center;
            }
            form, .wrapper{
                border-radius: 10px;
                background: powderblue;
                min-width: 50vw;
                padding: 5vmin;
                color: brown;
            }
            a, input[type=submit]{
                display: block;
                border: 1px solid brown;
                margin: 1vmin 0;
                text-decoration: none;
                border-radius: 10px;
                background: brown;
                color: powderblue;
                padding: 1vmin;
            }
            a:hover, input[type=submit]:hover{
                color: brown;
                background: powderblue;
            }
            h1, h2{
                font: 250 15px/1 "Lato", sans-serif;
                font-size: 40px;
            }
            h2{
                font-size: 25px;
            }
            input, select{
                min-width: 100%;
                border: 1px solid brown;
            }
        </style>
    </head>
    <body>
        <form method = "post">
            <p>Loan Amount</p>
            <input type = "range" min = "0" max = "500000000" value = "250000000" name = "principle"/>
            <p>Interest Rate(%)</p>
            <input type = "range" min = "8" max = "15" value = "11.5" step = "1" name = "rate"/>
            <p>Loan Term(Years)</p>
            <input type = "range" min = "1" max = "30" value = "16" name = "time"/>
            <input type = "submit" name = "submit"/>
            <a href = "index.html">Main Menu</a>
        </form>
        <?php
            if(isset($_POST["principle"])){
                    echo "<br>Loan Amount : ".$_POST["principle"];
                    echo "<br>Interest Rate : ".$_POST['rate'];
                    echo "<br>Loan Years : ".$_POST['time'];
                    echo "<br>Loan Amount : " . ($_POST["principle"]*$_POST["rate"]*$_POST["time"])/($_POST['time']*12*100*12);
            } 
            else{
                echo "Click On The Submit Button";
            }
        ?>
    </body>
</html>
