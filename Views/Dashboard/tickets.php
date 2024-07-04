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

.card .caption .quantity{
	font-size: 20px;
	font-weight: bold;
	padding: 10px;
	margin-top: 30px;
	line-height: 20px;
}


.card .button{
	display: flex;
	width: 80%;
	cursor: pointer;
	margin-top: -5em;
	margin-bottom: 10em;
	margin-left: 30px;
	text-align: center;	
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
			<li class="active">
				<a href="">
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
			<div class="head-title">
				<div class="left">
					<h1>Tickets Inventory and Management</h1>
				</div>
			</div>

			<?php
			if(session()->getFlashdata('status'))
			{
				?>
				<strong>Hello!</strong> <?= session()->getFlashdata('status'); ?>
				<?php
			}
			?>
			<ul class="ticketInfo">
				<?php foreach ($ticket_info as $ticket): ?>
				<li>
				<div class="card">
					<div class="image">
						<img src="<?php echo base_url('photos/'.$ticket['Img']); ?>">
					</div>

				<div class="ticketpage">
				<div class="caption">
					<p class="title"><?php echo esc($ticket['Name']); ?></p>
					<p class="price"><?php echo esc($ticket['Price']); ?> PHP</p>
					<p class="description"><?php echo esc($ticket['Description']); ?></p>
					<p class="quantity">Available Tickets: <?php echo esc($ticket['Quantity']); ?></p>
				</div>
				</div>
				<div class="button">
				<a href="<?= base_url('ticket/'.$ticket['id'])?>" class="btn btn-success btn-sn">Edit</a>
				</div>	
				
				</div>
				</li>
				<?php endforeach; ?>
			</ul>

			<div class="table-data">
				<div class="order">
					<ul class="box-info">
				<li>
				<a href="scanner">
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