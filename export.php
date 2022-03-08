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
    $cid= $_GET['ucid'];
    $getdeal = mysqli_query($conn,"SELECT * FROM request WHERE pid= '$playerid' AND cid='$cid' ");
    $row = mysqli_fetch_array($getdeal);
    extract($row);

    $see = mysqli_query($conn,"SELECT * FROM player WHERE id ='$playerid' ");
    $mp =mysqli_fetch_array($see);

    $cee = mysqli_query($conn,"SELECT * FROM client WHERE id ='$cid' ");
    $ce =mysqli_fetch_array($cee);


    require_once 'dompdf/autoload.inc.php';


use Dompdf\Dompdf;



$document = new Dompdf();

    

$output  ='

<!doctype html>
<html lang="zxx">


<!-- blog-detail42:00-->

<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NSM CONTRACT</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <link rel="stylesheet" href="css/slick-slider.css">
    <link rel="stylesheet" href="css/fancybox.css">
    <link rel="stylesheet" href="css/smartmenus.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">

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
                            <figure class="ritekhela-fixture-detail">
                                <img src="images/logo.png" alt="">

                            </figure>

                            <div class="ritekhela-editor-detail">
                                <h2>STANDARD PLAYING CONTACT </h2>
                                <p>This contract is made between<strong> '.$mp['pname'].'</strong> and <strong><?php echo $club ;?></strong> dated ...... .<br>The contract is relevant for the following playing season(s)<strong>  '. $cfrom.' to '.$cto.'</strong>.</p>
                                <p>In accordance with the information provided therein this contract, the following details are set out as the
                                    payment details from the club to the player as a return for services associated/provided with the club.
                                    N.B.: The club reserves the right to impose a financial penalty on the player for any breaches of the contract conditions which shall not exceed 50% of the players Base Salary .
                                    Complete as per agreement reached. <br>

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
                                        <th>Salary Type</th>
                                        <th>Amount</th>

                                    </tr>
                                    <tr>
                                        <td>Base Salary</td>
                                        <td>$<?php echo $bs ;?></td>

                                    </tr>

                                    <tr>
                                        <td>Per match played</td>
                                        <td>$<?php echo $mpay ;?></td>

                                    </tr>

                                    <tr>
                                        <td>Reserve player on bench </td>
                                        <td>$<?php echo $rpay ;?></td>

                                    </tr>
                                </table>

                                <?php echo $other ;?>
                                </p>

                                <p>The player must comply with the following obligations:
                                    The club and player acknowledge that this contract has been entered into in good faith. The contract shall
                                    commence on <strong>'.$cfrom .'</strong> shall terminate on<strong> '.$cto.' </strong>\'s signature ........... For and on behalf of the club by its duly authorised officer <br>
                                    <strong> '.$ce['name'].' ></strong><br><img src="signature/'.$signature .'" style="height:100px;" /><br><strong> '.$ce['utype'].'</strong>

                                </p>
                                <p>
                                <h4>PLAYER OBLIGATIONS </h4>
                                For the term of the contract, this contract records and the following is agreed between the parties:
                                PLAYER OBLIGATIONS
                                1.1 Attend all training sessions and team meetings of the Club.
                                1.2 Obey all reasonable directions of the Senior Coach, President, and Secretary of the Club.
                                1.3 Play in all football matches in which he is selected to play or as otherwise directed by the Club unless a duly
                                qualified Medical Practitioner rules him unfit to play.
                                1.4 Comply with all reasonable requirements of the Club relating to preparation for matches, attendance at social
                                functions, behaviour and dress.

                                1.5 Not play or train for or with any other Club or team without first obtaining the consent in writing of the Club.
                                1.6 Do everything reasonably necessary to obtain and maintain the best possible physical condition so as to render
                                the most efficient service to the Club and to submit from time to time and as and when required by the Club to a
                                complete a thorough medical fitness test and examination.
                                1.7 Maintain membership of recognised hospital and medical benefits fund which provides hospital, medical and
                                dental benefits coverage and includes ambulance subscription.
                                1.8 Not engage in any dangerous activity which in the opinion of the Club may affect the Player\'s ability to perform
                                his obligations under this Contract without first obtaining the consent in writing of the Club.
                                1.9 During league matches, wear only such items of playing apparel as may be approved of or prescribed by the
                                League and to the extent that the same are not inconsistent therewith, the Club.
                                1.10 Not comment on a matter which the Club has notified the Player is a matter upon which Players of the Club are
                                not to comment publicl <br><br>

                                <h4>PLAYER BOUND TO RULES </h4>

                                2.1 The Player hereby agrees with the Club that he is bound by:-
                                (a) the Rules and Regulations of the Club;
                                (b) the Rules and Regulations of the League within which the Club plays (including requirements of players
                                and clubs regarding registration); and
                                (c) the Rules and Regulations of .....................................................................................................................,
                                including any modifications thereof made from time to time (“the Rules”).
                                2.2 The Player hereby acknowledges that the Rules restrict the freedom of players to transfer from one Club
                                to another but that such Rules are necessary and reasonable for the purpose of:-
                                (a) achieving an even and well-matched competition;
                                (b) ensuring the competition is properly organised and well administered; <br><br>


                                <h4>DISPUTE</h4>
                                3.1 In the event of a dispute arising between the parties during the term of this Contract or following the termination
                                hereof, the matter may be referred for determination to the nominee of the league. A request for determination
                                by an aggrieved party shall be made in writing to the other party and shall contain a precise statement of the
                                issue in dispute and all relevant facts giving rise to the dispute. The League may adjudicate upon any dispute in
                                accordance with its rules in force at the time.<br><br>

                                <h4>TERMINATION</h4>

                                This Contract may be terminated by:
                                4.1 The Club if the Player is in breach of any of his obligations hereunder and the breach continues for a period of 14
                                days after notice in writing by the Club to the Player requiring the breach to be remedied.
                                4.2 The Player if the Club is in breach of any of its obligations hereunder and the breach continues for a period of 14
                                days after notice in writing by the Player to the Club requiring the breach to be remedied.<br><br>

                                <h4> PLAYER MOVEMENT/TRANSFER TO OTHER CLUBS or LEAGUES</h4>
                                5.1 The player will remain contracted with the club that has signed him/her on until the expiration of the
                                contract. It is noted and agreed to by all parties to this contract that the club reserves the right to loan,sell on transfer a player to another team or league so long as this contract is valid and in the event where a player is indebted to the club.
                                5.2 Both Player and club reserve the rights to renew this contract in the event of it successfully expiring.

                                5.3 Both Player and club are to adhere to all agency and or manager commitments and fees that predates the first contract and shall be held liable in any event or attempt not to pay. Which will attract a penalty of 50% the total value due.<br><br>

                                <h4>WAIVER</h4>
                                6.1 A waiver by any party of any of the terms and conditions of this Contract in any one case shall not be deemed or
                                construed to be a waiver of such term or condition for the future or for any other or subsequent breach<br><br>






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
    <script src="script/jquery.js"></script>
    <script src="script/popper.min.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/slick.slider.min.js"></script>
    <script src="script/fancybox.min.js"></script>
    <script src="script/isotope.min.js"></script>
    <script src="script/smartmenus.min.js"></script>
    <script src="script/progressbar.js"></script>
    <script src="script/jquery.countdown.min.js"></script>
    <script src="script/functions.js"></script>
</body>


<!-- blog-detail42:02-->

</html>';

$output .= '</table></body></html>';

$document->loadHtml($output);

$document->setPaper('A4', 'landscape');

$document->render();

$document->stream("Sourcecodester", array("Attachment"=>0));

?>