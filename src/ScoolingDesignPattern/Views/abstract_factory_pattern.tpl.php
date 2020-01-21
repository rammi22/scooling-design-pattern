<?php
$abstractFactory = 'Patterns/CreationalPatterns/AbstractFactoryPattern/AbstractFactory/Interfaces/SpieleFabrik.php';
$interfaceSpielbrett = 'Patterns/CreationalPatterns/AbstractFactoryPattern/AbstractProduct/Interfaces/Spielbrett.php';
$interfaceSpielfigur = 'Patterns/CreationalPatterns/AbstractFactoryPattern/AbstractProduct/Interfaces/Spielfigur.php';
$luxusSchachbrett = 'Patterns/CreationalPatterns/AbstractFactoryPattern/ConcreteProduct/LuxusSchachbrett.php';
$luxusSchachfigur = 'Patterns/CreationalPatterns/AbstractFactoryPattern/ConcreteProduct/LuxusSchachspielfigur.php';
$luxusSchachfabrik = 'Patterns/CreationalPatterns/AbstractFactoryPattern/ConcreteFactory/LuxusSchachspielFabrik.php';
?>
<h1>Abstract Factory Pattern</h1>
<h2>Definition des <em>Entwurfmuster AbstractFactory</em></h2>
<p>
    <a href="https://www.enzyklo.de/Begriff/Objektfamilie" target="_blank">Objektfamilien</a>,
    also eine <em>Gruppe aus Einzelobjekten</em>, welche miteinander verwand oder voneinander abhängig sind, können
    mit diesem Entwurfmuster erzeugt werden.<br>
    Dafür stellt das <em>AbstractFactory Pattern</em> eine Schnittstelle bereit, ohne die Bennenung der konkreten
    Klassen einer Objektfamilie.<br><br>
    Zum AbstractFactory Pattern gehören Mitglieder (Member, Akteure), die <strong>AbstractFactory</strong>,
    die <strong>ConcreteFactory</strong>, das <strong>AbstractProduct</strong>, das <strong>ConcreteProduct</strong>
    und der <strong>Client</strong>.<br>
    Der <em>Client</em> aus der Mitgliedergruppe ist in unserem <a href="#example">Beispiel</a> der
    <i>AbstractFactoryPatternController</i>, in ihm werden die Fabriken aufgefordert, die Objekte zu produzieren.
</p>

<section id="example">
    <h2>Aufgabe / Auftrag (Beispiel)</h2>
    <p>
        <a href="#executeExample">direkt zur Umsetzung des Beispiels mit PHP</a>
    </p>
    <p>
        Ein <b>Spielleiter</b> organisiert und überwacht Brettspiele, u.a.:
        <ul>
            <li>Schachspiele</li>
            <li>Halmaspiele</li>
        </ul>
    </p>
    <p>
        Der Spielleiter bewegt sich dabei in den verschiedenen sozialen Umfeldern. Dazu zählen ein <em>Kindergarten</em>, der
        <em>Profisport</em> und das <em>englische Königshaus</em>.<br>
        Um sein Image als hervorragener und weltweit gefragter Spielorganisator zu pflegen, lässt er für jedes Umfeld
        individuell gestaltete Spielbretter und Spielfiguren in speziellen Fabriken herstellen:
        <ul>
            <li><b>Schachspiele</b>
                <ul>
                    <li>für den <b>Kindergarten</b> aus der <b>KinderSchachspielFabrik</b></li>
                    <li>für den <b>Profisport</b> aus der <b>LuxusSchachspielFabrik</b></li>
                    <li>für das <b>englische Königshaus</b> aus der <b>GoldeneSchachspielFabrik</b></li>
                </ul>
            </li>
            <li><b>Halmaspiele</b>
                <ul>
                    <li>für den <b>Kindergarten</b> aus der <b>KinderHalmaFabrik</b></li>
                </ul>
            </li>
        </ul>
        Und dafür hat er auch triftige Gründe. Alle Fabriken stellen zwar Spielbretter und Spielfiguren her, aber jede
        einzelne Fabrik baut unterschiedlichen Materialien. Also jede Fabrik prägt ihr Produkt individuell aus,
        der eine aus Holz, der andere aus Edelmetallen etc.<br>
    </p>
    <p>
        Mit unserer App möchte der Spielleiter nun bequem und <b>nach Bedarf</b> die entsprechenden <b>Spielutensilien
            in den Fabriken produzieren</b> lassen.
    </p>
