function sayHello() {
    //alert("Hello! Welcome to the landing page!");
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "click.php", true); // Call a separate PHP file
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Set up a function to handle the response
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("result").innerHTML = xhr.responseText;
        }
    };

    // Send the request
    xhr.send("action=clicked");
}
