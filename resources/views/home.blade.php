@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <!-- Modal for Barcode -->
  <!-- Modal for Barcode -->
<div class="modal fade" id="barcodeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Barcode</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <!-- Barcode Image Here -->
                <div id="barcode-container">
                    <!-- Barcode will be inserted here -->
                </div>
                <!-- Button to download barcode as PNG -->
                <a id="downloadBtn" href="#" class="btn btn-success mt-3" download="QRcode.png">Download as PNG</a>
            </div>
        </div>
    </div>
</div>

                <div class="tile">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>
                          <button type="button" class="close" data-dismiss="alert">
    <span>&times;</span>
</button>
                        </div>
                    @endif
                    <h3 class="tile-title">All Entered Visas</h3>
                    <div class="tile-body">
                        <table class="table data-table table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col">SL No</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Passport No</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($visas as $visa)
                                    <tr>
                                        <th scope="row">{{ $visas->firstItem() + $loop->index }}</th>
                                        <td>
                                            <img src="{{ asset($visa->photo_path) }}" alt="dfgh" height="70">
                                        </td>
                                        <td>{{$visa->name}}</td>
                                        <td>{{$visa->passport_no}}</td>
                                        @if ($visa->created_at == null)
                                            <span class="text-danger"> No Date Set</span>
                                        @else
                                            <td>{{ $visa->created_at->diffForHumans() }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ url('e-visa/verifyD/' . $visa->gen_id) }}" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{ url('visConfirmation-delete/' . $visa->id) }}" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            <a 
                                            href="javascript:void(0)"
                                            class="btn btn-sm btn-info barcode-btn mt-1"
                                            data-url="{{ url('e-visa/verifyD/'.$visa->gen_id) }}"
                                            title="Scan QR"
                                            >
                                            <i class="fas fa-qrcode"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('pageJs')
<script>
// $(document).on('click', '.barcode-btn', function () {

//     let value = $(this).data('barcode');
//     let url = "{{ url('generate-qr') }}/" + value;

//     $('#barcode-container').html(`
//         <object type="image/svg+xml" data="${url}" width="300" height="300"></object>
//     `);

//     $('#downloadBtn')
//         .attr('href', url)
//         .attr('download', 'qrcode.svg');

//     $('#barcodeModal').modal('show');
// });
$(document).on('click', '.barcode-btn', function () {

    let url = $(this).attr('data-url');

    console.log(url); // now this should show the real URL

    let qrLink = "https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=" + encodeURIComponent(url);

    $('#barcode-container').html(`
        <img src="${qrLink}" width="300">
    `);

    $('#downloadBtn')
        .attr('href', qrLink)
        .attr('download', 'qrcode.png');

    $('#barcodeModal').modal('show');
});
</script>
@endsection