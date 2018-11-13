@extends('frontend.layout.frontend')

@section('content')
                <div id="wrapper" class="container">
  
  <figure class="page-head-image">
    <img src="http://loremflickr.com/300/300/person" />
  </figure>
  

    <form id="form-work" class="" name="form-work" action="#">
      
      <fieldset>
          <ul class="nav nav-pills nav-custom col-md-12">
          <li class="active"><a data-toggle="pill" href="#home">School Visit Report</a></li>
          <li><a data-toggle="pill" href="#menu1">Student Strenght</a></li>
          <li><a data-toggle="pill" href="#menu2">Staff Details</a></li>
          <li><a data-toggle="pill" href="#menu3">Infastructure Status</a></li>
          <li><a data-toggle="pill" href="#menu4">Cleanliness</a></li>
          <li><a data-toggle="pill" href="#menu5">Activities Perform</a></li>
          <li><a data-toggle="pill" href="#menu6">Co-curricular Activities</a></li>
          <li><a data-toggle="pill" href="#menu7">Teacher Information</a></li>
          <li><a data-toggle="pill" href="#menu8">Activities Conducted</a></li>
          </ul> 

       <div class="tab-content col-md-12">
         <div id="home" class="tab-pane fade in active">
            <div class="form-group col-md-12">
                  <div class="col-md-12">
                  <h2 class="heading-main">School Visit Report</h2>
                 </div>

