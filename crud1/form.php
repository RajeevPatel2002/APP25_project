
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
   <div class="main-container">
        <!-- Form Section Start -->
            <form action="createpost.php" method="post">
                <h2 class="reg-heading"> REGISTRATION</h2>
                <div class="input-row">
                    <div class="input-box">
                        <label for="name" class="reg-label">First Name:</label> 
                        <input type="text"  class="reg-input" name="fname">
                    </div>
                    <div class="input-box">    
                        <label for="name" class="reg-label">Last Name:</label>
                        <input type="text" class="reg-input" name="lname">    
                    </div>
                </div>    
                <div class="input-row">
                    <div class="input-box"> 
                        <label for="name" class="reg-label">Phone:</label>
                        <input type="number" class="reg-input"  name="num">
                    </div>
                    <div class="input-box">
                        <label for="name" class="reg-label">Email:</label>
                        <input type="email" class="reg-input" name="email">    
                    </div>
                </div>
                <!-- <div class="input-row">
                    <div class="input-box">
                        <label for="name" class="reg-label">Adhaar:</label>
                        <input type="number" class="reg-input"  required>
                    </div>
                    <div class="input-box">
                        <label for="name" class="reg-label">Upload Profile</label>
                        <input type="file" class="reg-input"  required>    
                    </div>
                </div> -->
                <!-- <div class="input-row">
                    <div class="input-box">
                        <label for="name" class="reg-label">Password:</label>
                        <input type="text" class="reg-input"  required>    
                    </div>
                </div> -->
                <div class="button">
                    <div class="button">
                     <button type="submit" class="reg-button">CREATE ACCOUNT</button>
                    </div> 
                </div>
                <div class="reg-link">
                 <h5 class="reg-h5">Already Have a Account? <a href="#">Login</a></h5>
                </div> 
            </form>  
        <!-- Form Section End -->
    </div>
</body>
</html>
