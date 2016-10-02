<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
  # every page will be an action, and every action is a function
  public function getIndex() {
    # process variable data or params
    # talk to the model
    # receive data from the model
    # process data from the model if needed
    # pass data to the correct view
    return view('pages.home');
  }

  public function getAbout() {
    return view('pages.about');
  }

  public function getContact() {
      return view('pages.contact');
  }

}
