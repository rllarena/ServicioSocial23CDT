<?php
function generateOTP($length = 4) {
    $otp = '';
    $characters = '0123456789';
    $charactersLength = strlen($characters);

    for ($i = 0; $i < $length; $i++) {
        $otp .= $characters[rand(0, $charactersLength - 1)];
    }

    return $otp;
}

function storeOTPInDB($otp, $expirationTime) {
    // Perform database connection and store the OTP with its expiration time
    // Replace database_connection_details with your actual database connection code
    $conn = mysqli_connect("localhost", "root", "", "libranzas");
    $otp = mysqli_real_escape_string($conn, $otp);
    $expirationTime = mysqli_real_escape_string($conn, $expirationTime);
    $sql = "INSERT INTO otp_table (otp, expiration_time) VALUES ('$otp', '$expirationTime')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}


// Example usage
//$otp = generateOTP();
//$expirationTime = time() + (5 * 60); // OTP expiration time set to 5 minutes

//// Store the OTP in the database
//storeOTPInDB($otp, $expirationTime);
//echo "Generated OTP: " . $otp;

?>