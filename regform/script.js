const loginForm = document.getElementById("login-container");
const resetBtn = document.getElementById("cancel");
const submitBtn = document.getElementById("login");
const checkBtn = document.getElementById("show");

submitBtn.addEventListener("click", (e) => {
	const studId = loginForm.studId.value;
	const fullName = loginForm.fullName.value;
    const un = loginForm.un.value;
	const bday = loginForm.bday.value;
    const psw = loginForm.psw.value;
	const psw2 = loginForm.psw2.value;
	const container = document.querySelector("#username");
	
	if (studId === '' || fullName === '' ) {
		alert("All input field must be filled out!");
		clearForm();
	}
    else if (un === '' || bday === '') {
		alert("All input field must be filled out!");
		clearForm();
	}
	else if (psw === '' || psw2 === '') {
		alert("All input field must be filled out!");
		clearForm();
	}
	else if (psw != psw2) {
        alert("Confirm password is incorrect");
		clearForm();
    } 
	else {
        alert("You have login successfully!");
    }
});

function clearForm() {
	loginForm.studId.value = "";
	loginForm.fullName.value = "";
	loginForm.un.value = "";
	loginForm.bday.value = "";
	loginForm.psw.value = "";
    loginForm.psw2.value = "";
};

resetBtn.addEventListener("click", (e) => {
	resetFunction();
	removeFunction();
});	

function resetFunction() {
	 document.getElementById("login-container").reset();
}

function removeFunction() {
	const element = document.querySelector("p");
	element.remove();
}

function show() {
  const s = document.getElementById("psw");
  const s2 = document.getElementById("psw2");
  if (s.type === "password" && s2.type === "password") {
    s.type = "text";
	s2.type = "text";
  } else {
    s.type = "password";
	s2.type = "password";
  }
}

checkBtn.addEventListener("click", (e) => {
	show();
});	
