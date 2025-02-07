@extends('layout.admin')

@section('title', 'Terms of conditions Edit Page')
@section('title_page', 'Terms of conditions Edit Page')
@section('desc_page', 'Edit Content Terms of conditions Page')
@section('styles')
    <link rel="stylesheet" href="{{ asset('admin/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">

    <link rel="stylesheet" href="{{ asset("admin/vendors/summernote/summernote-lite.min.css") }}">
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title"></h4>
        <button type="submit" style="float: right" class="btn btn-primary btn-add-kategori">Add Terms</button>
    </div>
    <div class="card-body">
        @include('components.table-pagination', ['table' => 'terms' , 'url' => '/api/v1/admin/terms' , 'headers' => [
           "List Heading",
           "List Description",
           "Action"
        ] , 'pagination' => true])
    </div>
</div>

<div class="modal fade text-left" id="modal-add-kategori" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel4" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel4">Add Data Terms</h4>
                <button type="button" class="close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-add-kategori">
                    {{-- <input type="hidden" name="user_id"> --}}
                    <table class="table table-striped table-komponent after-loading">
                        <tbody>
                            <!-- <tr>
                                <th>Key</th>
                                <td>
                                    <input type="text" name="repeater[0][key]" placeholder="privacy" class="form-control">
                                </td>
                            </tr> -->
                            <!-- <tr>
                                <th scope="row">Heading</th>
                                <td> 
                                <input type="text" name="repeater[0][heading]" placeholder="Heading Eg: Privacy" class="form-control" required> 
                                </td>
                            </tr> -->
                            <tr>
                                <th scope="row">List Title Heading</th>
                                <td> 
                                <input type="text" name="repeater[0][list_heading]" placeholder="List Title Heading" class="form-control" required> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">List Description</th>
                                <td> 
                                <textarea name="repeater[0][list_description]" placeholder="List Description" class="form-control sumernote-perpustakaan" required> </textarea>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary"
                    data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <button type="submit" form="form-add-kategori" class="btn btn-primary ml-1">
                    <span class="d-none d-sm-block">Accept</span>
                </button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade text-left" id="detailKategori" tabindex="-1" role="dialog"
    aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable"
        role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title white" id="">
                    Detail Kategori
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center loading">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden"></span>
                    </div>
                </div>

                <table class="table table-striped after-loading">
                    <tbody>
                        <tr>
                            <th>Nama Kategori</th>
                            <td data-bind-nama_kategori></td>
                        </tr>
                        <tr>
                            <th>Icon</th>
                            <td data-bind-icon></td>
                        </tr>
                        <tr>
                            <th>Dekskripsi</th>
                            <td data-bind-dekskripsi></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary"
                    data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade text-left" id="editKategori" tabindex="-1" role="dialog"
    aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable"
        role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title white" id="">
                    Edit Terms
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-edit-kategori">
                    <div class="text-center loading">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden"></span>
                        </div>
                    </div>

                    <table class="table table-striped after-loading">
                        <tbody>
                            <!-- <tr>
                                <th>Key</th>
                                <td >
                                    <input type="hidden" name="repeater[0][id]"  class="form-control" data-bind-id value=""> 
                                     <input type="text" name="repeater[0][key]" value="" class="form-control" data-bind-key value="">
                                </td>
                            </tr> -->
                            <!-- <tr>
                                <th>Heading</th>
                                <td >
                                    <input type="text" name="repeater[0][heading]" value="" class="form-control" data-bind-heading value="">
                                </td>
                            </tr> -->
                            <tr>
                                <th>List Title Heading</th>
                                <td >
                                    <input type="hidden" name="repeater[0][id]"  class="form-control" data-bind-id value="">
                                    <input type="text" name="repeater[0][list_heading]" value="" class="form-control" data-bind-list_heading value="">
                                </td>
                            </tr>
                            <tr>
                                <th>List Description</th>
                                <td >
                                    <textarea name="repeater[0][list_description]" value="" class="form-control sumernote-perpustakaan-edit" data-bind-list_description value=""></textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary"
                    data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <button type="submit" form="form-edit-kategori" class="btn btn-primary ml-1">
                    <span class="d-none d-sm-block">Accept</span>
                </button>
            </div>
        </div>
    </div>
