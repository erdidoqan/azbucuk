<?php

namespace App\Console\Commands;


use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Vedmant\FeedReader\Facades\FeedReader;

class HourlySporNews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'trends:spor';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Google news spor bilgileri getirir';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $f = FeedReader::read('https://news.google.com/rss/topics/CAAqJggKIiBDQkFTRWdvSUwyMHZNRFp1ZEdvU0FuUnlHZ0pVVWlnQVAB?hl=tr&gl=TR&ceid=TR%3Atr');

        foreach ($f->get_items() as $item){

            $getTitle = explode('-',$item->get_title())[0];
            $this->info($getTitle);
        }
    }
}
