<div>
    <h1>Divisible by 3, 4 and 5.</h1><br>
    <p>Try to input an integer. This program will get all the numbers from 1 to the number you input.
        And it will get all the numbers divisible by 2, 3 and 5.
    </p>
    <form method="post">
        <input name="number" type="number" placeholder="Input an integer....." value="1">
        <input name="divisible" type="submit" value="Try">
    </form>

    <div class="row">
        <div class="col-sm-12 col-md-3">
            <div style="overflow-y: scroll; height: 490px" class="card card1">
                <div class="container">
                    <div class="card-header">Number from 1-15</div>
                    <div class="card-body">
                        <?php
                                include("..\Day1\Exercise1&2.php");
                                $numbers = [];
                                $act1 = new Activity1($numbers);
                                if(isset($_POST['divisible'])){
                                    $act1->getAllNumbers($_POST["number"]);
                                }
                            ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-3">
            <div class="card card1">
                <div class="card-header">Divisible by 2</div>
                <div class="card-body">
                    <?php
                            $act1->get_all_numbers_divisible_by2();
                        ?>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-3">
            <div class="card card1">
                <div class="card-header">Divisible by 3</div>
                <div class="card-body">
                    <?php
                            $act1->get_all_numbers_divisible_by3();
                        ?>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-3">
            <div class="card card1">
                <div class="card-header">Divisible by 5</div>
                <div class="card-body">
                    <?php
                        $act1->get_all_numbers_divisible_by5();
                    ?>
                </div>
            </div>
        </div>
    </div>

</div>
<br>
<hr>
<div>
    <h1>Triangular pattern</h1><br>
    <form method="post">
        <div>
            <input name="string" type="text" value="*" />
            <input name="form_pattern" type="submit" value="Try">
        </div>
    </form>

    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Triangular pattern</h3>
                        </div>
                        <div class="card-body">
                            <center>
                                <?php 
                                        include("..\Day1\Exercise3.php");
                                        if(isset($_POST["form_pattern"])) {
                                            form_pattern($_POST["string"]);
                                        }
                                    ?>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>