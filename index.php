<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up (By POST Method)</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps:wght@400;700&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps:wght@400;700&display=swap');
        body{
            background: #212F3C;
        }
        .main{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 1px solid #fff;
            width: 400px;
            height: auto;
            border-radius: 20px;
            margin-top: 5rem;
        }
        h1{
            font-family: 'Oleo Script Swash Caps', cursive;
            color: #E74C3C;
        } 
        #frm{
            width: 100%;
        }
        .textbox{
            width: 90%;
            height: 35px;
            border: 1px solid #000;
            border-radius: 13px;
            font-size: 1rem;
            margin-bottom: 10px;
            padding-left: 10px;
            outline: none;
        }

        .btn{
            width: 50%;
            margin: 10%;
            padding: 0.5rem;
            border-radius: 30px; 
            font-size: 1rem;
            border: none;
        }

        .btn:active{
            background: #A569BD;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
    </style>
</head>
<body>
    <center>
        <div class="main">
            <form method="POST" id="frm" onsubmit="return submitFun()">
                <h1>Sign Up Here</h1>
                <div style="margin-bottom: 20px;">
                    <input type="text" placeholder="Enter Your Name" class="textbox" name="fname" autocomplete="off" required>
                    <span style="color: red;">*</span>
                </div>

                <div style="margin-bottom: 20px;">
                    <input type="email" placeholder="Enter Your Email" class="textbox" name="email" autocomplete="off" required>
                    <span style="color: red;">*</span>
                </div>

                <div style="margin-bottom: 20px;">
                    <input type="password" placeholder="Enter Your Password" class="textbox" name="password" required>
                    <span style="color: red;">*</span>
                </div>

                <div style="margin-bottom: 20px;">
                    <input type="text" placeholder="Enter Your Phone Number" class="textbox" name="contact" autocomplete="off" required>
                    <span style="color: red;">*</span>
                </div>
                <input type="submit" class="btn" name="submit">
            </form>
        </div>
    </center>

    <script>
        function submitFun(){
            $.ajax({
                type: 'POST',
                url: 'insert.php',
                data: $('#frm').serialize(),
                success:function(data){
                    alert(data);
                    location.reload();
                }
            });
            return false;
        }
    </script>
</body>
</html>