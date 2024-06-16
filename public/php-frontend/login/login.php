<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../scss/login/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />


</head>

<body>
    <main>
        <img src="../../../resources/images/backgrounds/login-register.png" alt="">
        <section class="containers">

            <!-- id lang may prefix na register/login para unique pagtinawag sa js, sa php namamn button ung irerefernce para alam ng script ano irurun -->


            <div class="register-container" id="register-container">

                <form action="#" method="POST">

                    <h1>MAWMAW LIBRARY</h1>
                    <p>Create an account</p>
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
                    <p>already a member? <span><u>Click Here</u></span></p>

                </form>


                <form action="" class="verify-otp">
                    <h1>MAWMAW LIBRARY</h1>
                    <p>the 4-figit code has been sent to your email</p>

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

            <div class="login-container" id="login-container">

                <form action="">

                    <h1>MAWMAW LIBRARY</h1>
                    <p>Please enter your email and password</p>

                    <input type="email" name="email" id="login-email" placeholder="Email">
                    <span class="material-symbols-outlined">
                        alternate_email
                    </span>

                    <input type="password" name="password" id="login-password">
                    <span class="material-symbols-outlined">
                        lock_open
                    </span>
                    <button type="button" name="login" id="login">Login</button>
                    <p>Don't have an account? <span> <u>Sign Up</u> </span></p>
                </form>

            </div>

            <div class="forgot-password-container" id="forgot-password-container">


                <form action="#" class="forgot-email">
                    <h1>MAWMAW LIBRARY</h1>
                    <p>Please enter your email</p>
                    <input type="email" name="email" id="forgot-email" placeholder="Email">
                    <span class="material-symbols-outlined">
                        alternate_email
                    </span>

                    <button type="button">Find my email</button>

                </form>
                <form action="" class="verify-otp">
                    <h1>MAWMAW LIBRARY</h1>
                    <p>the 4-figit code has been sent to your email</p>

                    <div class="otp">
                        <input type="text" name="otp1" id="forgot-otp1" maxlength="1" pattern="[0-9]{1}">
                        <input type="text" name="otp2" id="forgot-otp2" maxlength="1" pattern="[0-9]{1}">
                        <input type="text" name="otp3" id="forgot-otp3" maxlength="1" pattern="[0-9]{1}">
                        <input type="text" name="otp4" id="forgot-otp4" maxlength="1" pattern="[0-9]{1}">
                    </div>

                    <button type="button" class="resend-otp"><u>Resend OTP</u></button>
                    <button type="button">Verify</button>
                    <p>Don't have an account? <span> <u>Sign Up</u> </span></p>
                </form>



                <form action="" class="change-password">
                    <h1>MAWMAW LIBRARY</h1>
                    <p>Please enter your new password</p>

                    <input type="password" name="password" id="forgot-password">
                    <span class="material-symbols-outlined">
                        lock_open
                    </span>
                    <input type="password" name="confirm-password" id="forgot-confirm-password">
                    <span class="material-symbols-outlined">
                        lock_open
                    </span>
                    <button type="button">Change Password</button>
                    <p>Don't have an account? <span> <u>Sign Up</u> </span></p>
                </form>
            </div>



        </section>
    </main>
</body>

</html>