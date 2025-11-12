<h2>Coffee and Beverages</h2>

<?php if (empty($beverages)): ?>
    <p>We have no coffee ig</p>
<?php else: ?>
    <ol>
        <?php foreach ($beverages as $beverage): ?>
            <li>
                <?= htmlspecialchars($beverage['name']) ?>
                <br>
                <em><?= htmlspecialchars($beverage['size']) ?></em>
                - <em><?= htmlspecialchars($beverage['price']) ?></em>
            </li>
        <?php endforeach; ?>
    </ol>
<?php endif; ?>