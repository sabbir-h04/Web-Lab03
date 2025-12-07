<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Matrimonial Profile</title>
    <style>
        body {
            background-color: #f9f3e6;
            font-family: 'Georgia', serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .cv-card {
            background: white;
            width: 600px;
            padding: 0;
            border-radius: 8px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
            overflow: hidden;
            border: 1px solid #d4af37;
        }

        .header {
            background-color: #800000;
            color: white;
            padding: 40px 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 32px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .header p {
            margin: 5px 0 0;
            color: #d4af37;
            font-size: 18px;
        }

        .content {
            padding: 40px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 12px 0;
            border-bottom: 1px solid #eee;
            font-size: 16px;
        }

        .label {
            font-weight: bold;
            color: #800000;
            width: 35%;
        }

        .value {
            color: #333;
            width: 65%;
        }

        .footer {
            text-align: center;
            padding: 20px;
            background-color: #fafafa;
            border-top: 1px solid #eee;
        }

        .back-btn {
            text-decoration: none;
            background-color: #d4af37;
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="cv-card">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Collecting Data
            $name = $_POST['fullname'];
            $dob = $_POST['dob'];
            $gender = $_POST['gender'];
            $religion = $_POST['religion'];
            $phone = $_POST['phone'];
            $occupation = $_POST['occupation'];
            $address = $_POST['address'];
        ?>

        <div class="header">
            <h1><?php echo $name; ?></h1>
            <p>Matrimonial Profile</p>
        </div>

        <div class="content">
            <table>
                <tr>
                    <td class="label">Date of Birth</td>
                    <td class="value"><?php echo $dob; ?></td>
                </tr>
                <tr>
                    <td class="label">Gender</td>
                    <td class="value"><?php echo $gender; ?></td>
                </tr>
                <tr>
                    <td class="label">Religion</td>
                    <td class="value"><?php echo $religion; ?></td>
                </tr>
                <tr>
                    <td class="label">Occupation</td>
                    <td class="value"><?php echo $occupation; ?></td>
                </tr>
                <tr>
                    <td class="label">Phone Number</td>
                    <td class="value"><?php echo $phone; ?></td>
                </tr>
                <tr>
                    <td class="label">Address</td>
                    <td class="value"><?php echo $address; ?></td>
                </tr>
            </table>
        </div>

        <div class="footer">
            <a href="biodata.html" class="back-btn">Edit Details</a>
        </div>

        <?php 
        } else {
            echo "<p style='text-align:center; padding:20px;'>No data submitted.</p>";
        }
        ?>
    </div>

</body>
</html>