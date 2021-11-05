<div class="container">
    <div class="table-responsive">
        <div class="col"></div>
        <div class="col">
            <h2><span class="badge bg-primary">Matriz Principal</span></h2>
        </div>
        <div class="col"></div>
    </div>
    <!-- tabela com a estrura de repeticao da matriz 5x5 principal-->
    <table class="table">
        <?php
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 4; $j++) {
                if ($j == 0) {
                    echo "<tr><td>" . $matriz[$i][$j] . "</td>";
                }
                if ($j == 5) {
                    echo "<td>" . $matriz[$i][$j] . "</td></tr>";
                } else {
                    echo "<td>" . $matriz[$i][$j] . "</td>";
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
    <!-- tabela com a estrura de repeticao da matriz dos numeros pares-->
    <table class="table">
        <?php
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 5; $j++) {
                if ($matriz[$i][$j] % 2 == 0) {
                    if ($j == 0) {
                        echo "<tr><td>" . $matriz[$i][$j] . "</td>";
                    }
                    if ($j == 4) {
                        echo "<td>" . $matriz[$i][$j] . "</td></tr>";
                    } else {
                        echo "<td>" . $matriz[$i][$j] . "</td>";
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
    <!-- tabela com a estrura de repeticao da matriz dos numeros impares-->

    <table class="table">
        <?php
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 5; $j++) {
                if ($matriz[$i][$j] % 2 <> 0) {
                    if ($j == 0) {
                        echo "<tr><td>" . $matriz[$i][$j] . "</td>";
                    }
                    if ($j == 4) {
                        echo "<td>" . $matriz[$i][$j] . "</td></tr>";
                    } else {
                        echo "<td>" . $matriz[$i][$j] . "</td>";
                    }
                }
            }
        }
        ?>
    </table>
</div>