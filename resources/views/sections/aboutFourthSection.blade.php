@extends('layout.admin')

@section('title', 'About Fourth Edit Page')
@section('title_page', 'About Fourth Edit Page')
@section('desc_page', 'Edit Content About Fourth Page')
@section('styles')
    <link rel="stylesheet" href="{{ asset('admin/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">

    <link rel="stylesheet" href="{{ asset("admin/vendors/summernote/summernote-lite.min.css") }}">
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title"></h4>
        <button type="submit" style="float: right" class="btn btn-primary btn-add-kategori">Add About Fourth Section</button>
    </div>
    <div class="card-body">
        @include('components.table-pagination', ['table' => 'about_fourth_sections' , 'url' => '/api/v1/admin/aboutFourthSection' , 'headers' => [
           "Heading",
           "Description",
           "Email Text",
           "Action"
        ] , 'pagination' => true])
    </div>
</div>

<div class="modal fade text-left" id="modal-add-kategori" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel4" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel4">Add Data About Fourth Section</h4>
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
                            <tr>
                                <th scope="row">Heading</th>
                                <td> 
                                <textarea type="text" name="repeater[0][heading]" class="form-control sumernote-perpustakaan" rows="3">  </textarea>

                                <!-- <input type="text" name="repeater[0][heading]" class="form-control" required>  -->
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Description</th>
                                <td> 
                                <textarea type="text" name="repeater[0][description]" class="form-control sumernote-perpustakaan" rows="3">  </textarea>

                                <!-- <textarea name="repeater[0][description]" class="form-control" required> </textarea> -->
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Email Text</th>
                                <td> 
                                <input type="text" name="repeater[0][email_text]" class="form-control" required>
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
                    Edit About Fourth Section
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
                            <tr>
                                <th>Heading</th>
                                <td >
                                    <input type="hidden" name="repeater[0][id]"  class="form-control" data-bind-id value="">
                                    <textarea type="text" name="repeater[0][heading]" value="" class="form-control sumernote-perpustakaan-edit" rows="3" data-bind-heading value=""></textarea>

                                    <!-- <input type="text" name="repeater[0][heading]" value="" class="form-control" data-bind-heading value=""> -->
                                </td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td >
                                    <textarea type="text" name="repeater[0][description]" value="" class="form-control sumernote-perpustakaan-edit" rows="3" data-bind-description value=""></textarea>

                                    <!-- <textarea name="repeater[0][description]" value="" class="form-control" data-bind-description value=""></textarea> -->
                                </td>
                            </tr>
                            <tr>
                                <th>Email Text</th>
                                <td >
                                    <input type="text" name="repeater[0][email_text]" value="" class="form-control" data-bind-email_text value="">
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
        GetData(req,"about_fourth_sections", formataboutfourtsection);
    });

    function formataboutfourtsection(data) {
        let verificator = session("data-role-verificator");

        var result = "";
        $.each(data, function(index, data) {
            // console.log(data.status);
            result += `
                <tr>
                    <td>${data.heading}</td>
                    <td>${data.description}</td>
                    <td>${data.email_text}</td>
                    <td colspan="2">
                        <a href="#" class="btn btn-warning btn-icon btn-sm btn-edit" title="Detail" data-id="${data.id}"><span class="bi bi-pencil"> </span></a>
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

    $(document).on('click', '.btn-add-kategori', function() {
        $('#modal-add-kategori').modal('show');
        $('#modal-add-kategori').find('form')[0].reset();
        settingSummerNote($(".sumernote-perpustakaan"))

    });

    $("#form-add-kategori").on('submit', function(e) {
        e.preventDefault();
        const url = `${baseUrl}/api/v1/admin/addOrUpdateAboutFourthSection`;
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
        ajaxData(`${baseUrl}/api/v1/admin/aboutFourthSection`, 'GET', {
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
        const url = `${baseUrl}/api/v1/admin/addOrUpdateAboutFourthSection`;
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