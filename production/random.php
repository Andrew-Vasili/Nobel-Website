<?php include 'header.php';?>

<?php
    
    // Random Nobel Laureate

    $id = rand (0 , 887);

    # Base URL for the API
    $url  = 'http://api.nobelprize.org/v1/laureate.json?id=';
    $url .= $id;

    # Retreieve the result from the API using CURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $string = curl_exec($ch);
    curl_close($ch);

    # Read the JSON output into an associative array
    $result  = json_decode($string, true);
    $firstname = $result['laureates'][0]['firstname'];

    if ($firstname != null){

        $surname = $result['laureates'][0]['surname'];
        $born = $result['laureates'][0]['born'];
        $died = $result['laureates'][0]['died'];
        $bornCountry = $result['laureates'][0]['bornCountry'];
        $bornCity = $result['laureates'][0]['bornCity'];
        $diedCountry = $result['laureates'][0]['diedCountry'];
        $diedCity = $result['laureates'][0]['diedCity'];
        $gender = $result['laureates'][0]['gender'];
        $prizes = $result['laureates'][0]['prizes'];
        $year = $prizes[0]['year'];
        $cat = $prizes[0]['category'];
        $category = ucfirst($prizes[0]['category']);
        $motivation = $prizes[0]['motivation'];
        $affiliations = $prizes[0]['affiliations'];
        $aName = $affiliations[0]['name'];
        $aCity = $affiliations[0]['city'];
        $aCountry = $affiliations[0]['country'];

        
        $name = html_entity_decode($surname, ENT_QUOTES, "UTF-8");
        $name = preg_replace("/\s+/", " ", $name);
        $name = str_replace(" ", "_", $name);
        $name = preg_replace("[^A-Za-z0-9_]","",$name);
        $name = strtolower($name);
        
        $imageUrl = "/images/laureates/$cat/$year/" . $name . "_postcard.jpg";
        
        print "\n<main>";

        if(false == ($str =@ file_get_contents('$imageUrl',NULL,NULL,0,1))){
            print "<img class='laureateImg' src='$imageUrl' onerror='imgError(this);' />";
        }
        
        print "<div class='info'><span class='laureateName'>$firstname $surname</span>\n";
        
        if ($born != "0000-00-00"){
            print "<br>Born: <span id='born'>$born, $bornCity, $bornCountry</span>\n";
        }
            
        if ($died != "0000-00-00"){
            print "<br>Died: <span id='died'>$died, $diedCity, $diedCountry</span>\n";
        }
        
        print "<br><br><b>Nobel Prizes</b><br>";
        print "<b>Year:</b> <span id='year'>$year</span>\n";
        print "<br><b>Category:</b> <span id='category'>$category</span>\n";
       
        if ($motivation != ""){
            print "<br><br><b>Motivation:</b><br/><span id='motivation'>$motivation</span>\n";
        }

        if ($aName != ""){
            print "<br><b>Affiliations:</b> ";
            print "$aName, $aCity, $aCountry\n";
        }

        print "</div><div style='clear:both;'></div></main>\n";

    } else {

        print "Oops! Nothing to see here. ";
        print "<a href='index.php'>Back to home page</a>";

    }      

?>

<script>
function imgError(image) {
    image.onerror = "";
    image.src = "/images/missing.jpg";
    return true;
}
</script>

<?php include 'footer.php';?>