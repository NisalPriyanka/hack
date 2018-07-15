<?php
	if($_SERVER['HTTP_REFERER']== 'http://localhost/hack/c01/')
	{ 
		if(isset($_POST['sbmt']))
		{
			if($_POST['user_name']=='Thor' && $_POST['pwd']=='Whistler’s Mother')
			{ ?>
				


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="boost/css/bootstrap.min.css" type="text/css" />
<script type="text/javascript" src="boost/js/bootstrap.min.js"></script>
<style type="text/css">
a:hover{
	color:red;
}
</style>
</head>
<body>

	<div class="container-fluid bg-dark">
    	<!--header-->
        <div class="row"><br/></div>
        <div class="row">
        	<div class="col-md-12" style="text-align:center;">
            	<img src="stalker.jpg" class="img-fluid"/>
            </div>
        </div>
        <br/>
        <div class="row" style="border:1px solid red;"></div>
        <br/>
        <!--contents-->
        <div class="row">
        
        	<div class="col-md-2" style="color:#CF0; font-size:20px;">
            	<div class="row" style="margin-left:15px; border-bottom:1px solid #9F0;">
                	<p>Info Panel </p>
                </div>
        		<div class="row" style="margin-left:15px; font-size:18px;">
                <a href="bloody.html" target="myFrame">Bloody Harvest</a>
                </div>
                <div class="row" style="margin-left:15px; font-size:18px;"> 
                 <a href="how_work.html" target="myFrame">How We Work?</a>
                </div>
                <div class="row" style="margin-left:15px; font-size:18px;"> 
                 <a href="http://www.organselling.com/patient.htm" target="myFrame">Patient Stories </a>
                </div>
                <br/>
                <div class="row" style="margin-left:15px; border-bottom:1px solid #9F0;">
                	<p>E-Mail Client </p>
                </div>
                <div class="row" style="margin-left:15px; font-size:18px;">
                <a href="mail_list.html" target="myFrame">E-Mail List</a>
                </div>
                
                <div class="row" style="margin-left:15px; font-size:15px;">
                <a href="email.php" target="myFrame">Inter-Network E-Mail Panel</a>
                </div>
                
        	</div>
       		<div class="col-md-10">
        		<div class="embed-responsive embed-responsive-16by9">
                <iframe src="main.html" class="embed-responsive-item" scrolling="yes"> </iframe>
                <iframe name="myFrame" class="embed-responsive-item" scrolling="auto"> </iframe> 
                
                </div>
        	</div>
        </div>
        
        
    </div>

</body>
</html>

<?php 
  			}
			else
			{
				echo "Passcode Wrong";
				header('Location: http://localhost/hack/c01');
			}	
		}
	}
	else
	{
		header('Location: http://localhost/hack/c01');
	}
	
?>
