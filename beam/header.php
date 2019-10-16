<!DOCTYPE html>
<html>
<head>
	<title>Beam</title>
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
    
</head>
    <script type="text/javascript">
$(document).ready(function(){
    $('#devices').on('change',function(){
        var deviceID = $(this).val();
        if(deviceID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'device_id='+ deviceID ,
                success:function(html){
                    $('#brands').html(html);
                    $('#code').html('<option value="">Select state Device</option>'); 
                }
            }); 
        }else{
            $('#brands').html('<option value="">Select Device first</option>');
            $('#code').html('<option value="">Select Brand first</option>'); 
        }
    });
    
    $('#brands').on('change',function(){
        var brandsID = $(this).val();
        if(brandsID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'brands_id='+ brandsID,
                success:function(html){
                    $('#code').html(html);
                }
            }); 
        }else{
            $('#code').html('<option value="">Select Brand first</option>'); 
        }
        
    });
});
</script>


<body>
<div style="width: 100%;">
	<!--Navbar-->
<nav class="navbar navbar-light light-blue lighten-4">

<!-- Navbar brand -->
<a class="navbar-brand" href="index.php"><h1 class="beamname">Beam</h1></a>

<!-- Collapse button -->
<button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
  aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
      class="fas fa-bars fa-1x"></i></span></button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="navbarSupportedContent1">

  <!-- Links -->
  <ul class="navbar-nav mr-auto">
    <li class="ml-auto nav-item">
      <a class="nav-link" href="troubleshooting.php">TROUBLESHOOTING<span class="sr-only">(current)</span></a>
    </li>
    <li class="ml-auto nav-item">
      <a class="nav-link" href="https://southerntelecom.mycusthelp.com/webapp/_rs/(S(bxz4vnvqvj2l3z2eeatc2dv0))/SupportHome.aspx">PRODUCT SUPPORT</a>
    </li>
    <li class="ml-auto nav-item">
      <a class="nav-link" href="https://beamremotes.com/static/media/i580_User_Guide_V1-0_20190521_EN.abc59102.pdf">USER GUIDE</a>
    </li>
    <li class="ml-auto nav-item">
      <a class="nav-link" href="privacypolicy.php">PRIVACY STATEMENT</a>
    </li>

  </ul>
  <!-- Links -->

</div>
<!-- Collapsible content -->

</nav>
<!--/.Navbar-->
	
</div>