<?php $__env->startSection('title', 'Manage Blog Posts'); ?>

<?php $__env->startSection('content'); ?>
<div class="mb-6 flex items-center justify-between">
    <div>
        <h1 class="text-2xl font-bold text-gray-800">Manage Blog Posts</h1>
        <p class="text-sm text-gray-600 mt-1">Create and manage all your blog content</p>
    </div>
    <a href="<?php echo e(route('admin.blog-posts.create')); ?>" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
        <i class="fas fa-plus mr-2"></i> Create New Post
    </a>
</div>

<!-- Filters -->
<div class="bg-white rounded-lg shadow-md p-4 mb-6">
    <form method="GET" action="<?php echo e(route('admin.blog-posts.index')); ?>" class="flex flex-wrap gap-4">
        <div class="flex-1 min-w-[200px]">
            <input type="text" name="search" value="<?php echo e(request('search')); ?>" placeholder="Search posts..." 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        </div>
        <div>
            <select name="category" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <option value="">All Categories</option>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>" <?php echo e(request('category') == $category->id ? 'selected' : ''); ?>>
                        <?php echo e($category->name); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div>
            <select name="status" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <option value="">All Status</option>
                <option value="published" <?php echo e(request('status') == 'published' ? 'selected' : ''); ?>>Published</option>
                <option value="draft" <?php echo e(request('status') == 'draft' ? 'selected' : ''); ?>>Draft</option>
            </select>
        </div>
        <button type="submit" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition">
            <i class="fas fa-filter mr-1"></i> Filter
        </button>
        <?php if(request()->hasAny(['search', 'category', 'status'])): ?>
            <a href="<?php echo e(route('admin.blog-posts.index')); ?>" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition">
                <i class="fas fa-times mr-1"></i> Clear
            </a>
        <?php endif; ?>
    </form>
</div>

<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="p-6 border-b border-gray-200">
        <div class="text-sm text-gray-600">
            <span class="font-semibold"><?php echo e($posts->total()); ?></span> total posts
        </div>
    </div>

    <?php if($posts->count() > 0): ?>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Post</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Author</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Views</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <?php if($post->featured_image): ?>
                                        <img src="<?php echo e(asset('storage/' . $post->featured_image)); ?>" alt="<?php echo e($post->title); ?>" class="w-16 h-12 rounded object-cover mr-3">
                                    <?php else: ?>
                                        <div class="w-16 h-12 rounded bg-gray-100 flex items-center justify-center mr-3">
                                            <i class="fas fa-image text-gray-400"></i>
                                        </div>
                                    <?php endif; ?>
                                    <div class="max-w-md">
                                        <div class="text-sm font-medium text-gray-900"><?php echo e(Str::limit($post->title, 50)); ?></div>
                                        <div class="text-xs text-gray-500"><?php echo e($post->slug); ?></div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 py-1 text-xs font-medium rounded-full bg-purple-100 text-purple-800">
                                    <?php echo e($post->category->name ?? 'Uncategorized'); ?>

                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                <?php echo e($post->author->name ?? 'Unknown'); ?>

                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <?php if($post->is_published && $post->published_at && $post->published_at <= now()): ?>
                                    <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        <i class="fas fa-check-circle mr-1"></i> Published
                                    </span>
                                <?php else: ?>
                                    <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                        <i class="fas fa-file mr-1"></i> Draft
                                    </span>
                                <?php endif; ?>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <i class="fas fa-eye mr-1"></i> <?php echo e(number_format($post->views)); ?>

                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <?php echo e($post->published_at ? $post->published_at->format('M d, Y') : '-'); ?>

                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <?php if($post->is_published): ?>
                                    <form action="<?php echo e(route('admin.blog-posts.unpublish', $post)); ?>" method="POST" class="inline-block mr-2">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PATCH'); ?>
                                        <button type="submit" class="text-orange-600 hover:text-orange-900" title="Unpublish">
                                            <i class="fas fa-eye-slash"></i>
                                        </button>
                                    </form>
                                <?php else: ?>
                                    <form action="<?php echo e(route('admin.blog-posts.publish', $post)); ?>" method="POST" class="inline-block mr-2">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PATCH'); ?>
                                        <button type="submit" class="text-green-600 hover:text-green-900" title="Publish">
                                            <i class="fas fa-check"></i>
                                        </button>
                                    </form>
                                <?php endif; ?>
                                <a href="<?php echo e(route('admin.blog-posts.edit', $post)); ?>" class="text-blue-600 hover:text-blue-900 mr-2" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" onclick="showDeleteModal(<?php echo e($post->id); ?>, '<?php echo e(addslashes($post->title)); ?>')" class="text-red-600 hover:text-red-900" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                                <form id="delete-form-<?php echo e($post->id); ?>" action="<?php echo e(route('admin.blog-posts.destroy', $post)); ?>" method="POST" class="hidden">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

        <div class="px-6 py-4 border-t border-gray-200">
            <?php echo e($posts->links()); ?>

        </div>
    <?php else: ?>
        <div class="p-12 text-center">
            <i class="fas fa-blog text-gray-300 text-5xl mb-4"></i>
            <p class="text-gray-500 mb-4">No blog posts found</p>
            <a href="<?php echo e(route('admin.blog-posts.create')); ?>" class="text-blue-600 hover:text-blue-700">
                <i class="fas fa-plus mr-1"></i> Create your first post
            </a>
        </div>
    <?php endif; ?>
</div>

<!-- Delete Confirmation Modal -->
<div id="deleteModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50">
    <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
        <div class="mt-3 text-center">
            <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-red-100">
                <i class="fas fa-exclamation-triangle text-red-600 text-2xl"></i>
            </div>
            <h3 class="text-lg leading-6 font-medium text-gray-900 mt-4">Delete Blog Post</h3>
            <div class="mt-2 px-7 py-3">
                <p class="text-sm text-gray-500">
                    Are you sure you want to delete <strong id="postTitle"></strong>?
                </p>
                <p class="text-sm text-red-600 mt-2">
                    This action cannot be undone.
                </p>
            </div>
            <div class="flex gap-3 px-4 py-3">
                <button onclick="hideDeleteModal()" class="flex-1 px-4 py-2 bg-gray-200 text-gray-700 text-base font-medium rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-300">
                    Cancel
                </button>
                <button onclick="confirmDelete()" class="flex-1 px-4 py-2 bg-red-600 text-white text-base font-medium rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                    Delete
                </button>
            </div>
        </div>
    </div>
</div>

<script>
let deleteFormId = null;

function showDeleteModal(postId, postTitle) {
    deleteFormId = postId;
    document.getElementById('postTitle').textContent = postTitle;
    document.getElementById('deleteModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function hideDeleteModal() {
    document.getElementById('deleteModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
    deleteFormId = null;
}

function confirmDelete() {
    if (deleteFormId) {
        document.getElementById('delete-form-' + deleteFormId).submit();
    }
}

// Close modal on outside click
document.getElementById('deleteModal').addEventListener('click', function(e) {
    if (e.target === this) {
        hideDeleteModal();
    }
});

// Close modal on ESC key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && !document.getElementById('deleteModal').classList.contains('hidden')) {
        hideDeleteModal();
    }
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbook/Documents/Projects/New_heros/resources/views/admin/blog-posts/index.blade.php ENDPATH**/ ?>