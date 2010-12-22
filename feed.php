<?php

include("includes/FeedWriter/FeedWriter.php");

$feed = new FeedWriter(ATOM);

$feed->setTitle('Refilmagem Showtimes Superfeedr');
$feed->setLink('http://showtimes.refilmagem.com.br');

//For other channel elements, use setChannelElement() function
$feed->setChannelElement('updated', date(DATE_ATOM , time()));
$feed->setChannelElement('author', array('name'=>'Refilmagem'));

$controller = new ShowtimesController('br','porto-alegre');
$showtimes = $controller->getShowtimes();

foreach ($showtimes as $key => $cinema) {
	$serialized_content = serialize($cinema);
	
	$content = base64_encode($serialized_content);
	$hash = sha1($serialized_content);

	$item = $feed->createNewItem();
	$item->setTitle("$cinema->nome|$hash");
	$item->setDate(time());
	$item->setDescription($content);

	$feed->addItem($item);
}

$feed->genarateFeed();

?>