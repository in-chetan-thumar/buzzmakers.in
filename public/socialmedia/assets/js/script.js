function testAnim(e) {
	$(".error").removeClass().addClass(e + "error animated").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function () {})
}

function isValidEmailAddress(e) {
	return new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i).test(e)
}

function isNumber(e) {
	var r = (e = e || window.event).which ? e.which : e.keyCode;
	return !(r > 31 && (48 > r || r > 57))
}
function isValidMobileNumber(mobile) {
    var regex = /^[0-9]{10}$/; // Only allows 10 digits (numeric)
    return regex.test(mobile);
}

function onlyAlphabets(e, r) {
	try {
		if (window.event) var a = window.event.keyCode;
		else {
			if (!e) return !0;
			a = e.which
		}
		return a >= "65" && "90" >= a || a >= "97" && "122" >= a || "46" == a || "32" == a || "45" == a || "46" >= a || (alert("Please Enter Only Character values."), !1)
	} catch (e) {
		alert(e.Description)
	}
}
//done
$("#contactform").click(function () {
    $("#contact_success").hide();
    let disval = 1;

    var name = $("#name").val().trim(),
        mobile = $("#mobile").val().trim(),
        email = $("#email").val().trim(),
        website = $("#website").val().trim(),
        message = $("#Message").val().trim();
    // Basic validation
    if (name === "") {
        $("#name_error").show();
        disval = 0;
    } else {
        $("#name_error").hide();
    }

    if (email === "" || !isValidEmailAddress(email)) {
        $("#email_error").show();
        disval = 0;
    } else {
        $("#email_error").hide();
    }

    if (mobile === "" || !isValidMobileNumber(mobile)) {
        $("#mobile_error").show();
        disval = 0;
    } else {
        $("#mobile_error").hide();
    }

    if (disval === 1) {
        var dataString = $("#contact_form").serialize();

        $.ajax({
            type: "POST",
            url: "process_middle.php", // used only to return '1' or error
            data: dataString,
            beforeSend: function () {
                $("#contactform").attr("disabled", true);
            },
            success: function (response) {
                $("#contactform").attr("disabled", false);
                $("#contact_form")[0].reset();

                if (response == "1") {
					alert('fgd')
                    // Redirect with form data in query string
                    window.location.href = "thank-you.php?" +
                        "name=" + encodeURIComponent(name) +
                        "&email=" + encodeURIComponent(email) +
                        "&mobile=" + encodeURIComponent(mobile) +
                        "&website=" + encodeURIComponent(website) +
                        "&message=" + encodeURIComponent(message);
                } else {
                    $("#contact_widget").hide();
                    $("#contact_error").html(response);
                    $("#contact_success").show();
                }
            }
        });
    }

    return false;
});
//done
 $("#contactform1").click(function () {
	$("#contact_success").hide(), disval = 1;
	var e = $("#name1").val(),
		r = $("#mobile1").val(),
		a = $("#email1").val();
	if (("" == e || "" == a || "" == r) && ($("#name_error1").show(), $("#email_error1").show(), $("#mobile_error1").show(), disval = 0), 
    "" == e ? ($("#name_error").show(), disval = 0) : $("#name_error").hide(), 
    "" != a && isValidEmailAddress(a) ? $("#email_error1").hide() : ($("#email_error1").show(), disval = 0), 
    "" != r && isValidMobileNumber(r) ? $("#mobile_error1").hide() : ($("#mobile_error1").show(), disval = 0), 
    1 == disval) {
		return dataString = $("#contact_form1").serialize(), $.ajax({
			type: "POST",
			url: "process_prop_b.php",
			data: dataString,
			beforeSend: function () {
				$("#contactform1").attr("disabled", !0)
			},
			success: function (e) {
				$("#contactform1").attr("disabled", !1), $("#contact_form1")[0].reset(), 1 == e ? window.location.replace("thank-you.php") : ($("#contact_widget").hide(), $("#contact_error").html(e), $("#contact_success").show())
			}
		}), !1
	}
	return !1
}), 
//done
$("#contactform2").click(function () {
	$("#contact_success").hide(), disval = 1;
	var e = $("#name2").val(),
		r = $("#mobile2").val(),
		a = $("#email2").val();
	if (("" == e || "" == a || "" == r) && ($("#name_error2").show(), $("#email_error2").show(), $("#mobile_error2").show(), disval = 0), 
    "" == e ? ($("#name_error2").show(), disval = 0) : $("#name_error2").hide(), 
    "" != a && isValidEmailAddress(a) ? $("#email_error2").hide() : ($("#email_error2").show(), disval = 0), 
    "" != r && isValidMobileNumber(r) ? $("#mobile_error2").hide() : ($("#mobile_error2").show(), disval = 0), 
    1 == disval) {
		return dataString = $("#contact_form2").serialize(), $.ajax({
			type: "POST",
			url: "process_home.php",
			data: dataString,
			beforeSend: function () {
				$("#contactform2").attr("disabled", !0)
			},
			success: function (e) {
				$("#contactform2").attr("disabled", !1), $("#contact_form2")[0].reset(), 1 == e ? window.location.replace("thank-you.php") : ($("#contact_widget").hide(), $("#contact_error").html(e), $("#contact_success").show())
			}
		}), !1
	}
	return !1
}), 
//done
$("#contactform3").click(function () {
	$("#contact_success").hide(), disval = 1;
	var e = $("#name3").val(),
		r = $("#mobile3").val(),
		a = $("#email3").val();
if (("" == e || "" == a || "" == r) && ($("#name_error3").show(), $("#email_error3").show(), $("#mobile_error3").show(), disval = 0), 
    "" == e ? ($("#name_error").show(), disval = 0) : $("#name_error").hide(), 
    "" != a && isValidEmailAddress(a) ? $("#email_error3").hide() : ($("#email_error3").show(), disval = 0), 
    "" != r && isValidMobileNumber(r) ? $("#mobile_error3").hide() : ($("#mobile_error3").show(), disval = 0), 
    1 == disval) {
		return dataString = $("#contact_form3").serialize(), $.ajax({
			type: "POST",
			url: "process_home_bottom.php",
			data: dataString,
			beforeSend: function () {
				$("#contactform3").attr("disabled", !0)
			},
			success: function (e) {
				$("#contactform3").attr("disabled", !1), $("#contact_form3")[0].reset(), 1 == e ? window.location.replace("thank-you.php") : ($("#contact_widget").hide(), $("#contact_error").html(e), $("#contact_success").show())
			}
		}), !1
	}
	return !1
}),

