<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <?php include('./view/header.php'); ?>
    <h1>
    <?php
        $firstname = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING);
        $lastname = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING);

        if (!empty($firstname) && !empty($lastname)) {
            echo "Hello, my name is {$firstname} {$lastname}.";
        } else {
            echo "You did not submit firstname and lastname parameters.";
        }
    ?>
    </h1>

    <p>
    <?php
          $age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_STRING);

          if (empty($age)) {
              echo "You did not submit a numeric age parameter.";
            } else if (!is_numeric($age)) {
                echo "You did not submit a NUMERIC age parameter.";
            } else if ($age >=18) {
              echo "I am old enough to vote in the United States.";
          } else if ($age < 18) {
              echo "I am not old enough to vote in the United States.";
          }
    ?>
    </p>

    <p>
    <?php
        if (!is_numeric($age)) {
            echo " ";
        } else if (!empty($age)) {
            echo "That means I'm at least " . $age * 365 . " days old.";
        }
    ?>
    </p>


</body>
</html>