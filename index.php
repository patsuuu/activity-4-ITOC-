<!DOCTYPE html>
<html>
<head>
<script>
    window.history.forward();
    function noBack() { window.history.forward(); }
</script>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
	<title>Login</title>
    <script>
    window.onunload = function() {
      window.history.go(-1);
    };
  </script>
    
	<script>
    window.history.forward();
    function noBack() { window.history.forward(); }
</script>
</head>
<body>
<div class="container" id="container">
<div class="form-container sign-in">
     <form action="log.php" method="post">
     <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
      <div class="name">
     	<h2>Sign In</h2><br><br>
     </div>
     	

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
     	<label></label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label></label>
     	<input type="password" name="password" placeholder="Password"><br>

	
     	<button type="submit" class ="button">Login</button>
        <a href="sign-up.php">sign in?</a>
         
     </form>
     </div>
     <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p></p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>