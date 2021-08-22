<li>
    <ul>
        <?php if(!empty($fleet)): foreach($fleet as $f): ?>
        <p><?=$f['fleet']?></p>
        <?php endforeach; endif; ?>
    </ul>
</li>