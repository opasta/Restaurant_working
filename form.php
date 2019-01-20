<html>
<head>
  <title>Add Data</title>
  
</head>

<style>
.error {color: #FF0000;}
</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  <script type="text/javascript">
function validate()
{
 var error="";
 var name = document.getElementById( "name" );
 if( name.value == "" )
 {
  error = "Voer naam in";
  document.getElementById( "error_name" ).innerHTML = error;
  return false;
 }

 var phone = document.getElementById( "phone" );
 if( phone.value == "" )
 {
  error = "Voer telefoonnummer in";
  document.getElementById( "error_phone" ).innerHTML = error;
  return false;
 }

 var email = document.getElementById( "email" );
 if( email.value == "" )
 {
  error = "Voer email in";
  document.getElementById( "error_email" ).innerHTML = error;
  return false;
 }

  var table = document.getElementById( "table" );
 if( table.value == "" )
 {
  error = "Voer tafel in";
  document.getElementById( "error_table" ).innerHTML = error;
  return false;
 }

  var date = document.getElementById( "datepicker" );
 if( date.value == "" )
 {
  error = "Voer datum in";
  document.getElementById( "error_date" ).innerHTML = error;
  return false;
 }

  var num_pers = document.getElementById( "num_pers" );
 if( num_pers.value == "" )
 {
  error = "Voer aantal personen in";
  document.getElementById( "error_num_pers" ).innerHTML = error;
  return false;
 }



 else
 {
  return true;
 }
}

</script>
</head>
<body> 
  <a href="index.php">Home</a>
  <P>Reserveren</p>
  <br/><br/>
<h2>PHP Form Validation Example</h2>
<p><span class="error">* Verplicht veld!</span></p>
<form method="post" name="form1" action="add.php" onsubmit="return validate();">  

  Naam: <input type="text" name="name" id="name">
  <span class="error"><span id="error_name" ></span>
  <br><br>
  Telefoonnummer: <input type="text" name="phone" id="phone">
  <span class="error"><span id="error_phone" ></span>
  <br><br>
  E-mail: <input type="text" name="email" id="email">
  <span class="error"><span id="error_email" ></span>
  <br><br>
  Tafelnummer: <input type="text" name="table" id="table">
  <span class="error"><span id="error_table" ></span>
  <br><br>
  Datum: <input type="text" id="datepicker" name="date">
  <span class="error"><span id="error_date" ></span>
  <br><br>
  Aantal Personen: <input type="text" name="num_pers" id="num_pers">
  <span class="error"><span id="error_num_pers" ></span>
  <br><br>

  
  <input type="submit" name="Submit" value="Add"></td>
  <p id="error_para" ></p>

</form>

</body>
</html>

