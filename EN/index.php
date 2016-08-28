

<?php
//START

// WELCOME TO MY OSU API SCRIPT
// ALL CREATED BY ME
// twitch.tv/TheGamingMaik
// Credits to Dante557 for help 


// makes file_get_contents work :)

ini_set("allow_url_fopen", 1);


//Gets user and key out of the URL

$username = $_GET["u"];
$ApiKey = $_GET["k"];

// Putting the url together to use osu Api

$url = "https://osu.ppy.sh/api/get_user?u=" . $username . "&k=" . $ApiKey;

//Gets undecoded json

$json = file_get_contents($url);

//decodes it

$result = json_decode($json, true);

//Puts recived values into strings

$countryrank = $result[0]["pp_country_rank"];
$country = $result[0]["country"];
$worldrank = $result[0]["pp_rank"];
$name = $result[0]["username"];
$pp = $result[0]["pp_raw"];

//Formats The Numbers (exp. 150000 to 150.000)

$wrank = number_format($worldrank);
$crank = number_format($countryrank);

//Prints the final text line (fully changeable ;)

if ($pp > 0) {
    print($name . " " . "has" . " " . $pp . "pp" . " " .  "and is on rank" . " #" . $wrank . " " . "in the word! ");
    print("In" . " " . $country . " " . "on rank" . " #" . $crank . ".");
}
else {
    print("An error occured please check your inserted data.");
}

//END

//HAVE
//FUN

//Version 1.1

?>
