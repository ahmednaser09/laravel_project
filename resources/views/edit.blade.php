

<form action="{{ route('tripcruds.update', $ourtripcruds->id)}}" method="POST" enctype="multipart/form-data" class="trip-form">
    @csrf
    @method('PUT')
    <div class="form-row">
        <div class="form-group">
            <label for="title" class="label-field">Title</label>
            <input type="text" class="form-control input-field" name="title" id="title" value="{{$ourtripcruds->title}}" required>
        </div>
    
        <div class="form-group">
            <label for="image" class="label-field">Image</label>
            <input type="file" class="form-control input-field" name="image" id="{{$ourtripcruds->image}}" value="image">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="duration" class="label-field">Duration</label>
            <input type="number" class="form-control input-field" name="duration" id="duration" value="{{$ourtripcruds->duration}}" required>
        </div>
    
        <div class="form-group">
            <label for="availability" class="label-field">Availability</label>
            <input type="text" class="form-control input-field" name="availability" id="availability"
            value="{{$ourtripcruds->availability}}" required>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="location" class="label-field">Location</label>
            <input type="text" class="form-control input-field" name="location" id="location" value="{{$ourtripcruds->location}}" required>
        </div>
    
        <div class="form-group">
            <label for="description" class="label-field">Description</label>
            <textarea class="form-control input-field textarea-field" value="{{$ourtripcruds->description}}" name="description" id="description" ></textarea>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="reviews_count" class="label-field">Reviews Count</label>
            <input type="number" class="form-control input-field" name="reviews_count" id="reviews_count" value="0" value="{{$ourtripcruds->reviews_count}}" required>
        </div>
    
        <div class="form-group">
            <label for="price" class="label-field">Price</label>
            <input type="number" step="0.01" class="form-control input-field" name="price" id="price" value="{{$ourtripcruds->price}}" required>
        </div>
    </div>

    <button type="submit" class="btn btn-primary submit-btn">Submit</button>
</form>


