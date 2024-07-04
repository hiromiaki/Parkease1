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
	display: flex;
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

.ticketpage{
	padding: 0;
	margin: 30px auto;
	box-sizing: border-box;
	color: black;
	max-width: 1500px;
	width: 95%;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	margin: auto;
}

.card{
	max-width: 375px;
	flex: 1 1 210px;
	text-align: center;
	height: 700px;
	border: 1px solid lightgray;
	margin: 20px;
	flex-direction: column;
}

.card .image{
	height: 50%;
	margin-bottom: 10px;
}

.card .image img{
	width: 100%;
	height: 100%;
	object-fit: cover;
}

.card .caption{
	padding-left: 1em;
	text-align: left;
	line-height: 3em;
	height: 15%;
	margin-bottom: 50px;
}

.card .caption p{
	font-size: 1.5rem;
}

.card .caption .title{
	font-weight: bold;
	margin-top: -130px;
}
.card .caption .description{
	font-size: 15px;
	line-height: 20px;
}


.button{
	display: flex;
	width: 80%;
	cursor: pointer;
	margin-top: 2em;
	position: relative;
	text-align: bottom;
	align-self: flex-start;
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

	<title>Tickets</title>
</head>
<body>

	<!-- SIDEBAR -->
	<section id="sidebar">
	<form action="/logout" method="post">
		<a href="#" class="brand">
        <i class='bx bxs-castle' style='color:#ff914d'></i>
			<span class="text">ParkEase</span>
		</a>
		<br>
		<br>
		<br>
		<ul class="side-menu top">
			<li class="active">
				<a href="">
                <i class='bx bxs-camera'></i>
					<span class="text">Ticket Verifier</span>
				</a>
			</li>
			
		</ul>
			<form action="/logout" method="post">
			<ul class="side-menu">
			<li>
				<a href="/" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
		</form>
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
					<h1>Ticket Verifier</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Staff</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>
			

			<div class="table-data">
				<div class="order">
					<ul class="box-info">
				
				<li>
				<a href="scannerStaff">
                <i class='bx bx-qr-scan'></i>
					<span class="text">
						<h3>Tickets Verifier</h3>
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