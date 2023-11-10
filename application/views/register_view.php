    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-7">
                <h4>Form Register</h4>
                <form action="<?php echo site_url('register/adding'); ?>" method="post" class="form-horizontal">
                    <div class="form-group row">
                        <div class="col-sm-2 control-label">Username</div>
                        <div class="col-sm-5">
                            <input type="text" name="username" required class="form-control" placeholder="username" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2 control-label">Password</div>
                        <div class="col-sm-5">
                            <input type="password" name="password" required class="form-control" placeholder="Password" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2 control-label">Name</div>
                        <div class="col-sm-6">
                            <input type="text" name="name" required class="form-control" placeholder="Name" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2 control-label">Lastname</div>
                        <div class="col-sm-6">
                            <input type="text" name="lastname" required class="form-control" placeholder="lastname" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2 control-label">Email</div>
                        <div class="col-sm-6">
                            <input type="email" name="email" required class="form-control" placeholder="Email" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2 control-label">Phone</div>
                        <div class="col-sm-6">
                            <input type="text" name="phone" required class="form-control" placeholder="Phone" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2 control-label"></div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary" name="" required class="form-control" placeholder="lastname">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
