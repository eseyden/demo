<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Comment;
use Carbon\Carbon;

class ExtractShipDate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'comments:shipdate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $comments = Comment::where('comments','LIKE','%Expected Ship Date:%')->get();
        $this->withProgressBar($comments,function($comment){
            $matches = [];
            if(preg_match('/Expected Ship Date: \d\d\/\d\d\/\d\d/', $comment->comments, $matches)){
                $dateMatches = [];
                preg_match('/\d\d\/\d\d\/\d\d/',$matches[0],$dateMatches);
                $expectedShipdate = new Carbon($dateMatches[0]);
                $comment->shipdate_expected = $expectedShipdate;
                $comment->save();
            }           
        });
        return 0;
    }
}
