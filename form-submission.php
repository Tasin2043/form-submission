<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Form Submission</title>
</head>
<body>
  <h1>REGISTRATION FORM</h1>


<fieldset>
   
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
 <legend>Basic Information:</legend>
   <br> <label for="firstname">FIRST NAME <span style="color: red;">*</span>:</label>
        <input type="text" id="firstname" name="firstname"><br><br>


        <label for="lastname">LAST NAME <span style="color: red;">*</span>:</label>
        <input type="text" id="lastname" name="lastname"><br><br>

    
<label>GENDER<span style="color: red;">*</span>:</label> 
<input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="female"> Female<br><br>


<label for="Birthday">BIRTHDAY<span style="color: red;">*</span>:</label>
    <input type="date" id="birthday" name="birthday"><br><br>


    <label for="relagion">RELAGION<span style="color: red;">*</span>:</label>
  <select class="form-control dropdown" id="religion" name="religion">
    <option value="" selected="selected" disabled="disabled">-- select one --</option>
    <option value="Islam">Islam</option>
    <option value="Hindu">Hindu</option>
    <option value="Christan">Christan</option> <br><br>

     <label>  </label>
      <input ><br><br>
 
</form>
</fieldset>
</html>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
  <fieldset>
    <legend>Contact Information:</legend>

  <br><label for="paddress">PRESENT ADDRESS <span style="color: red;">*</span>:</label>
        <input type="textarea" id="paddress" name="paddress"><br><br>

   <label for="address">PERMANENT ADDRESS <span style="color: red;">*</span>:</label>
        <input type="textarea" id="address" name="address"><br><br>


    <label for="phone">Phone<span style="color: red;">*</span>:</label>
    <input type="tel" id="phone" name="phone"><br><br>

     <label for="email">Email<span style="color: red;">*</span>:</label>
    <input type="email" id="email" name="email"><br><br>

     <label for="website">PERSONAL WEBSITE LINK<span style="color: red;">*</span>:</label>
    <input type="url" id="website" name="website"><br><br>

  </fieldset>
</form>
<form action="/action_page.php">
  <fieldset>
    <legend>Account Information:</legend>

    <br><label for="username">USER NAME <span style="color: red;">*</span>:</label>
        <input type="text" id="username" name="username"><br><br>

   <label for="password">PASSWORD <span style="color: red;">*</span>:</label>
        <input type="password" id="password" name="password"><br><br>

 </form>
 </fieldset>

 <br><br><input type="submit" name="submit" value="REGISTER">


</body>
</html>
