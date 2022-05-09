<?php
    include_once 'includes/header.php';
    include_once '../dbconfig/connection.php';

    $sql = 'SELECT * FROM tourguide';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $res = $stmt->fetchAll();
?>

    <li>
                    <a class="active" href="#">Tourguides</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="d-grid gap-2">
    <button class="btn btn-primary" type="button"><h1>Tour Guides</h1></button>
    
    <table class="table">
    <tdead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">F Name</th>
        <th scope="col">L Name</th>
        <th scope="col">Email</th>
        <th scope="col">Age</th>
        <th scope="col">Qualification</th>
        <th scope="col">Experience</th>
        <th scope="col">Lang</th>
        <th scope="col">Salary</th>
        <th scope="col">Action</th>
        </tr>
    </tdead>
    <tbody>
      <?php foreach ($res as $i => $tourguide):?>
        <tr>
        <td scope="row"><?php echo $i + 1 ?></td>
        <td scope="row"><?php echo $tourguide['name']?></td>
        <td scope="row"></td>
        <td scope="row"><?php echo $tourguide['email']?></td>
        <td scope="row"><?php echo $tourguide['age']?></td>    
        <td scope="row"><?php echo $tourguide['qualification']?></td>      
        <td scope="row"><?php echo $tourguide['experience']?></td>      
        <td scope="row"><?php echo $tourguide['lang']?></td>      
        <td scope="row"><?php echo $tourguide['salaryPerHour']?></td>      
        <td scope="row">
          <a href = "deleteTourGuide.php?id=<?php echo $tourguide['id'];?>" class="btn btn-sm btn-outline-danger">Delete</a>
        </td>      
        </tr>
        <tr>
      <?php endforeach;?>
    </tbody>
    </table> 

    <div class="d-grid gap-2 col-6 mx-auto">
      <a class="btn btn-primary" href="addTourGuides.php">Add</a>
    </div>
 

<?php
    include_once 'includes/footer.php';
?>