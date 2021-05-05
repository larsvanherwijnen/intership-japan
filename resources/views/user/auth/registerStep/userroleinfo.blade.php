<div id="page3" style="display: none;">
    <div id="page1">
        <div class="form-group">
            <input type="text" name="name" id="name" placeholder="Your name"
                   class="form-control  rounded-0 @error('name') border-danger @enderror"
                   value="{{ old('name') }}">
            <div id="name-error"></div>
        </div>
        <div class="form-group">
            <input type="text" name="lastname" id="lastname" placeholder="Lastname"
                   class="form-control  rounded-0"
                   value="{{ old('lastname') }}">
            <div id="lastname-error"></div>
        </div>
        <div class="form-group">
            <input type="text" name="email" id="email" placeholder="Your email"
                   class="form-control  rounded-0"
                   value="{{ old('email') }}">
            <div id="email-error"></div>
        </div>
        <div class="form-group">
            <input type="password" name="password" id="password"
                   placeholder="Choose a password"
                   class="form-control  rounded-0"
                   value="">
            <div id="password-error"></div>
        </div>
        <div class="form-group">
            <input type="password" name="password_confirmation"
                   id="password_confirmation" placeholder="Repeat your password"
                   class="form-control  rounded-0"
                   value="">
            <div id="password_confirmation-error"></div>
        </div>
    </div>
</div>
