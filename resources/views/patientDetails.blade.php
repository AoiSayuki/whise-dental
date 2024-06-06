<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    <style>
        .tooth {
            cursor: pointer;
            margin: 10px;
            width: 50px;
            height: auto;
        }
    </style>
    <title>Whise Smile Dental Clinic</title>
</head>
<body>
    @include('partials.adminHeader')
    <div class="toothContainer">
        <img src="{{ asset('images/sample.png') }}" alt="Tooth 1" class="tooth" id="1">
        <img src="{{ asset('images/sample.png') }}" alt="Tooth 2" class="tooth" id="1">
        <img src="{{ asset('images/sample.png') }}" alt="Tooth 3" class="tooth" id="1">
    </div>

    <div class="teethForm">
        <form action="{{ route('saveToothStatus') }}" method="POST" id="toothForm">
            @csrf
            <label for="status">Select Status:</label>
            <select id="" name="">
                <option value="clean">Clean</option>
                <option value="decay">Decay</option>
                <option value="chipped">Chipped</option>
                <option value="impacted">Impacted</option>
            </select>
            <button type="submit">Save</button>
        </form>
    </div>

    {{-- SCRIPT --}}
    <script>
        document.querySelectorAll('.tooth').forEach(tooth => {
            tooth.addEventListener('click', function() {
                const toothId = this.getAttribute('id');
                document.getElementById('toothId').value = toothId;
                alert('Selected Tooth ID: ' + toothId); // Optional: Show alert to indicate selection
            });
        });
    </script>
</body>
</html>