<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Training;
use App\Models\Applicant;

class ApplicantController extends Controller
{
    public function getApplicants($training)
    {
        $training = Training::find($training);
        if(!$training) {
            return response()->json([
                'message' => 'Data not found'
            ], 404);
        }

        return response()->json([
            'data' => [
                'training' => $training->load('applications.payment')
            ]
        ]);
    }

    public function getApplicantDetails(Applicant $applicant)
    {
        return response()->json([
            'data' => [
                'applicant' => $applicant->load('payment')
            ]
        ]);
    }

}
