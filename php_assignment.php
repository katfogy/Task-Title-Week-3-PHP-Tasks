<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Title: Week 3 PHP Tasks</title>
</head>

<body>
    <div class="container">
        <h2>User Registration System</h2>
        <form action="user_data.php" method="POST">
            <div>
                <label for="name">Enter Name</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="email">Enter Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="dob">Select Date of Birth</label>
                <input type="date" name="dob" id="dob">
            </div>

            <div>
                <label for="gender">Select Your Gender</label>
                <select name="gender" id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div>
                <label for="country" class="sr-only">Select Country</label>
                <select id="country" name="country"></select>
            </div>

            <div>
                <input type="submit" name="submit" value="Add Users">
            </div>
        </form>
    </div>
    <script src="countries.js"></script>
    <script language="javascript">
        populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
        populateCountries("country2");
        populateCountries("country2");
    </script>
</body>

</html>