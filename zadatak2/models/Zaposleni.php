<?php

abstract class Zaposleni{
    public $id;
    public $ime;
    public $prezime;
// metode
    public abstract function kreiraj();
    public abstract function procitaj();
    public abstract function izmeni();
    public abstract function obrisi();
}
?>