@extends('layout.admin')

@section('title', 'Brands Sixth Section')
@section('title_page', 'Brands Sixth Section')
@section('desc_page', 'Edit Content Brands Sixth Section')
@section('styles')
    <link rel="stylesheet" href="{{ asset('admin/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">

    <link rel="stylesheet" href="{{ asset("admin/vendors/summernote/summernote-lite.min.css") }}">
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Sixth Section Heading Description</h4>
        <button type="submit" style="float: right" class="btn btn-primary btn-add-kategori">Add Brands Sixth Heading Description</button>
    </div>
    <div class="card-body">
        @include('components.table-pagination', ['table' => 'brands_sixth_section_heading_descriptions' , 'url' => '/api/v1/admin/brandsSixthSectionHeadingDescription' , 'headers' => [
            "Heading",
            "Description",
            "Action"
        ] , 'pagination' => true])
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Sixth Section FAQ</h4>
        <button type="submit" style="float: right" class="btn btn-primary btn-add-kategori-2">Add Brands Sixth FAQ</button>
    </div>
    <div class="card-body">
        @include('components.table-pagination', ['table' => 'brands_sixth_section_f_a_q_s' , 'url' => '/api/v1/admin/brandsSixthSectionFAQ' , 'headers' => [
            "Question",
            "Answer",
            "Action"
        ] , 'pagination' => true])
    </div>
</div>

<div class="modal fade text-left" id="modal-add-kategori" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel4" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel4">Add Brands-
                    Sixt-Section-Heading-Description
                </h4>
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
                                <th>Heading</th>
                                <td>
                                    <textarea type="text" name="repeater[0][heading]" class="form-control sumernote-perpustakaan" rows="3">  </textarea>
                                    <!-- <input type="text" name="repeater[0][heading]" class="form-control"> -->
                                </td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>
                                    <textarea type="text" name="repeater[0][description]" class="form-control sumernote-perpustakaan" rows="3">  </textarea>
                                    <!-- <textarea rows="3" type="text" name="repeater[0][description]" class="form-control"></textarea> -->
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

<div class="modal fade text-left" id="modal-add-kategori-2" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel4" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel4">Add Brands-
                    Sixth-Section-FAQ
                </h4>
                <button type="button" class="close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-add-kategori-2">
                    {{-- <input type="hidden" name="user_id"> --}}
                    <table class="table table-striped table-komponent after-loading">
                        <tbody>
                            <tr>
                                <th>Question</th>
                                <td>
                                    <textarea type="text" name="repeater[0][question]" class="form-control sumernote-perpustakaan" rows="3">  </textarea>
                                    
                                    <!-- <input type="text" name="repeater[0][question]" class="form-control"> -->
                                </td>
                            </tr>
                            <tr>
                                <th>Answer</th>
                                <td>
                                    <textarea type="text" name="repeater[0][answer]" class="form-control sumernote-perpustakaan" rows="3">  </textarea>

                                    <!-- <input type="text"  name="repeater[0][answer]" class="form-control"> -->
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
                <button type="submit" form="form-add-kategori-2" class="btn btn-primary ml-1">
                    <span class="d-none d-sm-block">Accept</span>
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
                    Edit Brands-Sixth-Section-Heading-Description
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
                                    <textarea type="text" name="repeater[0][heading]" class="form-control sumernote-perpustakaan-edit" data-bind-heading value="" rows="3">  </textarea>
                                    <!-- <input type="text" name="repeater[0][heading]" value="" class="form-control" data-bind-heading value=""> -->
                                </td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td >
                                    <textarea type="text" name="repeater[0][description]" class="form-control sumernote-perpustakaan-edit" data-bind-description value="" rows="3">  </textarea>
                                    
                                    <!-- <textarea rows="3" type="text" name="repeater[0][description]" value="" class="form-control" data-bind-description value=""></textarea> -->
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

