<?php 
include 'core.php';

if(isset($_GET['dollar'])){
    // adding activity

    if($_GET['dollar']=="addplayer"){
        
        include 'db.php';
        extract($_POST);
        $bio  =mysqli_real_escape_string($conn,$bio);
        
        // $ref  =mysqli_real_escape_string($conn,$ref);
       
        if(empty($_FILES['image']['name'])){

            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
            browse image for Player   
            </div>';

        }
        
        else{
            $dd = date("jS F, Y");

            addplayer($name,$jnumber,$bio);
        }
    }
// Deleting Activity
    if($_GET['dollar']=="deleteactivity"){

        $id = $_POST['id'];

       echo  $id;
    }
// Updating activity
    if($_GET['dollar']=="updateactivity"){

        include 'db.php';
        extract($_POST);
        $desco =mysqli_real_escape_string($conn,$description);
        $dd = date("jS F, Y");

        updateactivity($id,$title,$price,$desco,$oldpic,$dd);

    }







    // adding post

    if($_GET['dollar']=="addpost"){
        
        include 'db.php';
        extract($_POST);
        $body  =mysqli_real_escape_string($conn,$body);
        $author  =mysqli_real_escape_string($conn,$author);

        
        // $ref  =mysqli_real_escape_string($conn,$ref);
       
        if(empty($_FILES['image']['name'])){

            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
            browse post thumbnail   
            </div>';

        }
        
        else{
            $dd = date("jS F, Y");

            addpost($title,$body,$author,$dd);
        }
    }



    // adding match days

    if($_GET['dollar']=="addmatch"){
        
        include 'db.php';
        extract($_POST);
        
        $dt = $date.' '.$time;

        
        // $ref  =mysqli_real_escape_string($conn,$ref);
       
        if(empty($_FILES['image']['name'])){

            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
            browse Match thumbnail   
            </div>';

        }
        
        else{
            $dd = date("jS F, Y");

            addmatch($title,$venue,$dt);
        }
    }



    if($_GET['dollar']=="addvideo"){
        
        include 'db.php';
        extract($_POST);
        
       

        
        // $ref  =mysqli_real_escape_string($conn,$ref);
       
        if(empty($_FILES['image']['name'])){

            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
            browse Video thumbnail   
            </div>';

        }
        
        else{
            $dd = date("jS F, Y");

            addvideo($link,$title,$dd,$body);
        }
    }



    // Adding Fixtures

    if($_GET['dollar']=="addfixtures"){
        
        include 'db.php';
        extract($_POST);
        
       

        
        // $ref  =mysqli_real_escape_string($conn,$ref);
       
        if(empty($_FILES['image']['name']) || empty($_FILES['image1']['name'])){

            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
            browse images   
            </div>';

        }
        
        else{
          

            addfixtures($team1,$team2,$team1goal,$team2goal);
        }
    }


    if($_GET['dollar']=="addtour"){
        
        include 'db.php';
        extract($_POST);
        $desco =mysqli_real_escape_string($conn,$description);
        if (empty($title) &&  empty($prie)) {
            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                service name and price cannot be empty
                </div>';
            # code...
        }
        elseif(empty($_FILES['image']['name'])){

            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
            browse image for service   
            </div>';

        }
        else{
            $dd = date("jS F, Y");

            addtourservice($title,$price,$desco,$dd);
        }
    }

// update tour
    if($_GET['dollar']=="updatetourserv"){

    include 'db.php';
    extract($_POST);
    $desco =mysqli_real_escape_string($conn,$description);
    $dd = date("jS F, Y");

    updatetour($id,$title,$price,$desco,$oldpic,$dd);

    }


    if($_GET['dollar']=="addacomo"){
        
        include 'db.php';
        extract($_POST);
        $desco =mysqli_real_escape_string($conn,$description);
        if (empty($title) &&  empty($prie)) {
            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                Accomodation name and price cannot be empty
                </div>';
            # code...
        }
        elseif(empty($_FILES['image']['name'])){

            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
            browse image for accomodation   
            </div>';

        }
        else{
            $dd = date("jS F, Y");

            addaccomodation($title,$price,$desco,$dd,$ltype);
        }
    }


    // updating accomodation

    if($_GET['dollar']=="updateaccserv"){

        include 'db.php';
        extract($_POST);
        $desco =mysqli_real_escape_string($conn,$description);
        $dd = date("jS F, Y");
    
        updateaccomodation($id,$title,$price,$desco,$oldpic,$dd,$ltype);
    
        }

        if($_GET['dollar']=="addlocation"){
        
            include 'db.php';
            extract($_POST);
            // $desco =mysqli_real_escape_string($conn,$description);
            if (empty($title)) {
                echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                    Location name  cannot be empty
                    </div>';
                # code...
            }
            elseif(empty($_FILES['image']['name'])){
    
                echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                browse image for Location   
                </div>';
    
            }
            else{
                $dd = date("jS F, Y");
    
                Addlocation($title);
            }
        }





        if($_GET['dollar']=="login"){
        
            include 'db.php';
            extract($_POST);
            // $desco =mysqli_real_escape_string($conn,$description);
            if (empty($email)) {
                echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                    enter email
                    </div>';
                # code...
            }
            elseif(empty($password)){
    
                echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                enter password   
                </div>';
    
            }
            else{
                // $dd = date("jS F, Y");
    
                Adminlogin($email,$password);
            }
        }


}

?>