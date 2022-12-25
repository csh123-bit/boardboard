<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
        }
        body{
            display: flex;
            justify-content:center;
            align-items :center;
            min-height:100vh;

        }

        .calender{
            width: 700px;
            margin: 50px;
        }

        .header{
            display:flex;
            justify-content: space-between;
            align-items:center;
        }

        .year-month{
            font-size: 35px;
        }
        .nav{
            display:flex;
            border: 1px solid black;
            border-radius: 5px;
        }

        .nav-btn{
            width:30px;
            height:30px;
            border:none;
            font-size:16px;
            line-height:34px;
            background-color:transparent;
            cursor: pointer;
        }

        .go-today{
            width:75px;
            border-left:1px solid black;
            border-right:1px solid black;
        }

        .days{
            display:flex;
            margin: 25px 0 10px;
        }

        .day{
            width:calc(100%/7);
            text-align: center;
        }

        .dates{
            display:flex;
            flex-flow:row wrap;
            height:500px;
            border-top: 1px solid black;
            border-right: 1px solid black;
        }

        .date{
            width : calc(100%/7);
            padding: 15px;
            text-align:right;
            border-bottom: 1px solid black;
            border-left:1px solid black;
        }

        .day:nth-child(7n+1),
        .date:nth-child(7n+1){
            color:red;
        }

        .day:nth-child(7n),
        .date:nth-child(7n){
            color:blue;
        }

        .other{
            opacity:0.3;
        }

        .today{
            position:relative;
            color:white;
        }

        .today::before{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
            z-index:-1;
            width:30px;
            height:30px;
            display:block;
            background-color: red;
            content:'';

        }

    </style>
</head>
<body>
    <div class="calender">
        <div class="header">
            <div class="year-month"></div>
            <div class="nav">
                <button class="nav-btn go-prev" onclick="prevMonth()">&lt;</button>
                <button class="nav-btn go-today" onclick="getToday()">Today</button>
                <button class="nav-btn go-next" onclick="nextMonth()">&gt;</button>
            </div>
        </div>
        <div class="main">
            <div class="days">
                <div class="day">일</div>
                <div class="day">월</div>
                <div class="day">화</div>
                <div class="day">수</div>
                <div class="day">목</div>
                <div class="day">금</div>
                <div class="day">토</div>
            </div>
            <div class="dates"></div>
        </div>
    </div>
</body>
</html>
<script>
    let date = new Date();

    function renderCalendar(){
        
        const viewYear = date.getFullYear();
        const viewMonth = date.getMonth();
        
        document.querySelector('.year-month').textContent = `${viewYear}년 ${viewMonth+1}월`;

        const prevLast = new Date(viewYear, viewMonth, 0);
        const thisLast = new Date(viewYear, viewMonth+1, 0);

        const plDate = prevLast.getDate();
        const plDay = prevLast.getDay();

        const tlDate = thisLast.getDate();
        const tlDay = thisLast.getDay();

        const prevDates = [];
        const thisDates = [...Array(tlDate+1).keys()].slice(1);
        const nextDates = [];

        if(plDay !==6){
            for(let i=0; i<plDay+1;i++){
                prevDates.unshift(plDate-i);
            }
        }

        for(let i=1; i<7-tlDay;i++){
            nextDates.push(i);
        }

        const dates = prevDates.concat(thisDates, nextDates);
        const firstDateIndex = dates.indexOf(1);
        const lastDateIndex = dates.lastIndexOf(tlDate);

        dates.forEach((date,i)=>{
            let condition = i >=firstDateIndex&&i<lastDateIndex+1?'this':'other';


            dates[i] = `<div class="date"><span class=${condition}>${date}</span></div>`;
        });

        document.querySelector(".dates").innerHTML = dates.join('');

        let today = new Date();
        if(viewMonth === today.getMonth()&& viewYear===today.getFullYear()){
            console.log('들어오나');
            for(let date of document.querySelectorAll('.this')){
                if(+date.innerText === today.getDate()){
                    date.classList.add('today');
                    console.log('들어오나');
                    break;
                }
            }
        }
    }
    renderCalendar();

    function prevMonth(){
        date.setMonth(date.getMonth()-1);
        renderCalendar();
        console.log(date.getMonth());
    }

    function nextMonth(){
        date.setMonth(date.getMonth()+1);
        renderCalendar();
        console.log(date.getMonth());
    }

    function getToday(){
        date = new Date();
        renderCalendar();
        console.log(date.getMonth());
    }
</script>
<?php ?>