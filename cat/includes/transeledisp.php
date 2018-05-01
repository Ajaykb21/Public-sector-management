<?php 
$page=0;
$dist=0;
$rate=0;
$dept_name="";
	if(isset($_GET['page']))
	{
		$page=(int)$_GET['page'];
    }
    else if(isset($_GET['price']))
    {
        $price=$_GET['price'];
    }
    else if(isset($_GET['time']))
    { 
        $time=$_GET['time'];
    }
    else if(isset($_GET['destination']))
    {
        $destination=$_GET['destination'];
       
    }

	$ele=$page*8;
	$tr_img=array();
	$tr_name=array();
	$tr_add=array();
	$tr_phone=array();
    $i=0;
    
    if($price)
    {    
        switch($price)
            {
                case 'a':$query="SELECT * FROM transports t,bus_transports b WHERE t.trans_id=b.trans_id and b.b_price<=100 UNION SELECT * FROM transports t,rail_transports r WHERE t.trans_id=r.trans_id and r.r_price<=100";
                        break;
                case 'b':$query="SELECT * FROM transports t,bus_transports b WHERE t.trans_id=b.trans_id and b.b_price BETWEEN  100 AND 250 UNION SELECT * FROM transports t,rail_transports r WHERE t.trans_id=r.trans_id and r.r_price BETWEEN 100 AND 250";
                        break;
                case 'c':$query="SELECT * FROM transports t,bus_transports b WHERE t.trans_id=b.trans_id and b.b_price BETWEEN  250 AND 500 UNION SELECT * FROM transports t,rail_transports r WHERE t.trans_id=r.trans_id and r.r_price BETWEEN 250 AND 500";
                        break;
                case 'd':$query="SELECT * FROM transports t,bus_transports b WHERE t.trans_id=b.trans_id and b.b_price>=500 UNION SELECT * FROM transports t,rail_transports r WHERE t.trans_id=r.trans_id and r.r_price>=500";
                        break;
            }
    }
    
      
    else if($time)
    {   
        switch($time)
            {
                case 'a':$query="SELECT * FROM transports t,bus_transports b WHERE t.trans_id=b.trans_id and b.b_time between 00:00:01 and 06:00:00 UNION SELECT * FROM transports t,rail_transports r WHERE t.trans_id=r.trans_id and r.r_time BETWEEN 00:00:01 and 06:00:00";
                        break;
                case 'b':$query="SELECT * FROM transports t,bus_transports b WHERE t.trans_id=b.trans_id and b.b_time between 06:00:01 and 12:00:00 UNION SELECT * FROM transports t,rail_transports r WHERE t.trans_id=r.trans_id and r.r_time BETWEEN 06:00:01 and 12:00:00";
                        break;
                case 'c':$query="SELECT * FROM transports t,bus_transports b WHERE t.trans_id=b.trans_id and b.b_time between 12:00:01 and 18:00:00 UNION SELECT * FROM transports t,rail_transports r WHERE t.trans_id=r.trans_id and r.r_time BETWEEN 12:00:01 and 18:00:00";
                        break;  
                case 'd':$query="SELECT * FROM transports t,bus_transports b WHERE t.trans_id=b.trans_id and b.b_time between 18:00:01 and 00:00:00 UNION SELECT * FROM transports t,rail_transports r WHERE t.trans_id=r.trans_id and r.r_time BETWEEN 18:00:01 and 00:00:00";
                        break;       
            }
    }
    

    else if($destination)
    {
        $query = "select * from transports where trans_dst='$destination' group by trans_id";
    }
    else
    {
        $query="select * from transports,bus_transports UNION SELECT * FROM transports,rail_transports;
    }
   
	$res=mysqli_query($connection,$query);
	$count=mysqli_num_rows($res);
	$nopage= ceil($count/8);
	$rem=$count%8;
    if($count>0)
    {    
	    while($row=mysqli_fetch_assoc($res))
	        {
		        $tr_img[$i]= $row["trans_img"];
		        $tr_id[$i]=$row["trans_id"];
		        $tr_name[$i]=$row["trans_name"];
		        $tr_add[$i]=$row["trans_add"];
		        $tr_phone[$i]=$row["trans_contact"];
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
		    echo "<a href='transdisp.php?id={$tr_id[$j]}'>
		        <div class=' col-sm-12 ele' >  
		            <div class='col-sm-2 catimgsize '> 						  
				        <img src='images/{$tr_img[$j]}' class='catimg'>
			        </div>
 
 			        <div class=' col-sm-15 main '>                                      
				        <div >                                       						    
					        <h1 class='hdesp'>{$tr_name[$j]}</h1>
					        <h3 class='desp'>
						    <i class='material-icons icn'>near_me</i>{$tr_add[$j]}</h3>
					        <h3 class='desp'><i><i class='material-icons'>call</i>{$tr_phone[$j]}</i></h3>
				        </div>
			        </div>                                                           
		        </div>   				 
            </a>";
           
        }
    }
?>

