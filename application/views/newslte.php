  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">News</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
         
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Slug</th>
                  <th>Text</th>
                </tr>
                </thead>
                <tbody>
                    
<?php foreach ($news as $news_item): ?>
    <tr>
        <td><?php echo $news_item['id']; ?></td>
        <td><?php echo $news_item['title']; ?></td>
        <td><?php echo $news_item['slug']; ?></td>
        <td><?php echo $news_item['text']; ?></td>
    </tr>
<?php endforeach; ?>
                    
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  