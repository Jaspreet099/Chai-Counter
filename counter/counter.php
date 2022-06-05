<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../partials/style.css">
    <link rel="stylesheet" href="./counter.css">
    <title>Chai Counter</title>
</head>

<body>
    <?php require "../partials/_nav.php" ?>
    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-2 items-center justify-center flex-col">
            <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="../images/counterImg.png">
            <div class="text-center lg:w-2/3 w-full">
                <span id="span">0</span>
                <div class="flex justify-center">
                    <button class="btn decrease mr-12">Decrease</button>
                    <button class="btn reset ">Reset</button>
                    <button class="btn Increase ml-12">Increase</button>  
                </div>
            </div>
        </div>
    </section>
</body>

</html>