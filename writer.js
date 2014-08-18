function testSupport() {
	if(localStorage)
		return true;
	else
		alert("Local storage unsupported. You will not be able to save your documents locally.");
}

function loadValue() {
	document.getElementById("z").innerHTML = localStorage.getItem("header");
	document.getElementById("x").innerHTML = localStorage.getItem("text");
	document.select.save.value = "Saved at " + localStorage.getItem("time");
}

function storeValue() {
	var w = document.getElementById("z").innerHTML;
	localStorage.setItem("header",w);
	var y = document.getElementById("x").innerHTML;
	localStorage.setItem("text",y);
	var time = Date();
	document.select.save.value = "Saved at " + time;
	localStorage.setItem("time",time);
}

function clearValue() {
	var init_header = 'I am a header,';
	localStorage.setItem("header",init_header);
	var init_text = 'This is an <i>instant text editor</i>. You can write whatever you like to and enhance the readability of your text directly in the browser without depending on text editors such as TextEdit, Microsoft Word, LibreOffice and likewise. This tool saves your document automatically for offline use. Just start typing - yes - instantly.';
	localStorage.setItem("text",init_text);
}