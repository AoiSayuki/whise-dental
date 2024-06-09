<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    <style>
        .tooth {
            /* cursor: pointer; */
            margin-left: 0px; 
            width: 50px;
            height: auto;
        }
        .select-style{
            width: 50px;
        }
    </style>
    <title>Whise Smile Dental Clinic</title>
</head>
<body>
    @include('partials.adminHeader')
    <div class="teethForm">
        <form  method="POST" action="{{ route('addTeeth') }}" id="toothForm">
            @csrf
            {{-- WHOLE TEETH --}}
            <div class="toothContainer">
                {{-- TOP TEETH --}}
                <div class="">
                    <img src="{{ asset('images/teeth/1_Teeth.png') }}" alt="Tooth 1" class="tooth" id="tooth_1">
                    <img src="{{ asset('images/teeth/2_Teeth.png') }}" alt="Tooth 2" class="tooth" id="tooth_2">
                    <img src="{{ asset('images/teeth/3_Teeth.png') }}" alt="Tooth 3" class="tooth" id="tooth_3">
                    <img src="{{ asset('images/teeth/4_Teeth.png') }}" alt="Tooth 4" class="tooth" id="tooth_4">
                    <img src="{{ asset('images/teeth/5_Teeth.png') }}" alt="Tooth 5" class="tooth" id="tooth_5">
                    <img src="{{ asset('images/teeth/6_Teeth.png') }}" alt="Tooth 6" class="tooth" id="tooth_6">
                    <img src="{{ asset('images/teeth/7_Teeth.png') }}" alt="Tooth 7" class="tooth" id="tooth_7">
                    <img src="{{ asset('images/teeth/8_Teeth.png') }}" alt="Tooth 8" class="tooth" id="tooth_8">
                    <img src="{{ asset('images/teeth/9_Teeth.png') }}" alt="Tooth 9" class="tooth" id="tooth_9">
                    <img src="{{ asset('images/teeth/10_Teeth.png') }}" alt="Tooth 10" class="tooth" id="tooth_10">
                    <img src="{{ asset('images/teeth/11_Teeth.png') }}" alt="Tooth 11" class="tooth" id="tooth_11">
                    <img src="{{ asset('images/teeth/12_Teeth.png') }}" alt="Tooth 12" class="tooth" id="tooth_12">
                    <img src="{{ asset('images/teeth/13_Teeth.png') }}" alt="Tooth 13" class="tooth" id="tooth_13">
                    <img src="{{ asset('images/teeth/14_Teeth.png') }}" alt="Tooth 14" class="tooth" id="tooth_14">
                    <img src="{{ asset('images/teeth/15_Teeth.png') }}" alt="Tooth 15" class="tooth" id="tooth_15">
                    <img src="{{ asset('images/teeth/16_Teeth.png') }}" alt="Tooth 16" class="tooth" id="tooth_16">
                </div>
                {{-- TOP TEETH OPTIONS --}}
                <div>
                    {{-- TOOTH 1 --}}
                    <select id="tooth_1_selector" name="tooth_1" class="select-style">
                        <option value="" selected disabled class="option-default">1</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 2 --}}
                    <select id="tooth_2_selector" name="tooth_2" class="select-style">
                        <option value="" selected disabled class="option-default">2</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 3 --}}
                    <select id="tooth_3_selector" name="tooth_3" class="select-style">
                        <option value="" selected disabled class="option-default">3</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 4 --}}
                    <select id="tooth_4_selector" name="tooth_4" class="select-style">
                        <option value="" selected disabled class="option-default">4</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 5 --}}
                    <select id="tooth_5_selector" name="tooth_5" class="select-style">
                        <option value="" selected disabled class="option-default">5</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 6 --}}
                    <select id="tooth_6_selector" name="tooth_6" class="select-style">
                        <option value="" selected disabled class="option-default">6</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 7 --}}
                    <select id="tooth_7_selector" name="tooth_7" class="select-style">
                        <option value="" selected disabled class="option-default">7</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 8 --}}
                    <select id="tooth_8_selector" name="tooth_8" class="select-style">
                        <option value="" selected disabled class="option-default">8</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 9 --}}
                    <select id="tooth_9_selector" name="tooth_9" class="select-style">
                        <option value="" selected disabled class="option-default">9</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 10 --}}
                    <select id="tooth_10_selector" name="tooth_10" class="select-style">
                        <option value="" selected disabled class="option-default">10</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 11 --}}
                    <select id="tooth_11_selector" name="tooth_11" class="select-style">
                        <option value="" selected disabled class="option-default">11</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 12 --}}
                    <select id="tooth_12_selector" name="tooth_12" class="select-style">
                        <option value="" selected disabled class="option-default">12</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 13 --}}
                    <select id="tooth_13_selector" name="tooth_13" class="select-style">
                        <option value="" selected disabled class="option-default">13</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 14 --}}
                    <select id="tooth_14_selector" name="tooth_14" class="select-style">
                        <option value="" selected disabled class="option-default">14</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 15 --}}
                    <select id="tooth_15_selector" name="tooth_15" class="select-style">
                        <option value="" selected disabled class="option-default">15</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 16 --}}
                    <select id="tooth_16_selector" name="tooth_16" class="select-style">
                        <option value="" selected disabled class="option-default">16</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                </div>
                {{-- BOTTOM TEETH --}}
                <div class="">
                    <img src="{{ asset('images/teeth/17_Teeth.png') }}" alt="Tooth 17" class="tooth" id="tooth_17">
                    <img src="{{ asset('images/teeth/18_Teeth.png') }}" alt="Tooth 18" class="tooth" id="tooth_18">
                    <img src="{{ asset('images/teeth/19_Teeth.png') }}" alt="Tooth 19" class="tooth" id="tooth_19">
                    <img src="{{ asset('images/teeth/20_Teeth.png') }}" alt="Tooth 20" class="tooth" id="tooth_20">
                    <img src="{{ asset('images/teeth/21_Teeth.png') }}" alt="Tooth 21" class="tooth" id="tooth_21">
                    <img src="{{ asset('images/teeth/22_Teeth.png') }}" alt="Tooth 22" class="tooth" id="tooth_22">
                    <img src="{{ asset('images/teeth/23_Teeth.png') }}" alt="Tooth 23" class="tooth" id="tooth_23">
                    <img src="{{ asset('images/teeth/24_Teeth.png') }}" alt="Tooth 24" class="tooth" id="tooth_24">
                    <img src="{{ asset('images/teeth/25_Teeth.png') }}" alt="Tooth 25" class="tooth" id="tooth_25">
                    <img src="{{ asset('images/teeth/26_Teeth.png') }}" alt="Tooth 26" class="tooth" id="tooth_26">
                    <img src="{{ asset('images/teeth/27_Teeth.png') }}" alt="Tooth 27" class="tooth" id="tooth_27">
                    <img src="{{ asset('images/teeth/28_Teeth.png') }}" alt="Tooth 28" class="tooth" id="tooth_28">
                    <img src="{{ asset('images/teeth/29_Teeth.png') }}" alt="Tooth 29" class="tooth" id="tooth_29">
                    <img src="{{ asset('images/teeth/30_Teeth.png') }}" alt="Tooth 30" class="tooth" id="tooth_30">
                    <img src="{{ asset('images/teeth/31_Teeth.png') }}" alt="Tooth 31" class="tooth" id="tooth_31">
                    <img src="{{ asset('images/teeth/32_Teeth.png') }}" alt="Tooth 32" class="tooth" id="tooth_32">
                </div>
                {{-- BOTTOM TEETH OPTIONS --}}
                <div>
                    {{-- TOOTH 17 --}}
                    <select id="tooth_17_selector" name="tooth_17" class="select-style">
                        <option value="" selected disabled class="option-default">17</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 18 --}}
                    <select id="tooth_18_selector" name="tooth_18" class="select-style">
                        <option value="" selected disabled class="option-default">18</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 19 --}}
                    <select id="tooth_19_selector" name="tooth_19" class="select-style">
                        <option value="" selected disabled class="option-default">19</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 20 --}}
                    <select id="tooth_20_selector" name="tooth_20" class="select-style">
                        <option value="" selected disabled class="option-default">20</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 21 --}}
                    <select id="tooth_21_selector" name="tooth_21" class="select-style">
                        <option value="" selected disabled class="option-default">21</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 22 --}}
                    <select id="tooth_22_selector" name="tooth_22" class="select-style">
                        <option value="" selected disabled class="option-default">22</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 23 --}}
                    <select id="tooth_23_selector" name="tooth_23" class="select-style">
                        <option value="" selected disabled class="option-default">23</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 24 --}}
                    <select id="tooth_24_selector" name="tooth_24" class="select-style">
                        <option value="" selected disabled class="option-default">24</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 25 --}}
                    <select id="tooth_25_selector" name="tooth_25" class="select-style">
                        <option value="" selected disabled class="option-default">25</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 26 --}}
                    <select id="tooth_26_selector" name="tooth_26" class="select-style">
                        <option value="" selected disabled class="option-default">26</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 27 --}}
                    <select id="tooth_27_selector" name="tooth_27" class="select-style">
                        <option value="" selected disabled class="option-default">27</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 28 --}}
                    <select id="tooth_28_selector" name="tooth_28" class="select-style">
                        <option value="" selected disabled class="option-default">28</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 29 --}}
                    <select id="tooth_29_selector" name="tooth_29" class="select-style">
                        <option value="" selected disabled class="option-default">29</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 30 --}}
                    <select id="tooth_30_selector" name="tooth_30" class="select-style">
                        <option value="" selected disabled class="option-default">30</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 31 --}}
                    <select id="tooth_31_selector" name="tooth_31" class="select-style">
                        <option value="" selected disabled class="option-default">31</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                    {{-- TOOTH 32 --}}
                    <select id="tooth_32_selector" name="tooth_32" class="select-style">
                        <option value="" selected disabled class="option-default">32</option>
                        <option value="clean">Clean</option>
                        <option value="decay">Decay</option>
                        <option value="chipped">Chipped</option>
                        <option value="impacted">Impacted</option>
                    </select>
                </div>
            </div>
            <button type="submit">Save</button>
        </form>
    </div>

    {{-- SCRIPT --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toothSelectors = document.querySelectorAll('select[id^="tooth_"]');

            toothSelectors.forEach(selector => {
                const toothId = selector.id.replace('_selector', '');
                const displayImage = document.getElementById(toothId);

                selector.addEventListener('change', function() {
                    const selectedValue = selector.value;
                    let newPath = '';

                    switch (selectedValue) {
                        case "clean":
                            newPath = `{{ asset('images/teeth') }}/${toothId.replace('tooth_', '')}_Teeth.png`;
                            break;
                        case "decay":
                            newPath = `{{ asset('images/decayed_teeth') }}/${toothId.replace('tooth_', '')}_Teeth.png`;
                            break;
                        case "chipped":
                            newPath = `{{ asset('images/chipped_teeth') }}/${toothId.replace('tooth_', '')}_Teeth.png`;
                            break;
                        case "impacted":
                            newPath = `{{ asset('images/impacted_teeth') }}/${toothId.replace('tooth_', '')}_Teeth.png`;
                            break;
                        default:
                            newPath = `{{ asset('images/teeth') }}/${toothId.replace('tooth_', '')}_Teeth.png`;
                    }

                    displayImage.src = newPath;
                });
            });
        });
    </script>
</body>
</html>