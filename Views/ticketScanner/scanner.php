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
      .qrScan{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 70vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
      }

        h1 {
            margin-bottom: 80px;
        }

        #my-qr-reader {
            width: 550px;
            height: auto;
            border: 1px solid #ccc;
        }

        #you-qr-result {
            margin-top: 10px;
            font-size: 1.2em;
            color: #333;
        }

        #error-message {
            color: red;
            margin-top: 20px;
        }

	</style>

	<title>QR Code Scanner</title>
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
				<a href="adminTickets.php">
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

		<main>
        <div class="head-title">
				<div class="left">
					<h1>Tickets Scanner</h1>
				</div>
		</div>
    </main>
        <div class="qrScan">
            <div id="you-qr-result">Result will be displayed here</div>
            <h3>Place your QR code here</h3>
            <div id="my-qr-reader"></div>
            <div id="error-message"></div>
            <script src="https://unpkg.com/html5-qrcode"></script>

            <script>
        document.addEventListener("DOMContentLoaded", function() {
            const resultContainer = document.getElementById('you-qr-result');
            const errorMessageContainer = document.getElementById('error-message');
            const qrReader = new Html5Qrcode("my-qr-reader");

            function onScanSuccess(decodedText, decodedResult) {
                resultContainer.innerHTML = `Scanned result: ${decodedText}`;
            }

            function onScanError(errorMessage) {
                console.error(errorMessage);
                errorMessageContainer.innerHTML = `Scan error: ${errorMessage}`;
            }

            qrReader.start(
                { facingMode: "environment" }, // Use the environment-facing camera
                {
                    fps: 10,    // Set the frames per second
                    qrbox: 250  // Set the size of the QR code scanning box
                },
                onScanSuccess,
                onScanError
            ).catch(err => {
                // Handle start error
                console.error(`Unable to start scanning, error: ${err}`);
                errorMessageContainer.innerHTML = `Unable to start scanning, error: ${err}`;
            });

            // Add event listener to stop the scanner when the page is unloaded
            window.addEventListener("unload", () => {
                qrReader.stop().then(() => {
                    console.log("QR Code scanning stopped.");
                }).catch(err => {
                    console.error(`Unable to stop scanning, error: ${err}`);
                });
            });
        });
    </script>
    </div>
	
	</section>
	<!-- CONTENT -->
	

	<script src="dashboardScript.js"></script>
</body>
</html>