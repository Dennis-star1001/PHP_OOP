<?php  ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>

            <?php

            // $user = new User();
            // $user->username = "Worldbest";
            // $user->password = "1234";
            // $user->first_name = "Charity";
            // $user->last_name = "Love";

            // $user->create();

            
            // $user = User::find_user_by_id(2);
            // $user->delete();


   
            $user = User::find_user_by_id(3);
            $user->password = "qwwertyuops";
            $user->save();

            // $user = new User();
            // $user->password = "qwwertyuops";
            // $user->save();



            ?>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>