<div id="main-content">
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">

            <!-- END THEME CUSTOMIZER-->
            <h3 class="page-title">
                Dashboard
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Home</a>
                    <span class="divider">/</span>
                </li>
                <li>
                    <a href="#">Metro Lab</a>
                    <span class="divider">/</span>
                </li>
                <li class="active">
                    Dashboard
                </li>
                <li class="pull-right search-wrap">
                    <form action="http://thevectorlab.net/metrolab/search_result.html" class="hidden-phone">
                        <div class="input-append search-input-area">
                            <input class="" id="appendedInputButton" type="text">
                            <button class="btn" type="button"><i class="icon-search"></i> </button>
                        </div>
                    </form>
                </li>
            </ul>
            <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- END PAGE TITLE & BREADCRUMB-->

    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->


    <div class="widget green">

        <div class="widget-title">
            <h4><i class="icon-reorder"></i> Bayiler </h4>
            <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            <a href="javascript:;" class="icon-remove"></a>
                            </span>
        </div>
        <div class="widget-body">
                <!-- BEGIN FORM-->
                <form action="<?php  echo base_url($action) ?> "  class="form-horizontal" method="post">




                    <div class="control-group">
                        <div class="control-label"> Bayi Adı</div>
                        <div class="controls">
                            <input class="span6  required" id="DealerName" name="DealerName" placeholder="Girilmesi Zorunlu" required="form-control" type="text" value="<?php echo (is_null($model)) ? "" :$model->name?>" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="DealerName" data-valmsg-replace="true"></span>
                        </div>
                    </div>


                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Kaydet</button>

                    </div>

                </form>
                <!-- END FORM-->
            </div>
        </div>
    </div>
    </div>
</div>


