function isValid(pForm) {
	console.log(pForm.action);
	console.log(pForm.name.value);
    console.log(pForm.email.value);
    console.log(pForm.username.value);
    console.log(pForm.password.value);
    console.log(pForm.cnfrmPass.value);
    console.log(pForm.gender.value);

	if (pForm.name.value === "" && pForm.username.value === "" && pForm.email.value === "" && pForm.password.value === "" && pForm.cnfrmPass.value === "" && pForm.gender.value === "") {
		console.log("Please fill up the form properly");
		return false;
	}

}