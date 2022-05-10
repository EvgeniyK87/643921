<?php

namespace App\Interfaces;

interface IssueRepositoryInterface 
{

    public function getAllIssues($sortBy, $orderBy);

    public function getIssueById($issueId);

    public function getFilteredIssues($filter, $tags, $orderBy, $sortBy);
    
}