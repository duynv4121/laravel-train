<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    div .error{
        color: red;
    }

    .inputPayment:hover:disabled{
        cursor: not-allowed;
    }
    .modal-fixed{
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.6);
        z-index: 1000;
        
    }
</style>
<body>
    <div class="modal-fixed">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>
    <div class="container">
        <form action="{{url('checkValidate')}}" id="parentInformation" method="post">
        @csrf
            {{-- Parent's Information --}}
            <div class="card">
                <div style="background-color: #6ab04c" class="card-header text-center">
                    Parent's Information
                </div>
                <div class="card-body">
                    <div class="parent row col-md-12">
                        <div class="col-md-4">
                            <label>1. Father/Guardian <br>&nbsp;</label>
                            <input name="fatherId" type="hidden" id="fatherId" value="0">
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
                            <label>1. Father/Guardian <br>&nbsp;</label>
                            <input name="fatherId" type="hidden" id="fatherId" value="0">
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
                            <label>Authorized Person (for Afternoon pick ups, if necessary) <br>&nbsp;</label>
                            <input name="fatherId" type="hidden" id="fatherId" value="0">
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


            {{-- Pick up/ Drop off Address (for Shuttle service riders, this will be your billing address)  --}}

            <div class="card">
                <div style="background-color: #6ab04c" class="card-header text-center">
                    Pick up/ Drop off Address (for Shuttle service riders, this will be your billing address)
                </div>
                <div class="card-body">
                    <div class="parent col-md-12 row">
                        <div class="col-md-3">
                            <input name="fatherId" type="hidden" id="fatherId" value="0">
                            <div class="col-md-12">
                                <div class="form-group ui left labeled input">
                                    <label for="fatherFamilyName">Block/ House Number<span class="required_label">*</span></label>
                                    <input name="block" type="text" class="form-control" id="block"
                                            placeholder="eg: 123 / 123B">
                                </div>
                                <div class="form-group">
                                    <label for="fatherFirstName">Unit Number <span class="required_label">*</span></label>
                                    <input name="unit" type="text" class="form-control" id="unit"
                                            placeholder="eg: 01-15">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input name="fatherId" type="hidden" id="fatherId" value="0">
                            <div class="col-md-12">
                                <div class="form-group ui left labeled input">
                                    <label for="fatherFamilyName">Street Name <span class="required_label">*</span></label>
                                    <input name="street" type="text" class="form-control" id="street"
                                            placeholder="eg: Orchard Road">
                                </div>
                                <div class="form-group">
                                    <label for="fatherFirstName">Name of Building / Condominium<span class="required_label">*</span></label>
                                    <input name="building" type="text" class="form-control" id="building"
                                            placeholder="eg: Orchard Tower">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <input name="fatherId" type="hidden" id="fatherId" value="0">
                            <div class="col-md-12">
                                <div class="form-group ui left labeled input">
                                    <label for="fatherFamilyName">Block/ House Number <span class="required_label">*</span></label>
                                    <input name="postalCode" type="text" class="form-control" id="postalCode"
                                            placeholder="eg: 123456">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- Billing Address --}}

            <div class="card">
                <div style="background-color: #6ab04c" class="card-header text-center">
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
                                <input name="fatherId" type="hidden" id="fatherId" value="0">
                                <div class="col-md-12">
                                    <div class="form-group ui left labeled input">
                                        <label for="fatherFamilyName">Name of Company <span class="required_label">*</span></label>
                                        <input name="street" type="text" class="form-control inputPayment" id="street"
                                                placeholder="Please fill in full name. eg: Tree Pte Ltd">
                                    </div>
                                    <div class="form-group">
                                        <label for="fatherFirstName">Billing Address<span class="required_label">*</span></label>
                                        <input name="building" type="text" class="form-control inputPayment" id="building"
                                                placeholder="Please fill in full address. eg: 3 Orchard Road, 01-15 Orchard Tower, Singapore 123456">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <input name="fatherId" type="hidden" id="fatherId" value="0">
                                <div class="col-md-12">
                                    <div class="form-group ui left labeled input">
                                        <label for="fatherFamilyName">Attention to <span class="required_label">*</span></label>
                                        <input name="street" type="text" class="form-control inputPayment" id="street"
                                                placeholder="eg: John">
                                    </div>
                                    <div class="form-group">
                                        <label for="fatherFirstName">Email Address<span class="required_label">*</span></label>
                                        <input name="building" type="text" class="form-control inputPayment" id="building"
                                                placeholder="eg: example@gmail.com">
                                    </div>
                                </div>
                            </div>
                       </div>
                    </div>
                </div>
            </div>


            {{-- Child/Children's Information --}}
            <div class="card">
                <div style="background-color: #6ab04c" class="card-header text-center">
                    Pick up/ Drop off Address (for Shuttle service riders, this will be your billing address)
                </div>
                <div class="card-body">
                    <div class="parent col-md-12 addMoreChild">
                        <div class="row">
                            <div class="col-md-8 child1">
                                <input name="fatherId" type="hidden" id="fatherId" value="0">
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
                                        <label for="fatherFirstName">Student ID <span class="required_label">*</span></label>
                                        <input name="schoolId[1]" type="text" class="form-control schoolId" id="unit"
                                                placeholder="eg: G1">                            
                                    </div>
                                    <div class="form-group">
                                        <label for="fatherFirstName">Grade <span class="required_label">*</span></label>
                                        <input name="grade[1]" type="text" class="form-control grade"
                                                placeholder="eg: 99985610001">
                                    </div>
                                    <div class="d-flex">
                                        <label for="">Gender</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                              Male
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                              Famale
                                            </label>
                                          </div>
                                    </div>

                                    <select class="form-select select" aria-label="Default select example">
                                        <option value="1" selected>First day of semester</option>
                                        <option value="2">Choose date</option>
                                    </select>

                                    <div style="display:none" class="form-group date-select">
                                        <input name="date-choose[1]" type="text" class="form-control date-choose"
                                                placeholder="eg: dd/mm/yyyy">       
                                    </div>


                                    {{-- checkbox route --}}
                                    <div class="form-group col-md-12 routeCheck">
                                        <strong>For Regular Bus Service:</strong><br>
                                        <label>&nbsp;&nbsp;Route <span class="required_label">*</span></label>
                                        <ul class="listRoute">
                                            <label class="lable-radio"><input name="route[1]" type="radio" class="form-check-input routeCheckbox" value="2 Ways (Regular Bus Service)"> 2 Ways </label></br>
                                            <label class="lable-radio"><input name="route[1]" type="radio" class="form-check-input routeCheckbox" value="1 Way (AM) (Regular Bus Service)"> 1 Way (AM) </label></br>
                                            <label class="lable-radio"><input name="route[1]" type="radio" class="form-check-input routeCheckbox" value="1 Way (PM) (Regular Bus Service)"> 1 Way (PM) </label></br>
                                        </ul>
                                        <br>
                                        <strong>For Cairnhill 9 Shuttle Service (Shuttle bus fees apply):</strong><br>
                                        <label>&nbsp;&nbsp;Route <span class="required_label">*</span></label>
                                        <ul class="listRoute">
                                            <label class="lable-radio"><input name="route[1]" type="radio" class="form-check-input routeCheckbox" value="2 Ways (Cairnhill 9 Shuttle Service)"> 2 Ways </label></br>
                                            <label class="lable-radio"><input name="route[1]" type="radio" class="form-check-input routeCheckbox" value="1 Way (AM) (Cairnhill 9 Shuttle Service)"> 1 Way (AM) </label></br>
                                            <label class="lable-radio"><input name="route[1]" type="radio" class="form-check-input routeCheckbox" value="1 Way (PM) (Cairnhill 9 Shuttle Service)"> 1 Way (PM) </label></br>
                                        </ul>
                                    </div>
                                    <div class="show-error"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-success" id="addMore">Add more</a>
            </div>

            <div>
                Please read the Terms and Conditions & Bus Regulations carefully. This forms an integral part of our agreement in respect to bus transportation for your child. By submitting this form, you confirm that you agree to the terms and conditions contained herein and undertake to take responsibility for your child's adherence to the same.
                Applications must be received within the deadlines stipulated. Your application will take between 2 to 4 weeks to be processed. During high traffic periods, your application may take a little longer to be processed. You will be informed of the results of your application by email. Bus information will be sent to the email indicated by you to be the first point of contact. Please note that a seat for your child can only be confirmed when full payments has been received.
                All students are required to purchase a beacon. The beacon is a security feature that allows us to ascertain your child’s location when he is a rider on the bus on the bus. The yearly subscription of $25 (before GST) will be charged to your child’s transport fares. Replacement beacons are charged at $25 (before GST) a piece. These beacons are non-transferable. Students on Shuttle buses do not need a beacon for travel.
                Bus Details will be provided to you via email. Please ensure that the email addresses provided to us are valid and are readily accessible by you.
                When using the School Bus Transport Service, the use of Child Safety Restraint (CSR)- (Ride Safer Vest) for all students up to Year 1 is strongly encouraged. Students who are less than 1.35 meters in height are recommended to use the approved Ride Safer Vest or Mifold booster seat (as per School Safety standard).
                School approved CSR products are available and can be purchased directly from Taxi Baby :https://sg.taxibaby.com/
                You can contact us at chatsworth@tongtar.com or approach the Transport Coordinator in school. Alternatively, you can also ring us at 6261 5537 during office hours (8.30am to 4.00pm) and ask to speak with the School Transport Team.
            </div>
            <div class="col-md-12 text-center">
                <ul class="agreeTermContainer text-center">
                    <div>
                        <label class="text-center">
                            <input type="checkbox" class="form-check-input" name="policy1"  value="1">
                            I agree to the terms of service
                        </label>
                    </div>
                </ul>
            </div>
            <div class="col-md-8 col-md-offset-2 text-center" style="padding: unset;">
                <ul class="text-center" style="padding: unset;">
                    <div>
                        <label class="text-center">
                            <input type="checkbox" class="form-check-input" name="policy2" value="1">
                            I acknowledge that I have read and understood the Data Protection Notice, and consent
                            to the collection, use and disclosure of my personal data by Tong Tar Transport Service Pte Ltd for the purposes set out in the Notice.
                        </label>
                    </div>
                </ul>
            </div>

            <button id="submit" class="btn btn-danger d-block mx-auto mt-5" type="submit">Submit</button>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('js/validate.js')}}"></script>


</body>
</html>