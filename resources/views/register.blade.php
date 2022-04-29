<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css" integrity="sha512-zxBiDORGDEAYDdKLuYU9X/JaJo/DPzE42UubfBw9yg8Qvb2YRRIQ8v4KsGHOx2H1/+sdSXyXxLXv5r7tHc9ygg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    div .error{
        color: red;
        font-size: 14px;
    }

    tbody, tbody, td, tfoot, th, thead, tr {
        border-color: #000 !important;
        border-width: 1px;  
    }

    .card{
        border-color: #006d29; !important;
    }

    .fa-xmark:hover{
        cursor: pointer;
    }

    .inputPayment:hover:disabled{
        cursor: not-allowed;
    }
    .modal-fixed,
    .modal-fixed-2{
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.6);
        z-index: 1000;
        
    }
    .text-policy{
        max-width: 900px;
        width: 100%;
        margin: 20px auto;
        text-align: justify;
        font-size: 14px;
    }

    #submit{
        width: 200px;
        margin: 20px auto;
        text-align: justify;
        font-size: 14px;
        display: block;
        text-align: center;
        background-color: #3c3e3c;
    }

    .croppie-container{
        height: auto; !important;
    }

    .error_message{
        text-align: center;
        color: red;
        margin: 20px auto;   
    }

    .message_success{
        text-align: center;
        color: green;
        margin: 20px auto;  
    }
