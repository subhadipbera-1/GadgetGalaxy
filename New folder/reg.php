<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet/text" href="style.css"> -->
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        /*body {
            height: 750px;
            display: flex;
            justify-content: center;
            /* align-self: center; *
            /* background-color: orange; *
            background-image: linear-gradient(red, yellow);
            background-repeat: no-repeat;

        }*/

        form {
            margin-top: 5%;
            padding: 20px;
            height: 400px;
            width: 40%;
            background-color: rgb(153, 0, 255);
            display: grid;
            justify-content: center;
            align-self: center;
            border-radius: 30px;
            border: 2px solid black;
        }

        /*label {
            color: black;
            font-size: 22px;
        }

        .gg {
            height: 30px;
            width: 300px;
            margin-left: 30px;
        }*/
    </style>
    <script src="js.js"></script>
</head>

<body>
    <form action="action.php" method="post" onsubmit="return formValidate();">
        <div>
            <label for="">Name</label>
            <input class="gg" type="text" id="uname" name="name" placeholder="enter your full name">
        </div>

        <div>
            <label for="">Email</label>
            <input class="gg" type="email" id="uemail" name="email" placeholder="enter your email address">
        </div>

        <div>
            <label for="">Address</label>
            <textarea name="address" id="uaddress" style="resize:none; " placeholder="Enter your address here"></textarea>
        </div>

        <div>
            <label for="">Password</label>
            <input class="gg" type="password" id="upassword" placeholder="enter your password here.." name="password">
        </div>


        <div>
            <label for="">Confirm Password</label>
            <input class="gg" type="password" id="ucpassword" placeholder="enter your confirm password here.." name="cpassword">
        </div>


        <div>
            <label for="gender">Gender</label>
            <input type="radio" id="umale" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="ufemale" name="gender" value="female">
            <label for="female">Female</label>
        </div>

        <div>
            <label for="subject">Subject</label>
            <select name="subject" id="usubject">
                <option value="">SELECT A COURSE</option>
                <option value="BBA">BBA</option>
                <option value="BCA">BCA</option>
                <option value="BTECH">BTECH</option>
                <option value="BHM">BHM</option>
                <option value="ADHM">ADHM</option>
            </select>
        </div>


        <div>
            <input type="checkbox" id="uagree" name="agree">
            <label for="agree">I agree to the above information</label>
        </div>

        <div style="display: grid;justify-content: center;">
            <input type="submit" value="submit" name="submit" style="background-color: blue;color:white; height:40px;width:100px; border-radius:10%;">
            <input type="reset" value="reset" style="background-color: red;height:40px;width:100px;color:white;border-radius:10%;">
        </div>

    </form>

</body>

</html>