<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../partials/style.css">
    <link rel="stylesheet" href="../LoginSystem/login.css">
    <title>Chai Counter ~ Login</title>
</head>
<body>
    <?php include '../partials/_nav.php'
  
    ?>
    <section class="mt-3">
  <div class="login container none mx-auto w-4/12">
    <div class="flex flex-col text-center">
      <h1 class="head center mt-6">Login</h1>
    </div>
    <div class="">
      <!-- <div class="flex flex-wrap -m-2"> -->
        <div class="  mt-11">
          <div class="flex justify-center items-center">

            <input type="text" id="name" name="name" class="Uname" placeholder="Username">
          </div>
        </div>
        <div class="w-full mt-8">
          <div class="flex justify-center items-center">
            
            <input type="password" name="pass" class="Uname" placeholder="Password">
          </div>
        </div>
        <div class="p-2 w-full mt-11">
          <button class="btn flex mx-auto">Login</button>
        </div>
        <div class="text-center w-full mt-8 mb-10">
          <p class="text">Don't Have Account? <a href="./signup.php">Signup</a></p>
        </div>

      <!-- </div> -->
    </div>
  </div>
</section>
</body>
</html>