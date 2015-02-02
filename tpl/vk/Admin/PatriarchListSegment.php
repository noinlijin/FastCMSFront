<ul style="text-align: left">
<?php /** @var vk\Orm\Patriarch $patriarch */ ?>
<?php foreach( $PatriarchList as $key=>$patriarch ): ?>
    <li>ID: <?= $patriarch->IdentityCardNumber ?></li>
    <li>
        <?= $RelationshipList[$key] ?>:
        <?= $patriarch->Name ?>
        <?= $patriarch->PhoneNumber ?>
    </li>
<?php endforeach; ?>
</ul>
