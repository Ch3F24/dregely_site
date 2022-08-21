<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Page;
use App\Repositories\PageRepository;
use App\Repositories\PublicationRepository;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

/**
 * @property PageRepository $repository
 */
class PageController extends BaseController
{

    public function __construct(PageRepository $repository)
    {
        $this->repository = $repository;
    }

    public function view(Page $page)
    {
//        $page = $this->repository->forSlug($slug);

        return view('site.pages.view',compact('page'));
    }

    public function contact()
    {
        $page = Contact::first();

        return view('site.pages.contact',compact('page'));
    }

    public function publications()
    {
//        $page = app(PublicationRepository::class)->published()->all();

        return view('site.pages.index')->with(['route' => route('api.publication.index')]);
    }


    public function sendContact(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'subject' => 'required',
           'message' => 'required'
        ]);

    }
}
