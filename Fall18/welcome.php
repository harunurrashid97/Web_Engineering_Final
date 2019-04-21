<html>
<head>
  <head>

    <title>Fall-18 QUESTION: 3</title>
    <style>
    .message{
      width: 300px;
      margin: 0px auto;
      border: 2px solid red;
      padding: 30px;
    }
  </style>
</head>
<body>
  <div class="message">
    Welcome <?php echo $_POST["name"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?>
  </div>


</body>
</html>
