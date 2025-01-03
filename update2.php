<?php
$con = mysqli_connect('localhost','root','','demo4');

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name']))
    {
        echo "<script>
        alert('first name is must be required');
        window.location.href=update2.php.php;
        </script>";
    } elseif (empty($_POST['email'])) {
        echo "<script>
        alert('must be required');
        window.location.href=update2.php;
        </script>";
    } elseif (empty($_POST['message'])) {
        echo "<script>
        alert('must be required');
        window.location.href=update2.php;
        </script>";
    } else {
        $id = $_POST['uid'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "Update contact_tbl set name='$name' ,email='$email' , message='$message' ,  where id= $id";
        if (mysqli_query($con, $sql)) {
            echo "<script>
        alert('Your acount is update');
        window.location.href= update2.php;
        </script>";
        }
    }

}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "Select * from contact_tbl where id=$id";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
    }
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>contact us</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            * {
                margin: 0px;
                padding: 0px;
                box-sizing: border-box;
            }


            .contact-main-container {
                min-height: 700px;
                max-width: 1000px;
                width: 100%;
                background-color: #677c69;
                margin: 50px auto;
                display: flex;
                flex-direction: column;
                align-items: flex-end;
                position: relative;
                padding-top: 50px;
                padding-bottom: 50px;
                background-color: #84dadf;

            }

            .contact-address {
                min-height: 450px;
                max-width: 350px;
                width: 100%;
                background-color: #002233;
                position: absolute;
                top: 160px;
                left: 40px;
                border-radius: 10px 10px 0px 0px;
                padding-top: 40px;
                /* padding-bottom: 40px; */
            }

            .contact-address:hover {
                box-shadow: 0 15px 15px rgba(0, 0, 0, 0.3);
            }

            .cont-heading {
                font-size: 35px;
                color: #ffffff;
                font-weight: 100;
                text-align: center;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                letter-spacing: 2px;
                /* padding-bottom: 15px;   */

            }

            .cont-add-details {
                display: flex;
            }

            .cont-add-details i {
                font-size: 20px;
                color: #b6c2d0;
                padding-left: 30px;
                padding-top: 25px;
            }

            .cont-add-details h6 {
                font-size: 20px;
                color: #b6c2d0;
                padding-left: 28px;
                padding-top: 20px;
                font-weight: normal;
            }

            .cont-para {
                padding-bottom: 10px;
                padding-top: 7px;
                padding-left: 78px;
                padding-right: 20px;
            }

            .cont-para p {
                font-size: 15px;
                color: #b6c2d0;
                font-weight: normal;
                font-family: sans-serif;
            }



            /* --------------------- */
            .contact-form {
                min-height: 600px;
                max-width: 550px;
                margin-right: 80px;
                width: 100%;
                border-radius: 0px 0px 10px 10px;
                background-color: #fbfbff;
                padding-top: 60px;
            }

            .contact-form:hover {
                box-shadow: 0 15px 15px rgba(0, 0, 0, 0.3);
            }

            .contact-form-container {
                width: 80%;
                border-radius: 10px;
                margin-bottom: 50px;
                margin-left: 80px;
            }

            .contact-header-box {
                background: #002233;
                padding-top: 20px;
                padding-bottom: 20px;
                border-radius: 10px 10px 0px 0px;
            }

            .contact-log-header {
                text-align: center;
                font-size: 24px;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                font-weight: 500;
                letter-spacing: 2px;
                color: white;
                /* color: #002233; */
            }

            .contact-input-box {
                width: 100%;
                margin-top: 25px;
                margin-left: 20px;
                position: relative;
            }

            .contact-log-lebel {
                display: block;
                font-size: 18px;
                margin-left: 10px;
                font-weight: 600;
                color: #002233;
            }

            .contact-icon {
                font-size: 20px;
            }

            .contact-input-box i {
                position: absolute;
                top: 35px;
                left: 14px;
                color: #002233;
                border-right: 2px solid #cccccc;
                padding: 6px;
            }

            .contact-log-input {
                width: 90%;
                padding: 12px;
                border-radius: 20px;
                margin-top: 3px;
                font-size: 17px;
                padding-left: 70px;
            }


            .contact-button {
                /* margin-left: 100px; */
                text-align: center;
                margin-top: 30px;
                margin-bottom: 30px;
            }

            .contact-login-button {
                width: 50%;
                padding: 13px 20px;
                border-radius: 20px;
                background: #002233;
                border: none;
                color: white;
                cursor: pointer;
            }

            .contact-login-button:hover {
                cursor: pointer;
                background-color: #45a049;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            }

            .contact-social-media {
                display: flex;
                justify-content: space-evenly;
                align-items: center;
                background: #002233;
                border-radius: 0px 0px 10px 10px;

            }

            .contact-social-media i {
                font-size: 25px;
                padding-top: 12px;
                margin-bottom: 12px;
                align-items: center;
                color: #ffffff;
            }

            .contact-social-media i:hover {
                cursor: pointer;
                /* background-color: #45a049; */
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            }

            @media (max-width:950px) {
                .contact-form {
                    max-width: unset;
                    margin-right: unset;
                    padding-right: 40px;
                }

                .contact-address {
                    position: initial;
                    max-width: unset;
                }
            }
        </style>
    </head>

    <body>
        <div class="contact-main-container">

            <div class="contact-address">
                <h5 class="cont-heading">Contact Us</h1>
                    <div class="cont-add-details">
                        <i class="fa-solid fa-location-dot"></i>
                        <h6>Address</h6>
                    </div>
                    <div class="cont-para">
                        <p>In front of Rajarshi Dashrath Rajkiya Medical College, Darshan Nagar, Kushmaha, Ayodhya, Uttar Pradesh 224135.</p>
                    </div>


                    <div class="cont-add-details">
                        <i class="fa-solid fa-phone"></i>
                        <h6>Phone</h6>
                    </div>
                    <div class="cont-para">
                        <p>+91 7800050976<br>
                            +91 8090995797</p>
                    </div>


                    <div class="cont-add-details">
                        <i class="fa-solid fa-envelope"></i>
                        <h6>Email</h6>
                    </div>
                    <div class="cont-para">
                        <p>techsimatraining@gmail.com</p>
                    </div>

            </div>
            <div class="contact-form">
                <form action="read2.php" class="contact-form-container" method="post">
                    <div class="contact-header-box">
                        <h2 class="contact-log-header">Upadte Message</h2>
                    </div>

                    <div class="contact-input-box">
                        <input type="hidden" value="<?= $data['id'] ?>" name="uid">
                        <label for="name" class="contact-log-lebel">Name</label>
                        <i class="fa-solid fa-envelope contact-icon"></i>
                        <input type="text" id="name" value="<?= $data['name'] ?>" name="name" class="contact-log-input" placeholder="Name">
                    </div>

                    <div class="contact-input-box">
                        <label for="email" class="contact-log-lebel">E-mail</label>
                        <i class="fa-solid fa-lock contact-icon"></i>
                        <input type="email" id="email" value="<?= $data['email'] ?>" name="email" class="contact-log-input" placeholder="Email">
                    </div>
                    <div class="contact-input-box">
                        <label for="password" class="contact-log-lebel">Message</label>
                        <i class="fa-solid fa-message"></i>
                        <textarea name="message" id="message" cols="20" rows="3" class="contact-log-input" placeholder="Enter message here">value="<?= $data['message'] ?>"</textarea>
                    </div>

                    <div class="contact-button">
                        <button class="contact-login-button">Upadate </button>
                    </div>

                    <div class="contact-social-media">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-linkedin"></i>
                        <i class="fa-brands fa-twitter"></i>
                    </div>
                </form>

            </div>

        </div>
    </body>

    </html>
<?php
} else {
    header('location:crud2.php');
}
?>