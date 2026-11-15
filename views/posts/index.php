<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <div class="flex items-center gap-2 mb-3">
        <a href="/admin/posts/create" class="btn btn-primary">New Post</a>
        <button
            type="button"
            class="rounded-md border border-transparent bg-[#0d6efd] px-3 py-1.5 text-base font-normal leading-normal text-white transition-colors hover:bg-[#0b5ed7] focus:outline-none focus:ring-4 focus:ring-[#86b7fe]/50 active:bg-[#0a58ca] disabled:cursor-not-allowed disabled:opacity-[0.65]">
            Tailwind button
        </button>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Category</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php foreach (($posts ?? []) as $post): ?>
                <tr>
                    <td><?= $post->id ?></td>
                    <td><?= $post->title ?></td>
                    <td><?= $post->author ?></td>
                    <td><?= $post->category ?></td>
                    <td><?= $post->created_at ?></td>
                    <td><?= $post->updated_at ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="btn btn-info">View</a>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
        <tfoot>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Category</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </tfoot>
    </table>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>