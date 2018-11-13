@extends('frontend.layout.frontend')

@section('content')
  <div id="wrapper" class="container">
  
  <figure class="page-head-image">
    <img src="http://loremflickr.com/300/300/person" />
  </figure>


    <form id="form-work" class="" name="form-work" action="#">
      
      <fieldset>


          <ul class="nav nav-pills nav-custom col-md-12">
          <li class="active"><a data-toggle="pill" href="#home">School Basic inventory</a></li>
          <li><a data-toggle="pill" href="#menu1">School Ownership</a></li>
          <li><a data-toggle="pill" href="#menu2">School Infastructure</a></li>
           <li><a data-toggle="pill" href="#menu3">School Details</a></li>
          <li><a data-toggle="pill" href="#menu4">School Enrollment</a></li>
          <li><a data-toggle="pill" href="#menu5">Utility Connection</a></li>
          <li><a data-toggle="pill" href="#menu6">Submit</a></li>
          </ul> 

         <div class="tab-content col-md-12">

         <div id="home" class="tab-pane fade in active">

      	<?php  $datacollection=array(

      		'District' => 'BhawalNagar',
      		'Tehsil' => 'BhawalNagar',
      		'UC Name' => 'Mosa Bhota',
      		'UC No' => '31',
      		'EMISCODE' => '3110437',
      		'PP NO' => '276',
      		'NA NO' => '158',
      		'Markaz' => '02',
      		'Name of Head Teacher' => 'Tasneem Kausar',
      		'Total Land of School Marla' => '20',
      		'Covered Area Marla' => '20',
      		'School Level' => 'Primary',
      		'Main Gate' => 'Yes',
      		'Boundary Wall' => 'Yes',
      		'Wall Height Feet' => '6',
      		'Total Trees' => '7'
      	); 

      	foreach ($datacollection as $key => $value) {  ?>


        <div class="form-group">
            
            <div class="col-md-6">
            <label class="control-label" for="nome"><?php  echo $key; ?></label>
            <input name="<?php  echo $key; ?>" class="form-control" placeholder="<?php  echo $value; ?>" type="text">
            </div>

          </div>
      	<?php 	
      	}

$dataowner=array(

          'School Land Owner' => 'Community',
          'Building Security and Safety' => 'No',
          'Fard/Mutations' => 'Yes',
          'Building Fitness Certificate' => 'No'
        ); 

      	?>

   </div> 
   
   <div id="menu1" class="tab-pane fade">    

   <div class="form-group col-md-12">
            <div class="col-md-12">
            <h2 class="heading-main">OwnerShip Status of School Land</h2>
           </div>

        <?php      foreach ($dataowner   as $key => $value) {  ?>
          <div class="col-md-6">
            <label class="control-label" for="nome"><?php  echo $key; ?></label>
            <input name="<?php  echo $key; ?>" class="form-control" placeholder="<?php  echo $value; ?>" type="text">
          </div>
        <?php   
        }
?>
      
      </div>
  </div>


  <div id="menu2" class="tab-pane fade">    

           
         
           	<div class="col-md-12">
           	<h2 class="heading-main">InfraStructure and Equipment Details</h2>
           </div>
              
        <?php $head= array('Principal Office','Staff Room','Class Rooms','Hall','Science Lab','Computer Lab','Library','Total Toilets','Toilets Functional','Toilets Not Functional','Source of Water','Hand Pump','Electric Pump','Ceiling Fans','Steel Cabinet','CCTV Camera','Metal Detector','Computers','Electric Coolers','Swings','Hudie','Razor Wire');

        ?>
         
      

            <div class="col-md-6">
             <label class="control-label" for="district">Head</label>
             <select name="head" id="head" class="form-control">
              <?php for($x=0;$x<10;$x++) { ?>
             <option value="<?php echo $head[$x];?>"><?php echo $head[$x];?></option>
             <?php } ?>
            </select>
            </div>

             <div class="col-md-6">
              <label class="control-label" for="district">Quantity</label>
              <input name="Quantity" id="Quantity" class="form-control" placeholder="2" type="text">
            </div>

             <div class="col-md-6">
              <label class="control-label" for="district">Status/Condition</label>
              <input name="Status" id="status" class="form-control" placeholder="Satisfactory" type="text">
            </div>

             <div class="col-md-12 add-button">
             <button class="btn btn-primary btn-lg" id="add-school-infa">Add</button>
            </div>

            <div class="col-md-12">
              <table id="myTable">
              <tr>
                <th>Head</th>
                <th>Quantity</th>
                <th>Status</th>
                 <th>Actions</th>
              </tr>
            </table>                
            </div> 


</div>

<div id="menu3" class="tab-pane fade">    

        

            <div class="col-md-12">
            <h2 class="heading-main">School Details</h2>
           </div>
              
<?php $head= array('Chair','Table','Bench','Desk','Mats','Writting Board','Others');

$index=0;



