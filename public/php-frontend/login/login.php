<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../scss/login/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- <script defer type="module" src = "../../../includes/jquery.js"> </script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


</head>

<body>
    <main>
        <img src="../../../resources/images/backgrounds/login-register.png" alt="">
        <section class="containers" id="containers">

            <!-- id lang may prefix na register/login para unique pagtinawag sa js, sa php namamn button ung irerefernce para alam ng script ano irurun -->

            <div class="register-container" id="register-container">

                <div class="form-container">
                    <form action="#" method="POST">
                        <h1>MAWMAW LIBRARY</h1>
                        <h2>Create an account</h2>
                        <input type="text" name="username" id="register-username" placeholder="Username">
                        <span class="material-symbols-outlined">person</span>
                        <input type="text" name="name" id="register-name" placeholder="Name">
                        <span class="material-symbols-outlined">
                            edit_square
                        </span>
                        <input type="email" name="email" id="register-email" placeholder="Email">
                        <span class="material-symbols-outlined">
                            alternate_email
                        </span>
                        <input type="password" name="password" id="register-password" placeholder="Password">
                        <span class="material-symbols-outlined">
                            lock_open
                        </span>
                        <button type="button" name="register" id="register">Register</button>
                        <p>already a member? <a class="to-login">Click Here</a></p>
                        <!-- href="#login-container"  -->
                    </form>
                </div>


                <div class="form-container">
                    <form action="" class="verify-otp">
                        <h1>MAWMAW LIBRARY</h1>
                        <h2>the 4-figit code has been sent to your email</h2>
                        <div class="otp">
                            <input type="text" name="otp1" id="register-otp1" maxlength="1" pattern="[0-9]{1}">
                            <input type="text" name="otp2" id="register-otp2" maxlength="1" pattern="[0-9]{1}">
                            <input type="text" name="otp3" id="register-otp3" maxlength="1" pattern="[0-9]{1}">
                            <input type="text" name="otp4" id="register-otp4" maxlength="1" pattern="[0-9]{1}">
                        </div>
                        <button type="button" class="resend-otp"><u>Resend OTP</u></button>
                        <button type="button">Verify</button>
                    </form>
                </div>

            </div>

            <div class="login-container" id="login-container">

                <div class="form-container">
                    <form action="">
                        <h1>MAWMAW LIBRARY</h1>
                        <h2>Please enter your email and password</h2>
                        <input type="email" name="email" id="login-email" placeholder="Email">
                        <span class="material-symbols-outlined">
                            alternate_email
                        </span>
                        <input type="password" name="password" id="login-password" placeholder="Password">
                        <span class="material-symbols-outlined">
                            lock_open
                        </span>
                        <div class="login-subcontainer">
                            <label><input type="checkbox" name="remember" id="remember">&nbsp; Remember Me</label>
                            <a class="to-forgot">Forgot Password?</a>
                            <!-- href="#forgot-password-container" -->
                        </div>
                        <button type="button" name="login" id="login">Login</button>
                        <p>Don't have an account? <a class = "to-register">Click Here</a></p>
                        <!-- href="#register-container" -->
                    </form>
                </div>

            </div>

            <div class="forgot-password-container" id="forgot-password-container">


                <div class="form-container">
                    <form action="#" class="forgot-email">
                        <h1>MAWMAW LIBRARY</h1>
                        <h2>Please enter your email</h2>
                        <input type="email" name="email" id="forgot-email" placeholder="Email">
                        <span class="material-symbols-outlined">
                            alternate_email
                        </span>
                        <button type="button">Find my email</button>
                        <p>Don't have an account? <a class = "to-register">Click Here</a></p>
                    </form>
                </div>
                <div class="form-container">
                    <form action="" class="verify-otp">
                        <h1>MAWMAW LIBRARY</h1>
                        <h2>the 4-figit code has been sent to your email</h2>
                        <div class="otp">
                            <input type="text" name="otp1" id="forgot-otp1" maxlength="1" pattern="[0-9]{1}">
                            <input type="text" name="otp2" id="forgot-otp2" maxlength="1" pattern="[0-9]{1}">
                            <input type="text" name="otp3" id="forgot-otp3" maxlength="1" pattern="[0-9]{1}">
                            <input type="text" name="otp4" id="forgot-otp4" maxlength="1" pattern="[0-9]{1}">
                        </div>
                        <button type="button" class="resend-otp"><u>Resend OTP</u></button>
                        <button type="button">Verify</button>
                        <p>Don't have an account? <a class = "to-register">Click Here</a></p>
                    </form>
                </div>



                <div class="form-container">
                    <form action="" class="change-password">
                        <h1>MAWMAW LIBRARY</h1>
                        <h2>Please enter your new password</h2>
                        <input type="password" name="password" id="forgot-password">
                        <span class="material-symbols-outlined">
                            lock_open
                        </span>
                        <input type="password" name="confirm-password" id="forgot-confirm-password">
                        <span class="material-symbols-outlined">
                            lock_open
                        </span>
                        <button type="button">Change Password</button>
                        <p>Don't have an account? <a class = "to-register">Click Here</a></p>
                        <!-- href="#register-container" -->
                    </form>
                </div>
            </div>



        </section>
    </main>
<script>

$(".to-register").on("click", function(event){
    event.preventDefault();
    $("#containers").animate({
        scrollTop: $("#register-container").offset().top
    },1500)
})

$(".to-login").on("click", function(event){
    event.preventDefault();
    $("#containers").animate({
        scrollTop: $("#login-container").offset().top
    },1500)
})

$(".to-forgot").on("click", function(event){
    event.preventDefault();
    $("#containers").animate({
        scrollTop: $("#forgot-password-container").offset().top
    },1500)
})


</script>
</body>

</html>