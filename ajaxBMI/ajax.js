function ajax() {
    var debug = true;
    var gewicht = document.getElementById("gewicht").value;
    var lengte = document.getElementById("lengte").value;

    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else  {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    var controlScript = "ajax.php";
    var httpString = controlScript + "?gewicht=" + gewicht + "&lengte=" + lengte;
    var httpResponse = "";
    if (debug) console.log(httpString);
    xmlhttp.open("GET", httpString, true);
    xmlhttp.send();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 & xmlhttp.status == 200) {
            if(debug) console.log("http response = " + xmlhttp.responseText);
            httpResponse = xmlhttp.responseText;
            document.getElementById("resultaat").innerHTML = httpResponse;

        }
    }
}
