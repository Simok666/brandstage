@extends('layout.admin')

@section('title', 'Spaces Second Section')
@section('title_page', 'Spaces Second Section')
@section('desc_page', 'Edit Content Spaces Second Section')
@section('styles')
    <link rel="stylesheet" href="{{ asset('admin/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">

    <link rel="stylesheet" href="{{ asset("admin/vendors/summernote/summernote-lite.min.css") }}">
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Second Section Heading Description</h4>
        <button type="submit" style="float: right" class="btn btn-primary btn-add-kategori">Add Spaces Second Heading Description</button>
    </div>
    <div class="card-body">
        @include('components.table-pagination', ['table' => 'space_second_section_heading_descriptions' , 'url' => '/api/v1/admin/spacesSecondSectionHeadingDescription' , 'headers' => [
            "Heading",
            "Description",
            "Action"
        ] , 'pagination' => true])
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Second Section Icon Description</h4>
        <button type="submit" style="float: right" class="btn btn-primary btn-add-kategori-2">Add Brands Fourth Icon Description</button>
    </div>
    <div class="card-body">
        @include('components.table-pagination', ['table' => 'space_second_section_icon_descriptions' , 'url' => '/api/v1/admin/spacesSecondSectionIconDescription' , 'headers' => [
            "Heading",
            "Description",
            "Icon Image",
            "Action"
        ] , 'pagination' => true])
    </div>
</div>

<div class="modal fade text-left" id="modal-add-kategori" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel4" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel4">Add Spaces-
                    Second-Section-Heading-Description
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
                                    <textarea name="repeater[0][heading]" placeholder="" class="form-control sumernote-perpustakaan" required> </textarea>

                                    <!-- <input type="text" name="repeater[0][heading]" class="form-control"> -->
                                </td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>
                                    <textarea name="repeater[0][description]" placeholder="" class="form-control sumernote-perpustakaan" required> </textarea>

                                    <!-- <textarea rows="3"  name="repeater[0][description]" class="form-control"></textarea> -->
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
                <h4 class="modal-title" id="myModalLabel4">Add Spaces-
                    Second-Section-Icon-Description
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
                                <th>Heading</th>
                                <td>
                                    <textarea name="repeater[0][heading]" placeholder="" class="form-control sumernote-perpustakaan" required> </textarea>
                                    <!-- <input type="text" name="repeater[0][heading]" class="form-control"> -->
                                </td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>
                                    <textarea name="repeater[0][description]" placeholder="" class="form-control sumernote-perpustakaan" required> </textarea>
                                    <!-- <textarea type="text" rows="3" name="repeater[0][description]" class="form-control"></textarea> -->
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Icon Image</th>
                                <td> 
                                    <input type="file" name="repeater[0][icon_image][]" class="form-control" accept="image/*" required > 
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
                    Edit Spaces-Second-Section-Heading-Description
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
                                    <textarea name="repeater[0][heading]" value="" class="form-control sumernote-perpustakaan-edit" data-bind-heading value=""></textarea>
                                    <!-- <input type="text" name="repeater[0][heading]" value="" class="form-control" data-bind-heading value=""> -->
                                </td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>
                                    <textarea name="repeater[0][description]" value="" class="form-control sumernote-perpustakaan-edit" data-bind-description value=""></textarea>
                                    <!-- <textarea rows="3" name="repeater[0][description]" value="" class="form-control" data-bind-description value=""></textarea> -->
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
                    Edit Spaces-Second-Section-Icon-Description
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
                                <th>Heading</th>
                                <td >
                                    <input type="hidden" name="repeater[0][id]"  class="form-control" data-bind-id value="">
                                    <textarea name="repeater[0][heading]" value="" class="form-control sumernote-perpustakaan-edit" data-bind-heading value=""></textarea>

                                    <!-- <input type="text" name="repeater[0][heading]" value="" class="form-control" data-bind-heading value=""> -->
                                </td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td >
                                    <textarea name="repeater[0][description]" value="" class="form-control sumernote-perpustakaan-edit" data-bind-description value=""></textarea>
                                    <!-- <textarea rows="3" type="text" name="repeater[0][description]" value="" class="form-control" data-bind-description value=""></textarea> -->
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Icon Image</th>
                                <td> 
                                    <input type="file" name="repeater[0][icon_image][]" class="form-control" accept="image/*" required > 
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
        
        GetData(req,"space_second_section_heading_descriptions", formatspacessecondheadingbutton);
        GetData(req,"space_second_section_icon_descriptions", formatspacessecondicondescription);
    });
    function formatspacessecondicondescription(data) {
        var result = "";
        $.each(data, function(index, data) {
            
            result += `
                <tr>
                    <td>${data.heading}</td>
                    <td>${data.description} </td>
                    <td>${!empty(data.icon_image) ? `<a href="#" class="openPopup" link="${data.icon_image[0].url}">View File</a> `: "-"}</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-icon btn-sm btn-edit-2" title="Detail" data-id="${data.id}"><span class="bi bi-pencil"> </span></a>
                    </td>
                </tr>
            `
        });
        return result;
    }

    function formatspacessecondheadingbutton(data) {
        var result = "";
        $.each(data, function(index, data) {
            
            
            result += `
                <tr>
                    <td>${data.heading}</td>
                    <td>${data.description} </td>
                    <td>
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
        const url = `${baseUrl}/api/v1/admin/addOrUpdateSpaceSecondSectionHeadingDescription`;
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
        const url = `${baseUrl}/api/v1/admin/addOrUpdateSpacesSectionIconDescription`;
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
        ajaxData(`${baseUrl}/api/v1/admin/spacesSecondSectionHeadingDescription`, 'GET', {
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
        ajaxData(`${baseUrl}/api/v1/admin/spacesSecondSectionIconDescription`, 'GET', {
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
        const url = `${baseUrl}/api/v1/admin/addOrUpdateSpaceSecondSectionHeadingDescription`;
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
        const url = `${baseUrl}/api/v1/admin/addOrUpdateSpacesSectionIconDescription`;
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