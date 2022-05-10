<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Models\Issue;
use App\Http\Resources\IssueResource;

class IssueCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'data' => $this->collection,
            'version' => '0.1.1',
            'autor' => 'Evgeniy',
            'documentation' => 'https://github.com/EvgeniyK87/example-support/blob/main/README.md',
        ];
    }
}
