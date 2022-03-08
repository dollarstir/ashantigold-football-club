<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;


// require_once "vendor/autoload.php";

// //PHPMailer Object
// $mail = new PHPMailer(true);

// //Enable SMTP debugging.
// $mail->SMTPDebug = 3;                               
// //Set PHPMailer to use SMTP.
// $mail->isSMTP();            
// //Set SMTP host name                          
// $mail->Host = "smtp.gmail.com";
// //Set this to true if SMTP host requires authentication to send email
// $mail->SMTPAuth = true;                          
// //Provide username and password     
// $mail->Username = "kpin463@gmail.com";                 
// $mail->Password = "kingpin1234";                           
// //If SMTP requires TLS encryption then set it
// $mail->SMTPSecure = "tls";                           
// //Set TCP port to connect to
// $mail->Port = 587;                                   

// $mail->From = "dollarsoft463@gmail.com";
// $mail->FromName = "Full Name";

// $mail->addAddress("kpin463@gmail.com", "Recepient Name");

// $mail->isHTML(true);

// $mail->Subject = "Subject Text";
// $mail->Body = "<i>Mail body in HTML</i>";
// $mail->AltBody = "This is the plain text version of the email content";

// try {
//     $mail->send();
//     echo "Message has been sent successfully";
// } catch (Exception $e) {
//     echo "Mailer Error: " . $mail->ErrorInfo;
// }
?>

<?php 
    include 'db.php';
    $playerid = $_GET['upid'] ;
    

    $see = mysqli_query($conn,"SELECT * FROM player WHERE id ='$playerid' ");
    $mp =mysqli_fetch_array($see);

    $ref = $mp['ref'];
    $getdeal = mysqli_query($conn,"SELECT * FROM medical WHERE pid= '$ref'  ");
    $row = mysqli_fetch_array($getdeal);
    extract($row);

   

   


    
?>


<!doctype html>
<html lang="zxx">


<!-- blog-detail42:00-->

<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $mp['pname'].' MEDICAL REPORT' ;?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/fontawesome-all.css">
    <link rel="stylesheet" href="../css/slick-slider.css">
    <link rel="stylesheet" href="../css/fancybox.css">
    <link rel="stylesheet" href="../css/smartmenus.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/color.css">
    <link rel="stylesheet" href="../css/responsive.css">

</head>

<body class="home">
    <div id="ritekhela-loader">
        <div id="ritekhela-loader-inner">
            <div id="ritekhela-shadow"></div>
            <div id="ritekhela-box"></div>
        </div>
    </div>

    <div class="ritekhela-wrapper">




        <!--// SubHeader //-->

        <!--// Content //-->
        <div class="ritekhela-main-content">

            <!--// Main Section //-->
            <div class="ritekhela-main-section ritekhela-fixture-list-full">
                <div class="container">
                    <div class="row">

                        <!--// Full Section //-->
                        <div class="col-md-8">


                            <!--// Fixture Detail List //-->
                            

                            <div class="ritekhela-editor-detail">
                               <center> <h2><?php echo $mp['pname'].' MEDICAL REPORT' ;?></h2></center>
                               

                                    <style>
                                        #simple_table {
                                            font-family: arial, sans-serif;
                                            border-collapse: collapse;
                                            width: 100%;
                                        }

                                        #simple_table td,
                                        #simple_table th {
                                            border: 1px solid #dddddd;
                                            text-align: left;
                                            padding: 8px;
                                            border: 1px solid gray;
                                        }

                                        #simple_table tr:nth-child(even) {
                                            background-color: #dddddd;
                                        }

                                        #simple_table tr>th {
                                            border: 1px solid gray;
                                            background: #1b90bb;
                                            color: #FFF;
                                        }
                                    </style>
                                <table id="simple_table">
                                    <tr>
                                        <th>ORGAN</th>
                                        <th>Condition</th>

                                    </tr>
                                    <tr>
                                        <td>Head</td>
                                        <td><?php echo $head ;?></td>

                                    </tr>

                                    <tr>
                                        <td>Eye</td>
                                        <td><?php echo $eyes ;?></td>

                                    </tr>

                                    <tr>
                                        <td>Ears </td>
                                        <td><?php echo $ears ;?></td>

                                    </tr>


                                    <tr>
                                        <td>Brains </td>
                                        <td><?php echo $brains ;?></td>

                                    </tr>


                                    <tr>
                                        <td>Lungs </td>
                                        <td><?php echo $lungs ;?></td>

                                    </tr>


                                    <tr>
                                        <td>Pulse </td>
                                        <td><?php echo $pulse ;?></td>

                                    </tr>




                                    <tr>
                                        <td>Bload Pressure </td>
                                        <td><?php echo $bp ;?></td>

                                    </tr>




                                    <tr>
                                        <td> Heart</td>
                                        <td><?php echo $heart ;?></td>

                                    </tr>



                                    <tr>
                                        <td>ECG </td>
                                        <td><?php echo $ecg ;?></td>

                                    </tr>



                                    <tr>
                                        <td>Limbs </td>
                                        <td><?php echo $limbs ;?></td>

                                    </tr>


                                    



                                    <tr>
                                        <td>Tone </td>
                                        <td><?php echo $tone ;?></td>

                                    </tr>

                                    <tr>
                                        <td>Joints </td>
                                        <td><?php echo $joints ;?></td>

                                    </tr>


                                    <tr>
                                        <td>Abdominal </td>
                                        <td><?php echo $abdominal ;?></td>

                                    </tr>

                                    <tr>
                                        <td>Other </td>
                                        <td><?php echo $custome ;?></td>

                                    </tr>
                                </table>

                               
                                </p>

                               



                                <button  class="btn btn-primary pull-right pt"><span class="glyphicon glyphicon-export"></span> Export As PDF</button>


                                </p>

                            </div>





                        </div>
                        <!--// Full Section //-->

                        <!--// SideBaar //-->

                        <!--// SideBaar //-->

                    </div>
                </div>
            </div>
            <!--// Main Section //-->

        </div>
        <!--// Content //-->


        <!--// Footer //-->

    </div>


    <!--// Login ModalBox //-->


    <!--// Login ModalBox //-->


    <!--// Search ModalBox //-->



    <!-- jQuery -->
    <script src="../script/jquery.js"></script>
    <script src="../script/popper.min.js"></script>
    <script src="../script/bootstrap.min.js"></script>
    <script src="../script/slick.slider.min.js"></script>
    <script src="../script/fancybox.min.js"></script>
    <script src="../script/isotope.min.js"></script>
    <script src="../script/smartmenus.min.js"></script>
    <script src="../script/progressbar.js"></script>
    <script src="../script/jquery.countdown.min.js"></script>
    <script src="../script/functions.js"></script>

    <script>

      $(function(){
        $(".pt").click(function(){
        $(this).hide();
        window.print();
    })
      })
    </script>
</body>


<!-- blog-detail42:02-->

</html>