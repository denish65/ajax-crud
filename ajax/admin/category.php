<?php
session_start();
if (!isset($_SESSION['aid']) && !isset($_SESSION['role'])) {
  header("location:../login/index.php");
}
include("../hf/nav.php");
?>
<div class="well" style="margin-left:auto; margin-right:auto; margin-top: 30px; padding:auto; width:70%;">
  <button type="button" id="add" class="btn btn-primary" style="float: right;"> Add Category </button>
  <button type="button" id="m" class="btn btn-primary" style="float: right; margin-right: 20px;"> add Images </button>
  <br><br>
  <div id="tablec"></div>
  <div id="alert" class="alert alert-success" style="display:none;">
    <center><span id="alerttext"></span></center>
  </div>
</div>
<p id="demo"></p>

<?php
include("../hf/footer.php");
include("model4.php");
include("model2.php");
?>
<script src="cate.js"></script>

<script>
  $(document).ready(function () {

    $('#imgbutton').on('click', function () {
      var form_data = new FormData();
      var cate = $("#catname").val();
      console.log(cate);
      form_data.append("catname", cate);
      // Read selected files
      var totalfiles = document.getElementById('image').files.length;
      for (var index = 0; index < totalfiles; index++) {
        form_data.append("image[]", document.getElementById('image').files[index]);
      }
      // AJAX request
      $.ajax({
        url: 'insertimages.php',
        type: 'post',
        data: form_data,
        dataType: 'json',
        contentType: false,
        processData: false,
        success: function () {
          showTable();
          // $('#alert').slideDown();
          $('#demo').text('Department Added Successfully');
        }
      });
    });
  });

</script>