<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 6 Q2</title>
    <style>
        table, th, td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php $students = [
        [
            'name' => 'Alice',
            'program' => 'BIP',
            'age' => 21
        ],
        [
            'name' => 'Bob',
            'program' => 'BIS',
            'age' => 20
        ],
        [
            'name' => 'Raju',
            'program' => 'BIT',
            'age' => 22
        ]
    ];
    ?>
    <h2>Student Information</h2>

    <table>
        <tr>
            <?php foreach (reset($students) as $key => $value): ?>
                <th><?php echo $key; ?></th>
            <?php endforeach; ?>
        </tr>

        <?php foreach ($students as $student): ?>
            <tr>
                <?php foreach ($student as $value): ?>
                    <td><?php echo $value; ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>

    </table>


</body>
</html>