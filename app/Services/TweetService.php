<?php

namespace App\Services;

use App\Models\Tweet;

class TweetService
{
    public function getTweets()
    {
        return Tweet::orderBy('created_at', "DESC")->get();
    }

    public function checOwnTweet(int $userId, int $tweetId): bool {
        return Tweet::where('id', $userId)->first();
        if(!$tweet){
            return false;
        }
        return $tweet->user_id ===  $userId;
    }

}