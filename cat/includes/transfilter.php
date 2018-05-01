<form action=transcat.php method="get">
	<div class="col-sm-2  fil">                              <!--filter-->
		<div class="container " > 
			<div class="panel-group filter">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a  data-toggle="collapse" href="#collapse1"><span>Search using filters</span></a>
						</h4>
					</div>
					<div id="collapse1" class="panel-collapse collapse">
						<ul class="list-group">
		
							<li>                                             <!--sort using distance-->
								<div class="panel-group">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" href="#collapse12">Price</a>
											</h4>
										</div>
										<div id="collapse12" class="panel-collapse collapse">
											<ul class="list-group">
												<li class="list-group-item"><input type="checkbox" name="price" value="a" onchange="this.form.submit()" readonly value="on">less than 100</li>
												<li class="list-group-item"><input type="checkbox" name="price" value="b" onchange="this.form.submit()" readonly value="on">100-250</li>
												<li class="list-group-item"><input type="checkbox" name="price" value="c" onchange="this.form.submit()" readonly value="on">250-500</li>
												<li class="list-group-item"><input type="checkbox" name="price" value="d" onchange="this.form.submit()" readonly value="on">above 500</li>
											</ul>											  
										</div>
									</div>
								</div>
							</li>                                                 <!--sort using distance ends-->
												
            	<li>                                                    <!--sort using reviews-->													
								<div class="panel-group">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" href="#collapse13">Timing</a>
											</h4>
										</div>
										<div id="collapse13" class="panel-collapse collapse">
											<ul class="list-group">
												<li class="list-group-item"><input type="checkbox" name="time" value="a"  onchange="this.form.submit()" readonly value="on">00:00-6:00</li>
												<li class="list-group-item"><input type="checkbox" name="time" value="b"  onchange="this.form.submit()" readonly value="on">6:00-12:00</li>
												<li class="list-group-item"><input type="checkbox" name="time" value="c" onchange="this.form.submit()" readonly value="on">12:00-18:00</li>
												<li class="list-group-item"><input type="checkbox" name="time" value="d" onchange="this.form.submit()" readonly value="on">18:00-00:00</li>
											</ul>											  
										</div>
									</div>
								</div>
							</li>                                      <!--sort using reviews ends-->

              <li>                                      <!--sort using category-->
								<div class="panel-group">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" href="#collapse14">Destination</a>
											</h4>
										</div>
										<div id="collapse14" class="panel-collapse collapse">
											<ul class="list-group">
                        <?php 
                          $query = "SELECT trans_dst FROM transport group by trans_dst order by trans_dst";
                          $res=mysqli_query($connection,$query);
                          while($row=mysqli_fetch_assoc($res))
                            {
                              $trans_dst=$row['trans_dst'];
                              echo "<li class='list-group-item'><input type='checkbox' name='destination' value='{$trans_dst}'  onchange='this.form.submit()' readonly value='on'>{$trans_dst}</li>";
                            }
                        ?>
											</ul>											 
										</div>
									</div>
								</div>
							</li>        

						</ul>								  
					</div>
				</div>
			</div>
		</div>
	</div> 
</form>