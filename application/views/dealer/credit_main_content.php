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

                    <div class="control-group">
                        <div class="control-label">Mail (Kullanıcı Adı)</div>

                        <div class="controls">
                            <div class="input-icon left">
                                <i class="icon-envelope"></i>


                                <input class="span6  required Mail" id="DealerMail" name="DealerMail" placeholder="Girilmesi Zorunlu" required="form-control" type="text" value="<?php echo (is_null($model)) ? "" :$model->mail?>" />
                                <span class="field-validation-valid text-danger" data-valmsg-for="DealerMail" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                    </div>


                    <div class="control-group">
                        <div class="control-label"> Kullanıcı Şifresi</div>
                        <div class="controls">
                            <input class="span6  required password" id="DealerPass" name="DealerPass"
                                   placeholder="Girilmesi Zorunlu" required="form-control" type="text" value="<?php echo (is_null($model)) ? "" :$model->password?>" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="DealerPass" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="control-label">Ad Soyad</div>
                        <div class="controls">
                            <input class="span6  text-box single-line" id="DealerAuthority" name="DealerAuthority" type="text" value="<?php echo (is_null($model)) ? "" :$model->name?>" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="DealerAuthority" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="control-label">Tel</div>
                        <div class="controls">
                            <input class="span6  required password" id="DealerPhone" name="DealerPhone"
                                   placeholder="Girilmesi Zorunlu" required="form-control" type="text" value="<?php echo (is_null($model)) ? "" :$model->phone1?>" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="DealerPhone" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="control-label">Mobil Telefonu</div>
                        <div class="controls">
                            <input class="span6  text-box single-line" id="DealerMobilPhone" name="DealerMobilPhone" type="text" value="<?php echo (is_null($model)) ? "" :$model->mobil?>" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="DealerMobilPhone" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="control-label">Telefon No 2</div>
                        <div class="controls">
                            <input class="span6  text-box single-line" id="DealerPhone2" name="DealerPhone2" type="text" value="<?php echo (is_null($model)) ? "" :$model->phone2?>" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="DealerPhone2" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="control-label">Adres</div>
                        <div class="controls">
                            <input class="span6  text-box single-line" id="DealerAddress" name="DealerAddress" type="text" value="<?php echo (is_null($model)) ? "" :$model->address?>" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="DealerAddress" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="IBAN">IBAN</label>
                        <div class="controls">
                            <input class="span6  text-box single-line" id="IBAN" name="IBAN" type="text" value="<?php echo (is_null($model)) ? "" :$model->iban?>" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="IBAN" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="control-label">Banka Adı</div>
                        <div class="controls">
                            <input class="span6  text-box single-line" id="BankName" name="BankName" type="text" value="<?php echo (is_null($model)) ? "" :$model->bankName?>" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="BankName" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="control-label">Hesap Adı</div>
                        <div class="controls">
                            <input class="span6  text-box single-line" id="AccountName" name="AccountName" type="text" value="<?php echo (is_null($model)) ? "" :$model->accountname?>" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="AccountName" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="control-label">Vergi No</div>
                        <div class="controls">
                            <input class="span6  text-box single-line" id="TaxNo" name="TaxNo" type="text" value="<?php echo (is_null($model)) ? "" :$model->taxNo?>" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="TaxNo" data-valmsg-replace="true"></span>
                        </div>
                    </div>



                    <div class="control-group">
                        <label class="control-label">Aktif</label>
                        <div class="controls">
                            <input type="checkbox" id="Status" checked data-toggle="toggle"  style="width:  20px !important; height: 20px !important ;" value="<?php echo (is_null($model)) ? "" :$model->isActive?>">

                        </div>
                    </div>







                    <div class="control-group">
                        <label class="control-label" for="Domain">Domain</label>
                        <div class="controls">
                            <input class="span6  required" id="Domain" name="Domain" placeholder="Girilmesi Zorunlu" required="form-control" type="text" value="<?php echo (is_null($model)) ? "" :$model->domain?>" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="Domain" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="control-label">Logo</div>
                        <div class="controls">

                            <input type="file" name="Logo" class="span6  required" required=""  value="<?php echo (is_null($model)) ? "" :$model->logo?>" /><span class="help-inline">Boyut 195x58 olacak</span>
                            <span class="field-validation-valid text-danger" data-valmsg-for="Logo" data-valmsg-replace="true"></span>

                        </div>
                    </div>



                    <div class="control-group">
                        <div class="control-label">Yüzde</div>
                        <div class="controls">
                            <input class="span6  required" id="persentage" name="Domain" placeholder="0 ile 1 arasında değer giriniz (Örn=0,3)" required="form-control" type="text" value="<?php echo (is_null($model)) ? "" :$model->isActive?>" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="Percentage" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="control-label">Hakkimizda</div>
                        <div class="controls">
                        <textarea cols="20" id="BlogContent" name="AboutUs" rows="2" data-value="<?php echo (is_null($model)) ? "" :$model->aboutUs?>">
                        </textarea>

                            <script>

                                // Replace the <textarea id="editor1"> with a CKEditor
                                // instance, using default configuration.
                                CKEDITOR.replace('BlogContent');
                            </script>
                            <span class="field-validation-valid text-danger" data-valmsg-for="AboutUs" data-valmsg-replace="true"></span>
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


