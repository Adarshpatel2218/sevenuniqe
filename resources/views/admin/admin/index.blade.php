@extends('admin.auth.master')

@section('content')
@php
    use Illuminate\Support\Str;
@endphp
    <div class="right-content-wrapper">
        <div class="top_search_add announcements_filter">
            <div class="search_field col_field">
                <input type="text" id="myInput"  class="form-control" placeholder="Search Admin" id="myInput"  oninput="refreshContent()">
            </div>
            <div class="add-new-customer text-right">
                <a class="admin-theme-btn" data-bs-toggle="modal" data-bs-target="#addtownship" onclick="openaddModal()">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 8H8V13C8 13.55 7.55 14 7 14C6.45 14 6 13.55 6 13V8H1C0.45 8 0 7.55 0 7C0 6.45 0.45 6 1 6H6V1C6 0.45 6.45 0 7 0C7.55 0 8 0.45 8 1V6H13C13.55 6 14 6.45 14 7C14 7.55 13.55 8 13 8Z" fill="#FDFDFF"></path>
                    </svg> Add Admin </a>
            </div>
        </div>
        <!-- Search Input and Filters -->
        <div class="fillter_row">
            <div class="fillter_col">
                <label>Status</label>
                <select id="townshipFilter" class="form-control" onchange="refreshContent()">
                    <option value="All">Status</option>
                    <option value="1">Active</option>
                    <option value="2">in-active</option>
                </select>
            </div>

        </div>
        <!-- alert for delete  -->
        <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog"
            aria-labelledby="confirmationModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newCustomerLabel">Confirmation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg
                                width="18" height="19" viewBox="0 0 18 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.97168 17.3711L8.97168 9.37109L16.9717 17.3711M16.9717 1.37109L8.97015 9.37109L0.97168 1.37109"
                                    stroke="#FDFDFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p> Are you sure you want to delete this admin?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                            aria-label="Close">No</button>
                        <button type="button" class="btn btn-danger" yes ="1" id="confirmDeleteBtn">Yes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Township Listing -->
        <div class="custom-table-wrapper" id="staff-list">
            <div class="table-responsive">
                @include('admin.admin.list')
            </div>
        </div>
    </div>
    {{-- add township modal --}}
    <div class="modal fade" id="addtownship" tabindex="-1" aria-labelledby="newCustomerLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-width-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newannocementLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.97168 17.3711L8.97168 9.37109L16.9717 17.3711M16.9717 1.37109L8.97015 9.37109L0.97168 1.37109"
                                stroke="#FDFDFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                {{ Form::open([
                    'id' => 'addservicemember',
                    'method' => 'post',
                    'files' => true,
                    'url' => route('admin.add'),
                ]) }}
                <div class="modal-body">
                    <div class="custom-form-design">
                        <div class="row">
                            <input id="staffId" name="staffId" type="hidden">
                            <div class="col-md-12 formstyle" >
                                <div class="input_group">
                                    <div class="profile-pic">
                                        <label class="label" for="file">
                                            <svg height="24px" width="24px" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                                            </svg>
                                        </label>
                                        <input id="fileInput" type="file" name="fileInput"
                                            onchange="loadFile(event)" />
                                        <img src="{{ url('public/superadmin/img/profile_img.png') }}" id="output"
                                            width="200" />
                                    </div>
                                    <div class="remove_image" style="display: none" onclick="removeImage()">Remove Image
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 formstyle" >
                                <div class="input_group">
                                    <label for="member_name">Name<em>*</em></label>
                                    <input type="text" name="member_name" id="member_name" class="form-control">
                                    <span id="member_nameError" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-12 formstyle" >
                                <div class="input_group">
                                    <label for="phone">Phone<em>*</em></label>
                                    <input type="text" name="phone" oninput="checkMobile(this.value)"  maxlength="10" onkeypress="return /[0-9]/i.test(event.key)"  id="phone" class="form-control">
                                    <span id="adminPhoneError" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-12 formstyle" >
                                <div class="input_group">
                                    <label for="phone">Email</label>
                                    <input type="text" name="phone" oninput="checkMobile(this.value)"  maxlength="10" onkeypress="return /[0-9]/i.test(event.key)"  id="phone" class="form-control">
                                    <span id="adminPhoneError" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <div class="btn-full">
                        <div class="row">
                            <div class="col-6 col-md-4">
                                <button type="submit" class="admin-theme-btn-alt btn-full">
                                    Cancel
                                </button>
                            </div>
                            <div class="col-6 col-md-4 offset-md-4">
                                <button  class="admin-theme-btn btn-full" id="addNewCustomer">
                                    Add Staff
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
    {{-- details modal --}}
    <div class="modal fade" id="detailtownship" tabindex="-1" aria-labelledby="newCustomerLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-width-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >Announcement Detail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.97168 17.3711L8.97168 9.37109L16.9717 17.3711M16.9717 1.37109L8.97015 9.37109L0.97168 1.37109"
                                stroke="#FDFDFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="custom-form-design">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input_group documents_detail">
                                    <label for="township" class="form-label">Township</label>
                                    <p id="townshipName"></p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input_group documents_detail">
                                    <label for="township" class="form-label">Title</label>
                                    <p id="viewtitle"></p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input_group documents_detail">
                                    <label for="township" class="form-label">Description</label>
                                    <p id="viewdescription"></p>
                                </div>
                            </div>
                            <div class="input_group documents_detail">

                                <div id="previewDownloadOptions" class="attachment-block" style="display: none;">
                                    Attachment
                                    <a id="previewButton" href="#" target="_blank" onclick="previewFile(this.href)"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                      </svg>  Preview</a>
                                    <a id="downloadButton" src="#" href="#" onclick="downloadFile(this.getAttribute('src'))"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                      </svg>   Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('footer-script')
    <script>

           $(".js-select2").select2({
            width: '100%',
            dropdownParent: $('#addtownship .modal-content')
        });
        //filter page
    const r = "{{ route('admin.index') }}";

    $(document).on('click', '.pagination a', function (e) {
        e.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        var search = $('#myInput').val();
        var issuedBy = $('#issuedBy').val();
        var sortBy = $('#sortBy').val();
        var townshipFilter = $('#townshipFilter').val();
        refreshContent(page, search, issuedBy,  sortBy, townshipFilter);
    });

    function genQuery(page, search, issuedBy,  sortBy, townshipFilter) {
        var q = '';
        var search = $('#myInput').val();
        var issuedBy = $('#issuedBy').val();
        var sortBy = $('#sortBy').val();
        var townshipFilter = $('#townshipFilter').val();
        console.log(search);
        if (search !== '') {
            q += '?search=' + search;
        }

        if (page) {
            q += (q ? '&' : '?') + 'page=' + page;
        }

        if (issuedBy !== 'All') {
            q += (q ? '&' : '?') + 'issuedBy=' + issuedBy;
        }
        if (sortBy !== 'All') {
            q += (q ? '&' : '?') + 'sortBy=' + sortBy;
        }
        if (townshipFilter !== 'All') {
            q += (q ? '&' : '?') + 'townshipFilter=' + townshipFilter;
        }

        return q;
    }

    var page = 1;
    function refreshContent(page, search, issuedBy, sortBy,townshipFilter){
        var t = r;
        var q = genQuery(page, search, issuedBy, sortBy,townshipFilter);
        var url = t + q;
        console.log(url);

        // Fetch data based on the updated URL
        // history.pushState({}, document.title, url);

        $.get(url, function(h) {
            $('#staff-list').html(h);
        }, 'html')
        .fail(err => {
            console.table(err);
        })
        .always(() => {
            console.log('refreshed');
        });
    }

        // delete
        function confirmDelete(id) {
            $("#confirmationModal").modal('show');
            $("#confirmDeleteBtn").off('click');
            $("#confirmDeleteBtn").on('click', function() {
                $.ajax({
                    url: '{{ route('admin.dashboard') }}',
                    type: 'get',
                    data: {
                        id: id,
                        type: 'annocementdelete',
                    },
                    success: function(response) {
                        if (response.message === 'yes') {
                            showSuccessMessage("Annoucement Deleted Successfully");
                        }
                        else if (response.message === 'notsuper') {
                            showErrorMessage("You can not delete !!");
                        }else {
                            showErrorMessage("Try again !!");
                        }
                    },
                    error: function(error) {
                        showErrorMessage("Try again !!");
                    },
                    complete: function() {
                        $('#confirmationModal').modal('hide');
                    }
                });
            });
        }
        // validation form
        $(document).ready(function() {
            $("#addNewCustomer").click(function() {
                $(".text-danger").text("");
                var title = $("#title").val();
                var description = $("#description").val();

                if (title === "") {
                    $("#titleError").text("Please enter annoucement title");
                    return false;
                }
                if (description === "") {
                    $("#descriptionError").text("Please enter annoucement description");
                    return false;
                }
                document.getElementById("addNewCustomer").disabled = true;
                $("#addannoucementform").submit();
            });
        });

        // add and edit
        function openaddModal() {
            $('#title').val('');
            $('#description').val('');
            $('#annocementId').val('');
            $('#editattachmentdiv').hide();
            $("#newannocementLabel").text("Add Annoucement");
            $("#addNewCustomer").text("Save");
        }

        function openEditModal(annocementId) {
            var id = annocementId;
            $('#title').val('');
            $('#description').val('');
            $('#annocementId').val('');
            $('#editattachmentdiv').hide();
            $.ajax({
                type: 'GET',
                url: '{{ route('admin.dashboard') }}',
                data: {
                    id: id,
                },
                success: function(response) {
                    $('#title').val(response.title);
                    $('#description').val(response.description);
                    $('#annocementId').val(annocementId);
                    response.township_id.forEach(function (township) {
                        $("#township option[value='" + township.town_id + "']").attr('selected', 'selected');
                    });
                    $("#township").select2({
                        width: '100%',
                        dropdownParent: $("#addtownship"),
                        dropdownParent: $('#addtownship .modal-content')

                    });
                    var imageUrl;
                    if (response.attachment && response.attachment !== '') {
                        imageUrl = "{{ asset('public/annoucement/') }}" + '/' + response.attachment;
                        $('#attachfile').attr('href', imageUrl);
                        $("#attachfile").text(response.attachment);

                        $('#editattachmentdiv').show();
                    }
                    $("#attachfileupdate").val("1");

                    $('#addtownship').modal('show');
                    $("#newannocementLabel").text("Edit Annoucement");
                    $("#addNewCustomer").text("Save");
                }
            });
        }

        // view details
        function openviewModal(annocement) {
            var id = annocement;
            $("#viewtitle").text('');
            $("#viewdescription").text('');
            $.ajax({
                type: 'GET',
                url: '{{ route('admin.dashboard') }}',
                data: {
                    id: id,
                },
                success: function(response) {
                    $("#viewtitle").text(response.title);
                    $("#viewdescription").text(response.description);
                    var imageUrl;
                    if (response.attachment && response.attachment !== '') {

                        imageUrl = "{{ asset('public/annoucement/') }}" + '/' + response.attachment;
                        $('#previewButton').attr('href', imageUrl);
                        $('#downloadButton').attr('src', imageUrl);
                        $('#previewDownloadOptions').show();
                    }else{
                        $('#previewDownloadOptions').hide();
                    }
                    $('#detailtownship').modal('show');
                }
            });
        }
        function downloadFile(url) {
            if (url) {
                var link = document.createElement('a');
                link.href = url;
                link.download = 'filename';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            } else {
                alert('No image URL available.');
            }
        }
        function deleteimage() {
            $('#editattachmentdiv').hide();
            $("#attachfileupdate").val("0");
        }
    </script>
@endpush
