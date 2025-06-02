<?php
function calculateAverage($scores) {
    return array_sum($scores) / count($scores);
}

$name = $_POST['name'];
$subjects = $_POST['subject'];
$scores = $_POST['score'];

$average = calculateAverage($scores);

// Output
echo "<h2>Student Report</h2>";
echo "Name: " . htmlspecialchars($name) . "<br><br>";

for ($i = 0; $i < count($subjects); $i++) {
    echo "Subject: " . htmlspecialchars($subjects[$i]) . 
         " - Score: " . htmlspecialchars($scores[$i]) . "<br>";
}

echo "<br><strong>Average Score:</strong> " . round($average, 2);
?>