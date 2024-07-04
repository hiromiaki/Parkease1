<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="dashboardStyle.css">

	
	<title>Staff</title>
    <style>

    .table-data table {
	width: 100%;
	border-collapse: collapse;
    }   

    .table-data table th {
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

/* Responsive design adjustments */
@media screen and (max-width: 600px) {
    .popup-contentVendors {
        width: 90%;
    }
}

#staffTable {
    width: 100%;
    border-collapse: collapse;
}

#staffTable, #staffTable th, #staffTable td {
    border: 1px solid #dddddd;
}

#staffTable th, #staffTable td {
    padding: 8px;
    text-align: center;
}

#staffTable th {
    background-color: #f2f2f2;
}

#vendorTable {
    width: 100%;
    border-collapse: collapse;
}

#vendorTable, #vendorTable th, #vendorTable td {
    border: 1px solid #dddddd;
}

#vendorTable th, #vendorTable td {
    padding: 8px;
    text-align: center;
}

#vendorTable th {
    background-color: #f2f2f2;
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
				<a href="#">
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
					<h1>Staff and Vendors</h1>
					<ul class="breadcrumb">
						<li>
							<p>Manage the Staff and Vendors inside the Park</p>
						</li>
					</ul>
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

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Staff</h3>
                        <a href="registration" class="addBtn">Add Staff<i class='bx bx-plus'></i></a>
						<a href="activity-log" class="addBtn">Activity Log<i class='bx bxs-log-in-circle' ></i></a>
					</div>

					
					<form action="<?= base_url('staff/add')?>" method="post">
					<table id = "staffTable">
						<thead>
							<tr>
								<th>Staff ID</th>
								<th>Name</th>
								<th>Gender</th>
								<th>Position</th>
								<th>Username</th>
								<th>Password</th>
								<th>Operations</th>
							</tr>
						</thead>
						<tbody>
						<?php if($Dashboard): ?>
								<?php foreach($Dashboard as $row):?>
								<tr>
									<td><?php echo esc($row ['staff_ID']); ?></td>
									<td><?php echo esc($row ['Name']); ?></td>
									<td><?php echo esc($row ['Gender']); ?></td>
									<td><?php echo esc($row ['Position']); ?></td>
									<td><?php echo esc($row ['Username']); ?></td>
									<td><?php echo esc($row ['Password']); ?></td>
									<td>
									
									<div class="Operations">
										<a href="<?= base_url('edit/'.$row['staff_ID'])?>" class="btn btn-success btn-sn"> Edit </a>
										<a href="delete/<?php echo $row['staff_ID']; ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-sn"> Delete </a>
									</div>
									</form>
										
									</div>
									</td>
								</tr>
								<?php endforeach; ?>
							<?php endif; ?>
						</tbody>
					</table>
					</form>
				</div>


				<div class="order">
					<div class="head">
						<h3>Vendors</h3>
						<a href="addVendors" class="addBtn">Add Vendors<i class='bx bx-plus'></i></a>
					</div>

					<form action="" method="vendors">
					<table id="vendorTable">
						<thead>
							<tr>
								<th>StoreID</th>
								<th>Name</th>
								<th>Store Name</th>
								<th>Email</th>
								<th>Monthly Rent</th>
								<th>Billing</th>
								<th>Operations</th>
							</tr>
						</thead>
						<tbody>
						<?php if($vendors): ?>
							<?php foreach($vendors as $vendor):?>
								<tr>
									<td><?php echo esc($vendor ['StoreID']); ?></td>
									<td><?php echo esc($vendor ['Name']); ?></td>
									<td><?php echo esc($vendor ['StoreName']); ?></td>
									<td><?php echo esc($vendor ['Email']); ?></td>
									<td><?php echo esc($vendor ['MonthlyRent']); ?></td>
									<td> <a href="<?= base_url('billingVendor/'.$vendor['StoreID'])?>" class="addBtn">View</a> </td>
									<td>
									
									<div class="Operations">
										<a href="<?= base_url('editVendor/'.$vendor['StoreID'])?>" class="btn btn-success btn-sn"> Edit </a>
										<a href="/deleteVendor/<?php echo $vendor['StoreID']; ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-sn"> Delete </a>
									</div>
									</form>
										
									</div>
									</td>
								</tr>
								<?php endforeach; ?>
							<?php endif; ?>
						</tbody>
					</table>
					</form>
				</div>
			</div>
		</main>		
	</section>

	
		

			

	<script src="dashboardScript.js"></script>

</body>
</html>