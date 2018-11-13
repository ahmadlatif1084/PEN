@extends('frontend.layout.frontend')

@section('content')
            
  <div id="wrapper" class="container">
  
			  <figure class="page-head-image">
			    <img src="http://loremflickr.com/300/300/person" />
			  </figure>
  


 <form id="form-work" class="" name="form-work" action="#">
      <fieldset>


	   	      <div class="form-group col-md-12">
		             <div class="col-md-12">
		             <h2 class="heading-main">Training Need Assessment</h2>

		          	 </div>

	          </div>




			   <div class="form-group col-md-12">
					<div class="col-md-4">
						<label class="control-label" for="district">School Name</label>
					    <input name="" class="form-control" type="text">
					</div>
					<div class="col-md-4">
						<label class="control-label" for="district">Head Teacher Name</label>
					    <input name="" class="form-control" type="text">
					</div>
					<div class="col-md-4">
						<label class="control-label" for="district">Session 20</label>
					    <input name="" class="form-control" type="text">
					</div>	
			   </div>




			    <ul class="nav nav-pills nav-custom col-md-12">
			    <li class="active"><a data-toggle="pill" href="#home">Lesson Content Planning</a></li>
			    <li><a data-toggle="pill" href="#menu1">Lesson Content Delivery</a></li>
			    <li><a data-toggle="pill" href="#menu2">Lesson Content Review</a></li>
			    <li><a data-toggle="pill" href="#menu3">Lesson Content Assessment</a></li>
			    <li><a data-toggle="pill" href="#menu4">Class Management</a></li>
			    <li><a data-toggle="pill" href="#menu5">Working Relationships</a></li>
			    <li><a data-toggle="pill" href="#menu6">Documentation</a></li>
			    <li><a data-toggle="pill" href="#menu7">Professional Knowledge & Personal Traits</a></li>
			    </ul>	


		<?php 
		$mainarray=array('Lesson Content Planning','Lesson Content Delivery','Lesson Content Review','Lesson Content
		Assessment','Class Management','Working Relationships','Documentation','Professional Knowledge
		& Personal Traits');
		$planningsubarray=array('Plans lesson with the help of resource guide','Sets SMART objectives and SLOs of the lesson','Follows the syllabus breakup','Outlines the activities for class work and home work');
		$Deliverysubarray=array('Mentions key concepts constantly on the board.','Makes effective use of black board in neat & clean writing','Speaks in a clear voice and has comprehensible and lucid speech.','Relates to and reinforce the concepts with creative examples');
		$Review = array('Keeps the students engage through active discussion','Encourages individuals and group activities to reinforce lesson concepts','Checks for classroom participation through questions & answers','Calls on the students by their names');
		$Assessment=array('Asks effective questions from the students relevant to the topics.','Provides an equal opportunity to students to answer in the class','Encourages students response through verbal and on spots quizzes','Designs written assessment & tests up to the mark');
		$Management=array('Prepares and displays creative visual aids in the class room.','Keeps students busy, attentive, neat and clean and disciplined','Uses effective non-verbal communication','Organizes classroom well (light, use of space, arrangement of furniture, cleanliness');
		$Relationships=array('Shows co-operation towards peers & colleagues','Keeps positive relation with students','Interacts regularly with parents and keeps updating them about child progress','Behaves positively with PEN & community members');
		$Documentation=array('Maintains daily diary as per PEN pattern','Fills all columns of the attendance register','Keeps the record of all class tests.','Designs the papers according to the SLOs and checks them on standardized patterns');
		$Traits=array('Takes keen interest in acquiring professional knowledge and latest teaching techniques','Able to resolve students learning problems/issues','Shows regularity and punctuality','Participates in PEN training programs');
		
		?>

	<div class="tab-content col-md-12">
		
		<div id="home" class="tab-pane fade in active">	
			<div class="form-group col-md-12">
			            <div class="col-md-12">
			          			   <h2><?php echo $mainarray['0']; ?></h2> 
							       <h3>No of Observations</h3>
							      						       			
							       			 <div class="form-group">

									              <div class="col-md-12">
									             <label class="control-label" for="district">Observations</label>
									             <select name="PlanningObservation" id="PlanningObservation" class="form-control">
									              <?php for($x=0;$x<3;$x++) { ?>
									             <option value="<?php echo $planningsubarray[$x];?>"><?php echo $planningsubarray[$x];?></option>
									             <?php } ?>
									            </select>
									            </div>

									             <div class="col-md-6">
									              <label class="control-label" for="district">Teacher Name</label>
									              <input name="PlanningTeacherName" id="PlanningTeacherName" class="form-control" type="text" >
									            </div>		

									            <div class="col-md-6">
									              <label class="control-label" for="district">Scale</label>
									              <select name="PlanningObservation1" id="PlanningObservation1" class="form-control">
									             <option value="1">1</option>
									             <option value="2">2</option>
									             <option value="3">3</option>
									             <option value="4">4</option>
									             <option value="5">5</option>
									              </select>
									            </div>
									           

									              <div class="col-md-12 add-button">
									             <button class="btn btn-primary btn-lg" id="planning1">Add</button>
									            </div>

									             <div class="col-md-12">
									              <table id="planning">
									              <tr>
									              	<th>Observations</th>
									              	<th>Teacher Name</th>
									                <th>Scale</th>
									                 <th>Actions</th>
									              </tr>
									            </table>
									                            
									            </div> 




									          </div>

							       		
			            </div>
			</div> 
		</div>	

		<div id="menu1" class="tab-pane fade">	
			<div class="form-group col-md-12">
			            <div class="col-md-12">
			          			   <h2><?php echo $mainarray['1']; ?></h2> 
							       <h3>No of Observations</h3>
							     
							       			 <div class="form-group">

							       			 	 <div class="col-md-12">
									             <label class="control-label" for="district">Observations</label>
									             <select name="DeliveryObservation" id="DeliveryObservation" class="form-control">
									              <?php for($x=0;$x<3;$x++) { ?>
									             <option value="<?php echo $Deliverysubarray[$x];?>"><?php echo $Deliverysubarray[$x];?></option>
									             <?php } ?>
									            </select>
									            </div>

									             <div class="col-md-6">
									              <label class="control-label" for="district">Teacher Name</label>
									              <input name="DeliveryTeacherName" id="DeliveryTeacherName" class="form-control" type="text">
									            </div>		


									            <div class="col-md-6">
									              <label class="control-label" for="district">Scale</label>
									              <select name="DeliveryObservation1" id="DeliveryObservation1" class="form-control">
									             <option value="1">1</option>
									             <option value="2">2</option>
									             <option value="3">3</option>
									             <option value="4">4</option>
									             <option value="5">5</option>
									         </select>
									            </div>
									           
									              <div class="col-md-12 add-button">
									             <button class="btn btn-primary btn-lg" id="delivery1">Add</button>
									            </div>

									             <div class="col-md-12">
									              <table id="delivery">
									              <tr>
									              	<th>Observation</th>
									              	<th>Teacher Name</th>
									                <th>Scale</th>
									                 <th>Actions</th>
									              </tr>
									            </table>                
									            </div> 




									          </div>

							     
			            </div>
			</div>     
		</div>	

		<div id="menu2" class="tab-pane fade">	
			<div class="form-group col-md-12">
			            <div class="col-md-12">
			          			   <h2><?php echo $mainarray['2']; ?></h2> 
							       <h3>No of Observations</h3>
							       			 <div class="form-group">


							       			 	 <div class="col-md-12">
									             <label class="control-label" for="district">Observations</label>
									             <select name="ReviewObservation" id="ReviewObservation" class="form-control">
									              <?php for($x=0;$x<3;$x++) { ?>
									             <option value="<?php echo $Review[$x];?>"><?php echo $Review[$x];?></option>
									             <?php } ?>
									            </select>
									            </div>

									             <div class="col-md-6">
									              <label class="control-label" for="district">Teacher Name</label>
									              <input name="ReviewTeacherName" id="ReviewTeacherName" class="form-control" type="text">
									            </div>		

									           <div class="col-md-6">									           
									           <label class="control-label" for="district">Scale</label>
									              <select name="ReviewObservation1" id="ReviewObservation1" class="form-control">
									             <option value="1">1</option>
									             <option value="2">2</option>
									             <option value="3">3</option>
									             <option value="4">4</option>
									             <option value="5">5</option>
									         </select>  
									            </div>
									    
									              <div class="col-md-12 add-button">
									             <button class="btn btn-primary btn-lg" id="review1">Add</button>
									            </div>

									             <div class="col-md-12">
									              <table id="review">
									              <tr>
									              	<th>Observation</th>
									              	<th>Teacher Name</th>
									                 <th>Scale</th>
									                 <th>Actions</th>
									              </tr>
									            </table>                
									            </div> 


									          </div>
	
			            </div>
			</div>     
		</div>	

		<div id="menu3" class="tab-pane fade">	
			<div class="form-group col-md-12">
			            <div class="col-md-12">
			          			   <h2><?php echo $mainarray['3']; ?></h2> 
							       <h3>No of Observations</h3>
							       			 <div class="form-group">

							       			 	<div class="col-md-12">
									             <label class="control-label" for="district">Observations</label>
									             <select name="AssessmentObservation" id="AssessmentObservation" class="form-control">
									              <?php for($x=0;$x<3;$x++) { ?>
									             <option value="<?php echo $Assessment[$x];?>"><?php echo $Assessment[$x];?></option>
									             <?php } ?>
									            </select>
									            </div>

									             <div class="col-md-6">
									              <label class="control-label" for="district">Teacher Name</label>
									              <input name="AssessmentTeacherName" id="AssessmentTeacherName" class="form-control" type="text">
									            </div>		
									        

									             <div class="col-md-6">
									               <label class="control-label" for="district">Scale</label>
									              <select name="AssessmentObservation1" id="AssessmentObservation1" class="form-control">
									             <option value="1">1</option>
									             <option value="2">2</option>
									             <option value="3">3</option>
									             <option value="4">4</option>
									             <option value="5">5</option>
									         </select>  
									            </div>
									          

									              <div class="col-md-12 add-button">
									             <button class="btn btn-primary btn-lg" id="add-assessment">Add</button>
									            </div>

									             <div class="col-md-12">
									              <table id="assessment">
									              <tr>
									              	<th>Observation</th>
									              	<th>Teacher Name</th>
									                <th>Scale</th>
									                 <th>Actions</th>
									              </tr>
									            </table>                
									            </div> 





									          </div>

			            </div>
			</div>     
		</div>	


		<div id="menu4" class="tab-pane fade">	
			<div class="form-group col-md-12">
			            <div class="col-md-12">
			          			   <h2><?php echo $mainarray['4']; ?></h2> 
							       <h3>No of Observations</h3>
							       			 <div class="form-group">

							       			 	<div class="col-md-12">
									             <label class="control-label" for="district">Observations</label>
									             <select name="ManagementObservation" id="ManagementObservation" class="form-control">
									              <?php for($x=0;$x<3;$x++) { ?>
									             <option value="<?php echo $Management[$x];?>"><?php echo $Management[$x];?></option>
									             <?php } ?>
									            </select>
									            </div>

									             <div class="col-md-6">
									              <label class="control-label" for="district">Teacher Name</label>
									              <input name="ManagementTeacherName" id="ManagementTeacherName" class="form-control" type="text">
									            </div>		

									            <div class="col-md-6">
									         
									           <label class="control-label" for="district">Scale</label>
									              <select name="ManagementObservation1" id="ManagementObservation1" class="form-control">
									             <option value="1">1</option>
									             <option value="2">2</option>
									             <option value="3">3</option>
									             <option value="4">4</option>
									             <option value="5">5</option>
									         </select>  
									            </div>
									        

									              <div class="col-md-12 add-button">
									             <button class="btn btn-primary btn-lg" id="add-management">Add</button>
									            </div>

									             <div class="col-md-12">
									              <table id="management">
									              <tr>
									              	<th>Observation</th>
									              	<th>Teacher Name</th>
									                <th>Scale</th>
									                 <th>Actions</th>
									              </tr>
									            </table>                
									            </div> 

									          </div>	
			            </div>
			</div>     
		</div>	


 		<div id="menu5" class="tab-pane fade">	
			<div class="form-group col-md-12">
			            <div class="col-md-12">
			          			   <h2><?php echo $mainarray['5']; ?></h2> 
							       <h3>No of Observations</h3>
							       			 <div class="form-group">

							       			 	<div class="col-md-12">
									             <label class="control-label" for="district">Observations</label>
									             <select name="WorkingObservation" id="WorkingObservation" class="form-control">
									              <?php for($x=0;$x<3;$x++) { ?>
									             <option value="<?php echo $Relationships[$x];?>"><?php echo $Relationships[$x];?></option>
									             <?php } ?>
									            </select>
									            </div>
									             <div class="col-md-6">
									              <label class="control-label" for="district">Teacher Name</label>
									              <input name="WorkingTeacherName" id="WorkingTeacherName" class="form-control" type="text">
									            </div>		

									            <div class="col-md-6">
									               <label class="control-label" for="district">Scale</label>
									              <select name="WorkingObservation1" id="WorkingObservation1" class="form-control">
									             <option value="1">1</option>
									             <option value="2">2</option>
									             <option value="3">3</option>
									             <option value="4">4</option>
									             <option value="5">5</option>
									         </select>  
									            </div>
									           

									             <div class="col-md-12 add-button">
									             <button class="btn btn-primary btn-lg" id="add-working">Add</button>
									            </div>

									             <div class="col-md-12">
									              <table id="working">
									              <tr>
									              	<th>Observation</th>
									              	<th>Teacher Name</th>
									                <th>Scale</th>
									                 <th>Actions</th>
									              </tr>
									            </table>                
									            </div> 

									          </div>
	
			            </div>
			</div>     
		</div>	

		<div id="menu6" class="tab-pane fade">	
			<div class="form-group col-md-12">
			            <div class="col-md-12">
			          			   <h2><?php echo $mainarray['6']; ?></h2> 
							       <h3>No of Observations</h3>
							      
							       			 <div class="form-group">

							       			 	 <div class="col-md-12">
									             <label class="control-label" for="district">Observations</label>
									             <select name="DocumentationObservation" id="DocumentationObservation" class="form-control">
									              <?php for($x=0;$x<3;$x++) { ?>
									             <option value="<?php echo $Documentation[$x];?>"><?php echo $Documentation[$x];?></option>
									             <?php } ?>
									            </select>
									            </div>
									             <div class="col-md-6">
									              <label class="control-label" for="district">Teacher Name</label>
									              <input name="DocumentationTeacherName" id="DocumentationTeacherName" class="form-control" type="text">
									            </div>		

									            <div class="col-md-6">
									           <label class="control-label" for="district">Scale</label>
									              <select name="DocumentationObservation1" id="DocumentationObservation1" class="form-control">
									             <option value="1">1</option>
									             <option value="2">2</option>
									             <option value="3">3</option>
									             <option value="4">4</option>
									             <option value="5">5</option>
									         </select>  

									            </div>
									           

									             <div class="col-md-12 add-button">
									             <button class="btn btn-primary btn-lg" id="add-documentation">Add</button>
									            </div>

									              <div class="col-md-12">
									              <table id="documentation">
									              <tr>
									              	<th>Observation</th>
									              	<th>Teacher Name</th>
									                <th>Scale</th>
									                 <th>Actions</th>
									              </tr>
									            </table>                
									            </div> 

									          </div>
	
			            </div>
			</div>     
		</div>	

		<div id="menu7" class="tab-pane fade">	
			<div class="form-group col-md-12">
			            <div class="col-md-12">
			          			   <h2><?php echo $mainarray['7']; ?></h2> 
							       <h3>No of Observations</h3>
							      
							       			 <div class="form-group">

							       			 	 <div class="col-md-12">
									             <label class="control-label" for="district">Observations</label>
									             <select name="ProfessionalObservation" id="ProfessionalObservation" class="form-control">
									              <?php for($x=0;$x<3;$x++) { ?>
									             <option value="<?php echo $Traits[$x];?>"><?php echo $Traits[$x];?></option>
									             <?php } ?>
									            </select>
									            </div>
									            <div class="col-md-6">
									              <label class="control-label" for="district">Teacher Name</label>
									              <input name="ProfessionalTeacherName" id="ProfessionalTeacherName" class="form-control" type="text">
									            </div>	
									            <div class="col-md-6">
									               <label class="control-label" for="district">Scale</label>
									              <select name="ProfessionalObservation1" id="ProfessionalObservation1" class="form-control">
									             <option value="1">1</option>
									             <option value="2">2</option>
									             <option value="3">3</option>
									             <option value="4">4</option>
									             <option value="5">5</option>
									         </select>  

									            </div>
									            
									          </div>

									          <div class="col-md-12 add-button">
									             <button class="btn btn-primary btn-lg" id="add-professional">Add</button>
									            </div>


									            <div class="col-md-12">
									              <table id="professional">
									              <tr>
									              	<th>Observation</th>
									              	<th>Teacher Name</th>
									                <th>Scale</th>
									                 <th>Actions</th>
									              </tr>
									            </table>                
									            </div> 

			            </div>
			</div>     
		</div>

	</div>

          <div class="form-group col-md-12">
	            <div class="col-md-12">
	              <button type="button" class="btn btn-primary btn-lg btn-block info">Send</button>
	            </div>
          </div>     

      </fieldset> 
    </form>
</div>

 @endsection