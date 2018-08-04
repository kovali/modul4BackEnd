<!DOCTYPE html>
<html>
<head>
    <?php
    require_once 'functions/functions.php';
    $title = "Новости обо всем";
    require_once "blocks/head.php";
    $news = getNews(3, '');

    ?>
</head>
<body>
<?php require_once "blocks/header.php" ?>
<div id="wrapper">
    <div id="leftCol">
        <?php
        for ($i = 0; $i < count($news); $i++) {
            if ($i == 0)
                echo "<div id=\"bigArticle\">";
            else
                echo "<div class=\"article\">";
            echo '<img src="img/articles/' . $news[$i]["id"] . '.png" alt="Article' . $news[$i]["id"] . '" title="Article' . $news[$i]["id"] . '.">
            <h2>' . $news[$i]["title"] . '</h2>
            <p>
                ' . $news[$i]["intro_text"] . '
            </p>

            <a href="article.php?id=' . $news[$i]["id"] . '">
                <div class="more">More
                </div>
            </a>
        </div>';
            if ($i == 0)
                echo "";

        }
        ?>


        <!--        <div id="bigArticle">-->
        <!---->
        <!--        <div class="clear"><br></div>-->
        <!---->
        <!--        <div class="article">-->
        <!--            <img src="img/articles/2.jpg" alt="Article2" title="Article2">-->
        <!--            <h2>Article2</h2>-->
        <!--            <p>-->
        <!--                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et-->
        <!--                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip-->
        <!--                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu-->
        <!--                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia-->
        <!--                deserunt mollit anim id est laborum.-->
        <!--            </p>-->
        <!---->
        <!--            <a href="article.php">-->
        <!--                <div class="more">More-->
        <!--                </div>-->
        <!--            </a>-->
        <!--        </div>-->
        <!--        <div class="article">-->
        <!--            <img src="img/articles/3.png" alt="Article2" title="Article2">-->
        <!--            <h2>Article2</h2>-->
        <!--            <p>-->
        <!--                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et-->
        <!--                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip-->
        <!--                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu-->
        <!--                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia-->
        <!--                deserunt mollit anim id est laborum.-->
        <!--            </p>-->
        <!---->
        <!--            <a href="article.php">-->
        <!--                <div class="more">More-->
        <!--                </div>-->
        <!--            </a>-->
        <!--        </div>-->

    </div>

    <?php require_once "blocks/rightCol.php" ?>

</div>


<?php require_once "blocks/footer.php" ?>
</body>
</html>