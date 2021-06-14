<div id="page1">
    <div class="form-row">
        <div class="form-group col-md-6">
            <input type="text" name="name" id="name" placeholder="Name with middle names"
                   class="form-control  rounded-0"
                   value="{{ old('name') }}">
            <div id="name-error"></div>
            @error('name')
            <div>{{$message}}</div>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <input type="text" name="lastname" id="lastname" placeholder="Lastname"
                   class="form-control  rounded-0"
                   value="{{ old('lastname') }}">
            <div id="lastname-error"></div>
            @error('lastname')
            <div>{{$message}}</div>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <input type="email" name="email" id="email" placeholder="Email"
                   class="form-control  rounded-0"
                   value="{{ old('email') }}">
            <div id="email-error"></div>
            @error('email')
            <div>{{$message}}</div>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <input type="text" name="phone" id="phone" placeholder="Phone number"
                   class="form-control  rounded-0"
                   value="{{ old('phone') }}">
            <div id="phone-error"></div>
            @error('phone')
            <div>{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <input type="password" name="password" id="password"
               placeholder="Password"
               class="form-control rounded-0"
               value="">
        <div id="password-error"></div>
        @error('password')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <input type="password" name="password_confirmation"
               id="password_confirmation" placeholder="Repeat your password"
               class="form-control  rounded-0"
               value="">
        <div id="password_confirmation-error"></div>
        @error('password_confirmation')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="role">Choose your function</label>
        <select class="form-control" id="role" name="role">
            <option selected value="0">Choose your function....</option>
            <option value="1">Intern</option>
            <option value="2">Company</option>
            {{--            <option value="3">Educator</option>--}}
        </select>
        <div id="role-error"></div>
    </div>
</div>

