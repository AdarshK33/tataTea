<!DOCTYPE html>
<html lang="en">

<head>
    <title> tea </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/logo01.png" />
    <link rel="stylesheet" type="text/css" href="css/main.css">


</head>



<body>
    <div class="model">
        <div class="notice">
            <span id="close"><img src="img/close.png" style="float:right;"></span>
            <h4> Terms & conditions</h4>
            <ol style="text-align: justify">
                <li>This promotion is in no way sponsored, endorsed or administered by, or associated with, Facebook</li>
                <li>You are providing information to Tata and not to facebook.</li>
            </ol>

        </div>
    </div>
    <div id="container">
        <!-- <div style="position:absolute; top:19px; margin: auto; max-width: 400px; max-height: 400px; background: #000">
        </div> -->


        <div class="icon">
            <div class="logo">
                <img src="img/logo01.png">
            </div>
        </div>
        <!--GET, POST, PUT, PATCH, DELETE -->
        <form id="basic-form">

            <div class="inputname">
                <label for="usrname">Name</label>
                <div class="name">
                    <input type="text" id="username" name="username" placeholder="Enter your fullname" maxlength="30" required autocomplete="off">
                    <span class="hidden validation">**please Enter your full name </span>
                </div>
            </div>
            <div class="inputemail">
                <label for="usrname">Email ID</label>
                <div class="email">
                    <input type="text" name="emailaddress" id="email" placeholder="Enter email ID" maxlength="50" required autocomplete="off">
                    <span class="hidden validation">**please enter email ID</span>
                </div>
            </div>
            <div class="text">
                <input type="text" class="message" name='message' placeholder="Type your message" maxlength="200" required autocomplete="off">
                <span class="hidden validation">**please enter message</span>
                <p>
                    <span style="color: black">(000/200)</span>
                    <!-- <spa id="sp">200)</spa> -->
                </p>
            </div>
            <!-- checkbox -->
            <div class="checkbox">
                <input type="checkbox" required name="checkbox" value="check" id="check">

                <a href="#">I Agree Terms and Conditions </a>
                <br>
                <span class="hidden validation">**checkbox is unchecked</span>
            </div>
            <div class="button">
                <button class="button1" type="submit" id="submit">Sign The Petition</button>
            </div>
           

           
        </form>
        <footer>
            <div class="photo">
                <img src="footer-photo.jpg">
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script>
     var count=0;
        $(document).ready(function() {
            $(".button1").click(function(e) {
                  

                //.botton1 is sumbmit class
                var name = $('#username').val();
                var email = $('#email').val();
                var check = $('.message').val();
                var checkbox = $('#check').val();
              
      
                var valid = true;
                // console.log(name);
                // console.log($('.message').val());
                
               
                if (name == "") {
                    $('.name .hidden').removeClass('hidden');
                    valid = false;
                }
                if (name.length <= 2) {
                    $('.name .hidden').removeClass('hidden');
                    valid = false;
                }
                if (email == "") {
                    e.preventDefault();
                    $('.email .hidden').removeClass('hidden');
                    valid = false;
                }
                if (check == '') {
                    $('.text .hidden').removeClass('hidden');
                    //$('.message .validation').show();
                    //  console.log('check');
                    valid = false;
                }
                if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))) {

                    $('.email .validation').removeClass('hidden');
                    valid = false;
                }
                if ($('#check').is(":not(:checked)")) {
                    //$('#check .hidden').removeClass('hidden');
                    $('.checkbox span').show();
                    valid = false;
                }
                //stop for valid
                if (valid == false) {
                    e.preventDefault();
                    return;
                } 
                else {
                    e.preventDefault();
                 //   console.log("hello")
                    $.ajax({
                        method: "post",
                        url: "change.php",
                        data: {'name': name,'email':email,'message':check},
                        cache: false,
                        success: function(data) {
                           // $('#msg').html(data);
                           // console.log(data)
                          
                           window.location = "index2.php";
                        }
                    });
                    return true;
                }


                // console.log("hello");
                // $('form').submit();
            });
            $('input[type="checkbox"]').click(function() {
                $('.checkbox span').hide();
            });
            // if (str.indexOf('@') <= 0) {
            //     $(this).parent().find('span').addclass('hidden');

            //(0/200)
            $("input.message").keyup(function() {
                var text = $(this).val()
                var formatText = '(' + text.length + '/200)'
                    //console.log(formatText);
                $(this).parent().find('p span').html(formatText);
            });
            // $('.model').hide();

            //user add remove letter
            $('input').keyup(function() {
                var str = $(this).val();
               
                if (str.length > 0) {
                    $(this).parent().find('span.validation').addClass('hidden');
                } else {
                    $(this).parent().find('.hidden').removeClass('hidden');
                }
            });
            //popup close 
            $('#close').click(function() {
                $('.model').hide();
                //  $('.checkbox span').show();//popup
            });
            //term and condtions
            $('a').click(function() {
                $('.model').show();
            });
        });



    </script>
</body>

</html>