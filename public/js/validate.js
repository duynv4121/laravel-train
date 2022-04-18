//validate
$().ready(function() {
    $("#parentInformation").validate({
        // onfocusout: false,
        // onkeyup: false,
        // onclick: false,
        rules: {
            "fatherFamilyName": {
                required: true,
            },
            "fatherFirstName": {
                required: true,
            },
            "fatherMobilePhone": {
                required: true,
            },
            "fatherEmailAddress": {
                required: true,
                email: true
            },
            "motherFamilyName": {
                required: true,
            },
            "motherFirstName": {
                required: true,
            },
            "motherMobilePhone": {
                required: true,
            },
            "motherEmailAddress": {
                required: true,
                email: true
            },
            "guardianFamilyName": {
                required: true,
            },
            "guardianFirstName": {
                required: true,
            },
            "guardianMobilePhone": {
                required: true,
            },
            "guardianEmailAddress": {
                required: true,
                email: true
            },
            "block": {
                required: true,
            },
            "street": {
                required: true,
            },
            "postalCode": {
                required: true,
            },
            "policy1": {
                required: true,
            },
            "policy2": {
                required: true,
            },
            "dfgsdgjhfhj": {
                required: true,
            }
        },
        messages: {
            "fatherFamilyName": {
                required: "Please input family name",
            },
            "fatherFirstName": {
                required: "Please input first name",
            },
            "fatherMobilePhone": {
                required: "Please input mobile phone",
            },
            "fatherEmailAddress": {
                required: "Please input email address",
                email: "Your email address is invalid"
            },
            "motherFamilyName": {
                required: "Please input family name",
            },
            "motherFirstName": {
                required: "Please input first name",
            },
            "motherMobilePhone": {
                required: "Please input mobile phone",
            },
            "motherEmailAddress": {
                required: "Please input email address",
                email: "Your email address is invalid"
            },
            "guardianFamilyName": {
                required: "Please input family name",
            },
            "guardianFirstName": {
                required: "Please input first name",
            },
            "guardianMobilePhone": {
                required: "Please input mobile phone",
            },
            "guardianEmailAddress": {
                required: "Please input email address",
                email: "Your email address is invalid"
            },
            "block": {
                required: "Please input block",
            },
            "street": {
                required: "Please input street name",
            },
            "postalCode": {
                required: "Please input postal code",
            },
            "policy1": {
                required: "Please agree Terms and Conditions & Bus Regulations before submit",
            },
            "policy2": {
                required: "Please read and confirm the Data Protection Notice before submit",
                errorLabelContainer: '.errorTxt'
            },
        },
    });

});

$("#submit").click(function() {
    $(".familyName").each(function() {
        $(this).rules("add", {
            required: true,
            messages: {
                required: "Please input given name"
            }
        });
    });
    $(".givenName").each(function() {
        $(this).rules("add", {
            required: true,
            messages: {
                required: "Please input given name"
            }
        });
    });
    $(".birthDay").each(function() {
        $(this).rules("add", {
            required: true,
            messages: {
                required: "Please input date of birth"
            }
        });
    });
    $(".date-choose").each(function() {
        $(this).rules("add", {
            required: true,
            messages: {
                required: "Please input start date of service"
            }
        });
    });
    $(".routeCheckbox").each(function() {
        $(this).rules("add", {
            required: true,
            messages: {
                required: "Please choose route"
            },
        });
    });

})

//handel


function addRequiredFather() {
    $('#fatherFamilyName').attr('name', 'fatherFamilyName');
    $('#fatherFirstName').attr('name', 'fatherFirstName');
    $('#fatherMobilePhone').attr('name', 'fatherMobilePhone');
    $('#fatherOfficePhone').attr('name', 'fatherOfficePhone');
    $('#fatherEmailAddress').attr('name', 'fatherEmailAddress');
}

function removeRequiredFather() {
    $("#fatherFamilyName").nextAll(".error").remove();
    $("#fatherMobilePhone").nextAll(".error").remove();
    $("#fatherFirstName").nextAll(".error").remove();
    $("#fatherEmailAddress").nextAll(".error").remove();
}

function addRequiredMother() {
    $('#motherFamilyName').attr('name', 'motherFamilyName');
    $('#motherFirstName').attr('name', 'motherFirstName');
    $('#motherMobilePhone').attr('name', 'motherMobilePhone');
    $('#motherOfficePhone').attr('name', 'motherOfficePhone');
    $('#motherEmailAddress').attr('name', 'motherEmailAddress');
}

function removeRequiredMother() {
    $("#motherFamilyName").nextAll(".error").remove();
    $("#motherMobilePhone").nextAll(".error").remove();
    $("#motherFirstName").nextAll(".error").remove();
    $("#motherEmailAddress").nextAll(".error").remove();
}

