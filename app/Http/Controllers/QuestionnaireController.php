<?php

namespace App\Http\Controllers;

use App\Questionnaire;
use Illuminate\Http\Request;

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

    /**
     * Show the form for creating a new resource.
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
    public function store(Request $request)
    {

        $endoded_designs = json_encode($request->design_ref);
        $encoded_target_audience = json_encode($request->audience);
        $encoded_feature = json_encode($request->feature);

        Questionnaire::create([

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
            'feature' => $encoded_feature

        ]);

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Questionaire  $questionaire
     * @return \Illuminate\Http\Response
     */
    public function show(Questionaire $questionaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Questionaire  $questionaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Questionaire $questionaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Questionaire  $questionaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Questionaire $questionaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Questionaire  $questionaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questionaire $questionaire)
    {
        //
    }
}
