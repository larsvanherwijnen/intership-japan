<div id="page3" style="display: none;">
    <div class="form-row">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        @endif
        <div class="form-group col-md-6">
            <label for="field">Company name</label>
            <input type="text" name="comp_name" id="comp_name" placeholder="Name of company"
                   class="form-control  rounded-0"
                   value="{{ old('comp_name') }}">
            <div id="comp_name-error"></div>
            @error('comp_name')
            <div>{{$message}}</div>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="field">Company email</label>
            <input type="email" name="comp_email" id="comp_email" placeholder="Company email"
                   class="form-control  rounded-0"
                   value="{{ old('comp_email') }}">
            <div id="comp_email-error"></div>
            @error('comp_email')
            <div>{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="field">Contact name</label>
            <input type="text" name="comp_contact_name" id="comp_contact_name" placeholder="Name of company contact"
                   class="form-control  rounded-0"
                   value="{{ old('comp_contact_name') }}">
            <div id="comp_contact_name-error"></div>
            @error('comp_contact_name')
            <div>{{$message}}</div>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="field">Contact email</label>
            <input type="text" name="comp_contact_email" id="comp_contact_email"
                   placeholder="Email of company contact"
                   class="form-control  rounded-0"
                   value="{{ old('comp_contact_email') }}">
            <div id="comp_contact_email-error"></div>
            @error('comp_contact_email')
            <div>{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="comp_image">Profile image</label>
            <input type="file" class="form-control-file" id="comp_image" name="comp_image" value="{{ old('comp_image') }}">
            <div id="comp_image-error"></div>
            @error('comp_image')
            <div>{{$message}}</div>
            @enderror
        </div>
    </div>
</div>
