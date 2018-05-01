
<style>


</style>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<div class="table1-responsive">
  <table class="table1 table1-bordered">
    <tbody>  

      <?php 
      $pimg=array();
      $pname=array();
      $pdes=array();
      $k=0;
      $pquery="SELECT * FROM scrollposts";
      $pres=mysqli_query($connection,$pquery);
      $pcount=mysqli_num_rows($pres);
      while($row=mysqli_fetch_assoc($pres))
      {
         $pimg[$k]=$row['post_image'];
         $pname[$k]=$row['post_name'];
         $pdes[$k]=$row['post_desc'];
         $k=$k+1;

      }
      
      for($k=0;$k<1000;$k++)
      {   $index=$k%$pcount;
      echo "<tr>
              <div class='cardin'>
                <img src='images/{$pimg[$index]}' class='eveimg'>
                <div class='container'>				  
                  <h4><b>{$pname[$index]}</b></h4> 
                  <p>{$pdes[$index]}</p> 
                </div>	
              </div>		
            </tr>";
      }
     ?>

    </tbody>
  </table>
</div>

<script type="text/javascript">
  var $el = $(".table1-responsive");

  function anim() {
    var st = $el.scrollTop();
    var sb = $el.prop("scrollHeight");
    $el.animate({scrollTop: sb}, 30000);
  }

  function stop(){
    $el.stop();
  }
  anim();
  $el.hover(stop, anim);
</script>

