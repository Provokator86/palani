<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- Section: main -->
<section id="main">
    <div class="container">
        <div class="row">
            <!-- breadcrumb -->
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url(); ?>"><?php echo html_escape(trans("home")); ?></a>
                    </li>
                    <li class="breadcrumb-item active">
                        <?php echo html_escape($author->username); ?></li>
                    </li>
                </ol>
            </div>

            <div class="page-content">
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="content">
                        <div class="col-sm-12">
                            <div class="row">

                                <h1 class="page-title"> <?php echo html_escape(trans("author")); ?>
                                    : <?php echo html_escape($author->username); ?>

                            </div>
                        </div>


                        <!-- posts -->
                        <div class="col-xs-12 col-sm-12 posts <?php echo ($layout == "layout_3" || $layout == "layout_6") ? 'p-0 posts-boxed' : ''; ?>">
                            <div class="row">
                                <?php $count = 0; ?>
                                <?php foreach ($posts as $item): ?>

                                    <?php if ($count != 0 && $count % 2 == 0): ?>
                                        <div class="col-sm-12 col-xs-12"></div>
                                    <?php endif; ?>

                                    <!-- post item -->
                                    <?php $this->load->view('blog/partials/_post_item', ['item' => $item]); ?>
                                    <!-- /.post item -->

                                    <?php if ($count == 1): ?>

                                        <?php $this->load->view("blog/partials/_ad_spaces", ["ad_space" => "profile_top"]); ?>

                                    <?php endif; ?>

                                    <?php $count++; ?>

                                <?php endforeach; ?>


                            </div><!-- /.posts -->
                        </div>

                        <div class="col-xs-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <?php $this->load->view("blog/partials/_ad_spaces", ["ad_space" => "profile_bottom"]); ?>
                            </div>
                        </div>

                        <!-- Pagination -->
                        <div class="col-xs-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <?php echo $this->pagination->create_links(); ?>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-4">
                    <!--Sidebar-->
                    <?php $this->load->view('blog/partials/_sidebar'); ?>
                </div><!--/col-->

            </div>
        </div>
    </div>
</section>
<!-- /.Section: main -->

