<?php

include("../hf/nav.php");
require_once("login.php");
?>
<style>
    .legb {
        display: none !important;
    }
    #adsh {
        display: none !important;
    }
    .cate {
        display: none !important;
    }
</style>
<div class="container">
    <h2> Login </h2>
    <form class="formid" id="login" name="login" action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">select role</label>
            <select name="role" class="form-control" id="role" data-bvalidator="required">
                <option value="">select role</option>
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">EMAIL ID:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email"
                data-bvalidator="required">
        </div>
        <div class="form-group">
            <label for="">Password :</label>
            <input type="password" class="form-control" id="pass" placeholder="Enter Password" name="pass"
                data-bvalidator="required">
        </div>
        <button type="submit" name="log" class="btn btn-default">Login</button>
        <button type="reset" class="btn btn-default">reset</button>
    </form>
</div>
<script>
    $().ready(function () {
        var evalue = $("#email").val();
        $.validator.addMethod("chkem", function (evalue) {
            return /[@]/.test(evalue);
        });
        $.validator.addMethod("cem", function (evalue) {
            return /[.]/.test(evalue);
        });
        $("#login").validate({
            // in 'rules' user have to specify all the constraints for respective fields
            rules: {
                role: "required",
                email: {
                    required: true,
                    chkem: true,
                    cem: true,
                },
                pass: {
                    required: true,
                    minlength: 8, //for length of lastname
                    maxlength: 20,
                },
                password: {
                    required: true,
                    minlength: 5,
                },
                confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password" //for checking both passwords are same or not
                },
                agree: "required"
            },
            // in 'messages' user have to specify message as per rules
            messages: {
                role: " Please select role",
                email: {
                    required: "Please enter your email id",
                    chkem: "please enter valiad email",
                    cem: "please enter valid email",
                },
                pass: {
                    required: "please entert password",
                },
                pass: {
                    required: " Please enter a password",
                    minlength: " Your password must be consist of at least 8 characters"
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