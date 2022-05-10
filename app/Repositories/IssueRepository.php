<?php

namespace App\Repositories;

use App\Interfaces\IssueRepositoryInterface;
use App\Models\Issue;

class IssueRepository implements IssueRepositoryInterface 
{
    public function getAllIssues($orderBy, $sortBy) 
    {
        $issues = Issue::with('tags')->orderBy($orderBy, $sortBy)->get();
        return $issues;
    }

    public function getIssueById($issueId) 
    {
        $issue = Issue::with('tags')->findOrFail($issueId);
        return $issue;
    }

    public function getFilteredIssues($filter, $tags, $orderBy, $sortBy) 
    {

        $title = isset($filter['title']) ? $filter['title'] : null;
        $category = isset($filter['category']) ? $filter['category'] : null;
        $description = isset($filter['description']) ? $filter['description'] : null;
        $user_id = isset($filter['user_id']) ? $filter['user_id'] : null;
        $created_at = isset($filter['created_at']) ? $filter['created_at'] : null;
        $updated_at = isset($filter['updated_at']) ? $filter['updated_at'] : null;

        $query = Issue::with('tags');

        // Filtering by tags  
        if (isset($tags)) {
            $query->whereHas('tags', function ($q) use ($tags) {
                $q->whereIn('tags.name', $tags);
            });
        }

        // Filtering by values of columns
        $issues = $query->when(
            $title, function ($query, $title) { 
                return $query->where('title', 'like', "%$title%"); 
        })->when(
            $category, function ($query, $category) { 
                return $query->where('category', 'like', "%$category%");
        })->when(
            $description, function ($query, $description) { 
                return $query->where('description', 'like', "%$description%");
        })->when(
            $created_at, function ($query, $created_at) { 
                return $query->where('created_at', $created_at);
        })->when(
            $updated_at, function ($query, $created_at) { 
                return $query->where('updated_at', $updated_at);
        })->orderBy($orderBy, $sortBy)->get();

        return $issues;

    }

}