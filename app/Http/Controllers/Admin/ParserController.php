<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\News;
use App\Jobs\JobNewsParsing;
use Illuminate\Http\Request;
use App\Services\Contract\Parser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Queries\QueryBuilderResources;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserController extends Controller
{
    public function __invoke(QueryBuilderResources $resources)
    {
        $data = $resources->getResources();

        foreach ($data as $resource) {
            dispatch(new JobNewsParsing($resource->url));
        }

        return 'Парсинг выполнен';
    }
}