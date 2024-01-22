<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class GetGoogleSearch
{
    public string $query;
    public string $imageText;
    public int $page;
    private object $response;

    /**
     * @param string $query
     */
    public function setQuery(string $query): void
    {
        $this->query = $query;
    }

    /**
     * @param string $imageText
     */
    public function setImageText(string $imageText): void
    {
        $this->imageText = $imageText;
    }

    public function handle()
    {
        $client = new Client();
        $response = $client->get('https://www.googleapis.com/customsearch/v1', [
            'query' => [
                'key' => env('GOOGLE_API_KEY'),
                'filter' => 1,
                'start' => 1,
                'sort' => 'date:a:w',
                'gl' => 'tr',
                'lr' => 'lang_tr',
                'ImgSize' => 'IMG_SIZE_XXLARGE',
                'cx' => env('GOOGLE_SEARCH_ENGINE_ID'),
                'q' => $this->query,
                'searchType' => 'image',
            ],
        ]);
        $this->response = json_decode($response->getBody()->getContents());
        return null;
    }

    public function checkImageSize($widthSubLimit, $heightSubLimit, $page=1)
    {
        $contents = $this->response;
        $this->page = $page;
        $links = [];
        foreach ($contents->items as $content) {
            if ($content->image->width >= $widthSubLimit/* && $content->image->height <= $heightSubLimit*/){
                $links[] = $content->link;
            }
        }

        if (empty($links)){
            if ($widthSubLimit = 10){
                return $contents->items[0]->link;
            }
            return $this->checkImageSize(intval($widthSubLimit), intval($heightSubLimit), intval($this->page + 1));
        }

        return $links[0];
    }

    private function yuzdeHesaplama($sayi,$yuzde){
        return ($sayi*$yuzde)/100;
    }

    public function textWatermark($imageUrl)
    {
        $img = Image::make($imageUrl);
        $img->colorize(-45, -40, 30);
        $lines = explode("\n", wordwrap($this->imageText, 40));
        for ($i = 0; $i < count($lines); $i++) {
            $offset = $img->getHeight() - $this->yuzdeHesaplama($img->getHeight(),30) + ($i * 50); // 50 is line height
            $img->text($lines[$i], 50, $offset, function ($font) {
                $font->file(public_path('/site/fonts/Montserrat-ExtraBold.ttf'));
                $font->size(50);
                $font->color('#fff');
                $font->align('left');
                $font->valign('bottom');
                $font->angle(0);
            });
        }
        $img->encode('jpg');
        $img->stream();


        $path = 'images/'.Str::slug($this->query).'.jpg';
        Storage::disk('r2')->put($path, $img);

        return env('CLOUDFLARE_R2_URL').'/'.$path;
    }
}
