$("#sendMail").on("click", function() {
	var name = $("#name").val();
	var email = $("#email").val();
	var subject = $("#subject").val();
	var message = $("#message").val();

    if(name == "") {
        alert("Введите Имя");
    	return false;
    } else if (email == "") {
    	alert("Введите E-mail");
    	return false;
    } else if (name != "", email != "") {
        alert("Сообщение отправлено.");
        $("#mailForm").trigger("reset");
    }
$.ajax({
url: '../ajax/mail.php',
type: 'POST',
cache: false,
data: { 'name': name, 'email': email, 'subject': subject, 'message': message },
dataType: 'html',
beforeSend: function() {
    $("sendMail").prop("disabled", true);
}
});
});