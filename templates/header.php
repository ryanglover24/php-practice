<?php

    session_start();

    // Override session name $_SESSION['name'] = 'Yoshi';
//query string is eg: http://localhost/tuts/index.php?noname 
    if ($_SERVER['QUERY_STRING'] == 'noname') {
       //unset single variable
        // unset($_SESSION['name']);
        //unset all variables
        session_unset();
    }
//null coalese Gets rid of error message at top when unset above and sets a 'backup value'
    $name = $_SESSION['name'] ?? 'Guest';

    //get cookie not universally available as header is on every page added below
    $gender = $_COOKIE['gender'] ?? 'Unknown';

?>




<head>
    <title>
        Ninja Pizza
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
    .brand {
        background: #cbb09c !important;
    }
    .brand-text {
        color: #cbb09c !important;
    }
    form {
        padding: 40px;
        max-width: 820px;
        margin: 20px auto;
    }
    .pizza {
        width: 150px;
        margin: 40px auto -30px;
        display: block;
        position: relative;
        top: -50px;
    }
    </style>
</head>

<body class="grey lighten-4">

    <nav class="white z-depth-0">
        <div class="container">
            <a href="index.php" class="brand-logo brand-text">Ninja Pizza</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li class="red-text">Hello <?php echo htmlspecialchars($name); ?></li>
                <li class="red-text"> &nbsp; (<?php echo htmlspecialchars($gender); ?>)</li>
                <li><a href="add.php" class="btn brand z-depth-0">Add a Pizza</a>
        </div>
    
    </nav>








