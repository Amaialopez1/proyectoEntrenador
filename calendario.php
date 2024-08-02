<?php
$days_count = date('t');
$current_day = date('d');
$week_day_first = date('N', mktime(0, 0, 0, date('m'), 1, date('y')));
?>

<table>
    <tr>
        <th>Lunes </th>
        <th>Martes </th>
        <th>Miercoles </th>
        <th>Jueves </th>
        <th>Viernes </th>
        <th style="color:orange;">Sabado </th>
        <th style="color:orange;">Domingo </th>
    </tr>
    <?php
        for($w = 1 - $week_day_first + 1; $w <= $days_count; $w = $w + 7): ?>
            <tr>
                <?php $counter = 0;?>
                <?php for($d = $w; $d <= $w + 6; $d++): ?>
                    <td style="<?php if($counter > 4): ?> color:red; <?php endif; ?> <?php if($current_day == $d): ?> background-color:yellow; color:green; font-weight:bold;<?php endif; ?>">
                        <?php echo($d > 0 ? ($d > $days_count ? '' : $d) : '');?>

                    </td>
                    <?php $counter++; ?>
                    <?php endfor; ?>
            </tr>
            <?php endfor; ?>
</table>
                    <!--Hacemos un bs5 y dentro quitamos el head y footer.En  el body, ponemos bs5-table-default con columnas -->
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <div
        class="table-responsive"
        style="width:700px;margin-top:50px; margin-left:500px;"
        >
            <table
                class="table table-primary"
                
            >
                <thead>
                    <tr>
                        <th scope="col">Lunes </th>
                        <th scope="col">Martes </th>
                        <th scope="col">Miercoles </th>
                        <th scope="col">jueves </th>
                        <th scope="col">Viernes </th>
                        <th scope="col">sabado </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row"><a href="">Pectorales y brazo</a></td>
                        <td><a href="">Espalda y antebrazo</a></td>
                        <td><a href="">Hombro y brazo </a></td>
                        <td scope="row"><a href="">Piernas y antebrazo </a></td>
                        <td><a href="">Pectorales y brazo</a></td>
                        <td><a href="">Ensalada (Combinación de todos los ejercicios) </a></td>
                    </tr>
                
                </tbody>
            </table>
        </div>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

