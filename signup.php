<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

input[type=text], select{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
input[type=email]{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
input[type=password]{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}


label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>
</head>
<body>

<div class="container" style="width:60%;margin-left:20%">
  <form action="insert_signup.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="fname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Gender</label>
      </div>
      <div class="col-75">
        <select id="country" name="gender">
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>
    </div>
     <div class="row">
      <div class="col-25">
        <label for="lname">UserName</label>
      </div>
      <div class="col-75">
        <input type="text" id="uname" name="uname" placeholder="Your username..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="pass">Enter Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="pass" name="pwd" placeholder="Your password..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="pass">Confirm Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="cpwd" name="" placeholder="Confirm password..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Email</label>
      </div>
      <div class="col-75">
        <input type="email" id="mail" name="email" placeholder="Your mail ID..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Mobile number</label>
      </div>
      <div class="col-75">
        <input type="text" id="mobile" name="mob1" placeholder="Your mobile number..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Alternete mobile number</label>
      </div>
      <div class="col-75">
        <input type="text" id="mobile" name="mob2" placeholder="Your mobile number..">
      </div>
    </div><hr>
 <div style="margin-left:17%">
 <div class="row">
      <div class="col-25">
        <p style="color:blue;font-size:20px;font-weight:bold;">Address</p>
      </div>
      <br>
      <div class="col-25">
        <input type="text" id="dno" name="dno" placeholder="Your Door number..">
      </div>
       <div class="col-25">
        <input type="text" id="area" name="area" placeholder="Your area..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <input type="text" id="city" name="city" placeholder="Your city..">
      </div>
      <div class="col-25">
        <input type="text" id="state" name="state" placeholder="Your state..">
      </div>
       <div class="col-25">
        <input type="text" id="pin" name="pin" placeholder="Your pincode..">
      </div>
    </div>
    <hr>

</div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

</body>
</html>
