@extends('layout.admin')

@section('title', 'About Second Sections')
@section('title_page', 'About Second Sections')
@section('desc_page', 'Edit Content About Second Sections')
@section('styles')
    <link rel="stylesheet" href="{{ asset('admin/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">

    <link rel="stylesheet" href="{{ asset("admin/vendors/summernote/summernote-lite.min.css") }}">
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title"></h4>
        <button type="submit" style="float: right" class="btn btn-primary btn-add-kategori">Add About Second Sections</button>
    </div>
    <div class="card-body">
        @include('components.table-pagination', ['table' => 'about_second_sections' , 'url' => '/api/v1/admin/aboutSecondSection' , 'headers' => [
            "Heading",
            "Description",
            "Action"
        ] , 'pagination' => true])
    </div>
</div>

<div class="modal fade text-left" id="modal-add-kategori" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel4" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel4">Add About-Second-Section</h4>
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
                                <textarea type="text" name="repeater[0][heading_first_text]" class="form-control sumernote-perpustakaan" rows="3">  </textarea>
                                </td>
                            </tr>
                            <!-- <tr>
                                <th>Heading Strong Text</th>
                                <td>
                                <textarea type="text" name="repeater[0][heading_strong_text]" class="form-control sumernote-perpustakaan" rows="3">  </textarea>

                                   
                                </td>
                            </tr>
                            <tr>
                                <th>Heading Second Text</th>
                                <td>
                                <textarea type="text" name="repeater[0][heading_second_text]" class="form-control sumernote-perpustakaan" rows="3">  </textarea>

                                    
                                </td>
                            </tr>
                            <tr>
                                <th>Heading Underlined first Text</th>
                                <td>
                                <textarea type="text" name="repeater[0][heading_underlined_first_text]" class="form-control sumernote-perpustakaan" rows="3">  </textarea>

                                    
                                </td>
                            </tr>
                            <tr>
                                <th>Heading Third Text</th>
                                <td>
                                <textarea type="text" name="repeater[0][heading_third_text]" class="form-control sumernote-perpustakaan" rows="3">  </textarea>

                                   
                                </td>
                            </tr>
                            <tr>
                                <th>Heading Underlined Second Text</th>
                                <td>
                                <textarea type="text" name="repeater[0][heading_underlined_second_text]" class="form-control sumernote-perpustakaan" rows="3">  </textarea>

                                   
                                </td>
                            </tr>
                            <tr>
                                <th>Heading Fourth Text</th>
                                <td>
                                <textarea type="text" name="repeater[0][heading_fourth_text]" class="form-control sumernote-perpustakaan" rows="3">  </textarea>

                                   
                                </td>
                            </tr> -->
                            <tr>
                                <th>Description</th>
                                <td>
                                <textarea type="text" name="repeater[0][description]" class="form-control sumernote-perpustakaan" rows="3">  </textarea>

                                    
                                </td>
                            </tr>
                            <tr>
                                <th>Button Title</th>
                                <td>
                                    <input type="text" name="repeater[0][button_title]" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>Button Link</th>
                                <td>
                                    <input type="text" name="repeater[0][button_link]" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">First Image</th>
                                <td> 
                                    <input type="file" name="repeater[0][first_image][]" class="form-control" accept="image/*" required > 
                                </td>
                            </tr>
                            <!-- <tr>
                                <th scope="row">Second Image</th>
                                <td> 
                                    <input type="file" name="repeater[0][second_image][]" class="form-control" accept="image/*" required > 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Third Image</th>
                                <td> 
                                    <input type="file" name="repeater[0][third_image][]" class="form-control" accept="image/*" required > 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Icon Image 1</th>
                                <td> 
                                    <input type="file" name="repeater[0][icon_image_1][]" class="form-control" accept="image/*" required > 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Icon Image 2 </th>
                                <td> 
                                    <input type="file" name="repeater[0][icon_image_2][]" class="form-control" accept="image/*" required > 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Icon Image 3</th>
                                <td> 
                                    <input type="file" name="repeater[0][icon_image_3][]" class="form-control" accept="image/*" required > 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Icon Image 4</th>
                                <td> 
                                    <input type="file" name="repeater[0][icon_image_4][]" class="form-control" accept="image/*" required > 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Icon Image 5</th>
                                <td> 
                                    <input type="file" name="repeater[0][icon_image_5][]" class="form-control" accept="image/*" required > 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Icon Image 6</th>
                                <td> 
                                    <input type="file" name="repeater[0][icon_image_6][]" class="form-control" accept="image/*" required > 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Icon Image 7</th>
                                <td> 
                                    <input type="file" name="repeater[0][icon_image_7][]" class="form-control" accept="image/*" required > 
                                </td>
                            </tr> -->
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
                    Detail About Second Section
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
                            <th>Heading</th>
                            <td data-bind-heading_first_text></td>
                        </tr>
                        <!-- <tr>
                            <th>Heading Strong Text</th>
                            <td data-bind-heading_strong_text></td>
                        </tr>
                        <tr>
                            <th>Heading Second Text</th>
                            <td data-bind-heading_second_text></td>
                        </tr>
                        <tr>
                            <th>Heading Underlined First Text</th>
                            <td data-bind-heading_underlined_first_text></td>
                        </tr>
                        <tr>
                            <th>Heading Heading Third Text</th>
                            <td data-bind-heading_third_text></td>
                        </tr>
                        <tr>
                            <th>Heading Underlined Second Text</th>
                            <td data-bind-heading_underlined_second_text></td>
                        </tr>
                        <tr>
                            <th>Heading Fourth Text</th>
                            <td data-bind-heading_fourth_text></td>
                        </tr> -->
                        <tr>
                            <th>Description</th>
                            <td data-bind-description></td>
                        </tr>
                        <tr>
                            <th>Button Title</th>
                            <td data-bind-button_title></td>
                        </tr>
                        <tr>
                            <th>Button Link</th>
                            <td data-bind-button_link></td>
                        </tr>
                        <tr>
                            <th>First Image</th>
                            <td data-bind-first_image></td>
                        </tr>
                        <!-- <tr>
                            <th>Second Image</th>
                            <td data-bind-second_image></td>
                        </tr>
                        <tr>
                            <th>Third Image</th>
                            <td data-bind-third_image></td>
                        </tr>
                        <tr>
                            <th>Icon Image 1</th>
                            <td data-bind-icon_image_1></td>
                        </tr>
                        <tr>
                            <th>Icon Image 2</th>
                            <td data-bind-icon_image_2></td>
                        </tr>
                        <tr>
                            <th>Icon Image 3</th>
                            <td data-bind-icon_image_3></td>
                        </tr>
                        <tr>
                            <th>Icon Image 4</th>
                            <td data-bind-icon_image_4></td>
                        </tr>
                        <tr>
                            <th>Icon Image 5</th>
                            <td data-bind-icon_image_5></td>
                        </tr>
                        <tr>
                            <th>Icon Image 6</th>
                            <td data-bind-icon_image_6></td>
                        </tr>
                        <tr>
                            <th>Icon Image 7</th>
                            <td data-bind-icon_image_7></td>
                        </tr> -->

                        
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
                    Edit About-Second-Section
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
                                    <textarea type="text" name="repeater[0][heading_first_text]" value="" class="form-control sumernote-perpustakaan-edit" rows="3" data-bind-heading_first_text value=""></textarea>
                                </td>
                            </tr>
                            <!-- <tr>
                                <th>Heading Strong Text</th>
                                <td >
                                <textarea type="text" name="repeater[0][heading_strong_text]" value="" class="form-control sumernote-perpustakaan-edit" rows="3" data-bind-heading_strong_text value=""></textarea>

                                </td>
                            </tr>
                            <tr>
                                <th>Heading Second Text</th>
                                <td >
                                <textarea type="text" name="repeater[0][heading_second_text]" value="" class="form-control sumernote-perpustakaan-edit" rows="3" data-bind-heading_second_text value=""></textarea>

                                </td>
                            </tr>
                            <tr>
                                <th>Heading Underlined First Text</th>
                                <td >
                                <textarea type="text" name="repeater[0][heading_underlined_first_text]" value="" class="form-control sumernote-perpustakaan-edit" rows="3" data-bind-heading_underlined_first_text value=""></textarea>

                                </td>
                            </tr>
                            <tr>
                                <th>Heading Third Text</th>
                                <td >
                                <textarea type="text" name="repeater[0][heading_third_text]" value="" class="form-control sumernote-perpustakaan-edit" rows="3" data-bind-heading_third_text value=""></textarea>

                                </td>
                            </tr>
                            <tr>
                                <th>Heading Underlined Second Text</th>
                                <td >
                                <textarea type="text" name="repeater[0][heading_underlined_second_text]" value="" class="form-control sumernote-perpustakaan-edit" rows="3" data-bind-heading_underlined_second_text value=""></textarea>

                                </td>
                            </tr>
                            <tr>
                                <th>Heading Fourth Text</th>
                                <td >
                                <textarea type="text" name="repeater[0][heading_fourth_text]" value="" class="form-control sumernote-perpustakaan-edit" rows="3" data-bind-heading_fourth_text value=""></textarea>

                                  
                                </td>
                            </tr> -->
                            <tr>
                                <th>Description</th>
                                <td >
                                <textarea type="text" name="repeater[0][description]" value="" class="form-control sumernote-perpustakaan-edit" rows="3" data-bind-description value=""></textarea>

                                    
                                </td>
                            </tr>
                            <tr>
                                <th>Button Title</th>
                                <td >
                                    <!-- <input type="hidden" name="repeater[0][id]"  class="form-control" data-bind-id value=""> -->
                                    <input type="text" name="repeater[0][button_title]" value="" class="form-control" data-bind-button_title value="">
                                </td>
                            </tr>
                            <tr>
                                <th>Button Link</th>
                                <td >
                                    <!-- <input type="hidden" name="repeater[0][id]"  class="form-control" data-bind-id value=""> -->
                                    <input type="text" name="repeater[0][button_link]" value="" class="form-control" data-bind-button_link value="">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">First Image</th>
                                <td> 
                                    <input type="file" name="repeater[0][first_image][]" class="form-control" accept="image/*" required > 
                                </td>
                            </tr>
                            <!-- <tr>
                                <th scope="row">Second Image</th>
                                <td> 
                                    <input type="file" name="repeater[0][second_image][]" class="form-control" accept="image/*" required > 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Third Image</th>
                                <td> 
                                    <input type="file" name="repeater[0][third_image][]" class="form-control" accept="image/*" required > 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Icon Image 1</th>
                                <td> 
                                    <input type="file" name="repeater[0][icon_image_1][]" class="form-control" accept="image/*" required > 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Icon Image 2</th>
                                <td> 
                                    <input type="file" name="repeater[0][icon_image_2][]" class="form-control" accept="image/*" required > 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Icon Image 3</th>
                                <td> 
                                    <input type="file" name="repeater[0][icon_image_3][]" class="form-control" accept="image/*" required > 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Icon Image 4</th>
                                <td> 
                                    <input type="file" name="repeater[0][icon_image_4][]" class="form-control" accept="image/*" required > 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Icon Image 5</th>
                                <td> 
                                    <input type="file" name="repeater[0][icon_image_5][]" class="form-control" accept="image/*" required > 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Icon Image 6</th>
                                <td> 
                                    <input type="file" name="repeater[0][icon_image_6][]" class="form-control" accept="image/*" required > 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Icon Image 7</th>
                                <td> 
                                    <input type="file" name="repeater[0][icon_image_7][]" class="form-control" accept="image/*" required > 
                                </td>
                            </tr> -->
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
        GetData(req,"about_second_sections", formataboutsecondsection);
    });

    function formataboutsecondsection(data) {
        var result = "";
        $.each(data, function(index, data) {
            
            result += `
                <tr>
                    <td>${data.heading_first_text}</td>
                    <td>${data.description}</td>
                    <td>
                        <a href="#" class="btn btn-info btn-icon btn-sm btn-detail" title="Detail"  data-id="${data.id}"><span class="bi bi-info-circle"> </span></a>
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

    $(document).on('click', '.btn-verify', function() {
        $('#name').html($(this).data('name'));
        $('#email').html($(this).data('email'));
        $('#user_id').val($(this).data('id'));
    });

    $(document).on('click', '.btn-add-kategori', function() {
        $('#modal-add-kategori').modal('show');
        $('#modal-add-kategori').find('form')[0].reset();
        settingSummerNote($(".sumernote-perpustakaan"))

    });

    $("#form-add-kategori").on('submit', function(e) {
        e.preventDefault();
        const url = `${baseUrl}/api/v1/admin/addOrUpdateAboutSecondSection`;
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
    
    $(document).on('click', '.btn-detail', function() {
        $('#detailKategori').modal('show');
        loading($("#detailKategori") , true);
        ajaxData(`${baseUrl}/api/v1/admin/aboutSecondSection`, 'GET', {
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

            if (!empty(result.first_image) ) {
                result.first_image.forEach(function(image) {
                    $('#detailKategori').find('[data-bind-first_image]').html(`<a href="${image.url}" target="_blank">View Image</a>`);
                });
                // result.second_image.forEach(function(image) {
                //     $('#detailKategori').find('[data-bind-second_image]').html(`<a href="${image.url}" target="_blank">View Image</a>`);
                // });
                // result.third_image.forEach(function(image) {
                //     $('#detailKategori').find('[data-bind-third_image]').html(`<a href="${image.url}" target="_blank">View Image</a>`);
                // });
                // result.icon_image_1.forEach(function(image) {
                //     $('#detailKategori').find('[data-bind-icon_image_1]').html(`<a href="${image.url}" target="_blank">View Image</a>`);
                // });
                // result.icon_image_2.forEach(function(image) {
                //     $('#detailKategori').find('[data-bind-icon_image_2]').html(`<a href="${image.url}" target="_blank">View Image</a>`);
                // });
                // result.icon_image_3.forEach(function(image) {
                //     $('#detailKategori').find('[data-bind-icon_image_3]').html(`<a href="${image.url}" target="_blank">View Image</a>`);
                // });
                // result.icon_image_4.forEach(function(image) {
                //     $('#detailKategori').find('[data-bind-icon_image_4]').html(`<a href="${image.url}" target="_blank">View Image</a>`);
                // });
                // result.icon_image_5.forEach(function(image) {
                //     $('#detailKategori').find('[data-bind-icon_image_5]').html(`<a href="${image.url}" target="_blank">View Image</a>`);
                // });
                // result.icon_image_6.forEach(function(image) {
                //     $('#detailKategori').find('[data-bind-icon_image_6]').html(`<a href="${image.url}" target="_blank">View Image</a>`);
                // });
                // result.icon_image_7.forEach(function(image) {
                //     $('#detailKategori').find('[data-bind-icon_image_7]').html(`<a href="${image.url}" target="_blank">View Image</a>`);
                // });
            } else {
                $('#detailKategori').find('[data-bind-first_image]').html(`-`);
                // $('#detailKategori').find('[data-bind-second_image]').html(`-`);
                // $('#detailKategori').find('[data-bind-third_image]').html(`-`);
                // $('#detailKategori').find('[data-bind-icon_image_1]').html(`-`);
                // $('#detailKategori').find('[data-bind-icon_image_2]').html(`-`);
                // $('#detailKategori').find('[data-bind-icon_image_3]').html(`-`);
                // $('#detailKategori').find('[data-bind-icon_image_4]').html(`-`);
                // $('#detailKategori').find('[data-bind-icon_image_5]').html(`-`);
                // $('#detailKategori').find('[data-bind-icon_image_6]').html(`-`);
                // $('#detailKategori').find('[data-bind-icon_image_7]').html(`-`);
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
        ajaxData(`${baseUrl}/api/v1/admin/aboutSecondSection`, 'GET', {
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
        const url = `${baseUrl}/api/v1/admin/addOrUpdateAboutSecondSection`;
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