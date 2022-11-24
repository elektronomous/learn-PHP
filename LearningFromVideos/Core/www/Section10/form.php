<!-- 1 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Section 10</title>
</head>

<body>
    <form action="process_form.php" method="GET">
        <!-- 3 
        <input name="search">
        <input name="username" />
        <input name="password" type="password"> 
        -->
        <div>
            <label for="Username">Username: </label>
            <input type="text" id="Username" />
        </div>
        <div>
            <label for="Pass">Password</label>
            <input type="password" name="Pass" id="Pass" />
        </div>
        <div>
            <label for="Tel" />Phone Number</label>
            <input type="tel" name="Tel" id="Tel" />
        </div>
        <div>
            <label for="URL">URL</label>
            <input type="url" name="URL" id="URL" />
        </div>
        <div>
            <label for="Date">Date: </label>
            <input type="date" name="Date" id="Date" />
        </div>
        <div>
            <label for="Time">Time: </label>
            <input type="time" name="Time" id="Time" />

        </div>
        <div>
            <label for="Week">Week: </label>
            <input type="week" name="Week" id="Week" />

        </div>
        <div>
            <label for="Color">Color: </label>
            <input type="color" name="Color" id="Color" />
        </div>
        <div>
            <label for="Email">Email: </label>
            <input type="email" name="Email" id="Email" />
        </div>
        <div>
            <label for="Month">Month: </label>
            <input type="month" name="Month" id="Month" />

        </div>
        <div>
            <label for="Range">Range: </label>
            <input type="range" name="Range" id="Range" />

        </div>
        <div>
            <label for="Hidden">Hidden: </label>
            <input type="hidden" name="Hidden" id="Hidden" />

        </div>
        <div>
            <label for="Number">Number: </label>
            <input type="number" name="Number" id="Number" />
        </div>
        <div>
            <label for="Search">Search: </label>
            <input type="search" name="Search" id="Search" />
        </div>

        <div>
            <label for="Datetime-Local">Datetime: </label>
            <input type="datetime-local" name="Datetime-Local" id="Datetime-Local" />
        </div>
        <!-- 4 -->
        <div>
            <label for="Comment">Comment: </label>
            <textarea id="Comment" name="Comment" rows="5" cols="20"></textarea>
        </div>
        <!-- 5 -->
        <div>
            <label for="Subject">Subject: </label>
            <select name="Subject[]" multiple>
                <option value="Technology">Technology</option>
                <option value="Business">Business</option>
                <option value="Article">Article</option>
                <option value="Community">Community</option>
            </select>
        </div>
        <!-- 6 -->
        <div>
            <label for="Term">Aggre Term and Policy</label>
            <input type="checkbox" name="Term" id="Term" />
        </div>
        <!-- 7 -->
        <div>
            <label for="Color">Favourite Color: </label>
            <input type="checkbox" name="color[]" value="red">Red
            <input type="checkbox" name="color[]" value="green">Green
            <input type="checkbox" name="color[]" value="blue">Blue
        </div>

        <button>Send</button>
    </form>

</body>

</html>
<?php

?>