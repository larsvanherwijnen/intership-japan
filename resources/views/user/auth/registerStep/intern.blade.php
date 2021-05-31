<div id="page3" style="display: none;">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nationality">Your nationality</label>
            <select class="form-control" name="nationality" id="nationality">
                <option value="">Your Nationality</option>
                @foreach ($countries as $country)
                    <option value="{{ old('nationality') ? old('nationality') : $country }}">{{ $country }}</option>
                @endforeach
            </select>
            @error('nationality')
            <div class="text-danger"> {{$message}}</div>
            @enderror
            <div id="nationality-error"></div>
        </div>
        <div class="form-group col-md-6">
            <label for="Currentlyliving">Where do live?</label>
            <select class="form-control" name="Currentlyliving" id="Currentlyliving">
                <option value="">Where do you live</option>
                @foreach ($countries as $country)
                    <option
                        value="{{ old('Currentlyliving') ? old('Currentlyliving') : $country }}">{{ $country }}</option>
                @endforeach
            </select>
            @error('Currentlyliving')
            <div class="text-danger"> {{$message}}</div>
            @enderror
            @error('graduated')
            <div class="text-danger"> {{$message}}</div>
            @enderror
            @error('nativelanguage')
            <div class="text-danger"> {{$message}}</div>
            @enderror
            <div id="Currentlyliving-error"></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="field">Field of studies</label>
            <input type="text" name="field" id="field" placeholder="field of studies"
                   class="form-control  rounded-0"
                   value="{{ old('field') }}">
            @error('field')
            <div class="text-danger"> {{$message}}</div>
            @enderror
            <div id="field-error"></div>
        </div>
        <div class="form-group col-md-6">
            <label for="field">Already graduated</label>
            <input type="text" name="graduated" id="graduated" placeholder="(High School, B.A., M.A.)"
                   class="form-control  rounded-0"
                   value="{{ old('graduated') }}">
            <div id="graduated-error"></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="field">Native language</label>
            <input type="text" name="nativelanguage" id="nativelanguage" placeholder="Native language"
                   class="form-control  rounded-0"
                   value="{{ old('nativelanguage') }}">
            <div id="graduated-error"></div>
        </div>
        <div class="form-group col-md-6">
            <label for="socials">Socials</label>
            <input type="text" name="socials" id="socials" placeholder="Socials"
                   class="form-control  rounded-0"
                   value="{{ old('socials') }}">
            <div id="socials-error"></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="CurrentlyStudent">Are you currently uni student?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="CurrentlyStudent" id="CurrentlyStudent">
                <label class="form-check-label" for="flexRadioDefault1">
                    Yes
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="CurrentlyStudent" id="CurrentlyStudent2">
                <label class="form-check-label" for="flexRadioDefault2">
                    No
                </label>
            </div>
            <div id="CurrentlyStudent-error"></div>
        </div>
        <div class="form-group col-md-6">
            <label for="employment">Seeking real employment?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="employment" id="employment">
                <label class="form-check-label" for="employment">
                    Yes
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="employment" id="employment2">
                <label class="form-check-label" for="employment2">
                    No
                </label>
            </div>
            <div id="employment-error"></div>
        </div>
    </div>
</div>