?>
    
        

            <div class="col-md-6">
              <label class="control-label" for="district">Head</label>
               <select name="head2" id="head2" class="form-control">
              <?php for($x=0;$x<6;$x++) {?>
             <option value="<?php echo $head[$x];?>"><?php echo $head[$x];?></option>
             <?php } ?>
            </select>
            </div>

             <div class="col-md-6">
              <label class="control-label" for="district">Students</label>
              <input name="Students" id="Students" class="form-control" placeholder="2" type="text">
            </div>

             <div class="col-md-6">
              <label class="control-label" for="district">Principal Office</label>
              <input name="PrincipalOffice" id="PrincipalOffice" class="form-control" placeholder="2" type="text">
            </div>

            <div class="col-md-6">
              <label class="control-label" for="district">Staff Room</label>
              <input name="StaffRoom" id="StaffRoom" class="form-control" placeholder="3" type="text">
            </div>

            <div class="col-md-6">
              <label class="control-label" for="district">Lab</label>
              <input name="Lab" id="Lab" class="form-control" placeholder="4" type="text">
            </div>

            <div class="col-md-6">
              <label class="control-label" for="district">Library</label>
              <input name="Library" id="Library" class="form-control" placeholder="5" type="text">
            </div>

            <div class="col-md-12 add-button">
             <button class="btn btn-primary btn-lg" id="add-school-details">Add</button>
            </div>


              <div class="col-md-12">
              <table id="myTable2">
              <tr>
                <th>Head</th>
                <th>Students</th>
                <th>Principal Office</th>
                <th>Staff Room</th>
                <th>Lab</th>
                <th>Library</th>
                 <th>Actions</th>
              </tr>
            </table>                
            </div>  

    



</div>

<div id="menu4" class="tab-pane fade">    

       
            <div class="col-md-12">
            <h2 class="heading-main">Enrollment</h2>
           </div>
              
<?php $head= array('Boys','Girls','Total');

$index=0;



?>
    
       
            <div class="col-md-6">
              <label class="control-label" for="district">Class</label>
                <select name="Class" id="Class" class="form-control">
              <?php for($x=0;$x<3;$x++) {?>
             <option value="<?php echo $head[$x];?>"><?php echo $head[$x];?></option>
             <?php } ?>
            </select>
            </div>

             <div class="col-md-6">
              <label class="control-label" for="district">Nursery</label>
              <input name="Nursery" id="Nursery" class="form-control" placeholder="2" type="text">
            </div>

             <div class="col-md-6">
              <label class="control-label" for="district">Prep</label>
              <input name="Prep" id="Prep" class="form-control" placeholder="2" type="text">
            </div>

               <div class="col-md-6">
              <label class="control-label" for="district">Class 1</label>
              <input name="Class1" id="Class1" class="form-control" placeholder="3" type="text">
              </div>

               <div class="col-md-6">
              <label class="control-label" for="district">Class 2</label>
              <input name="Class2" id="Class2" class="form-control" placeholder="4" type="text">
              </div>

               <div class="col-md-6">
              <label class="control-label" for="district">Class 3</label>
              <input name="Class3" id="Class3" class="form-control" placeholder="5" type="text">
              </div>

                <div class="col-md-6">
              <label class="control-label" for="district">Class 4</label>
              <input name="Class4" id="Class4" class="form-control" placeholder="5" type="text">
               </div>

                <div class="col-md-6">
              <label class="control-label" for="district">Class 5</label>
              <input name="Class5" id="Class5" class="form-control" placeholder="5" type="text">
              </div>

                <div class="col-md-6">
              <label class="control-label" for="district">Total</label>
              <input name="Total" id="Total" class="form-control" placeholder="26" type="text">
              </div>

             <div class="col-md-12 add-button">
             <button class="btn btn-primary btn-lg" id="add-school-enroll">Add</button>
            </div>


             <div class="col-md-12">
              <table id="myTable3">
              <tr>
                <th>Class</th>
                <th>Nursery</th>
                <th>Prep</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>Total</th>
                 <th>Actions</th>
              </tr>
            </table>                
            </div>  


    

</div>


<div id="menu5" class="tab-pane fade">    

  
            <div class="col-md-12">
            <h2 class="heading-main">Utiltity Connection</h2>
           </div>
              
<?php $head= array('Electricity','Water','Telephone');

$index=0;



?>
    
       
            <div class="col-md-6">
              <label class="control-label" for="district">Source</label>
              <select name="source" id="source" class="form-control">
              <?php for($x=0;$x<3;$x++) {?>
             <option value="<?php echo $head[$x];?>"><?php echo $head[$x];?></option>
             <?php } ?>
            </select>
            </div>

             <div class="col-md-6">
              <label class="control-label" for="district">Functional</label>
              <input name="Functional" id="Functional" class="form-control" placeholder="yes" type="text">
            </div>
            
             <div class="col-md-6">
              <label class="control-label" for="district">Charges Paid</label>
              <input name="ChargesPaid" id="ChargesPaid" class="form-control" placeholder="no" type="text">
            </div>

             <div class="col-md-12 add-button">
             <button class="btn btn-primary btn-lg" id="add-school-utility">Add</button>
            </div>

            <div class="col-md-12">
              <table id="myTable5">
              <tr>
                <th>Source</th>
                <th>Functional</th>
                <th>Charges Paid</th>
                <th>Actions</th>
              </tr>
            </table>                
            </div>  



</div>




<div  id="menu6" class="tab-pane fade">
          <div class="form-group">
            <div class="col-md-12">
              <button type="button" class="btn btn-primary btn-lg btn-block info">Send</button>
            </div>
          </div>     
</div>
</div>
      </fieldset> 
    </form>
    
<div class="clear"></div>
</div>

 @endsection