<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="mt-4">
            <h3>Filter Image</h3>
        </div>
        <div class="mt-4">
            @foreach($effects['data'] as $effect)
                <label>{{ $effect['name'] }}</label>
                <input type="checkbox" name="effects[]" value="{{ $effect['name'] }}">
            @endforeach
        </div>

        <div class="mt-4">
            <input type="file" name="realimage" id="realimage">
        </div>

        <div class="mt-3">
            <button type="button" onclick="submitform()">Filter Image</button>
        </div>

        <!-- Div to display the filtered image -->
        <div class="mt-4" style="display: flex; align-items: flex-start; gap: 20px;">
            <div id="imagePreview" >
                <!-- Image will be displayed here -->
            </div>
            <div id="filtered-image-container" >
                <img id="filtered-image" src="" alt="Filtered Image" style="display:none; max-width:100%;">
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script>
    document.getElementById('realimage').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const imgElement = document.createElement('img');
                imgElement.src = e.target.result;
                imgElement.style.maxWidth = '100%';
                imgElement.style.height = 'auto';

                const imagePreview = document.getElementById('imagePreview');
                imagePreview.innerHTML = '';
                imagePreview.appendChild(imgElement);
            };
            reader.readAsDataURL(file);
        }
    });
    function submitform() {
        var formData = new FormData();
        var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        // Get selected effects
        var effects = [];
        document.querySelectorAll('input[name="effects[]"]:checked').forEach(function(effect) {
            effects.push(effect.value);
        });

        // Append effects array to formData
        formData.append('effects', JSON.stringify(effects));

        // Get the image file
        var image = document.getElementById('realimage').files[0];
        if (image) {
            formData.append('realimage', image);
        } else {
            alert("Please select an image.");
            return;
        }

        // AJAX request to send image and effects to the server
        $.ajax({
            url: '{{ route('get.picsart.image') }}',  // Make sure this route is set up for POST
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': token  // Add the CSRF token to the request header
            },
            processData: false, // prevent jQuery from converting the data
            contentType: false, // prevent jQuery from overriding content type
            data: formData,
            success: function(response) {
                if (response.status === 'success') {
                    // Get the image URL from response
                    var imageUrl = response.data.url;

                    // Display the image in the div
                    $('#filtered-image').attr('src', imageUrl).show();
                } else {
                    alert("Error processing the image.");
                }
            },
            error: function(error) {
                console.log(error);
            }
        });
    }


</script>
</body>
</html>
