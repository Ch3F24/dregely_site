<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Page;
use App\Notifications\ContactNotification;
use App\Repositories\PageRepository;
use App\Repositories\PublicationRepository;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Notification;

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
        return view('site.pages.view',compact('page'));
    }

    public function contact()
    {
        return view('site.pages.contact')->with(['page' => Contact::first()]);
    }

    public function publications()
    {
        return view('site.pages.slider')
            ->with([
                'route' => route('api.publication.index'),
                'title' => __('Publications'),
                'slides' => 3,
                'dots' => true,
                'thumb' => 0,
                'isImage' => 0,
                'isExhibition' => 0,
                'isVideo' => 0
            ]);
    }

    public function lexicon()
    {
        return view('site.pages.slider')->with([
            'title' => __('Lexicon'),
            'route' => route('api.lexicon.index'),
            'slides' => 3,
            'dots' => true,
            'thumb' => 0,
            'isImage' => 0,
            'isExhibition' => 0,
            'isVideo' => 0
        ]);

//        return view('site.pages.slider')->with(['route' => route('api.lexicon.index')]);
    }

    public function sendContact(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'subject' => 'required',
           'message' => 'required'
        ]);

        $input = $request->input();

        Notification::route('mail','test@test.hu')
            ->notify(new ContactNotification($input));

        return back()->with('status',__('Message sent'));

    }
}
