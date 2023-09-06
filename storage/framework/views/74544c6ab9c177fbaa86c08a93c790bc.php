<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php if(auth()->guard()->check()): ?>
    <p>Congrats you are logged in.</p>
    <form action="/logout" method="POST">
    <?php echo csrf_field(); ?>
    <button>Log out</button>
    </form>

    <div style="border: 3px solid black;">
        <h2>Create a New Post</h2>
        <form action="/create-post" method="post">
            <?php echo csrf_field(); ?>
            <input name="title" type="text" placeholder="Title">
            <textarea name="body" type="text" placeholder="Body content..."></textarea>
            <button>Submit</button>
        </form>
    </div>

    <?php else: ?>
    <div style="border: 3px solid black;">
        <h2>Register</h2>
        <form action="/register" method="post">
            <?php echo csrf_field(); ?>
            <input name="name" type="text" placeholder="name">
            <input name="email" type="text" placeholder="email">
            <input name="password" type="password" placeholder="password">
            <button>Register</button>
        </form>
    </div>
    <div style="border: 3px solid black;">
        <h2>Login</h2>
        <form action="/login" method="post">
            <?php echo csrf_field(); ?>
            <input name="loginname" type="text" placeholder="name">
            <input name="loginpassword" type="password" placeholder="password">
            <button>Login</button>
        </form>
    </div>
    <?php endif; ?>


    
    
</body>
</html><?php /**PATH C:\Users\Stavros\OneDrive\Έγγραφα\firstlaravelapp\resources\views/home.blade.php ENDPATH**/ ?>