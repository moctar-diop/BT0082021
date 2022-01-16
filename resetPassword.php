<?php
// connecxion a la base de donne
require_once "connect/connect.php";
 
// Define et initialise les variables avec des valeurs vide
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// verificatication du formulaire rempli
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // verification du nouveau password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // confirmation password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Veuillez confirmer votre mot de passe";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password Incorrect!";
        }
    }
        
    // Verification si les variables contenant les erreurs sont vide avant de proceder a la mise a jour vers la base de donnee
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET mdp = :mdp WHERE pseudo = :pseudo";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":mdp", $param_password, PDO::PARAM_STR);
            $stmt->bindParam(":pseudo", $param_id, PDO::PARAM_INT);
            
            // Set parameters
            $param_password =$new_password;
            $param_id = $_SESSION["pseudo"];
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: logIn.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
    
    // Close connection
    unset($pdo);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Reset Password</h2>
        <p>Please fill out this form to reset your password.</p>
        <form name='myform' action="#" method="post" onsubmit="return signin()"> 
            <div class="form-group">
                <label>Pseudo</label>
                <input type="text" name ="pseudo">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-link ml-2" href="index.php">Cancel</a>
            </div>
        </form>
    </div>
    <script>
         function signin(){
            var password1 = document.forms['myform']['new_password'];
            var password2 = document.forms['myform']['confirm_password'];
            
            if(pseudo.value == ""){
                alert("Mettez votre pseudo");
                pseudo.focus();
                return false;
            }
            if(passwords.value == ""){
                alert("Mettez votre mot de passe");
                passwords.focus();
                return false;
            }
           if(password1 != password2){
               alert("mot de passe incompatible");
               
           } 
            return true
        }
    </script>    
</body>
</html>