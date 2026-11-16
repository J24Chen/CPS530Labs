#!D:/Strawberry/perl/bin/perl.exe



print "Content-type: text/html\n\n";

print <<HTML;

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
<h1 style="font-family:'Concert One', Arial; text-align:center; color:blue;">This is my first Perl program </h1>
</body>
</html>
HTML

print "<h2> hi </h2>";