</style>
<body>
    <div style="display: none;" class="modal-fixed">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">Cairnhill 9 Shuttle Bus Fare – Academic Year 2021/2022</h5>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">S/NO</th>
                        <th scope="col">Route Type</th>
                        <th scope="col">Up to 30 seater</th>
                        <th scope="col">>30 seater</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>One Way</td>
                        <td>$535.00</td>
                        <td>$500.00</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Two Ways</td>
                        <td>$1,020.00</td>
                        <td>$950.00</td>
                      </tr>
                    </tbody>
                  </table>
                  <h6>Remarks:</h6>
                  <ul>
                      <li>- The above pricing is dependent on sufficient uptake for the service.</li>
                      <li>- Price includes GST and is chargeable for the semester (2 semesters in an academic year).</li>
                      <li>- Transport charges are payable twice a year, before the start of the semester and service.</li>
                  </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary close-btn">Confirm</button>
            </div>
            </div>
        </div>
    </div>

    <div style="display: none;" class="modal-fixed-2 modal-show-calendar">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <p>Please refer to Terms and Conditions regarding the processing of applications and bus service charges.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary close-btn-modal">Confirm</button>
            </div>
            </div>
        </div>
    </div>

    <div class="error_message"></div>
    <div class="container">
        <form id="parentInformation">
        @csrf
            {{-- Parent's Information --}}
            <div class="card">
                <div style="background-color: #006d29; color: #fff;" class="card-header">
                    Parent's Information
                </div>
                <div class="card-body">
                    <div class="parent row col-md-12">
                        <div class="col-md-4">
                            <label>1. Father/Guardian <br>&nbsp;</label>
                            <div class="col-md-12">
                                <div class="form-group ui left labeled input">
                                    <label for="fatherFamilyName">Family Name <span class="required_label">*</span></label>
                                    <input name="fatherFamilyName" type="text" class="form-control" id="fatherFamilyName"
                                            placeholder="eg: Waston">
                                         
                                </div>
                                <div class="form-group">
                                    <label for="fatherFirstName">First Name <span class="required_label">*</span></label>
                                    <input name="fatherFirstName" type="text" class="form-control" id="fatherFirstName"
                                            placeholder="eg: John">
                                </div>
                                <div class="form-group">
                                    <label for="fatherMobilePhone">Mobile Phone (+65) <span class="required_label">*</span></label>
                                    <input name="fatherMobilePhone" type="text" class="form-control" id="fatherMobilePhone"
                                            placeholder="eg: 9876 5883">
                                </div>
                                <div class="form-group">
                                    <label for="fatherOfficePhone">Office Phone (+65)</label>
                                    <input name="fatherOfficePhone" type="text" class="form-control" id="fatherOfficePhone"
                                            placeholder="eg: 6273 8885 / 9876 5484">
                                </div>
                                <div class="form-group">
                                    <label for="fatherEmailAddress">Email Address <span class="required_label">*</span></label>
                                    <input name="fatherEmailAddress" type="email" class="form-control"
                                            id="fatherEmailAddress" placeholder="eg: example@gmail.com">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label>2. Mother/Guardian<br>&nbsp;</label>
                            <div class="col-md-12">
                                <div class="form-group ui left labeled input">
                                    <label for="motherFamilyName">Family Name <span class="required_label">*</span></label>
                                    <input type="text" class="form-control" id="motherFamilyName"
                                            placeholder="eg: Waston">
                                         
                                </div>
                                <div class="form-group">
                                    <label for="motherFirstName">First Name <span class="required_label">*</span></label>
                                    <input type="text" class="form-control" id="motherFirstName"
                                            placeholder="eg: John">
                                </div>
                                <div class="form-group">
                                    <label for="motherMobilePhone">Mobile Phone (+65) <span class="required_label">*</span></label>
                                    <input type="text" class="form-control" id="motherMobilePhone"
                                            placeholder="eg: 9876 5883">
                                </div>
                                <div class="form-group">
                                    <label for="motherOfficePhone">Office Phone (+65)</label>
                                    <input type="text" class="form-control" id="motherOfficePhone"
                                            placeholder="eg: 6273 8885 / 9876 5484">
                                </div>
                                <div class="form-group">
                                    <label for="motherEmailAddress">Email Address <span class="required_label">*</span></label>
                                    <input type="email" class="form-control"
                                            id="motherEmailAddress" placeholder="eg: example@gmail.com">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label>3. Authorized Person<br>&nbsp;</label>
                            <div class="col-md-12">
                                <div class="form-group ui left labeled input">
                                    <label for="guardianFamilyName">Family Name <span class="required_label">*</span></label>
                                    <input type="text" class="form-control" id="guardianFamilyName"
                                            placeholder="eg: Waston">
                                         
                                </div>
                                <div class="form-group">
                                    <label for="guardianFirstName">First Name <span class="required_label">*</span></label>
                                    <input type="text" class="form-control" id="guardianFirstName"
                                            placeholder="eg: John">
                                </div>
                                <div class="form-group">
                                    <label for="guardianMobilePhone">Mobile Phone (+65) <span class="required_label">*</span></label>
                                    <input type="text" class="form-control" id="guardianMobilePhone"
                                            placeholder="eg: 9876 5883">
                                </div>
                                <div class="form-group">
                                    <label for="guardianOfficePhone">Office Phone (+65)</label>
                                    <input type="text" class="form-control" id="guardianOfficePhone"
                                            placeholder="eg: 6273 8885 / 9876 5484">
                                </div>
                                <div class="form-group">
                                    <label for="guardianEmailAddress">Email Address <span class="required_label">*</span></label>
                                    <input type="email" class="form-control"
                                            id="guardianEmailAddress" placeholder="eg: example@gmail.com">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <p for="" class="text-center text-bold">Please indicate the first point of contact for all matters,
                                include emergencies:</p>
                            <ul class="peopleContactRadioContainer text-center">
                                <div class="text-center">
                                    <label><input name="peopleContact" type="radio" class="form-check-input" id="father" value="father" checked> Father</label>
                                    <label class="padding-left-15"><input name="peopleContact" type="radio" class="form-check-input" id="mother" value="mother"> Mother</label>
                                    <label class="padding-left-15"><input name="peopleContact" type="radio" class="form-check-input" id="guardian" value="guardian"> Guardian</label>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            {{-- Pick up/ Drop off Address (for Shuttle service riders, this will be your billing address)  --}}
            <div class="card mt-5">
                <div style="background-color: #006d29; color: #fff;" class="card-header">
                    Pick up/ Drop off Address (for Shuttle service riders, this will be your billing address)
                </div>
                <div class="card-body">
                    <div class="parent col-md-12 row">
                        <div class="col-md-3">
                            <div class="col-md-12">
                                <div class="form-group ui left labeled input">
                                    <label for="fatherFamilyName">Block/ House Number<span class="required_label">*</span></label>
                                    <input name="block" type="text" class="form-control" id="block"
                                            placeholder="eg: 123 / 123B">
                                </div>
                                <div class="form-group">
                                    <label for="fatherFirstName">Unit Number</label>
                                    <input name="unit" type="number" class="form-control" id="unit"
                                            placeholder="eg: 01-15">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-group ui left labeled input">
                                    <label for="fatherFamilyName">Street Name <span class="required_label">*</span></label>
                                    <input name="street" type="text" class="form-control" id="street"
                                            placeholder="eg: Orchard Road">
                                </div>
                                <div class="form-group">
                                    <label for="fatherFirstName">Name of Building / Condominium</label>
                                    <input name="building" type="text" class="form-control" id="building"
                                            placeholder="eg: Orchard Tower">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="col-md-12">
                                <div class="form-group ui left labeled input">
                                    <label for="fatherFamilyName">Postal Code  <span class="required_label">*</span></label>
                                    <input name="postalCode" type="text" class="form-control" id="postalCode"
                                            placeholder="eg: 123456">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- Billing Address --}}

            <div class="card mt-5">
                <div style="background-color: #006d29; color: #fff;" class="card-header">
                    Pick up/ Drop off Address (for Shuttle service riders, this will be your billing address)
                </div>
                <div class="card-body">
                    <div class="parent col-md-12 row">
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <input type="checkbox" class="form-check-input" name="detailBelow" id="detailBelow" value="1">
                                Same as above
                            </div>
                            <div class="col-md-6 mx-auto">
                                <p for="" class="text-center text-bold">Please tick the appropriate box regarding payment: </p>
                                <ul class="paymentCheckboxContainer text-center">
                                    <div class="text-center">
                                        <label><input type="radio" class="form-check-input" name="paymentCheck" id="paymentCheck" value="father" checked> Father</label>
                                        <label class="padding-left-15"><input type="radio" class="form-check-input" name="paymentCheck" id="paymentCheck" value="mother"> Mother</label>
                                        <label class="padding-left-15"><input type="radio" class="form-check-input" name="paymentCheck" id="paymentCheck" value="other"> Details below</label>
                                    </div>
                                </ul>
                            </div>
                        </div>
                       <div class="col-md-12 row">
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-group ui left labeled input">
                                        <label for="fatherFamilyName">Name of Company <span class="required_label">*</span></label>
                                        <input type="text" class="form-control inputPayment companyName" id="companyName"
                                                placeholder="Please fill in full name. eg: Tree Pte Ltd">
                                    </div>
                                    <div class="form-group">
                                        <label for="fatherFirstName">Billing Address<span class="required_label">*</span></label>
                                        <input type="text" class="form-control inputPayment billingAddress" id="billingAddress"
                                                placeholder="Please fill in full address. eg: 3 Orchard Road, 01-15 Orchard Tower, Singapore 123456">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="col-md-12">
                                    <div class="form-group ui left labeled input">
                                        <label for="fatherFamilyName">Attention to <span class="required_label">*</span></label>
                                        <input type="text" class="form-control inputPayment attention" id="attention"
                                                placeholder="eg: John">
                                    </div>
                                    <div class="form-group">
                                        <label for="fatherFirstName">Email Address<span class="required_label">*</span></label>
                                        <input type="text" class="form-control inputPayment billingEmailAddress" id="billingEmailAddress"
                                                placeholder="eg: example@gmail.com">
                                    </div>
                                </div>
                            </div>
                       </div>
                    </div>
                </div>
            </div>


            {{-- Child/Children's Information --}}
            <div class="card mt-5">
                <div style="background-color: #006d29; color: #fff;" class="card-header">
                    Pick up/ Drop off Address (for Shuttle service riders, this will be your billing address)
                </div>
                <div class="card-body">
                    <div class="parent col-md-12 addMoreChild">
                        <div class="row child1">
                            <div class="col-md-8">
                                <div class="col-md-12">
                                    <div class="form-group ui left labeled input">
                                        <label for="fatherFamilyName">Family name <span class="required_label">*</span></label>
                                        <input type="text" name="familyName[1]" class="form-control familyName"
                                                placeholder="eg: Waston">
                                    </div>
                                    <div class="form-group">
                                        <label for="fatherFirstName">Given name <span class="required_label">*</span></label>
                                        <input name="givenName[1]" type="text" class="form-control givenName"
                                                placeholder="eg: Alice">       
                                    </div>
                                    <div class="form-group">
                                        <label for="fatherFirstName">Date of Birth <span class="required_label">*</span></label>
                                        <input name="birthDay[1]" type="text" class="form-control birthDay"
                                                placeholder="eg: dd/mm/yyyy">       
                                    </div>
                                    <div class="form-group">
                                        <label for="fatherFirstName">Student ID</label>
                                        <input name="schoolId[1]" type="text" class="form-control schoolId" id="unit"
                                                placeholder="eg: G1">                            
                                    </div>
                                    <div class="form-group">
                                        <label for="fatherFirstName">Grade</label>
                                        <input name="grade[1]" type="text" class="form-control grade"
                                                placeholder="eg: 99985610001">
                                    </div>
                                    <div class="d-flex mt-2 mb-2">
                                        <label for="">Gender &nbsp;&nbsp;</label>
                                        <div class="form-check">
                                            <input class="form-check-input" value="male" type="radio" name="flexRadioDefault[1]" id="flexRadioDefault1" checked>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                              Male
                                            </label>
                                          </div>
                                          &nbsp;&nbsp;
                                          <div class="form-check">
                                            <input class="form-check-input" value="female" type="radio" name="flexRadioDefault[1]" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                              Famale
                                            </label>
                                          </div>
                                    </div>

                                    <select class="form-select select1" name="selectType[1]" data-id="1" onchange="selected(this)" aria-label="Default select example">
                                        <option value="First day of semester" selected>First day of semester</option>
                                        <option value="date">Choose date</option>
                                    </select>

                                    <div style="display:none" class="mt-3 form-group date-select-1">
                                        <input name="date-choose[1]" type="text" class="form-control date-choose-1 choose-calendar"
                                                placeholder="eg: dd/mm/yyyy">       
                                    </div>

                                    <div class="form-group col-md-12 routeCheck">
                                        <strong>For Regular Bus Service:</strong><br>
                                        <label>&nbsp;&nbsp;Route <span class="required_label">*</span></label>
                                        <ul class="listRoute">
                                            <label class="lable-radio"><input name="route[1]" type="radio" id="route" class="form-check-input routeCheckbox" value="2 Ways (Regular Bus Service)"> 2 Ways </label></br>
                                            <label class="lable-radio"><input name="route[1]" type="radio" id="route" class="form-check-input routeCheckbox" value="1 Way (AM) (Regular Bus Service)"> 1 Way (AM) </label></br>
                                            <label class="lable-radio"><input name="route[1]" type="radio" id="route" class="form-check-input routeCheckbox" value="1 Way (PM) (Regular Bus Service)"> 1 Way (PM) </label></br>
                                        </ul>
                                        <br>
                                        <strong>For Cairnhill 9 Shuttle Service (Shuttle bus fees apply):</strong><br>
                                        <label>&nbsp;&nbsp;Route <span class="required_label">*</span></label>
                                        <ul class="listRoute">
                                            <label class="lable-radio"><input name="route[1]" type="radio" id="route" class="form-check-input routeCheckbox" value="2 Ways (Cairnhill 9 Shuttle Service)" onclick="handelShowModal()"> 2 Ways </label></br>
                                            <label class="lable-radio"><input name="route[1]" type="radio" id="route" class="form-check-input routeCheckbox" value="1 Way (AM) (Cairnhill 9 Shuttle Service)" onclick="handelShowModal()"> 1 Way (AM) </label></br>
                                            <label class="lable-radio"><input name="route[1]" type="radio" id="route" class="form-check-input routeCheckbox" value="1 Way (PM) (Cairnhill 9 Shuttle Service)" onclick="handelShowModal()"> 1 Way (PM) </label></br>
                                        </ul>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <p>Remarks: Invoice will be sent to parents once bus seat can be confirmed. Transport charges
                                            are paid twice a year, before the start of each semester.</p>
                                    </div>
                                    <div class="form-group col-md-12" style="text-align: justify;">
                                        <strong><u>Shuttle Services:</u></strong>
                                        <div class="form-group col-md-12 custom-table" style="margin-top: 15px;">
                                            <table width="100%" style="border: solid 1px; font-size: 14px; line-height: 1.5; text-align: center;" class="shuttle-price">
                                                <thead style="background-color: #e2e2e2; color: #000000;">
                                                <tr>
                                                    <th style="text-align: center;">Shuttle Services</th>
                                                    <th style="text-align: center;">Estimated Departure Time</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><u>Morning</u><br>From Cairnhill 9</td>
                                                    <td>8:00 am</td>
                                                </tr>
                                                <tr>
                                                    <td><u>Afternoon</u><br>From School</td>
                                                    <td>3:45 pm</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <strong style="font-size: 14px;">
                                            <p>Please be at the pick up point 10 minutes before the estimated departure time. For afternoon arrivals, please note that there is a no waiting policy for the shuttle buses.</p>
                                            <p>Parents who wish to ensure that their child will be accompanied when they alight from the bus must ensure that they are present and waiting before the bus arrives.
                                                The Shuttle buses will not wait for parents to pick up their children.</p>
                                        </strong>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Medical conditions</label>
                                        <textarea name="description[1]" class="form-control" id="exampleFormControlTextarea1" placeholder="Please include any medical condition that we need to take note of" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="upload-demo-wrap">
                                    <input type="file" class="input_file demo-img-1" hidden id="image" accept="image/png, image/gif, image/jpeg">
                                    <input type="hidden" class="baseImg-1" name="baseImg[1]" value="">
                                </div>
                                <div>
                                    <a class="btn btn-danger d-block mx-auto upload" style="background-color: #5bc0de; width: 100px; outline: none">Upload</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a style="width:200px; display: block; margin: 20px auto; background-color: #3c3e3c;" class="btn btn-success" id="addMore">Add more</a>
            </div>

            <div class="text-policy">
                <p>Please read the <a target="_blank" href="https://devapi-tttms.antk.co/cis/T&C-Chatsworth.pdf">Terms and Conditions & Bus Regulations</a> carefully. This forms an integral part of our agreement in respect to bus transportation for your child. By submitting this form, you confirm that you agree to the terms and conditions contained herein and undertake to take responsibility for your child's adherence to the same.</p>

                <p>Applications must be received within the deadlines stipulated. Your application will take between 2 to 4 weeks to be processed. During high traffic periods, your application may take a little longer to be processed. You will be informed of the results of your application by email. Bus information will be sent to the email indicated by you to be the first point of contact. Please note that a seat for your child can only be confirmed when full payments has been received.</p>

                <p>All students are required to purchase a beacon. The beacon is a security feature that allows us to ascertain your child’s location when he is a rider on the bus on the bus. The yearly subscription of $25 (before GST) will be charged to your child’s transport fares. Replacement beacons are charged at $25 (before GST) a piece. These beacons are non-transferable. Students on Shuttle buses do not need a beacon for travel.</p>

                <p>Bus Details will be provided to you via email. Please ensure that the email addresses provided to us are valid and are readily accessible by you.</p>

                <p>When using the School Bus Transport Service, the use of Child Safety Restraint (CSR)- (Ride Safer Vest) for all students up to Year 1 is strongly encouraged. Students who are less than 1.35 meters in height are recommended to use the approved Ride Safer Vest or Mifold booster seat (as per School Safety standard).</p>
                
                <p>School approved CSR products are available and can be purchased directly from Taxi Baby : <a target="_blank" href="https://sg.taxibaby.com/"></a>
                    You can contact us at chatsworth@tongtar.com or approach the Transport Coordinator in school. Alternatively, you can also ring us at 6261 5537 during office hours (8.30am to 4.00pm) and ask to speak with the School Transport Team.</p>

                <ul>
                    <li style="list-style: none;" class="agreeTermContainer text-center">
                        <div class="errorPolicy1">
                            <label class="text-center">
                                <input type="checkbox" class="form-check-input" name="policy1"  value="1">
                                I agree to the <a target="_blank" href="https://devapi-tttms.antk.co/cis/T&C-Chatsworth.pdf">terms of service</a>
                            </label>
                            <div class=""></div>
                        </div>
                    </li>
                    <li style="list-style: none;" class="text-center">
                        <div class="errorPolicy2">
                            <label>
                                <input type="checkbox" class="form-check-input" name="policy2" value="1">
                                I acknowledge that I have read and understood the <a target="_blank" href="https://devapi-tttms.antk.co/project/PDPA.pdf">Data Protection Notice</a> , and consent
                                to the collection, use and disclosure of my personal data by Tong Tar Transport Service Pte Ltd for the purposes set out in the Notice.
                            </label>
                        </div>
                    </li>
                </ul>
                <div class="message_success"></div>
                <a id="submit" class="btn btn-danger mt-5">Submit</a>
            </div>


        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js" integrity="sha512-Gs+PsXsGkmr+15rqObPJbenQ2wB3qYvTHuJO6YJzPe/dTLvhy0fmae2BcnaozxDo5iaF8emzmCZWbQ1XXiX2Ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('js/validate.js')}}"></script>
</body>
</html>