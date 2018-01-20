
<div class="form-group row">
    <label for="title" class="col-2 col-form-label">Title</label>
    <div class="col-10">
        <input name="title" class="form-control" type="text" id="title" value="@if ($post){{ $post->title }}@endif">
    </div>
</div>

<div class="form-group row">
    <label for="slug" class="col-2 col-form-label">Slug</label>
    <div class="col-10">
        <input name="slug" class="form-control" type="text" id="slug" value="@if ($post){{ $post->slug }}@endif">
    </div>
</div>

<div class="form-group row">
    <label for="content" class="col-2 col-form-label">Content</label>
    <div class="col-10">
        <textarea name="content" class="form-control" type="text" id="content">@if ($post){{ $post->content }}@endif</textarea>
    </div>
</div>

<div class="form-group row">
    <label for="is_active" class="col-2 col-form-label">Active?</label>
    <div class="col-10">
        <select name="is_active">
            <option value="0">No</option>
            <option value="1" @if ($post && $post->is_active) selected @endif>Yes</option>
        </select>
    </div>
</div>


<button type="submit" class="btn btn-primary">Submit</button>

