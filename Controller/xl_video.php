<?php
$baseUrl = 'https://www.googleapis.com/youtube/v3/';
    // https://developers.google.com/youtube/v3/getting-started
$apiKey = 'AIzaSyDX1AX_1ZyvKRtvIQpBLFadScc0goXnN3w';
    // If you don't know the channel ID see below
$channelId = 'UCudvW2_l3xEtARIXW8ZWvgQ';

$params = [
	'id'=> $channelId,
	'part'=> 'contentDetails',
	'key'=> $apiKey
];

$url = $baseUrl . 'channels?' . http_build_query($params);
	//echo($url);

$json = json_decode(file_get_contents($url), true);
	// echo "<pre>";
	// print_r($json);
$playlist = $json['items'][0]['contentDetails']['relatedPlaylists']['uploads'];
	//echo "DL: ".$playlist;
$params = [
	'part'=> 'snippet',
	'playlistId' => $playlist,
	'maxResults'=> '50',
	'key'=> $apiKey
];
$url = $baseUrl . 'playlistItems?' . http_build_query($params);
	// echo($url);
	// echo "<br/>";
$json = json_decode(file_get_contents($url), true);
	// echo "<pre>";
	// print_r($json);

$videos = [];
foreach($json['items'] as $video)
	$videos[] = $video['snippet']['resourceId']['videoId'];

while(isset($json['nextPageToken'])){
	$nextUrl = $url . '&pageToken=' . $json['nextPageToken'];
		// echo($nextUrl);
	$json = json_decode(file_get_contents($nextUrl), true);
	foreach($json['items'] as $video)
		$videos[] = $video['snippet']['resourceId']['videoId'];
}
// echo "<pre>";
// print_r($videos);
require_once 'View/Home.php';
?>