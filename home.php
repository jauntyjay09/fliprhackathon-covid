<?php 
if(!empty($_GET['st'])){
    $val=$_GET['st'];
    $covidurl='https://'.'api.rootnet.in/'.'covid19-in/contacts'.urlencode($_GET['st']);
    $covidjson=file_get_contents($covidurl);
    $covidarray=json_decode($covidjson,true);
   // $st=$covidarray['data']['contacts']['regional'][$val]['loc'];
    
}


?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Covid
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <link rel="stylesheet" href="styl.css">
    </head>
    <body>
        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="home.php">
                <img src="cross.png" width="80" height="40" class="d-inline-block align-top" alt="" loading="lazy">
                <g style="color: black;">SVASTH</g> 
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="navbar-collapse collapse" id="navbarSupportedContent" >
              <ul class="navbar-nav mr-auto">
                
                
              </ul>
              <ul class="nav ">
                <li class="nav-item">
                  <a class="nav-link active" href="home.php">Helpline Support</a>
                </li>
                
              </ul>
              <ul class="nav ">
                <li class="nav-item">
                  <a class="nav-link active" href="not.php">Notifications</a>
                </li>
                
              </ul>
              <ul class="nav ">
                <li class="nav-item">
                  <a class="nav-link active" href="hp.php">Hospitals</a>
                </li>
                
              </ul>
              <ul class="nav ">
                <li class="nav-item">
                  <a class="nav-link active" href="clg.php">Medical Colleges</a>
                </li>
                
              </ul>
              <ul class="nav ">
                <li class="nav-item">
                  <a class="nav-link active" href="mp.php">Stats</a>
                </li>
                
              </ul>
            </div>
          </nav>
       
 <br>
 
          <div class="card mx-auto" style="width: 50rem;">
            <div class="card-body">
              <h5 class="card-title" style="text-align: center;">Helpline No.</h5>

  <form action=""> 
    <div class="form-row">
      <div class="col-md-5 mb-3">
        
         

         <label class="ab" for="st">Enter State Name:</label>
            <br>
           <input class="form-control" list="states" name="st" id="st" required>
               <datalist id="states">
                  <option value="Andhra Pradesh">
                     <option value="Arunachal Pradesh">
                     <option value="Assam">
                     <option value="Bihar">
                     <option value="Chhattisgarh">
                     <option value="Goa">
                     <option value="Gujarat">
                     <option value="Haryana">
                     <option value="Himachal Pradesh">
                     <option value="Jharkhand">
                     <option value="Karnataka">
                     <option value="Kerala">
                     <option value="Madhya Pradesh">
                     <option value="Maharashtra">
                     <option value="Manipur">
                     <option value="Meghalaya">
                     <option value="Mizoram">
                     <option value="Nagaland">
                     <option value="Odisha">
                     <option value="Punjab">
                     <option value="Rajasthan">
                     <option value="Sikkim">
                     <option value="Tamil Nadu">
                     <option value="Telengana">
                     <option value="Tripura">
                     <option value="Uttarakhand">
                     <option value="Uttar Pradesh">
                     <option value="West Bengal">
                     <option value="Andaman and Nicobar Islands">
                     <option value="Chandigarh">
                     <option value="Dadra and Nagar Haveli">
                     <option value="Daman & Diu">
                     <option value="Delhi">
                     <option value="Jammu and Kashmir">
                     <option value="Ladakh">
                     <option value="Lakshadweep">
                     <option value="Puducherry">
               </datalist>
      </div>
      
    </div>
   
    
    <button class="btn btn-primary" type="submit">Submit</button>
  </form>
  <br>
  <h5 class="card-title">
      
      <?php 
        if(!empty($covidarray)){
        foreach($covidarray['data']['contacts']['regional'] as $sdc){
            if($val==$sdc['loc']){
                 
                echo 'Connect To: <a href="tel:'.$sdc['number'].'" style="color: #FFB533">'. $sdc['number'].'</a>';
            }
           // echo ' option value="'.$sdc['loc'].'"><br>';
            
        }
        }?>
  </h5>
</div>
</div>
<img class="hel" src="med2.jpg">



<nav class="navbar  navbar-expand-lg navbar-light bg-dark">
    <h6 class="fot">Made by-Jayakumar for Flipr hackathon</h6>
    
    
  </nav>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

                   
    </body>
</html>