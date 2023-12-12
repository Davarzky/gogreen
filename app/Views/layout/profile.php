
    <div class="container">
       <form action="<?= site_url('/UserController/updateProfile') ?>" method="post">

            <?php if(isset($user)): ?>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="username" value="<?= $user['username'] ?>" required>

                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="email" value="<?= $user['email'] ?>" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="password">
            <?php else: ?>
                <p>User not found.</p>
            <?php endif; ?>

       </form>
    </div>
