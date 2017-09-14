<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <title>DWA15 Project 1</title>
    <!-- <link rel="stylesheet" href="css/dwa15-p1.css"> -->
  </head>
  <body>
      
      <?php
        $quoteArray = [
            "The trouble with having an open mind, of course, is that people will insist on coming along and trying to put things in it.  --Terry Pratchett",
            "Wisdom comes from experience. Experience is often a result of lack of wisdom.  --Terry Pratchett",
            "It's not worth doing something unless someone, somewhere, would much rather you weren't doing it.  --Terry Pratchett",
            "Humans need fantasy to be human. To be the place where the falling angel meets the rising ape.  --Terry Pratchett"
        ]
      ?>
      
      <p id=quotes><?php echo $quoteArray[rand(0,3)]; ?></p>
      
  </body>
</html>