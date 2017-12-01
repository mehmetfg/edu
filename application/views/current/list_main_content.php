
<div id="main-content">


    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN THEME CUSTOMIZER-->
                <div id="theme-change" class="hidden-phone">
                    <i class="icon-cogs"></i>
                    <span class="settings">
                            <span class="text">Theme Color:</span>
                            <span class="colors">
                                <span class="color-default" data-style="default"></span>
                                <span class="color-green" data-style="green"></span>
                                <span class="color-gray" data-style="gray"></span>
                                <span class="color-purple" data-style="purple"></span>
                                <span class="color-red" data-style="red"></span>
                            </span>
                        </span>
                </div>
                <!-- END THEME CUSTOMIZER-->
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
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
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <button class="btn btn-success" onclick="location.href='<?php echo base_url($createBtn) ?>'"><i class="icon-plus"></i> Ekle</button>

        <div class="widget-body">
            <table class="table table-striped table-bordered table-advance table-hover">
                <thead>
                <tr><th><i class="icon-bullhorn"></i> id</th>
                    <th><i class="icon-bullhorn"></i> Company</th>
                    <th class="hidden-phone"><i class="icon-question-sign"></i> Descrition</th>
                    <th><i class="icon-bookmark"></i> Profit</th>
                    <th><i class=" icon-edit"></i> Aktif/Pasif</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($model as  $models) {?>


                    <tr>
                        <td><a href="#"><?php echo getdealer($models->id)?> </td>
                        <td><a href="#"><?php echo $models->name?> </td>
                        <td class="hidden-phone"><?php echo $models->mail?></td>
                        <td><?php echo $models->address?></td>
                        <td>




                            <input type="checkbox" id="isActive"
                                <?php echo ($models->isActive == 1) ?  "checked":  "" ?>
                                   dataID="<?php echo $models->id?>"/>





                        </td>
                        <td>

                            <button class="btn btn-primary" onclick="location.href='<?php echo base_url("dealer/edit/$models->id")?>'"><i class="icon-pencil"></i>
                            </button>
                            <button class="btn btn-danger removeBtn"  dataURL="<?php echo base_url("dealer/savechange?id=$models->id&type=3")?>"> <i class="icon-trash "></i></button>
                        </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>

</div>