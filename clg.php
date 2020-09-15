

<?php 
if(!empty($_GET['st'])){
    $val=$_GET['st'];
    $tp=$_GET['tp'];
    $covidurl='https://'.'api.rootnet.in/'.'covid19-in/hospitals/medical-colleges'.urlencode($_GET['st']);
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


<br><br>
 
<img class="clgp" src="standing-17.svg" class="rounded float-left" alt="...">             
  <div class="card mx-auto colg" style="width: 50rem;">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">Medical Colleges In Your State</h5>

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
<div class="form-group col-md-4">
    <label for="inputState">Type</label>
    <select id="inputState" class="form-control" name="tp">
      
      <option value="Society" >Society</option>
      <option value="Govt-Society" >Govt-Society</option>
      <option value="Trust" >Trust</option>
      <option value="Govt" >Govt</option>
      <option value="Private" >Private</option>
      <option value="University" >University</option>
     
    </select>
  </div>
</div>



<button class="btn btn-primary" type="submit">Submit</button>
</form>
<br>
<h5 class="card-title"></h5>
</div>
</div>

<div class="card mx-auto bg-success " style="width: 50rem;">
            <div class="card-header mx-auto">
              Records
            </div>
            <div class="card-body">
              <h5 class="card-title">Select Your Choices Above</h5>
              <div class="card-deck mx-auto">
                <div class="row row-cols-3 row-cols-md-2">
                    <div class="col mb-4">
                      <div class="card" style="width: 40rem;">
                         <div class="card-body" style="width: 40rem;" >
                         
        <table class="table">
                                  <?php 
                                  if(!empty($tp)){
                                      echo '<h5 style="margin-left:15rem;">'.$val.' '.$tp.' Data</h5>';
                                  ?>
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">Institution Name</th>
                                    <th scope="col">City</th>
                                   <th scope="col">Admission Capacity</th>
                                    <th scope="col">Hospital Beds</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                          
                                              <?php 
        if(!empty($covidarray)){
            
            foreach($covidarray['data']['medicalColleges'] as $sdc){
                $typo=$sdc['ownership'];
                $sna=$sdc['state'];
               $atp=substr($typo,1,3);
               $ttp=substr($tp,1,3);
              if($tp!='Govt-Society'){
                  if($val==$sna && $ttp==$atp){
                
             
             $in=$sdc['name'];
             $ci=$sdc['city'];
             $ad=$sdc['admissionCapacity'];
             $hb=$sdc['hospitalBeds'];
             $sn=$sdc['state'];
             $tpe=$sdc['ownership'];
             
             ?>
              

                                        <tr>
                                            <td> <?php echo $in; ?> </td>
                                            <td > <?php echo $ci; ?> </td>
                                            <td> <?php echo $ad; ?> </td>
                                            <td > <?php echo $hb; ?> </td>
                                                
                                            
                                        </tr>
                                  
                                    
                                     
                                
             
             <?php
             
            } 
              } 
              else{
                  if($val==$sna && $tp==$typo){
                
             
             $in=$sdc['name'];
             $ci=$sdc['city'];
             $ad=$sdc['admissionCapacity'];
             $hb=$sdc['hospitalBeds'];
             $sn=$sdc['state'];
             $tpe=$sdc['ownership'];
             
             ?>
              

                                        <tr>
                                            <td> <?php echo $in; ?> </td>
                                            <td > <?php echo $ci; ?> </td>
                                            <td> <?php echo $ad; ?> </td>
                                            <td > <?php echo $hb; ?> </td>
                                                
                                            
                                        </tr>
                                  
                                    
                                     
                                
             
             <?php
             
            } 
              }
           
            //echo $sdc['ownership'].'<br>';
            
        }
            
        
        }?>                


                             

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
          

<br><br><br><br><br><br>
<nav class="navbar  navbar-expand-lg navbar-light bg-dark">
    <h6 class="fot">Made by-Jayakumar for Flipr hackathon</h6>
    
    
  </nav>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

                   
    </body>
</html>