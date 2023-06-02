<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="assets/images/logo.jpg" type="image/x-icon">
    <title> Soul Lounge Apartment | Guest Folio </title>
</head>

<body>
    <div class="container-fluid py-3" id="#form" style="background-image: url('/assets/images/black.jpg');">
        <div class="text-center">
            <img src="/assets/images/logo.jpg" style="max-width:10rem;" !important alt="" srcset="">
        </div>
        <div class="display-6 p-3 text-primary  text-center">
            <p> Soul Lounge Apartment <br> Guest Folio Registration Form </p>
        </div>


        <div class=" mx-auto" style="max-width:800px;">
            <form action="/logic.php" method="POST">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Date of Arrival:</span>
                    <input type="date" name="Adate" class="form-control" placeholder="" required>
                </div>
                <input type="hidden" name="folioNumber" value="">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Full Name:</span>
                    <input type="text" name="fullname" class="form-control" placeholder="Full Name" required>
                </div>
                <div class="input-group mb-3 ">
                    <span class="input-group-text">Residential Address: </span>
                    <textarea  class="form-control" name="residentAddress" placeholder="Residential Address" required>
                    </textarea>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">State:</span>
                    <select name="state" required class="form-control">
                        <option value="Abia">Abia</option>
                        <option value="Adamawa">Adamawa</option>
                        <option value="Akwa Ibom">Akwa Ibom</option>
                        <option value="Anambra">Anambra</option>
                        <option value="Bauchi">Bauchi</option>
                        <option value="Bayelsa">Bayelsa</option>
                        <option value="Benue">Benue</option>
                        <option value="Borno">Borno</option>
                        <option value="Cross River">Cross River</option>
                        <option value="Delta">Delta</option>
                        <option value="Ebonyi">Ebonyi</option>
                        <option value="Edo">Edo</option>
                        <option value="Ekiti">Ekiti</option>
                        <option value="Enugu">Enugu</option>
                        <option selected value="FCT">Federal Capital Territory</option>
                        <option value="Gombe">Gombe</option>
                        <option value="Imo">Imo</option>
                        <option value="Jigawa">Jigawa</option>
                        <option value="Kaduna">Kaduna</option>
                        <option value="Kano">Kano</option>
                        <option value="Katsina">Katsina</option>
                        <option value="Kebbi">Kebbi</option>
                        <option value="Kogi">Kogi</option>
                        <option value="Kwara">Kwara</option>
                        <option value="Lagos">Lagos</option>
                        <option value="Nasarawa">Nasarawa</option>
                        <option value="Niger">Niger</option>
                        <option value="Ogun">Ogun</option>
                        <option value="Ondo">Ondo</option>
                        <option value="Osun">Osun</option>
                        <option value="Oyo">Oyo</option>
                        <option value="Plateau">Plateau</option>
                        <option value="Rivers">Rivers</option>
                        <option value="Sokoto">Sokoto</option>
                        <option value="Taraba">Taraba</option>
                        <option value="Yobe">Yobe</option>
                        <option value="Zamfara">Zamfara</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Phone Number:</span>
                    <input type="text" name="phoneNumber" class="form-control" placeholder="+234" required>
                </div>
                <div class="input-group mb-3 ">
                    <span class="input-group-text">Company Name/Address: </span>
                    <textarea  name="companyName" class="form-control" placeholder="" ></textarea>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Date of Departure:</span>
                    <input type="date" name="Ddate" class="form-control" placeholder="" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Occupation</span>
                    <input type="text" name="occupation" class="form-control" placeholder="Occupation" >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Next of Kin</span>
                    <input type="text" name="nok" class="form-control" placeholder="Next of Kin" >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Next of Kin Phone Number</span>
                    <input type="text" name="nok_number" class="form-control" placeholder="+234" >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Payment method</span>
                    <select name="payment" required class="form-control">
                        <option disabled selected >--Select Payment--</option>
                        <option value="Cash"  >Cash</option>
                        <option value="Transfer"  >Bank Transfer</option>
                        <option value="POS"  >POS</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Vehicle Number</span>
                    <input type="text" name="vehicleNumber" class="form-control" placeholder="Vehicle Number" >
                </div>
              
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Email</span>
                    <input type="email" name="email" class="form-control" placeholder="@" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Room Number</span>
                    <input type="text" name="roomNumber" class="form-control" placeholder="Room Number" >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nationality</span>
                    <input type="text" name="nationality" class="form-control" placeholder="Nationality" >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Passport Number:</span>
                    <input type="text" name="passportNumber" class="form-control" placeholder="Passport Number" >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Place of Issue:</span>
                    <input type="text" name="placeOfIssue" class="form-control" placeholder="Place of issue" >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Visa/Resident Permit NO:</span>
                    <input type="text" name="visa" class="form-control" placeholder="Visa/Permit NO" >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Coming From :</span>
                    <input type="text" name="coming" class="form-control" placeholder="Coming From" >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Next Destination :</span>
                    <input type="text" name="next" class="form-control" placeholder="Next Destination" >
                </div>
                <!-- <div class="form-check my-3">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label" for="flexCheckDefault">
                        Yes, I will watch till the end.
                    </label>
                </div> -->
                <input type="submit" name="submit" class="btn btn-outline-primary" value="Submit">
            </form>
        </div>
    </div>
    <br>
    </div>
</body>

</html>