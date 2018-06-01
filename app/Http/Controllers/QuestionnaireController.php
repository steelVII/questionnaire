<?php

namespace App\Http\Controllers;

use App\Questionnaire;
use App\Mail\QuestionnaireSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuestionnaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('questionnaire');
    }

    public function single(Questionnaire $questionnaire, $id) {

        $single = $questionnaire->find($id);

        return view('single.display', compact('single'));

    }

    /**
     * Show the form for creating a new resource
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Questionnaire $questionnaire,Request $request)
    {
        //dd($request->managing);
        $endoded_designs = json_encode($request->design_ref);
        $encoded_target_audience = json_encode($request->audience);
        $encoded_feature = json_encode($request->feature);

        //dd($encoded_feature);

        $test = Questionnaire::create([

            'name' => $request->basic_name,
            'organization' => $request->basic_organization,
            'email' => $request->basic_email,
            'phone_number' => $request->basic_phone_num,
            'url' => $request->basic_url,
            'company_description' => $request->basic_description,
            'redesign_logo' => $request->redesign_logo,
            'design_theme' => $request->design_theme,
            'design_colors' => $request->design_colors,
            'design_lookandfeel' => $request->design_lookandfeel,
            'design_ref' => $endoded_designs,
            'target_audience_info' => $encoded_target_audience,
            'feature' => $encoded_feature,
            'web_app' => $request->web_app,
            'in_charge' => $request->managing

        ]);

        if($request->managing == "Nic") {

            $email= 'nictee@naxpansion.com';

        }

        else if($request->managing == "Leo") {

            $email= 'leo@naxpansion.com';

        }

        else if($request->managing == "Elmo") {

            $email= 'elmo@naxpansion.com';

        }

        else {

            $email = 'support@naxpansion.com';

        }

        $single = $questionnaire->find($test->id);

        Mail::to($email)->send(new QuestionnaireSubmitted($single));

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Questionnaire  $questionnaire
     * @return \Illuminate\Http\Response
     */
    public function show(Questionnaire $questionnaire)
    {
        
        $questionnaires = Questionnaire::orderBy('created_at','DESC')->paginate(10);

        return view('table.table', compact('questionnaires'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Questionnaire  $questionnaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Questionnaire $questionnaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Questionnaire  $questionnaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Questionnaire $questionnaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Questionnaire  $questionnaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questionnaire $questionnaire)
    {
        //
    }
}
