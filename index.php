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
    <link rel="stylesheet" href="./styles/index.css" />
</head>

<body>
    <nav>
        <div class="app_name">
            ✅<span class="poll">poll</span><span class="up">Up</span>⬆️
        </div>
        <button>Create Poll ✨</button>
    </nav>
    <form>
        <header>Create your Poll
            <p><b>Create</b> and <b>host</b> your poll for <b>free</b>...</p>
        </header>
        <label>Enter your question</label><br />
        <input type="text" />
        <br /><br />
        <label>Your name</label><br />
        <input type="text" />
        <br /><br />
        <label>Poll options</label>
        <div id="option_inputs">
            <div class="form_inp_option">
                <input type="text" name="options[]" />
            </div>
        </div>
        <button id="add_option">add</button>
        <div class="bottom">
            <button disabled>Create your poll</button>
            <a href="./polls.html">Check other polls &#8250;</a>
        </div>
    </form>
    <script src="./scripts/index.js"></script>
</body>

</html>