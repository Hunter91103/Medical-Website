<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Appointment Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        input[type="time"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: blue;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
        }
        button:hover {
            background-color: blue;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Doctor Appointment Form</h1>
        <form action="./connection.php" method="POST">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="date">Preferred Date:</label>
            <input type="date" id="date" name="date" required>

             <label for="time">Time (hh:mm:ss):</label>
        <input type="text" id="time" name="time" pattern="([01][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])" placeholder="hh:mm:ss" required>

            <label for="reason">Reason for Visit:</label>
            <textarea id="reason" name="reason" rows="4" required></textarea>

            <button type="submit" name="submit">Book Appointment</button>
        </form>
    </div>

</body>
</html>
