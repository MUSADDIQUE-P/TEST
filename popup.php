<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
 if(isset($GLOBALS['detailsInvalid'])) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Details are not sent. Plsese check the details again.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  unset($GLOBALS['detailsInvalid']);
} 
?>
  <!-- popup form  -->

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
      <!-- popup form  -->
    <div class="container ">

        <!-- Button to Open the Modal -->
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Open modal
    </button> -->

        <!-- The Modal -->
        <div class="modal fade " id="myModal">
            <div class="modal-dialog modal-lg modal-dialog-centered ">
                <div class="modal-content" style="background-color: #141F31; border-radius: 20px;">

                    <!-- Modal Header -->
                    <center>
                        <div class="modal-header justify-content-center align-items-center">
                            <h5 class='col-12 modal-title text-center text-white'><b>Let Us Know Your Requirements</b>
                            </h5>
                            <!-- <h6 class="modal-title text-white">Let Us Know Youe Requirements</h6> -->
                            <button type="button" id="close" class="close text-white pr-5"
                                data-dismiss="modal">&times;</button>
                        </div>
                    </center>

                    <!-- Modal body -->


                    <div class="modal-body  ">

                        <div class="d-flex flex-row">
                            <div class="w-100">
                                <div class="d-flex justify-content-center align-items-lg-center">
                                    <center><img src="https://softmoreit.com/img/logo.png" class="popup-logo"
                                            alt="logo">
                                    </center>
                                </div>
                            </div>
                            <form action="./partials/_myform.php" method="POST" name="myForm">

                                <div class="form-group">
                                    <input type="text" class="form-control" id="recipient-email" name="recipientemail"
                                        placeholder="Your Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" id="recipient-phone" name="recipientphone"
                                        placeholder="Your Phone" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="recipient-name" name="recipientname"
                                        placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="company-name" name="companyname"
                                        placeholder="Company Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="pincode" name="pincode"
                                        placeholder="Pincode">
                                </div>

                            
                        </div>

                        <div class="d-flex justify-content-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label  text-white" for="flexCheckDefault">
                                    I agree to the terms and conditions
                                </label>
                            </div>

                        </div>

                        <div class="d-flex justify-content-center">


                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="flexCheckDefault">
                                <label class="form-check-label  text-white" for="flexCheckDefault">
                                    <i class="fa fa-whatsapp" style="font-size:15px;color:green"></i>
                                    Would you like to get updates on Whatsapp
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer d-flex justify-content-center">
                        <input type="submit" value="submit" class="btn btn-secondary"/>
                    </div>
                  </form>
                </div>
            </div>
        </div>

    </div>
    <!-- end  -->
  <script>
        var close = document.getElementById("close");
        close.addEventListener("click", function () {
            $("#myModal").modal('hide');
        });
        setTimeout(function () { $("#myModal").modal('show'); }, 25000);
        var popupInterval = setInterval(function () { $("#myModal").modal('show'); }, 300000);

        function validateForm() {
            let x = document.forms["myForm"]["recipientemail"].value;
            let y = document.forms["myForm"]["recipientname"].value;
            let z = document.forms["myForm"]["recipientphone"].value;
            let a = document.forms["myForm"]["companyname"].value;
            let b = document.forms["myForm"]["pincode"].value;

            if (x == "" || y == "" || z == "" || a == "" || b == "") {
                alert("Please fill all the fields");
                return false;
            }
            else {
                $("#myModal").modal('hide');
                clearInterval(popupInterval);
                return true;
            }
        }

        const phoneInputField = document.querySelector("#recipientphone");
        const phoneInput = window.intlTelInput(phoneInputField, {
            utilsScript:
                "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });

    </script>
  </body>
</html>