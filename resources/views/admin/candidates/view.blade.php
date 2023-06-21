<div class="modal-header">
    <h5 class="modal-title" id="DeleteWarningTitle">Modal title</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form action="{{ route('admin.jobs.store') }}" method="POST">
    @csrf
    <div class="modal-body">
        <div class="form-group mb-3 row">
            <label class="col-md-3">
                First name
                <span class="text-danger">*</span>
            </label>
            <div class="col-md-9">
                <input type="text" required value="{{ old('name') }}" name="first_name" class="form-control"
                    placeholder="First name">
            </div>
        </div>
        <div class="form-group mb-3 row">
            <label class="col-md-3">
                Last Name
                <span class="text-danger">*</span>
            </label>
            <div class="col-md-9">
                <input type="text" required value="{{ old('name') }}" name="last_name" class="form-control"
                    placeholder="Last Name">
            </div>
        </div>
        <div class="form-group mb-3 row">
            <label class="col-md-3">
                Email
                <span class="text-danger">*</span>
            </label>
            <div class="col-md-9">
                <input type="email" required value="{{ old('email') }}" name="email" class="form-control"
                    placeholder="Email address">
            </div>
        </div>
        <div class="form-group mb-3 row">
            <label class="col-md-3">
                Gendar
                <span class="text-danger">*</span>
            </label>
            <div class="col-md-9">
                <input type="radio" name="gender" value="Male">
                Male
                <input type="radio" name="gender" value="Female">
                Female
                <input type="radio" name="gender" value="Other">
                Other
            </div>
        </div>
        <div class="form-group mb-3 row">
            <label class="col-md-3">
                Date of birth
            </label>
            <div class="col-md-9">
                <input type="date" value="{{ old('dob') }}" name="dob" class="form-control"
                    placeholder="Date of birth">
            </div>
        </div>
        <div class="form-group mb-3 row">
            <label class="col-md-3">
                Job Post
                <span class="text-danger">*</span>
            </label>
            <div class="col-md-9">
                <select name="job_id" class="form-control">
                    <option value="">One</option>
                    <option value="">Two</option>
                </select>
            </div>
        </div>
        <div class="form-group mb-3 row">
            <label class="col-md-3">
                Uploade Resume
            </label>
            <div class="col-md-9">
                <input type="file" name="resume" class="form-control">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-white" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Create</button>
    </div>
</form>
