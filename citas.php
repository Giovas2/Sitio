<?php include("template/cabecera.php"); ?>
<section id="citas" class="container mt-4">
    <h2>Genera tu cita</h2>
    <p> Estamos para atenderlo </p>

    <form action="?" method="post">
        <div class="mb-3">
            <label for="name">Nombre:</label><br />
            <input type="text" class="form-control" name="nombre" placeholder="Escribe tu nombre..." required><br />

        </div>

        <div class="mb-3">
            <label for="email">Correo electrónico:</label><br />
            <input type="email" class="form-control" name="correo" placeholder="Escribe tu correo electrónico"
                required><br />
        </div>

        <div class="mb-3">
            <label for="message">Curriculum:</label><br />
            <input type="file" class="form-control" name="curriculum" rows="6" cols="50"></input><br />
        </div>

        <input type="submit" class="btn btn-primary" value="Enviar mensaje">
    </form>
</section>
<br/><br/>
<?php include("template/pie.php"); ?>