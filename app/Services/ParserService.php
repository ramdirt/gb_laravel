<?php

namespace App\Services;

use App\Models\News;
use App\Services\Contract\Parser;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserService implements Parser
{
    protected string $link;
    protected $data;


    public function setLink(string $link): Parser
    {
        $this->link = $link;

        return $this;
    }

    public function parse()
    {
        $xml = XmlParser::load($this->link);

        $this->data = $xml->parse([
            'title' => [
                'uses' => 'channel.title'
            ],
            'link' => [
                'uses' => 'channel.link'
            ],
            'description' => [
                'uses' => 'channel.description'
            ],
            'image' => [
                'uses' => 'channel.image'
            ],
            'news' => [
                'uses' => 'channel.item[title,link,guid,description,pubDate]'
            ]
        ]);

        return $this;
    }

    public function save()
    {
        foreach ($this->data['news'] as $news) {

            $data = [
                'title' => $news['title'],
                'description' => $news['description'],
                'hash' => md5($news['title'] . $news['pubDate']),
                'category_id' => 20
            ];

            if (News::where('hash', '=', $data['hash'])->first() === null) {
                $news = new News($data);

                if ($news->save()) {
                    // какое-то действие после сохранения
                }
            } else {
                // какое-то действие если такая новость уже есть
            }
        }
    }
}