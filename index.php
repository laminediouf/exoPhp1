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
            <!--
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <select name="statu" id="statu" class="form-control input-md test">
                        <option id="opt1"></option>
                        <option id="opt2"> Etudiant</option>
                        <option id="opt3"> Stagiaire</option>
                        <option id="opt4"> Proffessionnel</option>
                    </select>
                    <span id="spanstatu"> </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" > </label>
                <div class="col-md-4">
                    <p class="civ"> Situation Familiale: </p>
                    <label class="container2"> <p>Marie</p>
                        <input type="checkbox" name="chkbox"  id="chkbox1" >
                        <span class="checkmark1"></span>
                    </label>
                    <label class="container2"> <p>Celibataire</p>
                        <input type="checkbox" name="chkbox" id="chkbox2"  >
                        <span class="checkmark1"></span>
                    </label>
                    <span id="spanchek"> </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" > </label>
                <div class="col-md-4">
                    <p class="civ"> Civilite: </p>
                    <label class="container2"> <p>Homme</p>
                        <input type="radio" name="radio"  id="radio1" >
                        <span class="checkmark"></span>
                    </label>
                    <label class="container2"> <p>Femme</p>
                        <input type="radio" name="radio" id="radio2" >
                        <span class="checkmark"></span>
                    </label>
                    <span id="spanrad"> </span>
                </div>
            </div>

-->
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
<!-- <script src="js/validate_form_contact_alert.js"></script> -->
<script src="js/bootstrap.min.js"></script>
<!--
<script type="text/javascript">
    var formValid =document.getElementById("bouton_val");

    var aff1 =document.getElementById("spanpre");
    var xpren = document.getElementById("prenom");

    var aff2 =document.getElementById("spanom");
    var xnom = document.getElementById("nom");

    var aff3 =document.getElementById("spanemail");
    var xemail = document.getElementById("email");

    var aff4 =document.getElementById("spanstatu");

    var aff5 =document.getElementById("spanchek");

    var aff6 =document.getElementById("spanrad");

    var aff7 =document.getElementById("spanmess");
    var xms=document.getElementById("mesage");



    formValid.addEventListener('click',validation);
    function validation(event) {
        if(xpren.value == ""){
            event.preventDefault();
            aff1.textContent= " prenom manquant";
            aff1.style.color= "red";
        }else {
            event.preventDefault();
            aff1.textContent= "";
        }

        if(xnom.value =="") {
            event.preventDefault();
            aff2.textContent= " nom manquant";
            aff2.style.color= "red";
        }else {
            event.preventDefault();
            aff2.textContent = "";
        }

        if(xemail.value =="") {
            event.preventDefault();
            aff3.textContent= " Email manquant";
            aff3.style.color= "red";
        }else {
            event.preventDefault();
            aff3.textContent = "";
        }
        if(document.getElementById("opt1").selected==true){
            event.preventDefault();
            aff4.textContent= " Choisir votre Statut";
            aff4.style.color= "red";
        }else {
            event.preventDefault();
            aff4.textContent = "";
        }

        if(document.getElementById("chkbox1").checked==false && document.getElementById("chkbox2").checked==false){
            event.preventDefault();
            aff5.textContent= " Choisir votre Statut";
            aff5.style.color= "red";
        }else {
            event.preventDefault();
            aff5.textContent = "";
        }

        if(document.getElementById("radio1").checked==false && document.getElementById("radio2").checked==false){
            event.preventDefault();
            aff6.textContent= " Choisir votre civilite";
            aff6.style.color= "red";
        }else {
            event.preventDefault();
            aff6.textContent = "";
        }

        if(xms.value==""){
            event.preventDefault();
            aff7.textContent= " Message manquant";
            aff7.style.color= "red";
        }else {
            event.preventDefault();
            aff7.textContent= "";
        }
    }
</script>
-->
</body>
</html>
