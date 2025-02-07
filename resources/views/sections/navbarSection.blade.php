@extends('layout.admin')

@section('title', 'Navbar Section')
@section('title_page', 'Navbar Section')
@section('desc_page', 'Edit Content Navbar Section')
@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Navbar Logo Text</h4>
        <button type="submit" style="float: right" class="btn btn-primary btn-add-kategori">Add Navbar Logo Text</button>
    </div>
    <div class="card-body">
        @include('components.table-pagination', ['table' => 'navbar_sections' , 'url' => '/api/v1/admin/navbarSection' , 'headers' => [
            "Logo Text",
            "Action"
        ] , 'pagination' => true])
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Navbar Nav Link </h4>
        <button type="submit" style="float: right" class="btn btn-primary btn-add-kategori-2">Add Navbar Nav Link</button>
    </div>
    <div class="card-body">
        @include('components.table-pagination', ['table' => 'navbar_nav_links' , 'url' => '/api/v1/admin/navbarNavLink' , 'headers' => [
            "NavLink Title",
            "NavLink Link",
            "Action",
        ] , 'pagination' => true])
    </div>
</div>

<div class="modal fade text-left" id="modal-add-kategori" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel4" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel4">Add Navbar Logo and SignIn
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
                                <th>Logo Text</th>
                                <td>
                                    <input type="text" name="repeater[0][logo_text]" class="form-control">
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
                <h4 class="modal-title" id="myModalLabel4">Add Navbar Nav Link
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
                                <th>NavLink Title</th>
                                <td>
                                    <input type="text" name="repeater[0][navlink_title]" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>NavLink Link</th>
                                <td>
                                    <input type="text" name="repeater[0][navlink_link]" placeholder="E.g. : https://name-your-domain/home"  class="form-control">
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
                    Edit Navbar Logo Text
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
                                <th>Logo Text</th>
                                <td >
                                    <input type="hidden" name="repeater[0][id]"  class="form-control" data-bind-id value="">
                                    <input type="text" name="repeater[0][logo_text]" value="" class="form-control" data-bind-logo_text value="">
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
                    Edit Navbar Navlink
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
                                <th>NavLink Title</th>
                                <td>
                                    <input type="hidden" name="repeater[0][id]"  class="form-control" data-bind-id value="">
                                    <input type="text" name="repeater[0][navlink_title]" value="" class="form-control" data-bind-navlink_title value="">
                                </td>
                            </tr>
                            <tr>
                                <th>NavLink Link</th>
                                <td>
                                    <input type="text" name="repeater[0][navlink_link]" value="" class="form-control" data-bind-navlink_link value="">
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
<script>
    $(document).ready(function() {
        
        GetData(req,"navbar_sections", formatnavbarsection);
        GetData(req,"navbar_nav_links", formatnavbarnavlink);
    });
    function formatnavbarsection(data) {
        var result = "";
        $.each(data, function(index, data) {
            
            result += `
                <tr>
                    <td>${data.logo_text}</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-icon btn-sm btn-edit" title="Detail" data-id="${data.id}"><span class="bi bi-pencil"> </span></a>
                    </td>
                </tr>
            `
        });
        return result;
    }

    function formatnavbarnavlink(data) {
        var result = "";
        $.each(data, function(index, data) {
            
            result += `
                <tr>
                    <td>${data.navlink_title}</td>
                    <td>${data.navlink_link}</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-icon btn-sm btn-edit-2" title="Detail" data-id="${data.id}"><span class="bi bi-pencil"> </span></a>
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
    });

    $(document).on('click', '.btn-add-kategori-2', function() {
        $('#modal-add-kategori-2').modal('show');
        $('#modal-add-kategori-2').find('form')[0].reset();
    });

    $("#form-add-kategori").on('submit', function(e) {
        e.preventDefault();
        const url = `${baseUrl}/api/v1/admin/addOrUpdateNavbarSection`;
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
        const url = `${baseUrl}/api/v1/admin/addOrUpdateNavbarNavLink`;
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
        ajaxData(`${baseUrl}/api/v1/admin/navbarSection`, 'GET', {
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

    $(document).on('click', '.btn-edit-2', function() {
        
        $('#editKategori-2').modal('show');
        loading($("#editKategori-2") , true);
        ajaxData(`${baseUrl}/api/v1/admin/navbarNavLink`, 'GET', {
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
        const url = `${baseUrl}/api/v1/admin/addOrUpdateNavbarSection`;
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
        const url = `${baseUrl}/api/v1/admin/addOrUpdateNavbarNavLink`;
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