<div class="logo-box">
    <label for="logo-inp">
        <input type="file" class="no-display" name="logo" id="logo-inp">
        <img src="{{ auth()->user()->logo ? asset(auth()->user()->logo) : asset('storage/media/default_logo.png') }}" alt="Логотип">
        <div class="edit"><i class="fa fa-3x fa-camera"></i></div>
    </label>
</div>
