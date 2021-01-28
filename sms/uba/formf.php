<!DOCTYPE html>
<html>

  <head>
<link rel="stylesheet" type="text/css" href="style5.css" >
</head>
<body>
<div class="form-style-6">
<form action="db1.php" method="POST">
<fieldset>
<legend><span class="number"></span> Student Info</legend>
First Name <input type="text" name="name" placeholder="First Name *">
Father's Name<input type="text" name="faname" placeholder="Father's Name *">
Mother's Name <input type="text" name="moname" placeholder="Mother's Name *">
Last Name<input type="text" name="lname" placeholder="Last Name*">
<label for="job">Gender:</label>
<select id="job" name="gender">
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  
  </select>   


<label for="job">Caste:</label>
<select id="job" name="caste">
  <option value="SC">SC</option>
  <option value="ST">ST</option>
  <option value="OBC">OBC</option>
  <option value="OPEN">OPEN</option>
  </select>   

<label for="job">Class:</label>
<select id="job" name="class">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
</select> 

<label for="job">Physically Challenged:</label>
<select id="job" name="physical">
  <option value="Yes">Yes</option>
  <option value="No">No</option>
</select>

Bank Name<input type="text" name="bname" placeholder="Bank Name*">
Bank Account no.<input type="text" name="acc" placeholder="Account no*">

Address<textarea name="address" placeholder="Address"></textarea>
Taluka<textarea name="taluka" placeholder="Taluka"></textarea>
District<textarea name="district" placeholder="District"></textarea>
State<textarea name="state" placeholder="State"></textarea>
Country<textarea name="country" placeholder="Country"></textarea>

  <legend><span class="number"></span> Previous School Info</legend> 
  <textarea name="pre" placeholder="About Your Previous School"></textarea>


</fieldset>
<input type="submit" value="Submit" />
</form>
</div>
</body>
</html>