<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with Validation</title>
    <style>
        form {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }
        .error {
            color: red;
            font-size: 12px;
        }
        button {
            padding: 10px 20px;
            margin: 10px 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form id="myForm" onsubmit="return validateForm()">
        <!-- Personal Details Section -->
        <h2>Personal Details</h2>
        <label for="fullName">Full Name:</label>
        <input type="text" id="fullName" name="fullName">
        <span id="fullNameError" class="error"></span>

        <label for="mobileNumber">Mobile Number:</label>
        <input type="text" id="mobileNumber" name="mobileNumber">
        <span id="mobileError" class="error"></span>

        <label for="secondaryMobile">Secondary Mobile Number:</label>
        <input type="text" id="secondaryMobile" name="secondaryMobile">

        <label for="aadharNumber">Aadhar Number:</label>
        <input type="text" id="aadharNumber" name="aadharNumber">

        <label for="state">Select State:</label>
        <select id="state" name="state">
            <option value="">-- Select State --</option>
            <option value="MP">Madhya Pradesh</option>
            <option value="UP">Uttar Pradesh</option>
            <option value="MH">Maharashtra</option>
            <!-- Add more states as needed -->
        </select>
        <span id="stateError" class="error"></span>

        <label for="district">Select District:</label>
        <select id="district" name="district">
            <option value="">-- Select District --</option>
            <option value="Katni">Katni</option>
            <option value="Jabalpur">Jabalpur</option>
            <option value="Indore">Indore</option>
            <!-- Add more districts as needed -->
        </select>
        <span id="districtError" class="error"></span>

        <label for="pincode">Pincode:</label>
        <input type="text" id="pincode" name="pincode">

        <label for="address">Address:</label>
        <textarea id="address" name="address"></textarea>
        <span id="addressError" class="error"></span>

        <label for="experience">Experience (in years):</label>
        <input type="number" id="experience" name="experience">
        <span id="experienceError" class="error"></span>

        <label for="rate">Rate (in INR):</label>
        <input type="number" id="rate" name="rate">
        <span id="rateError" class="error"></span>

        <!-- Work Details Section -->
        <h2>Work Details</h2>
        <label for="category">Select Category:</label>
        <select id="category" name="category">
            <option value="">-- Select Category --</option>
            <option value="Construction">Construction</option>
            <option value="Plumbing">Plumbing</option>
            <option value="Electrical">Electrical</option>
            <!-- Add more categories as needed -->
        </select>
        <span id="categoryError" class="error"></span>

        <label for="subCategory">Sub Category:</label>
        <input type="text" id="subCategory" name="subCategory">

        <label for="area">Area:</label>
        <input type="text" id="area" name="area">
        <span id="areaError" class="error"></span>

        <label for="workExperience">Work Experience (in years):</label>
        <input type="number" id="workExperience" name="workExperience">
        <span id="workExperienceError" class="error"></span>

        <label for="images">Upload Images:</label>
        <input type="file" id="images" name="images" multiple>

        <!-- Submit and Reset Buttons -->
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>

    <script>
        function validateForm() {
            let valid = true;

            // Clear previous error messages
            document.querySelectorAll('.error').forEach(span => span.textContent = '');

            // Validate Full Name
            const fullName = document.getElementById('fullName').value;
            if (fullName === "") {
                document.getElementById('fullNameError').textContent = "Full name is required.";
                valid = false;
            }

            // Validate Mobile Number
            const mobileNumber = document.getElementById('mobileNumber').value;
            if (mobileNumber === "" || isNaN(mobileNumber)) {
                document.getElementById('mobileError').textContent = "Valid mobile number is required.";
                valid = false;
            }

            // Validate State
            const state = document.getElementById('state').value;
            if (state === "") {
                document.getElementById('stateError').textContent = "State is required.";
                valid = false;
            }

            // Validate District
            const district = document.getElementById('district').value;
            if (district === "") {
                document.getElementById('districtError').textContent = "District is required.";
                valid = false;
            }

            // Validate Address
            const address = document.getElementById('address').value;
            if (address === "") {
                document.getElementById('addressError').textContent = "Address is required.";
                valid = false;
            }

            // Validate Experience
            const experience = document.getElementById('experience').value;
            if (experience === "" || isNaN(experience)) {
                document.getElementById('experienceError').textContent = "Experience is required.";
                valid = false;
            }

            // Validate Rate
            const rate = document.getElementById('rate').value;
            if (rate === "" || isNaN(rate)) {
                document.getElementById('rateError').textContent = "Rate is required.";
                valid = false;
            }

            // Validate Work Category
            const category = document.getElementById('category').value;
            if (category === "") {
                document.getElementById('categoryError').textContent = "Work category is required.";
                valid = false;
            }

            // Validate Area
            const area = document.getElementById('area').value;
            if (area === "") {
                document.getElementById('areaError').textContent = "Area is required.";
                valid = false;
            }

            // Validate Work Experience
            const workExperience = document.getElementById('workExperience').value;
            if (workExperience === "" || isNaN(workExperience)) {
                document.getElementById('workExperienceError').textContent = "Work experience is required.";
                valid = false;
            }

            return valid;
        }
    </script>

</body>
</html>
