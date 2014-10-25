<!DOCTYPE html>
 
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
 ;
include_once('simple_html_dom.php');
  
$html= file_get_html("http://indiatoday.intoday.in/section/120/1/top-stories.html");
$count=1;
echo '<h1>Top headlines for Today</h1>';
foreach($html->find('div.innerbox') as $v){
     
    foreach($v->find('a') as $s){
        echo $count.'. '.' <a href=\''.'http://indiatoday.intoday.in/'.$s->href.'\'>'.$s->plaintext.'</a>'.'<br><br>';
        $count++;
    }   
}
 
        ?>
    </body>
</html>
