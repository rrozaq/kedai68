$(document).ready(function (e) {
	$("#testi").on('submit',(function(e) {
		e.preventDefault();
    var data = new FormData();
    data.append('name', $("#name").val());
    data.append('country', $("#country").val());
    data.append('pesan', $("#pesan").val());
    // Ambil data foto yang dipilih pada form, dan masukkan ke variabel data
    data.append('foto', $("#img")[0].files[0]);
		$.ajax({
      url: "testiadd.php",
			type: "POST",
			data:  data,
      processData: false,
      contentType: false,

			success: function(data)
		    {
			       if (data == "good") {
                swal("Welldone", data, "success")
                $("#name").val("");
                $("#country").val("");
                $("#pesan").val("");
             }else {
               swal("Sorry", data, "error")
             }
		    }
	   });
	}));
});
