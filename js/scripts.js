// Adding Elements (DragonStuff)

function addElement() {
  var ni = document.getElementById('myDiv');
  var newdiv = document.createElement('div');
  newdiv.innerHTML = '<div class="alert alert-dismissible alert-success"><button type="button" class="close" data-dismiss="alert">×</button><strong>Well done!</strong> You are definitely awake</a>.</div>';
  ni.appendChild(newdiv);
}
