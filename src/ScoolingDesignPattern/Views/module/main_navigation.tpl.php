<ul>
    <?php
    if($templateVariables['template'] !== 'home') {
        echo '<li><a href="/">Startseite</a></li>';
    }
    if($templateVariables['template'] !== 'abstract_factory_pattern') {
        echo '<li><a href="/abstract-factory-pattern">Abstract Factory Pattern</a></li>';
    }
    ?>
</ul>