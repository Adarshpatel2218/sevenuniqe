@extends('admin.auth.master')

@section('content')
<style>
.dropdown-list {
    border: 1px solid #ccc;
    max-height: 150px; /* Set a maximum height for scrolling */
    overflow-y: auto;  /* Enable vertical scrolling */
    list-style: none;
    padding: 0;
    position: absolute;
    background: white;
    z-index: 1000;
    margin: 0;
}

.dropdown-list li {
    padding: 8px;
    cursor: pointer;
}

.dropdown-list li:hover {
    background-color: #f0f0f0;
}



</style>


    <div class="right-content-wrapper">
        <div class="card_block">
            <h3>Personal information</h3>
            <div class="card_block_body">
                <!-- Section for Personal Information -->
                <div class="row">
                    <input id="imageref" value="0" type="hidden">
                    <div class="col-md-12 form-field">
                        <div class="custom_uplaod_photo">
                            <div class="upload_photo">
                                    <img src="{{ url('public/superadmin/img/profile_img.png') }}" id="output"
                                        width="200" />
                            </div>
                            <div class="photo_action">
                                <div class="profile_update">
                                    <input id="fileInput" type="file" name="fileInput" placeholder="select image"
                                        onchange="loadFile(event)" />
                                    Change Photo
                                </div>
                                <button type="submit" class="remove_photo" onclick="removeImage()">Remove Image</button>
                            </div>
                        </div>
                    </div>
                    <!-- Input field for editing name -->
                    <div class="col-md-6 form-field">
                        <label>Name:</label>
                        <input type="text" name="name" id="name" class="form-control"
                            value="">
                        <span id="nameError" class="text-danger"></span>
                    </div>
                    <div class="col-md-6 form-field">
                        <label>Email:</label>
                        <input type="email" name="email" id="email" class="form-control"
                            value="">
                        <span id="emailError" class="text-danger"></span>
                    </div>
                    <div class="col-md-6 form-field">
                        <label>Mobile No:</label>
                        <input type="text" name="phone" id="phone" oninput="checkMobile(this.value)"  maxlength="10" onkeypress="return /[0-9]/i.test(event.key)"  class="form-control"
                            value="">
                        <span id="phoneError" class="text-danger"></span>
                    </div>
                    <div class="col-md-6 form-field">
                        <label>State:</label>
                        <input type="text" id="stateInput" class="form-control" oninput="filterStates(this.value)" placeholder="Search for a state...">
                        <ul id="stateList" class="dropdown-list"></ul>
                    </div>
                    <div class="col-md-6 form-field">
                        <label>City:</label>
                        <input type="text" id="cityInput" class="form-control" oninput="filterCities(this.value)" placeholder="Search for a city..." disabled>
                        <ul id="cityList" class="dropdown-list"></ul>
                    </div>


                    <div class="col-md-6 form-field">
                        <div><label class="m-blank">&nbsp;</label></div>
                        <button type="submit" id="updateprofilebtn" class="admin-theme-btn">Update Profile</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card_block">
            <!-- Section for Changing Password -->
            <h3>Work Information</h3>
            <div class="card_block_body">
                <div class="row">
                    <div class="col-md-6 form-field">
                        <label>Current Password</label>
                        <input type="text" name="currentpassword" id="currentpassword" class="form-control"
                            value="">
                        <span id="currentpasswordError" class="text-danger"></span>
                    </div>
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6 form-field">
                        <label>New Password</label>
                        <input type="text" name="newpassword" id="newpassword" class="form-control" value="">
                        <span id="newpasswordError" class="text-danger"></span>
                    </div>
                    <div class="col-md-6 form-field">
                        <label>Confirm New Password</label>
                        <input type="text" name="confirmpassword" id="confirmpassword" class="form-control"
                            value="">
                        <span id="confirmpasswordError" class="text-danger"></span>
                    </div>

                    <div class="col-md-12 form-field text-end">
                        <span id="notmtachError" class="text-danger"></span>
                        <button type="submit" class="admin-theme-btn" id="passwordchange">Update Password</button>
                        <button type="button" class="clear_btn ms-4">Clear</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
