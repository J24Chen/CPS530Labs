#!/usr/bin/perl -T
use warnings;
use CGI':standard';
use CGI::Carp qw(warningsToBrowser fatalsToBrowser);


print "Content-type: text/html\n\n";

$city = param ('city');
$country = param ('country');
$url = param ('url');

sub displayForm { 
    print <<HTML;

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab07b.cgi JChen</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style> 
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .card {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            gap: 8px;
            width: 400px;

            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);

            background-color: #cbd5e1;
            padding: 40px;
        }

        .country {
            font-family: 'Concert One', sans-serif;
            font-size: 36px;
            text-decoration: underline;

            background-color: #1f2937;
            color: white;

            padding: 8px;
        }

        .city {
            font-family: 'Concert One', sans-serif;
            font-size: 24px;
        }

        img {
            height: 400px;
            width: 400px;

            border: 4px solid black;
            border-radius: 8px;

            object-fit: cover;
        }
    </style>

</head>

<body>
<div class ="container">
        <div class="card">
        <h1 class="country">$country</h1>
        <h1 class="city">$city</h1>
        <img src="$url" alt="$city image">
    </div>
</div>


</body>


</html>
HTML
}

if($city =~ /^[a-zA-Z '-]+$/) {
    displayForm();
} else {
    print "<h1 style='text-align:center;'>City name is invalid. Please try again.</h1>";
}