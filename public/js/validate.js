//validate
$(document).ready(function() {
    $("#submit").click(function() {
        $(".familyName").each(function() {
            $(this).rules("add", {
                required: true,
                messages: {
                    required: "Please input family name",
                },
            });
        });
        $(".givenName").each(function() {
            $(this).rules("add", {
                required: true,
                messages: {
                    required: "Please input given name",
                },
            });
        });
        $(".birthDay").each(function() {
            $(this).rules("add", {
                required: true,
                messages: {
                    required: "Please input date of birth",
                },
            });
        });
        $(".date-choose").each(function() {
            $(this).rules("add", {
                required: true,
                messages: {
                    required: "Please input start date of service",
                },
            });
        });
        $(".routeCheckbox").each(function() {
            $(this).rules("add", {
                required: true,
                messages: {
                    required: "Please choose route",
                },
            });
        });

        $("#parentInformation").valid();

        var form = $("#parentInformation");
        if (!form.valid()) return false;

        sendAjax();
    });
});

$("#parentInformation").validate({
    rules: {
        fatherFamilyName: {
            required: true,
        },
        fatherFirstName: {
            required: true,
        },
        fatherMobilePhone: {
            required: true,
        },
        fatherEmailAddress: {
            required: true,
            email: true,
        },
        motherFamilyName: {
            required: true,
        },
        motherFirstName: {
            required: true,
        },
        motherMobilePhone: {
            required: true,
        },
        motherEmailAddress: {
            required: true,
            email: true,
        },
        guardianFamilyName: {
            required: true,
        },
        guardianFirstName: {
            required: true,
        },
        guardianMobilePhone: {
            required: true,
        },
        guardianEmailAddress: {
            required: true,
            email: true,
        },
        block: {
            required: true,
        },
        street: {
            required: true,
        },
        postalCode: {
            required: true,
        },
        policy1: {
            required: true,
        },
        policy2: {
            required: true,
        },
        companyName: {
            required: true,
        },
        billingAddress: {
            required: true,
        },
        attention: {
            required: true,
        },
        billingEmailAddress: {
            required: true,
        },
    },

    messages: {
        fatherFamilyName: {
            required: "Please input family name",
        },
        fatherFirstName: {
            required: "Please input first name",
        },
        fatherMobilePhone: {
            required: "Please input mobile phone",
        },
        fatherEmailAddress: {
            required: "Please input email address",
            email: "Your email address is invalid",
        },
        motherFamilyName: {
            required: "Please input family name",
        },
        motherFirstName: {
            required: "Please input first name",
        },
        motherMobilePhone: {
            required: "Please input mobile phone",
        },
        motherEmailAddress: {
            required: "Please input email address",
            email: "Your email address is invalid",
        },
        guardianFamilyName: {
            required: "Please input family name",
        },
        guardianFirstName: {
            required: "Please input first name",
        },
        guardianMobilePhone: {
            required: "Please input mobile phone",
        },
        guardianEmailAddress: {
            required: "Please input email address",
            email: "Your email address is invalid",
        },
        block: {
            required: "Please input block",
        },
        street: {
            required: "Please input street name",
        },
        postalCode: {
            required: "Please input postal code",
        },
        policy1: {
            required: "Please agree Terms and Conditions & Bus Regulations before submit",
        },
        policy2: {
            required: "Please read and confirm the Data Protection Notice before submit",
        },
        companyName: {
            required: "Please input company name",
        },
        billingAddress: {
            required: "Please input billing address",
        },
        attention: {
            required: "Please input attention",
        },
        billingEmailAddress: {
            required: "Please input email address",
        },
    },
    errorPlacement: function(error, element) {
        if (element.attr("name") == "policy1") {
            error.appendTo(".errorPolicy1");
        }
        if (element.attr("name") == "policy2") {
            error.appendTo(".errorPolicy2");
        }
        if (
            element.attr("name") != "policy2" &&
            element.attr("name") != "policy1"
        ) {
            error.insertAfter(element);
        }
        if (element[0].id == "route") {
            error.appendTo(element.parents(".routeCheck"));
        }
    },
    focusInvalid: false,
    invalidHandler: function(form, validator) {
        $("html, body").animate({
                scrollTop: $(validator.errorList[0].element).offset().top,
            },
            0
        );
    },
});

