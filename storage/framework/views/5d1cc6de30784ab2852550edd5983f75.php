<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 bg-green-200">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>
                

                <div class="card-body bg-indigo-300">

                    <strong>WELCOME</strong>
                    <br>
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('You are logged in!')); ?>

                </div>
                <div class="card-body">
                    <div class=" py-4 px-4 mx-auto max-w-2xl lg:py-16">
                        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Highlight your Achievements</h2>
                        <?php if($errors->any()): ?>
                          <div class="alert alert-danger">
                              <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </ul>
                          </div>
                        <?php endif; ?> 
                        <form method="Post" action="<?php echo e(url('jobs')); ?>" >
                            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                <div class="sm:col-span-2">
                                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Educational Attainment</label>
                                    <input type="text" name="description" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Education" required="">
                                </div>
                                <div class="w-full">
                                    <label for="qualification" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Location</label>
                                    <input type="text" name="qualification" id="qualification" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Address" required="">
                                </div>
                                <div class="w-full">
                                    <label for="salary" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Salary Expectation</label>
                                    <input for="number" name="salary" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="PHP" required="">
                                </div>
                                <div>
                                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                    <select name="category" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option selected="">Select category</option>
                                        <option value="Accounting">Accounting and Finance</option>
                                        <option value="Admin">Administrative</option>
                                        <option value="Engineering">Engineering</option>
                                        <option value="Freelance">Freelancing</option>
                                    </select>
                                </div>
                                <br>
                                <div class="sm:col-span-2">
                                    <label name="other" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Notes and Other Qualifications</label>
                                    <textarea id="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Your description here"></textarea>
                                  </div>
                            </div>
                        </form>
                        <button type="submit" class=" bg-blue-500 inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-black bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                          <a href="<?php echo e(url('jobs')); ?>"></a>
                          Save
                      </button>
                  
                    </div>

                    




                </div>


            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jonne\Tunay\resources\views/home.blade.php ENDPATH**/ ?>