<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="/dashboardStyle.css">

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

	<title>EditStaff</title>
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
				<a href="/dashboard">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="/tickets">
                <i class='bx bx-money'></i>
					<span class="text">Tickets</span>
				</a>
			</li>
			
			<li class="active">
				<a href="/staff">
                <i class='bx bxs-group' ></i>
					<span class="text">Staff and Vendors</span>
				</a>
			</li>
			<li>
				<a href="/events">
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
        <form action="<?= base_url('update/'.$staff['staff_ID'])?>" method="post" onsubmit="return checkFormChanges()">
            <h2>Edit Staff</h2>
            <div class="content">

                <div class="input-box">
                    <label for="name">Full Name</label>
                    <input type="text" placeholder="Enter full name" name="Name" value="<?= $staff['Name'] ?>" required>
                </div>

                <div class="input-box">
                    <label for="position">Job Position</label>
                    <input type="text" placeholder="Enter job position" name="Position" value="<?= $staff['Position'] ?>" required>
                </div>

                <div class="input-box">
                    <label for="Username">Username</label>
                    <input type="text" placeholder="Enter username" name="Username" value="<?= $staff['Username'] ?>"  required>
                </div>

                <div class="input-box">
                    <label for="phonenumber">Phone Number</label>
                    <input type="tel" placeholder="Enter phone number" name="ContactNo" value="<?= $staff['ContactNo'] ?>"  required>
                </div>

                <div class="input-box">
                    <label for="Password">Password</label>
                    <input type="password" placeholder="Enter password" name="Password" id="password" value="<?= $staff['Password'] ?>" required>
                </div>

                <div class="input-box">
                    <label for="Cpassword">Confirm Password</label>
                    <input type="password" placeholder="Confirm password" name="confirmPassword" id="confirmPassword" value="<?= $staff['Password'] ?>" required>
                </div>

                <div class="input-checkbox">
                    <input type="checkbox" id="showPassword" onclick="togglePasswordVisibility()"> Show Password
                </div>

                <div class="input-box">
                    <label for="Gender">Gender</label>
                    <input type="gender" placeholder="Enter Gender" name="Gender" value="<?= $staff['Gender'] ?>" required>
                </div>
               
</div>
<div class="regCan">
    <button onclick="validateForm()" class="btn btn-success btn-sn">Update</button> <br>
    <a href="/staff" class="btn btn-danger btn-sn">Cancel</a>
</div>
</form>
</div>
</main>	
	</section>
    <script>
    function validateForm() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmPassword").value;

       // Check if passwords match
        if (password !== confirmPassword) {
            alert("Passwords do not match.");
            return;
        }

        // If all validations pass, submit the form
        document.getElementById("addStaff").submit();

    }

    function checkFormChanges() {
        var originalData = {
            Name: '<?= $staff['Name'] ?>',
            Gender: '<?= $staff['Gender'] ?>',
            ContactNo: '<?= $staff['ContactNo'] ?>',
            Position: '<?= $staff['Position'] ?>',
            Username: '<?= $staff['Username'] ?>',
            Password: '<?= $staff['Password'] ?>'
        };

        var formData = {
            Name: document.getElementsByName('Name')[0].value,
            Gender: document.getElementsByName('Gender')[0].value,
            ContactNo: document.getElementsByName('ContactNo')[0].value,
            Position: document.getElementsByName('Position')[0].value,
            Username: document.getElementsByName('Username')[0].value,
            Password: document.getElementsByName('Password')[0].value
        };

        for (var key in originalData) {
            if (originalData[key] !== formData[key]) {
                return true; // Changes detected, allow form submission
            }
        }

        alert("Please select data you want to update."); // No changes detected, show alert
        return false; // Prevent form submission
    }

    function togglePasswordVisibility() {
        var password = document.getElementById("password");
        var confirmPassword = document.getElementById("confirmPassword");
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