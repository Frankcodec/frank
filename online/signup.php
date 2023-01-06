<!DOCTYPE html>
<html>
<head>
	<title>Sign Up for Surge</title>
	<link rel="stylesheet" type="text/css" href="./css/signup.css">
</head>
<body>
	<h1 style="text-align: center;font-family: Millik;font-size: 45px;color: #047aed; margin-bottom: 0;">Become Part of The Surge Family</h1>

	<form id="regForm" action="processsignup.php" method="POST">
<h1 style="font-family: Millik;color: #047aed;">Register:</h1>
<!-- One "tab" for each step in the form: -->
<div class="tab">Name:
 <input name="fname" placeholder="First name..." oninput="this.className = ''" style="margin-bottom: 15px; margin-left: 0;">
 <input name="lname" placeholder="Last name..." oninput="this.className = ''" style="margin-bottom: 15px; margin-left: 0;">
</div>
<div class="tab">Contact Info:
 <input type="email" name="email" placeholder="E-mail..." oninput="this.className = ''" style="margin-bottom: 15px; margin-left: 0;">
 <input type="tel" name="tel" placeholder="Phone Number..." oninput="this.className = ''" style="margin-bottom: 15px; margin-left: 0;">
 <input name="address" placeholder="Home address..." oninput="this.className = ''" style="margin-bottom: 15px; margin-left: 0;">
</div>
<div class="tab">Birthday and Gender:
 <input type="date" name="dob" placeholder="Date of Birth..." oninput="this.className = ''" style="margin-bottom: 15px; margin-left: 0;">
 <input type="Number" placeholder="Age" oninput="this.className = '' " style="margin-bottom: 15px;margin-left: 0;">
 <select id="set" onclick="code()" style="width: 102%;height: 35px;">
 	<option>Male</option>
 	<option>Female</option>
 </select>
 <input type="hidden" id="in" name="gender">
</div>
<div class="tab">Login Info:
 <input type="Password" name="password" placeholder="Password..." oninput="this.className = ''" style="margin-bottom: 15px;margin-left: 0;">
 <input type="password" placeholder=" Re-Type Password..." oninput="this.className = ''" style="margin-bottom: 15px;margin-left: 0;">
</div>
<div style="overflow:auto;">
 <div style="display: flex;flex-direction: row;justify-content: space-between;"><div>
 	<h3>Already have an account? <a href="login.php" style="text-decoration: none;"> Log in</a></h3></div><div>
 <button type="button" id="prevBtn" onclick="nextPrev(-1)" style="align-self: center;border: none; width: 125px; height: 45px; background: #047aed; color: #fff; border-radius: 15px;float:left;">Previous</button>
 <span style="margin-left: 15px;"><button type="button" id="nextBtn" onclick="nextPrev(1)" style="align-self: center;border: none; width: 125px; height: 45px; background: #047aed; color: #fff; border-radius: 15px;float:right;">Next</button></span></div>
 </div>
</div>
<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
 <span class="step"></span>
 <span class="step"></span>
 <span class="step"></span>
 <span class="step"></span>
</div>
</form>
<script type="text/javascript">
	function code(argument) {
		var set = document.getElementById('set').value;
		document.getElementById('in').value = set;
	}
</script>
<script type="text/javascript">
	var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab
function showTab(n) {
 // This function will display the specified tab of the form ...
 var x = document.getElementsByClassName("tab");
 x[n].style.display = "block";
 // ... and fix the Previous/Next buttons:
 if (n == 0) {
 document.getElementById("prevBtn").style.display = "none";
 } else {
 document.getElementById("prevBtn").style.display = "inline";
 }
 if (n == (x.length - 1)) {
 document.getElementById("nextBtn").innerHTML = "Submit";
 } else {
 document.getElementById("nextBtn").innerHTML = "Next";
 }
 // ... and run a function that displays the correct step indicator:
 fixStepIndicator(n)
}
function nextPrev(n) {
 // This function will figure out which tab to display
 var x = document.getElementsByClassName("tab");
 // Exit the function if any field in the current tab is invalid:
 if (n == 1 && !validateForm()) return false;
 // Hide the current tab:
 x[currentTab].style.display = "none";
 // Increase or decrease the current tab by 1:
 currentTab = currentTab + n;
 // if you have reached the end of the form... :
 if (currentTab >= x.length) {
 //...the form gets submitted:
 document.getElementById("regForm").submit();
 return false;
 }
 // Otherwise, display the correct tab:
 showTab(currentTab);
}
function validateForm() {
 // This function deals with validation of the form fields
 var x, y, i, valid = true;
 x = document.getElementsByClassName("tab");
 y = x[currentTab].getElementsByTagName("input");
 // A loop that checks every input field in the current tab:
 for (i = 0; i < y.length; i++) {
 // If a field is empty...
 if (y[i].value == "") {
 // add an "invalid" class to the field:
 y[i].className += " invalid";
 // and set the current valid status to false:
 valid = false;
 }
 }
 // If the valid status is true, mark the step as finished and valid:
 if (valid) {
 document.getElementsByClassName("step")[currentTab].className += " finish";
 }
 return valid; // return the valid status
}
function fixStepIndicator(n) {
 // This function removes the "active" class of all steps...
 var i, x = document.getElementsByClassName("step");
 for (i = 0; i < x.length; i++) {
 x[i].className = x[i].className.replace(" active", "");
 }
 //... and adds the "active" class to the current step:
 x[n].className += " active";
}
</script>
</body>
<style type="text/css">
	
</style>

</html>