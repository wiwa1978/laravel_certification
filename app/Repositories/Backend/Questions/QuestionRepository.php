<?php

namespace App\Repositories\Backend\Questions;

use App\Models\Question\Question;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CountryRepository.
 */
class QuestionRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Question::class;


    /**
     *
     * @return mixed
     */
    public function getForDataTable()
    {
        $dataTableQuery = $this->query()
            ->select([
                'id',
                'exam_id',
                'question',
                'created_at',
                'updated_at',
            ]);


        return $dataTableQuery;
    }

}
