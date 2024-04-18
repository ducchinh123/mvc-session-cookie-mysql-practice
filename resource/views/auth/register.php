<div class="row p-3">
    <form method="POST" action="?mod=auth&act=get_register">
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control">
            <div class="text-danger"><?php if (isset($username))
                echo $username; ?></div>

        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
            <div class="text-danger"><?php if (isset($email))
                echo $email; ?></div>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
            <div class="text-danger"><?php if (isset($password))
                echo $password; ?></div>
        </div>
        <button type="submit" name="register" class="btn btn-primary">Submit</button>
    </form>
</div>