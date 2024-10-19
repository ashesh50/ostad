<?php
function calculateResults($marks) {
    // Check if any subject has a mark below 33, and if so, consider the student failed
    foreach ($marks as $mark) {
        if ($mark <= 45) {
            return array(array_sum($marks), array_sum($marks) / count($marks), "C");
        }
    }

    // Calculate total marks
    $total_marks = array_sum($marks);

    // Calculate average marks
    $average_marks = $total_marks / count($marks);

    // Determine the grade based on average marks
    if ($average_marks >= 80 && $average_marks <= 100) {
        $grade = "A+";
    } elseif ($average_marks >= 70 && $average_marks < 80) {
        $grade = "A";
    } elseif ($average_marks >= 60 && $average_marks < 70) {
        $grade = "A-";
    } elseif ($average_marks >= 50 && $average_marks < 60) {
        $grade = "B";
    } elseif ($average_marks >= 40 && $average_marks < 50) {
        $grade = "C";
    } elseif ($average_marks >= 33 && $average_marks < 40) {
        $grade = "D";
    } else {
        $grade = "F";
    }

    // return array($total_marks, $average_marks, $grade);
}

// Input: marks in each subject (for example)
$marks = array(85, 30, 90, 66, 58); // Replace with actual marks

// Calculate the total, average, and grade
list($total, $average, $grade) = calculateResults($marks);

// Output results
// echo "Total Marks: " . $total . "\n";
// echo "Average Marks: " . number_format($average, 2) . "\n";
echo "Grade: " . $grade . "\n";