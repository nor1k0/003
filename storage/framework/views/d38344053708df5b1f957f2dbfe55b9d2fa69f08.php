<!-- resources/views/components/errors.blade.php -->
<?php if(count($errors) > 0): ?>
    <!-- Form Error List -->
    <div class="flex justify-between p-4 items-center bg-red-500 text-white rounded-lg border-2 border-white">
        <div><strong>入力した文字を修正してくた?さい。</strong></div> 
        <div>
            <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
<?php endif; ?><?php /**PATH /home/ec2-user/environment/cms/resources/views/components/errors.blade.php ENDPATH**/ ?>