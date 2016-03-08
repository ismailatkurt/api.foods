<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            display: table-cell;
        }

        .content {
            display: inline-block;
            width: 100%;
        }

        .title {
            font-size: 48px;
        }

        p {
            text-align: left;
        }

        hr {
            width: 100%;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">Seasonal Foods Basic Api</div>
        <hr/>
        <ul>
            <li>
                <h4>List all products</h4>
                <p>In order to list all products<br/></p>
                <p><b>GET ===>  /product</b></p>
            </li>
            <li>
                <h4>Display only one product</h4>
                <p>To display a specific product</p>
                <p><b>GET ===>  /product/{id}</b></p>
            </li>
            <li>
                <h4>Store a new product</h4>
                <p>To store a new product</p>
                <p><b>POST ===>  /product</b></p>
            </li>
        </ul>
    </div>
</div>
</body>
</html>
