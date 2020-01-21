# Design Patterns (Katalog) <a name="main"></a>
#### Inhaltsverzeichnis
- [Creational Patterns (Erzeugungsmuster)](#creational)
- Structural Patterns (Strukturmuster) 
- Behavioral Patterns (Verhaltensmuster)  

_-> Ist das Problem bekannt und geibt es dafür eventuell schon Lösungsansätze?_  
Der Katalog der __Design Patterns__ (Entwurfmuster) beeinhaltet Liste von Modellen oder Schablonen für sich 
__wiederholende Probleme in der Entwicklung__. Wenn der (Software-)Architekt oder Entwickler während der 
Planung/Durchführung eines Projektes auf wiederkeherende Probleme trifft, können solche Muster/Schablonen aufgrund ihrer
flexiblen Wiederverwendbarkeit zur Lösung beitragen.  

_-> Habe ich alle Teile (Teilnehmer, Members, Akteure) des Patterns berücksichtigt und erfüllen sie die ihre zugedachte 
Rolle innerhalb des Entwurfmusters?_    
Jedes Entwurfmuster (Pattern) bringt eine Gruppe von __Teilnehmer__ (Members, Akteure) mit. Diese übrenehmen bestimmte 
Aufgaben innerhalb des Pattern. Teilnehmer dienen zur Kontrolle des eigenen Entwicklung. Damit kann auch eine bessere 
__Wiedererkennung des Musters__ innerhalb eines Projektes gewährleistet werden.  

Es gibt __2 Gültigkeitsbereiche__ von Erzeugungsmuster, das __Objekt-Entwurfsmuster__ und das __Klassen-Entwurfmuster__
- ein __Objekt-Entwurfsmuster__ kümmert sich um die Erzeugung von Objekten und überlässt Teile der Objekterzeugung 
anderen Objekten. Objekte sind Instanzen von Klassen. Sie sind __zur Laufzeit dynamisch__, da seine Attribut-Werte 
während der Ausführung des Programmes sich verändern _können_.
- __Klassen-Entwurfmuster__ behandeln die Klasseninstanziierung und geben Instanziierung von Klassen an ihre 
Unterklassen (Child-Class, Interface-Implementor). Da es sich um Klassen handelt, werden diese schon bei der 
Kompilierung der Applikation festgelegt und sind somit __zur Laufzeit statisch__.
#### Links
- <a href="https://de.wikipedia.org/wiki/Entwurfsmuster" target="_blank">Wikipedia Entwurfmuster</a>
- <a href="https://www.grund-wissen.de/informatik/python/design-patterns.html" target="_blank">Design Patterns</a>
## Creational Patterns (Erzeugungsmuster) <a name="creational"></a>
_Programmiere auf die Schnittstelle, nicht auf die Implementierung!_  

Creational Patterns dienen der __Erzeugung von Objekten__. Ziel dieser Pattern ist die __Kapselung und Auslagerung__ der 
Erstellung eines Objektes.  
Damit wird die Konstruktion eines Objektes von seiner Repräsentation entkoppelt.
> (Wikipedia)  
Entwurfsmuster beinhalten zwei Ideen: Die erste besteht darin, das Wissen über die konkreten Klassen zu verbergen, 
die zweite darin, zu verbergen, wie Instanzen dieser Klassen erzeugt und verbunden werden. 
#### Inhalt Creational Patterns
[zum Hauptinhalt](#main)
- Pattern [Abstract Factory (Objekt-Entwurmuster)](#abstract-factory)
- Pattern [Builder (Objekt-Entwurmuster)](#builder)

##########################
###  <a name="abstract-factory"></a><a name="section-abstract-pattern"></a>Pattern *ABSTRACT FACTORY* (abstrakte Fabrik) ###
##########################  

__Gültigkeitsbereich__  
Objekt-Entwurfmuster

__Teilnehmer__ (Members, Akteure)  
Als Beispiel sollen Fabriken dienen, welche **Holzfenster** herstellen. Diese Fabriken stellen Fenster aus 
unterschiedlichen Holzarten her (z.Bsp. Eiche, Mahagoni, Kiefer).
- [AbstractFactory](#memberAFAbstractFactory)
    - ist ein **Interface** (Schnittstelle) oder eine **Class** (Klasse) 
        - Interface  
        ``interface InterfaceHolzFensterFactory(){...}``
        - Class  
        ``class ClassHolzFensterFactory(){...}``
    - die Entscheidung, ob eine _Klasse __oder__ eine Schnittstelle_ eingesetzt wird, hängt von konkreten Fall ab    
    - __definiert Methoden zur Erzeugung abstrakter Produkte__ einer gleichartigen (verwandten, von einander abhängigen)
     Produktfamilie
        - alle HolzFenster-Fabriken stellen Fenster aus verschieden Holzarten her (Beispiel _Interface_)
        ````
        ...
        interface InterfaceHolzFensterFactory()
        {
            public function createEichenholzFenster(): EichenholzFenster;
            public function createKiefernholzFenster(): KiefernholzFenster;
            public function createMahagoniholzFenster(): MahagoniholzFenster;
        }
        ````      
    - zwingt die _ConcreteFactory_, diese Methoden dann auch zu benutzen (konkretisieren, überschreiben)
- [ConcreteFactory](#memberAFConcreteFactory)
    - Beispiel __Fabrik Tischlermeister Holzhammer__ 
    - die __konkrete__ Klasse einer __Fabrik__ (_Fabrik Tischlermeister Holzhammer_),  __implementiert__ oder __erbt__ von _AbstractFactory_
        1. Interface _implementieren_  
        ``class TischlermeisterHolzhammerFactory implements InterfaceHolzFensterFactory(){...}``
        2. Elternklasse _erben_  
        ``class TischlermeisterHolzammerFactory extends ClassHolzFensterFactory(){...}``
    - __konkretisiert__ _(überschreibt)_ __Methoden__ der _AbstractFactory_
        - Beispiel _Implementations-Klasse_  
        ````
        ...
        class TischlermeisterHolzammerFactory implements InterfaceHolzFensterFactory() 
        {
              ...
              public function createEichenholzFenster(): EichenholzFenster 
              {
                  ...
              }
          
              ... function createKiefernholzFenster(): KiefernholzFenster 
              {
                  ...
              }
          
              ... function createMahagoninholzFenster(): MahagoniholzFenster 
              {
                  ...
              }
        }
        ````
    - __Rückgabewert__ der _überschriebenen Methode_, __muß dem beschrieben Typ__ der Methoden der 
    _abstrakten Fabrik_ __entsprechen__, hier am Beispiel Methode _createEichenholzFenster()_  
    ````
    ...
    use EichenholzFenster;
  
    class TischlermeisterHolzammerFactory implements InterfaceHolzFensterFactory() 
    {
        ...
        public function createEichenholzFenster(): EichenholzFenster 
              {
                  return new EichenholzFenster();
              }
        ...
    }
    ````       
- [AbstractProduct](#memberAFAbstractProduct)
    - Interface (Schnittstelle) __oder__ Class (Klasse)
        - Interface  
        ``interface EichenholzFensterProduct(){}``  
        ... (weitere Interfaces für weitere Produkte)
        - Class  
        ``class ClassProductAFactory(){}``  
        ... (weitere Klassen für weitere Produkte)
    - _AbstractProduct_ __definiert abstrakte Methoden möglicher gleicher Eigenschaften__ eines konkreten Produkt.  
      
        - beim _Eichenolz_ gibt es je nach Art unterschiedliche Wertigkeit, dies soll mittels einer Skala 1 - 10 als 
        Eigenschaft bestimmt werden 
        ````
        ...
        interface EichenholzFensterProduct()
        {
            ...
            public function setWertigkeitIndex(int $index, int $maxIndex): string;
            ...
        }
        ````
        - _Kiefernfholz_ wiederum ist ein günstiges Material, aber sehr anfällig für feuchte Witterungen. Deshalb wird ein 
        Wartungsintervall als Eigenschaft angegeben  
        ````
        ...
        interface KiefernholzFensterProduct()
        {
            ...
            public function setWartungintervallInMonth(int $interval): int;
            ...
        }
        ````
        - _Mahagonihölzer_ können besonderen Artenschutzbestimmungen unterliegen. Deshalb ist eine Information dazu 
        nötig (wissenschaftliche Artenbezeichnung und ob es unter diesen Bestimmungen fällt). Weiterhin muß in jedem
        Fall das Herkunftsland angegeben werden.
        ````
        ...
        interface MahagoniholzFensterProduct()
        {
            ...
            public function setInfoArtenschutz(string $bezeichnung, bool $istArtgeschuetzt): string;
            public function setInfoArtenschutz(string $herkunftsland): string;
            ...
        }
        ````  
        
- [ConcreteProduct](#memberAFConcreteProduct)
    - konkrete Klasse (Class) für ein konkretes Produkt (Beispiel MooreichenholzFenster)
    - überschreibt die abstrakten Methoden der implementiertem/geerbten Klasse
    ````
    use EichenholzFensterProduct;
    ... 
    class MooreichenholzFenster implements EichenholzFensterProduct() {
       ...   
       public function setWertigkeitIndex(int $index, $maxIndex) {
          print_r("Das Holz einer Mooreiche hat eine Wertigkeit von " . $index . " von " . $maxIndex;)
       };
       ...
    }
    ````
 - [Client](#memberAFClient)  

__Links__
- <a href="https://www.hypercube.biz/entwurfsmuster-erzeugungsmuster/" target="_blank">Entwurfsmuster (Design Patterns): Erzeugungsmuster in Java</a>
- <a href="https://de.wikipedia.org/wiki/Abstrakte_Fabrik" target="_blank">Wikipedia "Abstrakte Fabrik"</a>
- <a href="https://designpatternsphp.readthedocs.io/en/latest/Creational/AbstractFactory/README.html" target="_blank">Abstract Factory (DesignPatternsPHP)</a>
- <a href="https://www.philipphauer.de/study/se/design-pattern/abstract-factory.php" target="_blank">Das Abstract Factory Design Pattern</a>  

<a name="memberAFAbstractFactory"></a>__*AbstractFactory*__ (AbstractFactory*Fahrzeug*)
- Typ: Interface (Schnittstelle)
- Deklariert eine Schnittstelle für Operationen, die abstrakte Produktobjekte erzeugen.
````
# AbstractFactoryFahrzeug.php
<?php
    ...
    interface AbstractFactoryFahrzeug(){
        public function createLuftfahrzeug() {};
        public function createWasserfahrzeug() {};
        public function createLandfahrzeug() {};
    }
    ...
````

[nach oben](#section-abstract-pattern)  
<a name="memberAFConcreteFactory"></a>__*ConcreteFactory*__ (ConcreteFactory***)
- Typ: Class (Klasse)
- Implementiert die Operationen zur Erzeugung konkreter Produktobjekte aus der AbstractFactory
````
# Landfahrzeug.php
<?php
    ...
    interface Landfahrzeug() {
        /**
         */    
        public function defineKategorie() {};
    }
    ...
````
````
# Luftfahrzeug.php
<?php
    ...
    interface Luftfahrzeug() {
        public function defineKategorie() {};
    }
    ...
````
````
# Wasserfahrzeug.php
<?php
    ...
    interface Wasserfahrzeug() {
        public function defineKategorie() {};
    }
    ...
````

````
# RennbootWasserfahrzeug.php
<?php
    ...
    class RennbootWasserfahrzeug implements Wasserfahrzeug() {
        public function defineKategorie(string $kategorie) {
            return $kategorie;
        }
    }
````

 
 __*AbstractProduct*__ (Window, ScrollBar)  
 Deklariert eine Schnittstelle für einen bestimmten Produktobjekttyp.
 ConcreteProduct (MotifWindow, MotifScrollBar)
 Definiert ein von der zugehörigen konkreten Factory zu erzeugendes Produktobjekt.
 Implementiert die AbstractProduct-Schnittstelle.
 Client
 Verwendet ausschließlich von AbstractFactory- und AbstractProductKlassen deklarierte Schnittstellen.

    - interface factory
    ````
    # AbstractFactoryVehicle.php
    <?php
        ...
        interface AbstractFactoryVehicle(){
            // e.g MotorVehicleType
            public function createType() {};
        }
        ...
    ````
    - interface 
    ````
    # MotorVehicle.php
    <?php
        ...
        interface MotorVehicle(){
            public function createType() {};
        }
        ...
    ````
#### Links
- <a href="https://www.grund-wissen.de/informatik/python/design-patterns.html#abstract-factory" target="_blank">Design-Pattern AbstractFactory</a>
- [Design Pattern PHP](https://designpatternsphp.readthedocs.io/en/latest/Creational/AbstractFactory/README.html)
- [Das Abstract Factory Design Pattern (PHP)](https://www.philipphauer.de/study/se/design-pattern/abstract-factory.php "Erklärung anhand eines PHP-Beispiels")

##########################
###  Pattern *BUILDER* (Erbauer)<a name="builder"></a> ###
##########################  

[zurück zu Creational Patterns (Erzeugungsmuster)](#creational)   

__Gültigkeitsbereich__  
Objekt-Entwurfmuster  

__Teilnehmer__ (Member, Akteure)  
- Builder (Erbauer)
    - generiert die Einzelbestandteile
- ConcreteBuilder (KonkretErbauer)
- Director (Direktor)
    - steuert den Konstruktionsprozess des gesammten Produktes
    - kann die Reihenfolge der Erzeugung der Einzelbestandteile durch den Builder bestimmen 
- Product (Produkt)

__Anwendung__  

#### Links
- <a href="https://www.big5.de/2014/04/30/chrissys-design-pattern-of-the-week-3-erbauer/" target="_blank">Chrissy’s Design-Pattern of the Week – 3 – Erbauer</a>
- <a href="https://www.grund-wissen.de/informatik/python/design-patterns.html#id5" target="_blank">Design-Pattern Builder</a>

