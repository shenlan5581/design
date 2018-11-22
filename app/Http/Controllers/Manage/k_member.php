<?php

namespace App\Http\Controllers\kmember;

use App\User;
use App\Http\Controllers\Controller;

class  k_member extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function show()
    {
      echo 'k-test_member';
    }
}