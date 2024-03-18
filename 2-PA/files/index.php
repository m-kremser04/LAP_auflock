<?php include('header.php');
include('database.php');
include('nav.php'); 
  ?>

<p class="text-center fs-2"> Willkommen beim Handyvergleich!</p>

<div class="container text-center">
  <div class="row">
    <div class="col border border-primary me-3">
      
    <select id="left" class="form-control" >
     <option value="" selected="selected">Gerät auswählen</option>
        <?php  
        $sql = "SELECT id, `name`, display FROM modell";
        $stmt =$conn->prepare($sql);
        $stmt->execute();
        $resultset = $stmt->get_result();
        while( $rows = $resultset->fetch_assoc()) {
         ?>
        <option value="<?php echo $rows["id"]; ?>"><?php echo $rows["name"]; ?></option>
        <?php }	
        ?>
    </select>



    <div class="d-none" id="errorMassage"></div>
        <div class="d-none mt-3 container text-start hidden" id="recordListing">
        <div class="row">
        
        <div class="col-6 col-sm-3">Modell:</div>
        <div class="col-6 col-sm-3 text-left "><p id="empName"></p></div>

        <!-- Force next columns to break to new line -->
        <div class="w-100"></div>

        <div class="col-6 col-sm-3">Display:</div>
        <div class="col-6 col-sm-3"><p id="empDisplay"></p></div>

        <div class="w-100"></div>

        <div class="col-6 col-sm-3">Prozessor:</div>
        <div class="col-6 col-sm-4"><p id="empProzessor"></p></div>
        </div>
  </div>
</div>

    <div class="col border border-primary">
    
    <select id="right" class="form-control" >
     <option value="" selected="selected">Gerät auswählen</option>
        <?php               
        $sql = "SELECT id, `name`, display FROM modell";
        $stmt =$conn->prepare($sql);
        $stmt->execute();
        $resultset = $stmt->get_result();
        while( $rows = $resultset->fetch_assoc()) {
         ?>
        <option value="<?php echo $rows["id"]; ?>"><?php echo $rows["name"]; ?></option>
        <?php }	
          $conn->close();  ?>
    </select>

    <div class="d-none" id="errorMassageR"></div>

        <div class="d-none mt-3 container text-start hidden" id="recordListingR">
        <div class="row">
        
        <div class="col-6 col-sm-3">Modell:</div>
        <div class="col-6 col-sm-4 text-left "><p id="empNameR"></p></div>

        <!-- Force next columns to break to new line -->
        <div class="w-100"></div>

        <div class="col-6 col-sm-3">Display:</div>
        <div class="col-6 col-sm-4"><p id="empDisplayR"></p></div>

        <div class="w-100"></div>

        <div class="col-6 col-sm-3">Prozessor:</div>
        <div class="col-6 col-sm-6 "><p id="empProzessorR"></p></div>
        </div>
  </div>
  </div>













<?php include('footer.php'); ?>








