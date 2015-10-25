function showInfo() {
		var fname = document.getElementById('input_fname').value;
		var mname = document.getElementById('input_mname').value;
		var lname = document.getElementById('input_lname').value;
		var content = document.getElementById('input_content').value;
		
		var date_today = new Date();
		document.getElementById('first_name').innerHTML = "First Name: " + fname;
		document.getElementById('middle_name').innerHTML = "Middle Name: " + mname;
		document.getElementById('last_name').innerHTML = "Last Name: " + lname;
		document.getElementById('content').innerHTML = "Content: " + content + " " + date_today;
}