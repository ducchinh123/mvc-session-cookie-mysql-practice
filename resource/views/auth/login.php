<div class="row p-3">
    <form method="POST" action="?mod=auth&act=get_login">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div class="text-danger"><?php if (isset($email))
                echo $email; ?></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            <div class="text-danger"><?php if (isset($password))
                echo $password; ?></div>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" name="login" class="btn btn-primary">Submit</button>
    </form>
</div>