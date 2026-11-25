<?php 
$image=0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $image = $_POST["background"];
        setcookie('fav_wallpaper', "https://ihypress.de/wallpapers/astronomy/wallpaper.php?image=0$image",time()+172800);
    }

date_default_timezone_set("EST");

$hour= date("G");
$greeting= "test";

if ($hour >= 5 && $hour < 12) 
    $greeting = "Good morning";
elseif ($hour >= 12 && $hour < 17)
    $greeting = "Good Afternoon";
elseif ($hour >= 17 && $hour < 21)
    $greeting = "Good evening";
else
    $greeting = "Good night";


$hero = <<<HTML

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab08</title>
    <style>
        .hero{
            width:100vw;
            height:100vh;
            background:
            radial-gradient(ellipse at center, #17243b 0%, #080d18 72%);
            overflow: hidden;
            display:flex;
            justify-content: center;
            align-items: center;
        }

        .greeting {
            color:white;
        }

        .table p{
            font-family: "Roboto Mono", monospace;
        }

        .universe-section{
            background: rgb(63, 10, 10);
            background-image:url("https://ihypress.de/wallpapers/astronomy/wallpaper.php?image=0$image");
            width:100%;
            height: 20vh;
            object-fit: cover;
            object-position: top;
            color:white;

        }
    </style>
</head>
<body>
    
    <div class="hero">
        <h1 class="greeting">$greeting</h1>
    </div>
    <h2> Enter 2 numbers for a multiplication table! (numbers can only be 3-12)</h2>
</body>
</html>
HTML;

echo $hero;
function check_number($num1,$num2) {
        if (!is_numeric($num1) || !is_numeric($num2) || empty($num1) || empty($num2)) {
            return false;
        }
        if ($num1 < 3 || $num1 > 12) {
            return false;
        }
        if ($num2 < 3 || $num2 > 12) {
            return false;
        }
        return true;
    }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = ($_POST["num1"]);
    $num2 = ($_POST["num2"]);


    if (!check_number($num1,$num2)) {
        echo "<p>invalid input. Please try again.</p>";
    } else {
        $table = "<p> ";
        for ($i = 1; $i <= $num1; $i++) {
            $table .= "<br>";
            for ($j = 1; $j <= $num2; $j++) {
                $table .= ($i * $j) . "\t ";
            }
        }
        $table .= " </p>";

        echo "<div class='table'> $table </div>";
    }
}
?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Number 1: <input type="text" name="num1"><br>
        Number 2: <input type="text" name="num2"><br>
        <input type="submit">
        <div class="universe-section"> 
            <h2> Welcome! Select your wallpaper below</h2>
            <select name="background">
                <option value="2" selected>image 1</option>
                <option value="3">image 2</option>
                <option value="4">image 3</option>
                <option value="5">image 4</option>
                <option value="6">image 5</option>
            </select>
            <input type="submit">
    </div>
    </form>

    