//handel

function addRequiredFather() {
    $("#fatherFamilyName").attr("name", "fatherFamilyName");
    $("#fatherFirstName").attr("name", "fatherFirstName");
    $("#fatherMobilePhone").attr("name", "fatherMobilePhone");
    $("#fatherOfficePhone").attr("name", "fatherOfficePhone");
    $("#fatherEmailAddress").attr("name", "fatherEmailAddress");
}

function removeRequiredFather() {
    $("#fatherFamilyName").nextAll(".error").remove();
    $("#fatherMobilePhone").nextAll(".error").remove();
    $("#fatherFirstName").nextAll(".error").remove();
    $("#fatherEmailAddress").nextAll(".error").remove();
}

function removeNameFather() {
    $("#fatherFamilyName").attr("name", "");
    $("#fatherFirstName").attr("name", "");
    $("#fatherMobilePhone").attr("name", "");
    $("#fatherOfficePhone").attr("name", "");
    $("#fatherEmailAddress").attr("name", "");
}

function addRequiredMother() {
    $("#motherFamilyName").attr("name", "motherFamilyName");
    $("#motherFirstName").attr("name", "motherFirstName");
    $("#motherMobilePhone").attr("name", "motherMobilePhone");
    $("#motherOfficePhone").attr("name", "motherOfficePhone");
    $("#motherEmailAddress").attr("name", "motherEmailAddress");
}

function removeRequiredMother() {
    $("#motherFamilyName").nextAll(".error").remove();
    $("#motherMobilePhone").nextAll(".error").remove();
    $("#motherFirstName").nextAll(".error").remove();
    $("#motherEmailAddress").nextAll(".error").remove();
}

function removeNameMother() {
    $("#motherFamilyName").attr("name", "");
    $("#motherFirstName").attr("name", "");
    $("#motherMobilePhone").attr("name", "");
    $("#motherOfficePhone").attr("name", "");
    $("#motherEmailAddress").attr("name", "");
}

function addRequiredGuardian() {
    $("#guardianFamilyName").attr("name", "guardianFamilyName");
    $("#guardianFirstName").attr("name", "guardianFirstName");
    $("#guardianMobilePhone").attr("name", "guardianMobilePhone");
    $("#guardianOfficePhone").attr("name", "guardianOfficePhone");
    $("#guardianEmailAddress").attr("name", "guardianEmailAddress");
}

function removeRequiredGuardian() {
    $("#guardianFamilyName").nextAll(".error").remove();
    $("#guardianMobilePhone").nextAll(".error").remove();
    $("#guardianFirstName").nextAll(".error").remove();
    $("#guardianEmailAddress").nextAll(".error").remove();
}

function removeNamedGuardian() {
    $("#guardianFamilyName").attr("name", "");
    $("#guardianFirstName").attr("name", "");
    $("#guardianMobilePhone").attr("name", "");
    $("#guardianOfficePhone").attr("name", "");
    $("#guardianEmailAddress").attr("name", "");
}

