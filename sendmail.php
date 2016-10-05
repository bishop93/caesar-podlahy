<?
$message = "Phone: ".$_POST["phone"]."\n\r"."E-mail: ".$_POST["email"];
mail("info@podlahy-caesar.cz", "Nova objednavka ze stranek", $message,
 "From: order@podlahy-caesar.cz", "-fwebmaster@podlahy-caesar.cz");

?>