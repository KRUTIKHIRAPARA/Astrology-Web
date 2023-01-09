<html>
<h1>This Is Testing Page</h1>
<?php
include 'simple_html_dom.php';

//$rashi="gemini";
$rashi="aquarius";
// $html = file_get_html("https://www.astroyogi.com/horoscopes/daily/".$rashi."-free-horoscope.aspx");
// $html = file_get_html("https://astrotalk.com/horoscope/monthly-horoscope/aries");
// $html = file_get_html("https://astrotalk.com/horoscope/todays-horoscope/libra");
$html = file_get_html("https://www.birthastro.com/horoscopes/daily-horoscope/aries");


// echo $html->find("div#myTabContent",0);
echo $html;
// echo $html->find("h6.birthRange",0);
// echo $html->find("div.parah_aries_horocope p",0);
// echo $html->find("div.parah_aries_horocope h2",0);
// echo $html->find("div.parah_aries_horocope p",1);


/*
 $result = $html->find("div.inner_contant",0)->innertext;
 echo $result;

 foreach($html->find("div.inner_contant",1) as $a)
 {
     echo $a->plaintext;
    echo "<br>";
}

*/

?>


</html>