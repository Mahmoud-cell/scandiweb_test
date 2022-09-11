function validateMyForm() {
  var size = document.getElementById("size").value;
  var height = document.getElementById("height").value;
  var width = document.getElementById("width").value;
  var length = document.getElementById("length").value;
  var weight = document.getElementById("weight").value;
  var furnitureDimensions = [height, width, length];

  for (var i = 0; i < 3; i++) {
    var furnitureArr = furnitureDimensions[i];
  }

  if (size == 0 && weight == 0 && furnitureArr == 0) {
    document.write(
      "<h1>please fill data then select an option and insert the required data!</h1>"
    );
    event.preventDefault();
  }
}
