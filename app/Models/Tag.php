<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Issue;

class Tag extends Model
{
    use HasFactory;

    public function issues()
    {
        return $this->belongsToMany(Issue::class)->withTimestamps()->as('issue_tags');
    }
}
