<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./partials/style.css">
    <title>Chai Counter</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');

    .para {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 900;
        font-size: 48px;
        color: #20262F;
    }

    .txtCenter {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 500;
        font-size: 24px;
        text-transform: uppercase;
        color: #20262F;
    }
</style>

<body>
    <?php require "./partials/_nav.php" ?>
    <section class=" body-font">
        <div class="container mx-auto flex px-5 py-10 md:flex-row flex-col items-center">
            <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <p class="para mb-4 leading-relaxed">Are you also the one who loves tea and loose count on the number of tea cups per day? </p>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded" alt="hero" src="./images/herosection.png">
            </div>
        </div>
        <div class="container text-center mb-10">
            <p class="txtCenter">Don't worry! Chai counter is there to help you out</p>
        </div>
    </section>

</body>

</html>