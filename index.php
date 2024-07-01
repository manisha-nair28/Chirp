<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Chirp: The Realtime Chat App</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="Jane" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Doe" required>
          </div>
        </div>
        <div class="field input">
          
          <label>Email Address
        
          </label>
         
          <input type="text" name="email" placeholder="Enter your email" required>
          
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Select Profile Picture</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

  <script>
    // email validation 
    function validateEmail(email) {
      const regex = /^[a-zA-Z0–9._-]+@[a-zA-Z0–9.-]+\.[a-zA-Z]{2,4}$/;
      if(regex.test(email)){
        const emailInput = document.querySelector('input[name="email"]');
        const tick = document.createElement('i');
        tick.classList.add('fas', 'fa-check');
        emailInput.parentNode.appendChild(tick);
      }
    }

    // Attaching blur and keypress events to the email input field to call the validateEmail function
    document.querySelector('input[name="email"]').addEventListener('blur', function() {
            validateEmail();
        });

    document.querySelector('input[name="email"]').addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                validateEmail();
            }
        });
  </script>
  </script>
</body>
</html>
