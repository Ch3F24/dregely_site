<?php

namespace App\Http\Controllers;

use App\Imports\PhotoImport;
use App\Models\Work;
use App\Repositories\WorkRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Validators\ValidationException;


class WorkController extends BaseController
{

    protected WorkRepository $repository;

    public function __construct(WorkRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return view('site.works.index');
    }

    public function view(Work $work)
    {
        return view('site.works.view',compact('work'));
    }

    public function bulkUpload()
    {
        return view('admin.bulk-upload.form');
    }
    public function storeBulkUpdate(Request $request)
    {
        try {
            Excel::import(new PhotoImport(intval($request->row_start),intval($request->row_limit)), $request->file,null,\Maatwebsite\Excel\Excel::CSV);
        } catch (ValidationException $e) {
            $failures = $e->failures();

            foreach ($failures as $failure) {
                $failure->row(); // row that went wrong
                $failure->errors(); // Actual error messages from Laravel validator
            }
            return $failures;
        }

        return response()->json('success');

    }
}
