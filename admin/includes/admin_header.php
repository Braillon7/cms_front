<?php ob_start(); ?>
<?php include "../includes/db.php"; ?>
<?php include "functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link href="css/styles.css" rel="stylesheet">

 <script type="text/javascript" src="https://www.google.com/jsapi"></script>



<script src="js/jquery.js"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"> </script>


<script>
    $(document).ready(function(){
   ClassicEditor
    .create( document.querySelector( '#body' ) )
    .catch( error => {
            console.error( error );
        });
     });
</script>
<script>
    $(document).ready(function(){

    $('#selectAllBoxes').click(function(event) {

    if(this.checked) {
        $('.checkBoxes').each(function() {
            this.checked = true;
        });

    } else {
       $('.checkBoxes').each(function() {
            this.checked = false;
        });
    }

});


    });
//loading page

// $(document).ready(function(){
//var div_box =  "<div id='load-screen'><div id='loading'></div></div>";
//    $("body").prepend(div_box);
//    $('#load-screen').delay(700).fadeOut(600, function(){
//        $(this).remove();
//    });
//});


//end loading page
</script>


</head>
