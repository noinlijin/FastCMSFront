<div class="select-post">
    <select class="select-post" data-cache="<?= $CurrentValue ?>" name="<?= $TargetKey ?>" targetUrl="<?= $TargetUrl ?>" >
        <?php foreach($OptionList as $option): ?>
            <option <?php if ($option['Value'] === $CurrentValue) { ?>selected="selected"<?php } ?> value="<?= $option['Value'] ?>"><?= $option['ShowValue'] ?></option>
        <?php endforeach;?>
    </select>
    <span class="msg"></span>
</div>