$("input[type=radio][name=peopleContact]").change(function() {
    if (
        this.value == "mother" &&
        $("[name='paymentCheck']:checked").val() == "mother"
    ) {
        addRequiredMother();
        removeRequiredFather();
        removeRequiredGuardian();
        removeNameFather();
    } else if (
        this.value == "mother" &&
        $("[name='paymentCheck']:checked").val() == "other"
    ) {
        addRequiredMother();
        removeRequiredFather();
        removeRequiredGuardian();
        removeNameFather();
        removeNamedGuardian();
    } else if (
        this.value == "mother" &&
        $("[name='paymentCheck']:checked").val() == "father"
    ) {
        addRequiredMother();
        addRequiredFather();
        removeRequiredGuardian();
        removeNamedGuardian();
    } else if (
        this.value == "father" &&
        $("[name='paymentCheck']:checked").val() == "father"
    ) {
        addRequiredFather();
        removeRequiredMother();
        removeRequiredGuardian();
        removeNameMother();
        removeNamedGuardian();
    } else if (
        this.value == "father" &&
        $("[name='paymentCheck']:checked").val() == "mother"
    ) {
        addRequiredFather();
        addRequiredMother();
        removeRequiredGuardian();
        removeNamedGuardian();
    } else if (
        this.value == "father" &&
        $("[name='paymentCheck']:checked").val() == "other"
    ) {
        addRequiredFather();
        removeRequiredMother();
        removeRequiredGuardian();
        removeNameMother();
        removeNamedGuardian();
    } else if (
        this.value == "guardian" &&
        $("[name='paymentCheck']:checked").val() == "father"
    ) {
        addRequiredGuardian();
        addRequiredFather();
        removeRequiredMother();
        removeNameMother();
    } else if (
        this.value == "guardian" &&
        $("[name='paymentCheck']:checked").val() == "mother"
    ) {
        addRequiredGuardian();
        removeRequiredFather();
        addRequiredMother();
        removeNameFather();
    } else if (
        this.value == "guardian" &&
        $("[name='paymentCheck']:checked").val() == "other"
    ) {
        addRequiredGuardian();
        removeRequiredFather();
        removeRequiredMother();
        removeNameFather();
        removeNameMother();
    }
});

$("input[type=radio][name=paymentCheck]").change(function() {
    if (
        this.value == "mother" &&
        $("[name='peopleContact']:checked").val() == "mother"
    ) {
        addRequiredMother();
        removeRequiredFather();
        removeRequiredGuardian();
        removeNameFather();
    } else if (
        this.value == "mother" &&
        $("[name='peopleContact']:checked").val() == "guardian"
    ) {
        addRequiredMother();
        removeRequiredFather();
        addRequiredGuardian();
        removeNameFather();
    } else if (
        this.value == "mother" &&
        $("[name='peopleContact']:checked").val() == "father"
    ) {
        addRequiredMother();
        addRequiredFather();
        removeRequiredGuardian();
        removeNamedGuardian();
    } else if (
        this.value == "father" &&
        $("[name='peopleContact']:checked").val() == "father"
    ) {
        addRequiredFather();
        removeRequiredMother();
        removeRequiredGuardian();
        removeNameMother();
        removeNamedGuardian();
    } else if (
        this.value == "father" &&
        $("[name='peopleContact']:checked").val() == "mother"
    ) {
        addRequiredFather();
        addRequiredMother();
        removeRequiredGuardian();
        removeNamedGuardian();
    } else if (
        this.value == "father" &&
        $("[name='peopleContact']:checked").val() == "guardian"
    ) {
        addRequiredFather();
        removeRequiredMother();
        addRequiredGuardian();
        removeNameMother();
    } else if (
        this.value == "other" &&
        $("[name='peopleContact']:checked").val() == "father"
    ) {
        removeRequiredGuardian();
        addRequiredFather();
        removeRequiredMother();
        removeNameMother();
    } else if (
        this.value == "other" &&
        $("[name='peopleContact']:checked").val() == "mother"
    ) {
        removeRequiredGuardian();
        removeRequiredFather();
        addRequiredMother();
        removeNameFather();
    } else if (
        this.value == "other" &&
        $("[name='peopleContact']:checked").val() == "guardian"
    ) {
        addRequiredGuardian();
        removeRequiredFather();
        removeRequiredMother();
        removeNameFather();
        removeNameMother();
    }
});

