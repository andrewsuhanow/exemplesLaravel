<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class MainController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function Main(){
//        dd('dddgdghd');
        return view('main_page');
    }

    public function MyPic(){

        return view('all_examples.pic1');
//        return view('welcome');
    }

    public function ThreePicInCenterBtstrp(){

        return view('all_examples.threePicInCenterBtstrp');
//        return view('welcome');
    }



    /**************************************************************************************/
    /**
     * Страница преимуществ
     *
     * @param int $id Идентификатор подробного описания преимущества
     *
     * @return View
    **/
    public function advantages(int $id = null)
    {
        /*

            if ($id) {
        //            dd($id);
        //            dd($aCompanyAdvantageDescription[0]->description);

                $aCompanyAdvantageDescription = CompanyAdvantageDescription::find($id);


                return view('all_examples.advantages_detail', [
                    'aCompanyAdvantageDescription' => $aCompanyAdvantageDescription,
                ]);
            } else {

                $aCompanyAdvantageDescription = CompanyAdvantageDescription::get();

                return view('all_examples.advantages', [
                    'aCompanyAdvantageDescription' => $aCompanyAdvantageDescription
                ]);
            }
         */
    }





}




