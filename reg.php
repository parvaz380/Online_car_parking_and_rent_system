
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #2c8770;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: center;
  margin-top: 0px;
  right: 28px;
  width: 550px;
margin-left: 30px;
border-radius: 5px;
 font-size: 50px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: center;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
  margin-top:0px;
  margin-left: 30px;
  border-radius: 3px;
}

/* Add styles to the form container */
.form-container {
  max-width: 550px;
  padding: 10px;
  background-color: #339966;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 16px 20px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #003333;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
   border-radius: 3px;
   font-size: 15px;
}
h1{
  background-color: orange;
  border-radius: 3px;
  width: 950px;
  height: 90px;
  text-align: center;
  padding-top: 12px;
  font-family: Snap ITC;
   font-size: 50px;
}
h6{
   font-size: 15px;
    background-color: orange;
    text-align: center;
 border-radius: 3px;
 padding-top: 5px;
 margin-top: 5px;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>

<marquee> <h1>WELCOME TO OUR SYSTEM     !!</h1></marquee>

<button class="open-button" onclick="openForm()">Open Form</button>



<div class="form-popup" id="myForm">
  <form action="connect.php" method="post"> 
    <div class="form-container">
  
<h2> Please Enter your vehicles details:-</h2>
<h3><b>**All the fields are valuable...</b> </h3>

   <div class="form-group">
      <label for="carBrand">1. Car Brand:</label>
      <input type="text" class="form-control" id="carBrand" name ="carBrand"  placeholder="Honda/ Car/ etc" name="carBrand" required/>
     
    </div>
    <div class="form-group">
      <label for="carModel">2. Car Model:</label>
      <input type="text" class="form-control" id="carModel" name="carModel"placeholder="2017/2018" name="carModel" required/>


    </div>
    <div class="form-group">
      <label for="registrationNumber">3. Registration Number:</label>
      <input type="text" class="form-control" id="registrationNumber" name="registrationNumber" placeholder="registration number" name="registrationNumber" required/>
      

<div class="form-group">
      <label for="carColor">4. Car Colour:</label>
      <input type="text" class="form-control" id="carColor" name="carColor" placeholder="red/green/black" name="Car Colour" required/>

      <div class="form-group">
      <label for="number">5. Phone Number:
      </label>
      <input type="number" class="form-control" idLogin="phoneNumber" name="phoneNumber" placeholder="01533" name="number" required/>

       <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree on terms & conditions.
        <div class="valid-feedback">Valid.</div>
        
      </label>
    </div>
<button type="reset" class="btn btn-danger" value="Reset">Reset</button>
<button type="submit" class="btn">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>


   <h6>Note* After submit kindly reset your info & then close it <br>THANK YOU!</h6>
</div>

<div class="panel-footer text-right">
  <small>&copy; Online Car Parking</small>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>
