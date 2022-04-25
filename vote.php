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
    <link rel="stylesheet" href="./styles/vote.css" />
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
                <input type="radio" id="r1" name="rr" />
                <label for="r1">Dancer</label>
            </div>
            <div class="option">
                <input type="radio" id="r2" name="rr" />
                <label for="r2">Singer</label>
            </div>
            <div class="option checked">
                <input type="radio" id="r3" name="rr" checked />
                <label for="r3">Painter</label>
            </div>
            <div class="option">
                <input type="radio" id="r4" name="rr" />
                <label for="r4">Nothing</label>
            </div>
        </div>
        <div class="bottom">
            <button disabled>Submit your vote</button>
            <a href="result.html">Check results &#8250;</a>
        </div>
    </article>
</body>

</html>