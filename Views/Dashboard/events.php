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

	#content main .ticketInfo {
	display: column;
	grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
	grid-gap: 24px;
	margin-top: 36px;
	}

	#content main .ticketInfo li {
	padding: 10px;
	background: var(--light);
	border-radius: 20px;
	display: flex;
	align-items: center;
	grid-gap: 50px;
	}

	#content main .ticketInfo li img{
	width: 300px;
	height: auto;
	position: center;
	left: -40x;
	}

#content main .ticketInfo li .bx {
	width: 80px;
	height: auto;
	border-radius: 10px;
	font-size: 30px;
	display: flex;
	justify-content: center;
	align-items: left;
	margin-left: -25px;
}

#content main .ticketInfo li .text h3 {
	font-size: 24px;
	font-weight: 600;
	color: var(--dark);
	
}
#content main .ticketInfo li .text p {
	color: var(--dark);	
}


	</style>

	<title>Tickets</title>
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
			
			<li>
				<a href="staff">
                <i class='bx bxs-group' ></i>
					<span class="text">Staff and Vendors</span>
				</a>
			</li>
			<li class="active">
				<a href="#">
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
			<div class="head-title">
				<div class="left">
					<h1>Event Management</h1>
				</div>
			</div>

			<ul class="ticketInfo">
				<li>
					<img src="photos/Regular.png">
					<span class="text">
						<h3>500 PHP</h3>
						<h4>Regular Day Pass</h4>
						<p>Inclusive of access to all rides except for the events. Welcome to the thrill-seeker's paradise! Our Regular Tickets are your gateway to a day filled with endless excitement. Experience heart-pounding roller coasters, whimsical rides, and magical shows.</p>
						<br>
						<i class='bx bx-edit'></i>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<ul class="box-info">
				<li>
                <a href="">
				<i class='bx bxs-check-circle'></i>
					<span class="text">
						<h3>Tickets Available</h3>
					</span>
                </a>
				</li>
				<li>
				<a href="scanner">
                <i class='bx bx-qr-scan'></i>
					<span class="text">
						<h3>Tickets Scanner</h3>
					</span>
                </a>
				</li>
			        </ul>
				</div>
			</div>
		</main>
	</section>

	<script src="dashboardScript.js"></script>
</body>
</html>