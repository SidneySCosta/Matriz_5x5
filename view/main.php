<div class="container">
    <div class="table-responsive">
        <div class="col"></div>
        <div class="col">
            <h2><span class="badge bg-primary">Matriz Principal</span></h2>
        </div>
        <div class="col"></div>
    </div>
    <table class="table">
        <?php
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 4; $j++) {
                if ($j == 0) {
                    echo "<tr><td>" . $matrix[$i][$j] . "</td>";
                }
                if ($j == 5) {
                    echo "<td>" . $matrix[$i][$j] . "</td></tr>";
                } else {
                    echo "<td>" . $matrix[$i][$j] . "</td>";
                }
            }
        }
        ?>
    </table>
</div>



<div class="container">
    <div class="table-responsive">
        <div class="col"></div>
        <div class="col">
            <h2><span class="badge bg-primary">Matriz Pares</span></h2>
        </div>
        <div class="col"></div>
    </div>
    <table class="table">
        <?php
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 5; $j++) {
                if ($matrix[$i][$j] % 2 == 0) {
                    if ($j == 0) {
                        echo "<tr><td>" . $matrix[$i][$j] . "</td>";
                    }
                    if ($j == 4) {
                        echo "<td>" . $matrix[$i][$j] . "</td></tr>";
                    } else {
                        echo "<td>" . $matrix[$i][$j] . "</td>";
                    }
                }
            }
        }
        ?>
    </table>
</div>

<div class="container">
    <div class="table-responsive">
        <div class="col"></div>
        <div class="col">
            <h2><span class="badge bg-primary">Matriz Ímpares</span></h2>
        </div>
        <div class="col"></div>
    </div>
    <table class="table">
        <?php
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 5; $j++) {
                if ($matrix[$i][$j] % 2 <> 0) {
                    if ($j == 0) {
                        echo "<tr><td>" . $matrix[$i][$j] . "</td>";
                    }
                    if ($j == 4) {
                        echo "<td>" . $matrix[$i][$j] . "</td></tr>";
                    } else {
                        echo "<td>" . $matrix[$i][$j] . "</td>";
                    }
                }
            }
        }
        ?>
    </table>
</div>