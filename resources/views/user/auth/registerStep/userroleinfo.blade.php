<div id="page3" style="display: none;">
    <div class="form-row">

        <div class="form-group col-md-6">
            <input type="text" name="about" id="about" placeholder="About"
                   class="form-control  rounded-0"
                   value="{{ old('about') }}">
            <div id="name-error"></div>
        </div>
        <div class="form-group col-md-6">
            <input type="text" name="teammail" id="teammail" placeholder="Teammail"
                   class="form-control  rounded-0"
                   value="{{ old('teammail') }}">
            <div id="lastname-error"></div>
        </div>
    </div>
</div>
{{--    <div class="form-row">--}}
{{--        <div class="form-group col-md-6">--}}
{{--            <select class="form-control" name="country" id="country">--}}
{{--                <option value="">Select Country</option>--}}
{{--                @foreach ($countries as $country)--}}
{{--                    <option value="{{ $country }}">{{ $country }}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--        </div>--}}
{{--    </div>--}}
