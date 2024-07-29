<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
    // Function to generate and print the first 10 Fibonacci numbers
    function generateFibonacci($n) {
        $fibonacciArray = array();

        if ($n >= 1) {
            $fibonacciArray[] = 0;
        }

        if ($n >= 2) {
            $fibonacciArray[] = 1;
        }

        for ($i = 2; $i < $n; $i++) {
            $fibonacciArray[] = $fibonacciArray[$i - 1] + $fibonacciArray[$i - 2];
        }

        return $fibonacciArray;
    }

    // Number of Fibonacci terms to generate
    $n = 10;

    // Generate and print the first 10 Fibonacci numbers
    $fibonacciArray = generateFibonacci($n);

    echo "The first $n Fibonacci numbers are:\n";
    foreach ($fibonacciArray as $index => $value) {
        echo "F[$index] = $value\n";
    }
    ?>

  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>