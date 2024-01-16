<?php
include("../hf/nav.php");
require_once("../db/db.php");

if (isset($_POST['sub'])) {
  $role = $_POST['role'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $streat = $_POST['streat'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $country = $_POST['country'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $jdate = $_POST["jdate"];
  $tmp_name = $_FILES["img"]["tmp_name"];
  $path = "../upload/" . $_FILES["img"]["name"];
  $nm = move_uploaded_file($tmp_name, $path);
  $img = $path;
  error_log($tmp_name . "\n", 3, '/var/www/html/test.log');
  error_log($path . "\n", 3, '/var/www/html/test1.log');
  $dep = $_POST['dep'];
  $uname = $_POST['uname'];
  $pass = $_POST['pass'];
  $cpass = $_POST['cpass'];

  $insertdata = new db;
  $sql = $insertdata->insert($role, $fname, $lname, $streat, $city, $state, $country, $contact, $email, $gender, $dob, $jdate, $img, $dep, $uname, $pass);
  if ($sql) {

    header("location:../login/index.php");
  } else {
    echo "<div class='alert alert-danger mt-4'>
            <h4 align='center'>  invalid input please try again  </h4>
            </div>";
    header("refresh:2,../register/index.php");
  }
}
?>

<style>
  .regb {
    display: none !important;
  }
  label#gender-error {
    position: relative;
    top: 50px !important;
    right: 60px;
  }
  #gender-error.error {
    margin-top: 0px;
  }
  .cate {
    display: none !important;
  }
  #adsh {
    display: none !important;
  }
</style>
<div class="container">
  <h2> Registration </h2>
  <form id="reg" class="formid" action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label for="">select role</label>
      <select name="role" class="form-control" id="role">
        <option value="">select role</option>
        <option value="user">user</option>
        <option value="admin">admin</option>
      </select>
    </div>

    <div class="form-group">
      <label for="">First Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
    </div>

    <div class="form-group">
      <label for="">Last Name:</label>
      <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
    </div>

    <div class="form-group">
      <label for="">Streat :</label>
      <input type="text" class="form-control" id="streat" placeholder="Enter Streat" name="streat">
    </div>

    <div class="form-group">
      <label for="">City :</label>
      <select name="city" class="form-control" id="city">
        <option value=""> select your city </option>
        <option value="rajkot"> rajkot</option>
        <option value="surat">surat</option>
        <option value="ahmedabad">ahmedabad</option>
        <option value="Vadodara">Vadodara</option>
        <option value="Gandhinagar">Gandhinagar</option>
      </select>
    </div>

    <div class="form-group">
      <label for="">State :</label>
      <select name="state" class="form-control" id="state">
        <option value=""> select your State </option>
        <option value="gujrat">gujrat</option>
        <option value="UttarPradesh">Uttar Pradesh</option>
        <option value="Maharashtra">Maharashtra</option>
      </select>
    </div>

    <div class="form-group">
      <label for="">Country :</label>
      <select name="country" class="form-control" id="">
        <option value="">select your Country </option>
        <option value="india"> INDIA </option>
        <option value="india">USA</option>

      </select>
    </div>

    <div class="form-group">
      <label for="">Contact No :</label>
      <input type="text" name="contact" class="form-control" id="cont" placeholder="Enter Contact number">
    </div>

    <div class="form-group">
      <label for="">Email ID :</label>
      <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email ID">
    </div>

    <div class="form-group g">
      <label for="">GENDER : </label>
      <br>
      <label for="html">Male :</label>
      <input type="radio" id="male" name="gender" value="male"><br>
      <label for="css">Female :</label>
      <input type="radio" id="female" name="gender" value="female">
    </div>
    <br>
    <div class="form-group">
      <label for="">Date of Brith</label>
      <input type="date" name="dob" class="form-control" min="1980-01-01" max="2023-02-16"
        placeholder="Enter Date of Brith">
    </div>

    <div class="form-group">
      <label for="">joining Date</label>
      <input type="date" name="jdate" class="form-control" min="2023-02-17" placeholder="Enter joining Date">
    </div>

    <div class="form-group">
      <label for="">Select image</label>
      <input type="file" id="img" name="img" class="form-control">
    </div>

    <div class="form-group">
      <label for="">Department :</label>
      <select name="dep" class="form-control" id="">
        <option value="">select Department </option>
        <option value="it">IT</option>
        <option value="accounts"> Accounts </option>
        <option value="services">Services</option>
        <option value="marketing"> Marketing </option>
      </select>
    </div>

    <div class="form-group">
      <label for="">User Name</label>
      <input type="text" name="uname" class="form-control" placeholder="Uaer Name">
    </div>

    <div class="form-group">
      <label for="">Password </label>
      <input type="password" name="pass" id="pass" class="form-control" placeholder="Password">
    </div>

    <div class="form-group">
      <label for="">Confirm Password </label>
      <input type="password" class="form-control" name="cpass" placeholder="Confirm Password">
    </div>

    <button type="submit" name="sub" class="btn btn-default">Submit</button>
    <button type="reset" class="btn btn-default">reset</button>

  </form>
