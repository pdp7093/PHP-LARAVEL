function register(str) {
    //Firstname
    if (str.firstname.value == "") {

        document.getElementById("msg1").innerHTML = "Please enter Some Value in Firstname";
        str.firstname.focus();
        return false;
        // console.log(msg);
    }
    if (!str.firstname.value.match(/^[a-zA-Z]{1,}$/)) {
        document.getElementById("msg1").innerHTML = "Please enter Only Character Value";
        str.firstname.focus();
        return false;
    }

    //Lastname
    if (str.lastname.value == "") {

        document.getElementById("msg1").innerHTML = "Please enter Some Value in Firstname";
        str.lastname.focus();
        return false;
        // console.log(msg);
    }
    if (!str.lastname.value.match(/^[a-zA-Z]{1,}$/)) {
        document.getElementById("msg1").innerHTML = "Please enter Only Character Value";
        str.lastname.focus();
        return false;
    }

    //Email
    if (str.email.value == "") {
        document.getElementById("msg1").innerHTML = "! Please enter Some Value in Email";
        str.email.focus();
        return false;
    }
    if (!str.email.value.match(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,3})+$/)) {
        document.getElementById("msg1").innerHTML = "! Please enter Correct Email Address";
        str.email.focus();
        return false;
    }

    //Mobile No
    if (str.mobile.value == "") {
        document.getElementById("msg1").innerHTML = "Please Enter Mobile Number"
        str.mobile.focus();
        return false;
    }
    if (!str.mobile.value.match(/^[0-9]{1,10}$/)) {
        document.getElementById("msg1").innerHTML = "Please Enter Correct Mobile Number"
        str.mobile.focus();
        return false;
    }

    //Address
    if (str.address.value == "") {
        document.getElementById("msg1").innerHTML = "! Please Enter Some Value in Address";
        str.address.focus();
        return false;
    }

    //Gender
    var gen_arr = document.getElementByName("gender");
    if (gen_arr[0].checked == true) {

    }
    else if (gen_arr[1].checked == true) {

    }
    else {
        document.getElementById("msg1").innerHTML = "! Please Select Gender";
        return false;
    }

    //Username
    if (str.username.value == "") {
        document.getElementById("msg1").innerHTML = "! Please enter Some Value in User Name";
        str.username.focus();
        return false;
    }
    if (!str.username.value.match(/^[a-zA-Z]{1,}$/)) {
        document.getElementById("msg1").innerHTML = "! Please enter Only Character Value";
        str.username.focus();
        return false;
    }

    //Password
    if (str.password.value == "") {
        document.getElementById("msg1").innerHTML = "! Please enter Some Value in Password";
        str.password.focus();
        return false;
    }


    if (str.password.value.length < 8) {
        document.getElementById("msg1").innerHTML = "! Please enter minimum 8 digit length";
        str.password.focus();
        return false;
    }

    //Profile Photo
    if (str.image.value == "") {
        document.getElementById("msg1").innerHTML = "! Please Upload Photo";
        str.image.focus();
        return false;
    }

    var image = document.getElementById("image");
    var img_size_mb = parseFloat(image.files[0].size / (1024 * 1024 * 1024 * 1024 * 1024)).toFixed(5);
    if (img_size_mb > 5) {
        document.getElementById("msg1").innerHTML = "! Please select image size less than 5 MB ";
        str.image.focus();
        return false;
    }
}
