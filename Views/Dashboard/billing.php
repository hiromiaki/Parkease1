<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="/dashboardStyle.css">

	
	<title>Billing</title>
    <style>
        main{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        .container{
            display: flex;
            justify-content: left;
            align-items: center;
        }
        .container form{
            width: 700px;
            padding: 40px;
            background: #fff;
            border-radius: 10px;
        }
        form .row{
            gap: 15px;
        }
        .row .column{
            flex: 1 1 250px;
        }
        .column .title{
            font-size: 20px;
            color: #333;
            text-transform: uppercase;
            margin-bottom: 5px;
        }
        .column .input-box{
            margin: 15px 0;
        }
        .input-box span{
            display: block;
            margin-bottom: 10px;
        }
        .input-box input{
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius:  6px;
            font-size: 15px;
        }

        form .btn{
            width: 100%;
            padding: 12px;
            background: #ff914d;
            border: none;
            outline: none;
            border-radius: 6px;
            font-size: 17px;
            color: #fff;
            margin-top: 5px;
            cursor: pointer;
        }
        form .btn:hover{

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
            
            <div class="container">
                    <form action="<?= base_url('billingVendor/'.$vendor['StoreID'])?>" method="post">
                        <div class="row">

                            <div class="column">
                                <h3 class="title"> Billing Address </h3>

                                <div class="input-box">
                                    <span>Full Name: </span>
                                    <input type="text" name="Name" placeholder="Enter Full name" value="<?= $vendor['Name'] ?>" readonly>
                                </div>

                                <div class="input-box">
                                    <span>Store Name: </span>
                                    <input type="text" name="StoreName" placeholder="Enter Store name" value="<?= $vendor['StoreName'] ?>" readonly>
                                </div>

                                <div class="input-box">
                                    <span>Email: </span>
                                    <input type="text" name="Email" placeholder="Enter email" value="<?= $vendor['Email'] ?>" readonly>
                                </div>

                                <div class="input-box">
                                    <span>Monthly Rent: </span>
                                    <input type="text" name="MonthlyRent" placeholder="Enter Monthly rent" value="<?= $vendor['MonthlyRent'] ?>" readonly>
                                </div>

                            </div>

                            <div class="column">
                                <h3 class="title"> Payment </h3>

                                <div class="input-box">
                                    <span>Cards Accepted: </span>
                                    <img src="/photos/cardimg.png">
                                </div>

                                
                            </div>
                        </div>
                        <button class="btn">Send to Email</button>
                    </form>
            </div>
        
		</main>		
	</section>

	
	<script src="/dashboardScript.js"></script>

</body>
</html>