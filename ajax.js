$(function(){

    $(".loodding").hide();

    function myloader(){
        $(".loodding").show();
    };

    function myresponse(response){
        $("#myresp").html(response);
        $('#myalert').fadeOut(6000);
    };

    function deleteitem(response){

        alert(response);
        location.reload(true);

    }


// adding activity
    $("#actfrm").submit(function (e) {

        e.preventDefault();

        var mf = {
            url: "actions.php?dollar=addplayer",
            type: 'post',
            data : new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: myloader,
            success: myresponse


        };

        $.ajax(mf);
        

        
    });



    // adding match day 


    $("#mtfrm").submit(function (e) {

        e.preventDefault();

        var mf = {
            url: "actions.php?dollar=addmatch",
            type: 'post',
            data : new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: myloader,
            success: myresponse


        };

        $.ajax(mf);
        

        
    });



    // adding Video

    $("#videofrm").submit(function (e) {

        e.preventDefault();

        var mf = {
            url: "actions.php?dollar=addvideo",
            type: 'post',
            data : new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: myloader,
            success: myresponse


        };

        $.ajax(mf);
        

        
    });




    // Adding Fixtures

    $("#fixfrm").submit(function (e) {

        e.preventDefault();

        var mf = {
            url: "actions.php?dollar=addfixtures",
            type: 'post',
            data : new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: myloader,
            success: myresponse


        };

        $.ajax(mf);
        

        
    });

   
    // Deleting activity


    $(".btndel").click(function(ev){

        var dd = this.id;
        ev.preventDefault();
        var info = 'id=' + dd;

        // alert(dd);
        var delopt = {
            url: "del.php?myid="+dd,
            type: 'post',
            data :info,
            
            // beforeSend: myloader,
            success: deleteitem

        }

        $.ajax(delopt);
    })


    $(".btndelma").click(function(ev){

        var dd = this.id;
        ev.preventDefault();
        var info = 'id=' + dd;

        // alert(dd);
        var delopt = {
            url: "delma.php?myid="+dd,
            type: 'post',
            data :info,
            
            // beforeSend: myloader,
            success: deleteitem

        }

        $.ajax(delopt);
    })




    $(".btndelvid").click(function(ev){

        var dd = this.id;
        ev.preventDefault();
        var info = 'id=' + dd;

        // alert(dd);
        var delopt = {
            url: "delvid.php?myid="+dd,
            type: 'post',
            data :info,
            
            // beforeSend: myloader,
            success: deleteitem

        }

        $.ajax(delopt);
    })


    $(".btndelfix").click(function(ev){

        var dd = this.id;
        ev.preventDefault();
        var info = 'id=' + dd;

        // alert(dd);
        var delopt = {
            url: "delfix.php?myid="+dd,
            type: 'post',
            data :info,
            
            // beforeSend: myloader,
            success: deleteitem

        }

        $.ajax(delopt);
    })


    $(".btndelp").click(function(ev){

        var dd = this.id;
        ev.preventDefault();
        var info = 'id=' + dd;

        // alert(dd);
        var delopt = {
            url: "delp.php?myid="+dd,
            type: 'post',
            data :info,
            
            // beforeSend: myloader,
            success: deleteitem

        }

        $.ajax(delopt);
    })

    // updating activity
    $("#uptactfrm").submit(function (e) {

        e.preventDefault();

        var mf = {
            url: "actions.php?dollar=updateactivity",
            type: 'post',
            data : new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: myloader,
            success: myresponse


        };

        $.ajax(mf);
        

        
    });


    // adding of tour service

    $("#tourfrm").submit(function (e) {

        e.preventDefault();

        var mf = {
            url: "actions.php?dollar=addtour",
            type: 'post',
            data : new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: myloader,
            success: myresponse


        };

        $.ajax(mf);
        

        
    });


    // updating Tour
    $("#upttourfrm").submit(function (e) {

        e.preventDefault();

        var mf = {
            url: "actions.php?dollar=updatetourserv",
            type: 'post',
            data : new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: myloader,
            success: myresponse


        };

        $.ajax(mf);
        

        
    });

// deleting tour service
    $(".btndeltour").click(function(ev){

        var dd = this.id;
        ev.preventDefault();
        var info = 'id=' + dd;

        // alert(dd);
        var delopt = {
            url: "deltour.php?myid="+dd,
            type: 'post',
            data :info,
            
            // beforeSend: myloader,
            success: deleteitem

        }

        $.ajax(delopt);
    })


    // Add Accomodation
    $("#accfrm").submit(function (e) {

        e.preventDefault();

        var mf = {
            url: "actions.php?dollar=addacomo",
            type: 'post',
            data : new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: myloader,
            success: myresponse


        };

        $.ajax(mf);
        

        
    });



    // Updating Accomodation

    $("#uptaccfrm").submit(function (e) {

        e.preventDefault();

        var mf = {
            url: "actions.php?dollar=updateaccserv",
            type: 'post',
            data : new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: myloader,
            success: myresponse


        };

        $.ajax(mf);
        

        
    });


    // Deleting Accomodation 

    $(".btndelacomo").click(function(ev){

        var dd = this.id;
        ev.preventDefault();
        var info = 'id=' + dd;

        // alert(dd);
        var delopt = {
            url: "delacomo.php?myid="+dd,
            type: 'post',
            data :info,
            
            // beforeSend: myloader,
            success: deleteitem

        }

        $.ajax(delopt);
    })

    $("#locfrm").submit(function (e) {

        e.preventDefault();

        var mf = {
            url: "actions.php?dollar=addlocation",
            type: 'post',
            data : new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: myloader,
            success: myresponse


        };

        $.ajax(mf);
        

        
    });

    $(".btndelloc").click(function(ev){

        var dd = this.id;
        ev.preventDefault();
        var info = 'id=' + dd;

        // alert(dd);
        var delopt = {
            url: "delloc.php?myid="+dd,
            type: 'post',
            data :info,
            
            // beforeSend: myloader,
            success: deleteitem

        }

        $.ajax(delopt);
    })


    $("#logfrm").submit(function (e) {

        e.preventDefault();

        var mf = {
            url: "actions.php?dollar=login",
            type: 'post',
            data : new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: myloader,
            success: myresponse


        };

        $.ajax(mf);
        

        
    });



    // adding Post

    $("#postfrm").submit(function (e) {

        e.preventDefault();

        var mf = {
            url: "actions.php?dollar=addpost",
            type: 'post',
            data : new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: myloader,
            success: myresponse


        };

        $.ajax(mf);
        

        
    });

   

    
})