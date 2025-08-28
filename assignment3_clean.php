<?php
// HW3 – Array to Table

// مصفوفة الطلاب
$students = [
    [
        'stdNo' => '20003',
        'stdName' => 'Ahmed Ali',
        'stdEmail' => 'ahmed@gmail.com',
        'stdGAP' => 88.7
    ],
    [
        'stdNo' => '30304',
        'stdName' => 'Mona Khalid',
        'stdEmail' => 'mona@gmail.com',
        'stdGAP' => 78.5
    ],
    [
        'stdNo' => '10002',
        'stdName' => 'Bilal Hmaza',
        'stdEmail' => 'bilal@gmail.com',
        'stdGAP' => 98.7
    ],
    [
        'stdNo' => '10005',
        'stdName' => 'Said Ali',
        'stdEmail' => 'said@gmail.com',
        'stdGAP' => 98.7
    ],
    [
        'stdNo' => '10007',
        'stdName' => 'Mohammed Ahmed',
        'stdEmail' => 'mohamed@gmail.com',
        'stdGAP' => 98.7
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students Table</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h2 { color: #2c3e50; }
        table { border-collapse: collapse; width: 70%; margin-bottom: 15px; }
        th, td { border: 1px solid #666; padding: 8px 12px; text-align: center; }
        th { background-color: #16a085; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h2>Students Information</h2>

    <table>
        <tr>
            <th>Student No</th>
            <th>Name</th>
            <th>Email</th>
            <th>GPA</th>
        </tr>

        <?php foreach ($students as $std): ?>
            <tr>
                <td><?= $std['stdNo'] ?></td>
                <td><?= $std['stdName'] ?></td>
                <td><?= $std['stdEmail'] ?></td>
                <td><?= $std['stdGAP'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <p><b>Total Students: </b><?= count($students) ?></p>

</body>
</html>
