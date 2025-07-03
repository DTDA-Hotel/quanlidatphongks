<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo e(asset(url(''))); ?>/admin/css/signup.css">

<html>
<head><title>ADD</title>




</head>
<body>


<div class="page-container">
            
            <form action="<?php echo e(route('postRegister')); ?>" method="POST">
            <?php echo csrf_field(); ?>
			<h1>Sign Up</h1>
                <input type="text" name="name" class="Name" placeholder="Name">
				<input type="text" name="email" class="Email" placeholder="Email">
				<input type="password" name="password" class="Address" placeholder="password">
                <button type="submit" value="Add" name="submit">Submit</button>
            </form>
        </div>
		

</body>
</html><?php /**PATH C:\Users\Admin\Videos\Captures\quanlidatphongks\resources\views/auth/register.blade.php ENDPATH**/ ?>