function setNameCheckBox() {
    $(".companyName").attr("name", "companyName");
    $(".billingAddress").attr("name", "billingAddress");
    $(".attention").attr("name", "attention");
    $(".billingEmailAddress").attr("name", "billingEmailAddress");
}

function removeNameCheckBox() {
    $(".companyName").attr("name", "");
    $(".billingAddress").attr("name", "");
    $(".attention").attr("name", "");
    $(".billingEmailAddress").attr("name", "");
}

var inputPayment = $(".inputPayment");
var checkBoxPay = $("input[type='checkbox'][name=detailBelow]");
var radioCur = $('input[name="paymentCheck"]:checked').val();
$("input[type=radio][name=paymentCheck]").change(function() {
    if (this.value == "father") {
        $(checkBoxPay).prop("checked", true);
        if (checkBoxPay.is(":checked")) {
            inputPayment.prop("disabled", true);
            removeNameCheckBox();
        } else {
            inputPayment.prop("disabled", false);
            setNameCheckBox();
        }
    } else if (this.value == "mother") {
        $(checkBoxPay).prop("checked", true);
        if (checkBoxPay.is(":checked")) {
            inputPayment.prop("disabled", true);
            removeNameCheckBox();
        } else {
            inputPayment.prop("disabled", false);
            setNameCheckBox();
        }
    } else {
        $(checkBoxPay).prop("checked", false);
        if (checkBoxPay.is(":checked")) {
            inputPayment.prop("disabled", true);
            removeNameCheckBox();
        } else {
            inputPayment.prop("disabled", false);
            setNameCheckBox();
        }
    }
});

$(".showModal").click(function() {
    $(".modal-fixed").css("display", "block");
    $("body").css("overflowY", "hidden");
});

$(".close-btn").click(function() {
    $(".modal-fixed").css("display", "none");
    $("body").css("overflowY", "auto");
});

checkBoxPay.on("change", function() {
    if (checkBoxPay.is(":checked")) {
        inputPayment.prop("disabled", true);
        removeNameCheckBox();
    } else {
        inputPayment.prop("disabled", false);
        setNameCheckBox();
    }
});

if (radioCur == "father") {
    $(checkBoxPay).prop("checked", true);
    if (checkBoxPay.is(":checked")) {
        inputPayment.prop("disabled", true);
    } else {
        inputPayment.prop("disabled", false);
    }
}

var childIndex = 1;
$("#addMore").on("click ", function() {
    addChild();
});

