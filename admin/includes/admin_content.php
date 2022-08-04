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

            // $users =  User::find_all();
            // foreach ($users as $user) {
            //   echo $user->username;

            // }
            // $user = User::find_by_id(2);
            // $user->username = "Johnny";
            // $user->password = "8888";
            // $user->first_name = "John";
            // $user->last_name = "Seye";
            // $user->update();

            // $user = User::find_user_by_id(2);
            // $user->delete();



            $user = new User();
            $user->username = "Johnny";
            $user->password = "8888";
            $user->first_name = "John";
            $user->last_name = "Seye";
            $user->save();

            // $user = new User();
            // $user->password = "qwwertyuops";
            // $user->save();

            $photos = Photo::find_all();
            foreach ($photos as $photo) {
              echo $photo->title;

            }

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