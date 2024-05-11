

<!DOCTYPE html>
<html>
<?php include ('header.php');  ?>

  <body class="bg-white" id="top">
  


 
  <section class="section section-shaped section-lg">
    <div class="shape shape-style-1 shape-primary">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
<!-- ======================================================================================================================================== -->

<div class="container ">
    
    	 <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <span class="badge badge-danger badge-pill mb-3">Prediction</span>
          </div>
        </div>
		
          <div class="row row-content">
            <div class="col-md-12 mb-3">

				<div class="card text-white bg-gradient-success mb-3">
				  <div class="card-header">
				  <span class=" text-success display-4" > Crop Prediction  </span>					
				  </div>

				  <div class="card-body text-dark">
				     <form role="form" action="#" method="post" >     
					 
				<table class="table table-striped table-hover table-bordered bg-gradient-white text-center display" id="myTable">

    <thead>
					<tr class="font-weight-bold text-default">
					<th><center> State</center></th>
					<th><center>District</center></th>
					<th><center>Season</center></th>
					<th><center>Prediction</center></th>
					
        </tr>
    </thead>
 <tbody>
                                 <tr class="text-center">

                                    <td>
                                    	<div class="form-group">
										<select  name="state" class="form-control" required>
											<option value="Kerala">Kerala</option>
										</select>
										</div>
                                    </td>

									<td>
										<div class="form-group ">
											<select id="district" name="district" class="form-control" required>
										  <option value="">Select a district</option>
										  <option value="ALAPPUZHA">ALAPPUZHA</option>
										  <option value="ERNAKULAM">ERNAKULAM</option>
										  <option value="IDUKKI">IDUKKI</option>
										  <option value="KANNUR">KANNUR</option>
										  <option value="KASARAGOD">KASARAGOD</option>
										  <option value="KOLLAM">KOLLAM</option>
										  <option value="KOTTAYAM">KOTTAYAM</option>
										  <option value="KOZHIKODE">KOZHIKODE</option>
										  <option value="MALAPPURAM">MALAPPURAM</option>
										  <option value="PALAKKAD">PALAKKAD</option>
										  <option value="PATHANAMTHITTA">PATHANAMTHITTA</option>
										  <option value="THIRUVANANTHAPURAM">THIRUVANANTHAPURAM</option>
										  <option value="THRISSUR">THRISSUR</option>
										  <option value="WAYANAD">WAYANAD</option>

											</select>
										</div>
                                    </td>
									
									<td>
										<div class="form-group ">
									
													<select name="Season" class="form-control">
													<option value="">Select Season ...</option>
													<option name="Kharif" value="Kharif">Kharif</option>
													<option name="Whole Year" value="Whole Year">Whole Year</option>
													<option name="Autumn" value="Autumn">Autumn</option>
													<option name="Rabi" value="Rabi">Rabi</option>
													<option name="Summer" value="Summer">Summer</option>
													<option name="Winter" value="Winter">Winter</option>
												
													</select>
										</div>

									</td>

									<td>
                                    <center>
										<div class="form-group ">
											<button type="submit" name="Crop_Predict" class="btn btn-success btn-submit">Predict</button>
										</div>
                                    
                                    </center>
                                    </td>

                                </tr>
                            </tbody>
	</table>
	</form>
</div>
</div>



<div class="card text-white bg-gradient-success mb-3">
				  <div class="card-header">
				  <span class=" text-success display-4" > Result  </span>					
				  </div>

					<h4>
					<?php 
					if(isset($_POST['Crop_Predict'])){
					$state=trim($_POST['state']);
					$district=trim($_POST['district']);
					$season=trim($_POST['Season']);


					echo "Crops grown in ".$district." during the ".$season." season are :- ";

					$JsonState=json_encode($state);
					$JsonDistrict=json_encode($district); 
					$JsonSeason=json_encode($season);
					
					$command = escapeshellcmd("python ML/crop_prediction/ZDecision_Tree_Model_Call.py $JsonState $JsonDistrict $JsonSeason");
                    $output = passthru($command);
					echo $output;					
					}
                    ?>
					</h4>
            </div>
 
	
	
            </div>
          </div>  
       </div>
		 
</section>

<script src="https://cdn.staticfile.org/jquery/3.6.3/jquery.min.js"></script>
	
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

	
    <script src="https://cdn.staticfile.org/markdown-it/13.0.1/markdown-it.min.js"></script>
	
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
	integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 
 	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


	<script src="https://use.fontawesome.com/ee1c3da296.js"></script>

</body>
</html>

