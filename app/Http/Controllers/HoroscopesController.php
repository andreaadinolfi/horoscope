<?php

namespace App\Http\Controllers;

use App\Models\Horoscope;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HoroscopesController extends Controller
{
    public function index()
    {
        $horoscopes = Horoscope::orderBy('birth_date', 'desc')->paginate();

        return view('horoscopes.index', compact('horoscopes'));
    }

    public function search(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'birth_date' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        }

        $birth_date = $request->get('birth_date');
        $sign = $this->getZodiacSign($birth_date);

        if ($sign) {
            $horoscopes = Horoscope::query()->where('sign', 'like', $sign)
                ->orderBy('birth_date', 'desc')
                ->paginate();
        } else {
            $horoscopes = Horoscope::query()->orderBy('birth_date', 'desc')->paginate();
        }

        return view('horoscopes.index', compact('horoscopes','birth_date'));
    }



    function getZodiacSign($birthDate) {
        $date = Carbon::parse($birthDate);

        $zodiacSigns = DB::table('signs')->get()->toArray();
        $zodiacSigns = json_decode(json_encode($zodiacSigns,true),true);
        foreach ($zodiacSigns as $sign) {

            $start = Carbon::parse("1998-".$sign['start_date']);
            $end = Carbon::parse("1998-".$sign['end_date']);

            if ($date >= $start && $date <= $end) {
                return $sign['sign'];
            }
        }

        return null; // Return null if birth date doesn't match any zodiac sign
    }





}