function addChild() {
    childIndex++;
    $(".addMoreChild").append(
        ` 
        <div class="row child${childIndex}" style="margin-bottom:20px; margin-top:20px;">
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
                        <input name="birthDay[${childIndex}]" type="text" class="form-control birthDay"
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
                    <div class="d-flex mt-2 mb-2">
                        <label for="">Gender &nbsp;&nbsp;</label>
                        <div class="form-check">
                            <input class="form-check-input" value="male" type="radio" name="flexRadioDefault[${childIndex}]" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Male
                            </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                            <input class="form-check-input" value="fmale" type="radio" name="flexRadioDefault[${childIndex}]" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Famale
                            </label>
                            </div>
                    </div>

                    <select class="form-select select${childIndex}" name="selectType[${childIndex}]" data-id="${childIndex}" onchange="selected(this)">
                        <option value="First day of semester">First day of semester</option>
                        <option value="date">Choose date</option>
                    </select>

                    <div style="display:none" class="mt-3 form-group date-select-${childIndex}">
                        <input data-id="${childIndex}" name="date-choose[${childIndex}]" type="text" class="form-control date-choose-${childIndex} choose-calendar calendar-${childIndex}"
                                placeholder="eg: dd/mm/yyyy">       
                    </div>

                    <div class="form-group col-md-12 routeCheck">
                        <strong>For Regular Bus Service:</strong><br>
                        <label>&nbsp;&nbsp;Route <span class="required_label">*</span></label>
                        <ul class="listRoute">
                            <label class="lable-radio"><input name="route[${childIndex}]" type="radio" id="route" class="form-check-input routeCheckbox" value="2 Ways (Regular Bus Service)"> 2 Ways </label></br>
                            <label class="lable-radio"><input name="route[${childIndex}]" type="radio" id="route" class="form-check-input routeCheckbox" value="1 Way (AM) (Regular Bus Service)"> 1 Way (AM) </label></br>
                            <label class="lable-radio"><input name="route[${childIndex}]" type="radio" id="route" class="form-check-input routeCheckbox" value="1 Way (PM) (Regular Bus Service)"> 1 Way (PM) </label></br>
                        </ul>
                        <br>
                        <strong>For Cairnhill 9 Shuttle Service (Shuttle bus fees apply):</strong><br>
                        <label>&nbsp;&nbsp;Route <span class="required_label">*</span></label>
                        <ul class="listRoute">
                            <label class="lable-radio"><input name="route[${childIndex}]" type="radio" id="route" class="form-check-input routeCheckbox" onclick="handelShowModal()" value="2 Ways (Cairnhill 9 Shuttle Service)"> 2 Ways </label></br>
                            <label class="lable-radio"><input name="route[${childIndex}]" type="radio" id="route" class="form-check-input routeCheckbox" value="1 Way (AM) (Cairnhill 9 Shuttle Service)" onclick="handelShowModal()"> 1 Way (AM) </label></br>
                            <label class="lable-radio"><input name="route[${childIndex}]" type="radio" id="route" class="form-check-input routeCheckbox" value="1 Way (PM) (Cairnhill 9 Shuttle Service)" onclick="handelShowModal()"> 1 Way (PM) </label></br>
                        </ul>
                    </div>
                    <div class="form-group col-md-12">
                        <p>Remarks: Invoice will be sent to parents once bus seat can be confirmed. Transport charges
                            are paid twice a year, before the start of each semester.</p>
                    </div>
                    <div class="form-group col-md-12" style="text-align: justify;">
                        <strong><u>Shuttle Services:</u></strong>
                        <div class="form-group col-md-12 custom-table" style="margin-top: 15px;">
                            <table width="100%" style="border: solid 1px #ccc; font-size: 14px; text-align: center;">
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
                        <textarea name="description[${childIndex}]" class="form-control" id="exampleFormControlTextarea1" placeholder="Please include any medical condition that we need to take note of" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <i onclick="myFunction(this)" data-id=${childIndex} class="fa-solid fa-xmark d-flex justify-content-end"></i>
                <div class="haha-${childIndex} upload-demo-wrap-${childIndex}">
                    <input type="file" class="input_file-${childIndex} demo-img-${childIndex} changeImg" data-id="${childIndex}" hidden accept="image/png, image/gif, image/jpeg">
                    <input type="hidden" class="baseImg-${childIndex}" name="baseImg[${childIndex}]" value="">
                </div>
                <div>
                    <a class="btn btn-danger d-block mx-auto upload" id="upload-append" data-id="${childIndex}" onclick="loadImgDemo(this)" style="background-color: #5bc0de; width: 100px; outline: none">Upload</a>
                </div>       
            </div>
        </div>
        `
    );
    addUpload(childIndex);
}

function handelShowModal() {
    $(".modal-fixed").css("display", "block");
    $("body").css("overflowY", "hidden");
}

function selected(input) {
    var id = input.getAttribute("data-id");
    var className = ".select" + id;
    var val = $(className).val();
    if (val == "First day of semester") {
        $(".date-select-" + id).css("display", "none");
    } else {
        $(".date-select-" + id).css("display", "block");
    }
}

$(".choose-calendar").one("change", function() {
    $(".modal-show-calendar").css("display", "block");
});

$(".choose-calendar").datepicker();
$(".birthDay").datepicker();

$(".close-btn-modal").click(function() {
    $(".modal-show-calendar").css("display", "none");
});

