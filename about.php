<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="assets/img/nbsclogo.png" rel="icon">
    <link href="css/mystyle.css" rel="stylesheet">
    <link href="css/sidenav.css" rel="stylesheet">
    <link href="css/stickyHeader.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="js/sidenav.js"></script>
</head>
<body>
    <div id="canvas">
        <!--navhead-->
        <?php include 'components/navhead.php' ?>
        <!--sidenav-->
        <?php include 'components/sidenav.php' ?>
        <!--main-content-->
        <div class="main-content">
            <?php include 'layouts/form1.php' ?>
        </div>
        <!--footer-->
        <?php include 'components/footer.php' ?>
    </div>

    <!--Sticky Header Script-->
    <script>
        window.onscroll = function() {myFunction()};

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
        }
    </script>
    <!--Sticky Header Script-->
</body>
</html>