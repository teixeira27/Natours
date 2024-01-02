<form method="POST" enctype="multipart/form-data" id="uploadSpot" action="{{ route('upload.spot') }}">
    @csrf<!-- ele valida se o formulario  foi escrito por ele  -->
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="name">Name Spot:</label>
                <input type="text" name="name" id="name" placeholder="Name" required>
                @error('name')
                <div class="alert alert-danger mt-1 mb-1">{{ $messege }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="cost">Cost:</label>
                <input type="number" name="cost" id="cost" placeholder="€" min="0" required>
                @error('cost')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="name">City:</label>
                <input type="text" name="city" id="city" placeholder="City" required>
                @error('name')
                <div class="alert alert-danger mt-1 mb-1">{{ $messege }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="image">Imagem:</label>
                <input type="file" name="image" id="image" required>ss
                @error('image')
                <div class="alert alert-danger mt-1 mb-1">{{ $messege }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="description">Description Spot:</label>
                <textarea name="description" id="description" placeholder="Write the description of the spot" class="form-control" rows="4" required></textarea>
                @error('description')
                <div class="alert alert-danger mt-1 mb-1">{{ $messege }}</div>
                @enderror
            </div>
        </div>


        <div class="col-md-12">
            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
        </div>
    </div>

</form>