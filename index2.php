<!DOCTYPE html>
<html>

<head>
    <title> tea </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="#" rel="stylesheet">
    <link rel="icon" href="img/logo01.png" />
    <link rel="stylesheet" type="text/css" href="css/main.css">


</head>


<body>
    <div id="container">
        <div class="header">
            <div class="logo2">
                <img src="img/Logo02.png">
            </div>
        </div>
        <div class="thank">
            <h1>Thank you!</h1>
        </div>
        <div class="detail">
            <p>Please also ensure that change begins<br>at home by pledging to practise/teach<br>gender sensitivity</p>
        </div>
        <div class="knowmore">

            <button class="button button2"> <a herf="#"> Know more</a></button>

        </div>

        <footer>
            <div class="share">
                <h4>Share this petition on</h4>
                <div class="fb">

                    <div class="facebook">

                        <a href="#" target="_blank" id="fb"> <img src="fb.png" style="width:150px; "></a>
                        <!-- //direct// <a href="https://www.facebook.com/sharer.php?u=http://127.0.0.1:5500/assets/index.html" target="_blank"> <img src="fb.png" style="width:150px; "></a>// -->
                    </div>
                    <div class="twitter">
                        <a href="#" target="_blank" id="tw"> <img src="tw.png" style="width:150px; margin-left:10px; "></a>
                        <!-- <a href="https://www.twitter.com/intent/tweet?text=http://127.0.0.1:5500/assets/index.html" target="_blank"> <img src="tw.png" style="width:150px; margin-left:10px; "></a> -->
                    </div>
                </div>

            </div>

        </footer>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#fb").click(function() {
                window.open("https://www.facebook.com/sharer.php?u=http://127.0.0.1:5500/assets/index.html");
                return false;
            });

            $("#tw").click(function() {
                window.open("https://www.twitter.com/intent/tweet?text=http://127.0.0.1:5500/assets/index.html");
                return false;
            });
            $('.knowmore').click(function(){
                $.ajax({
                        method: "post",
                        url: "handleclick.php",
                        data: {},
                        cache: false,
                        success: function(data) {
                           
                        }
                    });
                    return true;
            });
        });
        
    </script>




</body>

</html>