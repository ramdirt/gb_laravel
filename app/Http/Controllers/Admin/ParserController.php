<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\News;
use Illuminate\Http\Request;
use App\Services\Contract\Parser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserController extends Controller
{
    public function __invoke(Request $request, Parser $parser)
    {
        $parser->setLink('https://news.yandex.ru/sport.rss')->parse()->save();
    }
}