@push('footer-script')
<script>
    var loadFile = function(event) {
        var image = document.getElementById("output");
        image.src = URL.createObjectURL(event.target.files[0]);
        $('.profile-pic label.label').hide();
        $('.remove_image').show();
    };

    var removeImage = function() {
        var image = document.getElementById("output");
        image.src = "{{ url('public/superadmin/img/profile_img.png') }}"; // Set the default image source
        $('#fileInput').val(''); // Clear the file input
        $("#imageref").val('1');
        $('.profile-pic label.label').show();
    };

    $(document).ready(function() {
        $("#updateprofilebtn").click(function() {
            $(".text-danger").text("");

            var name = $("#name").val();
            var phone = $("#phone").val();
            var email = $("#email").val();

            if (name === "") {
                $("#nameError").text("Please enter a Name");
                return false;
            }

            if (phone === "") {
                $("#phoneError").text("Please enter a Phone number");
                return false;
            } else if (!/^\d{10}$/.test(phone)) {
                $("#phoneError").text("Please enter a valid 10-digit Phone number");
                return false;
            }

            var mobileValid = checkMobile(phone);
            if (!mobileValid) {
                $('#adminPhoneError').text('this Phone number allready exist');
                return false;
            }

            if (email === "") {
                $("#emailError").text("Please enter correct email");
                return false;
            }



            updateProfile();
        });

        $("#passwordchange").click(function() {
            $(".text-danger").text("");

            var currentpassword = $("#currentpassword").val();
            var newpassword = $("#newpassword").val();
            var confirmpassword = $("#confirmpassword").val();

            if (currentpassword === "") {
                $("#currentpasswordError").text("Please enter current password");
                return false;
            }

            if (newpassword === "") {
                $("#newpasswordError").text("Please enter new password");
                return false;
            }

            if (confirmpassword === "") {
                $("#confirmpasswordError").text("Please enter confirm password");
                return false;
            }

            if (confirmpassword !== newpassword) {
                $("#notmtachError").text("Passwords do not match");
                return false;
            }

            updatePassword();
        });
    });

    function updateProfile() {
        var name = $("#name").val();
        var phone = $("#phone").val();
        var email = $("#email").val();
        var adminimage = $("#fileInput")[0].files[0]; // Get the file object
        var imageref = $("#imageref").val();
        if(adminimage== undefined  && imageref=='1')
        {
            adminimage=null;
            imageref="yes";
        }

        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        var formData = new FormData();
        formData.append('type', 'profileUpdate');
        formData.append('name', name);
        formData.append('phone', phone);
        formData.append('email', email);
        formData.append('adminimage', adminimage); // Append the file object directly
        formData.append('imageref', imageref); // Append the file object directly

        $.ajax({
            url: '{{ route('admin.add') }}',
            type: 'post',
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log(response);
                if (response.message) {
                    showSuccessMessage("Profile Details Updated Successfully");
                } else {
                    showErrorMessage("Failed to update profile details");
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
                showErrorMessage("An error occurred while updating the profile details. Please try again.");
            },
            complete: function() {
                $('#confirmationModal').modal('hide');
            }
        });
    }

    function updatePassword() {
        var currentpassword = $("#currentpassword").val();
        var confirmpassword = $("#confirmpassword").val();
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: '{{ route('admin.add') }}',
            type: 'post',
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            data: {
                type: 'passwordUpdate',
                currentpassword: currentpassword,
                confirmpassword: confirmpassword,
            },
            success: function(response) {
                console.log(response);
                if (response.message) {
                    showSuccessMessage("Password Changed Successfully");

                } else {
                    showErrorMessage("Failed to update password");
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
                showErrorMessage("An error occurred while updating the password. Please try again.");
            }
        });
    }

    function showSuccessMessage(message) {
        Swal.fire({
            position: "top-end",
            imageUrl: "{{asset('public/superadmin/img/success_icon.svg')}}",
            title: message,
            showConfirmButton: false,
            customClass: "toaset-popup",
            timer: 1500
        });
        setTimeout(function() {
            location.reload();
        }, 2000);

    }

    function showErrorMessage(message) {
        Swal.fire({
            position: "top-end",
            imageUrl: "{{asset('public/superadmin/img/success_icon.svg')}}",
            title: message,
            showConfirmButton: false,
            customClass: "toaset-popup",
            timer: 1500
        });
        setTimeout(function() {
            location.reload();
        }, 2000);

    }

    ///////////new script


    let states = @json($states);  // Pass states array
let cities = @json($cities);  // Pass cities array
let selectedStateId = null;   // Store the currently selected state ID

function filterStates(query) {
    const filteredStates = states.filter(state => state.name.toLowerCase().includes(query.toLowerCase()));
    displayList(filteredStates, 'stateList', 'stateInput');
}

function filterCities(query) {
    if (selectedStateId === null) {
        document.getElementById('cityInput').value = '';
        document.getElementById('cityList').innerHTML = '';
        return;  // No state selected, do not filter cities
    }

    const filteredCities = cities.filter(city => city.state_id === selectedStateId && city.name.toLowerCase().includes(query.toLowerCase()));
    displayList(filteredCities, 'cityList', 'cityInput');
}

function displayList(items, listId, inputId) {
    const list = document.getElementById(listId);
    list.innerHTML = '';

    if (items.length === 0) {
        list.innerHTML = `<li>No data found</li>`;
    } else {
        items.forEach(item => {
            const listItem = document.createElement('li');
            listItem.textContent = item.name; // Display the name
            listItem.onclick = () => selectItem(item, inputId, listId);
            list.appendChild(listItem);
        });
    }
}

function selectItem(item, inputId, listId) {
    document.getElementById(inputId).value = item.name; // Set the input value to the name
    if (inputId === 'stateInput') {
        selectedStateId = item.id;  // Store the selected state ID
        document.getElementById('cityInput').disabled = false; // Enable city input
        filterCities(''); // Clear city input
    }
    document.getElementById(listId).innerHTML = '';  // Clear the list
}

// Close dropdowns when clicking outside
document.addEventListener('click', function(event) {
    const stateList = document.getElementById('stateList');
    const cityList = document.getElementById('cityList');
    if (!stateList.contains(event.target) && event.target.id !== 'stateInput') {
        stateList.innerHTML = '';  // Close state dropdown
    }
    if (!cityList.contains(event.target) && event.target.id !== 'cityInput') {
        cityList.innerHTML = '';  // Close city dropdown
    }
});


</script>
@endpush
