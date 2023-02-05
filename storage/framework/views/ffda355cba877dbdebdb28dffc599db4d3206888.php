
<!-- 本: 削除ボタン -->
<div class="flex justify-between p-4 items-center bg-blue-500 text-white rounded-lg border-2 border-white">
  <div><?php echo e($slot); ?></div>
  
    <div>
    <form action="<?php echo e(url('booksedit/'.$id)); ?>" method="POST">
         <?php echo csrf_field(); ?>
         
        <button type="submit"  class="btn bg-blue-500 rounded-lg">
            更新
        </button>
        
     </form>
  </div>
  
  <div>
    <form action="<?php echo e(url('book/'.$id)); ?>" method="POST">
         <?php echo csrf_field(); ?>
         <?php echo method_field('DELETE'); ?>
        
        <button type="submit"  class="btn bg-blue-500 rounded-lg">
            削除
        </button>
        
     </form>
  </div>

</div><?php /**PATH /home/ec2-user/environment/cms/resources/views/components/collection.blade.php ENDPATH**/ ?>