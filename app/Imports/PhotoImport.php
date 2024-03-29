<?php

namespace App\Imports;

use App\Models\Photo;
use App\Models\Work;
use Illuminate\Support\Facades\Cache;
use Maatwebsite\Excel\Concerns\RemembersRowNumber;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithLimit;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Spatie\ResponseCache\Facades\ResponseCache;

class PhotoImport implements ToModel, WithStartRow,WithLimit
{
    use RemembersRowNumber;

    /**
     * @var int
     */
    private int $startRow;

    /**
     * @var int
     */
    private int $limit;

    public function __construct(int $startRow, int $limit)
    {
        $this->startRow = max($startRow,2);
        $this->limit   = $limit;
    }

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        Cache::flush();
        ResponseCache::clear();
        clock($row);
        $work = Work::query()->where('reference_number', substr($row[1], 0, 2))->first();
        $photo = Photo::query()->where('reference_number', $row[1])->first();
        if ($photo) {
            //Hu
            $photo->translate('hu')->title = $row[2];
            $photo->translate('hu')->print = isset($row[7]) ? $row[7] : '';

            //En
            $photo->translate('en')->title = $row[3];
            $photo->translate('en')->print = isset($row[8]) ? $row[8] : '';

            //Non translated
            $photo->edition_number = isset($row[9]) ? $row[9] : '';
            $photo->year = isset($row[4]) ? $row[4] : '';
            $photo->size = isset($row[6]) ? $row[6] : '';
            $photo->work_id = $work?->id;
            $photo->reference_number = $row[1];

            $photo->save();

        } else {
            return new Photo([
                'hu' => [
                    'title' => $row[2],
                    'print' => isset($row[7]) ? $row[7] : '',
                    'active' => true
                ],
                'en' => [
                    'title' => $row[3],
                    'print' => isset($row[8]) ? $row[8] : '',
                    'active' => true
                ],
                'edition_number' => isset($row[9]) ? $row[9] : '',
                'year' => isset($row[4]) ? $row[4] : '',
                'size' => isset($row[6]) ? $row[6] : '',
                'work_id' => $work?->id,
                'reference_number' => $row[1],
                'published' => false
            ]);
        }
    }

    public function startRow(): int
    {
        return $this->startRow;
    }

    public function limit(): int
    {
        return $this->limit;
    }

    public function rules(): array
    {
        return [
            '1' => 'required',
            '2' => 'required',
            '3' => 'required'
        ];
    }
    public function customValidationAttributes()
    {
        return [
            '1' => 'Referenciaszám',
            '2' => 'Magyar cím',
            '3' => 'Angol cím'
        ];
    }
}

