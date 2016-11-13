<?php
?>
<script>
    var xhttp;
    if (window.XMLHttpRequest) {
        xhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    function checkAccount() {
        var account = document.getElementById("account").value;
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("check_mesg").innerHTML =
                    this.responseText;
            }
        };
        xhttp.open("GET", "brad59.php?account=" + account, true);
        xhttp.send();
    }
</script>
<form>
    Account : <input id="account" name="account" onblur="checkAccount()" />
    <span id="check_mesg"></span><br />
    Password : <input type="password" name="passwd" /><br />
    <input type="submit" value="Add" />
</form>

