<?php

include "lib/twitteroauth.php";

$consumer_key = "";

$consumer_secret = "";

$access_token = "";

$access_token_secret = "";


$twitter = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);

?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Twitter API SEARCH</title>
</head>

<body>

<form action="" method="post" name="f">
<center><label>Search<input type="text" name="keyword"/></label>	</form>	</center>
<?php 
if(isset($_POST['keyword']))
{
//echo $_POST['keyword'];
$tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=%40'.$_POST['keyword'].'&result_type=recent&count=20')

?>

<?php foreach ($tweets->statuses as $key => $tweet) { 
?>
    
Tweet : <img src="<?=$tweet->user->profile_image_url;?>
" />
<?=$tweet->text; ?><br>

By:<?=$tweet->user->name;?><br>
<?php }}?>	


</body></html>