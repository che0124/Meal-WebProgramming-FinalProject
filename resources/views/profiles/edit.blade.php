@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<div class="container">
    <h1 class="page-title">編輯個人檔案</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
=======
    <div class="container">
        <h1 class="page-title">編輯個人檔案</h1>
        <div class="form">
            <div class="profile-edit">
                <div class="profile-container">
                    <div class="profile-avatar-edit">
                        <div class="avatar">
                            <img src="{{ asset('storage/' . $profile->avatar->image) }}" alt="image">
                        </div>
                    </div>
                    <div class="profile-item-edit">
                        <div class="profile-name">
                            <span class="profile-title username">{{ $profile->username }}</span>
                            <span class="profile-title name">{{ $user->name }}</span>
                        </div>
                    </div>
                </div>
                <div class="profile-container">
                    <div class="profile-item-edit">
                        <div class="profile-img-edit">
                            <div id="change-photo" role="button" tablindex="0">變更相片</div>
                            <!-- Overlay -->
                            <div id="overlay" class="hidden"></div>

                            <!-- Popup Menu -->
                            <div id="avatar-container" class="avatar-container hidden">
                                <div class="avatar-menu">
                                    <div class="avatar-item">變更大頭貼</div>
                                    <div class="avatar-button-container">
                                        <button class="avatar-item" style="color:#0095f6;">上傳相片</button>
                                        <button class="avatar-item" style="color: #ed4956;">移除目前的大頭貼照</button>
                                        <button class="avatar-item">取消</button>
                                    </div>

                                    <form id="profile-form" action="{{ route('profile.avatar') }}" method="POST"
                                        enctype="multipart/form-data" hidden>
                                        @method('PUT')
                                        @csrf
                                        <input type="file" id="avatar" name="avatar" accept="image/jpeg,image/png" />
                                        <button type="submit">test</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{ route('profiles.update', ['profile' => $profile]) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-item">
                    <label for="username" class="form-field-name">使用者名稱 </label>
                    <input type="text" class="form-control" name="username" id="username"
                        value="{{ $profile->username }}" required />
                </div>

                <div class="form-item">
                    <label for="gender" class="form-field-name">性別</label>
                    <input type="text" class="form-control" name="gender" id="gender" value="{{ $profile->gender }}"
                        required />
                </div>

                <div class="form-item">
                    <label for="birthday" class="form-field-name">生日</label>
                    <input type="date" class="form-control" name="birthday" id=""
                        value="{{ $profile->birthday }}" required />
                </div>

                <div class="form-item-textarea">
                    <label class="form-name-textarea">個人簡介</label>
                    <textarea name="bio" class="form-control-textarea" style="resize: none;"></textarea>
                </div>

                <div class="form-item-btn">
                    <input class="btn-primary" type="submit" value="submit" />
                </div>
            </form>
>>>>>>> eb7a5dad32c542ede0b90f213e574b577fd647cc
        </div>
    @endif

    <div class="form">
        <form action="{{ route('profiles.update', ['profile' => $user->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-item">
                <label for="title" class="form-field-name">姓名</label>
                <input type="text" class="form-control" name="name" id="name" required />
            </div>

            <div class="form-item">
                <label for="restaurant" class="form-field-name">使用者名稱</label>
                <input type="text" class="form-control" name="username" id="username" required />
            </div>

            <div class="form-item-textarea">
                <label class="form-name-textarea">個人簡介</label>
                <textarea name="bio" class="form-control-textarea" style="resize: none;"></textarea>
            </div>

            <div class="form-item-btn">
                <input class="btn-primary" type="submit" value="submit" />
            </div>
        </form>
    </div>
<<<<<<< HEAD
</div>
@endsection
=======

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var changePhoto = document.getElementById("change-photo");
            var photoMenu = document.getElementById("avatar-container");
            var overlay = document.getElementById("overlay");
            var removePhotoButton = document.getElementById("remove-photo");
            var cancelButton = document.getElementById("cancel");

            // Show the menu and overlay when clicking "變更相片"
            changePhoto.addEventListener("click", function(event) {
                photoMenu.classList.remove("hidden");
                overlay.classList.remove("hidden");
            });

            // Hide the menu and overlay when clicking "取消"
            cancelButton.addEventListener("click", function() {
                photoMenu.classList.add("hidden");
                overlay.classList.add("hidden");
            });

            // Hide the menu and overlay when clicking outside of the menu
            document.addEventListener("click", function(event) {
                if (!photoMenu.contains(event.target) && !changePhoto.contains(event.target)) {
                    photoMenu.classList.add("hidden");
                    overlay.classList.add("hidden");
                }
            });

            // Add functionality to "移除目前的大頭貼照"
            removePhotoButton.addEventListener("click", function() {
                // Your logic to remove the current photo goes here
                alert("移出目前相片");
                photoMenu.classList.add("hidden");
                overlay.classList.add("hidden");
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            var avatarInput = document.getElementById("avatar");

            avatarInput.addEventListener("change", function() {
                this.submit();
            });
        });
    </script>
@endsection
>>>>>>> eb7a5dad32c542ede0b90f213e574b577fd647cc