</section>
<section>
    <h2>Vorüberlegung zur Umsetzung</h2>
    <p>
        Die Fabriken sollen eine Gesamteinheit aus voneinander abhängigen kleineren Einheiten herstellen. Also das ein
        Spiel komplett mit Spielbrett und Spielfiguren. Eine Spielfigur ohne Spielbrett ist genau so unsinnig
        wie ein Spielbrett ohne Spielfigur. Damit ist klar, alle Fabriken haben eines gemeinsam (eine
        <em>Schnittstelle</em>), sie müssen <i>Spielfiguren</i> <b>und</b> <i>Spielbretter</i>
        herstellen.<br>
        Diese Schnittstelle beschreibt das Member <strong>AbstractFactory</strong> und definiert für unser Beispiel
        zwei Methoden:
        <code>
            <span>
                createSpielbrett(): Spielbrett;<br>
                createSpielfigur(): Spielfigur;
            </span>
        </code>
        <a href="#memberAbstractFactory">👉 zur <em>Schnittstelle aller Fabriken</em> (Member AbstractFactory)</a>
    </p>
    <p>
        Als Ergebnis der Methoden erwarten wir sodann ein allgemeines Spielbrett und eine allgemeine Spielfigur. Die
        konkrete Ausführung wird erst im konkreten Produkt definiert, an dieser Stelle ist die nicht bekannt.<br>
        Ein Spielbrett ist ja nun nicht gleich ein Spielbrett für Schach oder Halma. Es handelt sich vielmehr um eine
        Abstraktion, nämlich die des Member <strong>AbstractProduct</strong>.<br>
        Diese <strong>Abstraktion definiert die gemeinsammen Methoden für alle konkreten Produkte</strong> aus der
        Familie der Spielbretter und der Spielfiguren. ...aber welche könnten diese sein?<br>
        Nun ja, da fällt mir beim <b>Spielbrett</b> die <i>Grösse</i> ein, also die Länge und Breite der Spielfläche,
        und natürlich auch das verwendete <i>Material</i>:
        <code>
            <span>
                setMaterial();<br>
                setSizeX();<br>
                setSizeY();
            </span>
        </code>
        <a href="#interfaceSpielbrett" class="block">
            👉 zur <em>Schnittstelle aller Spielbretter</em> (Member AbstractProduct)
        </a>
        Ähnliche Eigenschaften sind ja auch bei der <b>Spielfigur</b> wichtig.
        <code>
            <span>
                setMaterial();<br>
                setSizeH();<br>
                setSizeW();
            </span>
        </code>
        <a href="#interfaceSpielfigur" class="block">
            👉 zur <em>Schnittstelle der Spielfiguren</em> (Member AbstractProduct)
        </a>
        Und da gibt es bestimmt noch mehr Gemeinsamkeiten...
    </p>
    <p>
        Mit der Vorbereitung können wir nun die konkreten Vorstellungen des Auftragsgeber angehen.<br>
        Der Spielleiter hat ja, wie oben erwähnt, konkret mit 4 Fabriken Verträge abgeschlossen. Sein Hauptmotiv war
        dabei die verwendeten Materialien, welche die Fabriken für das Spielset verwenden.
        <ul>
            <li>die <i>Kinder</i>***Fabrik verwendet <i>günstige Materialien</i></li>
            <li>die <i>Luxus</i>***Fabrik verwendet <i>edle Materialien</i></li>
            <li>die <i>Goldene</i>***Fabrik verwendet dekandent <i>Gold</i></li>
        </ul>
        Dann lassen wir uns doch mal von der <i>LuxusSchachspielFabrik</i> ein konkretes Spielbrett aus
        <i>Mahagoni-Holz</i> und eine konkrete Spielfigur aus <i>Elfenbein</i> und in den gewünschten Maßen
        anfertigen.<br>
        Dazu bedarf es zunächst erstmal zwei konkrete Produktklassen, eben die <strong>ConcreteProduct</strong>'s.
        Hier werden die allgemein gültigen Angaben (abstrakten Methoden) mit den Wünschen des Spielleiters befüllt.
        <a href="#luxusSchachbrett" class="block">
            👉 zum <em>LuxusSchachbrett</em> (Member ConcreteProduct)
        </a>
        <a href="#luxusSchachfigur" class="block">
            👉 zur <em>LuxusSchachfigur</em> (Member ConcreteProduct)
        </a>
        Und nun braucht es eigentlich nur noch die konkrete Fabrik, die <strong>ConcreteFactory</strong>, welche mir
        das Teil dann auch produziert...
        <a href="#luxusSchachfabrik" class="block">
            👉 zur <em>LuxusSchachfabrik</em> (Member ConcreteFactory)
        </a>
    </p>
    <p>
        Was fehlt jetzt noch? Klar, der Auslöser durch den Member <strong>Client</strong>.<br>
        Ich erwähnte ja schon, daß diese Aufgabe (zur vereinfachten Anschauung) der Controller, exakt der
        <i>AbstractFactoryPatternController</i> übernimmt. Dazu der Controller an der richtigen Stelle mit dieser
        Anweisung (Code) bestückt:
        <code>
            <span>
                <?=nl2br(htmlspecialchars('...
                $fabrik = new LuxusSchachspielFabrik();
                $spielbrett = $fabrik->createSpielbrett();
                $spielbrett->setMaterial(\'Mahagoni\');
                $spielbrett->setSizeX(500);
                $spielbrett->setSizeY(500);
                $spielfigur = $fabrik->createSpielfigur();
                $spielfigur->setMaterial(\'Elfenbein\');
                $spielfigur->setSizeH(40);
                $spielfigur->setSizeW(30);
                ...'))?>
            </span>
        </code>
        <a href="#result" class="block">
            👉 zum Ergebnis
        </a>
    </p>
</section>
<section id="executeExample">
    <h2>Die Umsetzung des Beispiel für ein Entwurfmusters AbstractFactory mit PHP</h2>
    <p>
        Die einzelnen Teile der Umsetzung sind nach der Liste der <em>Teilnehmer des Abstract Factory Pattern</em>
        benannt
        <ul>
            <li><a href="#memberAbstractFactory">AbstractFactory</a></li>
        </ul>
    </p>
    <h3 id="result">Das Ergebnis</h3>
    <p>
        Das Ergebnis zeigt die erzeugte Produktfamilie mit seinen konkreten Produktteilen (Spielbrett und Spielfigur)
        <?php
            echo '<pre>';
            print_r($templateVariables['produktFamilie']);
            echo '</pre>';
        ?>
    </p>
</section>
<section id="memberAbstractFactory">
    <h2>[Member] AbstractFactory</h2>
    <blockquote>
        <div>
            Definiert die Methoden für die Erzeugen <em>abstrakter Produkte</em> einer Produkfamilie
            <footer>
                <a href="https://de.wikipedia.org/wiki/Abstrakte_Fabrik#Akteure" target="_blank">Wikipedia: Abstrakte Fabrik, Akteure</a>
            </footer>
        </div>
    </blockquote>
    <code>
        <span>
            <i class="path-to-class">
                src/ScoolingDesignPattern/<?=$abstractFactory?>
            </i>
            <?=nl2br(htmlspecialchars(file_get_contents(__DIR__ . '/../' . $abstractFactory)));?>
        </span>
    </code>
</section>
<section id="memberAbstractProduct">
    <h2>[Member] AbstractProduct</h2>
    <blockquote>
        <div>
            definiert eine <em>Schnittstelle für eine Produktart</em>
            <footer>
                <a href="https://de.wikipedia.org/wiki/Abstrakte_Fabrik#Akteure" target="_blank">Wikipedia: Abstrakte Fabrik, Akteure</a>
            </footer>
        </div>
    </blockquote>
    <p id="interfaceSpielbrett">
        <h3>Interface Spielbrett</h3>
        <code>
            <span>
                <i class="path-to-class">
                    src/ScoolingDesignPattern/<?=$interfaceSpielbrett?>
                </i>
                <?=nl2br(htmlspecialchars(file_get_contents(__DIR__ . '/../' . $interfaceSpielbrett)));?>
            </span>
        </code>
    </p>
    <p id="interfaceSpielfigur">
        <h3>Interface Spielfigur</h3>
        <code>
            <span>
                <i class="path-to-class">
                    src/ScoolingDesignPattern/<?=$interfaceSpielfigur?>
                </i>
                <?=nl2br(htmlspecialchars(file_get_contents(__DIR__ . '/../' . $interfaceSpielfigur)));?>
            </span>
        </code>
    </p>
</section>
<section id="memberConcreteProduct">
    <h2>[Member] ConcreteProduct</h2>
    <blockquote>
        <div>
            definiert ein <em>konkretes Produkt einer Produktart</em> durch Implementierung der Schnittstelle, wird
            durch die korrespondierende konkrete Fabrik erzeugt
            <footer>
                <a href="https://de.wikipedia.org/wiki/Abstrakte_Fabrik#Akteure" target="_blank">Wikipedia: Abstrakte Fabrik, Akteure</a>
            </footer>
        </div>
    </blockquote>
    <p id="luxusSchachbrett">
        <h3>Class LuxusSchachbrett</h3>
        <code>
            <span>
                <i class="path-to-class">
                    src/ScoolingDesignPattern/<?=$luxusSchachbrett?>
                </i>
                <?=nl2br(htmlspecialchars(file_get_contents(__DIR__ . '/../' . $luxusSchachbrett)));?>
            </span>
        </code>
    </p>
    <p id="luxusSchachfigur">
        <h3>Class LuxusSchachfigur</h3>
        <code>
            <span>
                <i class="path-to-class">
                    src/ScoolingDesignPattern/<?=$luxusSchachfigur?>
                </i>
                <?=nl2br(htmlspecialchars(file_get_contents(__DIR__ . '/../' . $luxusSchachfigur)))?>
            </span>
        </code>
    </p>
</section>
<section id="memberConcreteFactory">
    <h2>[Member] ConcreteFactory</h2>
    <blockquote>
        <div>
            <em>erzeugt konkrete Produkte</em> einer Produktfamilie durch Implementierung der Schnittstelle
            <footer>
                <a href="https://de.wikipedia.org/wiki/Abstrakte_Fabrik#Akteure" target="_blank">Wikipedia: Abstrakte Fabrik, Akteure</a>
            </footer>
        </div>
    </blockquote>
    <p id="luxusSchachfabrik">
        <h3>Class LuxusSchachspielFabrik</h3>
        <code>
                <span>
                    <i class="path-to-class">
                        src/ScoolingDesignPattern/<?=$luxusSchachfabrik?>
                    </i>
                    <?=nl2br(htmlspecialchars(file_get_contents(__DIR__ . '/../' . $luxusSchachfabrik)))?>
                </span>
        </code>
    </p>
</section>