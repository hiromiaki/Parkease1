<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
     <!-- font awesome icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css stylesheet -->
    <link rel="stylesheet" href="/loginStyle.css">
    <style>
        .error{
            background: #F2DEDE;
	        color: #A94442;
            padding: 10px;
	        width: 100%;
	        border-radius: 5px;
	        margin: 6px auto;
	        font-size: 15px;
            margin-top: -10px;
        }
    </style>
</head>
  <body>
  <div class="container" id="container">
        <div class="form-container staff-container">
            <form action="/login" method="post">
                <h1>Welcome to ParkEase!</h1>
                <br>
                <?php if (session()->getFlashdata('msg')): ?>
                 <p class="error">
                  <?= session()->getFlashdata('msg') ?>
                </p>
                  <?php endif; ?>
                <span>Use your staff account to access this website</span>
                <br>
                <div class="infield">
                    <input type="Username" placeholder="Username" name="Username"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="Password" placeholder="Password" name="Password" />
                    <label></label>
                </div>
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="form-container admin-container">
            <form action="/authenticate" method="post">
                <h1>Welcome to ParkEase!</h1> <br>
                <?php if (session()->getFlashdata('msg')): ?>
                 <p class="error">
                  <?= session()->getFlashdata('msg') ?>
                </p>
                  <?php endif; ?>
                <span>Use your admin account to access this website</span>
                <br>
                <div class="infield">
                    <input type="Username" id="Username" name="Username" placeholder="Username" name="Username"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="Password" id="Password" name="Password" placeholder="Password"/>
                    <label></label>
                </div>
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="overlay-container" id="overlayCon">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Are you an Admin?</h1>
                    <p>just click and sign in here!</p>
                    <button>Admin</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Are you a Staff?</h1>
                    <p>just click and sign in here!</p>
                    <button>Staff</button>
                </div>
            </div>
            <button id="overlayBtn"></button>
        </div>
    </div>
    <script>
        const container = document.getElementById('container');
        const overlayCon = document.getElementById('overlayCon');
        const overlayBtn = document.getElementById('overlayBtn');

        // Load the state on page load
        document.addEventListener('DOMContentLoaded', () => {
            const isRightPanelActive = localStorage.getItem('rightPanelActive') === 'true';
            if (isRightPanelActive) {
                container.classList.add('right-panel-active');
            }
        });

        overlayBtn.addEventListener('click', () => {
            container.classList.toggle('right-panel-active');

            // Save the state
            const isRightPanelActive = container.classList.contains('right-panel-active');
            localStorage.setItem('rightPanelActive', isRightPanelActive);

            overlayBtn.classList.remove('btnScaled');
            window.requestAnimationFrame(() => {
                overlayBtn.classList.add('btnScaled');
            });
        });

    </script>
  </body>
</html>
