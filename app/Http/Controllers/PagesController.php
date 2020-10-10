<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messages;
use App\Models\User;
use App\Notifications\NewMessage;

class PagesController extends Controller
{
    /**
     * Displays the landing page sha
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('static.index');
    }

    /**
     * Displays the faqs page
     *
     * @return \Illuminate\Http\Response
     */
    public function faqs()
    {
        return view('static.faq');
    }

    /**
     * Displays the services page
     *
     * @return \Illuminate\Http\Response
     */
    public function services()
    {
        return view('static.service');
    }

    /**
     * Display the about page
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('static.about');
    }

    /**
     * Displays the contact page
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('static.contact');
    }

    /**
     * Saves the data from the contact page and returns a thank you page
     *
     * @return \Illuminate\Http\Response
     */
    public function submitContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $message = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        // David should get both a notification and a mail sha, from the guest
        $admin = User::first();
        $admin->notify(new NewMessage($message));

        return view('static.thanks');
    }
}
