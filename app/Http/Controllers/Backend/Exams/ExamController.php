<?php

namespace App\Http\Controllers\Backend\Exams;

use App\Http\Controllers\Controller;
use App\Models\Certification\Certification;
use App\Models\Category\Category;
use App\Models\Exam\Exam;
use App\Repositories\Backend\Exams\ExamRepository;
use App\Http\Requests\Backend\Exams\ExamRequest;

/**
 * Class CountryController. 
 */
class ExamController extends Controller
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(ExamRequest $request)
    {
        return view('backend.exams.index');
    }

    /**
     * @param CountryRequest $request
     *
     * @return mixed
     */
    public function create(ExamRequest $request)
    {
        $certifications = Certification::orderBy('name')->pluck('name', 'id');
        $categories = Category::orderBy('category')->pluck('category', 'id');

        return view('backend.exams.create', ['certifications' => $certifications, 'categories' => $categories]);
    }

    /**
     * @param CountryRequest $request
     *
     * @return mixed
     */
    public function store(ExamRequest $request)
    {
        $exam = new Exam(array(
            'certification_id' => $request->get('certification_id'),
            'category_id' => $request->get('category_id'),
            'exam_name' => $request->get('exam_name'),
            'exam_code' => $request->get('exam_code'),
            'description' => $request->get('description'),
        ));
        $exam->save();
        return redirect()->route('admin.exams.index')->withFlashSuccess(trans('alerts.backend.exams.created'));
    }

    /**
     * @param Country $country
     * @param CountryRequest $request
     *
     * @return mixed
     */
    public function show(Exam $exam, ExamRequest $request)
    {
        return view('backend.exams.show')->withExam($exam);
    }

    /**
     * @param Country $country
     * @param CountryRequest $request
     *
     * @return mixed
     */
    public function edit(Exam $exam, ExamRequest $request)
    {

        return view('backend.exams.edit')->withExam($exam);
    }

    /**
     * @param Country $country
     * @param CountryRequest $request
     *
     * @return mixed
     */
    public function update(Exam $exam, ExamRequest $request)
    {
        $exam->update([
            'certification_id' => $request->get('certification_id'),
            'category_id' => $request->get('category_id'),
            'exam_name' => $request->get('exam_name'),
            'exam_code' => $request->get('exam_code'),
            //'description' => $request->get('description')
        ]);

        return redirect()->route('admin.exams.index')->withFlashSuccess(trans('alerts.backend.exams.updated'));
    }

    /**
     * @param Country $country
     * @param CountryRequest $request
     *
     * @return mixed
     */
    public function destroy(Exam $exam, ExamRequest $request)
    {
        $exam->delete();
        return redirect()->route('admin.exams.index')->withFlashSuccess(trans('alerts.backend.exams.deleted'));
    }
}
