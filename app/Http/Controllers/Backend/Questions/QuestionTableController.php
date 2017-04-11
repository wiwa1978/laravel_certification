<?php

namespace App\Http\Controllers\Backend\Questions;

use App\Http\Controllers\Controller;
use Yajra\Datatables\Facades\Datatables;
use App\Repositories\Backend\Questions\QuestionRepository;
use App\Http\Requests\Backend\Questions\QuestionRequest;

/**
 * Class CountryTableController.
 */
class QuestionTableController extends Controller
{
    /**
     * @var CountryRepository
     */
    protected $questions;

    /**
     * @param CountryRepository $countries
     */
    public function __construct(QuestionRepository $questions)
    {
        $this->questions = $questions;
    }

    /**
     * @param CountryRequest $request
     *
     * @return mixed
     */
    public function __invoke(QuestionRequest $request)
    {
        return Datatables::of($this->questions->getForDataTable())
            ->escapeColumns(['question'])
            ->addColumn('actions', function ($question) {
                return $question->action_buttons;
            })
            ->withTrashed()
            ->make(true);
    }
}
