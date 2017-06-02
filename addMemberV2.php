<script>
    if (window.XMLHttpRequest) {
        // code for modern browsers
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for old IE browsers
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    
    function precheck() {
        account = document.getElementById('account').value;
        xmlhttp.onreadystatechange = callBack1 ;
        xmlhttp.open("GET", "eric52.php?a="+account, true);
        xmlhttp.send();
    }



    function callBack1() {
                   if (this.readyState == 4 && this.status == 200) {
                var result =this.responseText;
                if (result != "OK"){

                    document.getElementById("acc").innerHTML="重複"
                    document.getElementById("account").focus();
                }else
                {
                    document.getElementById("acc").innerHTML="很好"
                }
            }

    }


</script>

<form action="addAccount.php">
    <table border="1" >
        <tr>
            <th>Account</th>
            <td><input type="text" id="account" name="account" onblur="precheck()"><span id="acc"></span></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="password" name="passwd"></td>
        </tr>
        <tr>
            <th>Real name</th>
            <td><input type="text" name="rname"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="create"></td>
        </tr>
    </table>
</form>
<div id="demo"></div>