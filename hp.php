<?php 
if(!empty($_GET['st'])){
    $val=$_GET['st'];
    $covidurl='https://'.'api.rootnet.in/'.'covid19-in/hospitals/beds'.urlencode($_GET['st']);
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
<div class="ste">
<form action="">
          <ul class="nav flex-column">
 
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Andhra Pradesh">Andhra Pradesh</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Arunachal Pradesh">Arunachal Pradesh</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Assam">Assam</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Bihar">Bihar</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Chhattisgarh">Chhattisgarh</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Goa">Goa</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Gujarat">Gujarat</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Haryana">Haryana</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Himachal Pradesh">Himachal Pradesh</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Jammu & Kashmir">Jammu & Kashmir</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Jharkhand">Jharkhand</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Puducherry">Puducherry</button></li>&nbsp; 
</ul>
  </form> 
    </div>

<div class="ste1">
<form action="">
          <ul class="nav flex-column">
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Karnataka">Karnataka</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Kerala">Kerala</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Madhya Pradesh">Madhya Pradesh</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Maharashtra">Maharashtra</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Manipur">Manipur</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Meghalaya">Meghalaya</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Mizoram">Mizoram</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Nagaland">Nagaland</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Odisha">Odisha</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Punjab">Punjab</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Rajasthan">Rajasthan</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Lakshadweep">Lakshadweep</button></li>&nbsp;

 
</ul>
  </form> 
    </div>

<div class="ste2">
<form action="">
          <ul class="nav flex-column">
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Sikkim">Sikkim</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Tamil Nadu">Tamil Nadu</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Telangana">Telangana</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Tripura">Tripura</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Uttar Pradesh">Uttar Pradesh</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Uttarakhand">Uttarakhand</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="West Bengal">West Bengal</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Andaman & Nicobar Islands">Andaman & Nicobar Islands</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Chandigarh">Chandigarh</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Dadra & Nagar Haveli">Dadra & Nagar Haveli</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Daman & Diu">Daman & Diu</button></li>&nbsp;
<li class="nav-item"> <button type="submit"class="btn btn-primary" name="st" value="Delhi">Delhi</button></li>&nbsp;


 
</ul>
  </form> 
    </div>
          
           <div class="card mx-auto bg-warning penl " style="width: 50rem;">
            <div class="card-header mx-auto">
              Records
            </div>
            <div class="card-body">
              <h5 class="card-title">Select Your State</h5>
              <div class="card-deck mx-auto">
                <div class="row row-cols-3 row-cols-md-2">
                    <div class="col mb-4">
                      <div class="card" style="width: 40rem;">
                         <div class="card-body" style="width: 40rem;" >
                         
        
                          
                                              <?php 
        if(!empty($covidarray)){
        foreach($covidarray['data']['regional'] as $sdc){
            if($val==$sdc['state']){
               $rh=$sdc['ruralHospitals'];
                $rb=$sdc['ruralBeds'];
                 $uh=$sdc['urbanHospitals'];
                  $ub=$sdc['urbanBeds'];
                   $th=$sdc['totalHospitals'];
                    $tb=$sdc['totalBeds'];
                    $ste=$sdc['state'];
                
            }
           
          //  echo 'button type="submit" name="st" value="'.$sdc['state'].'"><br>';
          
            
        }
        }?>                


                              <table class="table">
                                  <?php 
                                  if(!empty($ste)){
                                      echo '<h5 style="margin-left:15rem;">'.$ste.' Data</h5>';
                                  ?>
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">Rural Hospitals</th>
                                    <th scope="col">Rural Beds</th>
                                   
                                    
                                  </tr>
                                </thead>
                                <tbody>

                                        <tr>
                                            <td> <?php echo $rh; ?> </td>
                                            <td > <?php echo $rb; ?> </td>
                                            
                                                
                                            
                                        </tr>
                                  
                                    
                                     
                                </tbody>
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">Urban Hospitals</th>
                                    <th scope="col">Urban Beds</th>
                                   
                                    
                                  </tr>
                                </thead>
                                <tbody>

                                        <tr>
                                            <td> <?php echo $uh; ?> </td>
                                            <td > <?php echo $ub; ?> </td>
                                            
                                                
                                            
                                        </tr>
                                  
                                    
                                     
                                </tbody>
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">Total Hospitals</th>
                                    <th scope="col">Total Beds</th>
                                   
                                    
                                  </tr>
                                </thead>
                                <tbody>

                                        <tr>
                                            <td> <?php echo $th; ?> </td>
                                            <td > <?php echo $tb; ?> </td>
                                            
                                                
                                            
                                        </tr>
                                  
                                    
                                     
                                </tbody>
                               <?php }
                                  ?>
                              </table>




                        </div>
        
                      </div>
                    </div>
                 
                    </div>
                    </div>
               </div>
          </div> 
         <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
         <br><br><br><br><br><br><br><br><br><br>
          <img class="hmes " src="med.jpg">


<nav class="navbar nbh navbar-expand-lg navbar-light bg-dark">
    <h6 class="fot">Made by-Jayakumar for Flipr hackathon</h6>
    
    
  </nav>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

                   
    </body>
</html>