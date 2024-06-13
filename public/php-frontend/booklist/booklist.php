<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../scss/booklist/booklist.css">
</head>

<body>
    <header></header>
    <main>
        <!-- side-panel for filters -->
        <aside class="side-panel">
            side
        </aside>
        <!-- main section -->
        <section class="booklist-container">
            <!-- pagination top -->
            <div class="page">
                <ul>
                    <?php

                    for ($i = 1; $i < 5; $i++) {  //change this to while loop for database data extraction 
                    ?>

                        <li> <?php echo $i ?>
                            <!-- add function for next page  -->

                        </li>

                    <?php } ?>
                </ul>
            </div>



            <!-- booklist -->


            <div class="booklist">
                <?php for ($i = 0; $i < 10; $i++) {  //change this to while loop for database data extraction
                ?>
                    <div class="book" id="book-<?php echo $i // replace with book id
                                                ?>">
                        <div class="book-cover"></div>
                        <div class="book-title">pogi aq</div>
                        <div class="book-author"> stefanie</div>

                    </div>
                <?php } ?>
            </div>




            <!-- pagination bottom -->
            <div class="page">
                <ul>
                    <?php

                    for ($i = 1; $i < 5; $i++) {  //change this to while loop for database data extraction 
                    ?>

                        <li> <?php echo $i ?>

                            <!-- add function for next page  -->
                        </li>

                    <?php } ?>
                </ul>
            </div>

        </section>
    </main>
</body>

</html>