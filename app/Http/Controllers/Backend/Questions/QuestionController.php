<?php

namespace App\Http\Controllers\Backend\Questions;

use App\Http\Controllers\Controller;
use App\Models\Question\Question;
use App\Repositories\Backend\Questions\QuestionRepository;
use App\Http\Requests\Backend\Questions\QuestionRequest;

/**
 * Class CountryController. 
 */
class QuestionController extends Controller
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(QuestionRequest $request)
    {
        return view('backend.questions.index');
    }

    /**
     * @param CountryRequest $request
     *
     * @return mixed
     */
    public function create(QuestionRequest $request)
    {
        return view('backend.questions.create');
    }

    /**
     * @param CountryRequest $request
     *
     * @return mixed
     */
    public function store(QuestionRequest $request)
    {
        $question = new Question(array(
            //'exam_id' => $request->get('exam_id'),
            'exam_id' => 1000,
            'question' => $request->get('question')
        ));
        $question->save();
        return redirect()->route('admin.questions.index')->withFlashSuccess(trans('alerts.backend.questions.created'));
    }

    /**
     * @param Country $country
     * @param CountryRequest $request
     *
     * @return mixed
     */
    public function show(Question $question, QuestionRequest $request)
    {
        return view('backend.questions.show')->withQuestion($question);
    }

    /**
     * @param Country $country
     * @param CountryRequest $request
     *
     * @return mixed
     */
    public function edit(Question $question, QuestionRequest $request)
    {
        return view('backend.questions.edit')->withQuestion($question);
    }

    /**
     * @param Country $country
     * @param CountryRequest $request
     *
     * @return mixed
     */
    public function update(Question $question, QuestionRequest $request)
    {
        $question->update([
            'exam_id' => $request->get('exam_id'),
            'question' => $request->get('question')
        ]);

        return redirect()->route('admin.questions.index')->withFlashSuccess(trans('alerts.backend.questions.updated'));
    }

    /**
     * @param Country $country
     * @param CountryRequest $request
     *
     * @return mixed
     */
    public function destroy(Question $question, QuestionRequest $request)
    {
        $question->delete();
        return redirect()->route('admin.questions.index')->withFlashSuccess(trans('alerts.backend.questions.deleted'));
    }
}
