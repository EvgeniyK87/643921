<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Interfaces\IssueRepositoryInterface;
use App\Http\Resources\IssueCollection;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;


class IssueController extends Controller
{
    private IssueRepositoryInterface $issueRepository;

    public function __construct(IssueRepositoryInterface $issueRepository) 
    {
        $this->issueRepository = $issueRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) 
    {

        $validator = Validator::make($request->all(), [
            'sort_by' => 'in:id,title,category,description,user_id,created_at,updated_at',
            'order_by' => 'in:asc,desc',
            'filter.title'  => 'string|min:2|max:255',
            'filter.category'  => 'string|min:2|max:255',
            'filter.description'  => 'string|min:2|size:64KB',
            'filter.user_id'  => 'integer|exists:users,id',
            'filter.created_at'  => 'date',
            'filter.updated_at'  => 'date',
            'tags' => 'array|exists:tags,name'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json($errors, 400);
        } 

        $sortBy = isset($request->sort_by) ? $request->sort_by : 'id';
        $orderBy = isset($request->order_by) ? $request->order_by : 'asc';

        if (isset($request->filter) OR isset($request->tags)) {
            $issues = $this->issueRepository->getFilteredIssues($request->filter, $request->tags, $sortBy, $orderBy);
        } else {
            $issues = $this->issueRepository->getAllIssues($sortBy, $orderBy);
        }

        return New IssueCollection($issues);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request): JsonResponse 
    {
        $issueId = $request->route('id');

        return response()->json([
            'data' => $this->issueRepository->getIssueById($issueId)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Issue $issue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Issue $issue)
    {
        //
    }
}
