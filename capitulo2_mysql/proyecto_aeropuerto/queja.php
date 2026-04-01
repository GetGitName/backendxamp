<?php include("includes/header.php"); ?>

<div class="container">
    <div class="form-card">
        <h2>Registrar Queja</h2>

        <form action="guardar_queja.php" method="POST" onsubmit="return validar()">

            <label>Código Postal:</label><br>
            <input type="text" name="cp" required><br><br>

            <label>Tipo:</label><br>
            <select name="tipo">
                <option>Medio ambiente</option>
                <option>Seguridad</option>
                <option>Ruido</option>
            </select><br><br>

            <label>Descripción:</label><br>
            <textarea name="descripcion" required></textarea><br><br>

            <button type="submit">Enviar</button>
        </form>
    </div>
</div>

<script src="js/validacion.js"></script>

<?php include("includes/footer.php"); ?>