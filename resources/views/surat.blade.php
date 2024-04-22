<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- STYLESHEET -->
    <link rel="stylesheet" href="style.css" />

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        @import url(https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic);

        :root {
            --primary-color: #f90a39;
            --text-color: #1d1d1d;
            --bg-color: #f1f1fb;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background-color: #fff;
        }

        .container {
            width: 100%;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .calendar {
            width: 100%;
            max-width: 600px;
            padding: 30px 20px;
            border-radius: 10px;
            background-color: var(--bg-color);
        }

        .calendar .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 2px solid #ccc;
        }

        .calendar .header .month {
            display: flex;
            align-items: center;
            font-size: 25px;
            font-weight: 600;
            color: var(--text-color);
        }

        .calendar .header .btns {
            display: flex;
            gap: 10px;
        }

        .calendar .header .btns .btn {
            width: 50px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
            color: #fff;
            background-color: var(--primary-color);
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .calendar .header .btns .btn:hover {
            background-color: #db0933;
            transform: scale(1.05);
        }

        .weekdays {
            display: flex;
            gap: 10px;
            margin-bottom: 10px;
        }

        .weekdays .day {
            width: calc(100% / 7 - 10px);
            text-align: center;
            font-size: 16px;
            font-weight: 600;
        }

        .days {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .days .day {
            width: calc(100% / 7 - 10px);
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 400;
            color: var(--text-color);
            background-color: #fff;
            transition: all 0.3s;
        }

        .days .day:not(.next):not(.prev):hover {
            color: #fff;
            background-color: var(--primary-color);
            transform: scale(1.05);
        }

        .days .day.today {
            color: #fff;
            background-color: var(--primary-color);
        }

        .days .day.next,
        .days .day.prev {
            color: #ccc;
        }

        /* Credits */
        .credits a {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 14px;
            color: #aaa;
        }

        .credits span {
            color: var(--primary-color);
        }
    </style>
    <title>Mini Calendar</title>
</head>

<body>
    <div class="container">
        <div class="calendar">
            <div class="header">
                <div class="month"></div>
                <div class="btns">
                    <div class="btn today-btn">
                        <i class="fas fa-calendar-day"></i>
                    </div>
                    <div class="btn prev-btn">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                    <div class="btn next-btn">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
            </div>
            <div class="weekdays">
                <div class="day">Sun</div>
                <div class="day">Mon</div>
                <div class="day">Tue</div>
                <div class="day">Wed</div>
                <div class="day">Thu</div>
                <div class="day">Fri</div>
                <div class="day">Sat</div>
            </div>
            <div class="days">
                <!-- lets add days using js -->
            </div>
        </div>
    </div>

    <!-- Credits -->
    <div class="credits">
        <a href="https://www.youtube.com/channel/UCiUtBDVaSmMGKxg1HYeK-BQ">
            Created with <span><i class="fas fa-heart"></i></span> by
            <span>Open Source Coding</span>
        </a>
    </div>

    <!-- SCRIPT -->
    <script src="script.js"></script>
    <script>
        const daysContainer = document.querySelector(".days"),
            nextBtn = document.querySelector(".next-btn"),
            prevBtn = document.querySelector(".prev-btn"),
            month = document.querySelector(".month"),
            todayBtn = document.querySelector(".today-btn");

        const months = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December",
        ];

        const days = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

        // get current date
        const date = new Date();

        // get current month
        let currentMonth = date.getMonth();

        // get current year
        let currentYear = date.getFullYear();

        // function to render days
        function renderCalendar() {
            // get prev month current month and next month days
            date.setDate(1);
            const firstDay = new Date(currentYear, currentMonth, 1);
            const lastDay = new Date(currentYear, currentMonth + 1, 0);
            const lastDayIndex = lastDay.getDay();
            const lastDayDate = lastDay.getDate();
            const prevLastDay = new Date(currentYear, currentMonth, 0);
            const prevLastDayDate = prevLastDay.getDate();
            const nextDays = 7 - lastDayIndex - 1;

            // update current year and month in header
            month.innerHTML = `${months[currentMonth]} ${currentYear}`;

            // update days html
            let days = "";

            // prev days html
            for (let x = firstDay.getDay(); x > 0; x--) {
                days += `<div class="day prev">${prevLastDayDate - x + 1}</div>`;
            }

            // current month days
            for (let i = 1; i <= lastDayDate; i++) {
                // check if its today then add today class
                if (
                    i === new Date().getDate() &&
                    currentMonth === new Date().getMonth() &&
                    currentYear === new Date().getFullYear()
                ) {
                    // if date month year matches add today
                    days += `<div class="day today">${i}</div>`;
                } else {
                    //else dont add today
                    days += `<div class="day ">${i}</div>`;
                }
            }

            // next MOnth days
            for (let j = 1; j <= nextDays; j++) {
                days += `<div class="day next">${j}</div>`;
            }

            // run this function with every calendar render
            hideTodayBtn();
            daysContainer.innerHTML = days;
        }

        renderCalendar();

        nextBtn.addEventListener("click", () => {
            // increase current month by one
            currentMonth++;
            if (currentMonth > 11) {
                // if month gets greater that 11 make it 0 and increase year by one
                currentMonth = 0;
                currentYear++;
            }
            // rerender calendar
            renderCalendar();
        });

        // prev monyh btn
        prevBtn.addEventListener("click", () => {
            // increase by one
            currentMonth--;
            // check if let than 0 then make it 11 and deacrease year
            if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            }
            renderCalendar();
        });

        // go to today
        todayBtn.addEventListener("click", () => {
            // set month and year to current
            currentMonth = date.getMonth();
            currentYear = date.getFullYear();
            // rerender calendar
            renderCalendar();
        });

        // lets hide today btn if its already current month and vice versa

        function hideTodayBtn() {
            if (
                currentMonth === new Date().getMonth() &&
                currentYear === new Date().getFullYear()
            ) {
                todayBtn.style.display = "none";
            } else {
                todayBtn.style.display = "flex";
            }
        }
    </script>
</body>

</html>