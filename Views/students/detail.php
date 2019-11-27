    <?php
    if (isset($data['student'])) {
        foreach ($data['student'] as $rows) {
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <ul class="list-group">
                            <li class="list-group-item"><strong>ID :</strong> <?php echo $rows['id'] ?></li>
                            <li class="list-group-item"><strong>Name :</strong> <?php echo $rows['name'] ?></li>
                            <li class="list-group-item"><strong>Sex :</strong> <?php echo $rows['sex'] ?></li>
                            <li class="list-group-item"><strong>Mark :</strong> <?php echo $rows['mark'] ?></li>
                        </ul>
                        <a href="index.php" class="btn btn-primary mt-3">Go Back</a>
                    </div>
                    <div class="col-4"></div>
                </div>
            </div>
    <?php
        }
    }
    ?>