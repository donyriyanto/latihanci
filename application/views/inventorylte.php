<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kci_inventory";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
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
              <h3 class="box-title">Data Inventaris</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
         
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Merek</th>
                  <th>Lokasi</th>
                  <th>No Pengadaan</th>
                </tr>
                </thead>
                <tbody>

<?php
$sql = "SELECT * FROM tblinventory";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["id"] . "</td>
        <td>" . $row["nama"] ."</td>
        <td>" . $row["merek"] ."</td>
        <td>" . $row["lokasi"] . "</td>
        <td>" . $row["nopengadaan"] . "</td>
        </tr>";
    }

} else {
    echo "0 results";
}
$conn->close();
?> 
                    
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
  