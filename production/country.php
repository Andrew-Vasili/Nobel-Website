
<?php
    
    print "<b>Happy Birthday!</b><br>";

    # Base URL for the API
    $url  = 'http://api.nobelprize.org/v1/laureate.json';

    $date = date("m/d");

    # Retreieve the result from the API using CURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $string = curl_exec($ch);
    curl_close($ch);

    # Read the JSON output into an associative array
    $result  = json_decode($string, true);

    $numLaureates = count($result['laureates']); 

    for ($i = 0; $i < $numLaureates; $i++) {

        $born = $result['laureates'][$i]['born'];

        $other_date = date('m/d', strtotime($born));

        if ($date == $other_date){
                
            $firstname = $result['laureates'][$i]['firstname'];
            $surname = $result['laureates'][$i]['surname'];
            $id = $result['laureates'][$i]['id'];
            print "<a href='laureate.php?id=$id'><b>$firstname $surname</b>";
            print " ($born)</a><br>\n";
        }

    }

?>