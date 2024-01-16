<?php
include("../login/login.php");
session_start();

if (!isset($_SESSION['uid']) && !isset($_SESSION["uemail"])) {
  header("location:../login/index.php");
}
$uid = $_SESSION['uid'];
$s = new db();
$gh = $s->showuserdata($uid);
$row = mysqli_fetch_array($gh);
?>
<style>
  #adsh,
  #dep {
    display: none;
  }

  .cate {
    display: none !important;
  }
</style>

<div class="id">
  <ul>
    <li> <img src="<?php echo $row['images']; ?>" width="50px" height="50px" alt=""> </li>
    <li>
      <?php echo $row['email']; ?>
    </li>
  </ul>
</div>
<div class="user">
  <table class="utable">
    <tr>
      <th> user id :</th>
      <td>
        <?php echo $row['rid']; ?>
      </td>
    </tr>
    <tr>
      <th> role :</th>
      <td>
        <?php echo $row['role']; ?>
      </td>
    </tr>

    <tr>
      <th> Firstname : </th>
      <td>
        <?php echo $row['fristname']; ?>
      </td>
    </tr>

    <tr>
      <th> lastname : </th>
      <td>
        <?php echo $row['lastname']; ?>
      </td>

    </tr>
    <tr>
      <th> streat : </th>
      <td>
        <?php echo $row['streat']; ?>
      </td>

    </tr>
    <tr>
      <th> city : </th>
      <td>
        <?php echo $row['city']; ?>
      </td>

    </tr>
    <tr>
      <th> state : </th>
      <td>
        <?php echo $row['state']; ?>
      </td>

    </tr>
    <tr>
      <th> country : </th>
      <td>
        <?php echo $row['country']; ?>
      </td>

    </tr>
    <tr>
      <th> contact no : </th>
      <td>
        <?php echo $row['contact_no']; ?>
      </td>

    </tr>
    <tr>
      <th> Email : </th>
      <td>
        <?php echo $row['email']; ?>
      </td>

    </tr>
    <tr>
      <th> Gender : </th>
      <td>
        <?php echo $row['gender']; ?>
      </td>

    </tr>
    <tr>
      <th> date of brith : </th>
      <td>
        <?php echo $row['date_of_brith']; ?>
      </td>

    </tr>
    <tr>
      <th> joining date : </th>
      <td>
        <?php echo $row['joining_date']; ?>
      </td>

    </tr>
    <tr>
      <th> department : </th>
      <td>
        <?php echo $row['department']; ?>
      </td>
    </tr>
    <tr>
      <th> username : </th>
      <td>
        <?php echo $row['user_name']; ?>
      </td>
    </tr>
  </table>
</div>
<?php
include("../hf/footer.php");
?>