<?php
include('header.php');
include('nav.php');
include('database.php');?>


<p class="text-center fs-3"> geben Sie die Daten für ein neues Produkt ein:</p>

<form action="insert-action.php" method="POST">
<div class="row">
<div class="col ms-3">
<label for="modell">Modell </label>
<input type="text" name="modell" id="modell" placeholder="modell">
</div>
<div class="col">
<label for="display">Display </label>
<input type="text" name="display" id="display" placeholder="display">
</div>
<div class="col">
<label for="prozessor">Prozessor </label>
<input type="text" name="prozessor" id="prozessor" placeholder="prozessor">
</div>
<div class="col">
<select id="hersteller" name="hersteller">
     <option value="" selected="selected">Hersteller auswählen</option>
        <?php  
        $sql = "SELECT id, hersteller FROM hersteller";
        $stmt =$conn->prepare($sql);
        $stmt->execute();
        $resultset = $stmt->get_result();
        while( $rows = $resultset->fetch_assoc()) {
         ?>
        <option value="<?php echo $rows["id"]; ?>"><?php echo $rows["hersteller"]; ?></option>
        <?php }	
        ?>
    </select>
</div>
<div class="col">
<input type="submit" value="absenden">
</div>
 </div>
        </form>

<?php include('footer.php'); ?>