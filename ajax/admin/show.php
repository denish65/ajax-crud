<?php
session_start();
if (!isset($_SESSION['aid']) && !isset($_SESSION['email'])) {
  header(("location:../login/index.php"));
}
if (isset($_GET['del'])) {
  $rid = $_GET['del'];
  $deletedata = new db;
  $sql = $deletedata->delete($rid);
  if ($sql) {
    echo "<div class='alert alert-danger mt-4'>
    <h4 align='center'>Record deleted success fully </h4>
    </div>";
    header("refresh:2,../admin/index.php");
  }
}
$aid = $_SESSION['aid'];
$h = new db();
$sh = $h->showadmindata($aid);
$arow = mysqli_fetch_array($sh);
?>

<div class="aid">
  <ul>
    <li> <img src="<?php echo $arow['images']; ?>" width="50px" height="50px" alt=""> </li>
    <li>
      <?php echo $arow['email']; ?>
    </li>
  </ul>
</div>

<div class="con">
  <h2>Admin </h2>
  <p>PHP CRUD Operations using PHP OOP</p>
  <table class="datatable">
    <thead>
      <tr>
        <th>rid</th>
        <th> role </th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th> streat </th>
        <th> city </th>
        <th> state</th>
        <th> country</th>
        <th> contact no </th>
        <th> Email </th>
        <th> Gender </th>
        <th> date of brith </th>
        <th> joining date </th>
        <th> images </th>
        <th> department </th>
        <th> username </th>
        <th> Edit </th>
        <th> delete </th>
      </tr>
    </thead>
    <tbody>
      <?php
      $fetchdata = new db();
      $sql = $fetchdata->fetchdata();
      while ($row = mysqli_fetch_array($sql)) {
        ?>
        <tr>
          <td>
            <?php echo $row['rid']; ?>
          </td>
          <td>
            <?php echo $row['role']; ?>
          </td>
          <td>
            <?php echo $row['fristname']; ?>
          </td>
          <td>
            <?php echo $row['lastname']; ?>
          </td>
          <td>
            <?php echo $row['streat']; ?>
          </td>
          <td>
            <?php echo $row['state']; ?>
          </td>
          <td>
            <?php echo $row['city']; ?>
          </td>
          <td>
            <?php echo $row['country']; ?>
          </td>
          <td>
            <?php echo $row['contact_no']; ?>
          </td>
          <td>
            <?php echo $row['email']; ?>
          </td>
          <td>
            <?php echo $row['gender']; ?>
          </td>
          <td>
            <?php echo $row['date_of_brith']; ?>
          </td>
          <td>
            <?php echo $row['joining_date']; ?>
          </td>
          <td> <img src="<?php echo $row['images']; ?>" width="80px" height="80px" alt=""> <br> </td>
          <td>
            <?php echo $row['department']; ?>
          </td>
          <td>
            <?php echo $row['user_name']; ?>
          </td>
          <td> <a href="../update/edit.php?id=<?php echo $row['rid']; ?>"> <i class="bi bi-pencil-square text-info"></i>
            </a></td>
          <td> <a href="index.php?del=<?php echo $row['rid']; ?>"
              onclick="return confirm('are you sure to delete this recode')"> <i class="bi bi-trash text-danger"></i> </a>
          </td>
        </tr>
      <?php }
      ?>
    </tbody>
  </table>
</div>
<?php
include("../hf/footer.php")
  ?>