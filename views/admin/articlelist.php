<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
  <?php $this->load->view('admin/meta')?>
  <title>所有文章</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/common/bower_components/select2/dist/css/select2.min.css')?>">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <?php $this->load->view('admin/header') ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        所有文章
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
        <li><a href="#">文章管理</a></li>
        <li class="active">所有文章</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        <div class="box">
          <div class="box-header with-border">
            <div class="operatepanel action_box">
              <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#searchpanel" aria-expanded="false" aria-controls="#searchpanel" id="clicksearch">点击筛选&nbsp; <i class="fa fa-angle-left"></i></button>
              <button type="button" class="btn btn-primary" id="selecteddel">选中删除</button>
              <a href="newblog.html" class="btn btn-info" id="addoperate">撰写新文章</a>
            </div>
            <div class="collapse" id="searchpanel">
            <form id="searchform" action="" method="post">  
              <input type="hidden" name="page_index" value="1">
              <input type="hidden" name="page_size" value="10">
              <div class="row">
                 <div class="col-xs-4 form-group">
                    <label for="name">模块</label>
                    <select name="moduleids[]" multiple class="select2" style="width: 100%" id="chosemodule">
                      <?php foreach ($modules as $key => $module): ?>
                        <option value="<?php echo $module->id?>"><?php echo $module->name ?></option>
                      <?php endforeach ?>                      
                    </select>
                  </div>
                  <div class="col-xs-4 form-group">
                    <label for="tenantry">标签</label>
                    <select name="tagids[]" multiple class="select2" style="width: 100%" id="chosetags">
                      <option value="1">php</option>
                    </select>
                  </div>
                  <div class="col-xs-4 form-group">
                    <label for="title">文章标题</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="文章标题">
                  </div>
              </div>
              <div class="row">
                <div class="col-xs-4 form-group">
                    <label for="create_time">创建时间</label>
                    <input type="text" class="form-control" onclick="WdatePicker({maxDate:'%y-%M-%d'});" placeholder="点击选择创建时间" name="create_time">
                  </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <button type="button" class="btn btn-primary min_w_100" onclick="searchCustomer(true)"><i class="fa fa-search"></i>&nbsp;搜索</button>
                  &nbsp;&nbsp;                
                  <button type="reset" id="resetSearch" class="btn btn-info min_w_100"><i class="fa fa-refresh"></i>&nbsp;重置</button>
                </div>
              </div>
              </form>
            </div>
          </div>
          <div class="box-body">
            <form id="operateform">  
            <div class="row">
              <div class="col-xs-12">
                 <div class=" table-responsive">
                    <table class="table table-hover table-striped table-bordered table-condensed">
                      <thead>
                        <tr>
                          <th class="text-center"><input type="checkbox"></th>
                          <th class="text-center">id</th>
                          <th>所属模块</th> 
                          <th>标签</th>   
                          <th>标题</th>   
                          <th>备注</th>             
                          <th>创建时间</th>                
                          <th>最后修改时间</th>
                          <th>操作</th>
                        </tr>
                      </thead>
                      <tbody id="ajaxcontent">
                         <tr>
                          <td class="text-center"><input type="checkbox" name="[]" value=""></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tbody>  
                    </table>
                </div>  
              </div>
            </div>                       
            </form>
          </div>
          <div class="box-footer resultpagination">
                  <div class="row">
                    <div class="col-xs-12 col-sm-3 statistics text-center">
                          <p><span>共<b id="totalnum"><?php echo $totalnum ?></b>条</span> <span>当前第<b id="currentpage"><?php echo $page_index ?></b>页/共<b id="totalpage"><?php echo $total_page ?></b>页</span></p>
                      </div>
                      <div class="col-xs-12 col-sm-3">
                          <div class="dataTables_length" id="example1_length">
                          <label>每页显示&nbsp;
                          <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                          <option value="10">10</option>
                          <option value="25">25</option>
                          <option value="50">50</option>
                          <option value="100">100</option>
                          </select>&nbsp;&nbsp;条
                          </label>
                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-3 text-center">
                        <ul class="pagination">
                          <?php echo $pagestr ?>
                          <!-- <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                          <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li> -->
                       </ul>
                      </div>
                      <div class="col-xs-4 col-xs-offset-4 col-sm-3 col-sm-offset-0">
                          <div class="input-group">
                          <input type="number" name="skippagenum" class="form-control" min="1" max="<?php echo $total_page?>" id="skippagenum">
                          <span class="input-group-addon jumppage">跳转</span>
                        </div>
                      </div>
                  </div>
          </div>
        </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <?php $this->load->view('admin/footer') ?>
  <script src="<?php echo base_url('public/admin/js/articlemana.js')?>"></script>
</body>
</html>
