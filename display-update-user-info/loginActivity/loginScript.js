const checkBtn = document.getElementById("show");

function show() {
  const s = document.getElementById("psw");
  
  if (s.type === "password") {
    s.type = "text";
	
  } else {
    s.type = "password";
	
  }
}

checkBtn.addEventListener("click", (e) => {
	show();
});	