</div>
<script>
  $().ready(function () {
    var value = $("#pass").val();

    $.validator.addMethod("checklower", function (value) {
      return /[a-z]/.test(value);
    });
    $.validator.addMethod("checkupper", function (value) {
      return /[A-Z]/.test(value);
    });
    $.validator.addMethod("checkdigit", function (value) {
      return /[0-9]/.test(value);
    });
    $.validator.addMethod("checkspcial", function (value) {
      return /[~`!@#$%^&*()--+={}\[\]|\\:;"'<>,.?/_₹]/.test(value);
    });
    $.validator.addMethod("pwcheck", function (value) {
      return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) && /[a-z]/.test(value) && /\d/.test(value) && /[A-Z]/.test(value);
    });

    var evalue = $("#email").val();

    $.validator.addMethod("chkem", function (evalue) {
      return /[@]/.test(evalue);

    });

    $.validator.addMethod("cem", function (evalue) {
      return /[.]/.test(evalue);

    });

    var nvalue = $("#cont").val();
    $.validator.addMethod("chknum", function (nvalue) {
      return /[0-9]/.test(nvalue);
    });
    $("#reg").validate({
      // in 'rules' user have to specify all the constraints for respective fields
      rules: {
        role: {
          required: true,
        },
        fname: {
          required: true,
          lettersonly: true
        },
        lname: {
          required: true,
          lettersonly: true
        },
        streat: {
          required: true,
        },
        city: {
          required: true,
        },
        state: {
          required: true,
        },
        country: {
          required: true,
        },
        contact: {
          required: true,
          minlength: 10,
          maxlength: 10,
          chknum: true,
        },
        email: {
          required: true,
          email: true,
          chkem: true,
          cem: true
        },
        gender:
        {
          required: true,
        },
        dob: {
          required: true,
        },
        jdate: {
          required: true,
        },
        img: {
          required: true,
        },
        dep: {
          required: true,
        },
        uname: {
          required: true,
          minlength: 5 //for length of lastname
        },
        pass: {
          required: true,
          minlength: 8,
          checklower: true,
          checkupper: true,
          checkdigit: true,
          checkspcial: true,
        },
        cpass: {
          required: true,
          minlength: 8,
          equalTo: "#pass" //for checking both passwords are same or not
        },
      },
      // in 'messages' user have to specify message as per rules
      messages: {
        role: {
          required: "please select thse role"
        },
        fname: {
          required: " Please enter your firstname",
          lettersonly: "please enter only alpabetic values",
        },
        lname: {

          required: " Please enter your lastname",
          lettersonly: "please enter only alpabetic values",
        },
        streat: {
          required: "please enter streat",
        },
        city: {
          required: "please select your city",
        },
        state: {
          required: "please select your state",
        },
        country: {
          required: "please select your country",
        },
        contact:
        {
          required: "please enter your contact number",
          minlength: "please enter 10 digit number",
          maxlength: "please enter 10 digit number",
          chknum: "please enter only numbers",
        },
        gender: {
          required: "please select your gender",
        },
        dob: {
          required: "this field required",
        },
        jdate: {
          required: "this field required",
        },
        email: {
          //  required:"Enter valiad  emial",
          email: "please enter valid email",
          chkem: "plese enter valiad email id",
          cem: "please enter valid email ",
        },
        img: {
          required: "please upload your image",
        },
        dep: {
          required: "please select your department",
        },
        uname: {
          required: " Please enter a username",
          minlength: " Your username must consist of at least 5 characters"
        },
        pass: {
          required: " Please enter a password",
          checkupper: "password must consist 1 upper case letter",
          minlength: " Your password must be consist of at least 8 characters",
          checklower: "password must consist 1 lower case letter",
          checkdigit: "password must consist 1 digit ",
          checkspcial: "password must consist 1 spacial charecter"
        },
        cpass: {
          required: " Please ReEnter a password",
          minlength: " Your password must be consist of at least 8 characters",
          equalTo: " Please enter the same password as above"
        },
      }
    });
  });
</script>
<?php
include("../hf/footer.php");
?>