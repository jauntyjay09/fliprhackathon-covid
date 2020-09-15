<!DOCTYPE HTML>
<html>
<head>
    <title>
        Covid
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="styl.css">
<script>
window.onload = function() {

var dataPoints = [];

var options =  {
	animationEnabled: true,
	theme: "light2",
	title: {
		text: "Deceased people"
	},
	axisX: {
		valueFormatString: "DD MMM YYYY",
	},
	axisY: {
		title: "No. of people",
		titleFontSize: 24
	},
	data: [{
		type: "spline", 
		yValueFormatString: "$#,###.##",
		dataPoints: dataPoints
	}]
};

function addData(data) {
	for (var i = 0; i < data.length; i++) {
		dataPoints.push({
			x: new Date(data[i].date),
			y: data[i].units
		});
	}
	$("#chartContainer").CanvasJSChart(options);

}
$.getJSON("https://canvasjs.com/data/gallery/jquery/daily-sales-data.json", addData);

}
</script>
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
   <br> <br> <br> <br>   
      <div class="card mx-auto" style="width: 50rem;">
        <div class="card-body">
          <h5 class="card-title" style="text-align: center;">Check the Current Statistics</h5>
    
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
        <label for="inputState">AGE</label>
        <select id="inputState" class="form-control" required name="">
          <option >0-9</option>
          <option>10-19</option>
          <option>20-29</option>
          <option>30-39</option>
          <option>40-49</option>
          <option>50-59</option>
          <option>60-69</option>
          <option>70 and Above</option>
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">Gender</label>
        <select id="inputState" class="form-control" required name="">
          <option >Male</option>
          <option>Female</option>
          <option >Others</option>
          
        </select>
      </div>
    </div>
    <div class="form-row">
        <div class="col-md-5 mb-3">
            <label for="birthday">From:</label>
            <input type="date" id="birthday" required name="from">
            </div>
            <div class="col-md-5 mb-3">
                <label for="birthday">To:</label>
                <input type="date" id="birthday" required name="to">
                </div>
     </div>           
    
    <button class="btn btn-primary" type="submit">Check</button>
    </form>
    <br>
    <h5 class="card-title"></h5>
    </div>
    </div>
<br> 
<br>
<img class="maim" src="stay-safe.png" class="rounded float-left" alt="...">    
<div class="card mx-auto mapp float-right" id="chartContainer" ></div>



<nav class="navbar  navbar-expand-lg navbar-light bg-dark">
    <h6 class="fot">Made by-Jayakumar for Flipr hackathon</h6>
    
    
  </nav>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>

</body>
</html>