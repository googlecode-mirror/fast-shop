function isNotEmpty(elem) {
    var str = elem.value;
    var re = /.+/;
    if(!str.match(re)) {
        alert("Please fill in the required field.");
        elem.focus();
        return false;
    } else {
        return true;
    }
}
   
//validates that the entry is a positive or negative number
function isNumber(elem) {
    var str = elem.value;
    var re = /^[-]?\d*\.?\d*$/;
    str = str.toString( );
    if (!str.match(re)) {
        alert("Enter only numbers into the field.");
        return false;
    }
    return true;
}
   
// validates that the entry is 16 characters long when
// input field's maxlength attribute is set to 16
function isLen16(elem) {
    var str = elem.value;
    var re = /\b.{16}\b/;
    if (!str.match(re)) {
        alert("Entry does not contain the required 16 characters.");
        return false;
    } else {
        return true;
    }
}
   
// validates that the entry is formatted as an email address
function isEMailAddr(elem) {
    var str = elem.value;
    var re = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
    if (!str.match(re)) {
        alert("Verify the email address format.");
        return false;
    } else {
        return true;
    }
}
