<?php
include("../hf/nav.php");

$updatedata = new db();
if (isset($_POST['update'])) {
  $rid = intval($_GET['id']);
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $streat = $_POST['streat'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $country = $_POST['country'];
  $contact = $_POST['contact'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $jdate = $_POST["jdate"];

  $tmp_name = $_FILES["img"]["tmp_name"];
  $path = "../upload/" . $_FILES["img"]["name"];
  $nm = move_uploaded_file($tmp_name, $path);
  error_log($tmp_name . "\n", 3, '/var/www/html/update.log');
  error_log($path . "\n", 3, '/var/www/html/update2.log');
  $img = $path;
  $dep = $_POST['dep'];
  $uname = $_POST['uname'];

  $sql = $updatedata->update($fname, $lname, $streat, $city, $state, $country, $contact, $gender, $dob, $jdate, $img, $dep, $uname, $rid);
  if ($sql) {
    echo "<div class='alert alert-success mt-4'>
    <h2 align='center'>Record updated   Succesfully</h2>
     </div>";
    header("location:../admin/index.php");
  } else {
    echo "<script>alert('some thing went wrong please try again');</script>";
  }
}
?>
<div class="container">
  <h2> EDIT </h2>
  <?php
  $uid = intval($_GET['id']);
  $editdata = new db();
  $sql = $editdata->edit($uid);
  while ($row = mysqli_fetch_array($sql)) {
    ?>
    <form enctype="multipart/form-data" id="edit" class="formid" action="" method="post">

      <div class="form-group">
        <label for="">First Name:</label>
        <input type="text" class="form-control" value="<?php echo $row['fristname']; ?>" id="fname"
          placeholder="Enter First Name" name="fname" data-bvalidator="required">
      </div>

      <div class="form-group">
        <label for="">Last Name:</label>
        <input type="text" class="form-control" id="lname" value="<?php echo $row['lastname']; ?>"
          placeholder="Enter Last Name" name="lname" data-bvalidator="required">
      </div>

      <div class="form-group">
        <label for="">Streat :</label>
        <input type="text" class="form-control" id="streat" value="<?php echo $row['streat']; ?>"
          placeholder="Enter Streat" name="streat" data-bvalidator="required">
      </div>

      <div class="form-group">
        <label for="">City :</label>
        <select name="city" class="form-control" id="city" data-bvalidator="required">
          <option value="rajkot" <?php if ($row['city'] == "rajkot")
            echo 'selected="selected"'; ?>> rajkot</option>
          <option value="surat" <?php if ($row['city'] == "surat")
            echo 'selected="selected"'; ?>>surat</option>
          <option value="ahmedabad" <?php if ($row['city'] == "ahmedabad")
            echo 'selected="selected"'; ?>>ahmedabad</option>
          <option value="Vadodara" <?php if ($row['city'] == "Vadodara")
            echo 'selected="selected"'; ?>>Vadodara</option>
          <option value="Gandhinagar" <?php if ($row['city'] == "Gandhinagar")
            echo 'selected="selected"'; ?>>Gandhinagar
          </option>
        </select>
      </div>

      <div class="form-group">
        <label for="">State :</label>
        <select name="state" class="form-control" id="state" data-bvalidator="required">
          <option value="gujrat" <?php if ($row['state'] == "gujrat")
            echo 'selected="selected"'; ?>>gujrat</option>
          <option value="UttarPradesh" <?php if ($row['state'] == "UttarPradesh")
            echo 'selected="selected"'; ?>>Uttar
            Pradesh</option>
          <option value="Maharashtra" <?php if ($row['state'] == "Maharashtra")
            echo 'selected="selected"'; ?>>Maharashtra
          </option>
        </select>
      </div>

      <div class="form-group">
        <label for="">Country :</label>
        <select name="country" class="form-control" id="" data-bvalidator="required">
          <option value="india" <?php if ($row['country'] == "india")
            echo 'selected="selected"'; ?>>INDIA</option>
          <option value="india">USA</option>
        </select>
      </div>

      <div class="form-group">
        <label for="">Contact No :</label>
        <input type="text" name="contact" value="<?php echo $row['contact_no']; ?>" class="form-control" id="cont"
          placeholder="Enter Contact number" data-bvalidator="required">
      </div>

      <div class="form-group">
        <label for="">Email :</label>
        <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control" id="email" disabled
          placeholder="Enter Contact number" data-bvalidator="required">
      </div>

      <div class="form-group g">
        <label for="">GENDER : </label>
        <br>
        <label for="html">Male :</label>
        <input type="radio" id="male" name="gender" <?php if ($row['gender'] == "male") {
          echo "checked";
        } ?>
          value="male"><br>
        <label for="css">Female :</label>
        <input type="radio" id="female" name="gender" <?php if ($row['gender'] == "female") {
          echo "checked";
        } ?>
          value="female">
      </div>

      <div class="form-group">
        <label for="">Date of Brith</label>
        <input type="date" name="dob" min="1981-01-01" max="2023-02-15" class="form-control"
          value="<?php echo $row['date_of_brith']; ?>" placeholder="Enter Date of Brith" data-bvalidator="required">
      </div>

      <div class="form-group">
        <label for="">joining Date</label>
        <input type="date" name="jdate" class="form-control" min="2023-02-15" value="<?php echo $row['joining_date']; ?>"
          placeholder="Enter joining Date" data-bvalidator="required">
      </div>

      <div class="form-group">
        <label for="">Select image</label>
        <input type="file" id="img" name="img" value="" class="form-control" data-bvalidator="required">
        <img src="<?php echo $row['images']; ?>" width="150px" height="150px" alt="">
      </div>

      <div class="form-group">
        <label for="">Department :</label>
        <select name="dep" class="form-control" id="" data-bvalidator="required">
          <option value="it" <?php if ($row['department'] == "it")
            echo 'selected="selected"'; ?>>IT</option>
          <option value="accounts" <?php if ($row['department'] == "accounts")
            echo 'selected="selected"'; ?>> Accounts
          </option>
          <option value="services" <?php if ($row['department'] == "services")
            echo 'selected="selected"'; ?>>Services
          </option>
          <option value="marketing" <?php if ($row['department'] == "marketing")
            echo 'selected="selected"'; ?>> Marketing
          </option>
        </select>
      </div>

      <div class="form-group">
        <label for="">User Name</label>
        <input type="text" name="uname" value="<?php echo $row['user_name']; ?>" class="form-control"
          placeholder="Uaer Name" data-bvalidator="required">
      </div>
    <?php } ?>
    <button type="submit" name="update" class="btn btn-default">update</button>
  </form>
</div>
<style>
  .regb,
  .legb {
    display: none !important;
  }

  .cate {
    display: none !important;
  }
</style>
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

    $("#edit").validate({
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
        email: {
          required: true,
          email: true,
          chkem: true,
          cem: true
        },
        contact: {
          required: true,
          minlength: 10,
          maxlength: 10,
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
        email: {
          email: "please enter valid email",
          chkem: "plese enter valiad email id",
          cem: "please enter valid email ",
        },
        contact:
        {
          required: "please enter your contact number",
          minlength: "please enter 10 digit number",
          maxlength: "please enter 10 digit number",
        },
        gender: {
          required: "please select your gender",
        },
        dob: {
          required: "please select your date of brith",
        },
        jdate: {
          required: "please enter your joining date",
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
          minlength: " Your password must be consist of at least 8 characters",
          checkupper: "password must consist 1 upper case letter",
          checklower: "password must consist 1 lower case letter",
          checkdigit: "password must consist 1 digit ",
          checkspcial: "password must consist 1 spacial charecter"
        },
        cpass: {
          required: " Please enter a password",
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