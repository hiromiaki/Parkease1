<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="dashboardStyle.css">

	
	<title>Activity-Log</title>
	<style>

	.table-data .staff table {
	width: 100%;
	border-collapse: collapse;
    }   

    .table-data .staff table th {
	padding-bottom: 12px;
	font-size: 13px;
	text-align: left;
	border-bottom: 1px solid var(--grey);
    }

    .table-data .order table td {
	padding: 16px 0;
    }

    .table-data .order table tr td:first-child {
	display: flex;
	align-items: center;
	grid-gap: 12px;
	padding-left: 6px;
    }

        .Operations{
		display: flex;
	}

.btn {
    padding: 5px 10px;
    margin: 0 5px; /* Adjust spacing between buttons */
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.addBtn{
	padding: 5px 10px;
    margin: 0 5px; /* Adjust spacing between buttons */
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
	background-color: #1c69cf;
	color: white;
	font-weight: bold;
	font-family: sans-serif;
	font-size: 15px;
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
}

.btn.btn-danger:hover {
    background-color: #c9302c;
}



    </style>
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
			
		<div class="table-data staff">
			<div class="order">
				<div class="head">
            <h1>Staff Activity Log</h1>
</div>

			<?php
			if(session()->getFlashdata('status'))
			{
				?>
				<strong>Hello!</strong> <?= session()->getFlashdata('status'); ?>
				<?php
			}
			?>

			<br>

			<table>
        <thead>
            <tr>
                <th>Staff ID</th>
				<th>Staff Name</th>
                <th>Activity</th>
                <th>Timestamp</th>
				<th>Operation</th>
            </tr>
        </thead>
		<br>
        <tbody>
            <?php foreach ($activityLogs as $log): ?>
                <tr>
                    <td><?= $log['staff_id'] ?></td>
					<td><?= $log['Name'] ?></td>
                    <td><?= $log['activity'] ?></td>
                    <td><?= $log['timestamp'] ?></td>
					<td>
					<div class="Operations">
						<a href="deleteLog/<?php echo $log['id']; ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-sn"> Delete </a>
					</div>
			</div>
			</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
			</div>
        </main>
	</section>

	<script src="dashboardScript.js"></script>

</body>
</html>