<?php

namespace App\Http\Controllers\kmember\member23;

use App\User;
use App\Http\Controllers\Controller;

class  member2 extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
      echo 'k-test_member2'.$id;
    }
}