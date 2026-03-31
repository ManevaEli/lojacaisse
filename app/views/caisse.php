<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choisir une caisse</title>
</head>
<body>

<div class="card">

    <div class="card-header">
        <div class="icon">🛒</div>
        <h1>Supermarché</h1>
        <p>Choisissez votre caisse pour commencer</p>
    </div>

    <?php if (isset($_GET['error'])): ?>
        <p style="color: red; font-size: 13px; margin-bottom: 16px; text-align: center; font-family: Arial, sans-serif;">
            Veuillez sélectionner une caisse.
        </p>
    <?php endif; ?>

    <form method="POST" action="/caisse/choisir">

        <div class="form-group">
            <label for="caisse_id">Numéro de caisse</label>
            <select name="caisse_id" id="caisse_id" required>
                <option value="">-- Sélectionner une caisse --</option>
                <?php foreach ($caisses as $caisse): ?>
                    <option value="<?= $caisse['id'] ?>">
                        <?= $caisse['num_caisse'] ?> — <?= $caisse['libelle_caisse'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <button type="submit" class="btn-valider">Valider</button>

    </form>

    <div class="logout-link">
        <a href="/logout">← Se déconnecter</a>
    </div>

</div>

</body>
</html>