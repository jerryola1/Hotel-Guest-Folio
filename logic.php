<?php
include 'config/db.php';

if (isset($_POST['submit'])) {
    $Adate = filter_var($_POST['Adate'], FILTER_SANITIZE_NUMBER_INT);
    $fullname = filter_var($_POST['fullname'], FILTER_SANITIZE_SPECIAL_CHARS);
    $residentAddress = filter_var(@$_POST['residentAddress'], FILTER_SANITIZE_SPECIAL_CHARS);
    $state = filter_var($_POST['state'], FILTER_SANITIZE_SPECIAL_CHARS);
    $phoneNumber = filter_var($_POST['phoneNumber'], FILTER_SANITIZE_NUMBER_INT);
    $companyName = filter_var($_POST['companyName'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $Ddate = filter_var($_POST['Ddate'], FILTER_SANITIZE_NUMBER_INT);
    $occupation = filter_var($_POST['occupation'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $vehicleNumber = filter_var($_POST['vehicleNumber'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $roomNumber = filter_var($_POST['roomNumber'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $nationality = filter_var($_POST['nationality'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $passportNumber = filter_var($_POST['passportNumber'], FILTER_SANITIZE_NUMBER_INT);
    $placeOfIssue = filter_var($_POST['placeOfIssue'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $visa = filter_var($_POST['visa'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $coming = filter_var($_POST['coming'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $going = filter_var($_POST['next'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $nok = filter_var($_POST['nok'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $payment = filter_var($_POST['payment'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $nok_number = filter_var($_POST['nok_number'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $from = "info@soullounge.ng";
    $to = "$email";
    $subject = "Soul Lounge Apartment " . $fullname;
    $header = 'From: ' . $from . "\r\n";
    $body = "Arrival Date : " . $Adate . "\r\n" .
        "Full Name: " . $fullname . "\r\n" .
        "Residential Address: " . $residentAddress . "\r\n" .
        "State: " . $state . "\r\n" .
        "Phone Number: " . $phoneNumber . "\r\n" .
        "Company Name: " . $companyName . "\r\n" .
        "Departure Date: " . $Ddate . "\r\n" .
        "Occupation: " . $occupation . "\r\n" .
        "Vehicle Number: " . $vehicleNumber . "\r\n" .
        "Email: " . $email . "\r\n" .
        "Room Number: " . $roomNumber . "\r\n" .
        "Nationality: " . $nationality . "\r\n" .
        "Passport Number: " . $passportNumber . "\r\n" .
        "Place of issue: " . $placeOfIssue . "\r\n" .
        "Visa Number: " . $visa . "\r\n" .
        "Coming From: " . $coming . "\r\n" .
        "Going To: " . $going . "\r\n" .
        "Next Of Kin: " . $nok . "\r\n" .
        "Next Of Kin Phone Number: " . $nok_number . "\r\n" .
        "Payment Method: " . $payment;

    if (mail($to, $subject, $body, $header)) {

        // insert data to database

        $query = "INSERT INTO information (arrival_date, full_name, resident_address,
            state, phone_number, company_name, departure_date, occupation, vehicle_number,
            email, room_number, nationality, passport_number, place_issue, visa,
            coming_from, going_to, next_Of_Kin, payment, nok_number ) VALUES ('$Adate', '$fullname', '$residentAddress',
            '$state', '$phoneNumber', '$companyName', '$Ddate', '$occupation', '$vehicleNumber',
            '$email', '$roomNumber', '$nationality', '$passportNumber', '$placeOfIssue', '$visa',
            '$coming', '$going', '$nok', '$payment', '$nok_number') ";
        $result = mysqli_query($dbConnect, $query);

        if (!mysqli_errno($dbConnect)) {
            $_SESSION['success'] = "Form Submitted Successfully. <br> Thanks for your patronage";
            header('location: ' . '/success.php');
            die();
        }
    }
}
