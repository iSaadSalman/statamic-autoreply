<?php

namespace ISaadSalman\StatamicAutoreply\Http\Controllers;

use Statamic\Http\Controllers\CP\CpController;

use Statamic\Entries\Collection;
use Statamic\Events\FormSubmitted;
use Statamic\Forms\Form;


class DashboardController extends CpController
{
    public function index()
    {
        // $data =  \Statamic\Facades\YAML::parse();
        // dd( $data );
      
        // return view('statamic-autoreply::dashboard', [
        //     'title' => 'Autoreply'
        // ]);
    }
}
