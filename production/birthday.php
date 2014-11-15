<?php include 'header.php';?>

<?php

    # Base URL for the API
    $url  = 'http://api.nobelprize.org/v1/laureate.json';

    $date = date("m/d");
    $printDate = date("j F");

    # Retreieve the result from the API using CURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $string = curl_exec($ch);
    curl_close($ch);

    # Read the JSON output into an associative array
    $result  = json_decode($string, true);

    $numLaureates = count($result['laureates']); 

    print "<main>";

    print "<h3>Nobel Laureates born on $printDate</h3>";

    for ($i = 0; $i < $numLaureates; $i++) {

        $born = $result['laureates'][$i]['born'];

        $other_date = date('m/d', strtotime($born));

        if ($date == $other_date){
                
           # Print out the names
            $id = $result['laureates'][$i]['id'];
            $firstname = $result['laureates'][$i]['firstname'];
            $surname = $result['laureates'][$i]['surname'];
            $motivation = $result['laureates'][$i]['prizes'][0]['motivation'];
            
            $cat = $result['laureates'][$i]['prizes'][0]['category'];
            $year = $result['laureates'][$i]['prizes'][0]['year'];

            $name = html_entity_decode($surname, ENT_QUOTES, "UTF-8");
            $name = preg_replace("/\s+/", " ", $name);
            $name = str_replace(" ", "_", $name);
            $name = preg_replace("[^A-Za-z0-9_]","",$name);
            $name = strtolower($name);
            
            $imageUrl = "/images/laureates/$cat/$year/" . $name . "_postcard.jpg";
            
            if( false == ($str =@ file_get_contents('$imageUrl',NULL,NULL,0,1))){
                print "<article class='laureateprofiletext'> <figure class='laureateprofilepicture'>
                <img class='laureateImg' src='$imageUrl' onerror='imgError(this);' /></figure>";
            }

            print "<p><a href='laureate.php?id=$id'>$firstname $surname</a>\n";
            print " ($born) <br>";
            print "$motivation</p><div style='clear:both'></div></article>";
        }

    }

    print "</main>";
?>

<?php include 'footer.php';?>