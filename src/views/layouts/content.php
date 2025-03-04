<?php
/* @var $content string */

use yii\bootstrap4\Breadcrumbs;
use ingjordannunez\adminlte3\widgets\Alert;

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header pb-0">
        <div class="container-fluid">
            <div class="row mb-2">
                <!-- <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <?php
                        if (!is_null($this->title)) {
                            //echo \yii\helpers\Html::encode($this->title);
                        } else {
                            //echo \yii\helpers\Inflector::camelize($this->context->id);
                        }
                        ?>
                    </h1>
                </div> --><!-- /.col -->
                <div class="col-sm-12">
                    <?php
                    echo Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        'options' => [
                            'class' => 'float-sm-left'
                        ]
                    ]);
                    ?>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <?= Alert::widget() ?>
        <?= $content ?><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
