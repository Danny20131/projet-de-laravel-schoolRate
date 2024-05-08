<?php if(Session::has('error')): ?>
<div role="alert">
    <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
        Error
    </div>
    <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
        <p><?php echo e(Session::get('error')); ?></p>
    </div>
</div>
<?php endif; ?>
<?php /**PATH C:\Users\adral\Desktop\UniversityRatingTogo\resources\views/components/alert-error.blade.php ENDPATH**/ ?>