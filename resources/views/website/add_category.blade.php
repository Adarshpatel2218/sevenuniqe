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
        <h2>Category Form</h2>
        <label for="fullName">Category Name:</label>
        <input type="text" id="fullName" name="fullName">
        <span id="fullNameError" class="error"></span>

        <button type="submit">Submit</button>
    </form>

    <script>
        function validateForm() {
            let valid = true;

            // Clear previous error messages
            document.querySelectorAll('.error').forEach(span => span.textContent = '');

            // Validate Category Name
            const fullName = document.getElementById('fullName').value;
            if (fullName.trim() === "") {
                document.getElementById('fullNameError').textContent = "Category name is required.";
                valid = false;
            }

            return valid;
        }
    </script>

</body>
</html>