function addUpload(value) {
    var resizeUpload = $(".upload-demo-wrap-" + value).croppie({
        enableExif: true,
        enableOrientation: true,
        viewport: {
            width: 200,
            height: 200,
        },
        boundary: {
            width: 300,
            height: 300,
        },
        update: function(data) {
            resizeUpload
                .croppie("result", {
                    type: "base64",
                    size: "viewport",
                })
                .then(function(res) {
                    $(".baseImg-" + value).val(res);
                });
        },
    });

    $(".input_file-" + value).on("change", function() {
        preViewImg(this);
    });

    function preViewImg(input) {
        var id = input.getAttribute("data-id");
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                resizeUpload.croppie("bind", {
                        url: e.target.result,
                    }),
                    resizeUpload
                    .croppie("result", {
                        type: "base64",
                    })
                    .then(function(base) {});
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".birthDay").datepicker();
    $(".choose-calendar").datepicker();
}

function loadImgDemo(items) {
    var id = items.getAttribute("data-id");
    $(".demo-img-" + id).click();
}

//upload default
var croppie_obj = $(".upload-demo-wrap").croppie({
    enableExif: true,
    enableOrientation: true,
    viewport: {
        width: 200,
        height: 200,
    },
    boundary: {
        width: 300,
        height: 300,
    },
    update: function() {
        croppie_obj
            .croppie("result", {
                type: "base64",
                size: "viewport",
            })
            .then(function(res) {
                $(".baseImg-1").val(res);
            });
    },
});

$("body").on("change", ".input_file", function() {
    input = this;
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            croppie_obj
                .croppie("bind", {
                    url: e.target.result,
                })
                .then(function() {})
                .catch(function(e) {
                    console.log("Error", e);
                });
        };
        reader.readAsDataURL(input.files[0]);
    }
});

$(".upload").on("click", function() {
    $("#image").click();
});

//remove child append
function myFunction(item) {
    var id = item.getAttribute("data-id");
    var ele = document.querySelector(".child" + id);
    ele.remove();
}

//send ajax
function sendAjax() {
    var dataFor = [];
    for (i = 1; i <= childIndex; i++) {
        var dataForItems = {
            family_name: $("input[name='familyName[" + i + "]']").val(),
            given_name: $("input[name='givenName[" + i + "]']").val(),
            date_of_birth: $("input[name='birthDay[" + i + "]']").val(),
            school_code: $("input[name='schoolId[" + i + "]']").val(),
            grade: $("input[name='grade[" + i + "]']").val(),
            gender: $("[name='flexRadioDefault[" + i + "]']:checked").val(),
            type_of_service: $("[name='selectType[" + i + "]']").val(),
            date_start: $("input[name='date-choose[" + i + "]']").val(),
            route_service: $("[name='route[" + i + "]']:checked").val(),
            descriptions: $("textarea[name='description[" + i + "]']").val(),
            image: $("input[name='baseImg[" + i + "]']").val(),
        };
        dataFor.push(dataForItems);
    }

    var _token = $('input[name="_token"]').val();

    var dataBelow = $("[name='detailBelow']:checked").val();
    if (dataBelow == undefined) {
        var valueBelow = null;
    } else {
        var valueBelow = $("[name='detailBelow']:checked").val();
    }

    var allData = {
        parents: {
            father: {
                family_name: $("#fatherFamilyName").val(),
                first_name: $("#fatherFirstName").val(),
                mobile_phone: $("#fatherMobilePhone").val(),
                office_phone: $("#fatherOfficePhone").val(),
                email: $("#fatherEmailAddress").val(),
                type: 'father',
            },
            mother: {
                family_name: $("#motherFamilyName").val(),
                first_name: $("#motherFirstName").val(),
                mobile_phone: $("#motherMobilePhone").val(),
                office_phone: $("#motherOfficePhone").val(),
                email: $("#motherEmailAddress").val(),
                type: 'mother',
            },
            guardian: {
                family_name: $("#guardianFamilyName").val(),
                first_name: $("#guardianFirstName").val(),
                mobile_phone: $("#guardianMobilePhone").val(),
                office_phone: $("#guardianOfficePhone").val(),
                email: $("#guardianEmailAddress").val(),
                type: 'guardian',
            },
        },
        people_contact: $("[name='peopleContact']:checked").val(),
        payment_bill: $("[name='paymentCheck']:checked").val(),
        detail_below: valueBelow,
        location: {
            block: $("#block").val(),
            street: $("#street").val(),
            postal_code: parseInt($("#postalCode").val()),
            unit: $("#unit").val(),
            building: $("#building").val(),
        },
        company: {
            company_name: $("#companyName").val(),
            address: $("#billingAddress").val(),
            attention_to: $("#attention").val(),
            email_address: $("#billingEmailAddress").val(),
        },
        child_info: dataFor,
    };

    $.ajax({
        url: "check",
        method: "POST",
        data: {
            _token: _token,
            dataAll: allData,
        },
        success: function(data) {
            if (data.success == false) {
                let errorArr = [];
                let error = '';
                for (const [key, value] of Object.entries(data.message)) {
                    errorArr.push(value[0]);
                    error += `<p>${value[0]}</p>`
                }
                $(".error_message").html(error);
                $(window).scrollTop(0);
            } else {
                $(".message_success").text(data.message);
                $(".error_message").text("");
            }
        },
    });
}