<div class="modal fade text-left" id="editKategori-2" tabindex="-1" role="dialog"
    aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable"
        role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title white" id="">
                    Edit Brands-Sixth-Section-FAQ
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-edit-kategori-2">
                    <div class="text-center loading">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden"></span>
                        </div>
                    </div>

                    <table class="table table-striped after-loading">
                        <tbody>
                            <tr>
                                <th>Question</th>
                                <td >
                                    <input type="hidden" name="repeater[0][id]"  class="form-control" data-bind-id value="">
                                    <textarea type="text" name="repeater[0][question]" class="form-control sumernote-perpustakaan-edit" data-bind-question value="" rows="3">  </textarea>

                                    <!-- <input type="text" name="repeater[0][question]" value="" class="form-control" data-bind-question value=""> -->
                                </td>
                            </tr>
                            <tr>
                                <th>Answer</th>
                                <td >
                                <textarea type="text" name="repeater[0][answer]" class="form-control sumernote-perpustakaan-edit" data-bind-answer value="" rows="3">  </textarea>
                                   
                                    <!-- <input type="text" name="repeater[0][answer]" value="" class="form-control" data-bind-answer value=""> -->
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
                <button type="submit" form="form-edit-kategori-2" class="btn btn-primary ml-1">
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
        
        GetData(req,"brands_sixth_section_heading_descriptions", formatbrandSixthheadingdescription);
        GetData(req,"brands_sixth_section_f_a_q_s", formatbrands_sixth_section_f_a_q_s);
    });

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

    function formatbrands_sixth_section_f_a_q_s(data) {
        var result = "";
        $.each(data, function(index, data) {
            
            result += `
                <tr>
                    <td>${data.question}</td>
                    <td>${data.answer}</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-icon btn-sm btn-edit-2" title="Detail" data-id="${data.id}"><span class="bi bi-pencil"> </span></a>
                    </td>
                </tr>
            `
        });
        return result;
    }

    function formatbrandSixthheadingdescription(data) {
        var result = "";
        $.each(data, function(index, data) {
            
            result += `
                <tr>
                    <td>${data.heading}</td>
                    <td>${data.description}</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-icon btn-sm btn-edit" title="Detail" data-id="${data.id}"><span class="bi bi-pencil"> </span></a>
                    </td>
                </tr>
            `
        });
        return result;
    }

    $(document).on('click', '.openPopup', function() {
        window.open($(this).attr('link'), 'popup', 'width=800,height=600');
    })


    $(document).on('click', '.btn-add-kategori', function() {
        $('#modal-add-kategori').modal('show');
        $('#modal-add-kategori').find('form')[0].reset();
        settingSummerNote($(".sumernote-perpustakaan"))

    });

    $(document).on('click', '.btn-add-kategori-2', function() {
        $('#modal-add-kategori-2').modal('show');
        $('#modal-add-kategori-2').find('form')[0].reset();
        settingSummerNote($(".sumernote-perpustakaan"))

    });

    $("#form-add-kategori").on('submit', function(e) {
        e.preventDefault();
        const url = `${baseUrl}/api/v1/admin/addOrUpdateSixthSectionHeadingDescription`;
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

    $("#form-add-kategori-2").on('submit', function(e) {
        e.preventDefault();
        const url = `${baseUrl}/api/v1/admin/addOrUpdateSixthSectionFAQ`;
        const data = new FormData(this);
        loadingButton($(this))
        ajaxDataFile(url, 'POST', data, function(resp) {
            toast("Data has been saved");
            $('#modal-add-kategori-2').modal('hide');
            window.location.reload();
            loadingButton($("#form-add-kategori"), false)
        }, function(data) {
            loadingButton($("#form-add-kategori"), false)
        });
    });

    
    $(document).on('click', '.btn-detail', function() {
        $('#detailKategori').modal('show');
        loading($("#detailKategori") , true);
        ajaxData(`${baseUrl}/api/v1/admin/getBrandsFourthHeadingButton`, 'GET', {
            "id" : $(this).data('id')
        }, function(resp) {
            loading($("#detailKategori") , false);
            if (empty(resp.data)) {
                toast("Data not found", 'warning');
                $('#detailKategori').modal('hide');
            }

            let result = resp.data[0];
            $.each(result, function(index, data) {
                if (index == "image") return;
                $('#detailKategori').find(`[data-bind-${index}]`).html(data);
            });

            if (!empty(result.icon)) {
                result.icon.forEach(function(image) {
                    $('#detailKategori').find('[data-bind-icon]').html(`<a href="${image.url}" target="_blank">View Image</a>`);
                });
            } else {
                $('#detailKategori').find('[data-bind-icon]').html(`-`);
            }

        },
        function() {
            loading($("#detailKategori"));
            setTimeout(function() {
                $('#detailKategori').modal('hide');
            }, 1000);
        });
    });

    $(document).on('click', '.btn-edit', function() {
        $('#editKategori').modal('show');
        loading($("#editKategori") , true);
        ajaxData(`${baseUrl}/api/v1/admin/brandsSixthSectionHeadingDescription`, 'GET', {
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

    $(document).on('click', '.btn-edit-2', function() {
        
        $('#editKategori-2').modal('show');
        loading($("#editKategori-2") , true);
        ajaxData(`${baseUrl}/api/v1/admin/brandsSixthSectionFAQ`, 'GET', {
            "id" : $(this).data('id')
        }, function(resp) {
            console.log("testing", resp);
            
            loading($("#editKategori-2") , false);
            if (empty(resp.data)) {
                toast("Data not found", 'warning');
                $('#editKategori-2').modal('hide');
            }

            let result = resp.data[0];
            $.each(result, function(index, data) {
                if (index == "image") return;
                $('#editKategori-2').find(`[data-bind-${index}]`).val(data).attr('value', data);
            });

        settingSummerNote($(".sumernote-perpustakaan-edit"))


        },
        function() {
            loading($("#editKategori-2"));
            setTimeout(function() {
                $('#editKategori-2').modal('hide');
            }, 1000);
        });
    });

    $("#form-edit-kategori").on('submit', function(e) {
        e.preventDefault();
        const url = `${baseUrl}/api/v1/admin/addOrUpdateSixthSectionHeadingDescription`;
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

    $("#form-edit-kategori-2").on('submit', function(e) {
        e.preventDefault();
        const url = `${baseUrl}/api/v1/admin/addOrUpdateSixthSectionFAQ`;
        const data = new FormData(this);
        loadingButton($(this))
        ajaxDataFile(url, 'POST', data, function(resp) {
            toast("Data has been saved");
            $('#editKategori-2').modal('hide');
            window.location.reload();
            loadingButton($("#form-edit-kategori-2"), false)
        }, function(data) {
            loadingButton($("#form-edit-kategori-2"), false)
        });
    });
</script>
@endsection