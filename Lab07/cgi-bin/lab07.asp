<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab07.asp JChen</title>

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
    <%
    city = Request.Form("city")
    country = Request.Form("country")
    url = Request.Form("url")

    Function IsValidCity(city)
        Set regEx = new RegExp
        regEx.Pattern = "/^[a-zA-Z '-]+$/" 
        regEx.IgnoreCase = true 
        regEx.Global = true
    
        isValidCity = regEx.Test(city)
    End Function
    

    If IsValidCity(city) Then

        Response.Write("<h1 class='country'>" & country & "</h1>")
        Response.Write("<h1 class='city'>" & city & "</h1>")
        Response.Write("<img src='" & url & "' alt='City image'>")

    Else 
        Response.Write("<h1>Invalid City, please try again. </h1>")

End If
    %>
</body>
</html>