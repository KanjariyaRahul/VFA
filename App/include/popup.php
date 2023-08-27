<!-- Pop-Up.php was included in Right-section.php -->
<!-- Email Verification Pop-Up -->
<?php
$farmer_verification_mail_id = $_SESSION['fid'];
$sql = "SELECT * FROM `farmer` WHERE id = '$farmer_verification_mail_id'";
if ($farmer_verification_mail_result = mysqli_query($con, $sql)) {
    $rows = mysqli_fetch_all($farmer_verification_mail_result, MYSQLI_ASSOC);
    if (mysqli_num_rows($farmer_verification_mail_result) == 1) {
        if ($rows[0]['email-status'] == "not-verified") {
            echo '<div class="popup-wrapper">
                <div class="pop-up">
                    <div class="pop-up-title">
                        <h2>Please Verify your Eamil</h2>
                    </div> 
                    <br>
                    <div class="pop-up-body">
                        <p>
                            Hi '.$rows[0]["name"].',
                            <br>
                            Thanks for getting started with our VFA -AI Farming Technology!
                            <br>
                            We need a little more information to complete your registration, including a confirmation of your email address.
                            <br>
                        </p>
                    </div>
                    <br>
                    <div class="pop-up-footer">
                        <button type="button" onclick="resendMailVerification();">Resend Verification Mail</button>
                        <button type="button" onclick="$(\'.popup-wrapper\').hide()">Remind me Later</button>
                    </div>
                </div>
            </div>';
        }
    }
}
?>
<script>
    function resendMailVerification(){
        $('.popup-wrapper').hide();
        $.post({
            url: "../auth/resend-verifiation.php",
            success: function(response){
                if(response.status){
                    alertify.alert("Resend Verification Mail", "We have sent to another verification Email Please kindly verify you Mail Address to continue using Services of VFA - Ai Farming Technology");
                }
            },
            error: function (response){
                console.log(response.mail_status)
            }
        })
    }
</script>
