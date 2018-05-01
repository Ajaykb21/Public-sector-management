<?php 
$page=0;
$dist=0;
$rate=0;
$c_name="";
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
    else if(isset($_GET['cname']))
    {
        $c_name=$_GET['cname'];
       
    }

	$ele=$page*8;
	$e_img=array();
	$e_name=array();
	$e_add=array();
	$e_phone=array();
    $i=0;
    
    if($dist)
    {    
        switch($dist)
            {
                case 'a':$query="SELECT * FROM education WHERE e_dist BETWEEN 0 AND 5";
                        break;
                case 'b':$query="SELECT * FROM education WHERE e_dist BETWEEN 6 AND 10";
                        break;
                case 'c':$query="SELECT * FROM education WHERE e_dist BETWEEN 11 AND 15";
                        break;
                case 'd':$query="SELECT * FROM education WHERE e_dist > 15";
                        break;
            }
    }
    
      
    else if($rate)
    {   
        switch($rate)
            {
                case 'a':$query="SELECT * FROM education WHERE e_rating>=4";
                        break;
                case 'b':$query="SELECT * FROM education WHERE e_rating>=3";
                        break;
                case 'c':$query="SELECT * FROM education WHERE e_rating>=2";
                        break;       
            }
    }
    

    else if($c_name)
    {
        $query = "select * from education e, course c where e.e_id=c.e_id and c.c_name='$c_name' group by e.e_id";
    }
    else
    {
        $query="select * from education";
    }
   
	$res=mysqli_query($connection,$query);
	$count=mysqli_num_rows($res);
	$nopage= ceil($count/8);
	$rem=$count%8;
    if($count>0)
    {    
	    while($row=mysqli_fetch_assoc($res))
	        {
		        $e_img[$i]= $row["e_img"];
		        $e_id[$i]=$row["e_id"];
		        $e_name[$i]=$row["e_name"];
		        $e_add[$i]=$row["e_add"];
		        $e_phone[$i]=$row["e_contact"];
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
		    echo "<a href='edudisp.php?id={$e_id[$j]}'>
		        <div class=' col-sm-12 ele' >  
		            <div class='col-sm-2 catimgsize '> 						  
				        <img src='images/{$e_img[$j]}' class='catimg'>
			        </div>
 
 			        <div class=' col-sm-15 main '>                                      
				        <div >                                       						    
					        <h1 class='hdesp'>{$e_name[$j]}</h1>
					        <h3 class='desp'>
						    <i class='material-icons icn'>near_me</i>{$e_add[$j]}</h3>
					        <h3 class='desp'><i><i class='material-icons'>call</i>{$e_phone[$j]}</i></h3>
				        </div>
			        </div>                                                           
		        </div>   				 
            </a>";
           
        }
    }
?>

