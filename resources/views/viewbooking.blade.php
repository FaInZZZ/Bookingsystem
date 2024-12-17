<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>

<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 py-8">
    <h2 class="text-3xl font-bold text-gray-700 mb-6">Booking Information</h2>
    @foreach ($bookinginfo as $row)
        <div class="bg-white shadow-md rounded-lg p-4 w-80 mb-4">
            <p class="text-base font-semibold text-gray-600 mb-1">
                First Name: <span class="text-gray-800">{{ $row->firstname }}</span>
            </p>
            <p class="text-base font-semibold text-gray-600 mb-1">
                Last Name: <span class="text-gray-800">{{ $row->lastname }}</span>
            </p>
            <p class="text-base font-semibold text-gray-600 mb-1">
                Email: <span class="text-gray-800">{{ $row->email }}</span>
            </p>
            <p class="text-base font-semibold text-gray-600 mb-1">
                Address: <span class="text-gray-800">{{ $row->address }}</span>
            </p>
            <p class="text-base font-semibold text-gray-600 mb-1">
                Phone: <span class="text-gray-800">{{ $row->phone }}</span>
            </p>
            <p class="text-base font-semibold text-gray-600">
                Date: <span class="text-gray-800">{{ $row->date }}</span>
            </p>
        </div>
    @endforeach
</div>





    
</body>
</html>