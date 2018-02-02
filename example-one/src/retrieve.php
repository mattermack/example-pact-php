<?php
require_once ("../vendor/autoload.php");
require_once ("ExampleOneMeetupApiClient.php");

$uri = new GuzzleHttp\Psr7\Uri("https://api.meetup.com");
$meetup = new ExampleOneMeetupApiClient($uri);

// https://www.meetup.com/meetup_api/docs/2/categories/
//https://secure.meetup.com/meetup_api/console/?path=/2/categories
/*

HTTP/1.1 200 success
{

    "results": [
        {
                "name": "Games",
                "sort_name": "Games",
                "id": 11,
                "shortname": "Games"
        },
        {
            "name": "Book Clubs",
            "sort_name": "Book Clubs",
            "id": 18,
            "shortname": "Book Clubs"
        }
    ]
}
 */
$categories = $meetup->categories();
