<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6" style="margin-top:100px;">
            <div class="card">
                <div class="card-header bg-primary">
                    <h2 class="text-center text-white">ADD NEW USER</h2>
                </div>
                <div class="card-body">
                    <form action="index.php?action=add_userdata" method="post">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="role">Role:</label>
                            <select name="role" id="role" class="form-control">
                                <option value="1">Admin</option>
                                <option value="2">Normal user</option>
                            </select>
                        </div>
                        <a href="index1.php?action=material" class="btn btn-success">Go Back</a>
                        <input type="submit" name="button" id="button" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>