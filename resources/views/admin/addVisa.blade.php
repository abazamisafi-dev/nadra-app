@extends('layouts.master')

@section('content')
<form class="row g-3" action="{{ route('visa-store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-md-4">
      <label  class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name">
      @error('name')
         <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="col-md-4">
      <label  class="form-label">Apply Date</label>
      <input type="date" class="form-control" id="applyDate" name="applyDate">
      @error('applyDate')
      <span class="text-danger">{{ $message }}</span>
   @enderror
    </div>
    <div class="col-md-4">
        <label  class="form-label">Visa Rerference Number</label>
        <input type="text" class="form-control" id="refrence_no" name="refrence_no">
        @error('refrence_no')
        <span class="text-danger">{{ $message }}</span>
     @enderror
      </div>
    <div class="col-4">
      <label  class="form-label">Date Of Birth</label>
      <input type="date" class="form-control" id="DOB" name="DOB">
      @error('DOB')
      <span class="text-danger">{{ $message }}</span>
   @enderror
    </div>
    <div class="col-4">
        <label  class="form-label">Passport Number</label>
        <input type="text" class="form-control" id="passport_no" name="passport_no">
        @error('passport_no')
        <span class="text-danger">{{ $message }}</span>
     @enderror
      </div>
      <div class="col-4">
        <label  class="form-label">Visa Catagory</label>
        <input type="text" class="form-control" id="visaCategory" name="visaCategory">
        @error('visaCategory')
        <span class="text-danger">{{ $message }}</span>
     @enderror
      </div>
    <div class="col-4">
      <label  class="form-label">Visa Sub Catagory</label>
      <input type="text" class="form-control" id="visaSubCategory" name="visaSubCategory">
      @error('visaSubCategory')
      <span class="text-danger">{{ $message }}</span>
   @enderror
    </div>
    <div class="col-4">
        <label  class="form-label">Application Type</label>
        <input type="text" class="form-control" id="applicationType" name="applicationType">
        @error('applicationType')
        <span class="text-danger">{{ $message }}</span>
     @enderror
      </div>
      <div class="col-4">
        <label  class="form-label">Visa Grant Date</label>
        <input type="date" class="form-control" id="visaGrantDate" name="visaGrantDate">
        @error('visaGrantDate')
        <span class="text-danger">{{ $message }}</span>
     @enderror
      </div>
      <div class="col-4">
        <label  class="form-label">Travel Document Country</label>
        <input type="text" class="form-control" id="travelDocumentCountry" name="travelDocumentCountry">
        @error('travelDocumentCountry')
        <span class="text-danger">{{ $message }}</span>
     @enderror
      </div>
      <div class="col-4">
        <label  class="form-label">Stay Ficility</label>
        <input type="text" class="form-control" id="stayFicility" name="stayFicility">
        @error('stayFicility')
        <span class="text-danger">{{ $message }}</span>
     @enderror
      </div>
      <div class="col-4">
        <label  class="form-label">Visa Start Date</label>
        <input type="date" class="form-control" id="visaStartDate" name="visaStartDate">
        @error('visaStartDate')
        <span class="text-danger">{{ $message }}</span>
     @enderror
      </div>
      <div class="col-4">
        <label  class="form-label">Visa End Date</label>
        <input type="date" class="form-control" id="visaEndDate" name="visaEndDate">
        @error('visaEndDate')
        <span class="text-danger">{{ $message }}</span>
     @enderror
      </div>
      <div class="col-4">
        <label  class="form-label">Visa Duration</label>
        <input type="text" class="form-control" id="visaDuration" name="visaDuration">
        @error('visaDuration')
        <span class="text-danger">{{ $message }}</span>
     @enderror
      </div>
      <div class="col-4">
        <label  class="form-label">photo</label>
        <input type="file" class="form-control" id="photo" name="photo">
        @error('photo')
        <span class="text-danger">{{ $message }}</span>
     @enderror
      </div>
      <div class="col-12">
        <label  class="form-label">Biography</label>
        <textarea type="text" class="form-control" id="biography" name="biography"></textarea>
        @error('biography')
        <span class="text-danger">{{ $message }}</span>
     @enderror
      </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary"> Submit</button>
    </div>
  </form>
@endsection