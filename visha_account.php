<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Online Car Parking & Rent Management System</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
  <style>
  
    <style>
      body {
        font-family: Arial;
        font-size: 17px;
        padding: 8px;
        }

      * {
        box-sizing: border-box;
        }
        .col-50 {       
        flex: 50%;
        }
        .col-50{
          padding: 0 16px;
        }
        input[type=text] {
        width: 100%;
        margin-bottom:15px;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 3px;
        }
        label {
        margin-bottom: 5px;
        display: block;      
        }
        .icon-container {
        margin-bottom: 10px;
        padding: 16px 0;
        font-size: 40px;
        text-align: center;
        }
        .btn {
        background-color: #4CAF50;
        color: white;
        padding: 12px;
        margin: 10px 0;
        border: none;
        width: 100%;
        border-radius: 3px;
        cursor: pointer;
        font-size: 17px;
        }
        .btn:hover {
        background-color: #45a049;
        }
        .visa{
          margin: auto;
          width: 60%;
          background-color:#C9CCF7;

        }
        .visa_card{
            width: 100%;
            margin-bottom:15px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .Exp_months{
            width: 100%;
            margin-bottom:15px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }


  </style>
</head>
<body>
	
  <div class="visa">
    <form action="">
	     <div class="col-50">
            <h2 style="text-align:center;padding-top:5px;">Payment</h2>

            <p style="text-align:center;margin-bottom:0px;font-size:16px;">Accepted Cards</p>

            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>

            <label for="cname">Name on Card</label>
            <select name="visa_card" class="visa_card">
                <option value="visa">visa</option>
                <option value="amex">amex</option>
                <option value="mastercard">mastercard</option>
                <option value="discover">discover</option>
            </select>

            <!--
            <input type="text" id="cname" name="cardname" placeholder="visa/amex/mastercard/discover"> -->

            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>

            <label for="expmonth">Exp Month</label>
            <select name="months" class="Exp_months">
                <option value="january">January</option>
                <option value="february">February</option>
                <option value="march">March</option>
                <option value="april">April</option>
                <option value="may">May</option>
                <option value="june">June</option>
                <option value="july">July</option>
                <option value="august">August</option>
                <option value="september">September</option>
                <option value="october">October</option>
                <option value="november">November</option>
                <option value="december">December</option>
            </select>
            <!--
            <input type="text" id="expmonth" name="expmonth" placeholder="December">-->

            
            <label for="expyear">Exp Year</label>
            <input type="text" id="expyear" name="expyear" placeholder="2020" required >

            <label for="cvv">CVV</label>
            <input type="text" id="cvv" name="cvv" placeholder="352" required > 
            </label>      

            <a href="#"><input type="submit" value="Continue to checkout" class="btn"></a>
        </div>
     </form>
  </div>
</body>
</html>