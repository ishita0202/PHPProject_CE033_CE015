<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Events</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include('header.html') ?>
    <section class="categories">
        <div class="container">
            <h1 class="text-center"><b>Explore events</b></h1>

            <form action="details.php" method="POST">
                <div class="box-3 float-container">
                    <input type="text" name="name" value="hydromoblie" hidden />
                    <img src="images/hydromobile.jpeg" alt="hydromobile" class="img-responsive img-curve">
                    <div class="desc">
                        <p align="center"><input type="submit" name="submit" value="Details" class="btn btn-primary"> &nbsp;
                    </div>
                </div>
            </form>
            <form action="details.php" method="POST">
                <div class="box-3 float-container">
                    <input type="text" name="name" value="robowars" hidden />
                    <img src="images/robowars.jpeg" alt="robowars" class="img-responsive img-curve">
                    <div class="desc">
                        <p align="center"><input type="submit" name="submit" value="Details" class="btn btn-primary"> &nbsp;
                    </div>
                </div>
            </form>
            <form action="details.php" method="POST">
                <div class="box-3 float-container">
                    <input type="text" name="name" value="wonderweb" hidden />
                    <img src="images/wonderweb.jpeg" alt="wonderweb" class="img-responsive img-curve">
                    <div class="desc">
                        <p align="center"><input type="submit" name="submit" value="Details" class="btn btn-primary"> &nbsp;
                    </div>
                </div>
            </form>
            <form action="details.php" method="POST">
                <div class="box-3 float-container">
                    <input type="text" name="name" value="moviemake" hidden />
                    <img src="images/moviemake.jpeg" alt="moviemake" class="img-responsive img-curve">
                    <div class="desc">
                        <p align="center"><input type="submit" name="submit" value="Details" class="btn btn-primary"> &nbsp;
                    </div>
                </div>
            </form>
            <form action="details.php" method="POST">
                <div class="box-3 float-container">
                    <input type="text" name="name" value="coderage" hidden />
                    <img src="images/coderage.jpeg" alt="coderage" class="img-responsive img-curve">
                    <div class="desc">
                        <p align="center"><input type="submit" name="submit" value="Details" class="btn btn-primary"> &nbsp;
                    </div>
                </div>
            </form>
            <div class="clearfix"></div>
        </div>
    </section>

    <?php include('footer.html') ?>

</body>
</html>