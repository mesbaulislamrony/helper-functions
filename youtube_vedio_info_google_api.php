<?php
/**
 *  Function: get youtube video information.
 *
 *  Description: 
 *  This function for youtube video information. (Ex. 3.5k)
 *
*/ 
function get_video_information($vedio_id)
    {
        $data = [];
        $api_key = "AIzaSyD8i8uH6TYAH2QAwRJ022gl5hOkJVCXJRo";
        $api_url = 'https://www.googleapis.com/youtube/v3/videos?part=snippet%2CcontentDetails%2Cstatistics&id=' . $vedio_id . '&key=' . $api_key;
        $data = json_decode(file_get_contents($api_url));
        if ($data) {
            return $data;
        }
    }
?>