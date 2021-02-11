<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <title> xkcd-style password generator - philip lin </title>

    <link href="css/styles.css" type="text/css" rel="stylesheet" />
    <?php require('logic.php'); ?>
  </head>

  <body>

    <!-- Page Title Section -->
    <div id = "pagetitle">
      <h1> xkcd-style password generator </h1>
      <br>
    </div>


    <!-- Password Section -->
    <div id = "password">
      <?php echo $password ?>
    </div>
    <br>

    <!-- Input Section -->
    <div id = "menu">

      <h3> select options for your random password below: </h3>

        <form action='index.php' method='POST' >
          <label for="words"> number of words </label>
          <input type='number' class="number" name='words' max='5' min='1' />
          <br>
          <label for="special"> add special character </label>
          <input type="checkbox" class="checkbox" name='special' />
          <br>
          <label for="number"> add number </label>
          <input type="checkbox" class="checkbox" name='number' />
          <br>
          <label for="capitalize"> capitalize first word </label>
          <input type="checkbox" class="checkbox" name='capitalize' />
          <br>
          <br>
    		  <input type='submit' class="submit_button" value='generate password!'/>
        </form>
        <br>
    </div>


    <!-- Cover Image -->
    <div class = "image">

      <img src = "images/password_strength.jpg" title = "To anyone who understands information theory and security and is in an infuriating argument with someone who does not (possibly involving mixed case), I sincerely apologize." alt="password strength" class="align-center large"/>
      <h5> source: http://xkcd.com/936/ </h5>
    </div>

  </body>

</html>
