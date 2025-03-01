function login() {
	let u = document.querySelector("#user_input").value;
	let p = document.querySelector("#pass_input").value;
	let url = "login.php?u=" + u + "&p=" + p;
	fetch(url)
		.then(resp => resp.json())
		.then(res => callback(res));
}

function logout() {
	fetch("logout.php")
		.then(resp => resp.text())
		.then(res => (res === "true") 
		   ? window.location.href = 'index.php'
		   : undefined 
		);
}

function callback (result) {
	console.log(result.msg)
	if (result.success === "true") {
		window.location.href = 'lockedPage.php';
	}
}	