function addRequiredGuardian() {
    $('#guardianFamilyName').attr('name', 'guardianFamilyName');
    $('#guardianFirstName').attr('name', 'guardianFirstName');
    $('#guardianMobilePhone').attr('name', 'guardianMobilePhone');
    $('#guardianOfficePhone').attr('name', 'guardianOfficePhone');
    $('#guardianEmailAddress').attr('name', 'guardianEmailAddress');
}

function removeRequiredGuardian() {
    $("#guardianFamilyName").nextAll(".error").remove();
    $("#guardianMobilePhone").nextAll(".error").remove();
    $("#guardianFirstName").nextAll(".error").remove();
    $("#guardianEmailAddress").nextAll(".error").remove();
}

$('input[type=radio][name=peopleContact]').change(function() {
    if (this.value == 'mother' && $('[name=paymentCheck]' == 'mother')) {
        addRequiredMother();
        removeRequiredFather();
        removeRequiredGuardian();
    }
})



var inputPayment = $(".inputPayment");
var checkBoxPay = $("input[type='checkbox'][name=detailBelow]")
var radioCur = $('input[name="paymentCheck"]:checked').val();
$('input[type=radio][name=paymentCheck]').change(function() {
    if (this.value == 'father') {
        $(checkBoxPay).prop('checked', true);
        if (checkBoxPay.is(':checked')) {
            inputPayment.prop('disabled', true);
        } else {
            inputPayment.prop('disabled', false);
        }
    } else if (this.value == 'mother') {
        $(checkBoxPay).prop('checked', true);
        if (checkBoxPay.is(':checked')) {
            inputPayment.prop('disabled', true);
        } else {
            inputPayment.prop('disabled', false);
        }
    } else {
        $(checkBoxPay).prop('checked', false);
        if (checkBoxPay.is(':checked')) {
            inputPayment.prop('disabled', true);
        } else {
            inputPayment.prop('disabled', false);
        }
    }
});

checkBoxPay.on('change', function() {
    if (checkBoxPay.is(':checked')) {
        inputPayment.prop('disabled', true);
    } else {
        inputPayment.prop('disabled', false);
    }
});

if (radioCur == 'father') {
    $(checkBoxPay).prop('checked', true);
    if (checkBoxPay.is(':checked')) {
        inputPayment.prop('disabled', true);
    } else {
        inputPayment.prop('disabled', false);
    }
}

var childIndex = 1;
$('#addMore').on('click ', function() {
    addChild();
})






function addChild() {
    childIndex++;
    $(".addMoreChild").append(
        ` 
        <div class="row child${childIndex}">
            <hr>
            <div class="col-md-8">
                <input name="fatherId" type="hidden" id="fatherId" value="0">
                <div class="col-md-12">
                    <div class="form-group ui left labeled input">
                        <label for="fatherFamilyName">Family name <span class="required_label">*</span></label>
                        <input type="text" name="familyName[${childIndex}]" class="form-control familyName"
                                placeholder="eg: Waston">
                    </div>
                    <div class="form-group">
                        <label for="fatherFirstName">Given name <span class="required_label">*</span></label>
                        <input name="givenName[${childIndex}]" type="text" class="form-control givenName"
                                placeholder="eg: Alice">       
                    </div>
                    <div class="form-group">
                        <label for="fatherFirstName">Date of Birth <span class="required_label">*</span></label>
                        <input name="birthDay[${childIndex }]" type="text" class="form-control birthDay"
                                placeholder="eg: dd/mm/yyyy">       
                    </div>
                    <div class="form-group">
                        <label for="fatherFirstName">Student ID <span class="required_label">*</span></label>
                        <input name="schoolId[${childIndex}]" type="text" class="form-control schoolId" id="unit"
                                placeholder="eg: G1">                            
                    </div>
                    <div class="form-group">
                        <label for="fatherFirstName">Grade <span class="required_label">*</span></label>
                        <input name="grade[${childIndex}]" type="text" class="form-control grade"
                                placeholder="eg: 99985610001">
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-end">
                <i onclick="myFunction(this)" data-id=${childIndex} class="fa-solid fa-xmark"></i>
            </div>
        </div>
        `
    )
}


function myFunction(item) {
    var id = item.getAttribute('data-id');
    console.log(id);
    var ele = document.querySelector('.child' + id);
    ele.remove();
}



$(document).on('change', '.select', function() {
    var val = $('.select option:selected').val();
    if (val == 1) {
        $(".date-select").css("display", "none");
    } else {
        $(".date-select").css("display", "block");
    }
})