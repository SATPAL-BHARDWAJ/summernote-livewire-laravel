<div class="container mt-5">
    <div class="sum-model">
        <form wire:submit.prevent='submitPost($("#summernote").val())'>
            <div class="form-group">
                <label for="post_title">Name of the post</label>
                <input wire:model='postTitle' type="text" class="form-control" id="post_title">
            </div>
            <div class="form-group" wire:ignore>
                <label for="summernote">Write your post</label>
                <textarea name="post" id="summernote" class="form-control">{{ $postContent }}</textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    @push('script')
    <script>
        $('#summernote').on('summernote.blur', function() {
            console.log('Editable area loses focus', this.value);
            @this.postContent = this.value;
        });
    </script>
    @endpush
</div>
