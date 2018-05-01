<?php 
$page=0;
$dist=0;
$rate=0;
$price=0;
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
    else if(isset($_GET['price']))
    {
        $price=$_GET['price'];
    }

	$ele=$page*8;
	$f_img=array();
	$f_name=array();
	$f_add=array();
	$f_phone=array();
    $i=0;
    
    if($dist)
    {    
        switch($dist)
            {
                case 'a':$query="SELECT * FROM foods WHERE f_dist BETWEEN 0 AND 5";
                        break;
                case 'b':$query="SELECT * FROM foods WHERE f_dist BETWEEN 6 AND 10";
                        break;
                case 'c':$query="SELECT * FROM foods WHERE f_dist BETWEEN 11 AND 15";
                        break;
                case 'd':$query="SELECT * FROM foods WHERE f_dist > 15";
                        break;
            }
    }
    
      
    else if($rate)
    {   
        switch($rate)
            {
                case 'a':$query="SELECT * FROM foods WHERE f_rating>=4";
                        break;
                case 'b':$query="SELECT * FROM foods WHERE f_rating>=3";
                        break;
                case 'c':$query="SELECT * FROM foods WHERE f_rating>=2";
                        break;       
            }
    }
    

    else if($price)
    {
        switch($price)
        {
            case 'a':$query="SELECT * FROM foods,boardings b WHERE b.bo_price<=1000";
                    break;
            case 'b':$query="SELECT * FROM foods,boardings b WHERE b.bo_price BETWEEN 1001 and 2000";
                    break;
            case 'c':$query="SELECT * FROM foods,boardings b WHERE b.bo_price BETWEEN 2001 and 3000";
                    break;  
            case 'd':$query="SELECT * FROM foods,boardings b WHERE b.bo_price>3000";
                    break;     
        }
       
    }
    else
    {
        $query="select * from foods";
    }
   
	$res=mysqli_query($connection,$query);
	$count=mysqli_num_rows($res);
	$nopage= ceil($count/8);
	$rem=$count%8;
    if($count>0)
    {    
	    while($row=mysqli_fetch_assoc($res))
	        {
		        $f_img[$i]= $row["f_img"];
		        $f_id[$i]=$row["f_id"];
		        $f_name[$i]=$row["f_name"];
		        $f_add[$i]=$row["f_add"];
		        $f_phone[$i]=$row["f_contact"];
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
		    echo "<a href='fooddisp.php?id={$f_id[$j]}'>
		        <div class=' col-sm-12 ele' >  
		            <div class='col-sm-2 catimgsize '> 						  
				        <img src='images/{$f_img[$j]}' class='catimg'>
			        </div>
 
 			        <div class=' col-sm-15 main '>                                      
				        <div >                                       						    
					        <h1 class='hdesp'>{$f_name[$j]}</h1>
					        <h3 class='desp'>
						    <i class='material-icons icn'>near_me</i>{$f_add[$j]}</h3>
					        <h3 class='desp'><i><i class='material-icons'>call</i>{$f_phone[$j]}</i></h3>
				        </div>
			        </div>                                                           
		        </div>   				 
            </a>";
           
        }
    }
?>

