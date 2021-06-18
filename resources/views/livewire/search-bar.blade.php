<div class="col-md-8 mx-auto ">
    <div class="py-5">
        <input wire:model.debounce.300ms="search" type="search" placeholder="Search users..." class="form-control"/>
    </div>
    @if(!$searchResults->isEmpty())
        @foreach($searchResults as $searchResult)
            <div class="card my-3">
                <div class="row p-3 ">
                    <div class="col-1">
                        <img class="rounded-circle m-3 image_size" alt="100x100"
                             src="{{asset('storage/intern_images/' . $searchResult->user_id . '/' . $searchResult->image)}}"
                             data-holder-rendered="true">
                    </div>
                    <div class="col-7">
                        Name: {{$searchResult->user->name . '  ' . $searchResult->user->lastname}}
                    </div>
                    <div class="col-4">
                        Field of study: {{$searchResult->fieldOfStudies}}
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div>
            <div class="card p-3">No results!</div>
        </div>
    @endif
</div>

