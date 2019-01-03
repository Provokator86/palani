<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?php echo html_escape($post_count); ?></h3>
                    <p><?php echo trans("posts"); ?></p>
                </div>
                <div class="icon">
                    <i class="fa fa-file"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin_post/posts" class="small-box-footer"><?php echo trans("more_info"); ?> <i
                            class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><?php echo html_escape($pending_post_count); ?></h3>
                    <p><?php echo trans("pending_posts"); ?></p>
                </div>
                <div class="icon">
                    <i class="fa fa-low-vision"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin_post/pending_posts" class="small-box-footer"><?php echo trans("more_info"); ?> <i
                            class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->


        <?php if (is_admin()): ?>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?php echo html_escape($comment_count); ?></h3>
                        <p><?php echo trans("comments"); ?></p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-comments"></i>
                    </div>
                    <a href="<?php echo base_url(); ?>admin/comments" class="small-box-footer"><?php echo trans("more_info"); ?> <i
                                class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?php echo html_escape($user_count); ?></h3>
                        <p><?php echo trans("users"); ?></p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="<?php echo base_url(); ?>admin/users" class="small-box-footer"><?php echo trans("more_info"); ?> <i
                                class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
        <?php endif; ?>
    </div><!-- /.row -->

<?php if (is_admin()): ?>
    <div class="row">
        <div class="col-sm-12 no-padding">

            <div class="col-lg-6 col-sm-12 col-xs-12 hidden">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo trans("comments"); ?></h3>
                        <br>
                        <small><?php echo trans("last_comments_exp"); ?></small>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                        class="fa fa-times"></i>
                            </button>
                        </div>
                    </div>

                    <div class="box-body index-table">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th><?php echo trans("id"); ?></th>
                                    <th><?php echo trans("name"); ?></th>
                                    <th style="width: 60%"><?php echo trans("comment"); ?></th>
                                    <th style="min-width: 13%"><?php echo trans("date_added"); ?></th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach ($last_comments as $item): ?>

                                    <tr>
                                        <td> <?php echo html_escape($item->id); ?> </td>
                                        <td>
                                            <?php echo html_escape($item->username); ?>
                                        </td>
                                        <td style="width: 60%" class="break-word">
                                            <?php echo html_escape($item->comment); ?>
                                        </td>
                                        <td style="min-width: 13%">
                                            <?php echo nice_date($item->created_at, 'd.m.Y'); ?>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                       
                    </div>

                    <div class="box-footer clearfix">
                        <a href="<?php echo base_url(); ?>admin/comments"
                           class="btn btn-sm btn-default btn-flat pull-right"><?php echo trans("view_all"); ?></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-12 col-xs-12 hidden">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo trans("contact_messages"); ?></h3>
                        <br>
                        <small><?php echo trans("last_contact_messages_exp"); ?></small>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                        class="fa fa-times"></i>
                            </button>
                        </div>
                    </div><!-- /.box-header -->

                    <div class="box-body index-table">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th><?php echo trans("id"); ?></th>
                                    <th><?php echo trans("name"); ?></th>
                                    <th style="width: 60%"><?php echo trans("message"); ?></th>
                                    <th style="min-width: 13%"><?php echo trans("date"); ?></th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach ($last_contacts as $item): ?>

                                    <tr>
                                        <td>
                                            <?php echo html_escape($item->id); ?>
                                        </td>
                                        <td>
                                            <?php echo html_escape($item->name); ?>
                                        </td>
                                        <td style="width: 60%" class="break-word">
                                            <?php echo html_escape($item->message); ?>
                                        </td>
                                        <td style="min-width: 13%">
                                            <?php echo nice_date($item->created_at, 'd.m.Y'); ?>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>

                    <div class="box-footer clearfix">
                        <a href="<?php echo base_url(); ?>admin/contact_messages"
                           class="btn btn-sm btn-default btn-flat pull-right"><?php echo trans("view_all"); ?></a>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-sm-12 no-padding margin-bottom-20">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <!-- USERS LIST -->
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo trans("users"); ?></h3>
                        <br>
                        <small><?php echo trans("latest_users_exp"); ?></small>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                        class="fa fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <ul class="users-list clearfix">

                            <?php foreach ($last_users as $item) : 

                                if($item->email !='superadmin@admin.com'){

                                     $currentuser = get_userdata_by_id($item->email);                                    $profile_img = '';
                                    $social_profile_img = '';
                                    if(isset($currentuser['profile_img'])&&!empty($currentuser['profile_img'])){
                                        $profile_img = $currentuser['profile_img'];
                                    }                           
                                    if(isset($currentuser['picture_url'])&&!empty($currentuser['picture_url'])){
                                        $social_profile_img = $currentuser['picture_url'];
                                    }
                                    $img1 = '';
                                    if($social_profile_img != ''){
                                        $img1 = $social_profile_img;
                                    }
                                    if($profile_img != ''){
                                        $file_to_check = FCPATH . '/assets/images/' . $profile_img;
                                        if (file_exists($file_to_check)) {
                                            $img1 = base_url() . 'assets/images/'.$profile_img;
                                        }
                                    }
                                    $img = ($img1 != '') ? $img1 : base_url() . 'assets/images/default-avatar.png';


                                ?>
                                <li>
                                    <a>
                                        
                                            <img src="<?php echo $img; ?>" alt="user"
                                                 class="img-responsive">
                                     
                                    </a>
                                    <a class="users-list-name"><?php echo html_escape($item->username); ?></a>
                                 <!--    <span class="users-list-date"><?php echo nice_date($item->created_at, 'd.m.Y'); ?></span> -->
                                </li>

                            <?php } endforeach; ?>

                        </ul>
                        <!-- /.users-list -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-center">
                        <a href="<?php echo base_url(); ?>admin/users" class="btn btn-sm btn-default btn-flat pull-right"><?php echo trans("view_all"); ?></a>
                    </div>
                    <!-- /.box-footer -->
                </div>
                <!--/.box -->
            </div>
        </div>
    </div>
    <!-- /.row -->
<?php endif; ?>