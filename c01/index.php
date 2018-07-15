<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="boost/css/bootstrap.min.css" type="text/css" />
<!--<script type="text/javascript" src="boost/js/bootstrap.min.js"></script>-->
<script type="text/javascript" src="api.js"></script>
<style type="text/css">
@font-face{
	font-family:theme;
	src:url('adlery.ttf');
}

</style>

			
</head>
<body>

	<div class="container"> 
    
    	<div class="row">
        	
            <div class="col-md-12">
            	<div class="jumbotron bg-primary"><p style="font-family:theme; text-align:center; color:#900; font-size:120px;"> STALKER LOGIN PORTAL </p> </div>
            </div>
        
        </div>
        
        <div class="row">
        	<div class="col-md-12">
            	<p style="text-align:center;"><span style="font-size:30px;">We are your Life Guardians!  </span> <span style="font-size:30px; color:white;"> Thor </span> </p>
            </div>
        </div>
        <br/>
        <div class="row">
        	<div class="col-md-4"></div>
         	<div class="col-md-4">
            	<form action="../c01/main/index.php" method="POST">
                	<div class="form-group">
                      <label for="username">User Name</label>
                      <input type="text" name="user_name" class="form-control" />
                    </div>
                    <div class="form-group">
                    	<label for="pswd">Password</label>
                        <input type="password" name="pwd" class="form-control" />
                    </div>
                    
                    <input type="submit" name="sbmt" class="btn btn-dark" />
                    <?php 
						/*if(isset($_POST['sbmt']))
						{
							if($_POST['user_name']=='Thor' && $_POST['pwd']=='Whistler’s Mother')
							{
								echo "<script> window.location.assign('../c01/main/index.php'); </script>";	
							}
							else
							{ 
								echo '<p style="color:red;"> Username or Password is wrong!! </p>';
							}
						}*/
					?>
                    
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    
    	<div class="row">
          <div class="col-md-12"><b>Today's Quote</b></div> 
        </div>
        <div class="row">
         <div class="col-md-4">
          <p><i>White covers a multitude of sins. <br/> [ Jonathan Milne ]</i></p>
		   </div>
        </div>
    </div>
    
    

</body>

</html>