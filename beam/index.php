
<?php include 'header.php'; ?>



    <section>
    	<div class="sec1">
    		<img src="img/beam.jpg" class="img-fluid"  alt="Responsive image">
        </div>
    </section>


    <section class="sec2">
      <div class="container">
        <div class="row">
         <div class="col">
         <h1 style="width: 100%; margin-top: 2%;">Beam Smart Remote i580</h1>
                <p style="width: 100%; margin-top: 2%; text-align: left;">We suggest using the Beam app to program
                your remote. However, if you would like to program the remote using the Code List, please use the
                code finder tool below to quickly find compatible codes for the different devices in your home. If 
                there are several codes available for your device, test each one and select the code that is the most
                    compatible with your device.<br><br>For more information, please refer to “PROGRAMMING USING THE CODE LIST” on 
                <a href="https://beamremotes.com/static/media/i580_User_Guide_V1-0_20190521_EN.abc59102.pdf#page=8" target="_blank" rel="noopener noreferrer">page 07 of the user guide.</a>
                </p>
                <h3>Choose From Our Devices To See The Brands We Carry!</h3>

                  <?php
    //Include database configuration file
    include('dbConfig.php');
    
    //Get all the devices data
    $query = $db->query("SELECT * FROM remotes");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>
    <select name="devices" id="devices" class="dropdown" >
        <option value="">Devices</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
            }
        }else{
            echo '<option value="">Country not available</option>';
        }
        ?>
    </select>
    
    <select name="brands" id="brands" class="dropdown">
        <option value="">Brands</option>
    </select>
    
        </div>
               
            </div>
        </div>
    </div>
  </section>

 




  <section class="sec3 data-lazy">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://beamremotes.com/static/media/beamheroimage2.530767c6.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://beamremotes.com/static/media/beamheroimage3.4e9b12a6.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</section>
    
    
                                                    
<?php include 'footer.php'; ?>



















