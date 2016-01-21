<style type="text/css">
    input[type="text"]:focus,  input[type="email"]:focus, input[type="select"]:focus{
   border:solid 2px gray;    
    outline:solid 2px silver;
    background-color: #FDF5E6
}
option:checked, option:hover {
    color: white;
    background: #C0C0C0;
}

</style>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <h5 class="row-title before-magenta col-lg-8 col-sm-8 col-xs-8"><i class="fa fa-edit magenta"></i>نموذج تسجيل مريض</h5>
        <div class="row">
            <div class="col-lg-8 col-sm-8 col-xs-12">
                <div class="widget flat radius-bordered">

                    <div class="widget-body">
                        <div id="registration-form">
                            <div class="form-title">
                                المعلومات الشخصية
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <span class="input-icon icon-right">
                                            <input type="text" name="pa_Nationalid" id="pa_Nationalid" class="form-control" placeholder="رقم الهوية">
                                            <i class="fa  fa-arrow-circle-right"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <span class="input-icon icon-right">
                                            <input type="text" name="pa_firstname" id="pa_firstname" class="form-control" placeholder="االاسم الأول">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <span class="input-icon icon-right">
                                            <input type="text" name="pa_fathername" id="pa_fathername" class="form-control" placeholder="اسم الاب">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <span class="input-icon icon-right">
                                            <input type="text" name="pa_grandname" id="pa_grandname" class="form-control" placeholder="اسم الجد">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <span class="input-icon icon-right">
                                            <input type="text" name="pa_familyname" id="pa_familyname" class="form-control" placeholder="اسم العائلة">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <span class="input-icon icon-right">
                                            <input type="date" name="pa_dob" id="pa_dob" class="form-control">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <span class="input-icon icon-right">
                                            <input type="text" name="pa_job" id="pa_job" class="form-control" placeholder="الوظيفة">
                                            <i class="fa  fa-tasks"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select class="form-control" id="pa_gender">
                                            <option>اختر الجنس</option>
                                            <option>ذكر</option>
                                            
                                            <option>أنثى</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select class="form-control" id="pa_">
                                            <option>أختر الحالة الاجتماعية</option>
                                            <option>أعزب</option>
                                            <option>متعدد الزوجات</option>
                                            <option>متزوج</option>
                                            <option>مطلق</option>
                                            <option>ارمل</option>
                                        </select>
                                    </div>
                                </div>


                            </div>
                            <hr class="wide" />
                            <div class="form-title">
                                معلومات الاتصال
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="input-icon icon-right">
                                            <input type="text" class="form-control" id="pa_phone" placeholder="رقم الهاتف الارضي">
                                            <i class="glyphicon glyphicon-earphone"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="input-icon icon-right">
                                            <input type="text" class="form-control" id="pa_mobile" placeholder="رقم الهاتف النقال">
                                            <i class="glyphicon glyphicon-phone"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="input-icon icon-right">
                                            <input type="text" class="form-control" id="pa_username" placeholder="اسم المستخدم">
                                            <i class="fa fa-user circular"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="input-icon icon-right">
                                            <input type="email" class="form-control" id="pa_email" placeholder="البريد الالكتروني">
                                            <i class="fa fa-envelope-o circular"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="input-icon icon-right">
                                            <input type="text" class="form-control" id="pa_pwd" placeholder="كلمة المرور">
                                            <i class="fa fa-lock circular"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="input-icon icon-right">
                                            <input type="text" class="form-control" id="pa_repwd" placeholder="تأكيد كلمة المرور">
                                            <i class="fa fa-lock circular"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <hr class="wide" />
                            <div class="form-title">
                                العنوان بالكامل
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select class="form-control" id="country">
                                            <option>أختر الدولة</option>
                                            <option>أعزر</option>
                                            <option>متعدد الزوجات</option>
                                            <option>متزوج</option>
                                            <option>مطلق</option>
                                            <option>ارمل</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select class="form-control" id="city">
                                            <option>أختر المدينة</option>
                                            <option>أعزر</option>
                                            <option>متعدد الزوجات</option>
                                            <option>متزوج</option>
                                            <option>مطلق</option>
                                            <option>ارمل</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <span class="input-icon icon-right">
                                            <input type="text" class="form-control" id="pa_street" placeholder="الشارع">
                                            <i class="fa fa-lock circular"></i>
                                        </span>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <span class="input-icon icon-right">
                                            <input type="text" class="form-control" id="pa_longitude" placeholder="خط الطول">
                                            <i class="fa fa-long-arrow-up circular"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <span class="input-icon icon-right">
                                            <input type="text" class="form-control" id="pa_latitude" placeholder="خط العرض">
                                            <i class="fa  fa-long-arrow-right circular"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <hr class="wide" />
                            <div class="form-title">
                                معلومات أخرى
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <span class="input-icon icon-right">
                                            <input type="text" class="form-control" id="pa_chronicdiseases" placeholder="امراض مزمنة">
                                            <i class="fa fa-long-arrow-up circular"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="pa_smoke" class="colored-blue">
                                                <span class="text">هل تدخن</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-md-offset-2">  
                                    <button type="submit" id="pa_savenew" class="btn btn-blue col-sm-12">تسجيل</button>
                                </div>
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/js/jquery-2.0.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
$('document').ready(function(){
    $('#pa_Nationalid').change(function(){
        var obj = {
            f_name: 'احمد',
            s_name: 'محمد',

        }
        if($(this).val() == '801896879'){
            $('#pa_firstname').val(obj.f_name);
            $('#pa_fathername').val(obj.s_name);
        }else{
            $('#pa_firstname').val('');
            $('#pa_fathername').val('');
        }
        
    });
});
</script>