</div>




@endsection
@section('scripts')
<script src="{{ asset('admin/vendors/summernote/summernote-lite.min.js') }}"></script>
<script>
    $(document).ready(function() {
        GetData(req,"terms", formatterms);
    });

    function formatterms(data) {
        let verificator = session("data-role-verificator");

        var result = "";
        $.each(data, function(index, data) {
            
            result += `
                <tr>
                    <td>${data.list_heading}</td>
                    <td>${data.list_description}</td>
                    <td colspan="2">
                        <a href="#" class="btn btn-warning btn-icon btn-sm btn-edit" title="Detail" data-id="${data.id}"><span class="bi bi-pencil"> </span></a>
                        <a href="#" class="btn btn-danger btn-icon btn-sm btn-delete" title="Delete" data-id="${data.id}"><span class="bi bi-eraser"> </span></a>

                    </td>
                </tr>
            `
        });
        return result;
    }

    function settingSummerNote(selector) {
        $(selector).summernote({
            height: 200,
            disableDragAndDrop: false,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear', 'fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph', 'lineHeight']],
                ['insert', ['link', 'picture', 'video']],
                ['misc', ['codeview']],
            ],
            
        });
    }

    $(document).on('click', '.btn-delete', function() {
                const id = $(this).data('id');
                
                const url = `${baseUrl}/api/v1/admin/deleteTerms`;
                ajaxData(url, 'POST', {
                    "id": id,
                }, function(resp) {
                    toast(resp.message);

                    // console.log("test");
                                        
                    // $('#downloadModal').modal('hide');
                    GetData(req,"terms", formatterms);
                    setTimeout(function() {
                            window.location.reload();
                    }, 3000);
                }, function(xhr) {
                    toast(xhr.responseJSON.message);
                });
            });

    $(document).on('click', '.btn-add-kategori', function() {
        $('#modal-add-kategori').modal('show');
        $('#modal-add-kategori').find('form')[0].reset();
        settingSummerNote($(".sumernote-perpustakaan"))
    });

    $("#form-add-kategori").on('submit', function(e) {
        e.preventDefault();
        const url = `${baseUrl}/api/v1/admin/addOrUpdateTerms`;
        const data = new FormData(this);
        loadingButton($(this))
        ajaxDataFile(url, 'POST', data, function(resp) {
            toast("Data has been saved");
            $('#modal-add-kategori').modal('hide');
            window.location.reload();
            loadingButton($("#form-add-kategori"), false)
        }, function(data) {
            loadingButton($("#form-add-kategori"), false)
        });
    });

    $(document).on('click', '.btn-edit', function() {
        $('#editKategori').modal('show');
        loading($("#editKategori") , true);
        ajaxData(`${baseUrl}/api/v1/admin/terms`, 'GET', {
            "id" : $(this).data('id')
        }, function(resp) {
            loading($("#editKategori") , false);
            if (empty(resp.data)) {
                toast("Data not found", 'warning');
                $('#editKategori').modal('hide');
            }

            let result = resp.data[0];
            $.each(result, function(index, data) {
                if (index == "image") return;
                $('#editKategori').find(`[data-bind-${index}]`).val(data).attr('value', data);
            });
        
            settingSummerNote($(".sumernote-perpustakaan-edit"))
        },
        function() {
            loading($("#editKategori"));
            setTimeout(function() {
                $('#editKategori').modal('hide');
            }, 1000);
        });
    });

    $("#form-edit-kategori").on('submit', function(e) {
        e.preventDefault();
        const url = `${baseUrl}/api/v1/admin/addOrUpdateTerms`;
        const data = new FormData(this);
        loadingButton($(this))
        ajaxDataFile(url, 'POST', data, function(resp) {
            toast("Data has been saved");
            $('#editKategori').modal('hide');
            window.location.reload();
            loadingButton($("#form-edit-kategori"), false)
        }, function(data) {
            loadingButton($("#form-edit-kategori"), false)
        });
    });

</script>
@endsection