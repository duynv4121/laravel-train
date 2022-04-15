//validate
$().ready(function() {
    $("#parentInformation").validate({
        onfocusout: false,
        onkeyup: false,
        onclick: false,
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
            "block": {
                required: true,
            },
            "street": {
                required: true,
            },
            "postalCode": {
                required: true,
            },
            "helo": {
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
            "block": {
                required: "Please input block",
            },
            "street": {
                required: "Please input street name",
            },
            "postalCode": {
                required: "Please input postal code",
            },
            "helo": {
                required: "Please input postal helo",
            },


        }
    });
});


//handel
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
        <hr/>
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
    </div>`
    )
}