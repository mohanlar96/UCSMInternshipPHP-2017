<?php
  require 'view/header.view.php';                                        
?>
 <link rel="stylesheet" type="text/css" href="css/hostel.css">   
<div class="container-fluid">        
 <form role="form" class="form-horizontal" action="admin_hostel_hostelMorePrice.php" method="post" enctype="multipart/form-data">
   
  <div class="form-group">
    <label class="control-label col-sm-2" for="selRoomType">Room Type:</label>
    <div class="col-sm-4">
      <select class="form-control" id="selRoomType" name="selRoomType">
               <option>Single Room</option>
               <option>Double Room</option>
               <option>Triple Room</option>
               <option>Quadruple Room</option>
               <option>Hall Room</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="price">Price:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="price" name="price" placeholder="Enter price">
    </div>
    <div class="error col-sm-4"><?php echo $priceErr;?></div> 
  </div>
  <div class="container"  >
  <h4>Facilities</h4>
  <div class="checkbox">
    <label><input type="checkbox" value="1" name="Fan">Fan</label>
  </div>
  <div class="checkbox">
    <label><input type="checkbox" value="2" name="Cook">Cook</label>
  </div>
  <div class="checkbox">
    <label><input type="checkbox" value="3" name="Refrigerator">Refrigerator</label>
  </div>
  <div class="checkbox">
    <label><input type="checkbox" value="4" name="Wifi">Wifi</label>
  </div>
  <div class="checkbox">
    <label><input type="checkbox" value="5" name="Aircon">Aircon</label>
  </div>
   <div class="form-group" align="center"> 
  <div class="col-sm-8">  
    <button type="submit" name="submit" class="btn btn-info btn-md" >Add</button>
  </div>
 </div>
 </div> 
 </form>
</div> 
 
 

<script type="text/javascript" src="js/jquery.min.js"></script>   
<script src="js/bootstrap.min.js"></script>


