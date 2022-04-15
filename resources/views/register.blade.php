<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    div .error{
        color: red;
    }

    .inputPayment:hover:disabled{
        cursor: not-allowed;
    }
</style>
<body>
    <div class="container">
        <form action="{{url('checkValidate')}}" id="parentInformation" method="post">
        @csrf
            {{-- Parent's Information --}}
            <div class="card">
                <div style="background-color: #6ab04c" class="card-header text-center">
                    Parent's Information
                </div>
                <div class="card-body">
                    <div class="parent col-md-12">
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
                    <div class="parent col-md-12 row addMoreChild">
                        <div class="col-md-8">
                            <input name="fatherId" type="hidden" id="fatherId" value="0">
                            <div class="col-md-12">
                                <div class="form-group ui left labeled input">
                                    <label for="fatherFamilyName">Block/ House Number<span class="required_label">*</span></label>
                                    <input type="text" name="familyName" class="form-control" id="helo"
                                            placeholder="eg: Waston">
                                </div>
                                <div class="form-group">
                                    <label for="fatherFirstName">Unit Number <span class="required_label">*</span></label>
                                    <input name="unit" type="text" class="form-control" id="unit"
                                            placeholder="eg: Alice">       
                                </div>
                                <div class="form-group">
                                    <label for="fatherFirstName">Unit Number <span class="required_label">*</span></label>
                                    <input name="unit" type="text" class="form-control" id="unit"
                                            placeholder="eg: dd/mm/yyyy">                            
                                </div>
                                <div class="form-group">
                                    <label for="fatherFirstName">Unit Number <span class="required_label">*</span></label>
                                    <input name="unit" type="text" class="form-control" id="unit"
                                            placeholder="eg: 99985610001">
                                </div>
                                <div class="form-group">
                                    <label for="fatherFirstName">Unit Number <span class="required_label">*</span></label>
                                    <input name="unit" type="text" class="form-control" id="unit"
                                            placeholder="eg: G1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-success" id="addMore">Add more</a>
            </div>

            <button class="btn btn-danger d-block mx-auto mt-5" type="submit">Submit</button>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('js/validate.js')}}"></script>


</body>
</html>