var counter = 0;

function countinc() {
	counter++;
	document.getElementById('amount').innerText = counter;
}

function countdec() {
	if (counter >0) {
		counter--;
	document.getElementById('amount').innerText = counter;
	}
}
