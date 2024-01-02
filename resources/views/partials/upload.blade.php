<form method="POST" enctype="multipart/form-data" id="uploadSpot" action="{{ route('upload.spot') }}">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <label for="name" class="form-label">Name Spot:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                @error('name')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-3">
                <label for="cost" class="form-label">Cost:</label>
                <input type="number" class="form-control" name="cost" id="cost" placeholder="€" min="0" required>
                @error('cost')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-md-12">
            <div class="mb-3">
                <label for="city" class="form-label">City:</label>
                <input type="text" class="form-control" name="city" id="city" placeholder="City" required>
                @error('name')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-3">
                <label for="image" class="form-label">Imagem:</label>
                <input type="file" class="form-control" name="image" id="image" required>
                @error('image')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-3">
                <label for="description" class="form-label">Description Spot:</label>
                <textarea class="form-control" name="description" id="description" placeholder="Write the description of the spot" rows="4" required></textarea>
                @error('description')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>