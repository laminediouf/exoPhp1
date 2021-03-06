<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
        body
        {
            background-color: #DDD;
            padding-top: -150px;
        }
        [class*="col-"]
        {
            margin-bottom: 0px;
        }
        a:active, a:focus
        {
            outline: none;
        }

        [class*="titre"]
        {
            margin-left: 43%;
            margin-right: 40%;
        }


        /* css du checkbox*/

        .container2 {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Hide the browser's default radio button */
        .container2 input {
            position: absolute;
            opacity: 0;
        }

        /* Create a custom radio button */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 20px;
            width: 20px;
            background-color: grey;
            border-radius: 50%;
        }
        .checkmark1 {
            position: absolute;
            top: 0;
            left: 0;
            height: 20px;
            width: 20px;
            background-color: grey;
            border-radius: 30%;
        }

        /* On mouse-over, add a grey background color */
        .container2:hover input ~ .checkmark {
            background-color: #ccc;
        }
        .container2:hover input ~ .checkmark1 {
            background-color: #ccc;
        }

        /* When the radio button is checked, add a blue background */
        .container2 input:checked ~ .checkmark {
            background-color: #2196F3;
        }
        .container2 input:checked ~ .checkmark1 {
            background-color: #2196F3;
        }

        /* Create the indicator (the dot/circle - hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }
        .checkmark1:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the indicator (dot/circle) when checked */
        .container2 input:checked ~ .checkmark:after {
            display: block;
        }
        .container2 input:checked ~ .checkmark1:after {
            display: block;
        }

        /* Style the indicator (dot/circle) */
        .container2 .checkmark:after {
            top: 9px;
            left: 9px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: white;
        }
        .container2 .checkmark1:after {
            top: 9px;
            left: 9px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: white;
        }
        p{
            color: grey;
        }
        .civ{
            font-size: 25px;
        }
        .mes{
            font-size: 25px;
        }

    </style>
    <title>Contact</title>
</head>
<body>
<div class="container">
    <form class="form-horizontal" name="form" method="post" action="PageReception.php">
        <fieldset>
            <h2 class="titre">Me Contacter</h2>
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <input type="text" id="prenom" name="prenom" placeholder="Prenom" class="form-control input-md test" >
                    <span id="spanpre"> </span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <input type="text" id="nom" name="nom" placeholder="Nom" class="form-control input-md test" >
                    <span id="spanom"> </span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <input type="email" id="email" name="email" placeholder="Email" class="form-control input-md test">
                    <span id="spanemail"> </span>
                </div>
            </div>
           
            <div class="form-group">
                <label class="col-md-4 control-label" ></label>
                <div class="col-md-4">
                    <textarea id="mesage" name="mesage" placeholder="Message" class="form-control input-md test"> </textarea>
                    <span id="spanmess"> </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4 control-label">
                    <input type="submit" value="Envoyer" id="bouton_val" class="btn btn-info btn-block">
                    <input type="reset" value="Annuler" class="btn btn-info btn-block">
                </div>
            </div>
        </fieldset>
    </form>
</div>
</body>
</html>
