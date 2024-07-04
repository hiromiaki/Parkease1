<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="dashboardStyle.css">

    <style>
        main{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .container{
            max-width: 650px;
            padding: 28px;
            margin: 0 20px;
        }
        h2{
            font-size: 26px;
            font-weight: 600;
            text-align: left;
            color: #2f4f4f;
            padding-bottom: 8px;
            border-bottom: 1px solid silver;
        }
        .content{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px 0;
        }
        .input-box{
            display: flex;
            flex-wrap: wrap;
            width: 50%;
            padding-bottom: 15px;
        }
        .input-box:nth-child(2n){
            justify-content: end;
        }
        .input-box label, .gender-title{
            width: 95%;
            color: #2f4f4f;
            font-weight: bold;
            margin: 5px 0;
        }
        .gender-title{
            font-size: 16px;
        }
        .input-box input{
            height: 40px;
            width: 95%;
            padding: 0 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
        }
        .input-checkbox{
            paddin-bottom: 15px;
            font-family: sans-serif;
            font-size: 12px;
            font-weight: bold;
            color:#2f4f4f;
            height: 20px;
            width: 95%;
            outline: none;
        }
        .input-box input:is(:focus, :valid){
            box-shadow: 0 3px 6px rgba(0,0,0,0.2);
        }
        .gender-category{
            color: grey;
        }
        .gender-category label{
            padding: 0 20px 0 5px;
            font-size: 14px;
        }
        .gender-category label, .gender-category input{
            cursor: pointer;
        }
        .button-container{
            margin: 15px 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .button-container button{
            width: 50%;
            padding: 10px;
            display: block;
            flex-wrap: wrap;
            justify-content: space-between;
            font-size: 20px;
            color: #fff;
            border: none;
            border-radius: 5px;
            background-image: linear-gradient(to right, #ff914d, #ffda00);
        }
        .button-container button:hover{
            background-image: linear-gradient(to right, #ffda00, #ff914d);
        }
        @media(max-width:600px){
            .container{
                min-width: 280px;
            }
            .content{
                max-height: 30px;
                overflow: auto;
            }
            .input-box{
                margin-bottom: 12px;
                width: 100%;
            }
            .input-box:nth-child(2n){
                justify-content: space-between;
            }
            .gender-category{
                display:flex;
                justify-content: space-between;
                width: 60%;
            }
        }

        /*btn ssuccess or danger */

        .regCan{
            display: flex;
        }
.btn {
    padding: 10px 20px;
    margin: 0 5px; /* Adjust spacing between buttons */
    border: none;
    border-radius: 4px;
    cursor: pointer;
	display: block;
	flex-wrap: wrap;
    width: 100%;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.btn.btn-success {
    background-color: #5cb85c;
    color: white;
}

.btn.btn-success:hover {
    background-color: #4cae4c;
}

.btn.btn-danger {
    background-color: #d9534f; /* Red color for Cancel button */
    color: white;
    text-align: center;
}

.btn.btn-danger:hover {
    background-color: #c9302c;
}

        </style>

	<title>AddStaff</title>
</head>
<body>

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
        <i class='bx bxs-castle' style='color:#ff914d'></i>
			<span class="text">ParkEase</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="dashboard">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="tickets">
                <i class='bx bx-money'></i>
					<span class="text">Tickets</span>
				</a>
			</li>
			
			<li class="active">
				<a href="staff">
                <i class='bx bxs-group' ></i>
					<span class="text">Staff and Vendors</span>
				</a>
			</li>
			<li>
				<a href="events">
                <i class='bx bxs-calendar'></i>
					<span class="text">Events</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="/" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			

		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		
	<main>
    <div class="container">
        <form action="/staff/add" method="post" id="addStaff">
            <h2>Add Staff</h2>
            <div class="content">

                <div class="input-box">
                    <label for="name">Full Name</label>
                    <input type="text" required placeholder="Enter full name" name="Name" >
                </div>

                <div class="input-box">
                    <label for="position">Job Position</label>
                    <input type="text" placeholder="Enter job position" name="Position" required>
                </div>

                <div class="input-box">
                    <label for="Username">Username</label>
                    <input type="text" placeholder="Enter username" name="Username" required>
                </div>

                <div class="input-box">
                    <label for="phonenumber">Phone Number</label>
                    <input type="num" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="Enter phone number" name="ContactNo" required>
                </div>

                <div class="input-box">
                    <label for="Password">Password</label>
                    <input type="password" placeholder="Enter password" name="Password" id="password" required>
                </div>

                <div class="input-box">
                    <label for="Cpassword">Confirm Password</label>
                    <input type="password" placeholder="Confirm password" name="confirmPassword" id="confirmPassword" required>
                </div>

                <div class="input-checkbox">
                    <input type="checkbox" id="showPassword" onclick="togglePasswordVisibility()"> Show Password
                </div>

                <span class="gender-title">Gender</span>
                <div class="gender-category">
                    <input type="radio" name="Gender" value="Male" id="male">
                    <label for="gender">Male</label>
                    <input type="radio" name="Gender" value="Female" id="female">
                    <label for="gender">Female</label>
                </div>
</div>
<div class="regCan">
    <button type="button" onclick="validateForm()" class="btn btn-success btn-sn">Register</button> <br>
    <a href="staff" class="btn btn-danger btn-sn">Cancel</a>
</div>
</form>
</div>
</main>	
	</section>
    <script>
    function validateForm() {
        // Retrieve all input elements
        var genderSelected = document.querySelector('input[name="Gender"]:checked');
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmPassword").value;

      

        // Check if gender is selected
        if (!genderSelected) {
            alert("Please fill all the fields.");
            return false; // Prevent form submission
        }

        // Check if passwords match
        if (password !== confirmPassword) {
            alert("Passwords do not match.");
            return false; // Prevent form submission
        }

        // If all validations pass, submit the form
        document.getElementById("addStaff").submit();
        return true; // Allow form submission
    }

    function togglePasswordVisibility() {
        var password = document.getElementById("password");
        var confirmPassword = document.getElementById("confirmPassword");
        
        // Toggle password visibility
        if (password.type === "password" && confirmPassword.type === "password") {
            password.type = "text";
            confirmPassword.type = "text";
        } else {
            password.type = "password";
            confirmPassword.type = "password";
        }
    }
</script>

	<script src="dashboardScript.js"></script>
</body>
</html>