if (
    $("[name='peopleContact']:checked").val() == "mother" &&
    $("[name='paymentCheck']:checked").val() == "mother"
) {
    addRequiredMother();
    removeRequiredFather();
    removeRequiredGuardian();
    removeNameFather();
} else if (
    $("[name='peopleContact']:checked").val() == "mother" &&
    $("[name='paymentCheck']:checked").val() == "other"
) {
    addRequiredMother();
    removeRequiredFather();
    removeRequiredGuardian();
    removeNameFather();
    removeNamedGuardian();
} else if (
    $("[name='peopleContact']:checked").val() == "mother" &&
    $("[name='paymentCheck']:checked").val() == "father"
) {
    addRequiredMother();
    addRequiredFather();
    removeRequiredGuardian();
    removeNamedGuardian();
} else if (
    $("[name='peopleContact']:checked").val() == "father" &&
    $("[name='paymentCheck']:checked").val() == "father"
) {
    addRequiredFather();
    removeRequiredMother();
    removeRequiredGuardian();
    removeNameMother();
    removeNamedGuardian();
} else if (
    $("[name='peopleContact']:checked").val() == "father" &&
    $("[name='paymentCheck']:checked").val() == "mother"
) {
    addRequiredFather();
    addRequiredMother();
    removeRequiredGuardian();
    removeNamedGuardian();
} else if (
    $("[name='peopleContact']:checked").val() == "father" &&
    $("[name='paymentCheck']:checked").val() == "other"
) {
    addRequiredFather();
    removeRequiredMother();
    removeRequiredGuardian();
    removeNameMother();
    removeNamedGuardian();
} else if (
    $("[name='peopleContact']:checked").val() == "guardian" &&
    $("[name='paymentCheck']:checked").val() == "father"
) {
    addRequiredGuardian();
    addRequiredFather();
    removeRequiredMother();
    removeNameMother();
} else if (
    $("[name='peopleContact']:checked").val() == "guardian" &&
    $("[name='paymentCheck']:checked").val() == "mother"
) {
    addRequiredGuardian();
    removeRequiredFather();
    addRequiredMother();
    removeNameFather();
} else if (
    $("[name='peopleContact']:checked").val() == "guardian" &&
    $("[name='paymentCheck']:checked").val() == "other"
) {
    addRequiredGuardian();
    removeRequiredFather();
    removeRequiredMother();
    removeNameFather();
    removeNameMother();
}