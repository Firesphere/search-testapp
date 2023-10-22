<?php

namespace App\src;

use Firesphere\ElasticSearch\Indexes\ElasticIndex;

class SearchIndex extends ElasticIndex
{

    public function getIndexName(): string
    {
        return 'search-testindex';
    }
}
