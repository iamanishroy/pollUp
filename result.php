<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poll Up</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./styles/common.css" />
    <!-- <link rel="stylesheet" href="./styles/vote.css" /> -->
    <link rel="stylesheet" href="./styles/result.css" />
</head>

<body>
    <nav>
        <div class="app_name">
            ✅<span class="poll">poll</span><span class="up">Up</span>⬆️
        </div>
        <button onclick="window.location.href='index.html';">Create Poll ✨</button>
    </nav>
    <article class="poll">
        <header>Are you a dancer, singer, painter or nothing person??
            <p>Asked by <b>anonymous</b> about <b>6 hours</b> ago</p>
        </header>
        <div class="options">
            <div class="option">
                <label for="r1">Dancer</label>
                <div class="progress">
                    <div class="progress_filled"></div>
                </div>
                <p>168 votes</p>
                <span>40%</span>
            </div>
            <div class="option checked">
                <label for="r1">Singer</label>
                <div class="progress">
                    <div class="progress_filled"></div>
                </div>
                <p>48 votes</p>
                <span>22%</span>
            </div>
            <div class="option">
                <label for="r1">Singer</label>
                <div class="progress">
                    <div class="progress_filled"></div>
                </div>
                <p>48 votes</p>
                <span>22%</span>
            </div>
            <div class="option">
                <label for="r1">Singer</label>
                <div class="progress">
                    <div class="progress_filled"></div>
                </div>
                <p>48 votes</p>
                <span>22%</span>
            </div>
        </div>
        <div class="bottom">
            <a href="vote.html">Submit your vote &#8250;</a>
        </div>
    </article>
</body>

</html>