//done
 $("#contactform5").click(function () {
	$("#contact_success").hide(), disval = 1;
	var e = $("#name5").val(),
		r = $("#mobile5").val(),
		a = $("#email5").val();
	if (("" == e || "" == a || "" == r) && ($("#name_error5").show(), $("#email_error5").show(), $("#mobile_error5").show(), disval = 0), "" == e ? ($("#name_error5").show(), disval = 0) : $("#name_error5").hide(), "" != a && isValidEmailAddress(a) ? $("#email_error5").hide() : ($("#email_error5").show(), disval = 0), "" == r ? ($("#mobile_error5").show(), disval = 0) : $("#mobile_error5").hide(), 1 == disval) {
		return dataString = $("#contact_form5").serialize(), $.ajax({
			type: "POST",
			url: "process_prop_h.php",
			data: dataString,
			beforeSend: function () {
				$("#contactform5").attr("disabled", !0)
			},
			success: function (e) {
				$("#contactform5").attr("disabled", !1), $("#contact_form5")[0].reset(), 1 == e ? window.location.replace("thank-you.php") : ($("#contact_widget").hide(), $("#contact_error").html(e), $("#contact_success").show())
			}
		}), !1
	}
	return !1
}), 
//done
 $("#contactform6").click(function () {
	$("#contact_success").hide(), disval = 1;
	var e = $("#name6").val(),
		r = $("#mobile6").val(),
		a = $("#email6").val();
	if (("" == e || "" == a || "" == r) && ($("#name_error6").show(), $("#email_error6").show(), $("#mobile_error6").show(), disval = 0), "" == e ? ($("#name_error6").show(), disval = 0) : $("#name_error6").hide(), "" != a && isValidEmailAddress(a) ? $("#email_error6").hide() : ($("#email_error6").show(), disval = 0), "" == r ? ($("#mobile_error6").show(), disval = 0) : $("#mobile_error6").hide(), 1 == disval) {
		return dataString = $("#contact_form6").serialize(), $.ajax({
			type: "POST",
			url: "process_prop_j.php",
			data: dataString,
			beforeSend: function () {
				$("#contactform6").attr("disabled", !0)
			},
			success: function (e) {
				$("#contactform6").attr("disabled", !1), $("#contact_form6")[0].reset(), 1 == e ? window.location.replace("thank-you.php") : ($("#contact_widget").hide(), $("#contact_error").html(e), $("#contact_success").show())
			}
		}), !1
	}
	return !1
}),

setTimeout(function () {
	$("#contact_success").fadeOut("fast")
}, 1e4), $(function () {
	$(".img-modal-btn.right").on("click", function (e) {
		return e.preventDefault(), cur = $(this).parent().find("img:visible()"), next = cur.next("img"), par = cur.parent(), next.length || (next = $(cur.parent().find("img").get(0))), cur.addClass("hidden"), next.removeClass("hidden"), !1
	}), $(".img-modal-btn.left").on("click", function (e) {
		return e.preventDefault(), cur = $(this).parent().find("img:visible()"), next = cur.prev("img"), par = cur.parent(), children = cur.parent().find("img"), next.length || (next = $(children.get(children.length - 1))), cur.addClass("hidden"), next.removeClass("hidden"), !1
	}), $("#email").keypress(function (e) {
		$("#email_error").hide()
	})
});