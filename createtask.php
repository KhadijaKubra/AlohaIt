<?php
session_start();
$_SESSION['mId']=$_GET['id'];
?>
<html>

<head>
    <Title>login</Title>
       <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/createtask.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
    <script>
	window.onload=function() { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("title").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getTask.php",true);
        xmlhttp.send();
    }
	
	function jAjax(){
		var t=document.getElementById('T_name').value;
		var p=document.getElementById('project').value;
		if(p.localeCompare('no data found')!=0 && t.localeCompare('')!=0 )
		{
			
        $.ajax({url: "createData.php",
		        data: {t_name:t, project:p },
				success: function(result){
          if(result==1)
		  {			  
		   alert("Data inserted");
		   window.location.replace('membershow.php');
		  }
		  else if(result==0){
			  alert("Data not inserted.");
		  }
		  else
		  {
			  alert("DataBase Error"+result);
		  }
        }});
		}
else{
	alert('insert all data');
}	
    }
	
	
	
</script>
	    
 <body>
    
    
  
     <div class="container">
        <div class="row centered-form">
        <div class="col-sm-8 col-sm-offset-2 formobj">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">task assign</h3>
			 			</div>
			 			<div class="panel-body">
			    		<form>
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="task_name" id="T_name" class="form-control input-sm" placeholder="task Name">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group" id="title">
			    
                                        
			    					</div>
			    				</div>
			    			</div>

			    	  <div class="row">
			    			<input type="button" value="Create" id="create"  onclick="jAjax()"class="btn btn-info btn-block" >
			    		</div>
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
     

    
    
</body>   
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

 <script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>

