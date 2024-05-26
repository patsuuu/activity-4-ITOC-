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
        <div class="form-container sign-up">
        <form action="signup-check.php" method="post">
        <div class="name"> <h2>Create Account</h2><br></div>
                
                <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

         
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>
               
          <input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <input type="password" 
                 name="re_password" 
                 placeholder="Confirm Password"><br>
               
                 <button type="submit" class="button">Sign Up</button>
            </form>
        </div>
    <script src="script.js"></script>
</body>
</html>