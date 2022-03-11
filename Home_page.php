<?php
include "./conn.php";
session_start();
if (!isset($_SESSION['user_name'])) {
    echo
    "<script>
        window.location='{$host}/Loginpage.php';
    </script>";
}
$Mysql = "SELECT * FROM `user_details` WHERE user_name = '{$_SESSION['user_name']}'";
$result0 = mysqli_query($con, $Mysql) or die("Query Failed");
$user = mysqli_fetch_assoc($result0);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/86e325e2cd.js" crossorigin="anonymous"></script>

    <title>Home_page</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');


        :root {
            --primary-color-hue: 252;
            --dark-color-lightness: 17%;
            --light-color-lightness: 95%;
            --white-color-lightness: 100%;

            --color-white: hsl(252, 30%, var(--white-color-lightness));
            --color-light: hsl(252, 30%, var(--light-color-lightness));
            --color-gray: hsl(var(--primary-color-hue), 15%, 65%);
            --color-primary: hsl(var(--primary-color-hue), 75%, 60%);
            --color-secondary: hsl(252, 100%, 90%);
            --color-success: hsl(120, 95%, 65%);
            --color-danger: hsl(0, 95%, 65%);
            --color-dark: hsl(252, 30%, var(--dark-color-lightness));
            --color-black: hsl(252, 30%, 10%);


            --border-radius: 2rem;
            --card-border-radius: 1rem;
            --btn-padding: 0.6rem 2rem;
            --search-padding: 0.6rem 1rem;
            --card-padding: 1rem;

            --sticky-top-left: 5.4rem;
            --sticky-top-right: -18rem;
        }

        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            outline: 0;
            box-sizing: border-box;
            text-decoration: none;
            list-style: none;
            border: none;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--color-dark);
            background: var(--color-light);
            overflow-x: hidden;
        }
        body::-webkit-scrollbar{
            width: 15px;
        }
        body::-webkit-scrollbar-thumb{
            background: var(--color-primary);
            border-radius: 10px;
        }
        body::-webkit-scrollbar-track{
            /* background: rgb(0, 0, 0, 0.1); */
            box-shadow: inset 1px 1px 8px 2px var(--color-primary);
        }
        body::-webkit-scrollbar-corner{
            background: rgb(0, 0, 0, 0.7);
            height: 10px;
            width: 20px;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        .profile-picture {
            width: 2.7rem;
            aspect-ratio: 1/1;
            border-radius: 50%;
            overflow: hidden;
        }

        img {
            display: block;
            width: 100%;
        }

        .btn {
            display: inline-block;
            padding: var(--btn-padding);
            font-weight: 500;
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: all 300ms ease;
            font-size: 0.9rem;
        }

        .btn:hover {
            opacity: 0.8;
        }

        .btn-primary {
            background: var(--color-primary);
            color: white;
        }

        .text-bold {
            font-weight: 500;
        }

        .text-muted {
            color: var(--color-gray);
        }

        nav {
            width: 100%;
            background: var(--color-white);
            padding: 0.7rem 0;
            position: fixed;
            top: 0;
            z-index: 10;
        }

        nav .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .search-bar {
            position: relative;
            background: var(--color-light);
            border-radius: var(--border-radius);
            padding: var(--search-padding);
        }

        nav.search-bar input[type="search"] {
            background: transparent;
            width: 30vw;
            margin-left: 1rem;
            font-size: 0.9rem;
            color: var(--color-dark);
        }

        nav .search-bar input[type="search"]::placeholder {
            color: var(--color-gray);

        }

        nav .create {
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        /*=====================main======================>*/
        main {
            position: relative;
            top: 5.4rem;
        }

        main .container {
            display: grid;
            grid-template-columns: 18vw auto 20vw;
            column-gap: 2rem;
            position: relative;
        }

        /*===========================LEFT================*/
        main .container .left {
            height: max-content;
            position: sticky;
            top: var(--sticky-top-left);
        }

        main .container .left .profile {
            padding: var(--card-padding);
            background: var(--color-white);
            border-radius: var(--card-border-radius);
            display: flex;
            align-items: center;
            column-gap: 1rem;
            width: 100%;
        }

        .left .sidebar {
            margin-top: 1rem;
            background: var(--color-white);
            border-radius: var(--card-border-radius);
        }

        .left .sidebar .menu-item {
            display: flex;
            align-items: center;
            height: 4rem;
            cursor: pointer;
            transition: all 300ms ease;
            position: relative;
        }

        .left .sidebar .menu-item:hover {
            background: var(--color-light);
        }

        .left .sidebar i {
            font-size: 1.4rem;
            color: var(--color-gray);
            margin-left: 2rem;
            position: relative;
        }

        .left .sidebar i .notification-count {
            background: var(--color-danger);
            color: white;
            font-size: 0.7rem;
            width: fit-content;
            border-radius: 0.8rem;
            padding: 0.1rem 0.4rem;
            position: absolute;
            top: -0.2rem;
            right: -0.3rem;
        }

        .left .sidebar h3 {
            margin-left: 1.5rem;
            font-size: 1rem;
        }

        .left .sidebar .active {
            background: var(--color-light);
        }

        .left .sidebar .active i,
        .left .sidebar .active h3 {
            color: var(--color-primary);
        }

        .left .sidebar .active::before {
            content: "";
            display: block;
            width: 0.5rem;
            height: 100%;
            position: absolute;
            background: var(--color-primary);
        }

        .left .sidebar .menu-item:first-child.active {
            border-top-left-radius: var(--card-border-radius);
            overflow: hidden;
        }

        .left .sidebar .menu-item:last-child.active {
            border-bottom-left-radius: var(--card-border-radius);
            overflow: hidden;
        }

        .left .btn {
            margin-top: 1rem;
            width: 100%;
            text-align: center;
            padding: 1rem 0;
        }

        /*---------------------------NOYIFICATION POPUP-----------------------*/
        .left .notifications-popup {
            position: absolute;
            top: 0;
            left: 110%;
            width: 30rem;
            background: var(--color-white);
            border-radius: var(--card-border-radius);
            padding: var(--card-padding);
            box-shadow: 0 2rem hsl(var(--color-primary), 75%, 60% 25%);
            z-index: 8;
            display: none;
        }

        .left .notifications-popup::before {
            content: "";
            width: 1.2rem;
            height: 1.2rem;
            display: block;
            background: var(--color-white);
            position: absolute;
            left: -0.6rem;
            transform: rotate(45deg);
        }

        .left .notifications-popup>div {
            display: flex;
            align-items: start;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .left .notifications-popup small {
            display: block;
        }

        /*=======================MIDDLE=======================*/
        .middle .stories {
            display: flex;
            justify-content: space-between;
            height: 12rem;
            gap: 0.5rem;
        }

        .middle .stories .story {
            padding: var(--card-padding);
            border-radius: var(--card-border-radius);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            color: white;
            font-size: 0.75rem;
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        .middle .stories .story::before {
            content: "";
            display: block;
            width: 100%;
            height: 5rem;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.75));
            position: absolute;
            bottom: 0;

        }

        .middle .stories .story .name {
            z-index: 2;
        }

        .middle .stories .story:nth-child(1) {
            background: url("story-1.jpg") no-repeat center center/cover;
        }

        .middle .stories .story:nth-child(2) {
            background: url("story-2.jpg") no-repeat center center/cover;
        }

        .middle .stories .story:nth-child(3) {
            background: url("story-3.jpg") no-repeat center center/cover;
        }

        .middle .stories .story:nth-child(4) {
            background: url("story-4.jpg") no-repeat center center/cover;
        }

        .middle .stories .story:nth-child(5) {
            background: url("story-5.jpg") no-repeat center center/cover;
        }

        .middle .stories .story:nth-child(6) {
            background: url("story-6.jpg") no-repeat center center/cover;
        }

        .middle .story .profile-picture {
            width: 2rem;
            height: 2rem;
            align-self: start;
            border: 3px solid var(--color-primary);
        }

        /*----------------------create post---------------*/
        .middle .create-post {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 1rem;
            background: var(--color-white);
            padding: 0.4rem var(--card-padding);
            border-radius: var(--border-radius);
        }

        .middle .create-post input[type='text'] {
            justify-self: start;
            width: 100%;
            padding-left: 1rem;
            background: transparent;
            color: var(--color-dark);
            margin-right: 1rem;
        }

        /*------------------ FEEDS --------------------*/
        .middle .feeds .feed {
            background: var(--color-white);
            border-radius: var(--card-border-radius);
            padding: var(--card-padding);
            margin: 1rem 0;
            font-size: 0.85rem;
            line-height: 1.5;
        }

        .middle .feed .comment {
            margin: 15px 5px 0 5px;
        }

        .middle .feed .head {
            display: flex;
            justify-content: space-between;
        }

        .middle .feed .user {
            display: flex;
            gap: 1rem;
        }

        .middle .feed .photo {
            border-radius: var(--card-border-radius);
            overflow: hidden;
            margin: 0.7rem 0;
        }

        .middle .feed .action-buttons {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1.4rem;
            margin: 0 0.6rem;
        }

        .middle .feed .action-buttons span i {
            cursor: pointer;
        }

        .middle .feed .comment-box {
            width: 100%;
            height: 250px;
            position: relative;
            margin-bottom: 5px;
            display: none;
        }

        .middle .feed .comment-box.active {
            display: block;
        }

        .comment-box .comment-box-display {
            height: calc(100% - 40px);
            padding-top: 10px;
            overflow-y: auto;
        }

        .comment-box .comment-box-display .user-comment {
            display: flex;
            margin-bottom: 5px;
        }

        .comment-box .comment-box-display .user-comment span:last-child {
            flex-basis: 100%;
            font-size: 14px;
        }

        .comment-box .comment-box-display .user-comment span img {
            height: 30px;
            width: 30px;
            margin-right: 10px;
            border-radius: 50%;
        }

        .comment-box .comment-box-input {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            display: flex;
            align-items: center;
        }

        .comment-box .comment-box-input input {
            width: 99%;
            height: 40px;
            padding: 5px 5px 5px 15px;
            border-radius: 20px;
            box-shadow: .5px .5px 5px rgba(0, 0, 0, 0.4);
        }

        .comment-box .comment-box-input button {
            height: 40px;
            width: 40px;
            margin-left: 5px;
            cursor: pointer;
            font-size: 18px;
            border-radius: 50%;
            box-shadow: .5px .5px 5px rgba(0, 0, 0, 0.4);
        }

        .middle .liked-by {
            display: flex;
        }

        .middle .liked-by span {
            width: 1.4rem;
            height: 1.4rem;
            display: block;
            border-radius: 50%;
            overflow: hidden;
            border: 2px solid var(--color-white);
            margin-left: -0.6rem;
        }

        .middle .liked-by span:first-child {
            margin: 0;
        }

        /*------------------------*/


        .middle .liked-by p {
            margin-left: 0.5rem;
        }

        main .container .right {
            height: max-content;
            position: sticky;
            top: var(--sticky-top-right);
            bottom: 0;
        }

        .right .messages {
            background: var(--color-white);
            border-radius: var(--card-border-radius);
            padding: var(--card-padding);
        }

        .right .messages .heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1rem;
        }

        .right .messages i {
            font-size: 1.4rem;
        }

        .right .messages .search-bar {
            display: flex;

            margin-bottom: 1rem;
        }

        .right .messages .category {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
        }

        .right .messages .category h6 {
            width: 100%;
            text-align: center;
            border-bottom: 4px solid var(--color-light);
            padding-bottom: 0.5rem;
            font-size: 0.85rem;
        }

        .right .messages .category .active {
            border-color: var(--color-dark);
        }

        .right .messages .message-requests {
            color: var(--color-primary);
        }

        .right .messages .message {
            display: flex;
            gap: 1rem;
            margin-bottom: 1rem;
            align-items: start;
        }

        .right .message .profile-picture {
            position: relative;
            overflow: visible;
        }

        .right .profile-picture img {
            border-radius: 50%;
        }

        .right .messages .message:last-child {
            margin: 0;
        }

        .right .messages .message p {
            font-size: 0.8rem;
        }

        .right .messages .message .profile-picture .active {
            width: 0.8rem;
            height: 0.8rem;
            border-radius: 50%;
            border: 3px solid var(--color-white);
            background: var(--color-success);
            position: absolute;
            bottom: 0;
            right: 0;
        }

        /* ================= FRIEND REQUESTS =================== */
        .right .friend-requests {
            margin-top: 1rem;
        }

        .right .friend-requests h4 {
            color: var(--color-gray);
            margin: 1rem 0;
        }

        .right .request {
            background: var(--color-white);
            padding: var(--card-padding);
            border-radius: var(--card-border-radius);
            margin-bottom: 0.7rem;
        }

        .right .request .info {
            display: flex;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .right .request .action {
            display: flex;
            gap: 1rem;
        }

        /* ======================== THEME CUSTOMIZATION ========================== */

        .customize-theme {
            background: rgba(0, 0, 0, 0.7);
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
            text-align: center;
            display: grid;
            place-items: center;
            font-size: 0.9rem;
            display: none;
        }

        .customize-theme .card {
            background: var(--color-white);
            padding: 3rem;
            border-radius: var(--card-border-radius);
            width: 50%;
            box-shadow: 0 0 1rem var(--color-primary);
        }

        .customize-theme .font-size {
            margin-top: 5rem;
        }

        .customize-theme .font-size>div {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: var(--color-light);
            padding: var(--search-padding);
            border-radius: var(--card-border-radius);
        }

        .customize-theme .choose-size {
            background: var(--color-secondary);
            height: 0.3rem;
            width: 100%;
            margin: 0 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .customize-theme .choose-size span {
            width: 1rem;
            height: 1rem;
            background: var(--color-secondary);
            border-radius: 50%;
            cursor: pointer;
        }

        .customize-theme .choose-size span.active {
            background: var(--color-primary);
        }

        .customize-theme .color {
            margin-top: 2rem;
        }

        .customize-theme .choose-color {
            background: var(--color-light);
            padding: var(--search-padding);
            border-radius: var(--card-border-radius);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .customize-theme .choose-color span {
            width: 2.2rem;
            height: 2.2rem;
            border-radius: 50%;
        }

        .customize-theme .choose-color span:nth-child(1) {
            background: hsl(252, 75%, 60%);
        }

        .customize-theme .choose-color span:nth-child(2) {
            background: hsl(52, 75%, 60%);
        }

        .customize-theme .choose-color span:nth-child(3) {
            background: hsl(352, 75%, 60%);
        }

        .customize-theme .choose-color span:nth-child(4) {
            background: hsl(152, 75%, 60%);
        }

        .customize-theme .choose-color span:nth-child(5) {
            background: hsl(202, 75%, 60%);
        }

        .customize-theme .choose-color span.active {
            border: 5px solid white;
        }

        /* -------------------- BACKGROUND -------------------- */
        .customize-theme .background {
            margin-top: 2rem;
        }

        .customize-theme .choose-bg {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1.5rem;
        }

        .customize-theme .choose-bg>div {
            padding: var(--card-padding);
            width: 100%;
            display: flex;
            align-items: center;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 0.4rem;
            cursor: pointer;
        }

        .customize-theme .choose-bg>div.active {
            border: 2px solid var(--color-primary);
        }

        .customize-theme .choose-bg .bg-1 {
            background: white;
            color: black;
        }

        .customize-theme .choose-bg .bg-2 {
            background: hsl(252, 30%, 17%);
            color: white;
        }

        .customize-theme .choose-bg .bg-3 {
            background: hsl(252, 30%, 10%);
            color: white;
        }

        .customize-theme .choose-bg>div span {
            width: 2rem;
            height: 2rem;
            border: 2px solid var(--color-gray);
            border-radius: 50%;
            margin-right: 1rem;
        }

        #search_user_name {
            background: var(--color-light);
            padding: 3px;
            font-size: 17px;
        }

        #search_container {
            width: 270px;
            max-height: 216px;
            background: var(--color-light);
            position: absolute;
            left: 1px;
            top: 57px;
            padding: 5px 3px 3px 5px;
            border-radius: 5px;
            box-shadow: 4px 4px 10px -2px rgb(0, 0, 0, 0.7);
            display: none;
            overflow: hidden;
            overflow-y: auto;
        }
        #search_container::-webkit-scrollbar{
            width: 5px;
        }
        #search_container::-webkit-scrollbar-thumb{
            background: var(--color-primary);
            border-radius: 10px;
        }

        #search_container .search-data-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1px 4px;
            margin-bottom: 8px;
            box-shadow: 0px 0px 8px -3px var(--color-primary); 
            cursor: pointer;
            transition: 0.5s ease;
        }
        #search_container .search-data-container:hover {
            background: rgb(0, 0, 0, 0.1);
        }

        #search_container .search-data-container img{
            width: 40px;
            height: 40px;
            border-radius: 50%;
            box-shadow: 0 0 10px 2px rgb(0, 0, 0, 0.1);
        }

        #search_container .search-data-container div{
            width: 100%;
            height: 100%;
        }
        
        #search_container .search-data-container div p{
            /* text-align: center; */
            padding-left: 20px;
            letter-spacing: 1px;
        }
        
        #search_container .search-data-container div span{
            font-size: 13px;
            display: block;
            /* text-align: center; */
            letter-spacing: 2px;
            padding-left: 20px;
            font-weight: 900;
            color: var(--color-primary);
            transition: 0.5s ease;
        }
        
        #search_container .search-data-container:hover div span{
            letter-spacing: 5px;
        }

        /* 
        ====================== MEDIA QUERIES FOR SMALL LAPTOPS AND BIG TABLETS ======================
        */
        @media screen and (max-width: 1200px) {

            .container {
                width: 96%;
            }

            main .container {
                grid-template-columns: 5rem auto 30vw;
                gap: 1rem;
            }

            .left {
                width: 5rem;
                z-index: 5;
            }

            main .container .left .profile {
                display: none;
            }

            .sidebar h3 {
                display: none;
            }

            .left .btn {
                display: none;
            }

            .customize-theme .card {
                width: 80vw;
            }
        }

        /* ================== MEDIA QUERIES FOR SMALL TABLETS AND MOBILE PHONES ==================
        */
        @media screen and (max-width: 992px) {
            nav .search-bar {
                display: none;
            }

            main .container {
                grid-template-columns: 0 auto 5rem;
                gap: 0;
            }

            main .container .left {
                grid-column: 3/4;
                position: fixed;
                bottom: 0;
                right: 0;
            }

            /* ------------ NOTIFICATION POPUP ------------- */
            .left .notifications-popup {
                position: absolute;
                left: -20rem;
                width: 20rem;
            }

            .left .notifications-popup::before {
                display: absolute;
                top: 1.3rem;
                left: calc(20rem - 0.6rem);
                display: block;
            }

            main .container .middle {
                grid-column: 1/3;
            }

            main .container .right {
                display: none;
            }

            .customize-theme .card {
                width: 92vw;
                padding: 1rem;
            }

            .customize-theme .choose-bg>div {
                width: 90%;
            }

            .customize-theme .choose-bg>div span {
                width: 1rem;
                height: 1rem;
                border: 2px solid var(--color-gray);
                border-radius: 50%;
                margin-right: 1rem;
            }
        }
    </style>
