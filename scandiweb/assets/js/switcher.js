function switcher() {
    var selectBox = document.getElementById("productType");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    const a = selectedValue;
    var collection = document.getElementsByClassName("selectable");
    for (i = 0; i < 3; i++) {
        collection[i].style.display = "none";
    }
    document.getElementById(a).style.display = "block";
}
