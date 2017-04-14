<?php

namespace App\Repositories\Backend\Exams;

use App\Models\Exam\Exam;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CountryRepository.
 */
class ExamRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Exam::class;


    /**
     *
     * @return mixed
     */
    public function getForDataTable()
    {
        $dataTableQuery = $this->query()
            ->select([
                'id',
                'certification_id',
                'category_id',
                'exam_name',
                'exam_code',
                'description',
                'created_at',
                'updated_at',
            ]);


        return $dataTableQuery;
    }

}
