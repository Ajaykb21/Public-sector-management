<?php 
$page=0;
$dist=0;
$rate=0;
$dept_name="";
	if(isset($_GET['page']))
	{
		$page=(int)$_GET['page'];
    }
    else if(isset($_GET['dist']))
    {
        $dist=$_GET['dist'];
    }
    else if(isset($_GET['rate']))
    { 
        $rate=$_GET['rate'];
    }
    else if(isset($_GET['deptname']))
    {
        $dept_name=$_GET['deptname'];
       
    }

	$ele=$page*8;
	$h_img=array();
	$h_name=array();
	$h_add=array();
	$h_phone=array();
    $i=0;
    
    if($dist)
    {    
        switch($dist)
            {
                case 'a':$query="SELECT * FROM healthcare WHERE h_dist BETWEEN 0 AND 5";
                        break;
                case 'b':$query="SELECT * FROM healthcare WHERE h_dist BETWEEN 6 AND 10";
                        break;
                case 'c':$query="SELECT * FROM healthcare WHERE h_dist BETWEEN 11 AND 15";
                        break;
                case 'd':$query="SELECT * FROM healthcare WHERE h_dist > 15";
                        break;
            }
    }
    
      
    else if($rate)
    {   
        switch($rate)
            {
                case 'a':$query="SELECT * FROM healthcare WHERE h_rating>4";
                        break;
                case 'b':$query="SELECT * FROM healthcare WHERE h_rating>3";
                        break;
                case 'c':$query="SELECT * FROM healthcare WHERE h_rating>2";
                        break;       
            }
    }
    

    else if($dept_name)
    {
        $query = "select * from healthcare h, departments d where h.h_id=d.h_id and d.dept_name='$dept_name' group by h.h_id";
    }
    else
    {
        $query="select * from healthcare";
    }
   
	$res=mysqli_query($connection,$query);
	$count=mysqli_num_rows($res);
	$nopage= ceil($count/8);
	$rem=$count%8;
    if($count>0)
    {    
	    while($row=mysqli_fetch_assoc($res))
	        {
		        $h_img[$i]= $row["h_img"];
		        $h_id[$i]=$row["h_id"];
		        $h_name[$i]=$row["h_name"];
		        $h_add[$i]=$row["h_add"];
		        $h_phone[$i]=$row["h_contact"];
		        $i=$i+1;	
	        }
	
	    if(($page+1)==$nopage)
	    {
            $loop=$ele+$rem;
        }
	    else
	    {
            $loop=$ele+8;
        }
               
	    for($j=$ele;$j<$loop;$j++)	
	    {
		    echo "<a href='healthdisp.php?id={$h_id[$j]}'>
		        <div class=' col-sm-12 ele' >  
		            <div class='col-sm-2 catimgsize '> 						  
				        <img src='images/{$h_img[$j]}' class='catimg'>
			        </div>
 
 			        <div class=' col-sm-15 main '>                                      
				        <div >                                       						    
					        <h1 class='hdesp'>{$h_name[$j]}</h1>
					        <h3 class='desp'>
						    <i class='material-icons icn'>near_me</i>{$h_add[$j]}</h3>
					        <h3 class='desp'><i><i class='material-icons'>call</i>{$h_phone[$j]}</i></h3>
				        </div>
			        </div>                                                           
		        </div>   				 
            </a>";
           
        }
    }
?>