<?php


   $schoolbasicmonitoring= array('Cluster','EMIS Code','Date','School Name','Visited by','Head Teacher','Teachers Present','St. Strenght','Classrooms','Washrooms','Playground');

          	$index=0; 
                for($i=0;$i<11;$i++){
          ?>
                    <div class="form-group">
                      <div class="col-md-6">
                        <label class="control-label" for="district"><?php echo $schoolbasicmonitoring[$index] ?></label>
                        <input name="<?php echo $schoolbasicmonitoring[$index] ?>" class="form-control" type="text">
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
            <h2 class="heading-main">Student Strength</h2>
           </div>
                <?php 
                $class=['KG','1','2','3','4','5','Overall'];
                $index4=0;
               
                ?>
                		  <div class="col-md-12">
                         <label class="control-label" for="district">Class</label>
                        <select name="MonitoringClass" id="MonitoringClass" class="form-control">
                        <?php for($x=0;$x<7;$x++) { ?>
                       <option value="<?php echo $class[$x];?>"><?php echo $class[$x];?></option>
                       <?php } ?>
                      </select>
                           </div>
                            <div class="form-group">
                            <div class="col-md-6">
                            <label class="control-label " for="district">Boys</label>
                              <input name="MonitoringBoys" id="MonitoringBoys" class="form-control " type="text">
                            </div>
                              <div class="col-md-6">
                            <label class="control-label " for="district">Girls</label>
                              <input name="MonitoringGirls" id="MonitoringGirls"class="form-control " type="text">
                            </div>
                              <div class="col-md-6">
                            <label class="control-label " for="district">Total</label>
                              <input name="MonitoringTotal" id="MonitoringTotal" class="form-control " type="text">
                            </div>
                          </div>
                            <div class="col-md-12 add-button">
                             <button class="btn btn-primary btn-lg" id="add-student-strenght">Add</button>
                            </div>

                            <div class="col-md-12">
                              <table id="add-student-strengh1">
                              <tr>
                                <th>Class</th>
                                <th>Boys</th>
                                <th>Girls</th>
                                <th>Total</th>
                                <th>Actions</th>
                              </tr>
                            </table>                
                            </div> 
                
         	</div>

</div>

 <div id="menu2" class="tab-pane fade"> 
          <div class="form-group col-md-12">
                <div class="col-md-12">
                <h2 class="heading-main">Staff Details</h2>
               </div>
              <?php 
              $index5=0;
            
              ?>
              		     

                          <div class="col-md-6">
                          <label class="control-label " for="district">Names</label>
                            <input name="StaffNames" id="StaffNames" class="form-control " type="text">
                          </div>

                          <div class="col-md-6">
                          <label class="control-label " for="district">Qualification</label>
                            <input name="StaffQualification" id="StaffQualification" class="form-control " type="text">
                          </div>

                          <div class="col-md-6">
                          <label class="control-label " for="district">Designation</label>
                            <input name="StaffDesignation" id="StaffDesignation" class="form-control " type="text">
                          </div>

                          <div class="col-md-6">
                          <label class="control-label " for="district">CNIC</label>
                            <input name="StaffCNIC" id="StaffCNIC" class="form-control " type="text">
                          </div>

                          <div class="col-md-6">
                          <label class="control-label " for="district">Contact</label>
                            <input name="StaffContact" id="StaffContact" class="form-control " type="text">
                          </div>

                          <div class="col-md-6">
                          <label class="control-label " for="district">Class/Grade</label>
                            <input name="StaffClass" id="StaffClass" class="form-control " type="text">
                          </div>

                          <div class="col-md-6">
                          <label class="control-label " for="district">Photo ID</label>
                            <input name="StaffPhoto" id="StaffPhoto" class="form-control " type="text">
                          </div>



                          <div class="col-md-12 add-button">
                             <button class="btn btn-primary btn-lg" id="add-staff-details">Add</button>
                            </div>

                            <div class="col-md-12">
                              <table id="add-staff-strengh1">
                              <tr>
                                <th>Names</th>
                                <th>Qualification</th>
                                <th>Designation</th>
                                <th>CNIC</th>
                                <th>Contact</th>
                                <th>Class/Grade</th>
                                <th>Photo ID</th>
                                <th>Actions</th>
                              </tr>
                            </table>                
                            </div> 
                       
        
          </div>

</div>

 <div id="menu3" class="tab-pane fade"> 

         	<div class="form-group col-md-12">
            <div class="col-md-12">
            <h2 class="heading-main">Infrastructure Status</h2>
           </div>
            <?php 
            $infastatus=['Cooler','Kids Room Com','Gate','Kids Room'];
            $index6=0;
           
            ?>
            		       <div class="col-md-12">
                       <label class="control-label" for="district">Indicator</label>
                         <select name="MonitoringIndicator" id="MonitoringIndicator" class="form-control">
                          <?php for($x=0;$x<4;$x++) { ?>
                         <option value="<?php echo $infastatus[$x];?>"><?php echo $infastatus[$x];?></option>
                         <?php } ?>
                        </select>
                       </div>
                        <div class="form-group">
                        <div class="col-md-6">
                        <label class="control-label " for="district">Working</label>
                        <select name="MonitoringWorking" id="MonitoringWorking" class="form-control">
                        <option value="yes">yes</option>
                        <option value="no">no</option>
                        </select>
                        </div>
                          <div class="col-md-6">
                        <label class="control-label " for="district">Maintained as Per Policy</label>
                        <select name="MonitoringPolicy" id="MonitoringPolicy" class="form-control">
                        <option value="yes">yes</option>
                        <option value="no">no</option>
                        </select>
                        </div>            
                        <div class="col-md-6">
                        <label class="control-label " for="district">Remarks</label>
                          <input name="MonitoringInfaRemarks" id="MonitoringInfaRemarks" class="form-control " type="text">
                        </div>
                      </div>

                      <div class="col-md-12 add-button">
                             <button class="btn btn-primary btn-lg" id="add-infa-structure">Add</button>
                            </div>

                            <div class="col-md-12">
                              <table id="add-infa-structure1">
                              <tr>
                                <th>Indicator</th>
                                <th>Working</th>
                                <th>Maintained as Per Policy</th>
                                <th>Remarks</th>
                                <th>Actions</th>
                              </tr>
                            </table>                
                            </div> 
                       
       
         	</div>


</div>


 <div id="menu4" class="tab-pane fade"> 

         	<div class="form-group col-md-12">
            <div class="col-md-12">
            <h2 class="heading-main">Cleanliness</h2>
          <strong>Area</strong>
           </div>
            <?php 
            $infaclean=['Class Rooms','Kids Room ','Washrooms','Verandas','Playground','Aya'];
            $index7=0;
            ?>
            		  <div class="col-md-12">
                        <select name="CleanlinessArea" id="CleanlinessArea" class="form-control">
                          <?php for($x=0;$x<6;$x++) { ?>
                         <option value="<?php echo $infaclean[$x];?>"><?php echo $infaclean[$x];?></option>
                         <?php } ?>
                        </select>
                       </div>
                        <div class="form-group">
                        <div class="col-md-6">
                        <label class="control-label " for="district">Status</label>
                             <select name="CleanlinessStatus" id="CleanlinessStatus" class="form-control">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              </select>
                        </div>
                          <div class="col-md-6">
                        <label class="control-label " for="district">Remarks</label>
                          <input name="CleanlinessRemarks" id="CleanlinessRemarks" class="form-control " type="text">
                        </div>
                        </div>


                      <div class="col-md-12 add-button">
                             <button class="btn btn-primary btn-lg" id="add-monitoring-cleanliness">Add</button>
                            </div>

                            <div class="col-md-12">
                              <table id="add-monitoring-cleanliness1">
                              <tr>
                                <th>Area</th>
                                <th>Status</th>
                                <th>Remarks</th>
                                <th>Actions</th>
                              </tr>
                            </table>                
                            </div>             
         	</div>

</div>

 <div id="menu5" class="tab-pane fade"> 

         	<div class="form-group col-md-12">
            <div class="col-md-12">
            <h2 class="heading-main">Activities Perform</h2>
          <strong>Academics Student Assessment</strong>
           </div>
            <?php 
            $infaclean=['KG','1','2','3','4','5'];
            $index7=0;
            ?>
            		  <div class="col-md-12">
                      <select name="ActivitiesClass" id="ActivitiesClass" class="form-control">
                          <?php for($x=0;$x<6;$x++) { ?>
                         <option value="<?php echo $infaclean[$x];?>"><?php echo $infaclean[$x];?></option>
                         <?php } ?>
                        </select>
                       </div>
                        <div class="form-group">
                        <div class="col-md-6">
                        <label class="control-label " for="district">Urdu(Reading and Writing Skills)</label>
                            <select name="ActivitiesUrdu" id="ActivitiesUrdu" class="form-control">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              </select>
                        </div>
                          <div class="col-md-6">
                        <label class="control-label " for="district">English(Reading and Writing Skills)</label>
                            <select name="ActivitiesEnglish" id="ActivitiesEnglish" class="form-control">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              </select>
                        </div> 
                          <div class="col-md-6">
                        <label class="control-label " for="district">Numeracy Skills</label>
                              <select name="ActivitiesNumeric" id="ActivitiesNumeric" class="form-control">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              </select>
                        </div>   
                          <div class="col-md-6">
                        <label class="control-label " for="district">Science Concepts</label>
                            <select name="ActivitiesScience" id="ActivitiesScience" class="form-control">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              </select>
                        </div>   
                          <div class="col-md-6">
                        <label class="control-label " for="district">General Knowledge</label>
                            <select name="ActivitiesGeneralKnowledge" id="ActivitiesGeneralKnowledge" class="form-control">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              </select>
                        </div>   
                          <div class="col-md-6">
                        <label class="control-label " for="district">Social Studies</label>
                            <select name="ActivitiesSocial" id="ActivitiesSocial" class="form-control">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              </select>
                        </div>   
                          <div class="col-md-6">
                        <label class="control-label " for="district">Copy Work</label>
                           <select name="ActivitiesCopy" id="ActivitiesCopy" class="form-control">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              </select>
                        </div>   
                          <div class="col-md-6">
                        <label class="control-label " for="district">Remarks,if any</label>
                          <input name="ActivitiesOther" id="ActivitiesOther" class="form-control " type="text">

                        </div>

                        <div class="col-md-12 add-button">
                             <button class="btn btn-primary btn-lg" id="add-monitoring-activities">Add</button>
                            </div>

                            <div class="col-md-12">
                              <table id="add-monitoring-activities1">
                              <tr>
                                <th>Class</th>
                                <th>Urdu Skills</th>
                                <th>English Skills</th>
                                <th>Numeric Skills</th>
                                <th>Science Skills</th>
                                <th>General Knowledge Skills</th>
                                <th>Social Studies Skills</th>
                                 <th>Copy Work Skills</th>
                                 <th>Others</th>
                                <th>Actions</th>
                              </tr>
                            </table>                
                            </div>    

                       </div>
     
         	</div>


</div>

   <div id="menu6" class="tab-pane fade"> 

  	<div class="form-group col-md-12">
            <div class="col-md-12">
            <h2 class="heading-main">Co-curricular Activities</h2>
           </div>
          <?php 
          $infaclean=['KG','1','2','3','4','5'];
          $index7=0;
          
          ?>
          		  <div class="col-md-12">
                      <select name="CurricularActivitiesClass" id="CurricularActivitiesClass" class="form-control">
                          <?php for($x=0;$x<6;$x++) { ?>
                         <option value="<?php echo $infaclean[$x];?>"><?php echo $infaclean[$x];?></option>
                         <?php } ?>
                        </select>
                     </div>
                      <div class="form-group">
                      <div class="col-md-6">
                      <label class="control-label " for="district">Sports</label>
                          <select name="ActivitiesSports" id="ActivitiesSports" class="form-control">
                              <option value="yes">yes</option>
                              <option value="no">no</option>
                              </select>
                      </div>
                        <div class="col-md-6">
                      <label class="control-label " for="district">Quiz</label>
                           <select name="ActivitiesQuiz" id="ActivitiesQuiz" class="form-control">
                              <option value="yes">yes</option>
                              <option value="no">no</option>
                            </select>
                      </div> 
                        <div class="col-md-6">
                      <label class="control-label " for="district">Naat</label>
                           <select name="ActivitiesNaat" id="ActivitiesNaat" class="form-control">
                              <option value="yes">yes</option>
                              <option value="no">no</option>
                            </select>
                      </div>   
                        <div class="col-md-6">
                      <label class="control-label " for="district">Poem</label>
                         <select name="ActivitiesPoem" id="ActivitiesPoem" class="form-control">
                              <option value="yes">yes</option>
                              <option value="no">no</option>
                            </select>
                      </div>   
                        <div class="col-md-6">
                      <label class="control-label " for="district">Story Telling</label>
                          <select name="StoryTelling" id="StoryTelling" class="form-control">
                              <option value="yes">yes</option>
                              <option value="no">no</option>
                            </select>
                      </div>   
                        <div class="col-md-6">
                      <label class="control-label " for="district">Art & Craft</label>
                           <select name="ArtandCraft" id="ArtandCraft" class="form-control">
                              <option value="yes">yes</option>
                              <option value="no">no</option>
                            </select>
                      </div>   
                        <div class="col-md-6">
                      <label class="control-label " for="district">Creative Writing</label>
                          <select name="CreativeWriting" id="CreativeWriting" class="form-control">
                              <option value="yes">yes</option>
                              <option value="no">no</option>
                            </select>
                      </div>   
                        <div class="col-md-6">
                      <label class="control-label " for="district">Others</label>
                        <input name="CocurricularOthers" id="CocurricularOthers" class="form-control " type="text">
                      </div>
                      </div>
                        <div class="col-md-12 add-button">
                             <button class="btn btn-primary btn-lg" id="add-curricular-activities">Add</button>
                            </div>

                            <div class="col-md-12">
                              <table id="add-curricular-activities1">
                              <tr>
                                <th>Class</th>
                                <th>Sports</th>
                                <th>Quiz</th>
                                <th>Naat</th>
                                <th>Poem</th>
                                <th>Story Telling</th>
                                <th>Art & Craft</th>
                                 <th>Creatine Writting</th>
                                 <th>Others</th>
                                <th>Actions</th>
                              </tr>
                            </table>                
                            </div>                 
         	</div>

</div>


 <div id="menu7" class="tab-pane fade"> 

            <div class="form-group">
              <div class="col-md-12">
              <label class="control-label " for="district">Teacher Name</label>
                <input name="TeacherName" id="TeacherName" class="form-control " type="text">
              </div>
           </div>   

           <div class="form-group">
              <div class="col-md-6">
              <label class="control-label " for="district">Class Observed</label>
                <input name="TeacherClassObserved" id="TeacherClassObserved" class="form-control " type="text">
              </div>
             

              <div class="col-md-6">
              <label class="control-label " for="district">Subject</label>
                <input name="TeacherSubject" id="TeacherSubject" class="form-control " type="text">
              </div>

              <div class="col-md-6">
              <label class="control-label " for="district">Topic</label>
                <input name="TeacherTopic" id="TeacherTopic" class="form-control " type="text">
              </div>
            </div>
<?php 

$content=array(
'Lessons Content Planning' => 'DD,SLO,CW,HW,Syllabus Break Up',
'Lessons Content Delivery' => 'BB,Voice,Creativity,Examples,Concept,Clearity,blended learning',
'Lessons Content Review' => 'student participation,QA,CC',
'Lessons Content Assessment' => 'QA,class involvement,validity and reliability',
'Class Management' => 'DD,SLO,CW,HW,Syllabus Break Up',
'Working Relationships' => 'Interaction with collegues,parents and PEN staff',
'Documentation' => 'Attendance register,DD,test records,guide lessons',
'Proffesional Knowledge and Personal Traits' => 'trainings,regularity,punctuality,eagerness to learn',
 );

?>

 <div class="form-group">

            <div class="col-md-12">
               <label class="control-label" for="district">Content</label>
                <select name="TeacherContent" id="TeacherContent" class="form-control">
              <?php foreach($content as $key=>$value){?>
             <option value="<?php echo $key;?>"><?php echo $key;?></option>
              <?php } ?>
              </select>
               <label class="control-label" for="district">Tags</label>
              
               <div class="Teacher-Content Lesson-Content">
                <?php foreach($content as $key=>$value){
                  if($key=='Lessons Content Planning'){
                    $str_arr = explode (",", $value);  
                    for($x=0;$x<count($str_arr);$x++){
                  ?>
              <div class="checkbox">
                  <label>
                      <input type="checkbox" value="<?php echo $str_arr[$x] ;?>">
                      <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                      <?php echo $str_arr[$x] ;?>
                  </label>
              </div>
               <?php } }  } ?>
            </div>

             <div class="Teacher-Content Lesson-Delivery">
                <?php foreach($content as $key=>$value){
                  if($key=='Lessons Content Delivery'){
                    $str_arr = explode (",", $value);  
                    for($x=0;$x<count($str_arr);$x++){
                  ?>
              <div class="checkbox">
                  <label>
                      <input type="checkbox" value="<?php echo $str_arr[$x] ;?>">
                      <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                      <?php echo $str_arr[$x] ;?>
                  </label>
              </div>
               <?php } }  } ?>
            </div>

             <div class="Teacher-Content Lesson-Review">
                <?php foreach($content as $key=>$value){
                  if($key=='Lessons Content Review'){
                    $str_arr = explode (",", $value);  
                    for($x=0;$x<count($str_arr);$x++){
                  ?>
              <div class="checkbox">
                  <label>
                      <input type="checkbox" value="<?php echo $str_arr[$x] ;?>">
                      <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                      <?php echo $str_arr[$x] ;?>
                  </label>
              </div>
               <?php } }  } ?>
            </div>

             <div class="Teacher-Content Lesson-Assessment">
                <?php foreach($content as $key=>$value){
                  if($key=='Lessons Content Assessment'){
                    $str_arr = explode (",", $value);  
                    for($x=0;$x<count($str_arr);$x++){
                  ?>
              <div class="checkbox">
                  <label>
                      <input type="checkbox" value="<?php echo $str_arr[$x] ;?>">
                      <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                      <?php echo $str_arr[$x] ;?>
                  </label>
              </div>
               <?php } }  } ?>
            </div>

             <div class="Teacher-Content Lesson-Management">
                <?php foreach($content as $key=>$value){
                  if($key=='Class Management'){
                    $str_arr = explode (",", $value);  
                    for($x=0;$x<count($str_arr);$x++){
                  ?>
              <div class="checkbox">
                  <label>
                      <input type="checkbox" value="<?php echo $str_arr[$x] ;?>">
                      <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                      <?php echo $str_arr[$x] ;?>
                  </label>
              </div>
               <?php } }  } ?>
            </div>


            <div class="Teacher-Content Lesson-Relationships">
                <?php foreach($content as $key=>$value){
                  if($key=='Working Relationships'){
                    $str_arr = explode (",", $value);  
                    for($x=0;$x<count($str_arr);$x++){
                  ?>
              <div class="checkbox">
                  <label>
                      <input type="checkbox" value="<?php echo $str_arr[$x] ;?>">
                      <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                      <?php echo $str_arr[$x] ;?>
                  </label>
              </div>
               <?php } }  } ?>
            </div>



            <div class="Teacher-Content Lesson-Documentation">
                <?php foreach($content as $key=>$value){
                  if($key=='Documentation'){
                    $str_arr = explode (",", $value);  
                    for($x=0;$x<count($str_arr);$x++){
                  ?>
              <div class="checkbox">
                  <label>
                      <input type="checkbox" value="<?php echo $str_arr[$x] ;?>">
                      <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                      <?php echo $str_arr[$x] ;?>
                  </label>
              </div>
               <?php } }  } ?>
            </div>


            <div class="Teacher-Content Lesson-Traits">
                <?php foreach($content as $key=>$value){
                  if($key=='Proffesional Knowledge and Personal Traits'){
                    $str_arr = explode (",", $value);  
                    for($x=0;$x<count($str_arr);$x++){
                  ?>
              <div class="checkbox">
                  <label>
                      <input type="checkbox" value="<?php echo $str_arr[$x] ;?>">
                      <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                      <?php echo $str_arr[$x] ;?>
                  </label>
              </div>
               <?php } }  } ?>
            </div>

            <label class="control-label" for="nome">Remarks</label>
            <input name="TeacherRemarks" id="TeacherRemarks" class="form-control" placeholder="" type="text">
            </div>


            <div class="col-md-12 add-button">
                             <button class="btn btn-primary btn-lg" id="add-teacher-activities">Add</button>
                            </div>

                            <div class="col-md-12">
                              <table id="add-teacher-activities1">
                              <tr>
                                <th>Teacher Name</th>
                                <th>Class Observed</th>
                                <th>Subject</th>
                                <th>Topic</th>
                                <th>Content</th>
                                <th>Tags</th>
                                 <th>Remarks</th>
                                <th>Actions</th>
                              </tr>
                            </table>                
                            </div>            

          
      
</div>
</div>


 <div id="menu8" class="tab-pane fade"> 
 <div class="form-group">
     <div class="col-md-12">
            <h2>Activities Conducted(other if any)</h2>
            <label class="control-label" for="nome">Remarks & Suggestions</label>
            <input name="" class="form-control" placeholder="" type="text">
            </div>
<div class="clear"></div>
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