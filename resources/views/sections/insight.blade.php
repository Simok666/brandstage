@extends('layout.admin')

@section('title', 'Insight Page')
@section('title_page', 'Insight Page')
@section('desc_page', 'Edit Content Insight Page')
@section('styles')
    <link rel="stylesheet" href="{{ asset('admin/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">

    <link rel="stylesheet" href="{{ asset("admin/vendors/summernote/summernote-lite.min.css") }}">
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title"></h4>
        <button type="submit" style="float: right" id="add-pengetahuan" class="btn btn-primary btn-add-pengetahuan">Add Insight Page</button>
    </div>
    <div class="card-body">
        @include('components.table-pagination', ['table' => 'insight_sections' , 'url' => '/api/v1/admin/insight' , 'headers' => [
            "Title",
            "Blog Image",
            "Published By",
            "Action"
        ] , 'pagination' => true])
    </div>
</div>

<div class="modal fade text-left" id="detailPengetahuan" tabindex="-1" role="dialog"
    aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable"
        role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title white" id="">
                    Insight Detail
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
                            <th>Title</th>
                            <td data-bind-title></td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td data-bind-description>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control sumernote-perpustakaan" id="summer-note" name="repeater[0][description]" placeholder="description" required></textarea>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Published By</th>
                            <td data-bind-published_by></td>
                        </tr>
                        <tr>
                            <th>Blog Image</th>
                            <td data-bind-blog_image></td>
                        </tr>
                        <tr>
                            <th>Blog Slug</th>
                            <td data-bind-blog_slug></td>
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

