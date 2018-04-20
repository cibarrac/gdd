function process(file) {

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("content").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "model/"+file, true);
  xhttp.send();
}

/** use in navbar.php **/
$( "#start" ).click(function() {
    getView('model.php');
});
