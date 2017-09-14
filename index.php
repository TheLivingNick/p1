<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <title>DWA15 Project 1</title>
    <link rel="stylesheet" href="css/dwa15-p1.css">
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
      
      <div id=content>
          
          <h1>Nicholas Troy</h1>
          <img src="images/ntroy.jpg" alt="Nick Troy" />
          <h2>About Me</h2>
          <p>Hi! Never quite comfortable writing about myself, but I'll give it a shot. I'm an IT manager at a charter school, and also the only tech on site, so I'm usually pretty busy. I've always enjoyed dealing with computers, though I'm the first to admit that coding often throws me when it starts getting very complex. I majored in Computer Science in college, but also minored in history, German, and almost in pyschology, so I'm a bit all over the place. I'm a huge geek (if you can't already tell from the picture) and dabble in everything from mythology to comics to videos games to writing to ... yeah, very all over the place, as previously stated. I'm taking this class as part of the Web Technology certificate program, and hope to use what I'm learning here as part of a fairly large passion project that has been bouncing around my mind for a while. Whatever comes of it, I look forward to learning more about PHP and web applications.</p>
          <p id=quotes><?php echo $quoteArray[rand(0,3)]; ?></p>
      
      </div>
      
  </body>
</html>