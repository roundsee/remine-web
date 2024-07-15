<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remine Selfie Photo Studio</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 10px 20px;
        }
        .navbar-brand img {
            max-width: 40px;
            height: auto;
        }
        .nav-link {
            color: #666;
            font-weight: 500;
        }
        .nav-link:hover {
            color: #000;
        }
        .btn-signin {
            background-color: #28a745;
            color: #fff;
            border-radius: 5px;
            padding: 5px 10px;
            transition: background-color 0.3s ease;
        }
        .btn-signin:hover {
            background-color: #218838;
            color: #fff;
        }
        .package {
            position: relative;
            width: 200px;
            height: 350px;
            border: 2px solid blue;
            background: linear-gradient(135deg, #d0ba14, #e2d1c3); /* Cream pastel gradient */
            border-radius: 10px;
            margin: 20px;
            text-align: center;
            transition: border 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 20px;
        }
        .package:hover {
            border-color: rgb(0, 51, 255);
            background-color: #fffbcc; /* Slightly darker cream pastel on hover */
            box-shadow: 0 6px 12px rgba(0,0,0,0.2);
        }

        .package img {
            max-width:100%;
            max-height:100%;
            /* margin-bottom: 15px; */
        }
        .package .price {
            font-size: 1.5em;
            font-weight: bold;
            margin: 10px 0;
        }
        /* .reservation-form {
            display: none;
            margin-top: 20px;
            width: 70%;
            margin-left: auto;
            margin-right: auto;
            border: 2px solid #000;
            padding: 20px;
            border-radius: 10px;
            background-color: #f9f9f9;
        } */
        .reservation-form {
            display: none;
            width: 70%;
            margin: 20px auto;
            border: 2px solid #007BFF;
            padding: 20px;
        }
        .btn-submit {
            border: 2px solid #ff0;
            padding: 10px 20px;
            background: #000;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
        }
        .btn-submit:hover {
            border-color: #fff;
            box-shadow: 0 6px 12px rgba(0,0,0,0.3);
        }
        .package p {
            margin: 0;
        }
        .package button {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .package button:hover {
            background-color: #218838;
        }
        .calendar {
            max-width: 400px;
            margin: auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 20px;
        }
        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .calendar-header button {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
        }
        .calendar-body {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
            margin-top: 10px;
        }
        .calendar-body div {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 40px;
            font-size: 1rem;
            cursor: pointer;
        }
        .calendar-body .day {
            color: #555;
        }
        .calendar-body .today {
            background: #007bff;
            color: #fff;
            border-radius: 50%;
        }
        .calendar-body .highlight {
            background: #007bff;
            color: #fff;
            border-radius: 50%;
        }
        .testimonials {
            display: flex;
            overflow-x: scroll;
            padding: 20px 0;
            border: 1px solid #3d0303;
            border-radius: 10px;

        }
        .testimonial-card {
            flex: 0 0 300px;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin-right: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .testimonial-card p {
            margin: 0;
            padding: 0;
        }
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);

* {
  font-family: Open Sans;
}

.table-container {
    width: 80%;
    margin: 5px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid #ddd;
    padding: 3px;
    text-align: center;
    cursor: pointer;
}

th {
    background-color: #f2f2f2;
}

td.selected {
    background-color: #4CAF50;
    color: white;
}

.footer-distributed{
	background: #666;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 55px 50px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 40%;
}

/* The company logo */

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Open Sans', cursive;
	margin: 0;
}

.footer-distributed h3 span{
	color:  lightseagreen;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
  font-weight:400;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #222;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
  font-weight:400;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  lightseagreen;
	text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px sans-serif;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
            <img src="path/to/logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricelist</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <a href="#" class="btn btn-signin">Sign In</a>
        </div>
    </nav>

    <div class="container text-center mt-4">
        <h2>Remine Selfie Photo Studio</h2>
        <div class="d-flex justify-content-center flex-wrap">
            <div class="package" data-package="Biasa">
                <img src="images/package/regular.jpeg" alt="Biasa">
                <p class="price">$10</p>
                <p>Basic package for casual selfies</p>
                <button>Book Now</button>
            </div>
            <div class="package" data-package="Abstrak">
                <img src="images/package/abstrak.jpeg" alt="Abstrak">
                <p class="price">$20</p>
                <p>Abstract backgrounds for artistic selfies</p>
                <button>Book Now</button>
            </div>
            <div class="package" data-package="Proyektor">
                <img src="images/package/proyektor.jpeg" alt="Proyektor">
                <p class="price">$30</p>
                <p>Projector setup for dynamic selfies</p>
                <button>Book Now</button>
            </div>
            <div class="package" data-package="Spotlight">
                <img src="images/package/spotlight.jpeg" alt="Spotlight">
                <p class="price">$40</p>
                <p>Spotlight setups for stylish selfies</p>
                <button>Book Now</button>
            </div>
        </div>

        <form class="reservation-form">
            <input type="hidden" id="selected-package" name="package">
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>
            <div>
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" class="form-control">
            </div>

            <div class="calendar-container">
                <div>
                    <label for="date">Choose a date:</label>
                    <div>
                        <label for="name">Name:</label>
                        <input type="text" id="bookdate" name="bookdate" class="form-control">
                    </div>
        
                    <div class="calendar">
                        <div class="calendar-header">
                            <button id="prevMonth">&lt;</button>
                            <h2 id="calendarTitle">July 2024</h2>
                            <button id="nextMonth">&gt;</button>
                        </div>
                        <div class="calendar-body">
                            <div>Sun</div>
                            <div>Mon</div>
                            <div>Tue</div>
                            <div>Wed</div>
                            <div>Thu</div>
                            <div>Fri</div>
                            <div>Sat</div>
                        </div>
                        <div id="calendarDays" class="calendar-body">
                        </div>
                    </div>
                </div>
                <div class="time-slots">
                    <label>Choose a time slot:</label>
                    <div class="table-container">
                        <table id="timeTable">
                            <!-- Table header -->
                            <thead>
                                <tr>
                                    <th>  </th>
                                    <th>  </th>
                                    <th>  </th>
                                    <th>  </th>
                                    <th>  </th>
                                    <th>  </th>
                                    <th>  </th>
                                </tr>
                            </thead>
                            <!-- Table body -->
                            <tbody>
                                <!-- JavaScript will populate the table body -->
                            </tbody>
                        </table>
                    </div>                </div>
            </div>
            <div>
                <label for="name">Numbrt of guests:</label>
                <input type="number" id="guestno" name="guestno" class="form-control">
            </div>
            <button type="submit" class="btn btn-submit">Submit</button>
        </form>
    </div>
    <div class="testimonials-title">Testimonies</div>
    <div class="testimonials mt-4">
        <div class="testimonial-card">
            <p><strong>John Doe</strong></p>
            <p>"Amazing experience! The best selfie studio ever!"</p>
        </div>
        <div class="testimonial-card">
            <p><strong>Jane Smith</strong></p>
            <p>"Loved the modern setup. Highly recommended!"</p>
        </div>
        <div class="testimonial-card">
            <p><strong>Bob Johnson</strong></p>
            <p>"Great value for money. Will visit again!"</p>
        </div>
        <div class="testimonial-card">
            <p><strong>Emily Davis</strong></p>
            <p>"The abstract backgrounds are so cool!"</p>
        </div>
        <div class="testimonial-card">
            <p><strong>John Doe</strong></p>
            <p>"Amazing experience! The best selfie studio ever!"</p>
        </div>
        <div class="testimonial-card">
            <p><strong>Jane Smith</strong></p>
            <p>"Loved the modern setup. Highly recommended!"</p>
        </div>
        <div class="testimonial-card">
            <p><strong>Bob Johnson</strong></p>
            <p>"Great value for money. Will visit again!"</p>
        </div>
        <div class="testimonial-card">
            <p><strong>Emily Davis</strong></p>
            <p>"The abstract backgrounds are so cool!"</p>
        </div>        
        <!-- Add more testimonial cards as needed -->
    </div>
</div>

<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Company<span>logo</span></h3>

				<p class="footer-links">
					<a href="#" class="link-1">Home</a>
					
					<a href="#">Blog</a>
				
					<a href="#">Pricing</a>
				
					<a href="#">About</a>
					
					<a href="#">Faq</a>
					
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">Company Name © 2015</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1.555.555.5555</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@company.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('.package').on('click', function() {
                var package = $(this).data('package');
                $('#selected-package').val(package);
                $('.reservation-form').slideDown();
            });
        });
        $('.time-slots div').on('click', function() {
                $('.time-slots div').removeClass('selected');
                $(this).addClass('selected');
            });

            const calendarDays = document.getElementById('calendarDays');
        const calendarTitle = document.getElementById('calendarTitle');
        const prevMonth = document.getElementById('prevMonth');
        const nextMonth = document.getElementById('nextMonth');

        let currentYear = new Date().getFullYear();
        let currentMonth = new Date().getMonth();
        let selectedDay = null;

        const months = [
            'January', 'February', 'March', 'April', 'May', 'June',
            'July', 'August', 'September', 'October', 'November', 'December'
        ];

        function generateCalendar(year, month) {
            calendarDays.innerHTML = '';
            calendarTitle.innerText = `${months[month]} ${year}`;

            const firstDay = new Date(year, month, 1).getDay();
            const daysInMonth = new Date(year, month + 1, 0).getDate();

            for (let i = 0; i < firstDay; i++) {
                const emptyDiv = document.createElement('div');
                calendarDays.appendChild(emptyDiv);
            }

            for (let day = 1; day <= daysInMonth; day++) {
                const dayDiv = document.createElement('div');
                dayDiv.classList.add('day');
                // if (day === new Date().getDate() && month === new Date().getMonth() && year === new Date().getFullYear()) {
                //     dayDiv.classList.add('today');
                // }
                dayDiv.innerText = day;
                dayDiv.addEventListener('click', () => selectDate(dayDiv, day, month, year));
                calendarDays.appendChild(dayDiv);
            }
        }

        function selectDate(dayDiv, day, month, year) {
            if (selectedDay) {
                selectedDay.classList.remove('highlight');
            }
            selectedDay = dayDiv;
            selectedDay.classList.add('highlight');
            bookdate = document.getElementById('bookdate');
            seldate = `${day}-${months[month]}-${year}`;
            bookdate.setAttribute('value', seldate);
            console.log(`Selected Date: ${day}-${months[month]}-${year}`);
            console.log(bookdate.innerHTML);
        }

        prevMonth.addEventListener('click', () => {
            currentMonth--;
            if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            }
            generateCalendar(currentYear, currentMonth);
        });

        nextMonth.addEventListener('click', () => {
            currentMonth++;
            if (currentMonth > 11) {
                currentMonth = 0;
                currentYear++;
            }
            generateCalendar(currentYear, currentMonth);
        });

        generateCalendar(currentYear, currentMonth);


      //  document.addEventListener('DOMContentLoaded', () => {
    const tableBody = document.querySelector('#timeTable tbody');
    const startTime = new Date();
    startTime.setHours(9, 0, 0); // Start at 09:00
    const endTime = new Date();
    endTime.setHours(21, 0, 0); // End at 21:00
    const interval = 20; // 20 minutes

    let currentTime = new Date(startTime);

    for (let row = 0; row < 6; row++) {
        const tr = document.createElement('tr');

        for (let col = 0; col < 7; col++) {
            if (currentTime <= endTime) {
                const td = document.createElement('td');
                td.textContent = formatTime(currentTime);
                td.addEventListener('click', () => {
                    // Remove the selected class from all cells
                    document.querySelectorAll('td').forEach(cell => cell.classList.remove('selected'));
                    // Add the selected class to the clicked cell
                    td.classList.add('selected');
                });
                tr.appendChild(td);
                // Increment the time by 20 minutes
                currentTime.setMinutes(currentTime.getMinutes() + interval);
            } else {
                tr.appendChild(document.createElement('td'));
            }
        }

        tableBody.appendChild(tr);
    }
//});

function formatTime(date) {
    const hours = date.getHours().toString().padStart(2, '0');
    const minutes = date.getMinutes().toString().padStart(2, '0');
    return (hours +':' + minutes);
}        
    </script>
</body>
</html>
