$(document).ready(function () {
    $("#bmiForm").submit(function (event) {
        let name = $("#name").val().trim();
        let weight = $("#weight").val();
        let height = $("#height").val();

        if (name === ""  weight === ""  height === "") {
            alert("يرجى ملء جميع الحقول!");
            event.preventDefault();
        } else if (isNaN(weight)  isNaN(height)  height <= 0) {
            alert("يرجى إدخال قيم صحيحة!");
            event.preventDefault();
        }
    });
});