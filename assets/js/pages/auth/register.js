const notyf = new Notyf({
	duration: 3000,
	position: {
		x: "right",
		y: "top",
	},
	ripple: true,
	dismissible: true,
});

$("#registerBtn").on("click", function () {
	clearErrors();

	$.ajax({
		url: base_url + "register",
		type: "POST",
		dataType: "json",
		data: {
			nik: $("#nik").val(),
			nama: $("#nama").val(),
			no_hp: $("#no_hp").val(),
			email: $("#email").val(),
			password: $("#password").val(),
			confirm_password: $("#confirm_password").val(),
			[csrfName]: csrfHash,
		},

		success: function (res, status, xhr) {
			if (xhr.status === 201) {
				notyf.success(res.message);
				setTimeout(() => {
					window.location.href = res.redirect;
				}, 1200);
			}
		},

		error: function (xhr) {
			if (xhr.status === 422) {
				let res = xhr.responseJSON;

				notyf.error(res.message);
				showErrors(res.errors);
				return;
			}

			notyf.error("Terjadi kesalahan server");
		},
	});
});

function clearErrors() {
$(".input, input[type='password']").removeClass("is-invalid is-valid");
	$(".helper-text").remove();
}

function showErrors(errors) {
	for (const key in errors) {
		const errorMsg = errors[key];
		const input = $(`#${key}`);
		input.addClass("is-invalid");

		input.siblings(".helper-text").remove();

		input
			.closest(".input")
			.after(`<span class="helper-text ps-3">${errorMsg}</span>`);
	}
}
