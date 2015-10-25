function showInfo() {
		var date_today = new Date();
		var title = document.getElementById('input_title').value;
		var fname = document.getElementById('input_fname').value;
		var mname = document.getElementById('input_mname').value;
		var lname = document.getElementById('input_lname').value;
		var content = document.getElementById('input_content').value;

		var fullname = fname + " " + mname + ". " + lname;
		
		document.getElementById('show_title').innerHTML = "Title: " + title;
		document.getElementById('show_name').innerHTML = "Name: " + fullname + ", " + date_today;
		document.getElementById('show_content').innerHTML = "Content" + content;
}