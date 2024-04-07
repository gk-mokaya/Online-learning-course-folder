<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Embedded Style Sheet in PHP</title>
  <?php
    // PHP code for embedded style sheet
    echo '<style>
            body {
              font-family: "Arial", sans-serif;
              background-color: #f4f4f4;
              color: #333;
              margin: 0;
              padding: 20px;
            }

            h1 {
              color: #4285f4; /* Google Blue color */
            }

            p {
              line-height: 1.6;
            }
          </style>';
  ?>
</head>
<body>
  <h1>Welcome to My Page!</h1>
  <p>This is an example of an embedded style sheet in PHP.</p>
</body>
</html>
