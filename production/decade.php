<?php include 'header.php';?>

<?php
    
    // Default: Category = Phyiscs, Year = Current Year

    # Base URL for the API
    $url  = 'http://api.nobelprize.org/v1/prize.json?category=';
    # List Nobel Prizes in category from the past 10 years
    $category = $_GET["category"];
    
    if ($category == null){
        $category = "physics";
    }
    $url .= $category;
    
    $url .= "&year=";  
    $chosenYear = $_GET["year"];
    if ($chosenYear == null){
        $chosenYear = date("Y");
    }
    $url .= $chosenYear;

    $url .= "&yearTo=";
    $prevYear = ($chosenYear-10);
    $url .= $prevYear;

    # Retreieve the result from the API using CURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $string = curl_exec($ch);
    curl_close($ch);

    # Read the JSON output into an associative array
    $result  = json_decode($string, true);

    $prizes = $result['prizes'][0];

    $numyears = count($result['prizes']);

    print "<div id='browseyear'>";

    // Previous Decade
    if ($numyears == 11){
        print "<a href='decade.php?category=$category&year=$prevYear'>";
        print "<<" . ($prevYear-10) . ' - ' . ($prevYear); 
        print "</a> ";
    }
    
    // Current Decade
    print "<b>" . ($prevYear) . ' - ' . $chosenYear . "</b>";

    // Next Decade 
    if ($chosenYear != date("Y")){
        $nextYear = ($chosenYear+10);
        print " <a href='decade.php?category=$category&year=$nextYear'>";
        print ($chosenYear) . ' - ' . ($chosenYear+10); 
        print " >> </a><br>";
    }

    $cat = ucfirst($result['prizes'][0]['category']);

    print "<h3>$cat</h3></div>\n";

    for ($i = 0; $i < $numyears; $i++) {

        $year = $result['prizes'][$i]['year'];
        print "<h3 class='year'>Year: $year</h3>\n";

        # Find out how many laureates this category and year
        $numlaur = count($result['prizes'][$i]['laureates']);

        for ($j = 0; $j < $numlaur; $j++) {

            # Print out the names
            $id = $result['prizes'][$i]['laureates'][$j]['id'];
            $firstname = $result['prizes'][$i]['laureates'][$j]['firstname'];
            $surname = $result['prizes'][$i]['laureates'][$j]['surname'];
            $motivation = $result['prizes'][$i]['laureates'][$j]['motivation'];
            
            $name = html_entity_decode($surname, ENT_QUOTES, "UTF-8");
            $name = preg_replace("/\s+/", " ", $name);
            $name = str_replace(" ", "_", $name);
            $name = preg_replace("[^A-Za-z0-9_]","",$name);
            $name = strtolower($name);
            
            $imageUrl = "/images/laureates/$cat/$year/" . $name . "_postcard.jpg";
            
            if( false == ($str =@ file_get_contents('$imageUrl',NULL,NULL,0,1))){
                print "<article class='laureateprofiletext'> <figure class='laureateprofilepicture'>
                <img src='$imageUrl' onerror='imgError(this);' /></figure>";
            }

            print "<p><a href='laureate.php?id=$id'>$firstname $surname</a>\n";
            print "$motivation</p><div style='clear:both'></div></article>";

        }
        
        print "<br></article>\n";

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