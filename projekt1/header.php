<header>
    <!-- Logo och meny i headern -->
    <img src="../media/logo.svg" alt="Website logo" />
    <div id="logo">JamApp</div>

    <nav>
        <!-- Huvudmenyn -->
        <ul>

            <li><a href="../projekt1/">Projekt 1</a></li>
            <li><a href="./rapport.php">Rapport</a></li>
            <?php
            if (isset($_SESSION["username"])) {
                print("<li><a href='./profile.php'>".$_SESSION["username"]."'s profile</a></li>");
            }
            ?>
        </ul>
    </nav>
</header>