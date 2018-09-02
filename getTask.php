<?php
  require "config.php";
		
		   $statement="select * from project";
		   $result=mysqli_query($conn,$statement);
		    if (mysqli_num_rows($result) > 0)
            {
				echo"<select class='form-control' id='project'>";
                while($row = mysqli_fetch_assoc($result))
                 {
					 echo"<option>".$row['ID']."</option>";
                 }
				 echo"</select>";
			}
			else
			{
				echo"<select class='form-control' id='project'><option>no data found</option></select>";
			}
 
?>