<div class="modal fade text-left" id="modal-edit-pengetahuan" tabindex="-1" role="dialog"
    aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable"
        role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title white" id="">
                    Edit Insight Page
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
                <form class="after-loading" id="form-perpustakaan-edit">
                    <table class="table table-striped after-loading">
                        <tbody>
                            <tr>
                                <th>Title</th>
                                <td>
                                    <input type="hidden" name="repeater[0][id]"  class="form-control" data-bind-id value="">
                                    <input type="text" name="repeater[0][title]"  class="form-control" data-bind-title value="">
                                </td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td >
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control sumernote-perpustakaan-edit" id="summer-note" name="repeater[0][description]" placeholder="description" data-bind-description value="" required></textarea>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Blog Image</th>
                                <td> 
                                    <input type="file" name="repeater[0][blog_image][]"  class="form-control"  accept="image/*" required>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Blog Slug</th>
                                <td>
                                    <input type="text" name="repeater[0][blog_slug]" class="form-control" data-bind-blog_slug value="" required>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Published By</th>
                                <td>
                                    <input type="text" name="repeater[0][published_by]" class="form-control" data-bind-published_by value="" required>
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
                <button type="submit" form="form-perpustakaan-edit" class="btn btn-primary ml-1">
                    <span class="d-none d-sm-block">Accept</span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade text-left" id="modal-pengetahuan" tabindex="-1" role="dialog"
    aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable"
        role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title white" id="">
                    Add Insight Page
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                {{-- <div class="text-center loading">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden"></span>
                    </div>
                </div> --}}
                <form class="after-loading" id="form-perpustakaan">
                    <table class="table table-striped ">
                        <tbody>
                            <tr>
                                <th scope="row">Title</th>
                                <td>
                                    <input type="text" name="repeater[0][title]" class="form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Description</th>
                                <td>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control sumernote-perpustakaan" id="summer-note" name="repeater[0][description]" placeholder="description" required></textarea>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Blog Image</th>
                                <td> 
                                    <input type="file" name="repeater[0][blog_image][]" class="form-control" accept="image/*" required > 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Blog Slug</th>
                                <td>
                                    <input type="text" name="repeater[0][blog_slug]" class="form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Published By</th>
                                <td>
                                    <input type="text" name="repeater[0][published_by]" class="form-control" required>
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
                <button type="submit" form="form-perpustakaan" class="btn btn-primary ml-1">
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
        let role = session("role");

        GetData(req,"insight_sections", formatinsight);
    });

    function formatinsight(data) {
        var result = "";
        $.each(data, function(index, data) {
    
            result += `
                <tr>
                    <td>${data.title}</td>
                    <td>${!empty(data.blog_image) ? `<a href="#" class="openPopup" link="${data.blog_image[0].url}">View File</a> `: "-"}</td>
                    <td>${data.published_by}</td>
                    <td>
                    <a href="#" class="btn btn-info btn-icon btn-sm btn-detail" title="Detail" data-id="${data.id}"><span class="bi bi-info-circle"> </span></a>
                    <a href="#" class="btn btn-warning btn-sm btn-edit-pengetahuan" title="edit konten" data-id="${data.id}"><span class="bi bi-pencil"> </span></a>
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
        // callbacks: {
        //     onImageUpload: function(files) {
        //         uploadImage(files[0], selector); // ✅ Upload image and replace in editor
        //     },
        // },
    });
}

// function uploadImage(file, selector) {
//     let data = new FormData();
//     data.append("file", file);

//     $.ajax({
//         url: "/upload-image", // Laravel route
//         method: "POST",
//         data: data,
//         contentType: false,
//         processData: false,
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF protection
//         },
//         success: function(response) {
//             if (response.url) {
//                 let imgNode = $("<img>").attr("src", response.url);
//                 $(selector).summernote('insertNode', imgNode[0]); // ✅ Insert image URL
//             } else {
//                 alert("Image upload failed!");
//             }
//         },
//         error: function() {
//             alert("Error uploading image!");
//         }
//     });
// }

    $(document).on('click', '.btn-add-pengetahuan', function() {
        
        $('#modal-pengetahuan').modal('show');
        $('#modal-pengetahuan').find('form')[0].reset();
        settingSummerNote($(".sumernote-perpustakaan"))
    });

    
    $("#form-perpustakaan").on('submit', function(e) {
        e.preventDefault();
        let url = `${baseUrl}/api/v1/admin/addOrUpdateInsight`;
        const data = new FormData(this);
        loadingButton($(this))
        ajaxDataFile(url, 'POST', data, function(resp) {
            toast("Data has been saved");
            $('#modal-pengetahuan').modal('hide');
            loadingButton($("#form-perpustakaan"), false)
            GetData(req,"insight_sections", formatinsight);
            window.location.reload();
        }, function(data) {
            loadingButton($("#form-perpustakaan"), false)
        });
    });



    $(document).on('click', '.openPopup', function() {
        window.open($(this).attr('link'), 'popup', 'width=800,height=600');
    })

    $(document).on('click', '.btn-detail', function() {
        $('#detailPengetahuan').modal('show');
        loading($("#detailPengetahuan") , true);
        
        ajaxData(`${baseUrl}/api/v1/admin/insight`, 'GET', {
            "id" : $(this).data('id')
        }, function(resp) {
            loading($("#detailPengetahuan") , false);
            if (empty(resp.data)) {
                toast("Data not found", 'warning');
                $('#detailPengetahuan').modal('hide');
            }
            
            let result = resp.data[0];
            $.each(result, function(index, data) {
                if (index == "blog_image" || index == "upload_lampiran") return;
                $('#detailPengetahuan').find(`[data-bind-${index}]`).html(data);
            });
            
            if (!empty(result.blog_image)) {
                result.blog_image.forEach(function(image) {
                    $('#detailPengetahuan').find('[data-bind-blog_image]').html(`<a href="${image.url}" target="_blank">View Image</a>`);
                });
            } else {
                $('#detailPengetahuan').find('[data-bind-blog_image]').html(`-`);
            }

            $("#detailPengetahuan").find('.sumernote-perpustakaan').val(result.description).trigger('change');

            settingSummerNote($(".sumernote-perpustakaan"))
        },
        function() {
            loading($("#detailPengetahuan"));
            setTimeout(function() {
                $('#detailPengetahuan').modal('hide');
            }, 1000);
        });
    });

    $(document).on('click', '.btn-edit-pengetahuan', function() {
      
        $('#modal-edit-pengetahuan').modal('show');
        loading($("#modal-edit-pengetahuan") , true);
        $('#sub-kategori-list').empty();
        $('#sub-kategori-list').append('<option value="">Pilih Sub Kategori</option>');

        ajaxData(`${baseUrl}/api/v1/admin/insight`, 'GET', {
            "id" : $(this).data('id')
        }, function(resp) {
            const result = resp.data[0];
    
            if (!result) {
                setTimeout(() => {
                    $('#modal-edit-pengetahuan').modal('hide')
                    toast("Data not found", 'warning');
                }, 1000);
                return;
            }
            loading($("#modal-edit-pengetahuan") , false);
        
            $.each(result, function(index, data) {
                if (index == "blog_image"  ) return;
                $('#modal-edit-pengetahuan').find(`[data-bind-${index}]`).val(data).attr('value', data);
            });
         
            
            if (!empty(result.insight)) {
                result.insight.forEach(function(image) {
                    $('#modal-edit-pengetahuan').find('[data-bind-blog_image]').html(`<a href="${image.url}" target="_blank">View Image</a>`);
                });
            } else {
                $('#modal-edit-pengetahuan').find('[data-bind-blog_image]').html(`-`);
            }
            
            $("#modal-edit-pengetahuan").find('.sumernote-perpustakaan-edit').summernote('code', result.description);

            settingSummerNote($(".sumernote-perpustakaan-edit"))
        },
        function() {
            loading($("#modal-edit-pengetahuan"));
            setTimeout(function() {
                $('#detailLibrary').modal('hide');
            }, 1000);
        });
    });

    $("#form-perpustakaan-edit").on('submit', function(e) {
        e.preventDefault();
        let url = `${baseUrl}/api/v1/admin/addOrUpdateInsight`;
        const data = new FormData(this);
        loadingButton($(this))
        ajaxDataFile(url, 'POST', data, function(resp) {
            toast("Data has been saved");
            $('#modal-edit-pengetahuan').modal('hide');
            loadingButton($("#form-perpustakaan-edit"), false)
            GetData(req,"insight_sections", formatinsight);
            window.location.reload();
        }, function(data) {
            loadingButton($("#form-perpustakaan-edit"), false)
        });
    });
</script>
@endsection