</head>

<body>
    <nav>
        <div class="container">
            <h2 class="log"> beingSocial</h2>
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="search" placeholder="Search,friends,groups" id="search_user_name">
                <div id="search_container">
                    <div class="search-data-container">
                        NO Result Found
                    </div>
                </div>
            </div>
            <div class="create">
                <label class="btn btn-primary" for="create-post">Create</label>

                <div class="profile-picture">
                    <img style="height: 100%;" src="./profile pic/<?php echo $user['pic']; ?>">
                </div>
            </div>
            <a href="./logout.php" class="btn btn-primary logout">LOG OUT</a>
        </div>
    </nav>
    <!-- <!====================main======================> -->
    <main>
        <div class="container">
            <!-- <!=========================left=========================> -->
            <div class="left">
                <a class="profile">
                    <div class="profile-picture">
                        <img style="height: 100%;" src="./profile pic/<?php echo $user['pic']; ?>">

                    </div>
                    <div class="handle">
                        <h4><?php echo $user['first_name'] . " " . $user['last_name']; ?></h4>
                        <p class="text-muted">@<?php echo $user['user_name']; ?></p>
                    </div>
                </a>
                <!-- <!====================SIDEBAR=============================> -->
                <div class="sidebar">
                    <a class="menu-item active">
                        <span><i class="fas fa-home"></i></span>
                        <h3>Home</h3>
                    </a>
                    <a class="menu-item" href="https://www.google.com/maps">
                        <span><i class="far fa-compass"></i></span>
                        <h3>Map</h3>
                    </a>
                    <a class="menu-item" id="notifications">
                        <span><i class="fas fa-bell"><small class="notification-count">9+</small></i></span>
                        <h3>Notification</h3>
                        <!-- <!========================noti poppop============> -->
                        <div class="notifications-popup">
                            <div>
                                <div class="profile-picture">
                                    <img src="profile-2.jpg">

                                </div>
                                <div class="notification-body">
                                    <b>Divya</b> accepted your friend request
                                    <small class="text-muted">2 Days Ago</small>
                                </div>
                            </div>

                            <div>
                                <div class="profile-picture">
                                    <img src="profile-3.jpg">

                                </div>
                                <div class="notification-body">
                                    <b>Muskan Risi</b> accepted your friend request
                                    <small class="text-muted">1 HOUR Ago</small>
                                </div>
                            </div>

                            <div>
                                <div class="profile-picture">
                                    <img src="profile-20.jpg">

                                </div>
                                <div class="notification-body">
                                    <b>Mera patel</b> and<b>283 others</b> liked your post
                                    <small class="text-muted">2 HOUR Ago</small>
                                </div>
                            </div>

                            <div>
                                <div class="profile-picture">
                                    <img src="profile-12.jpg">

                                </div>
                                <div class="notification-body">
                                    <b>Janvi Sharma</b> commented on a post you are tagged in
                                    <small class="text-muted">2 HOUR Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-picture">
                                    <img src="ss.jpg">

                                </div>
                                <div class="notification-body">
                                    <b>Sapna_malik</b> commented on a post you are tagged in
                                    <small class="text-muted">2 HOUR Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-picture">
                                    <img src="profile-17.jpg">
                                </div>
                                <div class="notification-body">
                                    <b>Jane Doe </b>commented on you Post
                                    <small class="text-muted">1 HOUR AGO</small>
                                </div>
                            </div>
                        </div>


                    </a>
                    <a class="menu-item" id="messages-notification">
                        <span><i class="fas fa-comment-dots"><small class="notification-count">6</small></i></span>
                        <h3>Messages</h3>
                    </a>

                    <a class="menu-item">
                        <span><i class="fas fa-bookmark"></i></span>
                        <h3>Bookmarks</h3>
                    </a>
                    <a class="menu-item">
                        <span><i class="fas fa-chart-pie"></i></span>
                        <h3>Analytics</h3>
                    </a>
                    <a class="menu-item" id="theme">
                        <span><i class="fas fa-palette"></i></span>
                        <h3>Theme</h3>
                    </a>
                    <a class="menu-item ">
                        <span><i class="fas fa-cog"></i></span>
                        <h3>Setting</h3>

                    </a>

                </div>
                <label for="create-post" class="btn btn-primary">Create Post</label>
            </div>
            <!-- <!=========================middle========================> -->
            <div class="middle">
                <!-- <!========================Story========================> -->
                <div class="stories">
                    <div class="story">
                        <div class="profile-picture">
                            <img src=profile-8.jpg>
                        </div>
                        <p class="name">Your Story</p>
                    </div>
                    <div class="story">
                        <div class="profile-picture">
                            <img src=profile-9.jpg>
                        </div>
                        <p class="name">Bonnie Bennett</p>
                    </div>
                    <div class="story">
                        <div class="profile-picture">
                            <img src=profile-10.jpg>
                        </div>
                        <p class="name">Elena Gilbert</p>
                    </div>
                    <div class="story">
                        <div class="profile-picture">
                            <img src=profile-11.jpg>
                        </div>
                        <p class="name">Caroline Forbes </p>
                    </div>
                    <div class="story">
                        <div class="profile-picture">
                            <img src=profile-12.jpg>
                        </div>
                        <p class="name">Nina Dobrev</p>
                    </div>

                    <div class="story">
                        <div class="profile-picture">
                            <img src=ss.jpg>
                        </div>
                        <p class="name">Sapna_malik</p>
                    </div>

                </div>
                <!-- <!==========================end of story===============> -->
                <form class="create-post" method="POST" enctype="multipart/form-data" action="./home_page_data.php">
                    <div class="profile-picture">
                        <img src="profile-1.jpg">
                    </div>
                    <input type="text" placeholder="What's on your mind ,Diane?" id="create-post" name="upload_text">
                    <span class="btn btn-primary" id="fk_btn" style="margin-right: 15px; display: flex;">
                        <p style="margin-right: 5px;">Add</p>
                        <p>Photo</p>
                    </span>
                    <input type="file" style="display: none;" id="real_image_post" name="upload_image">
                    <input type="submit" value="Post" name="post_data" class="btn btn-primary">
                    <script>
                        document.getElementById("fk_btn").addEventListener('click', () => {
                            document.getElementById("real_image_post").click();
                        });
                    </script>
                </form>
                <!-------------------FEEDS---------------------------->
                <div class="feeds">
                    <!---------------------------------feed using PHP-->
                    <?php
                    $sql = "SELECT * FROM `post` JOIN `user_details` ON post.post_user_name=user_details.user_name  ORDER BY post.post_id DESC";
                    $result = mysqli_query($con, $sql) or die("Query Failed");
                    if (mysqli_num_rows($result) > 0) {
                        while ($post = mysqli_fetch_assoc($result)) {
                    ?>
                            <div class="feed" id="feed_<?php echo $post['post_id'] ?>">
                                <div class="head">
                                    <div class="user">
                                        <div class="profile-picture">
                                            <img style="height: 100%;" src="./profile pic/<?php echo $post['pic']; ?>">
                                        </div>
                                        <div class="ingo">
                                            <h3><?php echo $post['first_name'] . " " . $post['last_name']; ?></h3>
                                            <small>
                                                <?php
                                                $time = explode(".", explode($post['user_name'], $post['image'])[1])[0];
                                                echo date("h:iA, d-M-Y", $time);
                                                ?>
                                            </small>

                                        </div>

                                    </div>
                                    <span class="edit">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </span>
                                </div>
                                <div class="comment">
                                    <p><?php echo $post['text']; ?></p>
                                </div>
                                <div class="photo">
                                    <img src="./feeds images/<?php echo $post['image']; ?>">
                                </div>
                                <div class="action-buttons">
                                    <div class="interaction-buttons">
                                        <?php
                                        $like_count_query = mysqli_query($con, "SELECT * FROM `like_dislike` WHERE user_id = '{$_SESSION['user_name']}' AND post_id = {$post['post_id']} AND like_count = 2") or die("query Failed");
                                        $like_count = mysqli_num_rows($like_count_query);

                                        $likeClass = "far";
                                        $likeColor = "#000";
                                        if ($like_count > 0) {
                                            $likeClass = "fas";
                                            $likeColor = "#FF0000";
                                        }
                                        ?>
                                        <span>
                                            <i style="cursor: pointer; color:<?php echo $likeColor; ?>" onclick="like(<?php echo $post['post_id']; ?>,'<?php echo $_SESSION['user_name']; ?>')" id="like_<?php echo $post['post_id']; ?>" class="<?php echo $likeClass; ?> fa-heart"></i>
                                        </span>
                                        <span><i class="far fa-comment" id="comment-btn" onclick="showComment(<?php echo $post['post_id'] ?>)"></i></span>
                                        <span><i class="fas fa-share"></i></span>
                                    </div>
                                    <div class="bookmark">
                                        <span><i class="far fa-bookmark"></i></span>
                                    </div>
                                </div>
                                <div class="liked-by">
                                    <span><img src="profile-10.jpg"></span>
                                    <span><img src="profile-4.jpg"></span>
                                    <span><img src="profile-5.jpg"></span>
                                    <?php
                                    $like_count00 = mysqli_num_rows(mysqli_query($con, "SELECT * FROM `like_dislike` WHERE post_id = {$post['post_id']} AND like_count = 2"));
                                    ?>
                                    <p>Liked by <b id="like_count"><?php echo $like_count00; ?></b> others</p>
                                </div>
                                <div class="comment-box" id="comment_box_<?php echo $post['post_id'] ?>">
                                    <div class="comment-box-display" id="comment-box-display-<?php echo $post['post_id'] ?>">
                                        <?php
                                        $comment_post_id = $post['post_id'];
                                        $comment_sql = "SELECT * FROM `comments` WHERE comment_post_id = $comment_post_id";
                                        $comment_result = mysqli_query($con, $comment_sql);
                                        $comment_count = mysqli_num_rows($comment_result);
                                        if ($comment_count > 0) {
                                            while ($comment_row = mysqli_fetch_assoc($comment_result)) {
                                                $pic = $comment_row['user_name'];
                                                $pPic = mysqli_query($con, "SELECT pic FROM `user_details` WHERE user_name = '$pic'") or die("Query failed");
                                                $pPic = mysqli_fetch_assoc($pPic);
                                        ?>
                                                <div class="user-comment">
                                                    <span><img src="./profile pic/<?php echo $pPic['pic']; ?>"></span>
                                                    <span>
                                                        <p><?php echo $comment_row['comment_data']; ?></p>
                                                    </span>
                                                </div>
                                        <?php
                                            }
                                        } else {
                                            echo "<p>No Comments</p>";
                                        }
                                        ?>

                                    </div>
                                    <div class="comment-box-input">
                                        <input type="text" name="comment" id="user-comment-<?php echo $post['post_id'] ?>">
                                        <button name="post_comment" onclick="sendComment(<?php echo $post['post_id'] ?>,'<?php echo $_SESSION['user_name'] ?>')"><i class="far fa-paper-plane"></i></button>
                                    </div>
                                </div>
                                <div class="comments text-muted">View all <b id="Comments_count_show_<?php echo $post['post_id'] ?>"><?php echo $comment_count; ?></b> comments</div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                    <!---------------------------------feed1-->
                    <!-- <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-picture">
                                    <img src="ep.jpg">
                                </div>
                                <div class="ingo">
                                    <h3>Lana Rose</h3>
                                    <small>Dubai, 15 MInutes AGO</small>
                                </div>

                            </div>
                            <span class="edit">
                                <i class="fas fa-ellipsis-h"></i>
                            </span>
                        </div>
                        <div class="comment">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi minima similique magni aspernatur harum omnis eaque dolorem, quo, exercitationem deleniti ex nesciunt mollitia at, odit accusantium veniam alias molestiae assumenda?</p>
                        </div>
                        <div class="photo">
                            <img src="e.jpg">
                        </div>
                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="far fa-heart"></i></span>
                                <span><i class="far fa-comment"></i></span>
                                <span><i class="fas fa-share"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="far fa-bookmark"></i></span>
                            </div>
                        </div>

                       

                        <div class="liked-by">
                            <span><img src="profile-10.jpg"></span>
                            <span><img src="profile-4.jpg"></span>
                            <span><img src="profile-5.jpg"></span>
                            <p>Liked by <b>Ernest Achiver</b>and<b>2, 323 others</b></p>
                        </div>
                        <div style="cursor: pointer;" class="comments text-muted">View all 277 comments</div>
                    </div> -->
                    <!----------------end of feed----------------------------->
                </div>
            </div>
            <!-- <!=========================right==========================> -->
            <div class="right">
                <div class="messages">
                    <div class="heading">
                        <h4>Message</h4><i class="fas fa-edit"></i>
                    </div>
                    <!--------------------Search bar------------------>
                    <div class="search-bar">
                        <i class="fas fa-search"></i>
                        <input type="search" placeholder="Search messages" id="message-search">

                    </div>
                    <!----------------------messages Category--------------------------->
                    <div class="category">
                        <h6 class="active">Primary</h6>
                        <h6>General</h6>
                        <h6 class="messages-requests">Requests(8)</h6>
                    </div>
                    <!-------------------Message-->
                    <div class="message">
                        <div class="profile-picture">
                            <img src="profile-17.jpg">
                        </div>
                        <div class="meassage-body">
                            <h5>Edem Quist</h5>
                            <p class="text-muted">Just wake up bruh</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-picture">
                            <img src="profile-3.jpg">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Franca Deila</h5>
                            <p class="text-bold">Received bruh. Thanks!</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-picture">
                            <img src="profile-4.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Jane Doe</h5>
                            <p class="text-bold">ok</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-picture">
                            <img src="profile-5.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Daniella Jackson</h5>
                            <p class="text-bold">2 new messages</p>
                        </div>
                    </div>
                    <!----- MESSAGE ----->
                    <div class="message">
                        <div class="profile-picture">
                            <img src="profile-6.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Juliet Makarey</h5>
                            <p class="text-muted">lol u right</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-picture">
                            <img src="profile-7.jpg">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Chantel Msiza</h5>
                            <p class="text-bold">Birthday Tomorpost!</p>
                        </div>
                    </div>
                </div>

                <!----------------------END OF Messages----------------->



                <!----------------------Friend Request------------------>
                <div class="friend-requests">
                    <h4>Requests</h4>
                    <!----- REQUEST 1----->
                    <div class="request" id="req-1">
                        <div class="info">
                            <div class="profile-picture">
                                <img src="profile-8.jpg">
                            </div>
                            <div>
                                <h5>Hajia Bintu</h5>
                                <p class="text-muted">8 mutual friends</p>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary" onclick="acceptRequest('req-1')">Accept</button>
                            <button class="btn" onclick="acceptDecline('req-1')">Decline</button>
                        </div>
                    </div>
                    <!----- REQUEST 2----->
                    <div class="request" id="req-2">
                        <div class="info">
                            <div class="profile-picture">
                                <img src="profile-9.jpg">
                            </div>
                            <div>
                                <h5>Jackline Mensah</h5>
                                <p class="text-muted">2 mutual friends</p>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary" onclick="acceptRequest('req-2')">Accept</button>
                            <button class="btn" onclick="acceptDecline('req-2')">Decline</button>
                        </div>
                    </div>
                    <!----- REQUEST 3----->
                    <div class="request" id="req-3">
                        <div class="info">
                            <div class="profile-picture">
                                <img src="profile-10.jpg">
                            </div>
                            <div>
                                <h5>Jennifer Lawrence</h5>
                                <p class="text-muted">19 mutual friends</p>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary" onclick="acceptRequest('req-3')">Accept</button>
                            <button class="btn" onclick="acceptDecline('req-3')">Decline</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================== END OF RIGHT ==========================-->
        </div>
    </main>
    <!--================================================ THEME CUSTOMIZATION =============================================-->
    <div class="customize-theme">
        <div class="card">
            <h2>Customize your view</h2>
            <p class="text-muted">Manage your font size, color, and background.</p>

            <!------------ FONT SIZES ------------->
            <div class="font-size">
                <h4>Font Size</h4>
                <div>
                    <h6>Aa</h6>
                    <div class="choose-size">
                        <span class="font-size-1"></span>
                        <span class="font-size-2 active"></span>
                        <span class="font-size-3"></span>
                        <span class="font-size-4"></span>
                        <span class="font-size-5"></span>
                    </div>
                    <h3>Aa</h3>
                </div>
            </div>

            <!------------ PRIMARY COLORS ------------->
            <div class="color">
                <h4>Color</h4>
                <div class="choose-color">
                    <span class="color-1 active"></span>
                    <span class="color-2"></span>
                    <span class="color-3"></span>
                    <span class="color-4"></span>
                    <span class="color-5"></span>
                </div>
            </div>

            <!---------- BACKGROUND COLORS ------------>
            <div class="background">
                <h4>Background</h4>
                <div class="choose-bg">
                    <div class="bg-1 active">
                        <span></span>
                        <h5 for="bg-1">Light</h5>
                    </div>
                    <div class="bg-2">
                        <span></span>
                        <h5>Dim</h5>
                    </div>
                    <div class="bg-3">
                        <span></span>
                        <h5 for="bg-3">Lights Out</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>

        // Search Bar
        let search_bar = document.getElementById("search_user_name");
        search_bar.addEventListener("keyup", (e) => {
            $("#search_container").css("display", "Block");
            let dataSearch = search_bar.value;
            if(e.key == "Escape"){
                $("#search_container").css("display", "none");
            }
            $.ajax({
                url: "search_database.php",
                type: "POST",
                data: "data=" + dataSearch,
                success: function(data) {
                    $("#search_container").html(data);
                }
            });
        });
        search_bar.addEventListener("blur", () => {
            $("#search_container").css("display", "none");
        });

        // Like Button
        function like(id, name) {
            $.ajax({
                url: "like_count.php",
                type: "POST",
                data: "post_id=" + id + "&user_name=" + name,
                success: function(data) {
                    data = $.parseJSON(data);
                    console.log(data);
                    if (data.operation == 'like') {
                        $("#like_" + id).removeClass("far");
                        $("#like_" + id).addClass("fas");
                        $("#like_" + id).css("color", "#FF0000");
                    }
                    if (data.operation == 'unlike') {
                        $("#like_" + id).addClass("far");
                        $("#like_" + id).removeClass("fas");
                        $("#like_" + id).css("color", "#000");
                    }
                    $("#feed_" + id + " #like_count").html(data.like_count);
                }
            });
        }

        // Comment Button
        function showComment(id) {
            document.querySelector("#comment_box_" + id).classList.toggle("active");
            document.querySelector("#user-comment-" + id).focus();
            document.querySelector("#user-comment-" + id).select();
        }

        function sendComment(id, user_name) {
            let dataInput = document.querySelector("#user-comment-" + id);
            let display = document.querySelector("#comment-box-display-" + id);
            let display_count = document.querySelector("#Comments_count_show_" + id);
            let dataInputDATA = dataInput.value;
            dataInput.value = "";
            if (dataInputDATA == "") {
                alert("Please Enter any comments !!");
            } else {
                $.ajax({
                    url: "comment_save.php",
                    type: "POST",
                    data: "data=" + dataInputDATA + "&id=" + id + "&user_name=" + user_name,
                    success: function(dataComment) {
                        if (dataComment == 0) {
                            alert("Something Wrong!! Try Again !")
                        } else {
                            $(display).append(dataComment);
                            $.ajax({
                                url: "comment_count.php",
                                type: "POST",
                                data: "id=" + id,
                                success: function(count) {
                                    $(display_count).html(count);
                                }
                            });
                        }
                    }
                });
            }

        }

        // Request Accept
        function acceptRequest(e){
            alert("Friend Request Accepted")
            $("#"+e).hide();
        }
        function acceptDecline(e){
            alert("Friend Request Declined")
            $("#"+e).hide();
        }
    </script>
</body>

</html>