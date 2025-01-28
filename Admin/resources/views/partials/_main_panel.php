<div class="main-panel">
          <div class="content-wrapper">
           
            <div class="page-header">

              <h3 class="page-title">İstifadəçilər</h3>
           <a href="../resources/views/components/_user_add.php">
            <button class="btn btn-info">
              Add
            </button>
           </a>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  
                 
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                   
                    </p>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                          <th>Id</th>
                            <th>Email</th>
                            <th>Şifrə</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                         
                        <?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include database connection

// ob_start();

// phpinfo(INFO_MODULES);
$dsn = 'mysql:host=127.0.0.1;dbname=corona';
$username = 'qurbani'; // Replace with your MySQL username
$password = '1992'; // Replace with your MySQL password

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection successful!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Check if $pdo is defined
if (!isset($pdo)) {
    die("Database connection not established.");
}

$sql = "SELECT * FROM admin_user";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll();

if (!$users) {
    echo "<tr><td colspan='5'>No data found!</td></tr>";
} else {
    foreach ($users as $user) {
        ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['password']; ?></td>
            <td>
                <a class="btn btn-success" href="../resources/views/components/edit.php?id=<?php echo $user['id']; ?>">
                    Edit
                </a>
            </td>
            <td>
                <a class="btn btn-danger" href="../resources/views/components/delete.php?id=<?php echo $user['id']; ?>">
                    Delete
                </a>
            </td>
        </tr>
        <?php
    }
}
?>



                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
             
             
             
             
           
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->