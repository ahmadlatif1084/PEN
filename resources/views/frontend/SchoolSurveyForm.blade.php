@extends('frontend.layout.frontend')

@section('content')
            <div id="wrapper" class="container">
  
  <figure class="page-head-image">
    <img src="http://loremflickr.com/300/300/person" />
  </figure>
  
 

    <form id="form-work" class="" name="form-work" action="#">
      
      <fieldset>

          <ul class="nav nav-pills nav-custom col-md-12">
          <li class="active"><a data-toggle="pill" href="#home">School Basic Details</a></li>
          <li><a data-toggle="pill" href="#menu1">School Information</a></li>
          <li><a data-toggle="pill" href="#menu2">School Furniture</a></li>
          <li><a data-toggle="pill" href="#menu3">School Academic</a></li>
          </ul> 

    <div class="tab-content col-md-12">
        <div id="home" class="tab-pane fade in active"> 
         <div class="form-group col-md-12">
            <div class="col-md-12">
            <h2 class="heading-main">School Details</h2>
           </div>

      
          <?php
             $schoolbasicinfo= array('School Name','School Address','Distance from Head Office','Distance from Cluster Office','Tel','EMIS No','Town','Name of EDO','Tel No of EDO','Name of DEO','Tel No of DEO','Name of Deputy DEO','Tel No of Deputy DEO','Name of AEO','Tel No of AEO','Name of DMO','Tel No of DMO','Name of DSD','Tel No of DSD');

          	$index=0; 
                for($i=0;$i<19;$i++){
                  ?>
              
                  <div class="form-group">
                      <div class="col-md-6">
                        <label class="control-label" for="district"><?php echo $schoolbasicinfo[$index] ?></label>
                        <input name="<?php echo $schoolbasicinfo[$index] ?>" class="form-control" type="text">
                      </div>
                    </div>

             <?php
                $index++;
                    
                    } 

                   ?>        
        </div>
      </div>




      <div id="menu1" class="tab-pane fade"> 
          <div class="form-group col-md-12">
                    <div class="col-md-12">
                    <h2 class="heading-main">School Information</h2>
                   </div>
                    <div class="form-group">
                    <div class="col-md-6">
                    <label class="control-label custom-checkbox-label" for="district">Primary</label>
                      <input name="" class="form-control custom-checkbox-input" type="checkbox">
                    </div>
                      <div class="col-md-6">
                    <label class="control-label custom-checkbox-label" for="district">Middle</label>
                      <input name="" class="form-control custom-checkbox-input" type="checkbox">
                    </div>
                      <div class="col-md-6">
                    <label class="control-label custom-checkbox-label" for="district">Elementary</label>
                      <input name="" class="form-control custom-checkbox-input" type="checkbox">
                    </div>
                      <div class="col-md-6">
                    <label class="control-label custom-checkbox-label" for="district">High School</label>
                      <input name="" class="form-control custom-checkbox-input" type="checkbox">
                    </div>


                    <?php 
                    $schoolinformation=['School Area Canals','Covered Area','No. of Classes','Student Strength','No. of Teachers','No. of Non-Faculty Staff'];
                     $index2=0; 
              		for($i=0;$i<6;$i++){
        		        	?>
                    <div class="col-md-6">
                      <label class="control-label" for="district"><?php echo $schoolinformation[$index2] ?></label>
                      <input name="<?php echo $schoolinformation[$index2] ?>" class="form-control" type="text">
                    </div>

               			<?php
                  		$index2++;
                            } 
                     	?>
                 	 <div class="col-md-6">
                      <label class="control-label" for="district">Condition of School</label>
                      <textarea name="Condition of School" class="form-control" cols="40" rows="5"></textarea>
                    </div>        
           </div>

         </div>
</div>
         <div id="menu2" class="tab-pane fade"> 
              <div class="form-group col-md-12">
                  <div class="col-md-12">
                  <h2 class="heading-main">Furniture</h2>
                 </div>
              <div class="form-group col-md-12">
            <?php 
            $schoolfurniture=['Student Desk held/deficient','Student chairs held/deficient','Teachers Tables held/deficient','Teachers Chairs held/deficient'];
             $index3=0; 
      		for($i=0;$i<4;$i++){
		        	?>
              <div class="col-md-6">
                <label class="control-label" for="district"><?php echo $schoolfurniture[$index3] ?></label>
                <input name="<?php echo $schoolfurniture[$index3] ?>" class="form-control" type="text">
              </div>

       			<?php
          		$index3++;
                    } 
             	?>     
          </div>
        </div>
</div>

        <div id="menu3" class="tab-pane fade"> 
            <div class="form-group col-md-12">
            <div class="col-md-12">
            <h2 class="heading-main">Academic</h2>
            <strong>What are the qualifications of the teachers at your school.</strong>
           </div>
            <div class="form-group">
            <div class="col-md-6">
              <label class="control-label" for="district">Teacher Name</label>
              <input name="TeacherName" id="TeacherName" class="form-control" type="text">
            </div>
             <div class="col-md-6">
              <label class="control-label" for="district">Teacher Qualification</label>
              <input name="TeacherQualification" id="TeacherQualification" class="form-control" type="text">
            </div>


                              <div class="col-md-12 add-button">
                               <button class="btn btn-primary btn-lg" id="teacher1">Add</button>
                              </div>

                               <div class="col-md-12">
                                <table id="teacher">
                                <tr>
                                  <th>Teacher Name</th>
                                  <th>Teacher Qualification</th>
                                  <th>Actions</th>
                                </tr>
                              </table>                
                              </div> 

         	<div class="col-md-12">
            <strong>Non-faculty Staff</strong>
           </div>
            <div class="form-group">
            <div class="col-md-6">
              <label class="control-label" for="district">Aya held/not</label>
              <input name="Aya held/not" class="form-control" type="text">
            </div>
             <div class="col-md-6">
              <label class="control-label" for="district">Sweeper held/not</label>
              <input name="Sweeper held/not" class="form-control" type="text">
            </div>

              <div class="col-md-6">
              <label class="control-label" for="district">What are some of the most immediate needs of school.</label>
              <textarea name="immediate needs" class="form-control" cols="40" rows="5"></textarea>
            </div>   
          </div>
         
        </div>  
        </div>  
          <div class="form-group">
            <div class="col-md-12">
              <button type="button" class="btn btn-primary btn-lg btn-block info">Send</button>
            </div>
          </div>     

      </fieldset> 
    </form>
</div>
 @endsection