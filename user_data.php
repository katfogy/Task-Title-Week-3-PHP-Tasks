<?php
if (isset($_POST['submit'])) {
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['dob']) || empty($_POST['gender']) || empty($_POST['country'])) {
        $message = "All Fields Are Required";
        echo "<p style='color:#ff0000'>$message</p>";
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $country = $_POST['country'];
        //pushing to CSV
        if (!isset($message)) {
            // $Content = "Name,DOB,Gender,Country,Email";
            // $Content .= "$name,$dob,$gender,$country,$email";
            // $FileName = $name . "-" . date("d-m-y-h:i:s") . ".csv";
            // header('Content-Type: application/csv');
            // header('Content-Disposition: attachment; filename="' . $FileName . '"');
            // echo $Content;
            $filename = "myexcel.csv";
            //set headers to download file
            header('Content-Type: text/csv');
            header('Content-Disposition: attachment;filename=' . $filename);
            $file = fopen('php://output', 'w');
            //set the column names
            $cells[] = array('Name,DOB,Gender,Country,Email');
            //pass all the form values
            $cells[] = array($name, $dob, $gender, $country, $email);
            foreach ($cells as $cell) {
                fputcsv($file, $cell);
            }
            fclose($file);

            exit();
        }
    }
}
