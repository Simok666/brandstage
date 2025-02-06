@extends('layout.admin')

@section('title', 'Brands Third Sections')
@section('title_page', 'Brands Third Sections')
@section('desc_page', 'Edit Content Brands Third Sections')
@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title"></h4>
        <button type="submit" style="float: right" class="btn btn-primary btn-add-kategori">Add Brands Third Sections</button>
    </div>
    <div class="card-body">
        @include('components.table-pagination', ['table' => 'brand_third_sections' , 'url' => '/api/v1/admin/brandsThirdSection' , 'headers' => [
            "Heading Text",
            "Vertical Text",
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
                <h4 class="modal-title" id="myModalLabel4">Add Brands-Third-Section</h4>
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
                                    <input type="text" name="repeater[0][heading]" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>Vertical Text</th>
                                <td>
                                    <input type="text" name="repeater[0][vertical_text]" class="form-control" rows="3">  
                                </td>
                            </tr>
                            <tr>
                                <th>Description Text</th>
                                <td>
                                    <textarea type="text" name="repeater[0][description]" class="form-control"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Phone Video</th>
                                <td> 
                                    <input type="file" name="repeater[0][phone_video][]" class="form-control" accept="video/mp4,video/x-m4v,video/*" required > 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Phone Image</th>
                                <td> 
                                    <input type="file" name="repeater[0][phone_image][]" class="form-control" accept="image/*" required > 
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
                            </tr>
                            <tr>
                                <th scope="row">Icon Image 8</th>
                                <td> 
                                    <input type="file" name="repeater[0][icon_image_8][]" class="form-control" accept="image/*" required > 
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
                    Detail Brands Third Section
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
                            <td data-bind-heading></td>
                        </tr>
                        <tr>
                            <th>Vertical Text</th>
                            <td data-bind-vertical_text></td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td data-bind-description></td>
                        </tr>
                        <tr>
                            <th>Phone Video</th>
                            <td data-bind-phone_video></td>
                        </tr>
                        <tr>
                            <th>Phone Image</th>
                            <td data-bind-phone_image></td>
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
                        </tr>
                        <tr>
                            <th>Icon Image 8</th>
                            <td data-bind-icon_image_8></td>
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
                    Edit Brands-Third-Section
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
                                    <input type="text" name="repeater[0][heading]" value="" class="form-control" data-bind-heading value="">
                                </td>
                            </tr>
                            <tr>
                                <th>Vertical Text</th>
                                <td >
                                    <!-- <input type="hidden" name="repeater[0][id]"  class="form-control" data-bind-id value=""> -->
                                    <input type="text" name="repeater[0][vertical_text]" value="" class="form-control" data-bind-vertical_text value="">
                                </td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td >
                                    <!-- <input type="hidden" name="repeater[0][id]"  class="form-control" data-bind-id value=""> -->
                                    <textarea rows="3" type="text" name="repeater[0][description]" value="" class="form-control" data-bind-description value=""></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Phone Video</th>
                                <td> 
                                    <input type="file" name="repeater[0][phone_video][]" class="form-control" accept="video/mp4,video/x-m4v,video/*" required > 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Phone Image</th>
                                <td> 
                                    <input type="file" name="repeater[0][phone_image][]" class="form-control" accept="image/*" required > 
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
                            </tr>
                            <tr>
                                <th scope="row">Icon Image 8</th>
                                <td> 
                                    <input type="file" name="repeater[0][icon_image_8][]" class="form-control" accept="image/*" required > 
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
<script>
    $(document).ready(function() {
        GetData(req,"brand_third_sections", formatbrandthirdsection);
    });

    function formatbrandthirdsection(data) {
        var result = "";
        $.each(data, function(index, data) {
            
            result += `
                <tr>
                    <td>${data.heading}</td>
                    <td>${data.vertical_text}</td>
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
    });

    $("#form-add-kategori").on('submit', function(e) {
        e.preventDefault();
        const url = `${baseUrl}/api/v1/admin/addOrUpdateThirdSection`;
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
        ajaxData(`${baseUrl}/api/v1/admin/brandsThirdSection`, 'GET', {
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

            if (!empty(result.phone_video) || !empty(result.phone_image)) {
                result.phone_video.forEach(function(image) {
                    $('#detailKategori').find('[data-bind-phone_video]').html(`<a href="${image.url}" target="_blank">View Video</a>`);
                });
                result.phone_image.forEach(function(image) {
                    $('#detailKategori').find('[data-bind-phone_image]').html(`<a href="${image.url}" target="_blank">View Image</a>`);
                });
            
                result.icon_image_1.forEach(function(image) {
                    $('#detailKategori').find('[data-bind-icon_image_1]').html(`<a href="${image.url}" target="_blank">View Image</a>`);
                });
                result.icon_image_2.forEach(function(image) {
                    $('#detailKategori').find('[data-bind-icon_image_2]').html(`<a href="${image.url}" target="_blank">View Image</a>`);
                });
                result.icon_image_3.forEach(function(image) {
                    $('#detailKategori').find('[data-bind-icon_image_3]').html(`<a href="${image.url}" target="_blank">View Image</a>`);
                });
                result.icon_image_4.forEach(function(image) {
                    $('#detailKategori').find('[data-bind-icon_image_4]').html(`<a href="${image.url}" target="_blank">View Image</a>`);
                });
                result.icon_image_5.forEach(function(image) {
                    $('#detailKategori').find('[data-bind-icon_image_5]').html(`<a href="${image.url}" target="_blank">View Image</a>`);
                });
                result.icon_image_6.forEach(function(image) {
                    $('#detailKategori').find('[data-bind-icon_image_6]').html(`<a href="${image.url}" target="_blank">View Image</a>`);
                });
                result.icon_image_7.forEach(function(image) {
                    $('#detailKategori').find('[data-bind-icon_image_7]').html(`<a href="${image.url}" target="_blank">View Image</a>`);
                });
                result.icon_image_8.forEach(function(image) {
                    $('#detailKategori').find('[data-bind-icon_image_8]').html(`<a href="${image.url}" target="_blank">View Image</a>`);
                });
            } else {
                $('#detailKategori').find('[data-bind-phone_video]').html(`-`);
                $('#detailKategori').find('[data-bind-phone_image]').html(`-`);
                $('#detailKategori').find('[data-bind-icon_image_1]').html(`-`);
                $('#detailKategori').find('[data-bind-icon_image_2]').html(`-`);
                $('#detailKategori').find('[data-bind-icon_image_3]').html(`-`);
                $('#detailKategori').find('[data-bind-icon_image_4]').html(`-`);
                $('#detailKategori').find('[data-bind-icon_image_5]').html(`-`);
                $('#detailKategori').find('[data-bind-icon_image_6]').html(`-`);
                $('#detailKategori').find('[data-bind-icon_image_7]').html(`-`);
                $('#detailKategori').find('[data-bind-icon_image_8]').html(`-`);
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
        ajaxData(`${baseUrl}/api/v1/admin/brandsThirdSection`, 'GET', {
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
        const url = `${baseUrl}/api/v1/admin/addOrUpdateThirdSection`;
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