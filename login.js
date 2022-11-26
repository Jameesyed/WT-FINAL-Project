function isValid(pForm) {
	console.log(pForm.action);
	console.log(pForm.username.value);
	console.log(pForm.password.value);

	if (pForm.username.value === "" && pForm.password.value === "") {
		console.log("Please fill up the form properly");
		return false;
	}

}