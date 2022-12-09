<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #FBF8F3;
            position: relative;
        }
        .container{
            max-width: 1400px;
            margin: 0 auto;
            position: relative;
        }
        .logo{
            background-image: url("<?= URLROOT?>/img/admin/logo.png") ;
            background-size: cover;
            width: 158px;
            height: 148px;
        }
        body::before{


            content: "";
            background-image: url("<?= URLROOT?>/img/admin/plantingpeople.png");
            background-repeat: no-repeat;
            background-size: contain;
            top: 394px;
            height: 700px;
            width: 81%;
            position: absolute;
            bottom: 0;
            z-index: -1;
            right: 0;
            left: 0;
            margin: auto;
        }
        .login{
            padding: 30px 20px;
            justify-content: space-between;
            width: 706px;
            height: 552px;
            background: linear-gradient(90deg, rgba(11, 171, 100, 0.5) 0%, rgba(59, 183, 143, 0.5) 100%);
            border-radius: 20px;
            /*border: 1px solid black;*/
            position: absolute;
            right: 0;
            left: 0;
            top: 420px;
            bottom: 0;
            margin: auto;


        }
        .form{
            width: 100%;
            height: 400px;
            /*border: 1px solid black;*/
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
        }
        input[type='text'],input[type='password']{
            width: 300px;
            height: 52px;
            font-size: 24px;
            padding: 20px;
            border-radius: 10px;
            font-family: 'Source Sans 3';
        }
        h2{

            font-family: 'Source Sans 3';
            font-style: normal;
            font-weight: 600;
            font-size: 55px;
            letter-spacing: 0.08em;

            /* Black */
            color: #000000;
        }
        .btn{
            width: 150px;
            height: 44px;
            left: 702px;
            top: 700px;
            background: #00A778;
            border-radius: 10px;
            cursor: pointer;
            font-family: 'Source Sans 3';
            font-style: normal;
            font-weight: 600;
            font-size: 20px;
        }
        .register{
            border: 2px solid #00A778;

            width: 150px;
            height: 44px;
            left: 702px;
            top: 700px;
            background:rgba(128,178,89,0.13);
            border-radius: 10px;
            cursor: pointer;
            font-family: 'Source Sans 3';
            font-style: normal;
            font-weight: 600;
            font-size: 20px;
        }
        .register:hover{
            background-color: #008284;
            border: 2px solid  #fff;
        }
        .btn:hover{
            border: 2px solid #ffffff;
        }
        .forget{
            text-decoration: none;
            color: #2F4858;
            font-weight: 600;
        }
        .incorect{
            border: 1px solid black;
            padding: 10px;
            color: #ffffff;
            background:#ff244e ;
            border-radius: 2px;
        }
        .red{
            color: #ff244e ;;
        }
    </style>
</head>
<body>
<div class="container">
    <nav class="nav">
        <div class="logo"></div>
    </nav>
    <main>
        <div class="login">
            <form action="<?php echo URLROOT?>/users/login" class="form" method="post">

                <h2 class="signtext">Login</h2>
                <div>
                    <input type="text" name="email" id="email" class="email" placeholder="Enter Email">
                    <br>
                    <span class="red"><?=$data['email_err'];?></span>
                </div>
                <div>
                    <input type="password" name="password" id="password" class="password" placeholder="Enter Password">
                    <br>
                    <span class="red"><?=$data['password_err'];?></span>
                </div>



                <a href="" class="forget">Forget Password ?</a>
                <input type="submit" value="Log in" name="login" class="btn">
<!--                <input type="button" value="Register" name="register" class="register" >-->
                <!--jifajafd-->
            </form>
        </div>
    </main>
</div>

</body>
</html>