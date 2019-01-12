// totop
var totop = document.getElementById("totop");
if (totop) {

    var target = 0;
    totop.onclick = function() {
        clearInterval(timer);
        var timer = setInterval(function() {
            target = document.body.scrollTop;
            target -= Math.ceil(target / 10);
            window.scrollTo(0, target);
            if (target == 0) {
                clearInterval(timer);
            }
        }, 10);
    };
};

// formcheck


function check() {
    var firstname = document.getElementById("firstname");
    if (firstname) {
        if (firstname.value == '') {
            alert("Please enter your firstname.");
            firstname.focus();
            return false;
        }
    }

    var lastname = document.getElementById("lastname");
    if (lastname) {
        if (lastname.value == '') {
            alert("Please enter your lastname.");
            lastname.focus();
            return false;
        }
    }

    var email = document.getElementById('email');
    if (email) {
        if (email.value == '') {
            alert('Please enter your email.');
            email.focus();
            return false;
        } else {
            var vemail = /^[0-9a-zA-Z]+(?:[\_\.\-][a-z0-9\-]+)*@[a-zA-Z0-9]+(?:[-.][a-zA-Z0-9]+)*\.[a-zA-Z]+$/i;
            if (!vemail.test(email.value)) {
                alert('Please check your email address.');
                email.focus();
                return false;
            }
        }
    }
}