<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
    <h1>My Details</h1>
</head>
<body>
    <?php
        $name = "Nur Laila Manja Binti Rahman";
        $matric_no = "AI220024";
        $course = "BIT";
        $year_of_study = "Year 2";
        $address = "Taman Pulai Mutiara, Johor Bahru, Johor";
    ?>

    <table border="2">
        <tr>
            <td>Name:</td>
            <td><?php echo "$name"; ?></td>
        </tr>
        <tr>
            <td>Matric Number:</td>
            <td><?php echo "$matric_no"; ?></td>
        </tr>
        <tr>
            <td>Course:</td>
            <td><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <td>Year of Study:</td>
            <td><?php echo $year_of_study; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>

</body>
</html>