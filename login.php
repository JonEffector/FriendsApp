<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>Friends Chat App</header>
      <form action="#">
        <div class="error-txt"></div>
        <div class="name-details">
          <div class="field input">
            <label for="">Email:</label>
            <input type="text" name="email" placeholder="Enter your Email">
          </div>
          <div class="field input">
            <label for="">Password:</label>
            <input type="password" name="password" placeholder="Enter your Password">
            <i class="fas fa-eye"></i>
          </div>
          <div class="field button">
            <input type="submit" value="continue to chat">
          </div>
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="index.php">signup now</a></div>
    </section>
  </div>
  <script src="js/pass-show-hide.js"></script>
  <script src="js/login.js"></script>
    
</body>
</html>