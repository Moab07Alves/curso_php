<?php

class Humano {}

class Animal {}

class Professor extends Humano {}

$marcos = new Humano;

$turca = new Animal;

if ($marcos instanceof Humano) {
    echo "Marcos é um Humano <br>";
} else {
    echo "Marcos não é humano <br>";
}

if ($turca instanceof Professor) {
    echo "A Turca é um Humano <br>";
} else {
    echo "A Turca não é um Humano <br>";
}

$pedro = new Professor;

if ($pedro instanceof Professor) {
    echo "Pedro é um Professor <br>";
} else {
    echo "Pedro não é Professor <br>";
}

if ($pedro instanceof Humano) {
    echo "Pedro é um Humano <br>";
} else {
    echo "Pedro não é humano <br>";
}

if ($turca instanceof Professor) {
    echo "A Turca é um Professor <br>";
} else {
    echo "A Turca não é um Professor <br>";
}
