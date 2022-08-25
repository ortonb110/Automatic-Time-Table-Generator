<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reset Password</title>
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
          <p>Reset Password</p>

          <div class="error-text">
            <p>This is an error test message</p>
          </div>
        </header>
        <form action="#" class="form-group">
            <div class="form-items login">
                <div class="form-list">
                <span
                >Go to log in page
                <a href="./index.php">Log in</a></span
                >
                </div>
            </div>
          <div class="form-items form-item-password">
            <div class="form-list">
              <label for="password">Password</label>
              <div class="just-wrap">
                <i class="fas fa-eye"></i><span class="cursor"> Show</span>
              </div>
            </div>
            <input
              type="password"
              name="password"
              required
              id="password"
              class="input input-pass"
              placeholder="Enter new password"
            />
          </div>
          <button>Reset</button>
        </form>
      </div>
    </section>
    <script src="./JavaScript/pass-show-hide.js"></script>
    <script src="JavaScript/resetPass.js"></script>
  </body>
</html>
