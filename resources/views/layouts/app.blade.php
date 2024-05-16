<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css'])
</head>

<body>


    <div id="app">
        <div class="navbar">
            <div class="nav-brand">
                <a class="nav-link-brand" href="{{ url('/') }}">
                    <svg width="133" height="37" viewBox="0 0 133 37" fill="none" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="133" height="37" fill="url(#pattern0_974_80)" />
                        <defs>
                            <pattern id="pattern0_974_80" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_974_80"
                                    transform="matrix(0.00152855 0 0 0.00549451 -0.00365612 0)" />
                            </pattern>
                            <image id="image0_974_80" width="659" height="182"
                                xlink:href="data:image/png;base64,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" />
                        </defs>
                    </svg>
                </a>
            </div>
            <div class="nav-item-list">
                <div class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">
                        <span class="nav-title">首頁</span>
                    </a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="{{ route('posts.create')}}">
                        <span class="nav-title">創建飯局</span>
                    </a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="{{ route('surprise') }}">
                        <span class="nav-title">驚喜包</span>
                    </a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="{{ route('join') }}">
                        <span class="nav-title">我要假奔</span>
                    </a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="nav-title">notify</span>
                    </a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="{{ route('{name}', ['name' => $user->name ?? 'None']) }}">
                        <span>個人檔案</span>
                    </a>
                </div>
            </div>
        </div>

        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>