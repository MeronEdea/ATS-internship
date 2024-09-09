<div class="container-upload-image">
    <div class="card h-100">
        <div class="card-body p-4">
            <h5 class="font-weight-bold">Upload Image</h5>
            <form action="/upload" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4 text-center p-4 upload">
                    <label for="file-upload" class="form-label d-block">
                        <i class="bi bi-cloud-upload display-4 text-muted"></i>
                    </label>
                    <label for="file-upload" class="form-label fw-light text-muted font-weight-bold">
                        Drag & drop files or <a href="#" onclick="document.getElementById('file-upload').click()">Browse</a>
                    </label>
                    <input type="file" class="form-control d-none" id="file-upload" name="image" accept="image/jpeg,image/png">
                    <small class="form-text text-muted">Supported formats: JPEG, PNG.</small>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="title" placeholder="Please write title" required>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" name="description" rows="4" placeholder="Please write description" required></textarea>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-warning">
                        Send
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
