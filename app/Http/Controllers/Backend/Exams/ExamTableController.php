<?php

namespace App\Http\Controllers\Backend\Exams;

use App\Http\Controllers\Controller;
use Yajra\Datatables\Facades\Datatables;
use App\Repositories\Backend\Exams\ExamRepository;
use App\Http\Requests\Backend\Exams\ExamRequest;

/**
 * Class CountryTableController.
 */
class ExamTableController extends Controller
{
    /**
     * @var CountryRepository
     */
    protected $exams;

    /**
     * @param CountryRepository $countries
     */
    public function __construct(ExamRepository $exams)
    {
        $this->exams = $exams;
    }

    /**
     * @param CountryRequest $request
     *
     * @return mixed
     */
    public function __invoke(ExamRequest $request)
    {
        return Datatables::of($this->exams->getForDataTable())
            ->escapeColumns(['exam'])
           
            ->addColumn('actions', function ($exam) {
                return $exam->action_buttons;
            })
            ->withTrashed()
            ->make(true);
    }
}
