<form action=healthcat.php method="get">
	<div class="col-sm-2  fil">                              <!--filter-->
		<div class="container " > 
			<div class="panel-group filter style="width:240px";>
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
												<a data-toggle="collapse" href="#collapse12">Distance</a>
											</h4>
										</div>
										<div id="collapse12" class="panel-collapse collapse">
											<ul class="list-group">
												<li class="list-group-item"><input type="checkbox" name="dist" value="a" onchange="this.form.submit()" readonly value="on">Within 5kms</li>
												<li class="list-group-item"><input type="checkbox" name="dist" value="b" onchange="this.form.submit()" readonly value="on">5-10kms</li>
												<li class="list-group-item"><input type="checkbox" name="dist" value="c" onchange="this.form.submit()" readonly value="on">10-15kms</li>
												<li class="list-group-item"><input type="checkbox" name="dist" value="d" onchange="this.form.submit()" readonly value="on">Above 15kms</li>
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
												<a data-toggle="collapse" href="#collapse13">Reviews</a>
											</h4>
										</div>
										<div id="collapse13" class="panel-collapse collapse">
											<ul class="list-group">
												<li class="list-group-item"><input type="checkbox" name="rate" value="a"  onchange="this.form.submit()" readonly value="on">4+</li>
												<li class="list-group-item"><input type="checkbox" name="rate" value="b"  onchange="this.form.submit()" readonly value="on">3+</li>
												<li class="list-group-item"><input type="checkbox" name="rate" value="c" onchange="this.form.submit()" readonly value="on">2+</li>
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
												<a data-toggle="collapse" href="#collapse14">Departments</a>
											</h4>
										</div>
										<div id="collapse14" class="panel-collapse collapse">
											<ul class="list-group">
                        <?php 
                          $query = "SELECT dept_name FROM departments  group by dept_name order by dept_name";
                          $res=mysqli_query($connection,$query);
                          while($row=mysqli_fetch_assoc($res))
                            {
                              $dept_name=$row['dept_name'];
                              echo "<li class='list-group-item'><input type='checkbox' name='deptname' value='{$dept_name}'  onchange='this.form.submit()' readonly value='on'>{$dept_name}</li>";
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