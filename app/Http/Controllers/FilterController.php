<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Category;

class FilterController extends Controller
{
    public function picsartform()
    {
        // Create a GuzzleHttp client instance
        $client = new Client();

        // Make the API request
        $response = $client->request('GET', 'https://api.picsart.io/tools/1.0/effects', [
            'headers' => [
                'X-Picsart-API-Key' => 'eyJraWQiOiI5NzIxYmUzNi1iMjcwLTQ5ZDUtOTc1Ni05ZDU5N2M4NmIwNTEiLCJhbGciOiJSUzI1NiJ9.eyJzdWIiOiJhdXRoLXNlcnZpY2UtNDU5MmZjOTAtMTQ3YS00NTMwLTgyNTktNDZkZDgxMzEwOTdhIiwiYXVkIjoiNDY2NjY2OTY4MDAzMTAxIiwibmJmIjoxNzI4OTczMDIyLCJzY29wZSI6WyJiMmItYXBpLmdlbl9haSIsImIyYi1hcGkuaW1hZ2VfYXBpIl0sImlzcyI6Imh0dHBzOi8vYXBpLnBpY3NhcnQuY29tL3Rva2VuLXNlcnZpY2UiLCJvd25lcklkIjoiNDY2NjY2OTY4MDAzMTAxIiwiaWF0IjoxNzI4OTczMDIyLCJqdGkiOiIwYjE2ODM3Yy0zYjYyLTQwZWMtOWMzNi04MTMzYzg4Y2RhNmMifQ.kzNIAS4rXJr3Y7C2RsASahKz3gjzLcnrnFW_BqbY3N_WUdZsONmuS_Q3ey9O1G-06sBX9oqnvY-rzUc7XC_FsVe_DmfkpA6D3sV0IUacEhpDZCWc8NQvh3m94hTah289IBFNpbDK7vXp5VWkoy3d91VSculTlh4MBwKgaHJ9EEqSWYZTDQNl3EgJiuTG5YgBziyAG7kPtB7iqiq9gJGrlHIwZ9drGRT4CKaO8OJc8tmiszGfxgI-LHlLkd1wxllJlg7nAOnwYfyteSsK2XncpMp4qJ-2yRS-KVCgFcTqArATnfoJz71dHi_olBggzvE5rqYB4Mj8mpDO6rn-_hpG8g',  // replace with a valid key
                'accept' => 'application/json',
            ],
        ]);

        // Decode the JSON response
        $data = json_decode($response->getBody(), true);
        // print_r($data); die;
        // Pass the response data to the 'pics.artform' view
        return view('picsartform', ['effects' => $data]);
    }




    public function getPicsartImage(Request $request)
    {
        // Validate that the 'realimage' file and 'effects' input are present
        $request->validate([
            'realimage' => 'required|file|mimes:jpeg,png,jpg,gif,svg',
            'effects' => 'required|json'  // Assuming effects is a JSON string
        ]);

        // Decode the effects input into an array
        $effects = json_decode($request->input('effects'), true);

        // Check if the decoded effects is a valid array and contains at least one effect
        if (is_array($effects) && isset($effects[0])) {
            $firstEffect = $effects[0];  // Access the first effect
        } else {
            // Handle the case where effects are null or not an array
            return response()->json(['error' => 'No effects selected'], 400);
        }

        // Get the uploaded image file
        $image = $request->file('realimage');

        // Make sure the file is valid before proceeding
        if (!$image) {
            return response()->json(['error' => 'Image not uploaded'], 400);
        }

        // Initialize the Guzzle HTTP client
        $client = new \GuzzleHttp\Client();

        try {
            // Make the request to PicsArt API
            $response = $client->request('POST', 'https://api.picsart.io/tools/1.0/effects', [
                'multipart' => [
                    [
                        'name' => 'effect_name',
                        'contents' => $firstEffect  // Use the selected effect
                    ],
                    [
                        'name' => 'format',
                        'contents' => 'JPG'
                    ],
                    [
                        'name' => 'image',
                        'contents' => fopen($image->getPathname(), 'r'),
                        'filename' => $image->getClientOriginalName()
                    ]
                ],
                'headers' => [
                    'X-Picsart-API-Key' => 'eyJraWQiOiI5NzIxYmUzNi1iMjcwLTQ5ZDUtOTc1Ni05ZDU5N2M4NmIwNTEiLCJhbGciOiJSUzI1NiJ9.eyJzdWIiOiJhdXRoLXNlcnZpY2UtNDU5MmZjOTAtMTQ3YS00NTMwLTgyNTktNDZkZDgxMzEwOTdhIiwiYXVkIjoiNDY2NjY2OTY4MDAzMTAxIiwibmJmIjoxNzI4OTczMDIyLCJzY29wZSI6WyJiMmItYXBpLmdlbl9haSIsImIyYi1hcGkuaW1hZ2VfYXBpIl0sImlzcyI6Imh0dHBzOi8vYXBpLnBpY3NhcnQuY29tL3Rva2VuLXNlcnZpY2UiLCJvd25lcklkIjoiNDY2NjY2OTY4MDAzMTAxIiwiaWF0IjoxNzI4OTczMDIyLCJqdGkiOiIwYjE2ODM3Yy0zYjYyLTQwZWMtOWMzNi04MTMzYzg4Y2RhNmMifQ.kzNIAS4rXJr3Y7C2RsASahKz3gjzLcnrnFW_BqbY3N_WUdZsONmuS_Q3ey9O1G-06sBX9oqnvY-rzUc7XC_FsVe_DmfkpA6D3sV0IUacEhpDZCWc8NQvh3m94hTah289IBFNpbDK7vXp5VWkoy3d91VSculTlh4MBwKgaHJ9EEqSWYZTDQNl3EgJiuTG5YgBziyAG7kPtB7iqiq9gJGrlHIwZ9drGRT4CKaO8OJc8tmiszGfxgI-LHlLkd1wxllJlg7nAOnwYfyteSsK2XncpMp4qJ-2yRS-KVCgFcTqArATnfoJz71dHi_olBggzvE5rqYB4Mj8mpDO6rn-_hpG8g',
                    'accept' => 'application/json',
                ],
            ]);

            // Parse the API response
            $body = json_decode($response->getBody(), true);

            // Return success with the image URL from the API response
            return response()->json([
                'status' => 'success',
                'data' => [
                    'url' => $body['data']['url'] ?? null  // Safely access the URL key
                ]
            ]);
        } catch (\Exception $e) {
            // Handle any errors with the API request
            return response()->json(['error' => 'Error processing the image: ' . $e->getMessage()], 500);
        }
    }

    public function addlaborForm() {
        $categories = Category::get(); // Correct use of Category model with ::
        return view('labor.addform', ['categories' => $categories]);
    }




}
