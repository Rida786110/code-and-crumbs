<?php
echo "<h2>Student Marks Management System</h2>";

// 3 Students ka data (3D Associative Array)
$allStudents = array(
    "John" => array(
        "Total"   => 240,
        "Average" => 80,
        "Grade"   => "A"
    ),
    "Sara" => array(
        "Total"   => 285,
        "Average" => 95,
        "Grade"   => "A+"
    ),
    "Ali" => array(
        "Total"   => 150,
        "Average" => 50,
        "Grade"   => "C"
    )
);

// --- SEARCH LOGIC ---
$searchName = "Sara"; // Aap yahan naam tabdeel karein (John, Sara, ya Ali)

if (array_key_exists($searchName, $allStudents)) {
    echo "<h3>Result for: $searchName</h3>";
    
    // Sirf select kiye gaye student ka loop chalega
    foreach ($allStudents[$searchName] as $key => $value) {
        echo "<b>" . $key . ":</b> " . $value . "<br>";
    }
} else {
    echo "Student '$searchName' ka record nahi mila.";
}
?>
