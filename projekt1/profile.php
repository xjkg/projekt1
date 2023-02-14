<?php include "handy_methods.php"; ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JamApp</title>
    <link rel="stylesheet" href="../style.css">
    <script src="./script.js" defer></script>
</head>

<body>

    <div id="container">
        <!-- Max 800px bred container-->

        <?php include "header.php" ?>

        <!-- Sektionen omringar artiklar (eg. blogposts)-->
        <section>

            <!-- Artiklar placerar sig snyggt nedanför varann-->
            <article>
                <h2>Uppgift 6 - Login</h2>
                <?php include "uppg6.php" ?>
            </article>

            <article>
                <h2>Uppgift 7 - Ladda upp filer</h2>
                <?php if (isset($_SESSION["username"])) { ?>

                <form action="upload.php" method="post" enctype="multipart/form-data">
                    Select image to upload:
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
                </form>
                
                <?php } ?>
            </article>
        </section>

        <!-- Footern innehåller t.ex. somelänkar och kontaktuppg -->
        <footer>
            Template by Dennis<sup>&#169;</sup>
        </footer>

    </div>
</body>

</html>