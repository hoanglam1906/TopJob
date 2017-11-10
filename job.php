<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta author="Hoàng Tùng Lâm" content="Bài tập lớn">
        <!-- <meta http-equiv="refresh" content="3" > -->
        <link rel="icon" href="Images/logo.png">
        <!-- <link rel="stylesheet" type="text/css" href="About.css"> -->
        <title>Employer</title>
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
        $sql = "SELECT * FROM job LIMIT 10";
        $query = mysqli_query($conn, $sql);
        ?>
        <?php
        

        if (isset($_GET["id_delete"])) {
            //Lây id được gửi qua từ bên job.php
            $id = $_GET["id_delete"];
            //Thực thi câu lệnh sql delete để xóa job
            $sql = "delete from job where jobID = $id";
            $query = mysqli_query($conn, $sql);
            //Chuyển hướng trang web về lại trang quan-ly-thanh-vien.php
//            header('Location: job.php');
        }
        ?>
        <a class="nav__itemsnew" href="postjob.php">Post A Job</a>
        <table border="1px;" align="center">
            <thead>
                <tr>
                    <td bgcolor="#E6E6FA">ID</td>
                    <td bgcolor="#E6E6FA">Job title</td>
                    <td bgcolor="#E6E6FA">Requirement</td>
                    <td bgcolor="#E6E6FA">Location</td>
                    <td bgcolor="#E6E6FA">Budget</td>
                    <td bgcolor="#E6E6FA">Purchasement Method</td>
                <tr>
            </thead>
            <tbody>
<?php
while ($data = mysqli_fetch_array($query)) {
    ?>
                    <tr>
                        <td><?php echo $data['jobID'];
                ?></td>
                        <td><?php echo $data['job_title']; ?></td>
                        <td><?php echo $data['requirement']; ?></td>
                        <td><?php echo $data['location']; ?></td>
                        <td><?php echo $data['budget']; ?></td>
                        <td><?php echo $data['purchasement_method']; ?></td>

                        <td>
                            <a href="ChangeInfo.php?id=<?php echo $data['jobID']; ?>">Change Info</a>
                            <a href="job.php?id_delete=<?php echo $data['jobID']; ?>">Remove</a>
                        </td>
                    </tr>
    <?php
}
?>
            </tbody>
        </table>


    </body>
</html>