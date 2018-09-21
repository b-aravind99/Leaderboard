<?php
$con=mysqli_connect("localhost","root","","Leaderboard");
$result=mysqli_query($con,"select * from data order by Points")
or die("Failed to query database.mysql_error()");
$i=0;

$arr = array(array());
      while($row=mysqli_fetch_array($result))
      {
        $name=$row[0];
        $points=$row[1];
          for($j=0;$j<2;$j++)
          {
            if($j==0)
            $arr[$i][$j]=$name;
            if($j==1)
            $arr[$i][$j]=$point;
        }
          $i++;
        }
      
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>LEADERBOARD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
	
</body>
</html>
<style>
.navbar {
    margin-bottom: 0;
    background-color:#3498DB;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
}

.navbar li a, .navbar .navbar-brand {
    color: #fff !important;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
}

.navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
}

.panel {
    border: 1px solid #f4511e; 
    border-radius:0;
    transition: box-shadow 0.5s;
}

.panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
}

.panel-footer .btn:hover {
    border: 1px solid #fff;
    background-color: #fff !important;
    color: #f4511e;
}

.panel-heading {
    color:green;
    background-color:#117864;
    padding: 5px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
}

.panel-footer {
    background-color: #ffffff;
}

.panel-footer h1 {
    font-size: 32px;
}

.cl1{
 background-color:#85929e;
 }
 .cl2{
 background-color:  #EC7063;
 }
 .cl3{
 background-color:#FAB072;
 }
.panel-body img{
width:150px;
height:150px;
}
</style>
<body>
  <div class="jumbotron text-center">
	 <h1><span class="glyphicon glyphicon-phone"></span>WebStacks</h1>  
  </div>
  <div class="container-fluid">
  <div class="text-center">
    <h1 color="black"><strong>LEADERBOARD</strong></h1><br>
  </div>
 
  
 <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default text-center">
        
		<div class="cl1">
        <div class="panel-body">
         <img src="img1.jpg">
          <h2><strong>1.<?php  echo "<p style='font-size:36px; line-height:70% '> Name:".$arr[0][0]."</p>";?></strong> </h2>
        </div>
        <div class="panel-footer">
          <h1>Points</h1>
		  <?php echo "<h4 Points:".$arr[0][1]."</h4>";?>
		  <div class="progress">
            <div class="progress-bar" style="width:90%">90</div>
          </div>
        </div>
		</div>
      </div> 
    </div>    
  </div>
  
 <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Name</h1>
        </div>
		<div class="cl2">
        <div class="panel-body">
          <img src="img2.jpg"><h2><strong>2.VIRAT</strong></h2>
        </div>
        <div class="panel-footer">
          <h1>Points</h1>
		  <h4>80</h4>
		  <div class="progress">
            <div class="progress-bar" style="width:80%">80</div>
          </div>  
        </div>
		</div>
      </div> 
    </div>    
  </div>

  
 <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Name</h1>
        </div>
		<div class="cl3">
        <div class="panel-body">
          <img src="img3.jpg"><h2><strong>3.HARISH</strong> <h2>
        </div>
        <div class="panel-footer">
          <h1>Points</h1>
		  <h4>70</h4>
          <div class="progress">
            <div class="progress-bar" style="width:70%">70</div>
          </div>
		</div>
		</div>
      </div> 
    </div>    
  </div>

  
 <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Name</h1>
        </div>
<div class="cl1">
        <div class="panel-body">
          <img src="img4.jpg"><h2><strong>4.RAM</strong> <h2>
</div>
        </div>
        <div class="panel-footer">
          <h1>Points</h1>
		  <h4>60</h4>
          <div class="progress">
            <div class="progress-bar" style="width:60%">60</div>
          </div>      
		</div>
      </div> 
    </div>    
  </div>

  
 <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Name</h1>
        </div>
<div class="cl2">
        <div class="panel-body">
          <img src="img5.jpg"><h2><strong>5.SABARISH</strong> <h2>
        </div>
</div>
        <div class="panel-footer">
          <h1>Points</h1>
		  <h4>50</h4>
          <div class="progress">
            <div class="progress-bar" style="width:50%">50</div>
          </div>
		</div>
      </div> 
    </div>    
  </div>

  
 <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Name</h1>
        </div>
<div class="cl3">
        <div class="panel-body">
          <img src="img6.jpg"><h2><strong>6.ARAVIND</strong> <h2>
        </div>
</div>
        <div class="panel-footer">
          <h1>Points</h1>
		  <h4>40</h4>
          <div class="progress">
            <div class="progress-bar" style="width:40%">40</div>
          </div>
		</div>
      </div> 
    </div>    
  </div>

  
 <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Name</h1>
        </div>
<div class="cl1">
        <div class="panel-body">
          <img src="img7.jpg"><h2><strong>7.TEJA</strong> <h2>
       </div> </div>
        <div class="panel-footer">
          <h1>Points</h1>
		  <h4>30</h4>
          <div class="progress">
            <div class="progress-bar" style="width:30%">30</div>
          </div>
		</div>
      </div> 
    </div>    
  </div>

 
 <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Name</h1>
        </div>
<div class="cl2">
        <div class="panel-body">
          <img src="img8.jpg"><h2><strong>8.Chandler</strong> <h2>
       </div>
 </div>
        <div class="panel-footer">
          <h1>Points</h1>
		  <h4>20</h4>
          <div class="progress">
            <div class="progress-bar" style="width:20%">20</div>
          </div>    
		</div>
      </div> 
    </div>    
  </div>
 
 </div>

</body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">LeaderBoard</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#task">TASK</a></li>
		<li><a href="#profile">PROFILE</a></li>
	    <li><a class="nav-link" href="http://login.html">Log Out</a>
      </ul>
    </div>
  </div>
</nav>