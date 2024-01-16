<?php
session_start();
if (!isset($_SESSION['aid']) && !isset($_SESSION['role'])) {
    header("location:../login/index.php");
}
include("../hf/nav.php");
?>
<style>
    table td {
        padding: 10px;
        margin: 10px;
    }
    .form-control {
        width: 100%;
    }
</style>
</head>
<body>
    <div class="container">
        <br />
        <select name="multi_search_filter" id="multi_search_filter" class="form-control selectpicker"><!--multiple-->
            <option value="">All </option>
            <?php
            include('../db/dbcon.php');
            $query = $conn->query("SELECT DISTINCT category FROM images ORDER BY category ASC");
            // while ($row = $query ->fetch_object()) {
            // $office = $row->office;
            //     echo '<option value="'.$office.'">'.$office.'</option>';    
            // }
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
            <?php } ?>
        </select>
        <input type="hidden" name="hidden_country" id="hidden_country" />
        <div style="clear:both"></div>
        <br />
        <div class="table-responsive" style="display: inline;">
            <table class="table  ">
                <tbody style="display: inline;">
                </tbody>
            </table>
        </div>
        <br />
        <br />
        <br />
    </div>
    <script>
        $(document).ready(function () {
            load_data();
            function load_data(query = '') {
                $.ajax({
                    url: "showgallery.php",
                    method: "POST",
                    data: { query: query },
                    success: function (data) {
                        $('tbody').html(data);
                    }
                })
            }
            $('#multi_search_filter').change(function () {
                $('#hidden_country').val($('#multi_search_filter').val());
                var query = $('#hidden_country').val();
                load_data(query);
            });
        });
    </script>