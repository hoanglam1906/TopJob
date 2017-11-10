<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta author="Hoàng Tùng Lâm" content="Bài tập lớn">
        <!-- <meta http-equiv="refresh" content="3" > -->
        <link rel="icon" href="Images/logo.png">
        <!-- <link rel="stylesheet" type="text/css" href="About.css"> -->
        <title>TopJob - About Us</title>
        <style >
            body
            {
                margin: 0px 0px 0px 0px;
                background-color: white;
                font-family: serif;
            }

            img
            {

                max-width: 100%;
                height: auto;


            }

            .header
            {
                /*position: fixed;*/
                width: 100%;
                height: 100px;
                /*background-color: lightgrey;*/
            }

            .header-contents
            {
                max-width: 100%;
                position: center;
                border: 1px solid black;
            }

            .logo
            {
                float: left;
                margin-top: 15px;
            }

            .nav
            {
                float: right;
                margin-right: 10px;
                margin-top: 39px;
                list-style: none;

            }


            .nav__items
            {
                cursor: pointer; /*Dùng để biến đổi trỏ chuột khi di vào*/
                text-decoration: none; /*tắt gạch chân của link text*/
                color: black;
                font-size: 25px;
                text-transform: uppercase;
            }
            .nav__itemsred
            {
                cursor: pointer; /*Dùng để biến đổi trỏ chuột khi di vào*/
                text-decoration: none; /*tắt gạch chân của link text*/
                color: #ff6600;
                font-size: 25px;
                text-transform: uppercase;
            }
            .nav__items:hover
            {
                color:#ff6600;
                background-color: transparent !important; /*Thêm vào để né bootstrap*/
                padding: 0px 0px 0px 0px !important;
            }

            .nav__itembox:hover
            {
                transform: scale(1.2,1.2); 
            }

            .nav__itembox
            {
                display: inline-block !important; /*Thêm vào để né bootstrap*/
                text-align: center;
                border: 1px solid black;
                padding-left: 10px;
                padding-right: 10px;
            }
            @media only screen and (min-width: 970px)
            {
                .nav_replace
                {
                    display: none;
                }
            }
            @media only screen and (max-width: 969px)
            {
                .nav
                {
                    display: none;
                }
                .nav_replace
                {
                    list-style: none;
                }
                .nav__itemboxnew:hover
                {
                    transform: scale(1.2,1.2); 
                }

                .nav__itemboxnew
                {
                    width: 60%;
                    text-align: center;
                    border: 1px solid black;
                    padding-left: 10px;
                    padding-right: 10px;
                    margin-left: auto;
                    margin-right: auto;
                }
                .nav__itemsnew
                {
                    cursor: pointer; /*Dùng để biến đổi trỏ chuột khi di vào*/
                    text-decoration: none; /*tắt gạch chân của link text*/
                    color: black;
                    font-size: 30px;
                    text-transform: uppercase;
                }

                .nav__itemsrednew
                {
                    cursor: pointer; /*Dùng để biến đổi trỏ chuột khi di vào*/
                    text-decoration: none; /*tắt gạch chân của link text*/
                    color: #ff6600;
                    font-size: 35px;
                    text-transform: uppercase;
                }
            }
            .banner
            {
                width: 100%;
                height: auto;
            }
            .banner-container
            {

            }
            @media only screen and (min-width: 1366px)
            {
                .banner
                {
                    width: 1349px;
                    height: auto;
                    margin-left: auto;
                    margin-right: auto;
                }
            }
            h1
            {
                /*border: 1px solid black;*/
                margin-left: 20%;
                font-size: 60px;
            }
            h3
            {
                width: 90%;
                margin-left: 10%;
                font-size: 20px;
                font-weight: normal;
                margin-left: auto;
                margin-right: auto;
            }
            .footer-container
            {
                max-width: 100%;
                height: auto;
                border: 2px solid black;
                margin-top: 50px;
            }

            .footer-box
            {
                width: 300px;
                height: 300px;
                padding: 10px 0px 10px 0px;
                display: inline-block;
                text-align: center;
                border: 2px solid black;
                margin-left: 20px;
            }

            .footer
            {
                width: 1366px;
                margin-left: auto;
                margin-right: auto;
            }
            @media only screen and (max-width: 1370px)
            {		

                .footer
                {
                    max-width: 100%;
                    margin-left: auto;
                    margin-right: auto;
                }
            }
            @media only screen and (max-width: 690px)
            {
                .footer-box 
                {
                    width: 270px;
                    margin-left: 0px;
                }
            }
            @media only screen and (max-width: 620px)
            {
                .footer-box
                {
                    width: 100%;
                }
            }
            input[type=text], input[type=password], input[type=float] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
            button {
                background-color: #ff751a;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }
            .container {
                padding: 16px;
                width: 800px;
                margin-left: auto;
                margin-right: auto;
                margin-top: 50px;
            }
            .container-2 {
                padding: 16px;
                width: 800px;
                margin-left: auto;
                margin-right: auto;

            }
        </style>
    </head>

    <body>
        <section class="header">
            <div class header-contents>
                <a class="logo" href="index.html">
                    <img src="Images/logo_small.png">
                </a>

                <nav class="nav">
                    <li class="nav__itembox"> <a class="nav__items" href="employer.html">Profile</a> </li>
                    <li class="nav__itembox"> <a class="nav__itemsred" href="job.php">Jobs</a> </li>	
                    <li class="nav__itembox"> <a class="nav__items" href="Find Students.html">Student</a> </li>		
                    <li class="nav__itembox"> <a class="nav__items" href="index.html">Signout</a> </li>
                </nav>
            </div>
        </section>
        <?php require_once("lib/connection.php"); ?>
        <?php
        $id = -1;
        if (isset($_GET['jobID'])) {
            $id = $_GET['jobID'];
        }
        $sql = "SELECT * FROM users WHERE jobID = " . $id;
        $query = mysqli_query($conn, $sql);
        ?>
        <?php
        if (isset($_POST["btn_submit"])) {
            //lấy thông tin từ các form bằng phương thức POST
            $id = $_POST["id"];
            $title = $_POST["job_title"];
            $requirement = $_POST["requirement"];
            $location = $_POST["location"];
            $budget = $_POST["budget"];
            $purchasement = $_POST["purchasement_method"];


            // Viết câu lệnh cập nhật thông tin 
            $sql = "UPDATE job SET job_title = '$title', requirement = '$requirement', location = '$location', budget = '$budget', purchasement_method = '$purchasement' WHERE id=$id ";
            // thực thi câu $sql với biến conn lấy từ file connection.php
            mysqli_query($conn, $sql);
            echo "Successfully";
//            header('Location: job.php');
        }


//        if (isset($_GET['jobID'])) {
//            $id = $_GET['jobID'];
//        }
//        $sql = "SELECT * FROM job WHERE jobID = " . $id;
//        $query = mysqli_query($conn, $sql);
        ?>




        <form action="ChangeInfo.php" method="post">
            <h3>Change Job Info</h3>
            <div class="container">
                <label><b>Job title</b></label>
                <input type="text" id="job_title" name="job_title" required><br>
                <label><b>Requirement</b></label>
                <input type="text" id="requirement" name="requirement" required><br>
                <label><b>Location</b></label>
                <input type="text" id="location" name="location" required><br>
                <label><b>Budget</b></label>
                <input type="float" id="budget" name="budget" required><br>
                <label><b>Purchasement Method</b></label>
                <input type="text" id="purchasement_method" name="purchasement_method" required><br>
            </div>
            <div class="container-2" style="background-color:#f1f1f1">
                <button type="submit" name="btn_submit">Change!</button>
            </div>
        </form>
    </body>
</html>