<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log in</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
      integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="normalize.css" />
    <link rel="stylesheet" href="main.css" />
  </head>
  <body>
    <section>
      <div class="wrapper">
        <header class="title">
        <p class="main-title"><span>AIT</span><sup>Generator</sup></p>
          <p>Log in</p>
          <div class="error-text">
            <p>This is an error test message</p>
          </div>
        </header>
        <form action="#" class="form-group">
          <div class="form-items">
            <div class="form-list">
              <label for="email">Email</label>
              <span
                >Don't have an account?
                <a href="./signup.php">Sign up</a></span
              >
            </div>
            <input
              type="text"
              name="email"
              id="email"
              required
              placeholder="@gmail.com"
            />
          </div>
        
          <div class="form-items form-item-password">
            <div class="form-list">
              <label for="password">Password</label>
              <div class="just-wrap"><i class="fas fa-eye"></i><span class="cursor"> Show</span></div>
            </div>
            <input
              type="password"
              name="password"
              required
              id="password"
              class="input input-pass"
              placeholder="Enter password"
            />
          </div>
          <div class="form-items">
            <div class="form-list">
              <span>Forgot Password?
                <a href="verifyEmail.php">Reset</a></span>
            </div>
           
          
          <button>Log in</button>
        </form>
      </div>
    </section>
    <script src="./JavaScript/pass-show-hide.js"></script>
  <script src="JavaScript/signin.js"></script>
  </body>
</html>
