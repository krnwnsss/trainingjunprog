<?php

$data = <<<'EOD'
X, -9\\\10\100\-5\\\0\\\\, A
Y, \\13\\1\, B
Z, \\\5\\\-3\\2\\\800, C
EOD;


$dataArray = explode("\n", $data);

$output = [];

foreach ($dataArray as $line) {

    $parts = explode(',', $line);
    
    $char = trim($parts[0]);
    $numbers = explode('\\', trim($parts[1]));
    
    foreach ($numbers as $index => $number) {

        $number = trim($number);
        
        if (!empty($number)) {
            $output[] = $char . ', ' . $number . ', ' . trim($parts[2]) . ', ' . ($index + 1);
        }
    }
}

foreach ($output as $line) {
    echo $line . "\n";
}

?>
