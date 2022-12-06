<?php
function omtrek(){
  $pi = (pi());
  $lengte = $_POST['lengte'];
  $diameter = $lengte * 2;
  $som = $diameter * $pi;
  $antwoord = number_format($som, 1);
  echo "De omtrek van een cirkel met straal $lengte is : $antwoord </br>";
}
function oppervlakte(){
  $pi = (pi());
  $lengte = $_POST['lengte'];
  $som = $lengte * $lengte * $pi;
  $antwoord = number_format($som, 1);
  echo "De oppervlakte van een cirkel met straal $lengte is: $antwoord</br>";
}
if(isset($_POST['omtrek']))
{
  omtrek();
}
if(isset($_POST['oppervlakte']))
{
 oppervlakte();
}
?>
<form method="post">
  <input type="number" name="lengte" placeholder="Geef lengte van de cirkel" required/>
  <input type="submit" name="omtrek" value="omtrek"/>
  <input type="submit" name="oppervlakte" value="oppervlakte"/>
</form>