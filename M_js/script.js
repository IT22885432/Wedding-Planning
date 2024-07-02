function changeImage() {
    // alert("changeImage");
    var image = document.getElementById("profileimg"); //file chooser
    var prev = document.getElementById("prev0"); //image tag

    image.onchange = function() {

        var file0 = this.files[0];

        var url0 = window.URL.createObjectURL(file0);

        prev.src = url0;
    }
}

// function saveData() {
//     var image = document.getElementById("profileimg");

//     var form = new FormData();
//     form.append("i", image.files[0]);

//     var r = new XMLHttpRequest();
//     r.onreadystatechange = function() {
//         if (r.readyState == 4) {
//             var text = r.responseText;
//             alert(text);
//         }
//     }

//     r.open("POST", "updateProfile.php", true);
//     r.send(form);
// }