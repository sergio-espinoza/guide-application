

<!DOCTYPE html>
<html>
<body>

<h1>The XMLHttpRequest Object</h1>

<div id="demo">
<label >esto es un label</label>
<p>vsdsdvkvdsk
sacsacsca</p>
<h2>sacsclsdvmkldvslmk</h2></div>

<button type="button" onclick="loadDoc()">Change Content</button>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "2.html", true);
  xhttp.send();
}
</script>

</body>
</html>
