function ValidateEmail() {
    var mailformat = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var x = document.getElementById("email").value;
    var y = document.getElementById("confirm-email").value;
    //Check if user enter a valid email
    if (x === "") {
        alert("Enter a valid email")
        return (false)
    }
    //Check if user have entered both fields
    if ((x != "") && (y === "")) {
        alert("Enter both fields")
        return (false)
    }
    //Check if mail has the right format
    if (!x.match(mailformat)) {
        alert("Enter a valid email")
        return (false)
    }
    //Check if they match
    if (x.match(mailformat) && (x != y)) {
        alert("Emails does not match")
        return (false)
    }
    if (x.match(mailformat) && (x == y)) {
        return (true)

    }

}