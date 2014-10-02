<?php 

$password = "";
$delimeter = "-";
$nmbr_of_words = 3;
$checkedNumber = "";
$checkedSymbol = "";
if (isset($_GET['nmbr_of_words']))
{

    $nmbr_of_words = intval($_GET["nmbr_of_words"]);

    if ($nmbr_of_words == 0)
    {
    	$nmbr_of_words = 3;
    }

    $words = file("nounlist.txt");

    if (isset($_GET['delimeter']))
    {
        $delimeter = $_GET['delimeter'];
    }

    for ($i = 0; $i < $nmbr_of_words; $i++) {
    	$password = $password . trim($words[rand(0, sizeof($words) - 1)]) . $delimeter ;
    }

    $password = rtrim($password, $delimeter);

    if (isset($_GET['number']) && $_GET['number'] == "on")
    {
        $checkedNumber = "checked";
        $password = $password . rand(0, 2004);
    }

    if (isset($_GET['special']) && $_GET['special'] == "on")
    {
        $checkedSymbol = "checked";     
        $special_array = array(":", ";", "<","=",">", "=", "?", "@", "[", "]", "{", "|");      
        $password = $password . $special_array[rand(0, sizeof($special_array)) - 1];   
    }
}
?>

