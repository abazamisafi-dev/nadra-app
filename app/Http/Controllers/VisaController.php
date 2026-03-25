<?php

namespace App\Http\Controllers;
use App\Models\VisaInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VisaController extends Controller
{
    public function index()
    {
        
        return view('admin.addVisa');
    }

    public function store(Request $request)
    {
        
       

       $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'applyDate' => 'required',
        'refrence_no' => 'required|max:11',
        'DOB' => 'required',
        'passport_no' => 'required|max:9',
        'visaCategory' => 'required|max:255',
        'visaSubCategory' => 'required|max:255',
        'applicationType' => 'required|max:255',
        'visaGrantDate' => 'required',
        'travelDocumentCountry' => 'required',
        'stayFicility' => 'required|max:255',
        'visaStartDate' => 'required',
        'visaEndDate' => 'required',
        'visaDuration' => 'required|max:255',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'biography' => 'required|max:255',
       

        
    ]);

            // Process the image upload
            $photoPath = $request->file('photo');
            $name_gen = hexdec(uniqid());
            $image_text = strtolower($photoPath->extension());
            $image_name = $name_gen . '.' . $image_text;
            $upload_location = 'images/';
            $last_image = $upload_location . $image_name;
            $photoPath->move($upload_location, $image_name);

            // $photoPath = $request->file('photo')->store('images', 'public');
            $randomString = Str::random(100);
           
            // Create a new FormData instance
            $visaData = new VisaInfo();
            $visaData->gen_id = $randomString;
            $visaData->name = $validatedData['name'];
            $visaData->applyDate = $validatedData['applyDate'];
            $visaData->refrence_no = $validatedData['refrence_no'];
            $visaData->DOB = $validatedData['DOB'];
            $visaData->passport_no = $validatedData['passport_no'];
            $visaData->visaCategory = $validatedData['visaCategory'];
            $visaData->visaSubCategory = $validatedData['visaSubCategory'];
            $visaData->applicationType = $validatedData['applicationType'];
            $visaData->visaGrantDate = $validatedData['visaGrantDate'];
            $visaData->travelDocumentCountry = $validatedData['travelDocumentCountry'];
            $visaData->stayFicility = $validatedData['stayFicility'];
            $visaData->visaStartDate = $validatedData['visaStartDate'];
            $visaData->visaEndDate = $validatedData['visaEndDate'];
            $visaData->visaDuration = $validatedData['visaDuration'];
            $visaData->photo_path = $last_image;
            $visaData->biography = $validatedData['biography'];
            $visaData->save();
 

  
    return redirect()->route('home')->with('success', 'Form submitted successfully.');
    }

    public function show($id)
    {
        $info = VisaInfo::where( 'gen_id', $id)->first();
       

        return view('frontend.visaConfirmation', compact("info"));
    }
    public function delete($id)
    {
        $visa = VisaInfo::find($id);
        $delete =  VisaInfo::find($id)->delete();
        if ($delete) {
            $path = $visa->photo_path;
            if (file_exists(public_path($path))) {
                unlink($path);
            }
        }

        return redirect()->back()->with('success', 'Post is permanently Deleted');

    }

}
