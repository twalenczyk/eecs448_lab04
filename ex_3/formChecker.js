/* Author: Taylor Walenczyk */

var validate = function() {
	// Validate form fields
	let emailRegex = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/
	let email = document.getElementById('email').value
	let pass = document.getElementById('password').value
	let quantities = [
		document.getElementById('ban_q').value,
		document.getElementById('app_q').value,
		document.getElementById('or_q').value
	]
	
	if(!emailRegex.exec(email)) { // checks to make sure the emailRegex matches
		alert('You must enter a valid email address.')
                return false
	}

	if(!pass) { // ensures that the password is not null
		alert('You must have a password.')
                return false	
	}

	for(let i = 0; i < quantities.length; i++) {
		let temp = parseInt(quantities[i], 10)
		
		if(temp || temp === 0) { // ensures that temp exists/is a number
			if(temp < 0) {
				alert('A quanitity is negative.')
                        	return false
			}	
		} else {
			let slot = i+1
			alert('Quantity ' + slot + ' is not an integer.')
			return false
		}
	}

	return true
}
