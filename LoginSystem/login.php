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
    <section class="">
  <div class="login container none mx-auto w-3/12">
    <div class="flex flex-col text-center">
      <h1 class="head center mt-6">Login</h1>
    </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2">
        <div class=" w-full mt-11">
          <div class="relative">
            
            <input type="text" id="name" name="name" class="Uname" placeholder="Username">
          </div>
        </div>
        <div class="w-full mt-8">
          <div class="relative">
            
            <input type="password" name="pass" class="pass">
          </div>
        </div>
        <div class="p-2 w-full">
          <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
        </div>

      </div>
    </div>
  </div>
</section>
</body>
</html>