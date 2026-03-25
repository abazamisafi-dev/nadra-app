<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaInfo extends Model
{
    protected $table = 'visa_infos';

    protected $fillable = ['name',
    'applyDate',
    'refrence_no',
    'DOB',
    'passport_no' ,
    'visaCategory',
    'visaSubCategory',
    'applicationType',
    'visaGrantDate' ,
    'travelDocumentCountry',
    'stayFicility',
    'visaStartDate',
    'visaEndDate',
    'visaDuration',
 
    'photo',
    'biography'];
}
