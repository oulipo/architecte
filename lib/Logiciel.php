<?php

namespace Ecv\Architecture;

interface Forme {
    public function aire();
    public function perimetre();
}

class Carre implements Forme {
    protected $cote;
    public function __construct($cote) {
        $this->cote = $cote;
    }
    public function aire() {
        return pow($this->cote, 2);
    }

    public function perimetre() {
        return 4 * $this->cote;
    }
}

class Rectangle implements Forme {
    protected $longueur;
    protected $largeur;

    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }
    public function aire() {
        return $this->longueur * $this->largeur;
    }

    public function perimetre() {
        return 2 * ($this->longueur + $this->largeur);
    }
}

class Cercle implements Forme {
    protected $rayon;

    public function __construct($rayon) {
        $this->rayon = $rayon;
    }
    public function aire() {
        return pow($this->rayon, 2) * M_PI;
    }

    public function perimetre() {
        return 2 * $this->rayon * M_PI;
    }
}

class Triangle implements Forme {
    protected $a;
    protected $b;
    protected $c;
    public function __construct($a,$b,$c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function aire() {
        $p = ($this->perimetre()) / 2;
        return sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
    }

    public function perimetre() {
        return $this->a + $this->b + $this->c;
    }

}

class Logiciel {
    protected $formes = [];

    public function ajouter(Forme $forme) {
        $this->formes[] = $forme;
    }
    public function surfaceTotale() {
        $surface = 0;
        foreach ($this->formes as $forme) {
            $surface += $forme->aire();
        }
        return $surface;
    }
    public function perimetreTotal() {
        $perimetre = 0;
        foreach ($this->formes as $forme) {
            $perimetre += $forme->perimetre();
        }
        return $perimetre;
    }
}