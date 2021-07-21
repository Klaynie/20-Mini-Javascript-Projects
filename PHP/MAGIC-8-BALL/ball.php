<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>PHP Calculator</title>
  </head>
  <body>

    <?php
    function magic8Ball()
    {  
      $choice = rand(0, 19);

      switch ($choice) {
        case 0:
          return "It is certain.";
          break;
        case 1:
          return "It is decidedly so.";
          break;
        case 2:
          return "Without a doubt.";
          break;
        case 3:
          return "Yes - definitely.";
          break;
        case 4:
          return "You may rely on it.";
          break;
        case 5:
          return "As I see it, yes.";
          break;
        case 6:
          return "Most likely.";
          break;
        case 7:
          return "Outlook good.";
          break;
        case 8:
          return "Yes.";
          break;
        case 9:
          return "Signs point to yes.";
          break;
        case 10:
          return "Reply hazy, try again.";
          break;
        case 11:
          return "Ask again later.";
          break;
        case 12:
          return "Better not tell you now.";
          break;
        case 13:
          return "Cannot predict now.";
          break;
        case 14:
          return "Concentrate and ask again.";
          break;
        case 15:
          return "Don't count on it.";
          break;
        case 16:
          return "My reply is no.";
          break;
        case 17:
          return "My sources say no.";
          break;
        case 18:
          return "Outlook not so good.";
          break;
        case 19:
          return "Very doubtful.";
          break;
      }
    }
    $answer = magic8Ball();
    ?>
    
    <?php $question = $_GET['question'];?>

    <?="<p>Hmm I see... Your question is &nbsp;<b>" . $question . "</b>&nbsp; ... I understand why this weighs on you... I have consulted the spirit world.</p><br>"?>
    <?="<p>Here is your answer: &nbsp;<b>" . $answer . "</b></p>"?>
    <br>
    <a href="index.php">Reset</a>
  </body>
</html>