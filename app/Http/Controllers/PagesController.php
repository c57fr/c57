<?php
namespace App\Http\Controllers;

use App\Article;
use App\C7;
use App\User;
use Debugbar;
use App\Mail\Welcome;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller {

  public function Contact() {

    C7::TestUsageValidator();
    return view('pages.contact');
  }


  public function About() {

    $friends   = [
      'Pierre',
      'Paul',
      'Jacques'
    ];
    //    $friends =null;
    return view('pages.about', compact('friends'));
  }


  public function Test() {

    $v=123;
    //    $v = $v[0];
//    return $v;
    return view('pages.test', compact('v'));
  }


  /**
   * TestLocalEmail
   *
   * @return string
   */
  public function TestEnvoiEmailDepuisLocal() {

    //    debug('Méthode de PagesController');
    //    Debugbar::AddMessage('Méthode de PagesController');

    return C7::TestEnvoiEmail();
  }
}