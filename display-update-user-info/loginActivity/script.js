const checkBtn = document.getElementById("show");

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
