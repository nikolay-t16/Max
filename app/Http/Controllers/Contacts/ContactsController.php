<?php


namespace App\Http\Controllers\Contacts;


use App\Http\Controllers\Controller;
use App\Model\Page;

class ContactsController extends Controller
{
    public function __invoke()
    {
        $page = Page::where(Page::FIELD_SLUG, Page::SLUG_CONTACTS_PAGE)->first();
        $data = ['page' => $page];
        return view('/page/contacts', $data);
    }
}
